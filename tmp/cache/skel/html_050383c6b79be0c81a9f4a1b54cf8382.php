<?php

/*
 * Squelette : ../plugins-dist/dump/formulaires/sauvegarder.html
 * Date :      Tue, 01 Mar 2016 13:54:40 GMT
 * Compile :   Wed, 04 May 2016 09:28:06 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/dump/formulaires/sauvegarder.html
// Temps de compilation total: 4.561 ms
//

function html_050383c6b79be0c81a9f4a1b54cf8382($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
<div class="formulaire_spip formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
' formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'-' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), 'nouveau'),true)) .
'">

	' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_ok', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_ok">' . $t1 . '</p>') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_erreur', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_erreur">' . $t1 . '</p>') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true))))!=='' ?
		($t1 . (	'
	<form method=\'post\' action=\'' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
	'\'><div>
		
		' .
		'<div>' .
	form_hidden(@$Pile[0]['action']) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(!empty($Pile[0]['_hidden']) ? @$Pile[0]['_hidden'] : '') .
	'</div>' .
	'
		<input type=\'hidden\' name=\'reinstall\' value=\'non\' />
	  <div class="editer-groupe">
	  	' .
	vide($Pile['vars'][$_zzz=(string)'name'] = 'nom_sauvegarde') .
	vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	vide($Pile['vars'][$_zzz=(string)'obli'] = 'obligatoire') .
	'<div class="editer editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
			(' ' . $t2) :
			'') .
	((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
	    	<label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'">' .
	_T('dump:label_nom_fichier_sauvegarde') .
	'</label>
				' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('<span class=\'erreur_message\'>' . $t2 . '</span>') :
			'') .
	'
				<input type=\'text\' class=\'text\' name=\'' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'\' id=\'' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'\' value="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true)) .
	'" />
	    </div>
	  	' .
	vide($Pile['vars'][$_zzz=(string)'name'] = 'tables') .
	vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	vide($Pile['vars'][$_zzz=(string)'obli'] = 'obligatoire') .
	(($t2 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'_tables', null))))!=='' ?
			((	'<div class="editer editer_' .
		table_valeur($Pile["vars"], (string)'name', null) .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
				(' ' . $t3) :
				'') .
		((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
				(' ' . ' ' . 'erreur') :
				'') .
		'">
	    	<label>' .
		_T('public|spip|ecrire:install_tables_base') .
		'</label>
				' .
		(($t3 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
				('<span class=\'erreur_message\'>' . $t3 . '</span>') :
				'') .
		'
				<div class="choix">
					<input type="checkbox" name="tout_sauvegarder" id="tout_sauvegarder" value="oui"' .
		(($t3 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'tout_sauvegarder', null),true)) ?' ' :''))))!=='' ?
				($t3 . 'checked="checked"') :
				'') .
		'
						onclick="$(this).blur();"
						onchange="jQuery(this).prop(\'checked\')?jQuery(\'#liste_tables\').hide(\'fast\'):jQuery(\'#liste_tables\').show(\'fast\');"
					/><label for="tout_sauvegarder">' .
		_T('dump:tout_sauvegarder') .
		(($t3 = strval(interdire_scripts(((((entites_html(table_valeur(@$Pile[0], (string)'_prefixe', null),true) == 'spip')) ?'' :' ') ? interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_prefixe', null),true)):''))))!=='' ?
				((	'
					<br />(' .
			_T('public|spip|ecrire:texte_choix_table_prefix') .
			'<b> ') . $t3 . '</b>)') :
				'') .
		'</label>
					<div id="liste_tables"' .
		(($t3 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'tout_sauvegarder', null),true)) ?' ' :''))))!=='' ?
				($t3 . 'style="display:none;"') :
				'') .
		'>
					') . $t2 . '
					</div>
				</div>
	    </div>') :
			'') .
	'
	  </div>
	  ' .
	'
	  <!--extra-->
	  <p class=\'boutons\'><span class=\'image_loading\'>&nbsp;</span><input type=\'submit\' class=\'submit\' value=\'' .
	_T('dump:texte_sauvegarde_base') .
	'\' /></p>
	</div></form>
	')) :
		'') .
'
</div>');

	return analyse_resultat_skel('html_050383c6b79be0c81a9f4a1b54cf8382', $Cache, $page, '../plugins-dist/dump/formulaires/sauvegarder.html');
}
?>