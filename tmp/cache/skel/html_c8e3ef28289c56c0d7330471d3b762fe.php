<?php

/*
 * Squelette : ../plugins-dist/sites/prive/objets/liste/sites.html
 * Date :      Wed, 17 Feb 2016 10:17:30 GMT
 * Compile :   Tue, 10 May 2016 14:28:47 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/sites/prive/objets/liste/sites.html
// Temps de compilation total: 0.123 ms
//

function html_c8e3ef28289c56c0d7330471d3b762fe($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/syndic') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/sites/prive/objets/liste/sites.html\',\'html_c8e3ef28289c56c0d7330471d3b762fe\',\'\',1,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>';

	return analyse_resultat_skel('html_c8e3ef28289c56c0d7330471d3b762fe', $Cache, $page, '../plugins-dist/sites/prive/objets/liste/sites.html');
}
?>