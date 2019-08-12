
 $(document).ready(function() {
        var largura = $(window).width(); /*varivel tamanho de tela*/
        if (largura <= 768) {
			//$("#wrapper").toggleClass("toggled");
        	//$("#wrapper").toggleClass("toggled");
        	//var classe = document.getElementById('#wrapper');
        	//classs.classList.remove("toggled");
       		/* Se a Largura do monitor for menor ou = que 768 px */
        	document.getElementById("wrapper").style.padding-left ="250";
        	//$("#wrapper").toggleClass("collapsed");
        }
});
