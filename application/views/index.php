<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Pharus</title> <!--Título da Aba-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> <!--Importação do CSS do BS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/style.css"> <!--Importação da folha de estilo css-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/progressbar.css"> <!--Importação da folha de estilo css para a barra de progresso-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> <!--Importação dos ícones utilizados-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> <!--Importação da fonte Open Sans-->
	<link rel="shortcut icon" href="<?= base_url()?>assets/img/icon.ico"/> <!--Icone-->
	<!-- O comando base_url() é um atalho para o enderço da nossa base-->
</head>
<body>
<div class="tudo">

	<!-- Header -->
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark">
			<a href="index" class="logo"><img src="<?= base_url()?>assets/img/logo.png" width=110></a> <!--Nossa Logo-->
			<a href="#menu-toggle" class="btn" id="menu-toggle"><i class="fas fa-bars"></i></a>
			<!--Dropdown-->
			<div class="dropdown position-fixed">
			  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    <i class="fas fa-user"></i>
			  </button>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			    <span class="dropdown-item">Logado como <?php echo $this->session->userdata('usuario'); ?></span>
			    <div class="dropdown-divider"></div>
			    <a class="dropdown-item" href="editar-senha">Editar senha</a>
			    <a class="dropdown-item" href="#">Atualizar dados</a>
			    <a class="dropdown-item" href="login/logout">Sair</a>
			  </div>
			</div>
			<!---->
		</nav>
	</header>
	<!-- Header -->

		<!--Menu lateral-->
		<!-- Sidebar -->
        <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li>
                    <a href="consumo"><i class="fas fa-coins"></i>Consumo</a>
                </li>
                <li>
                    <a href="metas"><i class="fas fa-bookmark"></i>Metas</a>
                </li>
                <li>
                    <a href="idealdeconsumo"><i class="fas fa-funnel-dollar"></i>Ideal de Consumo</a>
                </li>
                <li>
                    <a href="dicas"><i class="fas fa-lightbulb"></i>Dicas</a>
                </li>
                <li>
                    <a href="login/logout"><i class="fas fa-sign-out-alt"></i> Sair</a><!--Controller login/ função logout-->
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
		<!--conteudo-->
		<div id="page-content-wrapper">
                <div class="container first-container">
                <div class="row align-items-center">
                	<div class="col-xl-6 col-lg-12">
				    	<div class="box">
				      		<div class="chart" data-percent="<?php echo $gasto; ?>" data-scale-color="#ffb400"><?php echo number_format($gasto, 1); ?>% <div id="percent"><p>em <br> <?php date_default_timezone_set('America/Sao_Paulo'); echo date('H'); ?> horas</p></div></div><!--Consumo do usuário, consumo do usuário também é passado como parâmetro para o % em data-percent (Acima)-->
				      	</div>
			    	</div>
			    	<div class="col-xl-6 col-lg-12 text"><p>&emsp;Aqui você pode visualizar rapidamente os dados gerais de seu consumo de energia de maneira mais ampla e dinâmica.</p></div>
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
			    			<p>O consumo de energia tende a subir cada vez mais, tendo em vista que nos tornamos cada vez mais dependentes de aparelhos eletrônicos e que a energia tende a se tornar mais cara pela ddificuldade de suprir a grande demanda e épocas de secas que tornam as bandeira mais ameaçadoras, para que você não sofra esse impacto usufrua de nosso aplicativo e fique por dentro de como racionalizar seu consumo de energia trazendo benefícios para o seu bolso.</p>
			    		</div>
				    	<div class="col-xl-6 col-lg-12 colunas-home">
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
  	<script  src="<?= base_url()?>assets/js/scriptcollapse.js"></script><!--Importação do JS do menu...-->
  	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> <!--Importação de sweetalert-->
  	<script>
    $(function() {
        $('.chart').easyPieChart({});});
   		//$('.inner').easyPieChart2({});});
	</script>
</body>
</html>
<!--https://codepen.io/Philippe_Fercha/pen/yawbqB link do menu-->