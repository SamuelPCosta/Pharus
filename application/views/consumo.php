<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Pharus - Consumo</title> <!--Título da Aba-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> <!--Importação do CSS do BS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/style.css"> <!--Importação da folha de estilo css-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/consumo.css"> <!--Importação da folha de estilo css para a barra de progresso-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> <!--Importação dos ícones utilizados-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> <!--Importação da fonte Open Sans-->
	<link rel="shortcut icon" href="<?= base_url()?>assets/img/icon.ico"/> <!--Icone-->
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
			    <a class="dropdown-item" href="atualizar-dados">Atualizar dados</a>
			    <a class="dropdown-item" href="login/logout">Sair</a>
			  </div>
			</div>
			<!---->
		</nav>
	</header>
	<!-- Header -->

		<!--Menu lateral-->
		<div id="dark"></div>
		<!-- Sidebar -->
        <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="atual">
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
                    <a href="login/logout"><i class="fas fa-sign-out-alt"></i> Sair</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <!--conteudo-->
        <div id="page-content-wrapper">
            <div class="container-fluid first-container">
		        <div class="row">
		        	<div class="col-xl-6 col-md-12 graficos">
		        		<canvas id="line-chart"></canvas>
		        	</div>
		            <div class="col-xl-6 col-md-12 graficos">
		            	<canvas id="myChart"></canvas>
		       		</div>
		       		<div class="col-12">
		       			<form>
		        			<select id="mes">
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
		        		</form>
		       		</div>
	            </div>
            </div>
            <!--<div class="container">
            	<div class="row">
		     		<div class="col-12 container-consumo">	
		     		</div>
		     		<div class="col-12 container-consumo">	
		     		</div>
		     	</div>
            </div>-->
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
	<script src="<?= base_url()?>assets/js/script.js"></script><!--Importação do JS do menu...-->
	<script src="<?= base_url()?>assets/js/scriptcollapse.js"></script><!--Importação do JS do menu...-->
	<script src='http://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js'></script><!--Importação do gráfico-->
	<script type="text/javascript" src="<?= base_url()?>assets/js/grafico.js"></script>

	<!--Abaixo seguem os scripts para o funcionamento do JS do BS...-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
	<!--Fim dos scripts do BS-->
</body>
</html>
<!--https://codepen.io/hudsonsilvaoliveira/pen/doZNep?editors=1010 gráfico de colunas-->