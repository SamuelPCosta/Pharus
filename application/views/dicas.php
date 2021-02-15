			<div class="container-fluid first-container dicas-container">
	        <div class="row">
	        	<div id="alerta-dica-dicas" class="card-theme theme" style="z-index: 5; margin-left: 12.5%; height: 360px; width: 75%; border-radius: 25px; background: #fff">
		        	<img src="<?= base_url()?>assets/img/gifDicas.gif" class="position-absolute w-75 justify-content-center" style="border-radius: 25px;">
		        	<h2 class="position-absolute w-75 justify-content-center px-5 text-center theme" style="transform: translateY(180px); font-size: 1.6em">Deslize para gerar novas dicas.</h2>
		        		<div class="position-absolute w-75 justify-content-center text-center text-warning"><button id="hideDicas" class="btn btn-warning px-4 py-1" id="hidetipsimulador" style="margin-right: 0px;cursor: pointer;transform: translateY(280px);">Entendi</button></div>
				</div>
	            <div class="col-xl col-12 colunas">
				    <div class="a mb-4 card-theme theme card shadow-sm">
				      	<p class="animeTop text-center w-75" id="dica1">
				      		<?php echo $dica1; ?>
				      	</p>
				    </div>
				    <div class="a mb-4 card-theme theme card shadow-sm">
				      	<p class="animeTop text-center w-75" id="dica2">
				      		<?php echo $dica2; ?>
				      	</p>
				  	</div>
				    <div class="a mb-4 card-theme theme card shadow-sm">
				      	<p class="animeTop text-center w-75" id="dica3">
				      		<?php echo $dica3; ?>
				      	</p>
				    </div>
			    </div>
			    <div class="col-xl col-12 colunas">
			    	<div class="a mb-4 card-theme theme card shadow-sm">
				      	<p class="animeTop text-center w-75" id="dica4">
				      		<?php echo $dica4; ?>
				      	</p>
			      	</div>
			      	<div class="b mb-4 card-theme theme card shadow-sm">
			      		<p class="animeTop" id="dica5">
			      			<?php echo $dica5; ?>
			      		</p>
			      	</div>
			    </div>
			    <div class="col-xl col-12 colunas">
			      	<div class="c card-theme theme card shadow-sm" style="background-image: url(<?= base_url()?>assets/img/dicas.pnggg);background-size: 28%; background-repeat: no-repeat;background-position-y: 100%;background-position-x: 100%;">
			      		<p style="margin: 25px auto" class="animeTop" id="dica6"> 
			      			<?php echo $dica6; ?>
			      		</p>
			      	</div>
			      		<button id="recarregar" onclick="recarregar()" class="btn bg-warning" accesskey="r"><i class="fas fa-redo" id="recarregarIcone"></i> Novas dicas</button>
			      		<button id="recarregarMobile" onclick="recarregar()" class="btn bg-warning"><i class="fas fa-redo" id="recarregarIconeMobile"></i></button>
			      	</div>
			      </div>
			      <!--conteudo-->
			</div>
  	<!-- Modal -->
	<div class="modal fade show d-block" id="tipdicas" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered tutorialdvi1" role="document">
	  	<div class="rounded-circle card-theme theme tutorialdvi2"><div class="tutorialicone"><i class="fas fa-lightbulb mx-auto"></i></div></div>
	    <div class="modal-content card-theme theme tutorialcontent">
	      <div class="modal-header tutorialheader"><h3 class="modal-title text-uppercase tutorialtitle" id="TituloModal">Dicas</h3></div>
	      <div class="modal-body text-center">
	      	<p class="tutorialp">Tenha acesso a dicas de como economizar mais energia por meio de métodos simples e rápidas.</p>
	      </div>
	      <div class="modal-footer tutorialfooter"><button class="btn btn-warning px-4 py-1" id="hidetipdicas">Entendi</button></div>
	    </div>
	  </div>
	</div>
	<div class="modal-backdrop fade show" id="bg-dark"></div>
	<div class="modal-backdrop fade show" id="bg-dark2" style="z-index: 4"></div>
	<script>
		const tipdicas = localStorage.getItem('tipdicas')
		if (tipdicas) {
		  $('#tipdicas').removeClass('show');
		  $('#tipdicas').removeClass('d-block'); 
		  $('#bg-dark').removeClass('show'); 
		  $('#bg-dark').addClass('d-none');
		  $('body').removeClass('modal-open');
		}else{$('body').addClass('modal-open');}
		$("#hidetipdicas").click(function(e) {
		  e.preventDefault();
		    $('#tipdicas').removeClass('show');
		  	$('#tipdicas').removeClass('d-block'); 
		 	$('#bg-dark').removeClass('show'); 
		  	$('#bg-dark').addClass('d-none');
		  	$('body').removeClass('modal-open');
		    localStorage.setItem('tipdicas', true);
		});
	</script>

	<script>
    function recarregar(){
    	$('.animeTop').removeClass('anime-init');
    	$('.animeTop').removeClass('anime');
	    $('#recarregarIcone').addClass('recarregarIcone');
	    $('#recarregarIconeMobile').addClass('recarregarIcone');

        $.ajax({
            url: "<?php echo base_url(); ?>Raiz/dicasRecarregar",
            type: "POST",
            data: {},
            success: function(result){
            console.log(JSON.parse(result));
            $('#dica1').html(JSON.parse(result).dica1);
            $('#dica2').html(JSON.parse(result).dica2);
            $('#dica3').html(JSON.parse(result).dica3);
            $('#dica4').html(JSON.parse(result).dica4);
            $('#dica5').html(JSON.parse(result).dica5);
            $('#dica6').html(JSON.parse(result).dica6);
            animar()
	        },
	        error: function(){
	            console.log('Error');
	        }
        });
    };

    function animar(){
    	setTimeout(function() {$('.animeTop').addClass('anime-init');}, 150);
	    setTimeout(function() {$('#recarregarIcone').removeClass('recarregarIcone');$('#recarregarIconeMobile').removeClass('recarregarIcone')}, 1000);
    } 

	var inicialX;
	  addEventListener('touchstart', function(e) {
	    var toqueobj = e.changedTouches[0];
	    inicialX = toqueobj.pageX;
	    inicialY = toqueobj.pageY;
	  }, false);
	  //
	  addEventListener('touchmove', function(e){
	    e.preventDefault();
	  }, false)
	  //
	  addEventListener('touchend', function(e){
	    var toqueobj = e.changedTouches[0];
	    var distancia = toqueobj.pageX - inicialX;
	    var distanciaV = toqueobj.pageY - inicialY;
	    if(distanciaV > 0){

	    }
	    if((distancia > 100 & distanciaV<100) ||(distancia < -100 & distanciaV<100)){
	    $('.animeTop').removeClass('anime-init');
    	$('.animeTop').addClass('anime');
    	$('.animeTop').removeClass('animeTop');
    	$('.anime').removeClass('anime-init');
	    $('#recarregarIcone').addClass('recarregarIcone');
	    $('#recarregarIconeMobile').addClass('recarregarIcone');

        $.ajax({
            url: "<?php echo base_url(); ?>Raiz/dicasRecarregar",
            type: "POST",
            data: {},
            success: function(result){
            console.log(JSON.parse(result));
            $('#dica1').html(JSON.parse(result).dica1);
            $('#dica2').html(JSON.parse(result).dica2);
            $('#dica3').html(JSON.parse(result).dica3);
            $('#dica4').html(JSON.parse(result).dica4);
            $('#dica5').html(JSON.parse(result).dica5);
            $('#dica6').html(JSON.parse(result).dica6);
	        },
	        error: function(){
	            console.log('Error');
	        }
        });
        setTimeout(function() { $('.anime').addClass('anime-init');}, 150);
	    setTimeout(function() {$('#recarregarIcone').removeClass('recarregarIcone');$('#recarregarIconeMobile').removeClass('recarregarIcone')}, 1000);
	    }
	  }, false)

	const tipdisabledDicas = localStorage.getItem('tipdisabledDicas')
	if (tipdisabledDicas) {
	  document.getElementById("alerta-dica-dicas").style.display = "none";
	  $('#bg-dark2').removeClass('show'); 
	  $('#bg-dark2').addClass('d-none');
	  $('body').removeClass('modal-open');
	}else{$('#bg-dark2').addClass('d-none');$('#bg-dark2').removeClass('show'); }

	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		document.getElementById("alerta-dica-dicas").style.display = "visible";
		$('body').addClass('modal-open');
		$('#bg-dark2').removeClass('d-none');
		$('#bg-dark2').addClass('show');
	}else{document.getElementById("alerta-dica-dicas").style.display = "none";$('body').removeClass('modal-open');$('#bg-dark2').removeClass('show');$('#bg-dark2').addClass('d-none');}

	$("#hideDicas").click(function(e) {
	  e.preventDefault();
	  $('#bg-dark2').removeClass('show'); 
	  $('#bg-dark2').addClass('d-none');
	  $('body').removeClass('modal-open');
	  document.getElementById("alerta-dica-dicas").style.display = "none";
      localStorage.setItem('tipdisabledDicas', true); 
      return
	});

    var atual ="Dicas";
	</script>