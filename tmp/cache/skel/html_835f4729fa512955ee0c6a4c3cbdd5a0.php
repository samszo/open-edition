<?php

/*
 * Squelette : ../plugins/auto/iextras/v3.3.5/prive/style_prive_plugin_iextras.html
 * Date :      Fri, 15 Apr 2016 04:09:08 GMT
 * Compile :   Tue, 10 May 2016 14:28:46 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/iextras/v3.3.5/prive/style_prive_plugin_iextras.html
// Temps de compilation total: 0.171 ms
//

function html_835f4729fa512955ee0c6a4c3cbdd5a0($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'.champs_extras_objets .saisies_objet { font-size:90%; position:relative; top:-.2em; }
.champs_extras_objets .saisies_objet .item { padding:.3em 0; overflow: hidden; }
.champs_extras_objets .saisies_objet .item.solo { padding:0; }
.champs_extras_objets .saisies_objet .item + .item { border-top: 1px solid #ddd;  }
.champs_extras_objets .saisies_objet img { vertical-align:middle; margin-right:.2em; }
.champs_extras_objets .saisies_objet .bouton_action_post { float:' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'right', null),true)) .
'; margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
':.5em; }
.champs_extras_objets .saisies_objet .bouton_action_post .submit { font-size: .9em; }
');

	return analyse_resultat_skel('html_835f4729fa512955ee0c6a4c3cbdd5a0', $Cache, $page, '../plugins/auto/iextras/v3.3.5/prive/style_prive_plugin_iextras.html');
}
?>