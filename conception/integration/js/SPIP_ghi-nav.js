jQuery(document).ready(function(){



	var largeurEcran = screen.width;
	if(largeurEcran <= 767){ /*  pour les téléphones */

		/* On désactive le lien auteurs */
		$('.author > a').click(function(event){
			event.preventDefault();
		});
		
	}
	
	
	
	jQuery(".content table").width("100%"); /* force tout les tableaux à 100% */
	
	jQuery('.content .btn-share').click(function(){
		jQuery('.content .mini-submenu').slideToggle(120);
	});
	jQuery('nav .btn-share').click(function(){
		jQuery('nav .mini-submenu').slideToggle(120);
	});
	
	jQuery('#btn-menu').click(function(){
		jQuery('header .menu-middle').slideToggle(420);
		jQuery('header .menu-right').slideToggle(420);
	});
	
	jQuery('#btn-domaines').click(function(){
		jQuery('.domaines').slideToggle(420);
		jQuery('#btn-domaines span').toggleClass("glyphicon-triangle-bottom");
		jQuery('#btn-domaines span').toggleClass("glyphicon-triangle-top");
	});
	
	

	var tabs = document.querySelectorAll(".block-tabs h3"); /* système d'onglet */
	nbrTabs = tabs.length;
	for(i = 0 ; i < nbrTabs ; i++)
	{
		tabs[i].addEventListener("click", function(e){
			for(j = 0 ; j < nbrTabs ; j++)
			{
				tabs[j].classList.remove("active");
				$(".block-tabs .tab-" + (j+1)).css({display:"none"});
			}
			e.target.classList.add("active");
			
			var num = e.target.id;
			num = num.split("-", 2);
			num = num[1];
			$(".block-tabs .tab-" + num ).css({display:"block"});
		
		}, false);
	}
	
	
	
	
	
	
	jQuery('.btn-keywords-fr').click(function(){
		jQuery('.keywords-fr').css({display:"block"});
		jQuery('.keywords-en').css({display:"none"});
	});
	jQuery('.btn-keywords-en').click(function(){
		jQuery('.keywords-en').css({display:"block"});
		jQuery('.keywords-fr').css({display:"none"});
	});
	
	
	var $window = $(window);
	
	 function posNavRight() {
		var pos = $window.scrollTop();
		 if (pos < 130)
		 {
			$('.nav-fixed').css({"top": (130 - (pos - 15)) + "px"});
		 }
		 else
		 {
			 $('.nav-fixed').css({"top":"15px"});
		 }
	 }
	 posNavRight();
	 $window.scroll(posNavRight);
	
	
	
	
	
});

function sommaireNav(){

	var texte = document.getElementById("texte-article").getElementsByTagName("h2");
	var sommaire = document.querySelector(".sommaire-nav");
	var nbrItems = texte.length ;
	
	for(i = 0 ; i < nbrItems ; i++)
	{
		sommaire.innerHTML += "<li><a href='#ancre-article-" + i + "'>" + texte[i].innerHTML + "</a></li>";
		
		texte[i].id = "ancre-article-" + i;
	}
}

function selectActiveDom(id){

	if(id == null)
	{
		/* Pas de domaine principal séléctionné */ 
		/* donc selection d'un domaine de l'article au hasard */
		
		/* le champ extra est obligatoire normalement, donc ce cas alternatif est là au cas où. */
		var altDom = document.getElementsByName("altDom");
		id = altDom[0].id;
		var link = document.querySelector("nav .dom-" + id);
		var header = document.querySelector("header");
		link.classList.add("active");
		header.classList.add("header-dom-" + id);
	}
	else
	{
		var link = document.querySelector("nav .dom-" + id);
		var header = document.querySelector("header");
		var arianeDom = document.querySelectorAll(".arianeDom");
		
		link.classList.add("active");
		header.classList.add("header-dom-" + id);
		arianeDom[0].classList.add("dom-" + id);
		arianeDom[1].classList.add("dom-" + id);
	}
	
}




