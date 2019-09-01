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

$("#Atualizar_dados").click(function(e) {
  e.preventDefault();
    var inputs = document.getElementsByClassName('dados_user');
    for(var i = 0; i < inputs.length; i++) {
        inputs[i].disabled = false;
    }
    document.getElementById("Atualizar_dados").style.visibility = "hidden";
    document.getElementById("Salvar_dados").style.visibility = "visible";
});

window.onload = function(){
  document.getElementById(atual).classList.add("atual");
}

$("#photo_user").hover(function(){
  $(this).css("cursor", "pointer");
});

/*###########Animação Scroll###########*/
var root = document.documentElement;
root.className += ' js';

function boxTop(idBox) {
    var boxOffset = $(idBox).offset().top;
    return boxOffset;
}

$(document).ready(function() {
    var $target = $('.anime'),
            animationClass = 'anime-init',
            windowHeight = $(window).height(),
            offset = windowHeight - (windowHeight / 4);
    var $targetRight = $('.animeRight'),
            animationClass = 'anime-init',
            windowHeight = $(window).height(),
            offset = windowHeight - (windowHeight / 4);

    function animeScroll() {
        var documentTop = $(document).scrollTop();
        $target.each(function() {
            if (documentTop > boxTop(this) - offset) {
                $(this).addClass(animationClass);
            } else {
                $(this).removeClass(animationClass);
            }
        });
        $targetRight.each(function() {
            if (documentTop > boxTop(this) - offset) {
                $(this).addClass(animationClass);
            } else {
                $(this).removeClass(animationClass);
            }
        });
    }
    animeScroll();

    $(document).scroll(function() {
        setTimeout(function() {animeScroll()}, 150);
    });
});