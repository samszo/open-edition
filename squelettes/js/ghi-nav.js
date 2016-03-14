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
	jQuery('nav .btn-share').click(function(){
		jQuery('nav .mini-submenu').slideToggle(120);
	});
	
	jQuery('.abstract h2:nth-child(2)').click(function(){
		jQuery('.abstract .english').css({display:"block"});
		jQuery('.abstract .french').css({display:"none"});
		
		jQuery('.abstract h2:nth-child(2)').addClass('active');
		jQuery('.abstract h2:nth-child(1)').removeClass('active');
	});
	jQuery('.abstract h2:nth-child(1)').click(function(){
		jQuery('.abstract .french').css({display:"block"});
		jQuery('.abstract .english').css({display:"none"});
		
		jQuery('.abstract h2:nth-child(1)').addClass('active');
		jQuery('.abstract h2:nth-child(2)').removeClass('active');
	});
	
	
	jQuery('.btn-keywords-fr').click(function(){
		jQuery('.keywords-fr').css({display:"block"});
		jQuery('.keywords-en').css({display:"none"});
	});
	jQuery('.btn-keywords-en').click(function(){
		jQuery('.keywords-en').css({display:"block"});
		jQuery('.keywords-fr').css({display:"none"});
	});
	
	
	var $window = $(window);
	/* version simple
	 $window.scroll(function () {
		 if ($window.scrollTop() < 130)
		 {
			$('.nav-fixed').css({"top":"145px"});
		 }
		 else // if ($window.height() + $window.scrollTop() == $(document).height()) 
		 {
			 $('.nav-fixed').css({"top":"15px"});
		 }
	 });
	 */
	 $window.scroll(function () {
		var pos = $window.scrollTop();
		 if (pos < 130)
		 {
			$('.nav-fixed').css({"top": (130 - (pos - 15)) + "px"});
		 }
		 else
		 {
			 $('.nav-fixed').css({"top":"15px"});
		 }
	 });
	
});