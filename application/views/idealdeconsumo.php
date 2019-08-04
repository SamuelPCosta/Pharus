<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Pharus - Ideal de Consumo</title> <!--Título da Aba-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> <!--Importação do CSS do BS-->
	<link rel="stylesheet" type="text/css" href="http://localhost/pharus/assets/css/style.css"> <!--Importação da folha de estilo css-->
	<link rel="stylesheet" type="text/css" href="http://localhost/pharus/assets/css/ideal.css"> <!--Importação da folha de estilo css para a barra de progresso-->
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
                <li class="atual">
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
            <div class="container first-container">
		        <div class="row align-items-center">
		            <div class="col-xl-6 col-md-12">
		        	<h1>Ideal de consumo <br>
			        	<?php 
			        		$faixa = $this->session->userdata('faixa');
			        		if (isset($faixa)){echo "Entre ".$this->session->userdata('faixa');}
			        	?>
		        	</h1><br>
		        	<p>&emsp;&emsp;Aqui você tem acesso a um questionário simples onde suas respostas seram registradas e analisadas com os dados de outros usuários, gerando assim nossa faixa de consumo que fará uma análise das respostas de outros usuários para podermos dar um maior suporte a eles a partir de possíveis soluções para seus problemas.</p>        	
		        </div>
	     		<div class="col-xl-6 col-md-12"><!--Div do questionário-->
	     			<?php 
	     				if (!isset($_GET['questao'])){
	     					$questao = 1;
	     				}else{
	     					$questao = $_GET['questao'];
	     				};
	     				if ($questao==1) {
							$pergunta = array(
								'Pergunta' => "Pergunta 01",
								'Alternativa_a' => "Alternativa a",
								'Alternativa_b' => "Alternativa b",
								'Alternativa_c' => "Alternativa c"
							);
						}elseif ($questao==2) {
							$pergunta = array(
								'Pergunta' => "Pergunta 02",
								'Alternativa_a' => "Alternativa a",
								'Alternativa_b' => "Alternativa b",
								'Alternativa_c' => "Alternativa c"
							);
						}elseif ($questao==3) {
							$pergunta = array(
								'Pergunta' => "Pergunta 03",
								'Alternativa_a' => "Alternativa a",
								'Alternativa_b' => "Alternativa b",
								'Alternativa_c' => "Alternativa c"
							);
						}elseif ($questao==4) {
							$pergunta = array(
								'Pergunta' => "Pergunta 04",
								'Alternativa_a' => "Alternativa a",
								'Alternativa_b' => "Alternativa b",
								'Alternativa_c' => "Alternativa c"
							);
						}elseif ($questao==5) {
							$pergunta = array(
								'Pergunta' => "Pergunta 05",
								'Alternativa_a' => "Alternativa a",
								'Alternativa_b' => "Alternativa b",
								'Alternativa_c' => "Alternativa c"
							);
						}
	     			?>
	     			<div class="pergunta">
	     				<h3><?php echo $pergunta['Pergunta']?></h3>
	     			</div>
	     			<form method="post" action="Questionario/perguntas/<?php echo $questao;?>">
	     				<input type="radio" name="resposta" value="resposta_a" id="resposta_a"> 
					  	<label for="resposta_a">
					  		<div class="alternativas"><h4><?php echo $pergunta['Alternativa_a']?></h4></div>
					  	</label>
					  	<input type="radio" name="resposta" value="resposta_b" id="resposta_b"> 
					  	<label for="resposta_b"> 
					  		<div class="alternativas"><h4><?php echo $pergunta['Alternativa_b']?></h4></div>
					  	</label>
					  	<input type="radio" name="resposta" value="resposta_c" id="resposta_c"> 
					  	<label for="resposta_c">
					  		<div class="alternativas"><h4><?php echo $pergunta['Alternativa_c']?></h4></div>
					  	</label>
					  	<div class="d-flex justify-content-center">
							<button type="submit" name="button" class="btn login_btn btn-secondary">Próxima</button>
						</div>
					</form>
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
	<script  src="<?= base_url()?>assets/js/scriptcollapse.js"></script><!--Importação do JS do menu...-->

	<!--Abaixo seguem os scripts para o funcionamento do JS do BS...-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
	<!--Fim dos scripts do BS-->
</body>
</html>