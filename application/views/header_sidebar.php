<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pharus</title> <!--Título da Aba-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> <!--Importação do CSS do BS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/style.css"> <!--Importação da folha de estilo css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/metas.css"> <!--Importação da folha de estilo css-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/progressbar.css"> <!--Importação da folha de estilo css para a barra de progresso-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/dicas.css"> <!--Importação da folha de estilo css para dicas-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/ideal.css"> <!--Importação da folha de estilo css para dicas-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/consumo.css"> <!--Importação da folha de estilo css para consumo-->
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
		</nav>
	</header>
	<!-- Header -->

		<!--Menu lateral-->
		<!-- Sidebar -->
        <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
            	<li id="item_user">
            		<a href="#"><i class="fas fa-user"></i><?php echo $this->session->userdata('usuario'); ?></a>
            	</li>
			    <div class="dropdown-divider"></div>
			    <li id="Editar senha">
			    	<a href="editar-senha"><i class="fas fa-edit"></i>Editar senha</a>
			    </li>
			    <div class="dropdown-divider"></div>
			    <li id="Atualizar dados">
			    	<a href="atualizar-dados"><i class="fas fa-address-card"></i>Atualizar dados</a>
			    </li>
			    <div class="dropdown-divider"></div>
                <li id="Consumo">
                    <a href="consumo"><i class="fas fa-coins"></i>Consumo</a>
                </li>
                <div class="dropdown-divider"></div>
                <li id="Metas">
                    <a href="metas"><i class="fas fa-bookmark"></i>Metas</a>
                </li>
                <div class="dropdown-divider"></div>
                <li id="Ideal de Consumo">
                    <a href="idealdeconsumo"><i class="fas fa-funnel-dollar"></i>Ideal de Consumo</a>
                </li>
                <div class="dropdown-divider"></div>
                <li id="Dicas">
                    <a href="dicas"><i class="fas fa-lightbulb"></i>Dicas</a>
                </li>
                <div class="dropdown-divider"></div>
                <li>
                    <a href="login/logout"><i class="fas fa-sign-out-alt"></i> Sair</a><!--Controller login/ função logout-->
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <div id="dark"></div>