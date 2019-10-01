<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta name="theme-color" content="#343a40">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pharus | <?php echo $titulo;?></title> <!--Título da Aba-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> <!--Importação do CSS do BS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/stylelogin.css"> <!--Importação da folha de estilo css para login-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/style.css"> <!--Importação da folha de estilo css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/metas.css"> <!--Importação da folha de estilo css-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/progressbar.css"> <!--Importação da folha de estilo css para a barra de progresso-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/dicas.css"> <!--Importação da folha de estilo css para dicas-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/ideal.css"> <!--Importação da folha de estilo css para dicas-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/consumo.css"> <!--Importação da folha de estilo css para consumo-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> <!--Importação dos ícones utilizados-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300&display=swap" rel="stylesheet">
    <!--Importação da fonte Open Sans-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab%3A300%2C400%2C700" rel="stylesheet">
	<link rel="shortcut icon" href="<?= base_url()?>assets/img/icon.ico"/> <!--Icone-->
	<!-- O comando base_url() é um atalho para o enderço da nossa base-->
</head>
<body>
<div class="master bg-light">
	<!-- Header -->
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top my-0 w-100 shadow">
			<a href="index" class="mx-auto logo"><img src="<?= base_url()?>assets/img/logo.png" width=35><h1 class="text-white d-inline-block ml-2">Pharus</h1></a> <!--Nossa Logo-->
			<a href="#menu-toggle" class="btn text-white position-fixed" id="menu-toggle"><i class="fas fa-bars"></i></a>
            <a href="#menu-toggle" class="btn text-white position-fixed pl-5" id="toggle-theme" title="Modo noturno" onclick="update(myChart)"><i class="fas fa-adjust"></i></a>
		</nav>
	</header>
	<!-- Header -->

		<!--Menu lateral-->
		<!-- Sidebar -->
        <div id="wrapper" class="position-relative">
        <div id="sidebar-wrapper" class="shadow bg-white">
            <ul class="sidebar-nav">
            	<li id="Usuario" class="">
            		<a href="usuario" class="text-capitalize sidebar-li-a text-dark"><i class="fas fa-user"></i><?php echo $this->session->userdata('usuario'); ?></a>
            	</li>
			    <div class="dropdown-divider"></div>
                <li id="Editar senha" class="">
                    <a href="editar-senha" class="sidebar-li-a text-dark"><i class="fas fa-edit"></i>Editar senha</a>
                </li>
			    <div class="dropdown-divider"></div>
                <li id="Consumo" class="">
                    <a href="consumo" class="sidebar-li-a text-dark"><i class="fas fa-coins"></i>Consumo</a>
                </li>
                <div class="dropdown-divider"></div>
                <li id="Metas" class="">
                    <a href="metas" class="sidebar-li-a text-dark"><i class="fas fa-bookmark"></i>Metas</a>
                </li>
                <div class="dropdown-divider"></div>
                <li id="Ideal de Consumo" class="">
                    <a href="idealdeconsumo" class="sidebar-li-a text-dark"><i class="fas fa-funnel-dollar"></i>Ideal de Consumo</a>
                </li>
                <div class="dropdown-divider"></div>
                <li id="Dicas" class="">
                    <a href="dicas" class="sidebar-li-a text-dark"><i class="fas fa-lightbulb"></i>Dicas</a>
                </li>
                <div class="dropdown-divider"></div>
                <li class="">
                    <a href="login/logout" class="sidebar-li-a text-dark" onclick="destroyphoto()"><i class="fas fa-sign-out-alt"></i> Sair</a><!--Controller login/ função logout-->
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <div id="dark"></div>
            <!--conteudo-->
        <div id="page-content-wrapper">