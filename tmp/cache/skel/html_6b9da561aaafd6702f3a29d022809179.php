<?php

/*
 * Squelette : ../plugins/auto/taa/v1.3.14/prive/objets/liste/inc-articles_row.html
 * Date :      Wed, 23 Dec 2015 13:09:20 GMT
 * Compile :   Wed, 04 May 2016 09:29:47 GMT
 * Boucles :   _auteurs, _art_trads, _art
 */ 

function BOUCLE_auteurshtml_6b9da561aaafd6702f3a29d022809179(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_auteurs';
		$command['from'] = array('auteurs' => 'spip_auteurs','L1' => 'spip_auteurs_liens');
		$command['type'] = array();
		$command['groupby'] = array("auteurs.id_auteur");
		$command['select'] = array("auteurs.id_auteur",
		"auteurs.nom");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('auteurs','id_auteur'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('auteurs.statut','!5poubelle','!5poubelle',''), 
			array('=', 'L1.id_objet', sql_quote($Pile[$SP]['id_article'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'L1.objet', sql_quote('article')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/taa/v1.3.14/prive/objets/liste/inc-articles_row.html','html_6b9da561aaafd6702f3a29d022809179','_auteurs',6,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t1 = (
'<a href="' .
generer_url_entite($Pile[$SP]['id_auteur'],'auteur') .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0])) .
'</a>');
		$t0 .= ((strlen($t1) && strlen($t0)) ? ', ' : '') . $t1;
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_auteurs @ ../plugins/auto/taa/v1.3.14/prive/objets/liste/inc-articles_row.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_art_tradshtml_6b9da561aaafd6702f3a29d022809179(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['id_mot']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['id_auteur']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	$in2 = array();
	$in2[]= 'prepa';
	$in2[]= 'publie';
	$in2[]= 'prop';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_art_trads';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_mots_liens','L2' => 'spip_auteurs_liens');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("articles.id_trad",
		"articles.id_article",
		"articles.statut",
		"articles.id_rubrique",
		"articles.titre",
		"articles.lang");
		$command['join'] = array('L1' => array('articles','id_objet','id_article','L1.objet='.sql_quote('article')), 'L2' => array('articles','id_objet','id_article','L2.objet='.sql_quote('article')));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['orderby'] = array(((!sql_quote($in2) OR sql_quote($in2)==="''") ? 0 : ('FIELD(articles.statut,' . sql_quote($in2) . ')')));
	$command['where'] = 
			array(
			array('OR', 
			array('AND', 
			array('=', 'articles.id_trad', 0), 
			array('=', 'articles.id_article', sql_quote($Pile[$SP]['id_article']))), 
			array('AND', 
			array('>', 'articles.id_trad', 0), 
			array('=', 'articles.id_trad', sql_quote($Pile[$SP]['id_trad'])))), (!(is_array(@$Pile[0]['id_mot'])?count(@$Pile[0]['id_mot']):strlen(@$Pile[0]['id_mot'])) ? '' : ((is_array(@$Pile[0]['id_mot'])) ? sql_in('L1.id_mot',sql_quote($in)) : 
			array('=', 'L1.id_mot', sql_quote(@$Pile[0]['id_mot'],'','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_auteur'])?count(@$Pile[0]['id_auteur']):strlen(@$Pile[0]['id_auteur'])) ? '' : ((is_array(@$Pile[0]['id_auteur'])) ? sql_in('L2.id_auteur',sql_quote($in1)) : 
			array('=', 'L2.id_auteur', sql_quote(@$Pile[0]['id_auteur'],'','bigint(21) NOT NULL DEFAULT \'0\'')))), sql_in('articles.statut',sql_quote($in2)), 
			array('NOT', 
			array('=', 'articles.id_article', sql_quote($Pile[$SP]['id_article'],'','bigint(21) NOT NULL AUTO_INCREMENT'))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/taa/v1.3.14/prive/objets/liste/inc-articles_row.html','html_6b9da561aaafd6702f3a29d022809179','_art_trads',14,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
	' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'trads', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'	
		' .
	interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'voir', null),true) != $Pile[$SP]['id_trad']) ? (	'<span>' .
		puce_changement_statut($Pile[$SP]['id_article'],interdire_scripts($Pile[$SP]['statut']),$Pile[$SP]['id_rubrique'],'article') .
		'&nbsp;' .
		invalideur_session($Cache, (((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', 'article', invalideur_session($Cache, $Pile[$SP]['id_article']))?" ":"") ? (	'<a href="' .
			invalideur_session($Cache, generer_url_entite($Pile[$SP]['id_article'],'article')) .
			'" title="' .
			interdire_scripts(invalideur_session($Cache, typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) .
			' / ' .
			_T('public|spip|ecrire:info_numero_abbreviation') .
			invalideur_session($Cache, $Pile[$SP]['id_article']) .
			'">' .
			invalideur_session($Cache, spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])) .
			'</a>'):(	invalideur_session($Cache, spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])) .
			'
				'))) .
		'
			</span>'):'&nbsp;
			')) .
	'
		')) :
		'') .
'
	');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_art_trads @ ../plugins/auto/taa/v1.3.14/prive/objets/liste/inc-articles_row.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_arthtml_6b9da561aaafd6702f3a29d022809179(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['statut']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_art';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_article",
		"articles.id_trad",
		"articles.statut",
		"articles.id_rubrique",
		"articles.titre AS titre_rang",
		"articles.titre",
		"articles.date",
		"articles.lang");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'articles.id_article', sql_quote(@$Pile[0]['id_article'],'','bigint(21) NOT NULL AUTO_INCREMENT')), (!(is_array(@$Pile[0]['statut'])?count(@$Pile[0]['statut']):strlen(@$Pile[0]['statut'])) ? '' : ((is_array(@$Pile[0]['statut'])) ? sql_in('articles.statut',sql_quote($in)) : 
			array('=', 'articles.statut', sql_quote(@$Pile[0]['statut'],'','varchar(10) NOT NULL DEFAULT \'0\'')))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/taa/v1.3.14/prive/objets/liste/inc-articles_row.html','html_6b9da561aaafd6702f3a29d022809179','_art',2,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
vide($Pile['vars'][$_zzz=(string)'id_trad'] = $Pile[$SP]['id_trad']) .
vide($Pile['vars'][$_zzz=(string)'id_article'] = $Pile[$SP]['id_article']) .
'<td class=\'statut\'>' .
puce_changement_statut($Pile[$SP]['id_article'],interdire_scripts($Pile[$SP]['statut']),$Pile[$SP]['id_rubrique'],'article') .
'</td>
	<td class=\'rang\'>' .
recuperer_numero($Pile[$SP]['titre_rang']) .
'</td>
	<td class=\'titre\'>' .
filtrer('image_graver',filtrer('image_reduire',
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'20','26')) .
'<a href="' .
generer_url_entite($Pile[$SP]['id_article'],'article') .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></td>
	<td class=\'auteur\'>' .
BOUCLE_auteurshtml_6b9da561aaafd6702f3a29d022809179($Cache, $Pile, $doublons, $Numrows, $SP) .
'</td>
	<td class=\'date\'>' .
interdire_scripts(affdate_jourcourt(normaliser_date($Pile[$SP]['date']))) .
'</td>
	<td class=\'id\'>' .
invalideur_session($Cache, (((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', 'article', invalideur_session($Cache, $Pile[$SP]['id_article']))?" ":"") ? (	'<a href="' .
	interdire_scripts(invalideur_session($Cache, ((entites_html(table_valeur(@$Pile[0], (string)'mode', null),true) == 'edition_seule') ? invalideur_session($Cache, generer_url_entite($Pile[$SP]['id_article'],'article')):invalideur_session($Cache, generer_url_ecrire('articles_edit',(	'id_article=' .
			invalideur_session($Cache, $Pile[$SP]['id_article']))))))) .
	'">' .
	invalideur_session($Cache, $Pile[$SP]['id_article']) .
	'</a>'):(	invalideur_session($Cache, $Pile[$SP]['id_article']) .
	'
		'))) .
'</td>
	' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'trads', null),true)) ?' ' :''))))!=='' ?
		($t1 . '<td class="trad">') :
		'') .
'	
	
	' .
(($t1 = BOUCLE_art_tradshtml_6b9da561aaafd6702f3a29d022809179($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		($t1 . (	'		
	' .
		(($t3 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'trads', null),true)) ?' ' :''))))!=='' ?
				($t3 . (	'
			<div>
			' .
			interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'voir', null),true) == $Pile[$SP]['id_trad']) ? (	'<a class="ajax" href="' .
				parametre_url(self(),'voir','') .
				'" title="' .
				_T('taa:fermer') .
				'"><img src="' .
				find_in_path('prive/images/deplierbas.gif') .
				'" alt="replier"/></a>'):(	'<a class="ajax" href="' .
				parametre_url(self(),'voir',$Pile[$SP]['id_trad']) .
				'" title="' .
				_T('taa:voir_traductions') .
				'"><img src="' .
				find_in_path('prive/images/deplierhaut.gif') .
				'" alt="deplier"/></a>'))) .
			'
			</div>
	</td>')) :
				'') .
		'
	')) :
		'') .
