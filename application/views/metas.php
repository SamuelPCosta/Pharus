			<div class="container first-container container-metas">
	        <div class="row align-items-center">
	     		<div class="col-xl-6 col-md-12">
	     			<h2 class="valor margin-top theme">
	     			<?php 
	     			//$meta=0;
	     			$meta = $this->session->userdata('meta');
	     				if ($meta==0) {
	     					echo("Defina sua <br> meta mensal.");
	     				}else{
	     					echo("Sua meta é: <br><span style='font-family: Open Sans !important; font-weight:lighter;'>".$meta."</span> reais.");
	     				}
	     			?>
	     			</h2>
	     			<!--Taca PHP--><br>
	     			<p class="instrucoes theme">
	     			<?php 
	     				if ($meta==0) {
	     					echo("Você ainda não tem uma meta de consumo até o final do mês. Para definir uma meta, preencha o campo ao lado com o valor e clique em <span class='font-italic'>'Salvar Meta'</span>.");
	     				}else{
	     					echo("Você deve gastar menos que isto até o final do mês. Para alterar esse valor clique em <span class='font-italic'>'Editar Meta'</span> ao lado.");
	     				}
	     			?>	
	     			</p>
	     			<?php  
	     			if ($meta!=0) {
	     				$this->load->helper('cookie');
	     				$mensagem = get_cookie('mensagem_meta');
	     				echo "
	     				<div class='alert alert-primary mx-auto' role='alert' id='mensagem'>
	     				".$mensagem."
						</div>";
	     			}		
	     			?>
	     		</div>
	     		 <div class="col-xl-6 col-md-12 metas px-5">	
	     		 <div class="card py-5 px-0 shadow card-theme theme mx-auto mb-5">	
		        			<?php  
			        			if ($meta==0) {
			        		?>
			        <h2>Defina a Sua <wbr>Meta Mensal</h2>
		        	<form method="post" action="cadastro_meta/adicionar">
		        		<div id="meta">
			        			<input type="number" min="20" max="10000" name="meta" placeholder="Apenas números. Ex.: 90" class="shadow bg-light rounded">
			        			<button type="submit" class="btn btn-warning mx-auto">Salvar Meta</button><!--Esse botão alterna pra editar-->
			        		<?php  
			        			}else{
			        		?> 
			        <h2>Deseja Alterar a Sua <wbr>Meta Mensal?</h2>
		        	<form method="post" action="cadastro_meta/adicionar">
		        		<div id="meta">
				        		<input type="number" min="20" max="10000" name="meta" value="<?php echo $meta ?>" placeholder="Apenas números. Ex.: 90" class="shadow-sm bg-light">
				        		<!--o name do input muda-->
				        		<?php 
				        			if (isset($_GET['error'])){
				        				if ($_GET['error']==1) {
				        		?>
				        			<div class='alert alert-danger' role='alert'>Para mudar sua meta, altere<br> o valor  do campo numérico acima.</div>
				        		<?php
				        				}
				        			}
				        		?>
				        		<button type="submit" class="btn btn-warning mx-auto">Editar Meta</button>
				        		<!--Esse botão antes era salvar-->
			        		<?php  
			        			}
			        		?> 
		        		</div>
		        	</form>
		        	<a href="idealdeconsumo" class="btn btn-warning mx-auto py-3" id="consumoideal">Qual o Consumo Ideal?</a>
		        </div>
		        </div>
            </div>
            </div>
            <div class="container texto_metas shadow-lg bg-white">
            	<div class="row align-items-center">
            		<div class="col-xl-8 col-md-12 colunas-meta card-theme theme">
            			<h1>Racionalize</h1><br>
            			<p class="texto-corrido">&emsp;&emsp;O consumo de energia elétrica vem aumentando cada vem mais e isso traz uma série de problemas para o nosso ecossistema, pois no processo de produção dessa corrente elétrica há uma série de fatores prejudiciais, como é o caso da construção de hidrelétricas (representa mais de 90% de nossos recursos energéticos) que contribuem para o desmatamento, areamento do solo ou mesmo na extinção de espécies de animais, além da energia elétrica, eólica e dentre outros. Sendo assim, deve-se evitar esse consumo desenfreado, logo, visando o bem estar social e ambiental.</p>
            		</div>
            		<div class="col-xl-4 col-md-12 colunas-meta d-table-cell align-center">
            			<img src="<?= base_url()?>assets/img/user_man.png" class="py-3" width=100% >
            		</div>
            	</div>
            </div>
            <div class="container-fluid card coluna-meta-back card-theme"></div>
        </div>
        <!--conteudo-->
		</div>
</div>
	<script>
    var atual ="Metas";
	</script>
