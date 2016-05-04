<?php

/*
 * Squelette : ../prive/themes/spip/style_prive.css.html
 * Date :      Tue, 01 Mar 2016 13:54:33 GMT
 * Compile :   Wed, 04 May 2016 09:28:05 GMT
 * Boucles :   _css, _cssplugins
 */ 

function BOUCLE_csshtml_67e37baff21b752fcd2e8fa33e3e6501(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(array('typo.css', 'grids.css', 'bando.css', 'icons.css', 'lists.css', 'forms.css', 'picker.css', 'box_skins.css', 'jquery-ui.css', 'content.css', 'exceptions.css', 'theme.css'));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_css';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../prive/themes/spip/style_prive.css.html','html_67e37baff21b752fcd2e8fa33e3e6501','_css',38,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
vide($Pile['vars'][$_zzz=(string)'fond'] = interdire_scripts(substr(find_in_theme(concat($Pile[$SP]['valeur'],'.html')),strlen(constant('_DIR_RACINE')),intval('-5')))) .
'
/*
 * ' .
interdire_scripts($Pile[$SP]['valeur']) .
'::' .
table_valeur($Pile["vars"], (string)'fond', null) .
'
 */
' .
((table_valeur($Pile["vars"], (string)'fond', null))  ?
		(' ' . (	'
	' .
	recuperer_fond( table_valeur($Pile["vars"], (string)'fond', null) , array_merge($Pile[0],array('couleur_claire' => @$Pile[0]['couleur_claire'] ,
	'couleur_foncee' => @$Pile[0]['couleur_foncee'] ,
	'ltr' => @$Pile[0]['ltr'] ,
	'claire' => table_valeur($Pile["vars"], (string)'claire', null) ,
	'foncee' => table_valeur($Pile["vars"], (string)'foncee', null) ,
	'left' => table_valeur($Pile["vars"], (string)'left', null) ,
	'right' => table_valeur($Pile["vars"], (string)'right', null) ,
	'rtl' => table_valeur($Pile["vars"], (string)'rtl', null) ,
	'dir' => table_valeur($Pile["vars"], (string)'dir', null) ,
	'font-size' => table_valeur($Pile["vars"], (string)'font-size', null) ,
	'line-height' => table_valeur($Pile["vars"], (string)'line-height', null) ,
	'margin-bottom' => table_valeur($Pile["vars"], (string)'margin-bottom', null) ,
	'text-indent' => table_valeur($Pile["vars"], (string)'text-indent', null) ,
	'font-family' => table_valeur($Pile["vars"], (string)'font-family', null) ,
	'background-color' => table_valeur($Pile["vars"], (string)'background-color', null) ,
	'color' => table_valeur($Pile["vars"], (string)'color', null) ,
	'lang' => $GLOBALS["spip_lang"] )), array('compil'=>array('../prive/themes/spip/style_prive.css.html','html_67e37baff21b752fcd2e8fa33e3e6501','_css',41,$GLOBALS['spip_lang'])), _request('connect')) .
	'
')) :
		'') .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_css @ ../prive/themes/spip/style_prive.css.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_csspluginshtml_67e37baff21b752fcd2e8fa33e3e6501(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(find_all_in_path('prive/','/style_prive_plugin_'));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_cssplugins';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../prive/themes/spip/style_prive.css.html','html_67e37baff21b752fcd2e8fa33e3e6501','_cssplugins',51,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
vide($Pile['vars'][$_zzz=(string)'fond'] = (	'prive/' .
	interdire_scripts(basename($Pile[$SP]['valeur'],'.html')))) .
recuperer_fond( table_valeur($Pile["vars"], (string)'fond', null) , array_merge($Pile[0],array('couleur_claire' => @$Pile[0]['couleur_claire'] ,
	'couleur_foncee' => @$Pile[0]['couleur_foncee'] ,
	'ltr' => @$Pile[0]['ltr'] ,
	'claire' => table_valeur($Pile["vars"], (string)'claire', null) ,
	'foncee' => table_valeur($Pile["vars"], (string)'foncee', null) ,
	'left' => table_valeur($Pile["vars"], (string)'left', null) ,
	'right' => table_valeur($Pile["vars"], (string)'right', null) ,
	'rtl' => table_valeur($Pile["vars"], (string)'rtl', null) ,
	'dir' => table_valeur($Pile["vars"], (string)'dir', null) ,
	'font-size' => table_valeur($Pile["vars"], (string)'font-size', null) ,
	'line-height' => table_valeur($Pile["vars"], (string)'line-height', null) ,
	'margin-bottom' => table_valeur($Pile["vars"], (string)'margin-bottom', null) ,
	'text-indent' => table_valeur($Pile["vars"], (string)'text-indent', null) ,
	'font-family' => table_valeur($Pile["vars"], (string)'font-family', null) ,
	'background-color' => table_valeur($Pile["vars"], (string)'background-color', null) ,
	'color' => table_valeur($Pile["vars"], (string)'color', null) ,
	'lang' => $GLOBALS["spip_lang"] )), array('compil'=>array('../prive/themes/spip/style_prive.css.html','html_67e37baff21b752fcd2e8fa33e3e6501','_cssplugins',53,$GLOBALS['spip_lang'])), _request('connect')) .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_cssplugins @ ../prive/themes/spip/style_prive.css.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/themes/spip/style_prive.css.html
// Temps de compilation total: 7.690 ms
//

function html_67e37baff21b752fcd2e8fa33e3e6501($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>' .
'<'.'?php header("' . 'Content-Type: text/css; charset=iso-8859-15' . '"); ?'.'>' .
'<'.'?php header("' . 'Vary: Accept-Encoding' . '"); ?'.'>/*
Valeurs par defaut :
' .
vide($Pile['vars'][$_zzz=(string)'claire'] = (	'#' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'couleur_claire', null), 'edf3fe'),true)))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'claire', null)))!=='' ?
		('claire: ' . $t1 . ';') :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'foncee'] = (	'#' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'couleur_foncee', null), '3874b0'),true)))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'foncee', null)))!=='' ?
		('foncee: ' . $t1 . ';') :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'left'] = interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'ltr', null),true),'left','left','right'))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'left', null)))!=='' ?
		('left: ' . $t1 . ';') :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'right'] = interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'ltr', null),true),'left','right','left'))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'right', null)))!=='' ?
		('right: ' . $t1 . ';') :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'rtl'] = interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'ltr', null),true),'left','','_rtl'))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'rtl', null)))!=='' ?
		('rtl: ' . $t1 . ';') :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'dir'] = interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'ltr', null),true),'left','ltr','rtl'))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'dir', null)))!=='' ?
		('dir: ' . $t1 . ';') :
		'') .
