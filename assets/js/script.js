$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
  $("#dark").toggleClass("visible");
/*Esse script adiciona ou remove a classe toggled 
toda vez que o botão do menu é clicado*/
});

var largura = window.innerWidth;
const containerconsumo = document.getElementById("containerconsumo")
if (largura<1600 && largura>768) {
  document.body.style.zoom = "85%"
  if (containerconsumo !== null) {document.getElementById("containerconsumo").style.zoom = "117.65%"}
}
window.onresize=function() { 
    var largura = window.innerWidth;
    const containerconsumo = document.getElementById("containerconsumo")
    if (largura>=768){ /*Quando ampliar a tela*/
        var menu = document.getElementById("wrapper"); /*O menu*/
        menu.classList.remove("toggled"); /*Volta a colapsar*/
        document.getElementById("dark").classList.remove("visible"); 
    }
    if (largura>=1600){ /*Quando ampliar a tela*/
      document.body.style.zoom = "100%"
      if (containerconsumo !== null) {document.getElementById("containerconsumo").style.zoom = "100%"}
    }else if(largura<=768){
      document.body.style.zoom = "100%"
      if (containerconsumo !== null) {document.getElementById("containerconsumo").style.zoom = "117.65%"}
    }else{
      document.body.style.zoom = "85%"
      if (containerconsumo !== null) {document.getElementById("containerconsumo").style.zoom = "117.65%"}
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

// $("#Atualizar_dados").click(function(e) {
//   e.preventDefault();
//     var inputs = document.getElementsByClassName('dados_user');
//     for(var i = 0; i < inputs.length; i++) {
//         inputs[i].disabled = false;
//     }
//     document.getElementById("Atualizar_dados").style.visibility = "hidden";
//     document.getElementById("Salvar_dados").style.visibility = "visible";
// });

//Marcador da sidebar e marcador das perguntas
window.onload = function(){
  document.getElementById(atual).classList.add("atual");
  document.getElementById(questao).classList.add("active");
}

/*###########Giro de imgs###########*/
function point(imagem, point, texto) {
  $("#imagemdocirculo").addClass('diagonal-enter-active');
  $("#imagemdocirculo2").addClass('diagonal-leave-active');
  $("#imagemdocirculo").attr("src","http://localhost/pharus/assets/img/"+imagem+".png");
  $(".point").removeClass('imagematualdocirculo');
  $("."+point).addClass('imagematualdocirculo');
  $(".textogiro").removeClass('textodogirovisivel');
  $("."+texto).addClass('textodogirovisivel');
  setTimeout(function(){ 
    $("#imagemdocirculo").removeClass('diagonal-enter-active'); 
    $("#imagemdocirculo2").attr("src","http://localhost/pharus/assets/img/"+imagem+".png");
    $("#imagemdocirculo2").removeClass('diagonal-leave-active');}, 400);
}

function video(video, marcador) {
  $(".marcadorvideo").addClass('inativo');
  $(".marcadorvideo"+marcador).removeClass('inativo');
  $('#videoclip').get(0).pause();
  $('#mp4video').attr('src', "http://localhost/pharus/assets/videos/"+video+".mp4");
  $('#videoclip').get(0).load();
  $('#videoclip').get(0).play();
}

/*###########Foto User###########*/
var usuario = localStorage.getItem('Usuario')
var fotoStorage = localStorage.getItem('fotoStorage')
//localStorage.setItem('fotoStorage', true);
if (fotoStorage=="true") {
  $(".photo_user").attr("src","http://localhost/pharus/assets/fotos/profile_"+usuario+".png");
}else{
  $(".photo_user").attr("src","http://localhost/pharus/assets/fotos/user_man.png");
}

$("#removerimg").click(function(e) {
  e.preventDefault();
    $(".photo_user").attr("src","http://localhost/pharus/assets/fotos/user_man.png");
    $.ajax({
        url: "http://localhost/pharus/Raiz/removerFotoDB",
        type: "POST",
        data: {},
        success: function(){
      },
      error: function(){
          console.log('Error');
      }
    });
    localStorage.removeItem('fotoStorage')
});

$(function(){
  $('#upload').change(function(){
    const file = $(this)[0].files[0]
    const fileReader = new FileReader()
    fileReader.onloadend = function(){
       $('.photo_user').attr('src',fileReader.result);
      console.log(fileReader.result)
    }
    fileReader.readAsDataURL(file)
    $(".dropdown-menu-foto").toggleClass("show");
    $("#btndesalvar").toggleClass("inativo");
  })
})

function salvarimg(){
    $.ajax({
        url: "http://localhost/pharus/Raiz/registrarFotoDB",
        type: "POST",
        data: {},
        success: function(){
      },
      error: function(){
          console.log('Error');
      }
    });
    localStorage.setItem('fotoStorage', "true");
    var fotoStorage = localStorage.getItem('fotoStorage')
    $(".photo_user").attr("src","http://localhost/pharus/assets/fotos/profile_"+usuario+".png");
     
    //window.location.reload(true)
    //return  
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
  $(".vertical-line").toggleClass("bg-dark2");
  $(".master").toggleClass("bg-light");
  $(".theme").toggleClass("text-white");
  $(".theme-nav").toggleClass("bg-white");
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
  $(".vertical-line").toggleClass("bg-dark2");
  $(".master").toggleClass("bg-light");
  $(".theme").toggleClass("text-white");
  $(".theme-nav").toggleClass("bg-white");
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

/*###########Animação notificacoes###########*/
function animarNotificacao() {
  if ( $(".navbar-expand-lg").is(".open") ) {
    $(".navbar").removeClass('open');
  }else{
    $("#painelnot").addClass('down-enter-active');
    $(".navbar").addClass('open');
    setTimeout(function(){$("#painelnot").removeClass('down-enter-active');}, 400);
  } 
}
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
            windowHeight = $(window).height()+300,
            offset = windowHeight - (windowHeight /4);
    var $targetRight = $('.animeRight'),
            animationClass = 'anime-init',
            windowHeight = $(window).height()+300,
            offset = windowHeight - (windowHeight /4);
    var $targetTop = $('.animeTop'),
            animationClass = 'anime-init',
            windowHeight = $(window).height()+300,
            offset = windowHeight - (windowHeight /4);

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
        $targetTop.each(function() {
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