<?php

/*
 * Squelette : ../prive/squelettes/page.html
 * Date :      Tue, 01 Mar 2016 13:54:32 GMT
 * Compile :   Wed, 04 May 2016 09:28:05 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/page.html
// Temps de compilation total: 0.422 ms
//

function html_5e18c4413203b079977924012d065030($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/structure') . ', array_merge('.var_export($Pile[0],1).',array(\'type-page\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'type-page', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'exec', null),true))),true))) . ',
	\'composition\' => ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'composition', null), ''),true))) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/page.html\',\'html_5e18c4413203b079977924012d065030\',\'\',1,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>';

	return analyse_resultat_skel('html_5e18c4413203b079977924012d065030', $Cache, $page, '../prive/squelettes/page.html');
}
?>