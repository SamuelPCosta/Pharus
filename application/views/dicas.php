			<div class="container-fluid first-container dicas-container">
	        <div class="row">
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
			      		<button id="recarregar" onclick="recarregar()" class="btn bg-warning"><i class="fas fa-redo" id="recarregarIcone"></i> Novas dicas</button>
			      		<button id="recarregarMobile" onclick="recarregar()" class="btn bg-warning"><i class="fas fa-redo" id="recarregarIconeMobile"></i></button>
			      	</div>
			      </div>
			      <!--conteudo-->
			</div>

	<script>
    function recarregar(){
    	$('.anime').addClass('animeTop');
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
	        },
	        error: function(){
	            console.log('Error');
	        }
        });
        setTimeout(function() { $('.animeTop').addClass('anime-init');}, 150);
	    setTimeout(function() {$('#recarregarIcone').removeClass('recarregarIcone');$('#recarregarIconeMobile').removeClass('recarregarIcone')}, 1000);
    };

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
	    if(distancia > 100 & distanciaV<100){
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

	var largura = window.innerWidth;
	if (largura<768) {
	  $('#dark').addClass('visible');
	}
    var atual ="Dicas";
	</script>