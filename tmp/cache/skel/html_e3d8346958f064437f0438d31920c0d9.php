<?php

/*
 * Squelette : ../prive/squelettes/top/dist.html
 * Date :      Tue, 01 Mar 2016 13:54:32 GMT
 * Compile :   Wed, 04 May 2016 09:28:06 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/top/dist.html
// Temps de compilation total: 0.087 ms
//

function html_e3d8346958f064437f0438d31920c0d9($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '<!-- top -->';

	return analyse_resultat_skel('html_e3d8346958f064437f0438d31920c0d9', $Cache, $page, '../prive/squelettes/top/dist.html');
}
?>