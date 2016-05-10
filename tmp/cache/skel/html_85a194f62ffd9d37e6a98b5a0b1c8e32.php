<?php

/*
 * Squelette : ../plugins/auto/roles/v1.8.2/prive/style_prive_plugin_roles.html
 * Date :      Fri, 06 May 2016 08:06:02 GMT
 * Compile :   Tue, 10 May 2016 14:28:46 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/roles/v1.8.2/prive/style_prive_plugin_roles.html
// Temps de compilation total: 0.034 ms
//

function html_85a194f62ffd9d37e6a98b5a0b1c8e32($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '/* alignement des listes lorsqu\'elles sont sur 2 lignes */
.liste-objets-associer td {vertical-align:middle;}
.liste-objets-associer td {vertical-align:middle;}

/* gérer le sélecteur dropdown, des titres dedans, les boutons.link */
.dropdown-menu .dropdown-header {font-weight:bold; color:#666;}
.formulaire_spip .spip .dropdown-menu li:not(.divider) {
    text-align:left;
    padding:.2em 1em;
}
.dropdown-menu button.link {border-radius:0; box-shadow:none;}


/* adapter le dropdown "modifier" et le caler à droite */
table .role .btn-group:before,
table .role .btn-group:after {
    display: inline-block;
}
table .role .btn-group {float:right;}

/* le dropdow doit passer au-dessus des DIV qui se trouvent en-dessous : en attendant de trouver mieux ! */
.formulaire_editer_liens { z-index:800; }
.formulaire_traduire { z-index:900; }
.formulaire_editer_liens-auteurs { z-index:1000; }

';

	return analyse_resultat_skel('html_85a194f62ffd9d37e6a98b5a0b1c8e32', $Cache, $page, '../plugins/auto/roles/v1.8.2/prive/style_prive_plugin_roles.html');
}
?>