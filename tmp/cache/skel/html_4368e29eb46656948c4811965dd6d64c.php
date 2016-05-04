<?php

/*
 * Squelette : ../plugins-dist/dump/prive/squelettes/contenu/sauvegarder.html
 * Date :      Tue, 01 Mar 2016 13:54:40 GMT
 * Compile :   Wed, 04 May 2016 09:28:06 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/dump/prive/squelettes/contenu/sauvegarder.html
// Temps de compilation total: 3.252 ms
//

function html_4368e29eb46656948c4811965dd6d64c($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('sauvegarder')?" ":""))) .
'
' .
vide($Pile['vars'][$_zzz=(string)'fin'] = interdire_scripts(dump_verifie_sauvegarde_finie(entites_html(table_valeur(@$Pile[0], (string)'status', null),true)))) .
(!(table_valeur($Pile["vars"], (string)'fin', null))  ?
		(' ' . (	'
	<h1 class="grostitre">' .
	_T('dump:texte_sauvegarde') .
	'</h1>

	' .
	vide($Pile['vars'][$_zzz=(string)'dir_dump'] = concat('<i>',joli_repertoire(dump_repertoire('')),'</i>')) .
	vide($Pile['vars'][$_zzz=(string)'dir_img'] = concat('<i>',interdire_scripts(joli_repertoire(eval('return '.'_DIR_IMG'.';'))),'</i>')) .
	vide($Pile['vars'][$_zzz=(string)'spipnet'] = interdire_scripts(concat(table_valeur(eval('return '.'$GLOBALS'.';'),'home_server'),'/',spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']),'_article1489.html'))) .
	boite_ouvrir('', 'info') .
	'<p>' .
	_T('dump:texte_admin_tech_01', array('dossier' => table_valeur($Pile["vars"], (string)'dir_dump', null),
'img' => table_valeur($Pile["vars"], (string)'dir_img', null))) .
	'</p>
	<p>' .
	_T('dump:texte_admin_tech_02', array('spipnet' => table_valeur($Pile["vars"], (string)'spipnet', null))) .
	'</p>
	' .
	boite_fermer() .
	'

	<div class="ajax">
		' .
	executer_balise_dynamique('FORMULAIRE_SAUVEGARDER',
	array(),
	array('../plugins-dist/dump/prive/squelettes/contenu/sauvegarder.html','html_4368e29eb46656948c4811965dd6d64c','',16,$GLOBALS['spip_lang'])) .
	'
	</div>

	' .
	(($t2 = strval(recuperer_fond( 'formulaires/inc-lister-sauvegardes' , array_merge($Pile[0],array('name' => '' ,
	'id' => 'sauvegarde' ,
	'titre' => _T('dump:sauvegardes_existantes') ,
	'download' => invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('webmestre')?" ":"")) ,
	'delete' => invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('webmestre')?" ":"")) )), array('ajax' => ($v=( @$Pile[0]['ajax'] ))?$v:true,'compil'=>array('../plugins-dist/dump/prive/squelettes/contenu/sauvegarder.html','html_4368e29eb46656948c4811965dd6d64c','',19,$GLOBALS['spip_lang'])), _request('connect'))))!=='' ?
			('
		' . $t2 . '
	') :
			'') .
	'
')) :
		'') .
'
' .
((table_valeur($Pile["vars"], (string)'fin', null))  ?
		(' ' . (	'
	<h1>' .
	_T('dump:info_sauvegarde') .
	'</h1>

	' .
	vide($Pile['vars'][$_zzz=(string)'erreurs'] = '') .
	vide($Pile['vars'][$_zzz=(string)'taille'] = interdire_scripts(dump_taille_sauvegarde(entites_html(table_valeur(@$Pile[0], (string)'status', null),true)))) .
	(!(table_valeur($Pile["vars"], (string)'taille', null))  ?
			(' ' . (	'
	' .
		vide($Pile['vars'][$_zzz=(string)'archive'] = concat(concat('<b>',interdire_scripts(joli_repertoire(dump_nom_sauvegarde(entites_html(table_valeur(@$Pile[0], (string)'status', null),true))))),'</b>')) .
		vide($Pile['vars'][$_zzz=(string)'erreurs'] = ' ') .
		boite_ouvrir('', 'error') .
		_T('dump:erreur_taille_sauvegarde', array('fichier' => table_valeur($Pile["vars"], (string)'archive', null))) .
		'
	' .
		boite_fermer() .
		'
	')) :
			'') .
	'

	' .
	(($t2 = strval(interdire_scripts(dump_afficher_erreurs(entites_html(table_valeur(@$Pile[0], (string)'status', null),true)))))!=='' ?
			((	'
	' .
		boite_ouvrir('', 'error') .
		vide($Pile['vars'][$_zzz=(string)'erreurs'] = ' ')) . $t2 . (	'
	' .
		boite_fermer() .
		'
	')) :
			'') .
	'

	' .
	(!(table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . (	'
	' .
		boite_ouvrir('', 'success') .
		vide($Pile['vars'][$_zzz=(string)'archive'] = concat(concat(concat(concat('<b>',interdire_scripts(joli_repertoire(dump_nom_sauvegarde(entites_html(table_valeur(@$Pile[0], (string)'status', null),true))))),'</b> ('),taille_en_octets(table_valeur($Pile["vars"], (string)'taille', null))),')')) .
		'

	<p>
	' .
		_T('dump:info_sauvegarde_reussi_02', array('archive' => table_valeur($Pile["vars"], (string)'archive', null))) .
		' ' .
		_T('dump:info_sauvegarde_reussi_03') .
		' ' .
		_T('dump:info_sauvegarde_reussi_04') .
		'
	</p>

	' .
		(($t3 = strval(interdire_scripts(dump_afficher_tables_sauvegardees(entites_html(table_valeur(@$Pile[0], (string)'status', null),true)))))!=='' ?
				((	'<h4>' .
			_T('dump:details_sauvegarde') .
			'</h4>
	') . $t3) :
				'') .
		'
	')) :
			'') .
	'
	
	' .
	boite_fermer() .
	'
')) :
		''));

	return analyse_resultat_skel('html_4368e29eb46656948c4811965dd6d64c', $Cache, $page, '../plugins-dist/dump/prive/squelettes/contenu/sauvegarder.html');
}
?>