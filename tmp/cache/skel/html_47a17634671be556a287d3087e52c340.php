<?php

/*
 * Squelette : ../prive/squelettes/head/dist.html
 * Date :      Tue, 01 Mar 2016 13:54:32 GMT
 * Compile :   Wed, 04 May 2016 09:28:05 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/head/dist.html
// Temps de compilation total: 0.475 ms
//

function html_47a17634671be556a287d3087e52c340($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'

' .
vide($Pile['vars'][$_zzz=(string)'paramcss'] = parametres_css_prive('')) .
pipeline( 'header_prive' , recuperer_fond( 'prive/squelettes/inclure/head' , array('titre' => @$Pile[0]['titre'] ,
	'minipres' => @$Pile[0]['minipres'] ,
	'paramcss' => table_valeur($Pile["vars"], (string)'paramcss', null) ,
	'espace_prive' => @$Pile[0]['espace_prive'] ), array('compil'=>array('../prive/squelettes/head/dist.html','html_47a17634671be556a287d3087e52c340','',0,$GLOBALS['spip_lang'])), _request('connect')) ));

	return analyse_resultat_skel('html_47a17634671be556a287d3087e52c340', $Cache, $page, '../prive/squelettes/head/dist.html');
}
?>