			<div class="container first-container">
				<div class="card py-5 px-5 my-4 shadow card-theme">
					<div class="row align-items-center">
						<div class="col-xl col-md-12 mx-auto px-0">
							<div class="mx-auto col-12 h-75 my-3 rounded-circle overflow-hidden content px-0">
								<!-- <i class="fas fa-upload align-middle d-table-cell mx-auto"></i> -->
								<img src="<?=base_url()?>assets/fotos/user_man.png"  id="photo_user" width=260>
							</div>
							<h2 class="my-3 text-center theme"><span class="text-capitalize"><?php echo $this->session->userdata('usuario'); ?></span></h2>
						</div>
						<div id="vertical-line"></div>
						<div class="col-xl col-md-12 mx-auto">
							<div class="container h-100 usuario">
								<div class="d-flex justify-content-center h-100 mb-2 py-5">
									<div class="">
										<div class="d-flex justify-content-center">
											<div class="brand_logo_container">
												<h1 class="title_log theme">Editar Senha</h1><!--Nossa Logo-->
											</div>
										</div>
										<div class="d-flex justify-content-center form_container theme">
											<form method="post" action="Login/atualizar_senha"><!--Mandar para a página de checagem-->
												<!--Envia para o controller Login.php na função autenticar-->
												<div class="input-group mb-2">
													<input type="password" name="senha_atual" value="" class="form-control dados_user border-0" placeholder="Digite a senha atual">
												</div>
												<div class="input-group mb-2">
													<input type="password" name="nova_senha" value="" class="form-control dados_user border-0" placeholder="Nova Senha">
												</div>
												<div class="input-group mb-2">
													<input type="password" name="confirmar_senha" value="" class="form-control dados_user border-0" placeholder="Confirmar Senha">
												</div>
											</div>
											<div class="d-flex justify-content-center mt-3 login_container">
												<button type="submit" name="editar" class="btn btn-warning">Editar senha</button>
											</div>
										</form>
										<div class="mt-4">
											<div class="d-flex justify-content-center links theme">
												Atualize a sua senha!
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--conteudo-->
		</div>
	</div>
</div>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js'></script><!--Importação do Ajax...-->
<script  src="<?= base_url()?>assets/js/script.js"></script><!--Importação do JS do menu...-->
<script src='http://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js'></script><!--Importação do gráfico-->

<!--Abaixo seguem os scripts para o funcionamento do JS do BS...-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
<!--Fim dos scripts do BS-->
<script>
	var atual ="Editar senha";
</script>
</body>
</html>