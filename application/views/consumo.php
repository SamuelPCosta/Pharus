			<div class="container-fluid first-container px-5 my-3">		
		        <div class="card card-theme my-4 shadow-sm">
		        	<h2 class="my-4 ml-5 theme">Analise seu Consumo</h2>
		        <div class="row px-3">
		        	<div class="col-xl-6 col-md-12 graficos px-4 py-5">
		        		<canvas id="line-chart" height="350"></canvas>
		        	</div>
		            <div class="col-xl-6 col-md-12 graficos px-4 py-5">
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

	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js'></script><!--Importação do Ajax...-->
	<script src="<?= base_url()?>assets/js/script.js"></script><!--Importação do JS do menu...-->
	<!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js'></script>Importação do gráfico-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
	<script type="text/javascript" src="<?= base_url()?>assets/js/grafico.js"></script>

	<!--Abaixo seguem os scripts para o funcionamento do JS do BS...-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
	<!--Fim dos scripts do BS-->
	<script>
    var atual ="Consumo";
	</script>
</body>
</html>
<!--https://codepen.io/hudsonsilvaoliveira/pen/doZNep?editors=1010 gráfico de colunas-->
<!-- https://www.chartjs.org/docs/latest/charts/line.html documentacao graficos-->