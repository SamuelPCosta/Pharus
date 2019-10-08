$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
  if($("#dark").hasClass("visible")){
  }else{
    $("#dark").toggleClass("visible");
  }
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
  document.getElementById(questao).classList.add("active");
}

/*###########Notification pop-up###########*/
$("#notifiqueme").click(function(e) {
    e.preventDefault();
    $("#dark").toggleClass("visible");
  /*Escurece a tela e exibe poup-up*/
  });

/*###########Foto User###########*/
const usuario = localStorage.getItem('Usuario')
const fotoStorage = localStorage.getItem(usuario)
if (fotoStorage) {
    $("#photo_user").attr("src","http://localhost/pharus/assets/fotos/profile_"+usuario+".png");
}else{
  $("#photo_user").attr("src","http://localhost/pharus/assets/fotos/user_man.png");
}
$("#removerimg").click(function(e) {
  e.preventDefault();
    $("#photo_user").attr("src","http://localhost/pharus/assets/fotos/user_man.png");
    localStorage.removeItem(usuario)
});
function salvarimg(){
    $("#photo_user").attr("src","http://localhost/pharus/assets/fotos/profile_"+usuario+".png");
    $(".dropdown-menu").toggleClass("show");
    localStorage.setItem(usuario, true)
    return  
}
function destroyphoto(){
  localStorage.removeItem('Usuario')
}
/*###########Theme dark###########*/
// pegamos o valor no localStorage
const nightModeStorage = localStorage.getItem('NightMode')

// caso tenha o valor no localStorage
if (nightModeStorage) {
  // ativa o night mode
  $("#sidebar-wrapper").toggleClass("bg-dark");
  $("#sidebar-wrapper").toggleClass("bg-white");
  $(".dropdown-divider").toggleClass("bg-dark2");
  $(".card-theme").toggleClass("bg-dark");
  $(".form-control").toggleClass("bg-dark2");
  $(".form-control").toggleClass("text-white");
  $("#vertical-line").toggleClass("bg-dark2");
  $(".master").toggleClass("bg-light");
  $(".theme").toggleClass("text-white");
  $(".nperguntas").toggleClass("bg-dark2");
  $(".sidebar-li-a").toggleClass("text-dark");
}

$("#toggle-theme").click(function(e) {
  e.preventDefault();
  $("#sidebar-wrapper").toggleClass("bg-dark");
  $("#sidebar-wrapper").toggleClass("bg-white");
  $(".dropdown-divider").toggleClass("bg-dark2");
  $(".card-theme").toggleClass("bg-dark");
  $(".form-control").toggleClass("bg-dark2");
  $(".form-control").toggleClass("text-white");
  $("#vertical-line").toggleClass("bg-dark2");
  $(".master").toggleClass("bg-light");
  $(".theme").toggleClass("text-white");
  $(".nperguntas").toggleClass("bg-dark2");
  $(".sidebar-li-a").toggleClass("text-dark");

  // se tiver a classe bg-dark, ou seja, se o tema escuro estiver ativo
  if ($("#sidebar-wrapper").hasClass('bg-dark')) {
    // salva o tema no localStorage
    localStorage.setItem('NightMode', true)
    return
  }
  // senão remove
  localStorage.removeItem('NightMode')
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