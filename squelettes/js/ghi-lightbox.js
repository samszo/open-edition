jQuery(document).ready(function(){

	var largeurEcran = screen.width;
	if(largeurEcran <= 767){ /*  pour les téléphones */
	}
	
	var container = document.getElementById("ghi-lightbox-container");
	container.style.height = screen.height + "px";
	var div = document.querySelector("#ghi-lightbox-container div");
	var img = document.createElement("img");
	div.style.cursor = "pointer";
	
	container.addEventListener("click", function(e){
		div.removeChild(img);
		container.style.display = "none";
	}, true);
	
	/* séléction des images de l'article */
	var images = document.querySelector("#texte-article").getElementsByTagName("img");
	var nbrImg = images.length;
	for(i = 0 ; i < nbrImg ; i++)
	{
		images[i].style.cursor = "pointer";
		images[i].addEventListener("click", function(e){
			
			container.style.display = "block";
			img.src = e.target.src;
			div.appendChild(img);
		
		}, true);
	}
});