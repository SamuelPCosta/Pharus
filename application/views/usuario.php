		<?php $titulo="Metas" ?>
		<!--conteudo-->
        <div id="page-content-wrapper">
            <div class="container first-container meta">
	        <div class="row align-items-center">
	     		<div class="col-xl-4 col-md-8 mx-auto d-inline-block rounded">
	     			<div class="col-xl-12 h-75 d-inline-block rounded-top my-4"></div>
	     		</div>
	     		<div class="col-xl-8 col-md-12">	        	
			        <h2>Este é seu perfil, <?php echo $this->session->userdata('usuario'); ?></h2>
		        	<form method="post" action="">
		        	</form>
		        	<!--<a href="" class="btn" id="consumoideal">Qual o Consumo Ideal?</a>-->
		        </div>
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
	<script src='http://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js'></script><!--Importação do gráfico-->

	<!--Abaixo seguem os scripts para o funcionamento do JS do BS...-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
	<!--Fim dos scripts do BS-->
	<script>
    var atual ="Usuario";
	</script>
</body>
</html>
<!--https://codepen.io/hudsonsilvaoliveira/pen/doZNep?editors=1010 gráfico de colunas-->