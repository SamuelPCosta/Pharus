<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta name="theme-color" content="#22242a">
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
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/inputnumber.css"> <!--Importação da folha de estilo para o input-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> <!--Importação dos ícones utilizados-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300&display=swap" rel="stylesheet">
    <!--Importação da fonte Open Sans-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab%3A300%2C400%2C700" rel="stylesheet">
	<link rel="shortcut icon" href="<?= base_url()?>assets/img/logo2.png"/> <!--Icone-->
	<!-- O comando base_url() é um atalho para o enderço da nossa base-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?= base_url()?>assets/js/jquery.maskMoney.js" type="text/javascript"></script>
    <script src="<?= base_url()?>assets/js/scriptInputNumber.js" type="text/javascript"></script>
</head>
<body>
<div class="master bg-light">
	<!-- Header -->
	<header>
		<nav class="navbar theme-nav bg-white navbar-expand-lg shadow-sm fixed-top my-0" id="header">
			<a href="index" class="mx-auto logo position-relative"><img src="<?= base_url()?>assets/img/logo2.png" alt="Lôgo do sistema Farol aceso" width=35><h1 class="theme d-inline-block ml-2"><span class="text-warning" style="text-shadow: 0px 0px 1px #22242a">P</span>harus</h1></a> <!--Nossa Logo-->
			<a href="#menu-toggle" class="btn text-white text-dark sidebar-li-a position-fixed" id="menu-toggle"><i class="fas fa-bars"></i></a>
              <a class="dropdown btn text-white sidebar-li-a text-dark position-fixed" data-toggle="dropdown" aria-haspopup="true" id="notifications" aria-expanded="false" style="cursor: pointer;" onclick="animarNotificacao()" accesskey="n">
                <div class="rounded-circle bg-warning position-fixed border border-dark" id="avisonotificacao" style="width: 12px; height: 12px; margin-left: 13px; margin-top: -2px"></div>
                <i class="fas fa-bell"></i>
              </a>
              <a href="#atalhos" accesskey="a" class="position-fixed" title="Consultar atalhos de acessibilidade" style="opacity: 0; top: -60px;">Para consultar os atalhos de acessibilidade pressione a qualquer momento Alt mais a.</a> 
              <div class="btn-group">
                <div class="dropdown-menu card-theme theme dropdown-menu-right" id="painelnot" style="top:100px; width: 320px; overflow-x: auto; max-height: 350px; overflow-y: hidden;">
                    <table class="mx-auto"> 
                        <tr class="dropdown-item theme di-1 inativo">
                            <td class="py-2 theme">Seja bem vindo ao Pharus!</td>
                            <td class="text-secondary"> - </td>
                            <td class="text-secondary text-right">Hoje</td>
                        </tr>
                        <tr class="dropdown-item theme di-1">
                            <td class="py-2 theme">Seu consumo foi ótimo!</td>
                            <td class="text-secondary"> - </td>
                            <td class="text-secondary text-right">Ontem</td>
                        </tr>
                        <tr class="dropdown-item theme di-2">
                            <td class="py-2 theme">Seu consumo foi ótimo!</td>
                            <td class="text-secondary"> - </td>
                            <td class="text-secondary text-right">Há 2 dias</td>
                        </tr>
                        <tr class="dropdown-item theme di-3">
                            <td class="py-2 theme">Seu consumo foi ruim!</td>
                            <td class="text-secondary"> - </td>
                            <td class="text-secondary text-right">Há 3 dias</td>
                        </tr>
                        <tr class="dropdown-item theme di-4">
                            <td class="py-2 theme">Seu consumo foi ótimo!</td>
                            <td class="text-secondary"> - </td>
                            <td class="text-secondary text-right">Há 4 dias</td>
                        </tr>
                        <tr class="dropdown-item theme di-5">
                            <td class="py-2 theme">Seu consumo foi ruim!</td>
                            <td class="text-secondary"> - </td>
                            <td class="text-secondary text-right">Há 5 dias</td>
                        </tr>
                        <tr class="dropdown-item theme di-6">
                            <td class="py-2 theme">Seu consumo foi ótimo!</td>
                            <td class="text-secondary"> - </td>
                            <td class="text-secondary text-right">Há 6 dias</td>
                        </tr>
                        <tr class="dropdown-item theme di-7">
                            <td class="py-2 theme">Seu consumo foi ótimo!</td>
                            <td class="text-secondary"> - </td>
                            <td class="text-secondary text-right">Há 7 dias</td>
                        </tr>
                    </table>
              </div>
            </div>
            <a href="#menu-toggle" class="btn text-white position-fixed sidebar-li-a text-dark" id="toggle-theme" title="Modo noturno" onclick="update(myChart)"><i class="fas fa-adjust"></i></a>
		</nav>
	</header>
	<!-- Header -->

		<!--Menu lateral-->
		<!-- Sidebar -->
        <div id="wrapper" class="position-relative">
        <div id="sidebar-wrapper" class="shadow bg-white">
            <ul class="sidebar-nav">
                <li id="Usuario" class="">
                    <a href="usuario" class="text-capitalize sidebar-li-a text-dark"><img src="<?= base_url()?>assets/fotos/user_man.png" class="photo_user rounded-circle mr-2" width=35 style="margin-left: -11px; margin-top:-4px; height: 35px; object-fit: cover;" alt="espaço para sua foto"><?php echo $this->session->userdata('usuario'); ?></a>
                </li>
                <div class="dropdown-divider"></div>
            	<li id="Home" class="" >
            		<a href="index" accesskey="h" class="text-capitalize sidebar-li-a text-dark"><i class="fas fa-home"></i>Home</a>
            	</li>
                <li id="Metas" class="" >
                    <a href="metas" accesskey="m" class="sidebar-li-a text-dark"><i class="fas fa-bookmark"></i>Metas</a>
                </li>
                <li id="Consumo" class="" >
                    <a href="consumo" accesskey="c" class="sidebar-li-a text-dark"><i class="fas fa-coins"></i>Consumo</a>
                </li>
                <li id="Ideal de Consumo" class="">
                    <a href="idealdeconsumo" class="sidebar-li-a text-dark"><i class="fas fa-funnel-dollar"></i>Ideal de Consumo</a>
                </li>
                <li id="Simulador" class="">
                    <a href="simulador" class="sidebar-li-a text-dark"><i class="fas fa-laptop-code"></i>Simulador</a>
                </li>
                <li id="Dicas" class="">
                    <a href="dicas#" class="sidebar-li-a text-dark"><i class="fas fa-lightbulb"></i>Dicas</a>
                </li>
                <li id="Conquistas" class="">
                    <a href="conquistas" class="sidebar-li-a text-dark"><i class="fas fa-star"></i>Conquistas</a>
                </li>
                <?php 
                    if (!isset($_SESSION['premium'])){
                        //CONFERIRI SE O USUÁRIO É PREMIUM
                ?>
                <li id="Apoie" class="">
                    <a href="apoie" class="sidebar-li-a text-dark"><i class="fas fa-award"></i>Apoie</a>
                </li>
                <?php
                    }
                ?>
                <li class="mb-5">
                    <a href="login/logout" accesskey="s" class="sidebar-li-a text-dark" onclick="destroyphoto()"><i class="fas fa-sign-out-alt"></i> Sair</a><!--Controller login/ função logout-->
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <div id="dark"></div>
            <!--conteudo-->
        <div id="page-content-wrapper">
            <a href="#header" accesskey="0" class="inativo" title="Voltar ao topo">Voltar ao topo</a> 
            <a href="#sidebar-wrapper" accesskey="1" class="inativo" title="Menu">Menu</a> 
            <a href="#page-content-wrapper" accesskey="2" class="inativo" title="Conteudo">Conteudo</a> 
            <a href="#rodape" accesskey="3" class="inativo" title="Rodapé">Rodapé</a>

            <a href="login" accesskey="a" class="ml-1 float-right inativo" data-toggle="modal" data-target="#Acessibilidademodal">Acessibilidade</a>
            <!-- ###modal### -->
           <div class="modal fade bd-example-modal-lg" id="Acessibilidademodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h6 class="modal-title" id="TituloModalCentralizado">Atalhos de Acessibilidade</h6>
                  </div>
                  <div class="modal-body">
                        <a href="#" class="d-block text-dark">Voltar ao topo. Alt + 0</a>
                        <a href="#" class="d-block text-dark">Menu. Alt + 1</a>
                        <a href="#" class="d-block text-dark">Conteudo. Alt + 2</a>
                        <a href="#" class="d-block text-dark">Rodapé. Alt + 3</a>
                        <a href="#" class="d-block text-dark">Abrir notificações. Alt + n</a>
                        <a href="#" class="d-block text-dark">Voltar para a página inicial. Alt + h</a>
                        <a href="#" class="d-block text-dark">Acessar a página de metas. Alt + m</a>
                        <a href="#" class="d-block text-dark">Acessar a página de consumo. Alt + c</a>
                        <a href="#" class="d-block text-dark">Iniciar simulação. (Funciona apenas na página do simulador). Alt + i</a>
                        <a href="#" class="d-block text-dark">Recarregar dicas. (Funciona apenas na página de dicas). Alt + r</a>
                        <a href="#" class="d-block text-dark">Sair do sistema. Alt + s</a>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-warning text-dark" data-dismiss="modal">Ok</button>
                  </div>
                </div>
                </div>
            </div>