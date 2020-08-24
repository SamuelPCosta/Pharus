			<div class="container first-container px-4 container-metas">
	        <div class="row align-items-center">
	     		<div class="col-xl-6 col-md-12">
	     			<h2 class="valor margin-top theme">
	     			<?php 
	     			//$meta=0;
	     			$meta = $this->session->userdata('meta');
	     				if (isset($_SESSION['conferirMeta'])) {
	     					$conferirMeta = $this->session->userdata('conferirMeta');
	     					if ($conferirMeta=="cumpriu") {
	     						echo("Você conseuiu! Meta cumprida!");
	     					}else{
	     						echo("Ops... Não foi <br>dessa vez.");
	     					}
	     				}else{
		     				if ($meta==NULL) {
		     					echo("Defina sua <br> meta mensal.");
		     				}else{
		     					echo("<span style='font-family: Open Sans !important; font-weight:lighter;'>Sua meta é: <br>".$meta." reais.</span>");
		     				}
	     				}
	     			?>
	     			</h2>
	     			<!--Taca PHP--><br>
	     			<p class="instrucoes theme">
	     			<?php 
	     				if (isset($_SESSION['conferirMeta'])) {
	     					if ($conferirMeta=="cumpriu") {
	     						echo("Uma vitória! Seu bolso e o meio ambiente agradecem seu esforço. Sua meta era ".$meta.", o que equivale a X kWh, você consumiu em torno de Y kWh e sua conta deve vir em torno de A00 reais.");
	     					}else{
	     						echo("Esse mês você não conseguiu alcançar seu objetivo. Sua meta era ".$meta.", o que equivale a X kWh, mas você consumiu em torno de Y kWh e sua conta deve vir em torno de A00 reais. Por que você acredita não ter conseguido?");
	     					}
	     				}else{
		     				if ($meta==0) {
		     					echo("Você ainda não tem uma meta de consumo até o final do mês. Para definir uma meta, preencha o campo seguinte e clique em <span class='font-italic'>'Salvar Meta'</span>.");
		     				}else{
		     					echo("Você tem até o <span style='font-weight:bolder;'>quinto</span> dia do mês para editar sua meta. Para alterar o valor preencha o campo seguinte e clique em <span class='font-italic'>'Editar Meta'</span> ao lado.");
		     				}
		     			}
	     			?>	
	     			</p>
	     			<?php  
	     			if ($meta!=NULL) {
	     				echo "
	     				<div class='alert alert-primary mx-auto' role='alert' id='mensagem'>
	     				".$this->session->userdata('mensagem')."
						</div>";
	     			}		
	     			?>
					<div class='mx-auto mb-5' role='alert' id='notificationdiv'>
						<!-- Botão para acionar modal -->
						<button type="submit" class="btn btn-warning mx-auto" id="stopButton" style="width:100%;" onclick="permission()" data-toggle="modal" data-target="#ExemploModalCentralizado">Notifique-me!</button>
						
						<!-- Modal -->
						<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="TituloModalCentralizado">Notificação Diária.
								</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						      	<p>Selecione abaixo o horário em que você deseja ser notificado: </p>
						        <div class="container usuario">
				                    <div class="row align-items-center">
					                    <div class="mx-auto">
					                    	<form method="post" action="">
					                       		<input type="time" class="modal_input_time mx-auto" name="horario" id="inputhorario" value="<?php echo $this->session->userdata('horas').":".$this->session->userdata('minutos') ?>">
					                    </div>
				                	</div>
				                </div>
						      </div>
						      <div class="modal-footer">
						        <button type="submit" class="btn btn-secondary" value="desativar" onclick="mainDesativar()" name="btn">Desativar</button>
						        </form>
						        <button type="submit" data-dismiss="modal" aria-label="Fechar" class="btn btn-warning" value="salvar" name="btn" id="salvarhorario" onclick="main()" disabled>Salvar horário</button>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
					
	     		</div>
	     		 <div class="col-xl-6 col-md-12 metas px-0">	
	     		 <div class="card py-5 px-0 shadow card-theme theme mx-auto mb-5">	
		        			<?php  
			        			if ($meta==NULL) {
			        		?>
			        <h2>Defina a sua <wbr>meta mensal</h2>
		        	<form method="post" action="cadastroMeta/adicionar">
		        		<div id="meta">
			        			<input type="number" min="20" max="10000" name="meta" placeholder="Apenas números. Ex.: 90" class="shadow bg-light theme">
			        			<button type="submit" class="btn btn-warning mx-auto">Salvar Meta</button><!--Esse botão alterna pra editar-->
			        		<?php  
			        			}else{
			        		?> 
			        <h2 id="alterarmetatitulo">Deseja alterar a sua <wbr>meta mensal?</h2>
		        	<form method="post" action="cadastroMeta/adicionar" id="formulariometa">
		        		<div id="meta">
				        		<input type="number" min="20" max="10000" name="meta" value="<?php echo $meta ?>" placeholder="Apenas números. Ex.: 90" class="shadow-sm bg-light theme">
				        		<!--o name do input muda-->
				        		<?php 
				        			if (isset($_GET['error'])){
				        				if ($_GET['error']==1) {
				        		?>
				        			<div class='alert alert-danger w-100 mx-auto' role='alert'>Para mudar sua meta altere<br> o valor  do campo numérico acima.</div>
				        		<?php
				        				}else{
				        		?>
				        			<div class='alert alert-danger w-100 mx-auto' role='alert'>Parece que você está tentando<br> definir uma meta que não condiz com a sua realidade!</div>
				        		<?php
				        				}
				        			}
				        		?>
				        		<button type="submit" class="btn btn-warning mx-auto" id="editarMeta">Editar Meta</button>
				        		<!--Esse botão antes era salvar-->
			        		<?php  
			        			}
			        		?> 
		        		</div>
		        	</form>
		        	<a href="idealdeconsumo" class="btn btn-warning mx-auto py-3" id="consumoideal">Qual o Consumo Ideal?</a>
		        	<!-- <a href="" class="btn btn-warning mx-auto py-3 mt-3" id="empresa">Você faz parte de uma empresa?</a> -->
		        </div>
		        </div>
            </div>
            </div>
            <div class="container texto_metas px-4">
            	<div class="row align-items-center shadow-lg">
            		<div class="col-xl-8 col-md-12 colunas-meta card-theme theme">
            			<h1>Racionalize</h1><br>
            			<p class="texto-corrido">&emsp;&emsp;O consumo de energia elétrica vem aumentando cada vez mais e isso traz uma série de problemas para o nosso ecossistema, pois no processo de produção dessa corrente elétrica há uma série de fatores prejudiciais, como é o caso da construção de hidrelétricas (representa mais de 90% de nossos recursos energéticos) que contribuem para o desmatamento, areamento do solo ou mesmo na extinção de espécies de animais, além da energia elétrica, eólica e dentre outros. Sendo assim, deve-se evitar esse consumo desenfreado, logo, visando o bem estar social e ambiental.</p>
            		</div>
            		<div class="col-xl-4 col-lg-8 col-md-12 mx-auto colunas-meta d-table-cell align-center">
            			<img src="<?= base_url()?>assets/img/interruptor.png" class="py-3" width=100% alt="Ilustração de uma mão desligando um interruptor">
            		</div>
            	</div>
            </div>
            <div class="container-fluid card coluna-meta-back card-theme"></div>
        </div>
        <!--conteudo-->

	<?php 
		if (isset($_SESSION['notificacao'])) {
	?>
		<script>
			localStorage.setItem('estado', "ativada");
			localStorage.setItem('horas', "<?php echo $this->session->userdata('horas'); ?>");
			localStorage.setItem('minutos', "<?php echo $this->session->userdata('minutos'); ?>");
		</script>
		<!-- <script src="<?= base_url()?>assets/js/horario.js"></script> -->
	<?php 
		}else{
	?>
		<script> localStorage.setItem('estado', "desativada"); 
            var req = indexedDB.deleteDatabase("horario");
			req.onsuccess = function () {
			    console.log("Deleted database successfully");
			};
		</script>

	<?php 
		}	
	?>
	<script>
		var data = new Date();
		var dia  = data.getDate();
		var meta = '<?php echo $meta ?>'
		if (dia>5 && meta!=null) {
			$('#editarMeta').attr('disabled', 'disabled');
			$('#formulariometa').attr('action', '');
			$('#alterarmetatitulo').html('Você não pode mais alterar a meta do mês!');
		}
   		var atual ="Metas";
   		var liberarbtn = 0
   		$("#inputhorario").change(function () {
		    //console.log(str);
		    $("#salvarhorario").attr('disabled', true);
		    liberarbtn = liberarbtn+1;
		    var valorHora = $("#inputhorario").val()
			console.log(valorHora);
			$.ajax({
	            url: "<?php echo base_url(); ?>Raiz/notificacao",
	            type: "POST",
	            data: {valorHora: valorHora},
	            success: function(result){
	            	localStorage.setItem('estado', "ativada");
					localStorage.setItem('horas', JSON.parse(result).horas);
					localStorage.setItem('minutos', JSON.parse(result).minutos);
					console.log("Sessão alterada")
		        },
		        error: function(){
		            console.log('Error');
		        }
	        });
	        if (liberarbtn>1) {
				$("#salvarhorario").attr('disabled', false);
			}
		}).change();
	</script>
	<script src="<?= base_url()?>assets/js/index.js"></script>
	