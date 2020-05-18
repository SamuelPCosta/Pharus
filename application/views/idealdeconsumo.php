			<div class="container first-container ideal">
		        <div class="row align-items-center">
		            <div class="col-xl-6 col-md-12">
		        	<h1 class="mt-4 mb-1 card text-lg-left text-center card-theme px-5 py-3 theme">
			        	<?php 
			        		$faixa = $this->session->userdata('faixa');
			        		if (isset($faixa)){echo "Seu ideal de consumo <br> é entre ".$this->session->userdata('faixa');}else{echo "Ideal de consumo <br>";}
			        	?>
		        	</h1><br>
		        	<p class="theme mb-4">&emsp;&emsp;Aqui você tem acesso a um questionário simples onde suas respostas serão registradas e analisadas com os dados de outros usuários, gerando assim uma faixa de consumo <!-- que fará uma análise das respostas de outros usuários --> para podermos te dar um maior suporte a partir de possíveis soluções para seus problemas. Você pode conferir esses dados na página <i>Consumo.</i></p>        	
		        </div>
	     		<div class="col-xl-6 col-md-12 card py-5 card-theme shadow" id="questionario"><!--Div do questionário-->
	     			<?php 
	     				if (!isset($_GET['questao'])){
	     					$questao = 1;
	     				}else{
	     					$questao = $_GET['questao'];
	     				};
	     				if ($questao==1) {
							$pergunta = array(
								'Pergunta' => "Por quantas horas sua máquina de lavar roupas permanece ligada?",
								'Alternativa_a' => "Até 3 horas",
								'Alternativa_b' => "Até 5 horas",
								'Alternativa_c' => "Até 8 horas",
								'Alternativa_d' => "Pular pergunta"
							);
						}elseif ($questao==2) {
							$pergunta = array(
								'Pergunta' => "Por quantas horas sua cafeteira permanece ligada?",
								'Alternativa_a' => "Até 3 horas",
								'Alternativa_b' => "Até 5 horas",
								'Alternativa_c' => "Até 8 horas",
								'Alternativa_d' => "Pular pergunta"
							);
						}elseif ($questao==3) {
							$pergunta = array(
								'Pergunta' => "Por quantas horas seu computador permanece ligado?",
								'Alternativa_a' => "Até 3 horas",
								'Alternativa_b' => "Até 5 horas",
								'Alternativa_c' => "Até 8 horas",
								'Alternativa_d' => "Pular pergunta"
							);
						}elseif ($questao==4) {
							$pergunta = array(
								'Pergunta' => " Por quantas horas você utiliza o ferro elétrico?",
								'Alternativa_a' => "Até 3 horas",
								'Alternativa_b' => "Até 5 horas",
								'Alternativa_c' => "Até 8 horas",
								'Alternativa_d' => "Pular pergunta"
							);
						}elseif ($questao==5) {
							$pergunta = array(
								'Pergunta' => "Por quantas horas microondas permanece ligado?",
								'Alternativa_a' => "Até 3 horas",
								'Alternativa_b' => "Até 5 horas",
								'Alternativa_c' => "Até 8 horas",
								'Alternativa_d' => "Pular pergunta"
							);
						}elseif ($questao==6) {
							$pergunta = array(
								'Pergunta' => "Por quantas horas seu ventilador permanece ligado?",
								'Alternativa_a' => "Até 3 horas",
								'Alternativa_b' => "Até 5 horas",
								'Alternativa_c' => "Até 8 horas",
								'Alternativa_d' => "Pular pergunta"
							);
						}elseif ($questao==7) {
							$pergunta = array(
								'Pergunta' => "Quantas horas por dia você dorme?",
								'Alternativa_a' => "Até 6 horas",
								'Alternativa_b' => "Até 8 horas",
								'Alternativa_c' => "Até 10 horas",
								'Alternativa_d' => "Pular pergunta"
							);
						}elseif ($questao==8) {
							$pergunta = array(
								'Pergunta' => "De qual hora você vai dormir?",
								'Alternativa_a' => "22 horas ou antes",
								'Alternativa_b' => "23 horas",
								'Alternativa_c' => "00 horas ou depois",
								'Alternativa_d' => "Pular pergunta"
							);
						}elseif ($questao==9) {
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
						<ul class="pagination justify-content-center my-3">
							<?php for ($i=1; $i <=9 ; $i++){//numero de questoes na paginacao ?>
								<li class="page-item" id="questao<?php echo $i?>"><a class="text-center rounded-circle page-link nperguntas theme active"><?php echo $i; ?></a></li>
							<?php }?>
						</ul>
					</nav>
	     			<div class="pergunta my-3 mx-auto">
	     				<h3><?php echo $pergunta['Pergunta']?></h3>
	     				<?php  
	     					if ($questao==1) {
	     				?>
	     					<p class="mx-auto" style="width: 90%; font-size: 1.2em">Responda com base no uso diário dos aparelhos e no tempo em stand by.</p>
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
					  	<div class="d-flex justify-content-center my-3">
							<button type="submit" name="button" class="next btn btn-warning">Próxima</button>
						</div>
						</form>					
	     		</div>
	            </div>
            </div>
        </div>
        <!--conteudo-->
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
