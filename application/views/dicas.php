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
			      	</div>
			      </div>
			      <!--conteudo-->
			</div>

	<script>
    function recarregar(){
    	var $targetTop = $('.animeTop'),
            animationClass = 'anime-init',
            windowHeight = $(window).height()+300,
            offset = windowHeight - (windowHeight /4);

	        var documentTop = $(document).scrollTop();
	        $targetTop.each(function() {
	            $(this).removeClass(animationClass);
	        });  
	        $('#recarregarIcone').addClass('recarregarIcone');

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

        function animeScroll() {
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
	    setTimeout(function() {$('#recarregarIcone').removeClass('recarregarIcone')}, 1000);
    };

    var atual ="Dicas";
	</script>