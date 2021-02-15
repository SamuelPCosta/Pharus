			<div class="container first-container ideal">
				<div class="card py-5 px-5 my-4 shadow card-theme card1">
					<div class="row align-items-center">
						<div class="col-xl col-md-12 mx-auto px-0">
				        	<h1 class="theme" style="font-size: 2.5em;">
					        	<?php 
					        		$faixa = $this->session->userdata('faixa');
					        		if (isset($faixa)){echo "Ideal de consumo: <br>de ".$this->session->userdata('faixa')." reais.";}else{echo "Ideal de consumo <br>";}
					        	?>
					        	</h1><br>
					        	<p class="theme mb-4">&emsp;&emsp;Aqui você tem acesso a um questionário simples onde suas respostas serão registradas e analisadas com os dados de outros usuários, gerando assim uma faixa de consumo <!-- que fará uma análise das respostas de outros usuários --> para podermos te dar um maior suporte a partir de possíveis soluções para seus problemas. Aprimore seus resultados na página <i>Simulador.</i></p>
					        	<div class="d-flex justify-content-center my-3">
									<a href="simulador" name="button" class="next btn btn-warning">Conheça o simulador</a>
								</div>
						</div>
						<!-- <div class="vertical-line"></div> -->
						<div class="col-xl-7 col-md-12 mx-auto px-0 card2">
							<div class="col-md-12 px-0" id="questionario"><!--Div do questionário-->
			     			<?php 
			     				if (!isset($_GET['questao'])){
			     					$questao = 1;
			     				}else{
			     					$questao = $_GET['questao'];
			     				};
			     				if ($questao==1) {
									$pergunta = array(
										'Pergunta' => "Quantas lavagens você chega a fazer no mesmo dia na máquina de lavar roupas?",
										'Alternativa_a' => "Até 2 vezes",
										'Alternativa_b' => "Até 3 vezes",
										'Alternativa_c' => "4 vezes ou mais",
										'Alternativa_d' => "Pular pergunta"
									);
								}elseif ($questao==2) {
									$pergunta = array(
										'Pergunta' => "Até quantos dias na semana você usa a máquina de lavar roupas?",
										'Alternativa_a' => "1 dia",
										'Alternativa_b' => "2 dias",
										'Alternativa_c' => "3 dias  ou mais",
										'Alternativa_d' => "Pular pergunta"
									);
								}elseif ($questao==3) {
									$pergunta = array(
										'Pergunta' => "Quantas vezes no dia você usa sua cafeteira?",
										'Alternativa_a' => "Até 1 vez",
										'Alternativa_b' => "2 a 3 vezes",
										'Alternativa_c' => "4 vezes ou mais",
										'Alternativa_d' => "Pular pergunta"
									);
								}elseif ($questao==4) {
									$pergunta = array(
										'Pergunta' => "Quanto tempo você usa seu computador por dia?",
										'Alternativa_a' => "Até 3 horas",
										'Alternativa_b' => "Até 5 horas",
										'Alternativa_c' => "Até 8 horas",
										'Alternativa_d' => "Pular pergunta"
									);
								}elseif ($questao==5) {
									$pergunta = array(
										'Pergunta' => "Quantas vezes você usa o ferro elétrico na semana?",
										'Alternativa_a' => "1 a 2 vezes",
										'Alternativa_b' => "2 a 3 vezes",
										'Alternativa_c' => "4 vezes ou mais",
										'Alternativa_d' => "Pular pergunta"
									);
								}elseif ($questao==6) {
									$pergunta = array(
										'Pergunta' => "Por quanto tempo você costuma usar o microondas no dia?",
										'Alternativa_a' => "Até 30 minutos",
										'Alternativa_b' => "Até 1 hora",
										'Alternativa_c' => "2 horas ou mais",
										'Alternativa_d' => "Pular pergunta"
									);
								}elseif ($questao==7) {
									$pergunta = array(
										'Pergunta' => "Por quanto tempo seu ventilador permanece ligado?",
										'Alternativa_a' => "Até 3 horas",
										'Alternativa_b' => "Até 5 horas",
										'Alternativa_c' => "14 horas ou mais",
										'Alternativa_d' => "Pular pergunta"
									);
								}elseif ($questao==8) {
									$pergunta = array(
										'Pergunta' => "Quantas horas por dia você dorme?",
										'Alternativa_a' => "Até 6 horas",
										'Alternativa_b' => "Até 8 horas",
										'Alternativa_c' => "Até 10 horas",
										'Alternativa_d' => "Pular pergunta"
									);
								}elseif ($questao==9) {
									$pergunta = array(
										'Pergunta' => "Em qual horário você dorme?",
										'Alternativa_a' => "22 horas ou antes",
										'Alternativa_b' => "23 horas",
										'Alternativa_c' => "00 horas ou depois",
										'Alternativa_d' => "Pular pergunta"
									);
								}elseif ($questao==10) {
									$pergunta = array(
										'Pergunta' => "O que fica ligado enquanto você dorme?",
										'Alternativa_a' => "Nada",
										'Alternativa_b' => "Algumas lâmpadas",
										'Alternativa_c' => "O ar condicionado",
										'Alternativa_d' => "Pular pergunta"
									);
								}
			     			?>
			     			<nav aria-label="...">
								<ul class="pagination justify-content-center my-3" style="height: 35px">
									<?php for ($i=1; $i <=10 ; $i++){//numero de questoes na paginacao ?>
										<li class="page-item" id="questao<?php echo $i?>"><a class="text-center rounded-circle page-link nperguntas theme active"><?php echo $i; ?></a></li>
									<?php }?>
								</ul>
							</nav>
			     			<div class="pergunta my-3 mx-auto">
			     				<h3><?php echo $pergunta['Pergunta']?></h3>
			     				<?php  
			     					if ($questao==1) {
			     				?>
			     					<span class="mx-auto" style="width: 90%; font-size: 1.2em;">Responda com base no uso diário dos aparelhos e no tempo em stand by.</span>
			     				<?php
			     					}
			     				?>
			     			</div>
			     			<form method="post" action="Questionario/perguntas/<?php echo $questao;?>">
			     				<input type="radio" name="resposta" value="resposta_a" id="resposta_a"> 
							  	<label for="resposta_a">
							  		<div class="alternativas alternativa_a mx-auto"><h4><?php echo $pergunta['Alternativa_a']?></h4></div>
							  	</label>
							  	<input type="radio" name="resposta" value="resposta_b" id="resposta_b"> 
							  	<label for="resposta_b"> 
							  		<div class="alternativas alternativa_b mx-auto"><h4><?php echo $pergunta['Alternativa_b']?></h4></div>
							  	</label>
							  	<input type="radio" name="resposta" value="resposta_c" id="resposta_c"> 
							  	<label for="resposta_c">
							  		<div class="alternativas alternativa_c mx-auto"><h4><?php echo $pergunta['Alternativa_c']?></h4></div>
							  	</label>
							  	<input type="radio" name="resposta" value="resposta_d" id="resposta_d"> 
							  	<label for="resposta_d">
							  		<div class="alternativas alternativa_d mx-auto"><h4><?php echo $pergunta['Alternativa_d']?></h4></div>
							  	</label>
							  	<input type="radio" name="resposta" value="resposta_pular" checked>
							  	<div class="d-flex justify-content-center my-3">
									<button type="submit" name="button" class="next btn btn-warning">Próxima</button>
								</div>
								</form>					
			     		</div>
						</div>
					</div>
				</div>
				</div>
				<!--conteudo-->
		<!-- Modal -->
	<div class="modal fade show d-block" id="tipideal" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered tutorialdvi1" role="document">
	  	<div class="rounded-circle card-theme theme tutorialdvi2"><div class="tutorialicone"><i class="fas fa-funnel-dollar mx-auto"></i></div></div>
	    <div class="modal-content card-theme theme tutorialcontent">
	      <div class="modal-header tutorialheader"><h3 class="modal-title text-uppercase tutorialtitle" id="TituloModal">Ideal de consumo</h3></div>
	      <div class="modal-body text-center">
	      	<p class="tutorialp">Responda as perguntas e veja o quanto você deveria gastar no mês com a conta de energia a partir do tempo que você passa usando determinados equipamentos eletrônicos.</p>
	      </div>
	      <div class="modal-footer tutorialfooter"><button class="btn btn-warning px-4 py-1" id="hidetipideal">Entendi</button></div>
	    </div>
	  </div>
	</div>
	<div class="modal-backdrop fade show" id="bg-dark"></div>
	<script>
		const tipideal = localStorage.getItem('tipideal')
		if (tipideal) {
		  $('#tipideal').removeClass('show');
		  $('#tipideal').removeClass('d-block'); 
		  $('#bg-dark').removeClass('show'); 
		  $('#bg-dark').addClass('d-none');
		  $('body').removeClass('modal-open');
		}else{$('body').addClass('modal-open');}
		$("#hidetipideal").click(function(e) {
		  e.preventDefault();
		    $('#tipideal').removeClass('show');
		  	$('#tipideal').removeClass('d-block'); 
		 	$('#bg-dark').removeClass('show'); 
		  	$('#bg-dark').addClass('d-none');
		  	$('body').removeClass('modal-open');
		    localStorage.setItem('tipideal', true);
		});
	</script>
	<?php 
		if (isset($_GET['questao']) && $_GET['questao']>=2) {
	?>
			<script>
		    $(document).ready(function() { 
		    	window.location.href='#questionario';
			});
			</script>
	<?php
		}
	?>
	<script>
    var atual ="Ideal de Consumo";
    	<?php if (isset($_GET['questao'])){?> 
    var questao="questao<?php echo $_GET['questao'];?>";
		<?php }else{?>
	var questao="questao1";
		<?php }?>
	</script>
