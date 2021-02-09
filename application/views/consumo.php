			<div class="card bg-warning mx-auto text-center px-5 py-3 float-right inativo" id="gerandoRelatorio" style="position: fixed; bottom: 0px; right: 20px; z-index: 3;">Estamos gerando seu relatório</div>
			<div class="container first-container my-3" id="containerconsumo">		
		        <div class="my-4">
		        	<h2 class="mt-4 mb-1 card text-lg-left text-center card-theme px-5 py-3 theme">Analise seu Consumo</h2>
		        	<div class='alert card-theme card border-0 mx-auto' id="download-relatorio" role='alert' style="border: 1px solid #89898944 !important; margin-top: 0px!important">
		        	<a href="gerarPdf" onclick="avisopdf()" class="theme text-left ">Clique para baixar seu relatório mensal</a>
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
	<!-- Modal -->
	<div class="modal fade show d-block" id="tipconsumo" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered tutorialdvi1" role="document">
	  	<div class="rounded-circle card-theme theme tutorialdvi2"><div class="tutorialicone"><i class="fas fa-coins mx-auto"></i></div></div>
	    <div class="modal-content card-theme theme tutorialcontent">
	      <div class="modal-header tutorialheader"><h3 class="modal-title text-uppercase tutorialtitle" id="TituloModal">Consumo</h3></div>
	      <div class="modal-body text-center">
	      	<p class="tutorialp">Veja o quanto você tem consumido nos últimos dias em gráficos de linha e barra. Baixe o relatório mensal para ter tudo isso salvo em seu dispositivo.</p>
	      </div>
	      <div class="modal-footer tutorialfooter"><button class="btn btn-warning px-4 py-1" id="hidetipconsumo">Entendi</button></div>
	    </div>
	  </div>
	</div>
	<div class="modal-backdrop fade show" id="bg-dark"></div>
	<script>
		const tipconsumo = localStorage.getItem('tipconsumo')
		if (tipconsumo) {
		  $('#tipconsumo').removeClass('show');
		  $('#tipconsumo').removeClass('d-block'); 
		  $('#bg-dark').removeClass('show'); 
		  $('#bg-dark').addClass('d-none');
		  $('body').removeClass('modal-open');
		}else{$('body').addClass('modal-open');}
		$("#hidetipconsumo").click(function(e) {
		  e.preventDefault();
		    $('#tipconsumo').removeClass('show');
		  	$('#tipconsumo').removeClass('d-block'); 
		 	$('#bg-dark').removeClass('show'); 
		  	$('#bg-dark').addClass('d-none');
		  	$('body').removeClass('modal-open');
		    localStorage.setItem('tipconsumo', true);
		});
	</script>
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