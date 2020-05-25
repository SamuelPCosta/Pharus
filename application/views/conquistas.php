			<div class="container-fluid first-container dicas-container conquistas-container">
	        <div class="row">
	            <div class="col-xl col-12 colunas">
				    <div class="a mb-4 card-theme theme card shadow-sm d-table">
				    	<div class="align-middle d-table-cell">
					    	<h1 class=""><i class="fas fa-star"></i></h1>
					      	<p class="animeTop text-center w-75 pt-0"> 
					      		Faça seu cadastro e aproveite as vantagens do Pharus.
					      	</p>
				      	</div>
				    </div>
				    <div class="a mb-4 card-theme theme card shadow-sm d-table">
				    	<div class="align-middle d-table-cell">
					    	<h1 class="nao_conquistado conquista2"><i class="fas fa-star"></i></h1>
					      	<p class="animeTop text-center w-75 pt-0"> 
					      		Faça sua primeira simulação.
					      	</p>
				      	</div>
				    </div>
				    <div class="a mb-4 card-theme theme card shadow-sm d-table">
				    	<div class="align-middle d-table-cell">
					    	<h1 class="nao_conquistado conquista3"><i class="fas fa-star"></i></h1>
					      	<p class="animeTop text-center w-75 pt-0"> 
					      		Mantenha seu consumo abaixo do limite por 10 dias.
					      	</p>
				      	</div>
				    </div>
			    </div>
			    <div class="col-xl col-12 colunas">
				    <div class="a mb-4 card-theme theme card shadow-sm d-table">
				    	<div class="align-middle d-table-cell">
					    	<h1 class="nao_conquistado conquista4"><i class="fas fa-star"></i></h1>
					      	<p class="animeTop text-center w-75 pt-0"> 
					      		Mantenha seu consumo abaixo do limite por um mês.
					      	</p>
				      	</div>
				    </div>
				    <div class="a mb-4 card-theme theme card shadow-sm d-table">
				    	<div class="align-middle d-table-cell">
					    	<h1 class="nao_conquistado conquista5"><i class="fas fa-star"></i></h1>
					      	<p class="animeTop text-center w-75 pt-0"> 
					      		Desligue o monitor do PC sempre que for se ausentar por mais de 5 minutos.
					      	</p>
				      	</div>
				    </div>
				    <div class="a mb-4 card-theme theme card shadow-sm d-table">
				    	<div class="align-middle d-table-cell">
					    	<h1 class="nao_conquistado conquista6"><i class="fas fa-star"></i></h1>
					      	<p class="animeTop text-center w-75 pt-0"> 
					      		Desligue o monitor do PC sempre que for se ausentar por mais de 5 minutos.
					      	</p>
				      	</div>
				    </div>
			    </div>
			    <div class="col-xl col-12 colunas">
				    <div class="a mb-4 card-theme theme card shadow-sm d-table">
				    	<div class="align-middle d-table-cell">
					    	<h1 class="nao_conquistado conquista7"><i class="fas fa-star"></i></h1>
					      	<p class="animeTop text-center w-75 pt-0"> 
					      		Desligue o monitor do PC sempre que for se ausentar por mais de 5 minutos.
					      	</p>
				      	</div>
				    </div>
				    <div class="a mb-4 card-theme theme card shadow-sm d-table">
				    	<div class="align-middle d-table-cell">
					    	<h1 class="nao_conquistado conquista8"><i class="fas fa-star"></i></h1>
					      	<p class="animeTop text-center w-75 pt-0"> 
					      		Desligue o monitor do PC sempre que for se ausentar por mais de 5 minutos.
					      	</p>
				      	</div>
				    </div>
				    <div class="a mb-4 card-theme theme card shadow-sm d-table">
				    	<div class="align-middle d-table-cell">
					    	<h1 class="nao_conquistado conquista9"><i class="fas fa-star"></i></h1>
					      	<p class="animeTop text-center w-75 pt-0"> 
					      		Desligue o monitor do PC sempre que for se ausentar por mais de 5 minutos.
					      	</p>
				      	</div>
				    </div>
			    </div>
		    </div>
		    <!--conteudo-->
		</div>

	<script>
	$(document).ready(function (){
		for (var i = 1; i < 4; i++) {
		var j = i;
		$.ajax({
	        url: "<?php echo base_url(); ?>Conquist/conquista"+i,
            type: "POST",
            data: {},
            success: function(result){
            console.log(JSON.parse(result));
            if (JSON.parse(result).c2=="true") {
            	console.log(JSON.parse(result).c2)
            	$('.conquista2').removeClass('nao_conquistado');
            }if (JSON.parse(result).c3=="true") {
            	console.log(JSON.parse(result).c3)
            	$('.conquista3').removeClass('nao_conquistado');
            }
	      },
	      error: function(){
	          console.log('Error');
	      }
	    });
		}
    });
    var atual ="Conquistas";
	</script>