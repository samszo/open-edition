<?php

/*
 * Squelette : ../prive/squelettes/top/dist.html
 * Date :      Wed, 17 Feb 2016 11:33:06 GMT
 * Compile :   Tue, 10 May 2016 14:28:47 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/top/dist.html
// Temps de compilation total: 0.039 ms
//

function html_e3d8346958f064437f0438d31920c0d9($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '<!-- top -->';

	return analyse_resultat_skel('html_e3d8346958f064437f0438d31920c0d9', $Cache, $page, '../prive/squelettes/top/dist.html');
}
?>