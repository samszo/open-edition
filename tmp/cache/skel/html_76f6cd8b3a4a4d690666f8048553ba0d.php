<?php

/*
 * Squelette : ../plugins/auto/taa/v1.3.14/prive/objets/liste/articles_compacte.html
 * Date :      Wed, 23 Dec 2015 13:09:20 GMT
 * Compile :   Wed, 04 May 2016 09:29:47 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/taa/v1.3.14/prive/objets/liste/articles_compacte.html
// Temps de compilation total: 1.051 ms
//

function html_76f6cd8b3a4a4d690666f8048553ba0d($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'

	' .
(($t1 = strval(interdire_scripts((((((filtre_info_plugin_dist("tradrub", "est_actif")) OR (interdire_scripts(filtre_info_plugin_dist("trad_rub", "est_actif")))) ?' ' :'')) ?' ' :''))))!=='' ?
		($t1 . (	'
		' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'id_rubrique', null),true)) ?' ' :''))))!=='' ?
			($t2 . (	'
			' .
		vide($Pile['vars'][$_zzz=(string)'type'] = '_sections'))) :
			'') .
	'
		')) :
		'') .
'


' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette((	'prive/objets/liste/inc-articles_compacte' .
	table_valeur($Pile["vars"], (string)'type', null))) . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/auto/taa/v1.3.14/prive/objets/liste/articles_compacte.html\',\'html_76f6cd8b3a4a4d690666f8048553ba0d\',\'\',6,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>
');

	return analyse_resultat_skel('html_76f6cd8b3a4a4d690666f8048553ba0d', $Cache, $page, '../plugins/auto/taa/v1.3.14/prive/objets/liste/articles_compacte.html');
}
?>