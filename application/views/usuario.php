			<div class="container first-container usuario">
				<div class="card py-5 px-5 my-4 shadow card-theme">
					<div class="row align-items-center">
						<div class="col-xl col-md-12 mx-auto px-0">
							<div class="mx-auto col-12 h-75 my-3 rounded-circle overflow-hidden content px-0" id="div_photo_user">
								<a class="mx-auto" href="#" role="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<img src="<?= base_url()?>assets/fotos/user_man.png" id="photo_user" width=260>
									<div clas s="btn-group">
										<i class="fas fa-upload ml-1 text-white"></i>
									</div>
								</a>
								<div class="dropdown-menu mt-2" aria-labelledby="dropdownMenuLink">
									<form action="Raiz/salvarimg" method="post" enctype="multipart/form-data">
										<span class="position-relative overflow-hidden text-center"><p style="font-weight: 400">Atualize sua foto</p></span><br>
										<input type="file" name="foto" required="" class="position-absolute">
										<div><input type="submit" onclick="salvarimg()" class="btn" value="Salvar Foto"></div>
										<a class="dropdown-item" href="" id="removerimg">Remover foto Atual</a>
									</form>
								</div>
								<!-- <input type="submit" name="Salvar">	 -->
							</div>
							<h2 class="my-3 text-center theme"><span class="text-capitalize"><?php echo $this->session->userdata('usuario'); ?></span></h2>
						</div>
						<div id="vertical-line"></div>
						<div class="col-xl col-md-12 mx-auto">
							<div class="container h-100 usuario">
								<div class="mb-2 rounded-lg px-3 py-5">
									<div class="">
										<div class="d-flex justify-content-center">
											<div class="brand_logo_container">
												<h1 class="title_log theme">Dados <span class="text-lowercase">do</span> usuário</h1><!--Nossa Logo-->
											</div>
										</div>
										<div class="d-flex justify-content-center form_container theme">
											<form method="post" action="cadastro/editarDados">
												<span>Nome Completo:</span>
												<div class="input-group mb-2">
													<input type="text" name="nome" value="<?php echo $nome ?>" class="form-control dados_user border-0 text-capitalize" placeholder="" disabled>
												</div>
												<span>Usuário:</span>
												<div class="input-group mb-2">
													<input type="text" name="usuario" value="<?php echo $this->session->userdata('usuario'); ?>" class="form-control dados_user border-0 text-capitalize" placeholder="" disabled>
												</div>
												<?php 
												if (isset($_GET['error'])){
													if ($_GET['error']==1) {
														?>
														<div class='alert alert-danger' role='alert'>O nome de usuário<wbr>já existe!</div>
															<?php
														}
													}
													?>
												<span>Email:</span>
												<div class="input-group mb-2">
													<input type="text" name="email" value="<?php echo $email ?>" class="form-control dados_user border-0" placeholder="" disabled>
												</div>
												<span>Conta Contrato:</span>
												<div class="input-group mb-2">
													<input type="text" name="conta_contrato" value="<?php echo $contaContrato ?>" class="form-control dados_user border-0" placeholder="" disabled>
												</div>
												<span>Cep/Bairro:</span>
												<div class="input-group mb-2">
													<input type="text" name="" class="form-control dados_user border-0" value="" placeholder="" disabled>
												</div>
												</div>
												<div class="d-flex justify-content-center mt-3 login_container my-3">
													<button type="submit" name="editar" id="Salvar_dados" class="btn login_btn btn-success position-absolute my-4 mb-5">Salvar alterações</button>
												</div>
												<div class="d-flex justify-content-center mt-3 login_container my-3">
													<button type="" name="editar" id="Atualizar_dados" class="btn btn-warning position-absolute my-4 mb-5">Editar dados</button>
												</form>
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

		<script>
			var atual ="Usuario";
		</script>