			<div class="container first-container">
				<div class="row align-items-center">
					<div class="col-xl-6 col-lg-12">
						<div class="box">
							<?php 
							if (isset($gasto)) {
								if ($gasto<=100) {
									?>
									<div class="chart anime theme" data-percent="<?php echo $gasto; ?>" data-scale-color="#ffb400"><span class="texto_grafico"><p><?php echo number_format($gasto, 1); ?>%</p><div id="tempo"><p>do limite em<br><span id="horas"><?php date_default_timezone_set('America/Sao_Paulo'); echo date('H'); ?></span> horas</p></span></div></div><!--Consumo do usuário, consumo do usuário também é passado como parâmetro para o % em data-percent (Acima)-->
									<?php
								} else {
									?>
									<div class="chart anime theme" data-percent="<?php echo ($gasto-100); ?>" data-scale-color="#ffb400"><span class="texto_grafico"><p><?php echo number_format(($gasto-100), 1); ?>%</p><div id="tempo"><p>excedido em <br><span id="horas"><?php date_default_timezone_set('America/Sao_Paulo'); echo date('H'); ?></span> horas</p></span></div></div><!--Consumo do usuário, consumo do usuário também é passado como parâmetro para o % em data-percent (Acima)-->
									<?php
								}
							}else{
								?>
								<div class="chart line-height-normal anime theme" data-scale-color="#ffb400"><span">Defina uma <br> meta para<br>o consumo</span></div><!--Usuário ainda n definiu uma meta para ele, logo não temos gráfico-->
							<?php
							}
							?>

						</div>
					</div>
					<div class="col-xl-6 col-lg-12 text">
						<h1 class="mx-auto text-center animeRight theme card card-theme py-2 shadow-sm" id="titulo_index">Dados Gerais</h1>
						<p class="mx-auto animeRight theme">Aqui você pode visualizar rapidamente os dados gerais de seu consumo de energia de maneira mais ampla e dinâmica.</p>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<!-- Three columns -->
				<div class="row align-items-center py-5 mt-2 barra-horizontal">
					<div class="col-lg-4 my-2 text-center anime">
						<div class="rounded-circle mx-auto d-table">
							<i class="fas fa-seedling align-middle d-table-cell"></i>
						</div>
						<h4 class="py-3 text-white">Lorem Ipsum</h4>
					</div><!-- /.col-lg-4 -->
					<div class="col-lg-4 my-2 text-center anime">
						<div class="rounded-circle mx-auto d-table">
							<i class="fas fa-plug align-middle d-table-cell"></i>
						</div>
						<h4 class="py-3 text-white">Maneire seu Consumo</h4>
					</div><!-- /.col-lg-4 -->
					<div class="col-lg-4 my-2 text-center anime">
						<div class="rounded-circle mx-auto d-table">
							<i class="fas fa-power-off align-middle d-table-cell"></i>
						</div>
						<h4 class="py-3 text-white">Lorem Ipsum</h4>
					</div><!-- /.col-lg-4 -->
				</div><!-- /.row -->
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-6 col-lg-12 colunas-home d-table line">
						<div class="d-table-cell align-middle">
						<h2 class="text-center anime theme">Heading</h2><br>
						<p class="anime theme">O consumo de energia tende a subir cada vez mais, tendo em vista que nos tornamos cada vez mais dependentes de aparelhos eletrônicos e que a energia tende a se tornar mais cara pela dificuldade de suprir a grande demanda e épocas de secas.</p>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12 colunas-home d-table">
						<div class="d-table-cell align-middle theme">
						<h2 class="text-center animeRight theme">Heading</h2><br>
						<p class="animeRight">O consumo de energia tende a subir cada vez mais, tendo em vista que nos tornamos cada vez mais dependentes de aparelhos eletrônicos e que a energia tende a se tornar mais cara pela dificuldade de suprir a grande demanda e épocas de secas.</p>
						</div>
					</div>
				</div>
				<div class="row align-items-center">
					<div class="col-xl-6 col-lg-12 last-container py-5 px-5 d-table">
						<div class="align-middle d-table-cell">	
							<h2 class="anime text-white">Heading</h2>
							<p class="mx-auto anime text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pellentesque nec nam aliquam sem et tortor consequat id. </p>
						</div>
					</div>
					<div class="col-xl-6 col-lg-12 last-container py-5 text-center d-table">
						<i class="fas fa-lightbulb align-middle d-table-cell animeRight"></i>
					</div>
				</div>
			</div>
		</div>
		<!--conteudo-->
	</div>
</div>

	<!--Demais scripts-->
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js'></script><!--Importação do Ajax...-->
	<script>
		$(function() {
			$('.chart').easyPieChart({});});
		var titulo;
		<?php 
		if ($gasto<=100) {echo "var corbarra = '#FFC107'";
	} else {echo "var corbarra = '#a32f2f'";}
	?>	
	</script>
	<script>
	    localStorage.setItem('Usuario', "<?php echo $this->session->userdata('usuario'); ?>");
	</script>
