<?php 
	
	function simulador(){
		$h_geladeira = 24; //horas que a geladeira fica ligada
		rand(4,6);
	}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Pharus | Admin</title>

  <!-- Favicons -->
  <link rel="shortcut icon" href="<?= base_url()?>assets/img/favicon.png"/> 
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> <!--Importação do CSS do BS-->
  <!-- Bootstrap core CSS -->

  <!--external css-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> <!--Importação dos ícones utilizados-->
  <link href="<?= base_url()?>assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/cssAdmin/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/cssAdmin/style.css">
  <link href="<?= base_url()?>assets/cssAdmin/style-responsive.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
  <style type="text/css">
		html, body{
			background-color: #9aada3;
		}
		.inputs{
			float: right;
		}
		input, select{
			width: 70px;
			height: 30px;
			background-color: #eee;
			border: none;
			border-radius: 5px;
			padding-left: 10px;
			margin: 32px 0px 0px 15px;
		}
		select{
			width: 100px;
			padding-left: 0px;
		}
		h1{
			font-family: 'Open Sans', sans-serif !important;
			color: #222;
			margin: auto;
			text-align: center;
			margin-top: 50px;
			display: block;
			text-transform: uppercase;
			font-weight: 100;
		}
		h2{
			font-family: 'Open Sans', sans-serif !important;
			color: #222;
			margin: 25px 0px 0px 50px;
			display: inline-block;
			font-weight: 100;
		}
		.col-lg-6{
			margin-bottom: 20px
		}
		button{
			background-color: #364046 !important;
			color: white !important;
			margin: auto;
			margin-top: 50px;
			margin-bottom: 50px;
			max-height: 40px;
		}
	</style>
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg position-fixed" style="top:0;">
      <!--logo start-->
      <a href="admin" class="logo"><b><span>P</span>harus</b></a>
      <!--logo end-->
      <div class="top-menu ">
        <ul class="nav pull-right top-menu mt-3">
          <li><a class="logout" href="Admin/logout">Sair</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
</head>
<br><br><br>
	<div class="container mt-5">
		<h1 class="mb-5">Simulador de Consumo <br>de um domicílio</h1>
		<div class="row">
				<!-- 
				• Criar array com nomes de aparelhos;
				• Criado laço foreach;
				• echo dentro do foreach com label (pegando do array), e inputs de potência e tempo 
				For (i=1; i++; i>=lenght){
					PotênciaHoras[] => "potencia[i]*horas[i]";
				}
				sum(PotênciaHoras);
				-->
				<div class="col-lg-6">
					<form method="post" action="Raiz/Consumir">
					<?php $aparelhos = array(
						'Geladeira' => 'Geladeira',
						'Computador' => 'Computador',
						'Televisão' => 'Televisão',
						'Microondas' => 'Microondas',
						'Freezer' => 'Freezer'
					); 
					foreach ($aparelhos as $aparelho) {
						$i=1;
						echo "<h2>".$aparelho.":</h2>
							<div class='inputs'>
								<input type='number' min='0' max='24' name='horas[]' placeholder='Horas'>
							<select name='potencia[]'>
								<option value='1'>Potência1</option>
								<option value='1'>Potência2</option>
								<option value='1'>Potência3</option>
								<option value='1'>Potência4</option>
								<option value='1'>Potência5</option>
							</select></div>";
						$i++;
					}
					?>
					<button type="submit" name="button" class="btn login_btn">Consumir</button>
					</form>
				</div>

				<div class="col-lg-6">
					<form method="post" action="#">
					<h2>Geladeira:</h2>
					<div class="inputs">
						<input type="number" min="0" max="24" name="consumo[]" placeholder="Horas">
					<select>
						<option>Potência</option>
						<option>Potência</option>
					</select>
					</div>
					<br>
					<h2>Fogão:</h2>
					<div class="inputs">
						<input type="number" min="0" max="24" name="consumo[]" placeholder="Horas">
					<select>
						<option>Potência</option>
						<option>Potência</option>
					</select>
					</div>
					<br>
					<h2>Microondas:</h2>
					<div class="inputs">
						<input type="number" min="0" max="24" name="consumo[]" placeholder="Horas">
					<select>
						<option>Potência</option>
						<option>Potência</option>
					</select>
					</div>
					<br>
					<h2>Freezer:</h2>
					<div class="inputs">
						<input type="number" min="0" max="24" name="consumo[]" placeholder="Horas">
					<select>
						<option>Potência</option>
						<option>Potência</option>
					</select>
					</div>
					<br>
					<h2>Geladeira:</h2>
					<div class="inputs">
						<input type="number" min="0" max="24" name="consumo[]" placeholder="Horas">
					<select>
						<option>Potência</option>
						<option>Potência</option>
					</select>
					</div>
				</div>
				<button type="submit" name="button" class="btn login_btn">Consumir</button>
				</form>
				</div>
	</div>
	<?php 
		//$geladeira = $_POST['geladeira'];//*potencia da geladeira;

	?>
</body>
</html>