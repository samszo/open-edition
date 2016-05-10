<?php

/*
 * Squelette : plugins/auto/ckeditor/v0.16.19/ckeditor4spip.js.html
 * Date :      Fri, 15 Apr 2016 04:09:07 GMT
 * Compile :   Tue, 10 May 2016 14:28:41 GMT
 * Boucles :   _options
 */ 

function BOUCLE_optionshtml_1b1e8801640b6d12631435dff7e880f5(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(interdire_scripts(ck_enliste((include_spip('inc/config')?lire_config('ckeditor/contextes',null,false):''),'1')));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_options';
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
		array('plugins/auto/ckeditor/v0.16.19/ckeditor4spip.js.html','html_1b1e8801640b6d12631435dff7e880f5','_options',340,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'<option value="' .
interdire_scripts(table_valeur($Pile[$SP]['valeur'],'0')) .
'">' .
interdire_scripts(replace(table_valeur($Pile[$SP]['valeur'],'1'),'(\\.|#)')) .
'</option>');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_options @ plugins/auto/ckeditor/v0.16.19/ckeditor4spip.js.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins/auto/ckeditor/v0.16.19/ckeditor4spip.js.html
// Temps de compilation total: 2.234 ms
//

function html_1b1e8801640b6d12631435dff7e880f5($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header("X-Spip-Cache: 0"); ?'.'>'.'<'.'?php header("Cache-Control: no-cache, must-revalidate"); ?'.'><'.'?php header("Pragma: no-cache"); ?'.'>' .
'<'.'?php header("' . (	'Content-type: text/javascript' .
	(($t2 = strval(interdire_scripts($GLOBALS['meta']['charset'])))!=='' ?
			('; charset=' . $t2) :
			'')) . '"); ?'.'>

var ckeDataProcessor;

var sansConversion = ' .
interdire_scripts((((include_spip('inc/config')?lire_config('ckeditor/conversion',null,false):'') == 'aucune') ? 'true':'false')) .
' ;
if (sansConversion) {
	spipDataProcessor={
		toDataFormat:function(html, fixForBody){
			if(fixForBody) {
				return ckeDataProcessor.toDataFormat(html,fixForBody).replace(/<head[^>]*>(.|\\r|\\n)*<\\/head>/, \'\').replace(/[\\r\\n\\s]*<body[^>]*>[\\r\\n\\s]*/, \'\').replace(/[\\r\\n\\s]*<\\/body>[\\r\\n\\s]*/, \'\');
			} else {
				return ckeDataProcessor.toDataFormat(html,fixForBody) ;
			}
		},
		toHtml:function(data, fixForBody){
			if(fixForBody) {
				return \'<html><head><title></title></head><body>\'+ckeDataProcessor.toHtml(data.replace(/<html>/,\'\').replace(/<\\/html>/, \'\'),fixForBody)+\'</body></html>\' ;
			} else {
				return ckeDataProcessor.toHtml(data,fixForBody);
			}
		}
	};
} else {
	spipDataProcessor={
		toDataFormat:function(html, fixForBody){
			return jQuery.ajax({url:CKEDITOR.spipurl+\'?page=ckspip_convert\',data:{text_area:html.replace(/<span\\s+data-scayt[^>]*>\\s*(.*?)\\s*<\\/span>/g,\'$1\'),cvt:\'html2spip\',fix:fixForBody},global:false,type:\'POST\',dataType:\'text\',async:false}).responseText;
		},
		toHtml:function(data, fixForBody){
			return jQuery.ajax({url:CKEDITOR.spipurl+\'?page=ckspip_convert\',data:{text_area:data.replace(/<span\\s+data-scayt[^>]*>\\s*(.*?)\\s*<\\/span>/g,\'$1\'),cvt:\'spip2html\',fix:fixForBody},global:false,type:\'POST\',dataType:\'text\',async:false}).responseText;
		}
	};
}

function htmldecode(s){
	return jQuery(\'<div/>\').html(s).text();
}

function HideSpipUI(editor_id){
	if(jQuery(editor_id).size()==0){return;}
	var crayon=editor_id.match(/^(#crayon_\\d+)\\s/), item, editor_id_light = editor_id ;
	if(crayon) {
		editor_id_light=\'textarea.crayon-active\' ;
		stack[editor_id].crborder=jQuery(crayon[1]+\' .formulaire_spip\').css(\'border\');
		stack[editor_id].crbg=jQuery(crayon[1]+\' .formulaire_spip\').css(\'background-color\');
		jQuery(crayon[1]+\' .formulaire_spip\')
			.css(\'border\',\'none\')
			.css(\'background-color\',\'white\');
		item=jQuery(crayon+\' div.edition\');
	} else {
		editor_id_light = editor_id.match(/^#\\S*\\s+(.*)$/) ;
		if (editor_id_light) {
			editor_id_light = editor_id_light[1] ;
		} else {
			editor_id_light = editor_id ;
		}

		item=jQuery(editor_id_light).parents().find(\'div.forum, div.edition:has(\'+editor_id_light+\')\');
	}
	item.each(function() {
		if (jQuery(this).find(editor_id_light).length == 1) {
			if (editor_id.match(/^#formulaire_forum\\s/)) {
				stack[editor_id].fobd=jQuery(this).css(\'border\');
				stack[editor_id].fobg=jQuery(this).css(\'background\');
				jQuery(this).css(\'border\',\'none\');
				jQuery(this).css(\'background\',\'none\');
			}
			jQuery(this).find(\'.spip_barre\').css(\'display\',\'none\').end()
				.find(\'.explication\').css(\'display\',\'none\').end()
				.find(\'.markItUpHeader\').css(\'display\',\'none\').end()
				.find(\'.markItUpTabs\').css(\'display\',\'none\').end()
				.find(\'.markItUpPreview\').css(\'display\',\'none\').end()
				.find(\'.markItUpFooter\').css(\'display\',\'none\');
		}
	}) ;
}

function ShowSpipUI(editor_id){
	if(jQuery(editor_id).size()==0){return;}
	if (! stack[editor_id].nobarre) {
		jQuery(editor_id).removeClass(\'no_barre\') ;
		barrebouilles_editor(editor_id) ;
		stack[editor_id].nobarre = false ;
	}
	var crayon=editor_id.match(/^(#crayon_\\d+)\\s/), item ;
	if(crayon) {
		item=jQuery(crayon+\' div.edition\');
	} else {
		item=jQuery(editor_id).parents().find(\'div.forum, div.edition:has(\'+editor_id+\')\');
	}
	item.each(function() {
		if (editor_id.match(/^#formulaire_forum\\s/)) {
			jQuery(this).css(\'border\',stack[editor_id].fobd);
			jQuery(this).css(\'background\',stack[editor_id].fobg);
		}
		if(crayon) {
			jQuery(crayon[1]+\' .formulaire_spip\')
				.css(\'border\',stack[editor_id].crborder)
				.css(\'background-color\',stack[editor_id].crbg);
		}
		if(jQuery(this).find(\'.markItUpTabs .previsuVoir\').hasClass(\'on\')){
			jQuery(this).find(\'.markItUpTabs\').css(\'display\',\'\').end()
				.find(\'.markItUpPreview\').css(\'display\',\'block\').end()
				.find(\'.markItUpEditor\').css(\'display\',\'none\');
		}else{
			jQuery(this).find(\'.spip_barre\').css(\'display\',\'\').end()
				.find(\'.explication\').css(\'display\',\'\').end()
				.find(\'.markItUpHeader\').css(\'display\',\'\').end()
				.find(\'.markItUpTabs\').css(\'display\',\'\').end()
				.find(\'.markItUpFooter\').css(\'display\',\'\').end()
				.find(\'.markItUpEditor\').css(\'display\',\'block\').end()
				.find(\'.markItUpPreview\').css(\'display\',\'none\');
		}
		}) ;	
}
' .
'
var stack=[];

function SpipEditor2CKEditor(editor_id){
	if (jQuery(editor_id).size()==0) {return;}
	jQuery(\'#swapeditor_\'+stack[editor_id].md5)
		.attr(\'disabled\',true)
		.attr(\'title\',htmldecode(\'' .
_T('ckeditor:loading') .
'\'))
		.find(\'img\')
			.attr(\'src\',\'' .
url_absolue(find_in_path('images/searching.gif')) .
'\');
	jQuery(editor_id).attr(\'disabled\',true);
	var EdConfig={};jQuery.extend(EdConfig,CKEDITOR.ckConfig) ;
	EdConfig.toolbar=\'Spip\'+stack[editor_id].tb;
	try { 
	jQuery(editor_id).ckeditor(function(){
		HideSpipUI(editor_id);
		stack[editor_id].n=\'#\'+this.container.getId();
		stack[editor_id].editor=this.name ;

		' .
'
	
		var parent_ids = [ \'.cadre-formulaire-editer\', \'.formulaire_crayon\', \'.cadre-formulaire\', \'.formulaire_spip\', \'#contenu\' ] ;
		var pc=0,parent_trouve=false ;
		do {
			stack[editor_id].parent_id = parent_ids[pc++] ;
			if (jQuery(stack[editor_id].parent_id).length>0) {
				parent_trouve=true ;
				stack[editor_id].marges=jQuery(editor_id).parents(stack[editor_id].parent_id).width()-jQuery(stack[editor_id].n).width() ;
			}
		} while ((pc<parent_ids.length) && (!parent_trouve)) ;

		if (parent_trouve) {
			this.on(\'resize\', function(e) {
				jQuery(editor_id).parents(stack[editor_id].parent_id).width(jQuery(stack[editor_id].n).width()+stack[editor_id].marges);
			});
		}
		contexteChange(editor_id);
		jQuery(editor_id).attr(\'disabled\',false);
		jQuery(\'#swapeditor_\'+stack[editor_id].md5)
			.attr(\'title\',htmldecode(\'' .
_T('ckeditor:use_spip_editor') .
'\'))
			.find(\'img\')
				.attr(\'src\',\'' .
url_absolue(find_in_path('images/ckeditor_spip.png')) .
'\') ;
		jQuery(\'#swapeditor_\'+stack[editor_id].md5).attr(\'disabled\',false);
		this.setReadOnly(false);
		this.on(\'dataReady\', function(e){ 
			this.resize(CKEDITOR.ckConfig.minwidth,CKEDITOR.ckConfig.height);
		});
	},EdConfig);
	} catch (E) { /* rien */ }
}

function barrebouilles_editor(editor_id){ 
' .
'
	if (jQuery(editor_id).hasClass(\'inserer_barre_forum\'))
		jQuery(editor_id).barre_outils(\'forum\');
	if (jQuery(editor_id).hasClass(\'inserer_barre_edition\'))
		jQuery(editor_id).barre_outils(\'edition\');
	if (jQuery(editor_id).hasClass(\'inserer_previsualisation\'))
		jQuery(editor_id).barre_previsualisation();
' .
'
	if (jQuery(editor_id).hasClass(\'textarea_forum\'))
		jQuery(editor_id).barre_outils(\'forum\');
	if(jQuery(editor_id).attr(\'name\').match(/^(texte|\\w+_texte)$/)) {
		if (!editor_id.match(/\\b#formulaire_forum\\b/)) {
			jQuery(editor_id).barre_outils(\'edition\').barre_previsualisation();
		}
		' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('forums_afficher_barre',null,false):'') == 'non')) ?'' :' '))))!=='' ?
		($t1 . '
		else {
			jQuery(editor_id).barre_outils(\'forum\');
		}') :
		'') .
'
	}
}

function CKEditor2SpipEditor(editor_id){
	if(jQuery(editor_id).size()==0){return;}
	jQuery(\'#swapeditor_\'+stack[editor_id].md5)
		.attr(\'disabled\',true)
		.attr(\'title\',htmldecode(\'' .
_T('ckeditor:loading') .
'\'))
		.find(\'img\')
			.attr(\'src\',\'' .
url_absolue(find_in_path('images/searching.gif')) .
'\');
	jQuery(editor_id)
		.attr(\'disabled\',true)
		.css(\'display\',\'block\')
		.ckeditorGet().destroy();
	ShowSpipUI(editor_id);
	jQuery(\'#swapeditor_\'+stack[editor_id].md5)
		.attr(\'title\',htmldecode(\'' .
_T('ckeditor:use_ckeditor') .
'\'))
		.find(\'img\')
			.attr(\'src\',\'' .
url_absolue(find_in_path('images/ckeditor.png')) .
'\')
		.end()
		.attr(\'disabled\',false);
	jQuery(editor_id)
		.attr(\'disabled\',false);
}

function SwapEditor(editor_id){
	if(jQuery(editor_id).size()==0){return;}
	try{
		CKEditor2SpipEditor(editor_id);
	}catch(e){
		SpipEditor2CKEditor(editor_id);
	}
}

function contexteChange(editor_id){
	if(jQuery(editor_id).size()==0){return;}
	if(jQuery("#contexte_"+stack[editor_id].md5).length){
		var contexte=jQuery("#contexte_"+stack[editor_id].md5).val().match(/^([\\.#])(.*)$/);
		if(stack[editor_id].ctx){
			if(stack[editor_id].ctx[1]=="#"){' .
'
				jQuery(stack[editor_id].n+\' iframe\').contents().find(\'body\').attr(\'id\',\'\');
			}else{
				jQuery(stack[editor_id].n+\' iframe\').contents().find(\'body\').removeClass(stack[editor_id].ctx[2]);
			}
		}
		stack[editor_id].ctx=contexte;
		if(contexte){
			if(contexte[1]=="#"){' .
'
				jQuery(stack[editor_id].n+\' iframe\').contents().find(\'body\').attr(\'id\', contexte[2]);
			}else{' .
'
				jQuery(stack[editor_id].n+\' iframe\').contents().find(\'body\').addClass(contexte[2]);
			}
		}
	}
}

function on_submit_destroy_cke() {
	for(name in CKEDITOR.instances) {
	    CKEDITOR.instances[name].destroy()
	}
}

function cke_crayon_submit(editor_id){
	if(jQuery(editor_id).size()==0){return;}
	try{' .
'
		jQuery(editor_id).ckeditorGet().updateElement();
	}catch(e){ /* rien */ }
	jQuery(this).parents(\'.formulaire_crayon\').submit();
}

function fullInitCKEDITOR(editor_ids){
	if(!editor_ids)editor_ids=[["textarea[name=texte]","Full"]];
	jQuery("input[type=submit]").click(on_submit_destroy_cke) ;
	if (!CKEDITOR.fullInitDone) {
		CKEDITOR.fullInitDone=true;
		CKEDITOR.ckConfig.on={
			\'pluginsLoaded\':function(ev){ckeDataProcessor=ev.editor.dataProcessor;ev.editor.dataProcessor=spipDataProcessor;}
		};
		CKEDITOR.on(\'dialogDefinition\',function(ev){
			var dialogName=ev.data.name,
				dialogDefinition=ev.data.definition;
			if(dialogName===\'about\'){
				var aboutTab=dialogDefinition.getContents(\'tab1\');
				aboutTab.style=\'height:280px;\';
				aboutTab.add({
					\'type\':\'html\',
					\'html\':\'<div class="cke_about_container">' .
_T('ckeditor:spipification') .
'</div>\'
				});
			}
			var advTab=dialogDefinition.getContents(\'advanced\');
			if(advTab){
				var advClasses=advTab.get(\'advCSSClasses\');
				if(advClasses){
					advClasses[\'default\']=\'spip\';
				}
			}
		});
		for(var plugin in CKEDITOR.ckConfig.loadExtraPlugins){
			CKEDITOR.plugins.addExternal(plugin, CKEDITOR.ckConfig.loadExtraPlugins[plugin]);
		}
	}
	for(var id in editor_ids){
		if ((jQuery(editor_ids[id][0]).length > 0) && (jQuery(editor_ids[id][0]).css(\'display\') != \'none\')) { 
			var editor_id=editor_ids[id][0], editor_tb=editor_ids[id][1], crayon=null, editor_md5=editor_ids[id][3] ;
			if (jQuery(editor_id).parents("[id^=crayon_]").length>0) { // sommes-nous appelé depuis un crayon ?
				crayon = jQuery(editor_id).parents("[id^=crayon_]").attr(\'id\') ;
				if (! editor_id.match(/^\\s*#/)) {
					editor_id = "#"+crayon+" "+editor_id ;
				}
			}
	
		try {
			jQuery(editor_id).ckeditorGet() ;
		} catch(e) {
			
			var buttons=\'\';
			if (typeof stack[editor_id] == \'undefined\') {
				stack[editor_id] = {} ;
			}
			stack[editor_id].crayons = 0 ;
			stack[editor_id].tb = editor_tb ;
			stack[editor_id].nobarre = (jQuery(editor_id).hasClass(\'no_barre\') || CKEDITOR.ckeditmode == \'spip\') ;
			stack[editor_id].md5 = editor_md5 ;
			if (! stack[editor_id].nobarre)
				jQuery(editor_id).addClass(\'no_barre\');' .
'

			if (jQuery(\'#after_\'+editor_md5).length==0) {
				jQuery(editor_id).after(\'<span id="after_\'+editor_md5+\'"></span>\');
	' .
(($t1 = strval(interdire_scripts(((((include_spip('inc/config')?lire_config('ckeditor/ignoreversion',null,false):'') == 'on')) ?'' :' '))))!=='' ?
		($t1 . (	'
				if(CKEDITOR.version<CKEDITOR.ckpreferedversion){
					var pref=\'' .
	_T('ckeditor:version_preferee') .
	'\';
					jQuery(\'#after_\'+editor_md5).prepend(
						\'<div class="erreur_message">\'+pref.replace(/%2/,CKEDITOR.ckpreferedversion).replace(/%1/,CKEDITOR.version)+\'</div>\'
					);
				}
	')) :
		'') .
'
			}
			
			if(CKEDITOR.ckeditmode!=\'ckeditor-exclu\'){
				buttons=buttons +
					\'<button style="margin:0;width:40px;height:24px;" type="button" id="swapeditor_\'+editor_md5+\'" onclick="javascript:SwapEditor(\\\'\'+editor_id+\'\\\');" title="\' 
					+htmldecode(CKEDITOR.ckeditmode==\'spip\'?\'' .
_T('ckeditor:use_ckeditor') .
'\':\'' .
_T('ckeditor:use_spip_editor') .
'\') 
					+\'"><img src="' .
url_absolue(find_in_path('images/ckeditor.png')) .
'"/></button>\';
			}

	
	' .
(($t1 = BOUCLE_optionshtml_1b1e8801640b6d12631435dff7e880f5($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'		buttons=buttons+\'<span style="padding-right:5px;">' .
		_T('ckeditor:changer_de_contexte') .
		'</span>\'
				+\'<select id="contexte_\'+editor_md5+\'" name="contexte_\'+editor_md5+\'" onchange="contexteChange(\\\'\'+editor_id+\'\\\');" style="width:33%;"><option value="" selected>' .
		_T('ckeditor:sans_contexte') .
		'</option>') . $t1 . '</select>\';') :
		'') .
';
			if(buttons && (jQuery(\'#before_\'+editor_md5).length == 0)) {
				var div = jQuery(editor_id) ;
				var style = "width;100%;text-align:right;position:relative;top:-24px;height:0px;clear:both;" ;
				if (div.length != 0) {
					div.before(\'<div id="before_\'+editor_md5+\'" style="\'+style+\'"><a name="ancre_\'+editor_md5+\'"></a>\'+buttons+\'</div>\');
				}
			}
		' .
'
			if(crayon){
				jQuery(\'#\'+crayon+\' .crayon-submit\')
					.after(\'<button class="crayon-submit" onclick="javascript:return cke_crayon_submit(\\\'\'+editor_id+\'\\\');" title="' .
_T('public|spip|ecrire:bouton_enregistrer') .
'">' .
_T('public|spip|ecrire:bouton_enregistrer') .
'</button>\')
					.remove();' .
'
			}
			if(CKEDITOR.ckeditmode!=\'spip\'){
				SpipEditor2CKEditor(editor_id) ;
			}
		}}
	}
}
');

	return analyse_resultat_skel('html_1b1e8801640b6d12631435dff7e880f5', $Cache, $page, 'plugins/auto/ckeditor/v0.16.19/ckeditor4spip.js.html');
}
?>