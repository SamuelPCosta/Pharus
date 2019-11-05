<!DOCTYPE html>
<html lang="pt-br">  
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pharus | Criar Cadastro</title> <!--Título da Aba-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> <!--Importação do CSS do BS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/stylelogin.css"> <!--Importação das folhas de estilo css-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> <!--Importação dos ícones utilizados-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> <!--Importação da fonte Open Sans-->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> <!--Importação de sweetalert-->
	<link rel="shortcut icon" href="<?= base_url()?>assets/img/favicon.png"/> <!--Icone-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="<?= base_url()?>assets/js/jquery.maskMoney.js" type="text/javascript"></script>
</head>
<body>
		<?php  
			if (!isset($_GET["error"])){}else{
				$erro=$_GET["error"];
				if ($erro==1){
				//Aqui fica o erro para informar ao usuário que a senha dele deve ter no mínimo 8 caracteres
		?>
			<script>
	    		swal("Ops!", 'Sua senha deve conter no mínimo 8 caracteres!', "error");
	    	</script>
    	<?php 
    			}elseif($erro==2){
    			//Aqui fica o erro para informar ao usuário que a senha dele não bate com a confirmação
    	?>
			<script>
	    		swal("Ops!", 'A confirmação de senha é diferente da senha definida!', "error");
	    	</script>
    	<?php 	
    			}elseif($erro==3){
    	?>
    		<script>
	    		swal("Ops!", 'O nome de usuário já existe!', "error");
	    	</script>
    	<?php  
    			}	
    		}
    	?>	
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100" >
			<div class="user_card user_card_cadastro bg-light">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="<?= base_url()?>assets/img/logo.png" width=160 class="logo_grande_cadastro px-2 py-2 mb-4 rounded-circle" alt="Logo"><!--Nossa Logo-->
					</div>
				</div>
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
								<span class="input-group-text"><i class="fas fa-envelope"></i></span>
							</div>
							<input type="email" name="email" class="form-control input_user" value="" placeholder="Email" required>
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
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-keyboard"></i></span>
							</div>
							<input type="text" name="conta_contrato" class="form-control input_pass" value="" placeholder="Conta contrato" required>
						</div>
						<span class="text-secondary">Opcional</span>
						<div class="input-group mb-1">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-coins"></i></span>
							</div>
							<input type="text" name="tarifa_kwh" id="tarifa" class="form-control input_pass maskMoney" value="" placeholder="Tarifa por kWh"  min="0.10" max="3.00" step="0.01">
						</div>			
						<a href="login" class="ml-2 float-right" data-toggle="modal" data-target="#saibamais">Entenda melhor</a>

						<!-- ###modal### -->
						 <div class="modal fade" id="saibamais" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
			              <div class="modal-dialog modal-dialog-centered" role="document">
			                <div class="modal-content">
			                  <div class="modal-header">
			                    <h6 class="modal-title" id="TituloModalCentralizado">Entenda melhor</h6>
			                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
			                      <span aria-hidden="true">&times;</span>
			                    </button>
			                  </div>
			                  <div class="modal-body">
			                  	<p class="text-justify">A sua conta contrato serve para identificação dos gastos, dos titulares da conta e disponibilidade de outras informações. Ela está localizada na parte inferir da sua conta de energia. Lembre-se, ela sempre possui 10 dígitos</p>
			                  	<p class="text-justify">Já a tarifa de energia é o valor cobrado em reais a cada kWh de energia consumida. Este vaor está diretamente relacionado ao preço da sua conta ao final do mês. Essa taxa pode variar de cidade para cidade, ou até mesmo de bairro para bairro. Então, se você puder informar a tarifa de energia você terá uma maior precisão do controle dos seus gastos mensais. Esse valor encontra-se impresso XXX</p>
			                  </div>
			                  <div class="modal-footer">
			                    <button type="button" class="btn btn-warning text-dark">Ok</button>
			                  </div>
			                </div>
			              </div>
			              </div>


				</div>
					<div class="d-flex justify-content-center mt-3 login_container">
						<button type="submit" name="button" class="btn btn-warning login_btn">Cadastrar</button>
					</div>
				</form>
				<div class="mt-1">
					<div class="d-flex justify-content-center links">
						Já tem cadastro? <a href="login" class="ml-2">Entrar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		$("#tarifa").maskMoney({
		  thousands: '.', 
		  decimal: '.' , 
		  precision: 2, 
		  affixesStay : false, 
		  bringCaretAtEndOnFocus: true 
		}); 
	</script>
	<!--Abaixo seguem os scripts para o funcionamento do JS do BS...-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
	<!--Fim dos scripts do BS-->
</body>
</html>