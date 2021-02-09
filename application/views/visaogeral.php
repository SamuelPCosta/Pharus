			<div class="container my-5 containerinfo containerinfo1visaogeral" style="overflow: hidden;">	<!-- style="overflow-y: hidden" -->
		        <div class="my-5">
		        	<h2 class="mt-4 mb-1 card text-lg-left text-center card-theme px-5 py-3 theme" style="margin-left: 0px!important;">Visão Geral</h2>
		        <div class="row px-3">
		        	<div col-xl-6 col-lg-12>
		        		<div class="d-block section" style="height: 100px" id="pontosvisaogeral">
			        		<div class="row pt-4 icones">
				        		<div class="col-xl-2 col-lg-4 col pt-3 theme">
				        			<a href="#" onclick="point('stop', 'point1', 'texto1')" class="point point1 imagematualdocirculo"><i class="fas fa-tachometer-alt align-middle d-table-cell" style="font-size: 3em"></i>
				        			<br><br><br><i class="fas fa-circle align-middle d-table-cell pl-3 position-relative text-center" style="top: -28px; z-index: 1; width: 90px; padding-top: 0px!important;"></i></a>
				        		</div>
				        		<div class="col-xl-2 col-lg-4 col pt-3 theme">
				        			<a href="#" onclick="point('primeirospassos', 'point2', 'texto2')" class="point point2" style="margin-left: -3px"><i class="fas fa-shoe-prints align-middle d-table-cell" style="font-size: 3em"></i>
				        			<br><br><br><i class="fas fa-circle align-middle d-table-cell pl-3 position-relative text-center" style="top: -28px; z-index: 1; width: 84px; padding-top: 0px!important;"></i></a>
				        		</div>
				        		<div class="col-xl-2 col-lg-4 col pt-3 theme">
				        			<a href="#" onclick="point('comvoce', 'point3', 'texto3')" class="point point3"><i class="fas fa-handshake align-middle d-table-cell" style="font-size: 3em"></i>
				        			<br><br><br><i class="fas fa-circle align-middle d-table-cell pl-3 position-relative text-center" style="top: -28px; z-index: 1; width: 90px; padding-top: 0px!important;"></i></a>
				        		</div>
			        		</div>
		        		</div>
		        		<br>
		        		<div class="dropdown-divider d-block position-relative" style="border-color: #ffc107 !important; margin-left: 0px!important;"></div>

		        		<!-- //Esses dois circulos precisam se tornar responsivos -->
		        		<div class="col-xl-12" id="giroimagens">
		        			<div class="float-right">
				        		<div class="rounded-circle float-right card card-theme shadow" id="circulofixo" style="height: 600px; width: 600px; display: flex; border: 2px solid; top:-250px; margin-right: 0px">
				        			<img src="<?= base_url()?>assets/img/stop.png" class="position-relative float-right" id="imagemdocirculo" style="z-index: 1; height: 100%; width: 100%; animation-timing-function: linear;">
				        			<img src="<?= base_url()?>assets/img/stop.png" class="position-absolute float-right" id="imagemdocirculo2" style="z-index: 1; height: 100%; width: 100%; animation-timing-function: linear;">
				        			<img src="<?= base_url()?>assets/img/circulomovimento.png" class="position-relative float-right cimg" id="circulomovimento" style="top: -596px; height: 100%; width: 100%">
				        		</div>
				        	</div>
			        	</div>
		        		<!-- //Esses dois circulos precisam se tornar responsivos -->

		        		<br><br>
		        		<h2 class="theme mt-2 text-xl-left text-justify textogiro texto1 textodogirovisivel">Maneire seu consumo</h2>
		        		<p class="theme mt-3 text-xl-left text-justify textogiro texto1 textodogirovisivel" style="font-size: 1.2em">Reduza seu consumo de energia com o sistema Pharus, tenha acesso a dicas todos os dias de como maneirar no consumo, crie metas mensais de quanto você deseja gastar e acompanhe o seu desenvolvimento em gráficos ilustrativos que mostram todo o seu consumo dos últimos dias, semanas e meses.
		        		</p>
		        		<h2 class="theme mt-2 text-xl-left text-justify textogiro texto2 textodogirovisivel">Dê o primeiro passo</h2>
		        		<p class="theme mt-3 text-xl-left text-justify textogiro texto2" style="font-size: 1.2em">Após criar sua primeira meta de consumo mensal, siga nossas dicas diárias para um maior desempenho, fique também sempre alerta ao seu consumo diário na página Home, lá você verá se sua conta está perto de passar do limite estabelecido ou se você está consumindo de acordo com o esperado. Além do mais, busque sempre na seção consumo comparar seu desempenho de agora com o dos outros meses para ver seu progresso.
		        		</p>
		        		<h2 class="theme mt-2 text-xl-left text-justify textogiro texto3 textodogirovisivel">Agora é com você!</h2>
		        		<p class="theme mt-3 text-xl-left text-justify textogiro texto3" style="font-size: 1.2em">Agora que você já conhece mais do nosso site está na hora de você colocar a mão na massa, siga o nosso passo a passo e desfrute ao máximo do sistema Pharus, conquiste medalhas sempre que cumprir algum de nossos desafios e lembre-se sempre que reduzindo seu consumo você está contribuindo para um ecossistema melhor para todos.
		        		</p>
		        	</div>
		        </div> 
			</div>
		</div>

		<div style="height: 60px; transform: translateY(-200px);" id="tutoriais"></div>
		<div class="container containerinfo"  style=" object-fit: contain; transform: translateY(-200px);">
		    <div class="row mb-5">
		    	<div class="col-12">
		    		<h2 class="mt-4 mb-3 card text-lg-left text-center card-theme px-5 py-3 theme" id="primeirospassos" style="width: 100% !important;">Tutoriais</h2>
		    		<!-- <iframe src="<?= base_url()?>assets/videos/video1.mp4" frameborder="0" autoplay preload loop></iframe> -->
		    		<video width="100%" id="videoclip" autoplay muted preload loop><source id="mp4video" src="<?= base_url()?>assets/videos/video1.mp4" type=""></video>
		    	</div>	
		    </div>
		    <div class="row" id="opcoesdevideo">
		    	<div class="col text-center">
		    		<a href="#primeirospassos" onclick="video('video1', '1')">
						<img src="<?= base_url()?>assets/img/metas.png" class="rounded-circle" width=130>
						<h4 class="py-3 theme">Metas</h4>
						<img src="<?= base_url()?>assets/img/circulomovimento.png" class="position-relative marcadorvideo marcadorvideo1" id="circulomovimento" style="height: 150px; width: 150px">
					<a>
		    	</div>
		    	<div class="col text-center">
		    		<a href="#primeirospassos" onclick="video('video2', '2')">
						<img src="<?= base_url()?>assets/img/simulador.png" class="rounded-circle" width=130>
						<h4 class="py-3 theme">Simulador</h4>
						<img src="<?= base_url()?>assets/img/circulomovimento.png" class="position-relative marcadorvideo marcadorvideo2 inativo" id="circulomovimento" style="height: 150px; width: 150px">
					<a>
		    	</div>
		    	<div class="col text-center">
		    		<a href="#primeirospassos" onclick="video('video3', '3')">
						<img src="<?= base_url()?>assets/img/consumo.png" class="rounded-circle" width=130>
						<h4 class="py-3 theme">Consumo</h4>
						<img src="<?= base_url()?>assets/img/circulomovimento.png" class="position-relative marcadorvideo marcadorvideo3 inativo" id="circulomovimento" style="height: 150px; width: 150px">
					<a>
		    	</div>
		    	<div class="col text-center">
		    		<a href="#primeirospassos" onclick="video('video4', '4')">
						<img src="<?= base_url()?>assets/img/idealdeconsumo.png" class="rounded-circle" width=130>
						<h4 class="py-3 theme" style="height: 60px">Ideal de consumo</h4>
						<img src="<?= base_url()?>assets/img/circulomovimento.png" class="position-relative marcadorvideo marcadorvideo4 inativo" id="circulomovimento" style=" height: 150px; width: 150px;">
					<a>
		    	</div>
		    </div>	
		</div>

		<div style="height: 60px; transform: translateY(-150px);" id="guiarapido"></div>
		<div class="container containerinfo" style="transform: translateY(-150px);">
		    <div class="row mb-5">
		    	<div class="col-12 px-0">
		    	<h2 class="mt-4 mb-3 card text-lg-left text-center card-theme px-5 py-3 theme" id="primeirospassos" style="width: 100% !important;">Guia rápido</h2>
		    		<div class="row mb-0">
		    		<div class="col-xl-4 col-md-12 px-3 mb-3" style="display: inline-block;">
					    <div class="card-theme theme">
					      <div class="modal-header tutorialheader"><h3 class="text-center mx-auto modal-title text-uppercase">Metas</h3></div>
					      <div class="modal-body text-center" style="min-height: 250px!important;">
					      	<p class="tutorialp">Aqui você terá a opção de criar sua meta de consumo mensal. Além de poder ver qual o seu consumo ideal em “Qual o seu consumo ideal?” e criar uma notificação em “Me Avise”.</p>
					      </div>
					      <div class="modal-footer tutorialfooter"><a href="metas" class="btn btn-warning text-center mx-auto">Conhecer metas</a></div>
					    </div>
					</div>
					<div class="col-xl-4 col-md-12 px-3 mb-3" style="display: inline-block;">
					    <div class="card-theme theme">
					      <div class="modal-header tutorialheader"><h3 class="text-center mx-auto modal-title text-uppercase">Consumo</h3></div>
					      <div class="modal-body text-center" style="min-height: 250px!important;">
					      	<p class="tutorialp">Veja o quanto você tem consumido nos últimos dias em gráficos de linha e barra. Baixe o relatório mensal para ter tudo isso salvo em seu dispositivo.</p>
					      </div>
					      <div class="modal-footer tutorialfooter"><a href="consumo" class="btn btn-warning text-center mx-auto">Conhecer consumo</a></div>
					    </div>
					</div>
					<div class="col-xl-4 col-md-12 px-3 mb-3" style="display: inline-block;">
					    <div class="card-theme theme">
					      <div class="modal-header tutorialheader"><h3 class="text-center mx-auto modal-title text-uppercase">Ideal de consumo</h3></div>
					      <div class="modal-body text-center" style="min-height: 250px!important;">
					      	<p class="tutorialp">Responda as perguntas e veja o quanto você deveria gastar no mês com a conta de energia a partir do tempo que você passa usando determinados equipamentos eletrônicos.</p>
					      </div>
					      <div class="modal-footer tutorialfooter"><a href="idealdeconsumo" class="btn btn-warning text-center mx-auto">Conhecer ideal de consumo</a></div>
					    </div>
					</div>
					</div>

					<div class="row mb-0">
		    		<div class="col-xl-4 col-md-12 px-3 mb-3" style="display: inline-block;">
					    <div class="card-theme theme">
					      <div class="modal-header tutorialheader"><h3 class="text-center mx-auto modal-title text-uppercase">Simulador</h3></div>
					      <div class="modal-body text-center" style="min-height: 250px!important;">
					      	<p class="tutorialp">Insira os valores correspondentes ao tempo de uso de cada aparelho e clique em “Simular Consumo” para criar uma simulação de consumo de energia.</p>
					      </div>
					      <div class="modal-footer tutorialfooter"><a href="simulador" class="btn btn-warning text-center mx-auto">Conhecer simulador</a></div>
					    </div>
					</div>
					<div class="col-xl-4 col-md-12 px-3 mb-3" style="display: inline-block;">
					    <div class="card-theme theme">
					      <div class="modal-header tutorialheader"><h3 class="text-center mx-auto modal-title text-uppercase">Dicas</h3></div>
					      <div class="modal-body text-center" style="min-height: 250px!important;">
					      	<p class="tutorialp">Tenha acesso a dicas de como economizar mais energia por meio de métodos simples e rápidas.</p>
					      </div>
					      <div class="modal-footer tutorialfooter"><a href="dicas" class="btn btn-warning text-center mx-auto">Conhecer dicas</a></div>
					    </div>
					</div>
					<div class="col-xl-4 col-md-12 px-3 mb-3" style="display: inline-block;">
					    <div class="card-theme theme">
					      <div class="modal-header tutorialheader"><h3 class="text-center mx-auto modal-title text-uppercase">Conquistas</h3></div>
					      <div class="modal-body text-center" style="min-height: 250px!important;">
					      	<p class="tutorialp">Complete missões e ganhe estrelas.</p>
					      </div>
					      <div class="modal-footer tutorialfooter"><a href="conquistas" class="btn btn-warning text-center mx-auto">Conhecer conquistas</a></div>
					    </div>
					</div>
					</div>

					<div class="row mb-0">
		    		<div class="col-xl-4 col-md-12 px-3 mb-3 mx-auto" style="display: inline-block;">
					    <div class="card-theme theme">
					      <div class="modal-header tutorialheader"><h3 class="text-center mx-auto modal-title text-uppercase">Apoie</h3></div>
					      <div class="modal-body text-center" style="min-height: 250px!important;">
					      	<p class="tutorialp">Sinta-se à vontade para nos apoiar com algum valor caso tenha gostado do sistema e queira ajuda-lo a se manter no ar.</p>
					      </div>
					      <div class="modal-footer tutorialfooter"><a href="apoie" class="btn btn-warning text-center mx-auto">Conhecer apoie</a></div>
					    </div>
					</div>
					</div>
		    	</div>	
		    </div>
		</div>		
		<!--conteudo-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
	<!--Importação ajax-->
	<?php $consumoPorHora = $this->session->userdata('consumo');?>
	<script type="text/javascript">
		$(document).ready(function(){
			startpoint('<?php echo $this->session->userdata('itemimg'); ?>', '<?php echo $this->session->userdata('itempoint'); ?>', '<?php echo $this->session->userdata('itemtexto'); ?>')
		});
	</script>
	<script>
    var atual ="Home";
	</script>