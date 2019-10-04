			<div class="container-fluid first-container px-5 my-3">		
		        <div class="my-4">
		        	<h2 class="my-4 card text-lg-left text-center card-theme px-5 py-3 theme"><a href="Raiz/monitorarConsumo"></a>Analise seu Consumo</h2>
		        <div class="row">
		        	<div class="col-xl-6 col-md-12 graficos">
		        		<canvas id="line-chart" height="350"></canvas>
		        	</div>
		            <div class="col-xl-6 col-md-12 graficos">
		            	<canvas id="bar-chart" height="350"></canvas>
		       		</div>
		       		<div class="col-12">
		       			<!-- <form id="meses">
		        			<select id="mes" class="theme card-theme">
		        				<option value="0" id="placeholder">Selecione um mês</option>
		        				<option value="Janeiro">Janeiro</option>
		        				<option value="Fevereiro">Fevereiro</option>
		        				<option value="Março">Março</option>
		        				<option value="Abril">Abril</option>
		        				<option value="Maio">Maio</option>
		        				<option value="Junho">Junho</option>
		        				<option value="Julho">Julho</option>
		        				<option value="Agosto">Agosto</option>
		        				<option value="Setembro">Setembro</option>
		        				<option value="Outubro">Outubro</option>
		        				<option value="Novembro">Novembro</option>
		        				<option value="Dezembro">Dezembro</option>
		        			</select>
		        		</form> -->
		        	</div>
		        </div>
		        </div>
		    </div>
		</div>
	</div>
	<!--conteudo-->
</div>
</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
	<!--Importação ajax-->
	<script>
	    localStorage.setItem('consumo', "<?php echo $this->session->userdata('consumo'); ?>");
	</script>
	<script>
    var atual ="Consumo";
	</script>

	