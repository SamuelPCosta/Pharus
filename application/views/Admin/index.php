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
  <link href="<?= base_url()?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> <!--Importação dos ícones utilizados-->
  <link href="<?= base_url()?>assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/cssAdmin/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/cssAdmin/style.css">
  <link href="<?= base_url()?>assets/cssAdmin/style-responsive.css" rel="stylesheet">
  
  <script src="<?= base_url()?>assets/lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b><span>P</span>harus</b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Dashio Admin Panel</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="<?= base_url()?>assets/imgAdmin/ui-zac.jpg"></span>
                  <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="<?= base_url()?>assets/imgAdmin/ui-divya.jpg"></span>
                  <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="<?= base_url()?>assets/imgAdmin/ui-danro.jpg"></span>
                  <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="<?= base_url()?>assets/imgAdmin/ui-sherman.jpg"></span>
                  <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login/logout">Sair</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="<?= base_url()?>assets/img/logo.png" class="img-circle" width="80"></a></p>
          <h5 class="centered" style="text-transform: capitalize;"><?php echo $this->session->userdata('admin'); ?></h5>
          <li class="mt">
            <a class="active" href="admin">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Elementos UI</span>
              </a>
            <ul class="sub">
              <li><a href="general.html">Geral</a></li>
              <li><a href="buttons.html">Butões</a></li>
              <li><a href="panels.html">Paineis</a></li>
              <li><a href="font_awesome.html">Icones Font Awesome</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Componentes</span>
              </a>
            <ul class="sub">
              <li><a href="grids.html">Grids</a></li>
              <li><a href="calendar.html">Calendário</a></li>
              <li><a href="gallery.html">Galeria</a></li>
              <li><a href="todo_list.html">Todo List</a></li>
              <li><a href="dropzone.html">Zona de Arquivos Upados</a></li>
              <li><a href="inline_editor.html">Editor em Linha</a></li>
              <li><a href="file_upload.html">Upload de múltiplos arq.</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Páginas Extras</span>
              </a>
            <ul class="sub">
              <li><a href="blank.html">Página em branco</a></li>
              <li><a href="login.html">Login</a></li>
              <li><a href="lock_screen.html">Tela de Bloqueio</a></li>
              <li><a href="profile.html">Perfil</a></li>
              <li><a href="invoice.html">Conta</a></li>
              <li><a href="pricing_table.html">Tabela de Preços</a></li>
              <li><a href="faq.html">Perguntas frequentes</a></li>
              <li><a href="404.html">Erro 404</a></li>
              <li><a href="500.html">Erro 500</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Formulários</span>
              </a>
            <ul class="sub">
              <li><a href="form_component.html">Componentes de Formulários</a></li>
              <li><a href="advanced_form_components.html">Componentes Avançados</a></li>
              <li><a href="form_validation.html">Validação de Formulários</a></li>
              <li><a href="contactform.html">Formulários de Contato</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Tabela de dados</span>
              </a>
            <ul class="sub">
              <li><a href="basic_table.html">Tabela Básica</a></li>
              <li><a href="responsive_table.html">Tabela Responsiva</a></li>
              <li><a href="advanced_table.html">Tabela avançada</a></li>
            </ul>
          </li>
          <li>
            <a href="inbox.html">
              <i class="fa fa-envelope"></i>
              <span>Email </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Gráficos</span>
              </a>
            <ul class="sub">
              <li><a href="morris.html">Morris</a></li>
              <li><a href="chartjs.html">Chartjs</a></li>
              <li><a href="flot_chart.html">Flot Charts</a></li>
              <li><a href="xchart.html">xChart</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
              </a>
            <ul class="sub">
              <li><a href="lobby.html">Lobby</a></li>
              <li><a href="chat_room.html"> Chat Room</a></li>
            </ul>
          </li>
          <li>
            <a href="google_maps.html">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h3>CONSUMO MÉDIO DE ENERGIA</h3>
            </div>
            <div class="custom-bar-chart">
              <ul class="y-axis">
                <li><span>10.000</span></li>
                <li><span>8.000</span></li>
                <li><span>6.000</span></li>
                <li><span>4.000</span></li>
                <li><span>2.000</span></li>
                <li><span>0</span></li>
              </ul>
              <div class="bar">
                <div class="title">JAN</div>
                <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
              </div>
              <div class="bar ">
                <div class="title">FEB</div>
                <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
              </div>
              <div class="bar ">
                <div class="title">MAR</div>
                <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
              </div>
              <div class="bar ">
                <div class="title">APR</div>
                <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
              </div>
              <div class="bar">
                <div class="title">MAY</div>
                <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
              </div>
              <div class="bar ">
                <div class="title">JUN</div>
                <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
              </div>
              <div class="bar">
                <div class="title">JUL</div>
                <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
              </div>
            </div>
            <!--custom chart end-->
            <div class="row mt">
              <!-- SERVER STATUS PANELS -->
              <div class="col-lg-4 col-md-12 mb">
                <!-- NOVOS ADMINISTRADORES -->
                <a href="#" data-toggle="modal" data-target="#ExemploModalCentralizado"><div class="new-user-panel pn bg-dark"> <!--Link pra cadastrar novo usuario-->
                  <i class="fas fa-user-lock fa-4x text-warning"></i>
                  <h2 class="text-white">Cadastrar novos<br> adminis<wbr>tradores</h2>
                </div></a>
              </div>
              <!-- Modal -->
              <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h6 class="modal-title" id="TituloModalCentralizado">Cadastrar novos administradores</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">


                    <div class="d-flex justify-content-center form_container">
                      <form method="post" action="cadastro/adicionar">
                        <div class="input-group mb-3">
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-address-card"></i></i></span>
                          </div>
                          <input type="text" name="nome" class="form-control input_user text-capitalize" value="" placeholder="Nome completo" required autofocus>
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                          <input type="text" name="usuario" class="form-control input_pass text-capitalize" value="" placeholder="Usuário" required>
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-keyboard"></i></span>
                          </div>
                          <input type="text" name="conta_contrato" class="form-control input_pass" value="" placeholder="Conta contrato" required>
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                          </div>
                          <input type="password" name="senha" class="form-control input_pass" value="" placeholder="Senha" required>
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                          </div>
                          <input type="password" name="confirmar_senha" class="form-control input_pass" value="" placeholder="Confirmar senha" required>
                        </div>
                        <div class="input-group mb-3">
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                          </div>
                          <input type="email" name="email" class="form-control input_user" value="" placeholder="Email" required>
                        </div>  
                        <div class="form-group">
                          <div class="custom-control custom-checkbox" style="font-size: 1.4em">
                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                            <label class="custom-control-label text-dark" for="customControlInline">Conceder privilégios de administrador</label>
                          </div>
                        </div>   
                    </div>


                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-success">Salvar mudanças</button>
                  </div>
                </div>
              </div>
              </div>
              <!-- /col-md-4-->
              <div class="col-lg-4 col-md-12 mb">
                <!-- NOVOS ADMINISTRADORES -->
                <a href="#" data-toggle="modal" data-target="#removerAdmin"><div class="new-user-panel pn"> <!--Link pra cadastrar novo usuario-->
                  <i class="fas fa-user-slash fa-4x"></i>
                  <h2 style="color:#fff;">Remover<br> adminis<wbr>trador</h2>
                </div></a>
              </div>
              <!-- /col-md-4 -->
                            <!-- Modal -->
              <div class="modal fade" id="removerAdmin" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h6 class="modal-title" id="TituloModalCentralizado">Remover administradores já cadastrados</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-success">Salvar mudanças</button>
                  </div>
                </div>
              </div>
              </div>
              <div class="col-lg-4 col-md-12 mb">
                <!-- REVENUE PANEL -->
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5>DROPBOX STATICS</h5>
                  </div>
                  <canvas id="serverstatus02" height="120" width="120"></canvas>
                  <script>
                    var doughnutData = [{
                        value: 60,
                        color: "#1c9ca7"
                      },
                      {
                        value: 40,
                        color: "#f68275"
                      }
                    ];
                    var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
                  </script>
                  <p>April 17, 2014</p>
                  <footer>
                    <div class="pull-left">
                      <h5><i class="fa fa-hdd-o"></i> 17 GB</h5>
                    </div>
                    <div class="pull-right">
                      <h5>60% Used</h5>
                    </div>
                  </footer>
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
            <div class="row">
              <!-- DIRECT MESSAGE PANEL -->
              <div class="col-lg-8 col-md-12 mb">
                <div class="message-p pn bg-dark">
                  <div class="message-header">
                    <h5 class="text-white">MENSAGENS</h5>
                  </div>
                  <div class="row">
                    <div class="centered col-3 hidden-sm hidden-xs">
                      <img src="<?= base_url()?>assets/img/user_man.png" class="img-circle mx-auto" width="90">
                    </div>
                    <div class="col-md-8">
                      <p style="font-size: 18px" class="text-warning">Steve Rogers</p>
                      <!-- <p class=" text-light">3 horas atrás</p> -->
                      <p class="message text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                      <form class="form-inline" role="form">
                        <div class="form-group">
                          <input type="text" class="form-control float-left col-xl-9 col-md-8 col-10 ml-3" id="exampleInputText" placeholder="Responder..." style="height: 38px">
                          <button type="submit" class="btn btn-warning rounded-circle ml-2" style="width: 38px; height: 38px !important"><i class="far fa-paper-plane text-dark" style="font-size: 12px;"></i></button>
                        </div> 
                      </form>
                    </div>
                  </div>
                </div>
                <!-- /Message Panel-->
              </div>
              <!-- /col-md-8  -->
              <!-- WEATHER PANEL -->
              <div class="col-lg-4 col-md-12 mb">
                <div class="weather pn">
                  <i class="fa fa-cloud fa-4x"></i>
                  <h2>11º C</h2>
                  <h4>BUDAPEST</h4>
                </div>
              </div>
              <!-- /col-md-4-->
            </div>
            <div class="row">
              <!-- TWITTER PANEL -->
              <div class="col-lg-8 col-md-12 mb">
                <div class="twitter-panel pn pnx2 bg-dark">
                  <i class="fas fa-lightbulb fa-4x"></i>
                  <h3 class="text-white">Inserir nova dica</h3>
                </div>
              </div>
              <div class="col-lg-4 col-md-12 mb">
                <!-- NOVOS ADMINISTRADORES -->
                <a href="#"><div class="new-user-panel pn pnx2"> <!--Link pra cadastrar novo usuario-->
                </div></a>
              </div>

              <!-- /col-md-4 -->
            </div>
            <!--Inutil ou desnecessario-->
            <!-- /row -->
           <!--  <div class="row">
              <div class="col-md-4 col-sm-4 mb">
                <div class="instagram-panel pn">
                  <i class="fa fa-instagram fa-4x"></i>
                  <p>@THISISYOU<br/> 5 min. ago
                  </p>
                  <p><i class="fa fa-comment"></i> 18 | <i class="fa fa-heart"></i> 49</p>
                </div>
              </div>
              /col-md-4
              PROFILE 02 PANEL
              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <div class="content-panel pn bg-dark">
                    
                </div>
                /panel
              </div>
              / col-md-4
              <div class="col-md-4 col-sm-4 mb">
                <div class="green-panel pn bg-dark">
                  <div class="g-header">
                    <h5>DISK SPACE</h5>
                  </div>
                  <canvas id="serverstatus03" height="120" width="120"></canvas>
                  <script>
                    var doughnutData = [{
                        value: 60,
                        color: "#2b2b2b"
                      },
                      {
                        value: 40,
                        color: "#fffffd"
                      }
                    ];
                    var myDoughnut = new Chart(document.getElementById("serverstatus03").getContext("2d")).Doughnut(doughnutData);
                  </script>
                  <h3>60% USED</h3>
                </div>
              </div>
              /col-md-4
            </div> -->
            <!-- /row -->
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
          <div class="col-lg-3 ds">
            <!-- USERS ONLINE SECTION -->
            <h4 class="centered mt">NOSSA EQUIPE</h4>
            <div style="height: 1px" class="bg-warning"></div>
            <!-- First Member -->
            <div class="desc centered">
              <!-- <div class="thumb">
                <img class="img-circle" src="<?= base_url()?>assets/img/user_man.png" width="35px" height="35px" align="">
              </div> -->
              <div class="details">
                <p>
                  <a href="#">Gabriel Ribeiro</a><br/>
                  <muted class="text-white">Available</muted class="text-white">
                </p>
              </div>
            </div>
            <!-- Second Member -->
            <div class="desc centered">
              <!-- <div class="thumb">
                <img class="img-circle" src="<?= base_url()?>assets/img/user_man.png" width="35px" height="35px" align="">
              </div> -->
              <div class="details">
                <p>
                  <a href="#">André Tavares</a><br/>
                  <muted class="text-white">I am Busy</muted class="text-white">
                </p>
              </div>
            </div>
            <!-- Third Member -->
            <div class="desc centered">
              <!-- <div class="thumb">
                <img class="img-circle" src="<?= base_url()?>assets/img/user_man.png" width="35px" height="35px" align="">
              </div> -->
              <div class="details">
                <p>
                  <a href="#">Keliane Martins</a><br/>
                  <muted class="text-white">Available</muted class="text-white">
                </p>
              </div>
            </div>
            <!-- Fourth Member -->
            <div class="desc centered">
              <!-- <div class="thumb">
                <img class="img-circle" src="<?= base_url()?>assets/img/user_man.png" width="35px" height="35px" align="">
              </div> -->
              <div class="details">
                <p>
                  <a href="#">Samuel Costa</a><br/>
                  <muted class="text-white">Available</muted class="text-white">
                </p>
              </div>
            </div>
            
            <div class="bg-dark">
            <!-- RECENT ACTIVITIES SECTION -->
            <h4 class="centered pt-5">RECENT ACTIVITY</h4>
            <!-- First Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted class="text-white">Just Now</muted class="text-white">
                  <br/>
                  <a href="#">Paul Rudd</a> purchased an item.<br/>
                </p>
              </div>
            </div>
            <!-- Second Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted class="text-white">2 Minutes Ago</muted class="text-white">
                  <br/>
                  <a href="#">James Brown</a> subscribed to your newsletter.<br/>
                </p>
              </div>
            </div>
            <!-- Third Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted class="text-white">3 Hours Ago</muted class="text-white">
                  <br/>
                  <a href="#">Diana Kennedy</a> purchased a year subscription.<br/>
                </p>
              </div>
            </div>
            <!-- Fourth Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted class="text-white">7 Hours Ago</muted class="text-white">
                  <br/>
                  <a href="#">Brando Page</a> purchased a year subscription.<br/>
                </p>
              </div>
            </div>
            <!--COMPLETED ACTIONS DONUTS CHART-->
            <div class="donut-main">
              <h4>COMPLETED ACTIONS & PROGRESS</h4>
              <canvas id="newchart" height="130" width="130"></canvas>
              <script>
                var doughnutData = [{
                    value: 70,
                    color: "#4ECDC4"
                  },
                  {
                    value: 30,
                    color: "#fdfdfd"
                  }
                ];
                var myDoughnut = new Chart(document.getElementById("newchart").getContext("2d")).Doughnut(doughnutData);
              </script>
            </div>
            <!--NEW EARNING STATS -->
            <div class="panel terques-chart">
              <div class="panel-body">
                <div class="chart">
                  <div class="centered">
                    <span>TODAY EARNINGS</span>
                    <strong>$ 890,00 | 15%</strong>
                  </div>
                  <br>
                  <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
                </div>
              </div>
            </div>
           <!-- CALENDAR-->
            <div id="calendar" class="mb">
              <div class="panel green-panel no-margin">
                <div class="panel-body">
                  <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                    <div class="arrow"></div>
                    <h3 class="popover-title" style="disadding: none;"></h3>
                    <div id="date-popover-content" class="popover-content"></div>
                  </div>
                  <div id="my-calendar"></div>
                </div>
              </div>
            </div>
            <!-- / calendar -->
            <!--new earning end-->
            </div>
            </div>
          </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          <strong>Pharus</strong>. 2019
          <script language=javascript type="text/javascript">
          now = new Date
          document.write now.getFullYear()
          </script>
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Criado com template Dashio
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?= base_url()?>assets/lib/jquery/jquery.min.js"></script>

  <script src="<?= base_url()?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="<?= base_url()?>assets/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="<?= base_url()?>assets/lib/jquery.scrollTo.min.js"></script>
  <script src="<?= base_url()?>assets/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="<?= base_url()?>assets/lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="<?= base_url()?>assets/lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="<?= base_url()?>assets/lib/sparkline-chart.js"></script>
  <script src="<?= base_url()?>assets/lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
