			<div class="container first-container my-3" id="containerconsumo">		
		        <div class="my-4">
		        	<h2 class="mt-4 mb-1 card text-lg-left text-center card-theme px-5 py-3 theme">Analise seu Consumo</h2>
		        	<div class='alert alert-danger bg-warning border-0 float-left' id="alerta-dica-chart" role='alert' style="width: 100%">Clique nas legendas dos dados (Consumo, Meta ou média) <wbr>para alterar a visibilidade das colunas.
		        	<span class="float-right ml-4" id="hide" onclick="esconder()" style="cursor: pointer;">Ok</span><span class="float-right text-dark"><input type="checkbox" name="" id="del" class="mr-1"><label for="del">Não exibir novamente</label></span></div>
		        <div class="row">
		        	<div class="col-md-12 graficos">
		        		<canvas id="line-chart" height="275"></canvas>
		        	</div>
		            <div class="col-md-12 graficos">
		            	<canvas id="bar-chart" height="275"></canvas>
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