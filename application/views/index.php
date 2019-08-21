		<!--conteudo-->
		<div id="page-content-wrapper">
                <div class="container first-container">
                <div class="row align-items-center">
                	<div class="col-xl-6 col-lg-12">
				    	<div class="box">
				    		<?php 
				    			if (isset($gasto)) {
				    			if ($gasto<=100) {
				    		?>
				    			<div class="chart" data-percent="<?php echo $gasto; ?>" data-scale-color="#ffb400"><span class="texto_grafico"><?php echo number_format($gasto, 1); ?>% <div id="percent"><p>da meta em <br> <?php date_default_timezone_set('America/Sao_Paulo'); echo date('H'); ?> horas</p></span></div></div><!--Consumo do usuário, consumo do usuário também é passado como parâmetro para o % em data-percent (Acima)-->
				    		<?php
				    			} else {
				    		?>
				    			<div class="chart" data-percent="<?php echo ($gasto-100); ?>" data-scale-color="#ffb400"><span class="texto_grafico"><?php echo number_format(($gasto-100), 1); ?>% <div id="percent"><p>ultrapassado em <br> <?php date_default_timezone_set('America/Sao_Paulo'); echo date('H'); ?> horas</p></span></div></div><!--Consumo do usuário, consumo do usuário também é passado como parâmetro para o % em data-percent (Acima)-->
				    		<?php
				    			}
				    			}else{
				    		?>
				    			<div class="chart" data-percent="73" data-scale-color="#ffb400"><span class="texto_grafico">Estipule<div id="percent"><p>uma meta para<br>consumo</p></span></div></div><!--Consumo do usuário, consumo do usuário também é passado como parâmetro para o % em data-percent (Acima)-->
				    		<?php
				    			}
				    		?>
				      		
				      	</div>
			    	</div>
			    	<div class="col-xl-6 col-lg-12 text"><p>&emsp;Aqui você pode visualizar rapidamente os seus dados gerais de seu consumo de energia de maneira mais ampla e dinâmica.</p></div>
			    </div>
			  	</div>
			  	<div class="container">
			  		<!-- Three columns -->
			        <div class="row">
			          <div class="col-lg-4">
			            <img class="rounded-circle" src="<?= base_url()?>assets/img/circle.png" alt="Generic placeholder image" width="200" height="200">
			          </div><!-- /.col-lg-4 -->
			          <div class="col-lg-4">
			            <img class="rounded-circle" src="<?= base_url()?>assets/img/circle.png" alt="Generic placeholder image" width="200" height="200">
			          </div><!-- /.col-lg-4 -->
			          <div class="col-lg-4">
			            <img class="rounded-circle" src="<?= base_url()?>assets/img/circle.png" alt="Generic placeholder image" width="200" height="200">
			          </div><!-- /.col-lg-4 -->
			        </div><!-- /.row -->
			    </div>
			    <div class="container-fluid">
			    	<div class="row">
			    		<div class="col-xl-6 col-lg-12 colunas-home line">
			    			<h2>Heading</h2><br>
			    			<p>O consumo de energia tende a subir cada vez mais, tendo em vista que nos tornamos cada vez mais dependentes de aparelhos eletrônicos e que a energia tende a se tornar mais cara pela ddificuldade de suprir a grande demanda e épocas de secas que tornam as bandeira mais ameaçadoras, para que você não sofra esse impacto usufrua de nosso aplicativo e fique por dentro de como racionalizar seu consumo de energia trazendo benefícios para o seu bolso.</p>
			    		</div>
				    	<div class="col-xl-6 col-lg-12 colunas-home">
				    		<h2>Heading</h2><br>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pellentesque nec nam aliquam sem et tortor consequat id. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. Morbi non arcu risus quis varius quam quisque. In arcu cursus euismod quis viverra. Sed sed risus pretium quam. Luctus venenatis lectus magna fringilla urna porttitor rhoncus dolor purus. Vulputate odio ut enim blandit volutpat maecenas volutpat blandit. Non curabitur gravida arcu ac tortor dignissim convallis aenean et. Ac turpis egestas maecenas pharetra.</p>
				    	</div>
			    	</div>
			    	<div class="row">
			    		<div class="col-12 last-container"></div>
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

	<!--Abaixo seguem os scripts para o funcionamento do JS do BS...-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
	<!--Fim dos scripts do BS-->
	<!--Demais scripts-->
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js'></script><!--Importação do Ajax...-->
	<script  src="<?= base_url()?>assets/js/script.js"></script><!--Importação do JS do menu...-->
  	<script src="<?= base_url()?>assets/js/jquery.easypiechart.js"></script>
  	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> <!--Importação de sweetalert-->
  	<script>
    $(function() {
        $('.chart').easyPieChart({});});
    <?php 
    	if ($gasto<=100) {echo "var corbarra = '#0a522d'";
    	} else {echo "var corbarra = '#a30a0a'";}
    ?>	
	</script>
</body>
</html>
<!--https://codepen.io/Philippe_Fercha/pen/yawbqB link do menu-->