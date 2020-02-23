<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Pharus | Simulador</title>

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
			background-color: #343a40;
		}
		input, select{
			width: 70px;
			height: 30px;
			background-color: #eee;
			border: none;
			border-radius: 5px;
			padding-left: 10px;
			margin: 32px 0px 0px 15px;
			outline: 0;
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
			margin: auto;
			margin-bottom: 20px;
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
		<h1 class="mb-5 text-white">Simulador de Consumo</h1>
		<form method="post" action="Admin/Consumir">
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
				<?php $cozinha = array('Geladeira','Freezer','Exaustor','Liquidificador','Microondas','Fogão Elétrico','Lava-Louça');
				$quarto = array('Vídeogame','Computador','Impressora','Estabilizador','Ar-Condicionado');
				$sala = array('Televisão','Ventilador');
				$outros = array('Lâmpada Fluor.','Lâmpada Incan.','Lavadora','Secador','Ferro Elétrico','Chuveiro Elétrico');
				$options = "<option value='15'>15W (PS1)</option>
							<option value='180'>180W (Computador)</option>
							<option value='1500'>1500W (Ar-Condicionado)</option>
							<option value='80'>80W (TV)</option>
							<option value='90'>90W (Ventilador)</option>
							<option value='110'>110W (Geladeira)</option>
							<option value='130'>130W (Freezer)</option>
							<option value='170'>170W (Exaustor)</option>
							<option value='300'>300W (Liquidificador)</option>
							<option value='120'>1200W (Microondas)</option>
							<option value='9120'>9120W (Fogão Elétrico)</option>
							<option value='15'>15W (Lâmpada Fluo.)</option>
							<option value='55'>55W (Lâmpada Inc.)</option>
							<option value='500'>500W (Lavadora de Roupas)</option>
							<option value='700'>700W (Secador de Cabelo)</option>
							<option value='100'>1000W (Ferro Elétrico)</option>
							<option value='1500'>1500W (Lavadora de Louças)</option>
							<option value='4500'>4500W (Chuveiro Elétrico)</option>" 
				?>
				<div class="col-lg-6 col-sm-12" id="cozinha">
					<table>					
					<?php
					foreach ($cozinha as $aparelho) {
						$i=1;
						echo "<tr><td style='width:330px;'><h2 class='text-white'>".$aparelho.":</h2></td>
							<td><input type='number' min='0' max='24' name='horas[]' placeholder='Horas'>
							<select name='potencia[]'>".$options."</select></div></td></tr>";
						$i++;
					}
					?>
					</table>
				</div>
				<div class="col-lg-6 col-sm-12" id="quarto">
					<table>					
					<?php
					foreach ($quarto as $aparelho) {
						$i=1;
						echo "<tr><td style='width:330px;'><h2 class='text-white'>".$aparelho.":</h2></td>
							<td><input type='number' min='0' max='24' name='horas[]' placeholder='Horas'>
							<select name='potencia[]'>".$options."</select></div></td></tr>";
						$i++;
					}
					?>
					</table>
				</div>
				<div class="col-lg-6 col-sm-12" id="sala">
					<table>					
					<?php
					foreach ($sala as $aparelho) {
						$i=1;
						echo "<tr><td style='width:330px;'><h2 class='text-white'>".$aparelho.":</h2></td>
							<td><input type='number' min='0' max='24' name='horas[]' placeholder='Horas'>
							<select name='potencia[]'>".$options."</select></div></td></tr>";
						$i++;
					}
					?>
					</table>
				</div>
				<div class="col-lg-6 col-sm-12" id="outros">
					<table>					
					<?php
					foreach ($outros as $aparelho) {
						$i=1;
						echo "<tr><td style='width:330px;'><h2 class='text-white'>".$aparelho.":</h2></td>
							<td><input type='number' min='0' max='24' name='horas[]' placeholder='Horas'>
							<select name='potencia[]'>".$options."</select></div></td></tr>";
						$i++;
					}
					?>
					</table>
				</div>	
		</div>
		<input type="text" name="usuario" class="btn login_btn bg-light mx-auto d-block w-25" placeholder="Informe o usuario" style="text-transform: capitalize;" required>
		<button type="submit" name="button" class="btn login_btn bg-warning mx-auto d-block w-25 mt-1">Consumir</button>
		</form>
		<form method="post" action="Admin/zerar">
			<input type="text" name="usuario" class="btn login_btn bg-light mx-auto d-block w-25" placeholder="Informe o usuario" style="text-transform: capitalize;" required>
			<button type="submit" class="btn login_btn bg-danger text-white mx-auto d-block w-25 mt-1">Zerar</button>
		</form>
</body>
</html>