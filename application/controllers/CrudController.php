<?php

class CrudController extends Zend_Controller_Action
{
    
    public function insertAction()
    {
    		//récupère les paramètres
    		$params = $this->_request->getParams();
    		$this->view->rs = $params;
    		
    		//enlève les paramètres Zend
    		unset($params['controller']);
    		unset($params['action']);
    		unset($params['module']);
    		
    		//création des objets
    		$dbArt = new Model_DbTable_Spip_articles();
    		$dbRub = new Model_DbTable_Spip_rubriques();
    		$dbMC = new Model_DbTable_Spip_mots();
		$dbML = new Model_DbTable_Spip_motsliens();
    		$dbAut = new Model_DbTable_Spip_auteurs();
    		$dbAutL = new Model_DbTable_Spip_auteursliens();
    		
		//récupération du numéro et de la langue
		$arrNum = explode("-",$params['numero']);
		$idRub = $arrNum[0];
		$langue = $arrNum[1];
		$idSecteur = $langue == "fr" ? 1 : 2;
		$this->view->rs["idRub"]=$idRub;
		$this->view->rs["langue"]=$langue;
		
		//création de l'article principal
		$idArt = $dbArt->ajouter(array(
			"id_rubrique"=>$idRub
			,"titre"=>$params['titre-'.$langue]
			,"soustitre"=>$params['sous-titre-'.$langue]
			,"descriptif"=>$params['resume-'.$langue]
			,"texte"=>$params['editeurtexte-'.$langue]
			,"statut"=>"prop"			
			,"id_secteur"=>$idSecteur
			,"lang"=>$langue
			,"langue_choisie"=>"oui"				
			,"dom_p"=>$params["dom-p"]	
			),false);
			
    		//vérifie s'il faut récupérer la traduction du numéro
		if(count($arrNum)==2){
			$langueTrad = $langue == "fr" ? "en" : "fr";
			//récupère le numéro
			$arrRubNum = $dbRub->findById_rubrique($idRub);
			//vérifie s'il faut créer la traduction du numéro
			if($arrRubNum["id_trad"]==0){
				$idSecteur = $langueTrad == "fr" ? 1 : 2;
				//récupère la traduction de la revue
				$arrRubRevue = $dbRub->findById_rubrique($params['revue']);
				$this->view->rs["idRubRevue"]=$params['revue'];
				$this->view->rs["idRubRevueTrad"]=$arrRubRevue["id_trad"];				
				
				//ajoute la rubrique pour la traduction du numéro
				$idRubTrad = $dbRub->ajouter(array(
					"parent"=>$arrRubRevue["id_trad"]
					,"id_secteur"=>$idSecteur
					,"lang"=>$langueTrad,"id_trad"=>$idRub
					,"titre"=>$arrRubNum["titre"]." à traduire en ".$langueTrad
					,"texte"=>$arrRubNum["texte"]
					,"type_rubrique"=>$arrRubNum["type_rubrique"]				
					,"composition"=>$arrRubNum["composition"]				
					,"profondeur"=>$arrRubNum["profondeur"]				
					,"redac_chef"=>$arrRubNum["redac_chef"]				
					,"dom_p"=>$arrRubNum["dom_p"]				
					,"langue_choisie"=>"oui"	
					));
				//copie les mots clefs
				//$dbML->copierObj("rubrique",$idRub,"rubrique",$idRubTrad);
			}else{
				$idRubTrad = $arrRubNum["id_trad"]; 
			}			
		}else{
    			$idRubTrad = $arrNum[2];
    			$langueTrad = $arrNum[3];
    		}
		$this->view->rs["idRubTrad"]=$idRubTrad;
		$this->view->rs["langueTrad"]=$langueTrad;
    		  		
		//création de la traduction
		$idSecteur = $langueTrad == "fr" ? 1 : 2;
    		$idArtTrad = $dbArt->ajouter(array(
			"id_rubrique"=>$idRubTrad
			,"titre"=>$params['titre-'.$langueTrad]
			,"soustitre"=>$params['sous-titre-'.$langueTrad]
			,"descriptif"=>$params['resume-'.$langueTrad]
			,"texte"=>$params['editeurtexte-'.$langueTrad]			
			,"statut"=>"prop"			
			,"id_secteur"=>$idSecteur
			,"lang"=>$langueTrad
			,"langue_choisie"=>"oui"				
			,"id_trad"=>$idArt
			,"dom_p"=>$params["dom-p"]				
			),false);
		//mise à jour de l'article de référence
		$dbArt->edit($idArt,array("id_trad"=>$idArtTrad));
		
		//ajoute les mots clefs
		$arrMcFr = explode(",",$params["mc-fr"]);
		$arrMcEn = explode(",",$params["mc-en"]);
		for ($i = 0; $i < count($arrMcFr); $i++) {
			//création du mot clef
			$idMot = $dbMC->ajouter(array("titre"=>"<multi>[fr]".$arrMcFr[$i]."[en]".$arrMcEn[$i]."</multi>","id_groupe"=>2));
			//ajoute aux articles
			$dbML->ajouter(array("id_mot"=>$idMot,"objet"=>"article","id_objet"=>$idArt));
			$dbML->ajouter(array("id_mot"=>$idMot,"objet"=>"article","id_objet"=>$idArtTrad));
		}
    		
		//ajoute des auteurs
		$arrAut = explode(";",$params["auteurs"]);
		$chapeau = "";
		foreach ($arrAut as $a) {
			$arrA = explode(",",$a);
			//création de l'auteur
			$idAut = $dbAut->ajouter(array("nom"=>$arrA[0],"statut"=>"1comite","email"=>$arrA[2]));	
			//lien avec les articles
			$dbAutL->ajouter(array("id_auteur"=>$idAut,"id_objet"=>$idArt,"objet"=>"article"));		
			$dbAutL->ajouter(array("id_auteur"=>$idAut,"id_objet"=>$idArtTrad,"objet"=>"article"));					
			//définition du chapeau pour les appartenances
			$chapeau .= "[->auteur".$idAut."] ".$arrA[1].", "; 
		}
		//met à jour les chapeaux
		$chapeau = substr($chapeau,0,-2);
		$dbArt->edit($idArt,array("chapo"=>$chapeau));
		$dbArt->edit($idArtTrad,array("chapo"=>$chapeau));    		
    		
		$this->view->message="L'article a été ajouté.";
		$this->view->rs["idArt"]=$idArt;
		$this->view->rs=json_encode($this->view->rs);
		
    }

    public function updateAction()
    {    	
    		//récupère les paramètres
    		$params = $this->_request->getParams();
    		$this->view->rs = json_encode($params);
    		
    		//enlève les paramètres Zend
    		unset($params['controller']);
    		unset($params['action']);
    		unset($params['module']);
    		//et les paramètres de l'ajout
    		unset($params['obj']);
    		unset($params['recid']);
    		
    		$this->view->message = "Les modifications ont été effectuées.";
	
    } 
    
}



