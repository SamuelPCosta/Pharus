			<div class="container first-container usuario" style="display: flex; flex-direction: column; justify-content: center; min-height: calc(100vh - 78px);">
				<div class="card py-5 px-5 my-4 shadow card-theme">
					<div class="row align-items-center">
						<div class="col-xl col-md-12 mx-auto px-0">
							<div class="container h-100 usuario">
								<div class="mb-2 rounded-lg px-3 py-5">
									<div class="">
										<div class="d-flex justify-content-center">
											<div class="brand_logo_container">
												<h1 class="title_log theme">Entre em contato</h1><!--Nossa Logo-->
											</div>
										</div>
										<div class="d-flex justify-content-center form_container theme">
											<form method="post" action="">
												<span>Nome Completo:</span>
												<div class="input-group mb-2">
													<input type="text" name="nome" class="form-control dados_user border-0 text-capitalize" placeholder="">
												</div>
												<span>Usuário:</span>
												<div class="input-group mb-2">
													<input type="text" name="usuario" class="form-control dados_user border-0 text-capitalize" placeholder="">
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
													<input type="text" name="email" class="form-control dados_user border-0" placeholder="">
												</div>
												<span>Preço por kWh:</span>
												<div class="input-group mb-2">
													<input type="text" name="tarifa_kwh" id="tarifa" class="form-control dados_user border-0">
												</div>	
										</div>
												<div class="d-flex justify-content-center mt-3 login_container my-3">
													<button type="" name="editar" id="" class="btn btn-warning position-absolute my-4 mb-5">Enviar</button>
												</form>
											</div>
									</div>
								</div>
							</div>
							<!--conteudo-->
						</div>
					</div>
				</div>
			</div>
		<script>
			var atual ="Usuario";
		</script>