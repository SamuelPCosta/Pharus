			<div class="container first-container my-5" id="containerinfo" style="overflow-y: hidden">		
		        <div class="my-5"><br><br>
		        	<h2 class="mt-4 mb-1 card text-lg-left text-center card-theme px-5 py-3 theme">Informações</h2>
		        <div class="row px-3">
		        	<div col-xl-6 col-lg-12>
		        		<div class="d-block section" style="height: 100px">
			        		<div class="row pt-4 icones">
				        		<div class="col-xl-2 col-lg-4 col pt-3 theme">
				        			<a href="#" onclick="point('calendario', 'point1', 'texto1')" class="point point1 imagematualdocirculo"><i class="fas fa-seedling align-middle d-table-cell" style="font-size: 3em"></i>
				        			<br><br><br><i class="fas fa-circle align-middle d-table-cell pl-3 position-relative" style="top: -28px; z-index: 1"></i></a>
				        		</div>
				        		<div class="col-xl-2 col-lg-4 col pt-3 theme">
				        			<a href="#" onclick="point('dicas', 'point2', 'texto2')" class="point point2"><i class="fas fa-plug align-middle d-table-cell" style="font-size: 3em"></i>
				        			<br><br><br><i class="fas fa-circle align-middle d-table-cell pl-2 position-relative" style="top: -28px; z-index: 1"></i></a>
				        		</div>
				        		<div class="col-xl-2 col-lg-4 col pt-3 theme">
				        			<a href="#" onclick="point('interruptor', 'point3', 'texto3')" class="point point3"><i class="fas fa-power-off align-middle d-table-cell" style="font-size: 3em"></i>
				        			<br><br><br><i class="fas fa-circle align-middle d-table-cell pl-3 position-relative" style="top: -28px; z-index: 1"></i></a>
				        		</div>
			        		</div>
		        		</div>
		        		<br>
		        		<div class="dropdown-divider d-block position-relative" style="border-color: #ffc107 !important;"></div>

		        		<!-- //Esses dois circulos precisam se tornar responsivos -->
		        		<div class="col-xl-12" id="giroimagens">
		        			<div class="float-right">
				        		<div class="rounded-circle float-right card card-theme shadow" id="circulofixo" style="height: 600px; width: 600px; display: flex; border: 2px solid; top:-250px; margin-right: 0px">
				        			<img src="<?= base_url()?>assets/img/calendario.png" class="position-relative float-right" id="imagemdocirculo" style="z-index: 1; height: 100%; width: 100%; animation-timing-function: linear;">
				        			<img src="<?= base_url()?>assets/img/calendario.png" class="position-absolute float-right" id="imagemdocirculo2" style="z-index: 1; height: 100%; width: 100%; animation-timing-function: linear;">
				        			<img src="<?= base_url()?>assets/img/circulomovimento.png" class="position-relative float-right" id="circulomovimento" style="top: -596px; height: 100%; width: 100%">
				        		</div>
				        	</div>
			        	</div>
		        		<!-- //Esses dois circulos precisam se tornar responsivos -->

		        		<br><br>
		        		<p class="theme mt-5 text-xl-left text-justify textogiro texto1 textodogirovisivel" style="font-size: 1.2em">Aqui vai ter uma breve fala sobre "A gente vai ajudar a natureza"... Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
		        		</p>
		        		<p class="theme mt-5 text-xl-left text-justify textogiro texto2" style="font-size: 1.2em">Já aqui vai ser sobre os aparelhos e funcionamento do sistema. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
		        		</p>
		        		<p class="theme mt-5 text-xl-left text-justify textogiro texto3" style="font-size: 1.2em">Por ultimo a gente vai falar mais alguma coisa Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
		        		</p>
		        	</div>
		        </div>
		        <!--conteudo-->
		</div>
</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
	<!--Importação ajax-->
	<?php $consumoPorHora = $this->session->userdata('consumo'); ?>
	<script>
    var atual ="Home";
	</script>