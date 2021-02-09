			<div class="container first-container px-2 container-metas">
				<!-- <div class="my-1">
		        	<h2 class="mt-4 card text-lg-left text-center card-theme px-5 py-3 theme">Metas</h2>
		        </div>
		        <div class='py-2 pl-5 card-theme card mx-auto mx-auto theme' id="alerta-dica-chart" role='alert' style="border-left: 5px solid #3b94af"><?php 
		        		$meta = $this->session->userdata('meta'); 
		     			if ($meta!=NULL) {
		     				echo $this->session->userdata('mensagem');
		     			}		
		     			?></div> -->

			<div class="card py-5 px-5 my-4 shadow card-theme mt-5 card1">
				<div class="row align-items-center">
					<div class="col-xl col-md-12 mx-auto px-0">
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
			     					echo("<span style='font-family:'Lane' !important; font-weight:lighter;'>Sua meta é: <br>".$meta." reais.</span>");
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
			     					echo("Você ainda tem uma meta de consumo. Preencha o campo seguinte com o valor em reais que você deseja pagar na próxima conta de energia e clique em <span class='font-italic'>'Salvar Meta'</span>.");
			     				}else{
			     					echo("Você tem até <span style='font-weight:bolder;'>cinco</span> dias para editar sua meta. Para alterar o valor preencha o campo seguinte e clique em <span class='font-italic'>'Editar Meta'</span> ao abaixo.");
			     				}
			     			}
		     			?>
		     			</p>
		     			<div class='mx-auto mb-5' role='alert' id='notificationdiv'>
						<!-- Botão para acionar modal -->
						<button type="submit" class="btn btn-primary mx-auto" id="stopButton" style="width:100%;" onclick="permission()" data-toggle="modal" data-target="#ExemploModalCentralizado">Me avise</button>
						<?php 
		        		$meta = $this->session->userdata('meta'); 
		     			if ($meta!=NULL) {
		     			?>
		     			<button type="submit" class="btn theme mx-auto" style="width:100%; border: 4px solid #3b94af; cursor: unset;">	
		     			<?php
		     				echo $this->session->userdata('mensagem');
		     			}		
		     			?></button>

						
							<!-- Modal -->
							<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
							  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
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
					<div class="vertical-line"></div>
					<div class="col-xl col-md-12 mx-auto px-0 theme">
						<?php  
			        			if ($meta==NULL) {
			        		?>
			        <h2>Defina a sua <wbr>meta mensal</h2>
		        	<form method="post" action="cadastroMeta/adicionar">
		        		<div id="meta">
			        			<div class="quantity-control theme inputmetadiv" data-quantity="">
								    <button type="button" onclick="minus()" class="quantity-btn theme" data-quantity-minus=""><svg viewBox="0 0 409.6 409.6">
								            <path d="M392.533,187.733H17.067C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h375.467 c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z" />
								      </svg></button>
								    <span class="rs" style="position: absolute; margin-left: 110px">R$</span><input type="number" class="quantity-input theme" min="20" max="10000" name="meta" value="<?php echo $meta ?>" placeholder="números" data-quantity-target="" style="margin-left: 40px"> 
								    <button type="button" onclick="plus()" class="quantity-btn" data-quantity-plus=""><svg viewBox="0 0 426.66667 426.66667">
								        <svg viewBox="0 0 426.66667 426.66667">
	    								<path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0"></path></svg>
								    </button>
								  </div>
			        			<button type="submit" class="btn btn-warning mx-auto" style="width: 60%">Salvar Meta</button><!--Esse botão alterna pra editar-->
			        		<?php  
			        			}else{
			        		?> 
			        <h2 id="alterarmetatitulo">Deseja alterar a sua <wbr>meta mensal?</h2>
		        	<form method="post" action="cadastroMeta/adicionar" id="formulariometa">
		        		<div id="meta">
			        			 	<div class="quantity-control theme inputmetadiv" data-quantity="">
								    <button type="button" onclick="minus()" class="quantity-btn theme" data-quantity-minus=""><svg viewBox="0 0 409.6 409.6">
								            <path d="M392.533,187.733H17.067C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h375.467 c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z" />
								      </svg></button>
								    <span class="rs" style="position: absolute; margin-left: 110px;">R$</span><input type="number" class="quantity-input theme" min="20" max="10000" name="meta" value="<?php echo $meta ?>" placeholder="números" data-quantity-target="" style="margin-left: 40px">
								    <button type="button" onclick="plus()" class="quantity-btn" data-quantity-plus=""><svg viewBox="0 0 426.66667 426.66667">
								        <svg viewBox="0 0 426.66667 426.66667">
        								<path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0"></path></svg>
								    </button>
								  </div>
				        		<!-- <input type="number" min="20" max="10000" name="meta" value="<?php echo $meta ?>" placeholder="Apenas números. Ex.: 90" class="shadow-sm bg-light theme"> -->
				        		<!--o name do input muda-->
				        		<button type="submit" class="btn btn-warning mx-auto" id="editarMeta" style="width: 60%">Editar Meta</button>
				        		<?php 
				        			if (isset($_GET['error'])){
				        				if ($_GET['error']==1) {
				        		?>
				        			<div class='alert alert-danger w-100 mx-auto' role='alert'>Para mudar sua meta altere<br> o valor  do campo numérico acima.</div>
				        		<?php
				        				}elseif ($_GET['error']==2) {
				        		?>
				        			<div class='alert alert-danger w-100 mx-auto' role='alert'>Parece que você está tentando<br> definir uma meta que não condiz com a sua realidade!</div>
				        		<?php
				        				}else{}
				        			}
				        		?>
				        		<!--Esse botão antes era salvar-->
			        		<?php  
			        			}
			        		?> 
		        		</div>
		        	</form>
		        	<a href="idealdeconsumo" class="btn btn-warning mx-auto py-2" id="consumoideal" style="border-radius: 25px; border: 4px solid #ffc107;">Qual o Consumo Ideal?</a>
		        	<!-- <a href="" class="btn btn-warning mx-auto py-3 mt-3" id="empresa">Você faz parte de uma empresa?</a> -->	
					</div>
				</div>
			</div>
			</div>

            <div class="container texto_metas px-4" style="transform: translateY(-20px);">
            	<div class="row align-items-center shadow">
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
      	<!-- Modal -->
	<div class="modal fade show d-block" id="tipmetas" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered tutorialdvi1" role="document">
	  	<div class="rounded-circle card-theme theme tutorialdvi2"><div class="tutorialicone"><i class="fas fa-bookmark mx-auto"></i></div></div>
	    <div class="modal-content card-theme theme tutorialcontent">
	      <div class="modal-header tutorialheader"><h3 class="modal-title text-uppercase tutorialtitle" id="TituloModal">Metas</h3></div>
	      <div class="modal-body text-center">
	      	<p class="tutorialp">Aqui você terá a opção de criar sua meta de consumo mensal. Além de poder ver qual o seu consumo ideal em “Qual o seu consumo ideal?” e criar uma notificação em “Me Avise”.</p>
	      </div>
	      <div class="modal-footer tutorialfooter"><button class="btn btn-warning px-4 py-1" id="hidetipmetas">Entendi</button></div>
	    </div>
	  </div>
	</div>
	<div class="modal-backdrop fade show" id="bg-dark"></div>
	<script>
		const tipmetas = localStorage.getItem('tipmetas')
		if (tipmetas) {
		  $('#tipmetas').removeClass('show');
		  $('#tipmetas').removeClass('d-block'); 
		  $('#bg-dark').removeClass('show'); 
		  $('#bg-dark').addClass('d-none');
		  $('body').removeClass('modal-open');
		}else{$('body').addClass('modal-open');}
		$("#hidetipmetas").click(function(e) {
		  e.preventDefault();
		    $('#tipmetas').removeClass('show');
		  	$('#tipmetas').removeClass('d-block'); 
		 	$('#bg-dark').removeClass('show'); 
		  	$('#bg-dark').addClass('d-none');
		  	$('body').removeClass('modal-open');
		    localStorage.setItem('tipmetas', true);
		});
	</script>

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
		if (dia>31 && meta!=null) {
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
	