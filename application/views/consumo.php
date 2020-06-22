			<div class="container first-container my-3" id="containerconsumo">		
		        <div class="my-4">
		        	<h2 class="mt-4 mb-1 card text-lg-left text-center card-theme px-5 py-3 theme">Analise seu Consumo</h2>
		        	<div class='alert card-theme card border-0 float-left' id="alerta--chart" role='alert' style="width: 100%">
		        	<a href="gerarPdf" class="theme">Clique aqui para baixar seu relatório mensal</a>
		        	</div>
		        	<div class='alert alert-danger bg-warning border-0 float-left' id="alerta-dica-chart" role='alert' style="width: 100%">
		        	Se você ainda não foi classificado em uma faixa de <wbr>consumo descubra o seu <a href="idealdeconsumo" class="text-secondary">ideal de consumo</a>.<br>
		        	Clique nas legendas dos dados <wbr>para alterar a visibilidade deles.
		        	<span class="float-right ml-4" id="hide" onclick="escoder()" style="cursor: pointer;">Ok</span><span class="float-right text-dark"><input type="checkbox" name="" id="del" class="mr-1"><label for="del">Não exibir novamente</label></span></div>
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
	</script>