'

' .
vide($Pile['vars'][$_zzz=(string)'font-size'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'font-size', null), '0.8125em'),true))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'font-size', null)))!=='' ?
		('font-size: ' . $t1 . ';') :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'line-height'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'line-height', null), '1.385em'),true))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'line-height', null)))!=='' ?
		('line-height: ' . $t1 . ';') :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'margin-bottom'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'margin-bottom', null), table_valeur($Pile["vars"], (string)'line-height', null)),true))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'margin-bottom', null)))!=='' ?
		('margin-bottom: ' . $t1 . ';') :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'text-indent'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'text-indent', null), '50px'),true))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'text-indent', null)))!=='' ?
		('text-indent: ' . $t1 . ';') :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'font-family'] = interdire_scripts(sinon(table_valeur(@$Pile[0], (string)'font-family', null), 'Helvetica, Arial, sans-serif'))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'font-family', null)))!=='' ?
		('font-family: ' . $t1 . ';') :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'background-color'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'background-color', null), '#F8F7F3'),true))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'background-color', null)))!=='' ?
		('background-color : ' . $t1 . ';') :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'color'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'color', null), '#000000'),true))) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'color', null)))!=='' ?
		('color: ' . $t1 . ';') :
		'') .
'
*/




' .
charge_scripts(substr(direction_css(find_in_theme('clear.css'),table_valeur($Pile["vars"], (string)'dir', null)),strlen(constant('_DIR_RACINE'))),false) .
'
' .
charge_scripts(substr(direction_css(find_in_theme('layout.css'),table_valeur($Pile["vars"], (string)'dir', null)),strlen(constant('_DIR_RACINE'))),false) .
'

' .
BOUCLE_csshtml_67e37baff21b752fcd2e8fa33e3e6501($Cache, $Pile, $doublons, $Numrows, $SP) .
'


/*** Plugins ***/

' .
BOUCLE_csspluginshtml_67e37baff21b752fcd2e8fa33e3e6501($Cache, $Pile, $doublons, $Numrows, $SP) .
'

/**** Plugins fin ***/
');

	return analyse_resultat_skel('html_67e37baff21b752fcd2e8fa33e3e6501', $Cache, $page, '../prive/themes/spip/style_prive.css.html');
}
?>