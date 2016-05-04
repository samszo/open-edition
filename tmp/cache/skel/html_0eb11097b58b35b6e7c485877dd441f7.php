<?php

/*
 * Squelette : ../prive/squelettes/extra/dist.html
 * Date :      Tue, 01 Mar 2016 13:54:32 GMT
 * Compile :   Wed, 04 May 2016 09:28:06 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/extra/dist.html
// Temps de compilation total: 0.068 ms
//

function html_0eb11097b58b35b6e7c485877dd441f7($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '
<!-- extra -->';

	return analyse_resultat_skel('html_0eb11097b58b35b6e7c485877dd441f7', $Cache, $page, '../prive/squelettes/extra/dist.html');
}
?>