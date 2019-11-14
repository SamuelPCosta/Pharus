			<div class="container-fluid first-container px-5 my-3">		
		        <div class="my-4">
		        	<h2 class="my-4 card text-lg-left text-center card-theme px-5 py-3 theme">Analise seu Consumo</h2>
		        <div class="row">
		        	<div class="col-xl-6 col-md-12 graficos">
		        		<canvas id="line-chart" height="350" title="Clique na legenda para ocultar dados"></canvas>
		        	</div>
		            <div class="col-xl-6 col-md-12 graficos">
		            	<canvas id="bar-chart" height="350" title="Clique na legenda para ocultar dados"></canvas>
		       		</div>
		        </div>
		        <!--conteudo-->
		    </div>
</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
	<!--Importação ajax-->
	<?php $consumoPorHora = $this->session->userdata('consumo'); ?>
	<script>
		var consumoPorHora = '<?php echo json_encode($consumoPorHora) ?>';
		console.log(consumoPorHora);
		localStorage.setItem('consumo', consumoPorHora);
		var consumo = localStorage.getItem('consumo');
		console.log(consumo);
	</script>
	<script>
    var atual ="Consumo";
	</script>

	