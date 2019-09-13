			<div class="container first-container ideal">
		        <div class="row align-items-center">
		            <div class="col-xl-6 col-md-12">
		        	<h1 class="margin-top theme">Ideal de consumo <br>
			        	<?php 
			        		$faixa = $this->session->userdata('faixa');
			        		if (isset($faixa)){echo "Entre ".$this->session->userdata('faixa');}
			        	?>
		        	</h1><br>
		        	<p class="theme">&emsp;&emsp;Aqui você tem acesso a um questionário simples onde suas respostas seram registradas e analisadas com os dados de outros usuários, gerando assim nossa faixa de consumo que fará uma análise das respostas de outros usuários para podermos dar um maior suporte a eles a partir de possíveis soluções para seus problemas.</p>        	
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
								'Pergunta' => "Pergunta 01",
								'Alternativa_a' => "Alternativa a",
								'Alternativa_b' => "Alternativa b",
								'Alternativa_c' => "Alternativa c"
							);
						}elseif ($questao==2) {
							$pergunta = array(
								'Pergunta' => "Pergunta 02",
								'Alternativa_a' => "Alternativa a",
								'Alternativa_b' => "Alternativa b",
								'Alternativa_c' => "Alternativa c"
							);
						}elseif ($questao==3) {
							$pergunta = array(
								'Pergunta' => "Pergunta 03",
								'Alternativa_a' => "Alternativa a",
								'Alternativa_b' => "Alternativa b",
								'Alternativa_c' => "Alternativa c"
							);
						}elseif ($questao==4) {
							$pergunta = array(
								'Pergunta' => "Pergunta 04",
								'Alternativa_a' => "Alternativa a",
								'Alternativa_b' => "Alternativa b",
								'Alternativa_c' => "Alternativa c"
							);
						}elseif ($questao==5) {
							$pergunta = array(
								'Pergunta' => "Pergunta 05",
								'Alternativa_a' => "Alternativa a",
								'Alternativa_b' => "Alternativa b",
								'Alternativa_c' => "Alternativa c"
							);
						}
	     			?>
	     			<nav aria-label="...">
						<ul class="pagination justify-content-center my-3">
							<?php for ($i=1; $i <=5 ; $i++){//numero de questoes na paginacao ?>
								<li class="page-item" id="questao<?php echo $i?>"><a class="page-link nperguntas theme active"><?php echo $i; ?></a></li>
							<?php }?>
						</ul>
					</nav>
	     			<div class="pergunta my-3">
	     				<h3><?php echo $pergunta['Pergunta']?></h3>
	     			</div>
	     			<form method="post" action="Questionario/perguntas/<?php echo $questao;?>">
	     				<input type="radio" name="resposta" value="resposta_a" id="resposta_a"> 
					  	<label for="resposta_a">
					  		<div class="alternativas alternativa_a"><h4><?php echo $pergunta['Alternativa_a']?></h4></div>
					  	</label>
					  	<input type="radio" name="resposta" value="resposta_b" id="resposta_b"> 
					  	<label for="resposta_b"> 
					  		<div class="alternativas alternativa_b"><h4><?php echo $pergunta['Alternativa_b']?></h4></div>
					  	</label>
					  	<input type="radio" name="resposta" value="resposta_c" id="resposta_c"> 
					  	<label for="resposta_c">
					  		<div class="alternativas alternativa_c"><h4><?php echo $pergunta['Alternativa_c']?></h4></div>
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
		</div>
</div>

	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js'></script><!--Importação do Ajax...-->
	<script  src="<?= base_url()?>assets/js/script.js"></script><!--Importação do JS do menu...-->

	<!--Abaixo seguem os scripts para o funcionamento do JS do BS...-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
	<!--Fim dos scripts do BS-->
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
</body>
</html>