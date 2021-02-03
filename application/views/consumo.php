			<div class="card bg-warning mx-auto text-center px-5 py-3 float-right inativo" id="gerandoRelatorio" style="position: fixed; bottom: 0px; right: 20px; z-index: 3;">Estamos gerando seu relatório</div>
			<div class="container first-container my-3" id="containerconsumo">		
		        <div class="my-4">
		        	<h2 class="mt-4 mb-1 card text-lg-left text-center card-theme px-5 py-3 theme">Analise seu Consumo</h2>
		        	<div class='alert card-theme card border-0 mx-auto' id="download-relatorio" role='alert' style="border: 1px solid #89898944 !important;">
		        	<a href="gerarPdf" onclick="avisopdf()" class="theme text-left">Clique aqui para baixar seu relatório mensal</a>
		        	</div>
		        	<div class='alert alert-danger bg-warning border-0 mx-auto' id="alerta-dica-chart" role='alert'>
		        	Descubra o seu <a href="idealdeconsumo" class="text-secondary">ideal de consumo.</a><wbr>
		        	<span> Clique nas legendas dos dados <wbr>para alterar a visibilidade deles.</span>
		        	<span class="float-right ml-4" id="hide" onclick="escoder()" style="cursor: pointer;">Ok</span><span class="float-right text-dark"><input type="checkbox" name="" id="del" class="mr-1"><label for="del">Não exibir novamente</label></span></div>
		        	
		        	<canvas id="line-chart" height="275"></canvas>
		            <canvas id="bar-chart" height="275"></canvas>
		        <!--conteudo-->
		    </div>
</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
	<!--Importação ajax-->
	<?php 
		if ($this->session->userdata('simulacaoBackup'.$usuario)!=NULL){
			$consumoSimuladoPorHora = $this->session->userdata('simulacaoBackup'.$usuario);
		}else{$consumoSimuladoPorHora = null;}
		// print_r($this->session->userdata('consumo'.$usuario));
		// echo "<br><br>";
		// print_r($this->session->userdata('simulacaoBackup'.$usuario));
	?>
	<script>
		var consumoSimuladoPorHora = '<?php echo json_encode($consumoSimuladoPorHora) ?>';
		var meta = '<?php echo $meta; ?>';
		var meuconsumo = '<?php echo $meuconsumo; ?>';
		var minhafaixa = '<?php echo $minhafaixa; ?>';
		var mediafaixa = '<?php echo $mediaFaixa; ?>';
		var mesatual = '<?php
			setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
			date_default_timezone_set('America/Sao_Paulo'); 
		echo ucfirst(strftime('%B', strtotime('today'))); 
		?>';
		console.log(consumoSimuladoPorHora);
		localStorage.setItem('consumo', consumoSimuladoPorHora);
		var consumo = localStorage.getItem('consumo');
		console.log(consumo);
	</script>
	<script>
    var atual ="Consumo";
    function avisopdf(){
    	$("#gerandoRelatorio").removeClass('inativo')
    	setTimeout(function(){$("#gerandoRelatorio").addClass('inativo')}, 3200);
    }
	</script>