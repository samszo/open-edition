<?php

/*
 * Squelette : ../plugins/auto/taa/v1.3.14/prive/objets/liste/inc-articles_compacte.html
 * Date :      Fri, 15 Apr 2016 04:09:08 GMT
 * Compile :   Tue, 10 May 2016 14:28:47 GMT
 * Boucles :   _liste_art_trie, _liste_art
 */ 

function BOUCLE_liste_art_triehtml_98a3764c05c6840c1a3faf1b06120632(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['id_rubrique']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['id_mot']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	$in2 = array();
	if (!(is_array($a = (@$Pile[0]['id_auteur']))))
		$in2[]= $a;
	else $in2 = array_merge($in2, $a);
	$in3 = array();
	if (!(is_array($a = (@$Pile[0]['statut']))))
		$in3[]= $a;
	else $in3 = array_merge($in3, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_liste_art_trie';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_mots_liens','L2' => 'spip_auteurs_liens');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("articles.id_article",
		"articles.id_trad",
		"articles.lang",
		"articles.titre");
		$command['orderby'] = array('articles.id_article DESC');
		$command['join'] = array('L1' => array('articles','id_objet','id_article','L1.objet='.sql_quote('article')), 'L2' => array('articles','id_objet','id_article','L2.objet='.sql_quote('article')));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array((!(is_array(@$Pile[0]['id_rubrique'])?count(@$Pile[0]['id_rubrique']):strlen(@$Pile[0]['id_rubrique'])) ? '' : ((is_array(@$Pile[0]['id_rubrique'])) ? sql_in('articles.id_rubrique',sql_quote($in)) : 
			array('=', 'articles.id_rubrique', sql_quote(@$Pile[0]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_mot'])?count(@$Pile[0]['id_mot']):strlen(@$Pile[0]['id_mot'])) ? '' : ((is_array(@$Pile[0]['id_mot'])) ? sql_in('L1.id_mot',sql_quote($in1)) : 
			array('=', 'L1.id_mot', sql_quote(@$Pile[0]['id_mot'],'','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_auteur'])?count(@$Pile[0]['id_auteur']):strlen(@$Pile[0]['id_auteur'])) ? '' : ((is_array(@$Pile[0]['id_auteur'])) ? sql_in('L2.id_auteur',sql_quote($in2)) : 
			array('=', 'L2.id_auteur', sql_quote(@$Pile[0]['id_auteur'],'','bigint(21) NOT NULL DEFAULT \'0\'')))), ((@$Pile[0]["where"]) ? (@$Pile[0]["where"]) : ''), (!(is_array(@$Pile[0]['statut'])?count(@$Pile[0]['statut']):strlen(@$Pile[0]['statut'])) ? '' : ((is_array(@$Pile[0]['statut'])) ? sql_in('articles.statut',sql_quote($in3)) : 
			array('=', 'articles.statut', sql_quote(@$Pile[0]['statut'],'','varchar(10) NOT NULL DEFAULT \'0\'')))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/taa/v1.3.14/prive/objets/liste/inc-articles_compacte.html','html_98a3764c05c6840c1a3faf1b06120632','_liste_art_trie',15,$GLOBALS['spip_lang'])
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
(($Pile[$SP]['id_trad'] > '0') ? vide($Pile['vars'][$_zzz=(string)'id_articles'] = array_merge(table_valeur($Pile["vars"], (string)'id_articles', null),array((	$Pile[$SP]['id_trad'] .
				'-1') => $Pile[$SP]['id_article']))):vide($Pile['vars'][$_zzz=(string)'id_articles'] = array_merge(table_valeur($Pile["vars"], (string)'id_articles', null),array((	$Pile[$SP]['id_article'] .
				'-1') => $Pile[$SP]['id_article'])))) .
'
');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_liste_art_trie @ ../plugins/auto/taa/v1.3.14/prive/objets/liste/inc-articles_compacte.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_liste_arthtml_98a3764c05c6840c1a3faf1b06120632(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (table_valeur($Pile["vars"], (string)'id_articles', null)))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['statut']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	// RECHERCHE
	if (!strlen((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")))){
		list($rech_select, $rech_where) = array("0 as points","");
	} else
	{
		$prepare_recherche = charger_fonction('prepare_recherche', 'inc');
		list($rech_select, $rech_where) = $prepare_recherche((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")), "articles", "?","",array (
  'criteres' => 
  array (
    'id_article' => true,
    'statut' => true,
  ),
),"id_article");
	}
	
	$senstri = '';
	$tri = (($t=(isset($Pile[0]['tri'.'_liste_art']))?$Pile[0]['tri'.'_liste_art']:((strncmp('_liste_art','session',7)==0 AND session_get('tri'.'_liste_art'))?session_get('tri'.'_liste_art'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'order', null), 'date'),true))))?tri_protege_champ($t):'');
	if ($tri){
		$senstri = ((intval($t=(isset($Pile[0]['sens'.'_liste_art']))?$Pile[0]['sens'.'_liste_art']:((strncmp('_liste_art','session',7)==0 AND session_get('sens'.'_liste_art'))?session_get('sens'.'_liste_art'):(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_art']))?$Pile[0]['tri'.'_liste_art']:((strncmp('_liste_art','session',7)==0 AND session_get('tri'.'_liste_art'))?session_get('tri'.'_liste_art'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'order', null), 'date'),true))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1);
		$senstri = ($senstri<0)?' DESC':'';
	};
	
	$command['pagination'] = array((isset($Pile[0]['debut_liste_art']) ? $Pile[0]['debut_liste_art'] : null), (($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10));
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_liste_art';
		$command['from'] = array('articles' => 'spip_articles','resultats' => 'spip_resultats');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['join'] = array('resultats' => array('articles','id','id_article'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("articles.id_article",
		"$rech_select",
		"".tri_champ_select($tri)."",
		"articles.lang",
		"articles.titre");
	$command['orderby'] = array(tri_champ_order($tri,$command['from']).$senstri);
	$command['where'] = 
			array(sql_in('articles.id_article',sql_quote($in)), (!(is_array(@$Pile[0]['statut'])?count(@$Pile[0]['statut']):strlen(@$Pile[0]['statut'])) ? '' : ((is_array(@$Pile[0]['statut'])) ? sql_in('articles.statut',sql_quote($in1)) : 
			array('=', 'articles.statut', sql_quote(@$Pile[0]['statut'],'','varchar(10) NOT NULL DEFAULT \'0\'')))), $rech_where?$rech_where:'');
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins/auto/taa/v1.3.14/prive/objets/liste/inc-articles_compacte.html','html_98a3764c05c6840c1a3faf1b06120632','_liste_art',23,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_liste_art']['compteur_boucle'] = 0;
	$Numrows['_liste_art']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_liste_art']) ? $Pile[0]['debut_liste_art'] : _request('debut_liste_art');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_liste_art'] = quete_debut_pagination('id_article',$Pile[0]['@id_article'] = substr($debut_boucle,1),(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10),$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_liste_art']['total']-1)/((($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10)))*((($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10))));
	$debut_boucle = intval($debut_boucle);
	$fin_boucle = min(($tout ? $Numrows['_liste_art']['total'] : $debut_boucle+(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10) - 1), $Numrows['_liste_art']['total'] - 1);
	$Numrows['_liste_art']['grand_total'] = $Numrows['_liste_art']['total'];
	$Numrows['_liste_art']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_liste_art']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_liste_art']['compteur_boucle'] = $debut_boucle;
	
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_liste_art']['compteur_boucle']++;
		if ($Numrows['_liste_art']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_liste_art']['compteur_boucle']-1 > $fin_boucle) break;
		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
	' .
vide($Pile['vars'][$_zzz=(string)'class'] = alterner($Numrows['_liste_art']['compteur_boucle'],'row_odd','row_even')) .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/inc-articles_row') . ', array_merge('.var_export($Pile[0],1).',array(\'trads\' => ' . argumenter_squelette('oui') . ',
	\'id_article\' => ' . argumenter_squelette($Pile[$SP]['id_article']) . ',
	\'class\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'class', null)) . ',
	\'exclus\' => ' . argumenter_squelette('') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins/auto/taa/v1.3.14/prive/objets/liste/inc-articles_compacte.html\',\'html_98a3764c05c6840c1a3faf1b06120632\',\'\',42,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_liste_art @ ../plugins/auto/taa/v1.3.14/prive/objets/liste/inc-articles_compacte.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins/auto/taa/v1.3.14/prive/objets/liste/inc-articles_compacte.html
// Temps de compilation total: 3.804 ms
//

function html_98a3764c05c6840c1a3faf1b06120632($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'

' .
(($t1 = strval(vide($Pile['vars'][$_zzz=(string)'defaut_tri'] = array('date' => interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'date_sens', null), '-1'),true)), 'titre' => '1', 'num titre' => '1', 'id_article' => '1
'))))!=='' ?
		($t1 . '
') :
		'') .
'



' .
vide($Pile['vars'][$_zzz=(string)'id_articles'] = array()) .
BOUCLE_liste_art_triehtml_98a3764c05c6840c1a3faf1b06120632($Cache, $Pile, $doublons, $Numrows, $SP) .
'

' .
(($t1 = BOUCLE_liste_arthtml_98a3764c05c6840c1a3faf1b06120632($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
' .
		filtre_pagination_dist($Numrows["_liste_art"]["grand_total"],
 		'_liste_art',
		isset($Pile[0]['debut_liste_art'])?$Pile[0]['debut_liste_art']:intval(_request('debut_liste_art')),
		(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10), false, '', '', array()) .
		'
<div class="liste-objets articles">
<table class="spip liste">
' .
		(($t3 = strval(interdire_scripts(sinon(table_valeur(@$Pile[0], (string)'titre', null), _T('public|spip|ecrire:info_tous_articles_presents')))))!=='' ?
				('<caption><strong class="caption">' . $t3 . '</strong></caption>') :
				'') .
		'
	<thead>
		<tr class="first_row">
			<th class="statut\'">' .
		lien_ou_expose(parametre_url(parametre_url(self(),(($s=in_array('statut',array('>','<')))?'sens':'tri').'_liste_art',$s?(strpos('< >','statut')-1):'statut'),'var_memotri',strncmp('_liste_art','session',7)==0?(($s=in_array('statut',array('>','<')))?'sens':'tri').'_liste_art':''),(	'<span title="' .
			attribut_html(_T('afficher_objets:info_statut')) .
			'">#</span>'),$s?(((intval($t=(isset($Pile[0]['sens'.'_liste_art']))?$Pile[0]['sens'.'_liste_art']:((strncmp('_liste_art','session',7)==0 AND session_get('sens'.'_liste_art'))?session_get('sens'.'_liste_art'):(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_art']))?$Pile[0]['tri'.'_liste_art']:((strncmp('_liste_art','session',7)==0 AND session_get('tri'.'_liste_art'))?session_get('tri'.'_liste_art'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'order', null), 'date'),true))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','statut')-1)):((($t=(isset($Pile[0]['tri'.'_liste_art']))?$Pile[0]['tri'.'_liste_art']:((strncmp('_liste_art','session',7)==0 AND session_get('tri'.'_liste_art'))?session_get('tri'.'_liste_art'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'order', null), 'date'),true))))?tri_protege_champ($t):'')=='statut'),'ajax') .
		'</th>
			<th class=\'rang\'>' .
		lien_ou_expose(parametre_url(parametre_url(self(),(($s=in_array('num titre',array('>','<')))?'sens':'tri').'_liste_art',$s?(strpos('< >','num titre')-1):'num titre'),'var_memotri',strncmp('_liste_art','session',7)==0?(($s=in_array('num titre',array('>','<')))?'sens':'tri').'_liste_art':''),_T('taa:rang'),$s?(((intval($t=(isset($Pile[0]['sens'.'_liste_art']))?$Pile[0]['sens'.'_liste_art']:((strncmp('_liste_art','session',7)==0 AND session_get('sens'.'_liste_art'))?session_get('sens'.'_liste_art'):(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_art']))?$Pile[0]['tri'.'_liste_art']:((strncmp('_liste_art','session',7)==0 AND session_get('tri'.'_liste_art'))?session_get('tri'.'_liste_art'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'order', null), 'date'),true))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','num titre')-1)):((($t=(isset($Pile[0]['tri'.'_liste_art']))?$Pile[0]['tri'.'_liste_art']:((strncmp('_liste_art','session',7)==0 AND session_get('tri'.'_liste_art'))?session_get('tri'.'_liste_art'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'order', null), 'date'),true))))?tri_protege_champ($t):'')=='num titre'),'ajax') .
		'</th>
			<th class="titre">' .
		lien_ou_expose(parametre_url(parametre_url(self(),(($s=in_array('titre',array('>','<')))?'sens':'tri').'_liste_art',$s?(strpos('< >','titre')-1):'titre'),'var_memotri',strncmp('_liste_art','session',7)==0?(($s=in_array('titre',array('>','<')))?'sens':'tri').'_liste_art':''),_T('public|spip|ecrire:info_titre'),$s?(((intval($t=(isset($Pile[0]['sens'.'_liste_art']))?$Pile[0]['sens'.'_liste_art']:((strncmp('_liste_art','session',7)==0 AND session_get('sens'.'_liste_art'))?session_get('sens'.'_liste_art'):(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_art']))?$Pile[0]['tri'.'_liste_art']:((strncmp('_liste_art','session',7)==0 AND session_get('tri'.'_liste_art'))?session_get('tri'.'_liste_art'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'order', null), 'date'),true))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','titre')-1)):((($t=(isset($Pile[0]['tri'.'_liste_art']))?$Pile[0]['tri'.'_liste_art']:((strncmp('_liste_art','session',7)==0 AND session_get('tri'.'_liste_art'))?session_get('tri'.'_liste_art'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'order', null), 'date'),true))))?tri_protege_champ($t):'')=='titre'),'ajax') .
		'</th>
			<th class="auteur">' .
		_T('public|spip|ecrire:auteur') .
		'</th>
			<th class=\'date\'>' .
		lien_ou_expose(parametre_url(parametre_url(self(),(($s=in_array('date',array('>','<')))?'sens':'tri').'_liste_art',$s?(strpos('< >','date')-1):'date'),'var_memotri',strncmp('_liste_art','session',7)==0?(($s=in_array('date',array('>','<')))?'sens':'tri').'_liste_art':''),_T('public|spip|ecrire:date'),$s?(((intval($t=(isset($Pile[0]['sens'.'_liste_art']))?$Pile[0]['sens'.'_liste_art']:((strncmp('_liste_art','session',7)==0 AND session_get('sens'.'_liste_art'))?session_get('sens'.'_liste_art'):(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_art']))?$Pile[0]['tri'.'_liste_art']:((strncmp('_liste_art','session',7)==0 AND session_get('tri'.'_liste_art'))?session_get('tri'.'_liste_art'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'order', null), 'date'),true))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','date')-1)):((($t=(isset($Pile[0]['tri'.'_liste_art']))?$Pile[0]['tri'.'_liste_art']:((strncmp('_liste_art','session',7)==0 AND session_get('tri'.'_liste_art'))?session_get('tri'.'_liste_art'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'order', null), 'date'),true))))?tri_protege_champ($t):'')=='date'),'ajax') .
		'</th>
			<th class=\'id\'>' .
		lien_ou_expose(parametre_url(parametre_url(self(),(($s=in_array('id_article',array('>','<')))?'sens':'tri').'_liste_art',$s?(strpos('< >','id_article')-1):'id_article'),'var_memotri',strncmp('_liste_art','session',7)==0?(($s=in_array('id_article',array('>','<')))?'sens':'tri').'_liste_art':''),_T('public|spip|ecrire:info_numero_abbreviation'),$s?(((intval($t=(isset($Pile[0]['sens'.'_liste_art']))?$Pile[0]['sens'.'_liste_art']:((strncmp('_liste_art','session',7)==0 AND session_get('sens'.'_liste_art'))?session_get('sens'.'_liste_art'):(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_art']))?$Pile[0]['tri'.'_liste_art']:((strncmp('_liste_art','session',7)==0 AND session_get('tri'.'_liste_art'))?session_get('tri'.'_liste_art'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'order', null), 'date'),true))))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s)))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','id_article')-1)):((($t=(isset($Pile[0]['tri'.'_liste_art']))?$Pile[0]['tri'.'_liste_art']:((strncmp('_liste_art','session',7)==0 AND session_get('tri'.'_liste_art'))?session_get('tri'.'_liste_art'):interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'order', null), 'date'),true))))?tri_protege_champ($t):'')=='id_article'),'ajax') .
		'</th>
			<th class=\'trad\'>' .
		_T('taa:traductions') .
		'</th>			
		</tr>
	</thead>
	<tbody>
	') . $t1 . (	'
	</tbody>
</table>
' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_liste_art"]["grand_total"],
 		'_liste_art',
		isset($Pile[0]['debut_liste_art'])?$Pile[0]['debut_liste_art']:intval(_request('debut_liste_art')),
		(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10), true, 'prive', '', array())))!=='' ?
				('<p class=\'pagination\'>' . $t3 . '</p>') :
				'') .
		'
</div>
')) :
		((($t2 = strval(interdire_scripts(sinon(table_valeur(@$Pile[0], (string)'sinon', null), ''))))!=='' ?
			('
<div class="liste-elements articles"><strong class="caption">' . $t2 . '</strong></div>
') :
			''))) .
'
');

	return analyse_resultat_skel('html_98a3764c05c6840c1a3faf1b06120632', $Cache, $page, '../plugins/auto/taa/v1.3.14/prive/objets/liste/inc-articles_compacte.html');
}
?>