'		
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_art @ ../plugins/auto/taa/v1.3.14/prive/objets/liste/inc-articles_row.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/taa/v1.3.14/prive/objets/liste/inc-articles_row.html
// Temps de compilation total: 13.285 ms
//

function html_6b9da561aaafd6702f3a29d022809179($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<tr class="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'class', null),true)) .
'">
' .
BOUCLE_arthtml_6b9da561aaafd6702f3a29d022809179($Cache, $Pile, $doublons, $Numrows, $SP) .
'
<tr>

	' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'voir', null),true) == table_valeur($Pile["vars"], (string)'id_trad', null))) ?' ' :''))))!=='' ?
		($t1 . (	'
		' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/inc-articles_trads_detail') . ', array_merge('.var_export($Pile[0],1).',array(\'id_trad\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'id_trad', null)) . ',
	\'id_article\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'id_article', null)) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/auto/taa/v1.3.14/prive/objets/liste/inc-articles_row.html\',\'html_6b9da561aaafd6702f3a29d022809179\',\'\',36,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
		')) :
		'') .
'
	

');

	return analyse_resultat_skel('html_6b9da561aaafd6702f3a29d022809179', $Cache, $page, '../plugins/auto/taa/v1.3.14/prive/objets/liste/inc-articles_row.html');
}
?>