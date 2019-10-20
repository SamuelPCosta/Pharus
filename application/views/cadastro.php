<!DOCTYPE html>
<html lang="pt-br">  
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pharus | Criar Cadastro</title> <!--Título da Aba-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> <!--Importação do CSS do BS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/stylelogin.css"> <!--Importação das folhas de estilo css-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/stylecadastro.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> <!--Importação dos ícones utilizados-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> <!--Importação da fonte Open Sans-->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> <!--Importação de sweetalert-->
	<link rel="shortcut icon" href="<?= base_url()?>assets/img/favicon.png"/> <!--Icone-->
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
				</div>
					<div class="d-flex justify-content-center mt-3 login_container">
						<button type="submit" name="button" class="btn btn-warning login_btn">Cadastrar</button>
					</div>
				</form>
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Já tem cadastro? <a href="login" class="ml-2">Entrar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Abaixo seguem os scripts para o funcionamento do JS do BS...-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
	<!--Fim dos scripts do BS-->
</body>
</html>