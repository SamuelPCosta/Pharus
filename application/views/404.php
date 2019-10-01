<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#343a40">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pharus | <?php echo $titulo;?></title> <!--Título da Aba-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> <!--Importação do CSS do BS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> <!--Importação dos ícones utilizados-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300&display=swap" rel="stylesheet">
    <!--Importação da fonte Open Sans-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab%3A300%2C400%2C700" rel="stylesheet">
    <link rel="shortcut icon" href="<?= base_url()?>assets/img/icon.ico"/> <!--Icone-->
    <!-- O comando base_url() é um atalho para o enderço da nossa base-->
</head>
<body style="background-color: #464B51; height: 100vh; width: 100vw" class="d-table">
<div class="master d-table-cell align-middle">
        <!-- /#sidebar-wrapper -->
        <div id="dark"></div>
            <!--conteudo-->
        <div id="page-content-wrapper">
            <div class="container usuario">
                <div class="card bg-dark py-5 px-5 my-4 shadow card-theme w-75 mx-auto">
                    <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-8 col-md-12 mx-auto colunas-meta d-table-cell align-center">
                        <img src="<?= base_url()?>assets/img/user_man.png" class="py-3 rounded-circle" width=100% >
                    </div>
                </div>
                    <div class="row align-items-center">
                        <div class="col-xl px-0">
                            <h1 class="text-center text-white">Erro 404</h1>
                            <h4 class="my-3 text-center theme text-white">Página não encontrada!</h4>
                        </div>
                    </div>
                    <!--conteudo-->
                </div>
            </div>
<!-- Footer -->
<footer class="page-footer font-small position-relatiave">
  <!-- Footer Links -->
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="color: #bbb; font-size: 1.2em"><!--©--> <?php echo date('Y') ?> Pharus -
    <a href="index" class="text-white">Home</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->


    <!--Abaixo seguem os scripts para o funcionamento do JS do BS...-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
    <!--Fim dos scripts do BS-->
</body>
</html>
<!-- https://www.chartjs.org/docs/latest/charts/line.html documentacao graficos-->
<!--https://codepen.io/Philippe_Fercha/pen/yawbqB link do menu-->