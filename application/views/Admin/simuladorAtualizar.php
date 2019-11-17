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
  <script src="<?= base_url()?>assets/js/simuladorScript.js"></script>
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
			margin-top: 50px;
			margin-bottom: 50px;
			max-height: 40px;
		}
	</style>
</head>

<body>
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg position-fixed" style="top:0;">
      <!--logo start-->
      <a href="admin" class="logo"><b><span>P</span>harus</b></a>
      <a href="admin/zerar2/<?php echo $this->session->userdata('usuarioSimulado'); ?>" class="logo ml-3 btn btn-warning text-dark mt-3" style="font-size: 1em">Zerar</a>
      <!--logo end-->
      <div class="top-menu ">
        <ul class="nav pull-right top-menu mt-3">
          <li><a class="logout" href="Admin/logout">Sair</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
<div class="container d-table" style="height: 50vh; margin-top: 25vh">
	<div class="card bg-dark shadow-lg px-5 py-5 d-table-cell align-middle">
		<div class="row align-itens-middle">
			<div class=" mx-auto">
				<div class="container mt-5">
					<h1 class="mb-5 text-white">Simulador de Consumo</h1>
					<h1 class="text-white">Usuário: <span class="text-warning"><?php echo $this->session->userdata('usuarioSimulado'); ?></span></h1>
					<h1 class="text-white">Total: <span class="text-warning"><?php echo $this->session->userdata('totalSimulador');?> kWh</span></h1>
					<h1 class="text-white">Restante: <span class="text-warning"><?php echo $this->session->userdata('totalInserir');?> kWh</span></h1>
					<div class="row">
						<?php 
							date_default_timezone_set('America/Fortaleza');
							$horas = date('H');
							$minutos = date('i');
							$segundos = date('s');
						?>
					<h1 class="mb-5 text-white">Atualizado em: <span class="text-warning"><?php echo $horas.":".$minutos.":".$segundos;?></span></h1>	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>