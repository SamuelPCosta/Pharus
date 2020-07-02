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
	<link rel="shortcut icon" href="<?= base_url()?>assets/img/logo2.png"/> <!--Icone-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="<?= base_url()?>assets/js/jquery.maskMoney.js" type="text/javascript"></script>
	<script src="<?= base_url()?>assets/js/script.js"></script><!--Importação do JS do menu...-->
	<style type="text/css">
		input[type=number]::-webkit-inner-spin-button { 
		    -webkit-appearance: none;  
		}
		input[type=number] { 
		   -moz-appearance: textfield;
		   appearance: textfield;

		}
	</style>
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
						<img src="<?= base_url()?>assets/img/logo2.png" width=160 class="logo_grande_cadastro px-2 py-2 mb-4 rounded-circle" alt="Lôgo do sistema Farol aceso"><!--Nossa Logo-->
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form method="post" action="cadastro/adicionar">
						<input type="text" name="email" class="form-control input_user position-absolute" value="" placeholder="" style="opacity: 0">
						<input type="password" name="senha" class="form-control input_user position-absolute" value="" placeholder="" style="opacity: 0">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-address-card"></i></i></span>
							</div>
							<input type="text" name="nome" class="form-control input_user text-capitalize" value="<?php if(isset($_SESSION['dadoserro'])){echo $_SESSION['dadoserro']['nome'];}?>" placeholder="Nome completo" spellcheck="true" required autofocus>
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="usuario" class="form-control input_pass text-capitalize" value="" placeholder="Nome de usuário" style="display: none">
							<!-- Essa e a gambiarra pra tirar autocomplete -->
							<input type="text" name="usuario" class="form-control input_pass text-capitalize" value="<?php if(isset($_SESSION['dadoserro']['usuario'])){echo $_SESSION['dadoserro']['usuario'];}?>" placeholder="Nome de usuário" required>
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-envelope"></i></span>
							</div>
							<input type="email" name="email" class="form-control input_user" value="<?php if(isset($_SESSION['dadoserro'])){echo $_SESSION['dadoserro']['email'];}?>" placeholder="Email" required>
						</div>	
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="senha" class="form-control input_pass" value="" placeholder="Senha (Min. 8 dígitos)" required>
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="confirmar_senha" class="form-control input_pass" value="" placeholder="Confirmar senha" required>
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-map-marker-alt" style="padding: 0 2px"></i></span>
							</div>
							<!-- <input type="text" name="tarifa_kwh" id="tarifa" class="form-control input_pass maskMoney" value="<?php if(isset($_SESSION['dadoserro'])){echo $_SESSION['dadoserro']['tarifa_kwh'];}?>" placeholder="Preço por kWh"  min="0.10" max="3.00" step="0.01"> -->
							<select name="estado" class="form-control input_pass" id="estadonome" required>
								<option value="AC">Acre</option>
								<option value="AL">Alagoas</option>
								<option value="AP">Amapá</option>
								<option value="AM">Amazonas</option>
								<option value="BA">Bahia</option>
								<option value="CE">Ceará</option>
								<option value="DF">Distrito Federal</option>
								<option value="ES">Espírito Santo</option>
								<option value="GO">Goiás</option>
								<option value="MA">Maranhão</option>
								<option value="MT">Mato Grosso</option>
								<option value="MS">Mato Grosso do Sul</option>
								<option value="MG">Minas Gerais</option>
								<option value="PA">Pará</option>
								<option value="PB">Paraíba</option>
								<option value="PR">Paraná</option>
								<option value="PE">Pernambuco</option>
								<option value="PI">Piauí</option>
								<option value="RJ">Rio de Janeiro</option>
								<option value="RN">Rio Grande do Norte</option>
								<option value="RS">Rio Grande do Sul</option>
								<option value="RO">Rondônia</option>
								<option value="RR">Roraima</option>
								<option value="SC">Santa Catarina</option>
								<option value="SP">São Paulo</option>
								<option value="SE">Sergipe</option>
								<option value="TO">Tocantins</option>
							</select>
							<input type="hidden" name="estadonome" value="">
							<?php if(isset($_SESSION['dadoserro']['estado'])){
								$nomeestado = $_SESSION['dadoserro']['estado'];
								if ($_SESSION['dadoserro']['fornecedor']) {
									$fornecedor = $_SESSION['dadoserro']['fornecedor'];
								}
							}else{ $nomeestado = "AC"; $fornecedor = '';}
							?>
							<script>
								$(document).ready(function (){
								var sigla = "<?php echo $nomeestado?>"
									if (sigla=="") {
										$("#estadonome option:contains(Acre)").attr('selected', true);
									}else{
										$("#estadonome").val(sigla).attr('selected', true);
									}
								    //console.log(str);
								    $("input[name=estadonome]").val(sigla)
								    var valorName = $("input[name=estado]").val()
									console.log(valorName);
									var estado = '<?php echo $nomeestado?>'
									$.ajax({
							            url: "<?php echo base_url(); ?>Cadastro/carregarfornecedores",
							            type: "POST",
							            data: {estado: estado},
							            success: function(result){
							            console.log(JSON.parse(result));
							            $('#distribuidor').html(JSON.parse(result));
							            var fornecedor = '<?php echo $fornecedor?>'
									if (fornecedor=="") {
									$("#distribuidor option:contains(null)").attr('selected', true);}else{
									$("#distribuidor option:contains('"+fornecedor+"')").attr('selected', true);}
								        },
								        error: function(){
								            console.log('Error');
								        }
							        });
								});

								$("#estadonome").change(function () {
									var str = $("select[name=estado]").val()
								    //console.log(str);
								    $("input[name=estadonome]").val(str)
								    var valorName = $("input[name=estadonome]").val()
									console.log(valorName);
									var estado = valorName
									$.ajax({
							            url: "<?php echo base_url(); ?>Cadastro/carregarfornecedores",
							            type: "POST",
							            data: {estado: estado},
							            success: function(result){
							            console.log(JSON.parse(result));
							            $('#distribuidor').html(JSON.parse(result));
								        },
								        error: function(){
								            console.log('Error');
								        }
							        });
								}).change();
							</script>
						</div>	
						<!-- <span class="text-secondary">Opcional</span> -->
						<div class="input-group mb-1">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-bolt" style="padding: 0 3px"></i></span>
							</div>
							<!-- <input type="text" name="tarifa_kwh" id="tarifa" class="form-control input_pass maskMoney" value="<?php if(isset($_SESSION['dadoserro'])){echo $_SESSION['dadoserro']['tarifa_kwh'];}?>" placeholder="Preço por kWh"  min="0.10" max="3.00" step="0.01"> -->
							<select name="fornecedor" class="form-control input_pass" id="distribuidor" required>
								<option value="Fornecedor">Fornecedor</option>
							</select>
						</div>		
						<a href="login" class="float-right" data-toggle="modal" data-target="#saibamais">Entenda melhor<i class="far fa-question-circle ml-2 text-dark"></i></a>

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
			                  	<p class="text-justify">&emsp;O <span class="font-weight-bold">preço</span> ou <span class="font-weight-bold">tarifa por kWh</span> é o valor cobrado em reais a cada kWh (Quilowatt-hora) de energia consumida. Este valor está diretamente relacionado ao preço da sua conta ao final do mês. Essa taxa pode variar de cidade para cidade, ou até mesmo de bairro para bairro. Então, se você puder informar a tarifa de energia você terá uma maior precisão do controle dos seus gastos mensais. Esse valor encontra-se impresso na coluna 'preço (R$)', abaixo do título 'Descrição da nota fiscal' na sua conta. Caso não esteja com sua conta ou não tenha encontrado não se preocupe, nós utilizaremos uma média.</p>
			                  	<div class="row">
			                  		<img src="<?= base_url()?>assets/fotos/user_man.png" class="my-2 mx-auto" width='200'>
			                  	</div>
			                  </div>
			                  <div class="modal-footer">
			                    <button type="button" class="btn btn-warning text-dark" data-dismiss="modal">Ok</button>
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
						Já tem cadastro? <a href="login" class="ml-2">Faça login</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		// $("#tarifa").maskMoney({
		//   thousands: '.', 
		//   decimal: '.' , 
		//   precision: 2, 
		//   affixesStay : false, 
		//   bringCaretAtEndOnFocus: true 
		// }); 
	</script>
	<!--Abaixo seguem os scripts para o funcionamento do JS do BS...-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
	<!--Fim dos scripts do BS-->
</body>
</html>