<?php

class CrudController extends Zend_Controller_Action
{

	public function indexAction()
    {
    	
    }
	
    public function insertAction()
    {
    		//récupère les paramètres
    		$params = $this->_request->getParams();
    		$this->view->rs = array();
    		/*
		idAuteur:1
		idRubNum:170
		idRubRevue:57
		idRubRevueTrad:60
		titre-fr:test
		titre-en:test
		sous-titre-fr:test
		sous-titre-en:test
		resume-fr:test
		resume-en:test
		mc-fr:mot-clef 1, mot-clef 2, mot-clef 3
		mc-en:mot-clef 1, mot-clef 2, mot-clef 3
		auteurs:Auteur, appartenance, email; Auteur, appartenance, email;
    		 */
    		
    		/*enlève les paramètres Zend
    		unset($params['controller']);
    		unset($params['action']);
    		unset($params['module']);
    		*/
    		
    		
    		//création des objets
    		$dbArt = new Model_DbTable_Spip_articles();
    		$dbRub = new Model_DbTable_Spip_rubriques();
    		$dbMC = new Model_DbTable_Spip_mots();
		$dbML = new Model_DbTable_Spip_motsliens();
    		$dbAut = new Model_DbTable_Spip_auteurs();
    		$dbAutL = new Model_DbTable_Spip_auteursliens();
    		
		//récupération du numéro de la revue
		$arrRubNum = $dbRub->findById_rubrique($params['idRubNum']);
		$langue = $arrRubNum["lang"];
		$idSecteur = $langue == "fr" ? 1 : 2;
		$this->view->rs["idRub"]=$arrRubNum["id_rubrique"];
		$this->view->rs["langue"]=$langue;
		
		//création de l'article principal
		$idArt = $dbArt->ajouter(array(
			"id_rubrique"=>$arrRubNum["id_rubrique"]
			,"titre"=>$params['titre-'.$langue]
			//,"soustitre"=>$params['sous-titre-'.$langue]
			,"descriptif"=>$params['resume-'.$langue]
			//,"texte"=>$params['editeurtexte-'.$langue]
			,"statut"=>"prop"			
			,"id_secteur"=>$idSecteur
			,"lang"=>$langue
			,"langue_choisie"=>"oui"				
			//,"dom_p"=>$arrRubNum["dom-p"]	
			),false);
			
    		//vérifie s'il faut créer la traduction du numéro
		$langueTrad = $langue == "fr" ? "en" : "fr";
		$idSecteurTrad = $langueTrad == "fr" ? 1 : 2;
		if($arrRubNum["id_trad"]==0 && $params['idRubRevueTrad']){			
			//ajoute la rubrique pour la traduction du numéro
			$idRubTrad = $dbRub->ajouter(array(
				"id_parent"=>$params['idRubRevueTrad']
				,"id_secteur"=>$idSecteurTrad
				,"lang"=>$langueTrad,"id_trad"=>$arrRubNum["id_rubrique"]
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
			$idRubTrad = $params['idRubNumTrad']; 
		}			
		$this->view->rs["idRubTrad"]=$idRubTrad;
		$this->view->rs["langueTrad"]=$langueTrad;
		
		if($params['idRubRevueTrad']){			
			//création de la traduction
	    		$idArtTrad = $dbArt->ajouter(array(
				"id_rubrique"=>$idRubTrad
				,"titre"=>$params['titre-'.$langueTrad]
				//,"soustitre"=>$params['sous-titre-'.$langueTrad]
				,"descriptif"=>$params['resume-'.$langueTrad]
				,"statut"=>"prop"			
				,"id_secteur"=>$idSecteur
				,"lang"=>$langueTrad
				,"langue_choisie"=>"oui"				
				,"id_trad"=>$idArt
				//,"dom_p"=>$arrRubNum["dom-p"]				
				),false);
			//met à jour la traduction de l'article de référence
			$dbArt->edit($idArt, array("id_trad"=>$idArt));
			$this->view->rs["idArtTrad"]=$idArtTrad;
		}
				
		//ajoute les mots clefs
		$arrMcFr = explode(",",$params["mc-fr"]);
		for ($i = 0; $i < count($arrMcFr); $i++) {
			//création du mot clef
			$idMot = $dbMC->ajouter(array("titre"=>"<multi>[fr]".$arrMcFr[$i]."</multi>","id_groupe"=>2));
			//ajoute aux articles
			if($langue=="fr")
				$dbML->ajouter(array("id_mot"=>$idMot,"objet"=>"article","id_objet"=>$idArt));
			elseif($params['idRubRevueTrad'])
				$dbML->ajouter(array("id_mot"=>$idMot,"objet"=>"article","id_objet"=>$idArtTrad));
		}
		$arrMcEn = explode(",",$params["mc-en"]);
		for ($i = 0; $i < count($arrMcEn); $i++) {
			//création du mot clef
			$idMot = $dbMC->ajouter(array("titre"=>"<multi>[en]".$arrMcEn[$i]."</multi>","id_groupe"=>2));
			//ajoute aux articles
			if($langue=="en")
				$dbML->ajouter(array("id_mot"=>$idMot,"objet"=>"article","id_objet"=>$idArt));
			elseif($params['idRubRevueTrad'])
				$dbML->ajouter(array("id_mot"=>$idMot,"objet"=>"article","id_objet"=>$idArtTrad));
		}
		//ajoute des auteurs
		$i=0;
		$chapeau = "";
		$this->view->rs["auteurs"]=array();
		while (isset($params["auteur-nom-".$i])) {
			//création de l'auteur
			$idAut = $dbAut->ajouter(array("nom"=>$params["auteur-nom-".$i]
				,"statut"=>"1comite"
				,"email"=>$params["auteur-email-".$i]	
				,"isni"=>$params["auteur-isni-".$i]));	
				//lien avec les articles
			$dbAutL->ajouter(array("id_auteur"=>$idAut,"id_objet"=>$idArt,"objet"=>"article","role"=>"redacteur"));		
			//mis à jour de l'auteur pour éviter les doublons 
			$dbAut->edit($idAut, array("appartenance"=>$params["auteur-appart-".$i]));	
			//lien avec les articles			
			if($params['idRubRevueTrad'])$dbAutL->ajouter(array("id_auteur"=>$idAut,"id_objet"=>$idArtTrad,"objet"=>"article","role"=>"redacteur"));					
			//définition du chapeau pour les appartenances
			$chapeau .= "[->auteur".$idAut."] ".$params["auteur-appart-".$i].", "; 
			$this->view->rs["auteurs"][]=$idAut;
			$i++;
		}
		//met à jour les chapeaux
		if($chapeau)$chapeau = substr($chapeau,0,-2);
		$dbArt->edit($idArt,array("chapo"=>$chapeau));
		if($params['idRubRevueTrad'])$dbArt->edit($idArtTrad,array("chapo"=>$chapeau));    		

		/*ajoute l'auteur de la proposition
		$dbAutL->ajouter(array("id_auteur"=>$params["idAuteur"],"id_objet"=>$idArt,"objet"=>"article","role"=>"proposeur"));		
		if($params['idRubRevueTrad'])$dbAutL->ajouter(array("id_auteur"=>$params["idAuteur"],"id_objet"=>$idArtTrad,"objet"=>"article","role"=>"proposeur"));					
		*/
		
		$this->view->message="L'article a été ajouté.";
		$this->view->rs["idArt"]=$idArt;

		
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
    		
    		switch ($params['type']) {
    			case "artEmbPdf":
    				$dbArt = new Model_DbTable_Spip_articles();
    				$dbArt->edit($params['idArt'], array("texte"=>"<emb".$params['idDoc']."|largeur=100%|hauteur=600>"));
    			break;
    		}
    		
    		$this->view->message = "Les modifications ont été effectuées.";
	
    } 
    
}



