		<!--conteudo-->
        <div id="page-content-wrapper">
            <div class="container first-container meta">
	        <div class="row align-items-center">
	     		<div class="col-xl-6 col-md-12">
	     			<p class="valor">
	     			<?php 
	     			//$meta=0;
	     			$meta = $this->session->userdata('meta');
	     				if ($meta==0) {
	     					echo("Defina sua <br> meta mensal.");
	     				}else{
	     					echo("Sua meta é: <br>".$meta." reais.");
	     				}
	     			?>
	     			</p>
	     			<!--Taca PHP--><br>
	     			<p class="instrucoes">
	     			<?php 
	     				if ($meta==0) {
	     					echo("Você ainda não tem uma meta de consumo até o final do mês. Para definir uma meta, preencha o campo ao lado com o valor e clique em <i>'Salvar Meta'</i>.");
	     				}else{
	     					echo("Você deve gastar menos que isto até o final do mês. Para alterar esse valor clique em <i>'Editar Meta'</i> ao lado.");
	     				}
	     			?>	
	     			</p>
	     			<?php  
	     			if ($meta!=0) {
	     				$this->load->helper('cookie');
	     				$mensagem = get_cookie('mensagem_meta');
	     				echo "
	     				<div class='alert alert-primary' role='alert' id='mensagem'>
	     				".$mensagem."
						</div>";
	     			}		
	     			?>
	     		</div>
	     		 <div class="col-xl-6 col-md-12 gasto">	        	
		        			<?php  
			        			if ($meta==0) {
			        		?>
			        <h2>Defina a Sua <wbr>Meta Mensal</h2>
		        	<form method="post" action="cadastro_meta/adicionar">
		        		<div id="meta">
			        			<input type="number" min="20" max="2500" name="meta" placeholder="Apenas números. Ex.: 90">
			        			<button type="submit" class="btn">Salvar Meta</button><!--Esse botão alterna pra editar-->
			        		<?php  
			        			}else{
			        		?> 
			        <h2>Deseja Alterar a Sua <wbr>Meta Mensal?</h2>
		        	<form method="post" action="cadastro_meta/adicionar">
		        		<div id="meta">
				        		<!--Alterar de um campo e botão para os outros-->
				        		<input type="number" min="20" max="2500" name="meta" value="<?php echo $meta ?>" placeholder="Apenas números. Ex.: 90">
				        		<!--o name do input muda-->
				        		<?php 
				        			if (isset($_GET['error'])){
				        				if ($_GET['error']==1) {
				        		?>
				        			<div class='alert alert-danger' role='alert'>Para mudar sua meta, altere<br> o valor  do campo numério acima.</div>
				        		<?php
				        				}
				        			}
				        		?>
				        		<button type="submit" class="btn">Editar Meta</button><!--Esse botão antes era salvar-->
			        		<?php  
			        			}
			        		?> 
		        		</div>
		        	</form>
		        	<a href="idealdeconsumo" class="btn" id="consumoideal">Qual o Consumo Ideal?</a>
		        </div>
            </div>
            </div>
            <div class="container-fluid">
            	<div class="row">
            		<div class="col-xl-8 col-md-12 colunas-meta">
            			<h1>Racionalize</h1><br>
            			<p>&emsp;&emsp;O consumo de energia elétrica vem aumentando cada vem mais e isso traz uma série de problemas para o nosso ecossistema, pois no processo de produção dessa corrente elétrica há uma série de fatores prejudiciais, como é o caso da construção de hidrelétricas (representa mais de 90% de nossos recursos energéticos) que contribuem para o desmatamento, areamento do solo ou mesmo na extinção de espécies de animais, além da energia elétrica, eólica e dentre outros. Sendo assim, deve-se evitar esse consumo desenfreado, logo, visando o bem estar social e ambiental.</p>
            		</div>
            		<div class="col-xl-4 col-md-12 colunas-meta"></div>
            	</div>
            </div>
        </div>
        <!--conteudo-->
		</div>
</div>


	<!-- Footer -->
	<footer class="page-footer font-small">
	  <div>
	  	<ul>
	  		<li><a href="quemsomos">Quem Somos?</a></li> <!--Link pra página 'Quem somos?'-->
	  	</ul>
	  </div>
	</footer>
	<!-- Footer -->

	
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js'></script><!--Importação do Ajax...-->
	<script  src="<?= base_url()?>assets/js/script.js"></script><!--Importação do JS do menu...-->
	<script  src="<?= base_url()?>assets/js/scriptcollapse.js"></script><!--Importação do JS do menu...-->
	<script src='http://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js'></script><!--Importação do gráfico-->

	<!--Abaixo seguem os scripts para o funcionamento do JS do BS...-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
	<!--Fim dos scripts do BS-->
	<script>
    var atual ="Metas";
	</script>
</body>
</html>
<!--https://codepen.io/hudsonsilvaoliveira/pen/doZNep?editors=1010 gráfico de colunas-->