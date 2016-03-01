jQuery(document).ready(function(){
	/*var header_ouvert = 1;
	var largeurEcran = screen.width;
	if(largeurEcran <= 767){
		jQuery("nav ul").css("display", "none");
		header_ouvert = 0;
	}*/
	jQuery('.content .btn-share').click(function(){
		jQuery('.content .mini-submenu').slideToggle(120);
	});
	
});