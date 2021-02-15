			<div class="container first-container">
				<div class="card py-5 px-5 my-4 shadow card-theme">
					<div class="row align-items-center">
						<div class="col-xl col-md-12 mx-auto px-0">
							<div class="mx-auto col-12 h-75 my-3 rounded-circle overflow-hidden content px-0">
								<!-- <i class="fas fa-upload align-middle d-table-cell mx-auto"></i> -->
								<img src="<?=base_url()?>assets/fotos/user_man.png" class="photo_user" width=260>
							</div>
							<h4 class="my-3 text-center theme"><span class="text-capitalize" style="font-size: 2rem; font-weight:lighter;"><?php echo $this->session->userdata('usuario'); ?></span></h4>
						</div>
						<div class="vertical-line"></div>
						<div class="col-xl col-md-12 mx-auto px-0">
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
													<input type="password" name="senha_atual" value="" id="senha" class="form-control dados_user border-0" placeholder="Digite a senha atual">
													<span style="position: absolute; right: 10px; top: 6px; color: #343a40bb; z-index: 10;"><i class="fas fa-eye theme" id="olho"></i></span>
												</div>
												<div class="input-group mb-2">
													<input type="password" name="nova_senha" value="" id="novasenha" class="form-control dados_user border-0" placeholder="Nova Senha">
													<span style="position: absolute; right: 10px; top: 6px; color: #343a40bb; z-index: 10;"><i class="fas fa-eye theme" id="olho2"></i></span>
												</div>
												<script type="text/javascript">
													$("#olho").mousedown(function() {
													  $("#senha").attr("type", "text");
													});
													$("#olho").mouseup(function() {
													  $("#senha").attr("type", "password");
													});
													
													$('#olho').bind('touchstart', function(){
						                                $("#senha").attr("type", "text");
						                            }).bind('touchend', function(){
						                                $("#senha").attr("type", "password");
						                            });

													$("#olho2").mousedown(function() {
													  $("#novasenha").attr("type", "text");
													});
													$("#olho2").mouseup(function() {
													  $("#novasenha").attr("type", "password");
													});
													
													$('#olho2').bind('touchstart', function(){
						                                $("#novasenha").attr("type", "text");
						                            }).bind('touchend', function(){
						                                $("#novasenha").attr("type", "password");
						                            });
												</script>
												<!-- <div class="input-group mb-2">
													<input type="password" name="confirmar_senha" value="" class="form-control dados_user border-0" placeholder="Confirmar Senha">
												</div> -->
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
						<!--conteudo-->
					</div>
				</div>
			</div>

<script>
	var atual ="Usuario";
</script>