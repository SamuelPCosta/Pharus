$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
  $("#dark").toggleClass("visible");
/*Esse script adiciona ou remove a classe toggled 
toda vez que o botão do menu é clicado*/
});

window.onresize=function() { 
    var largura = window.innerWidth;
    if (largura>=768){ /*Quando ampliar a tela*/
        var menu = document.getElementById("wrapper"); /*O menu*/
        menu.classList.remove("toggled"); /*Volta a colapsar*/
        document.getElementById("dark").classList.remove("visible"); 
    }
}

$(document).mouseup(function(e){
    var sidebar = $("#sidebar-wrapper");
    var btn = $("#menu-toggle");
    var dark = $("#dark");

    if (!sidebar.is(e.target) && sidebar.has(e.target).length === 0){
    	if (!btn.is(e.target) && btn.has(e.target).length === 0){
    		$("#wrapper").removeClass("toggled");
            dark.removeClass("visible");
    	}
    }
    /*Se o alvo do clique não for a side bar e também não for o 
    botão de menu a class toggled é removida e o menu colapsa*/
});

window.onload = function(){
  document.getElementById(atual).classList.add("atual");
}