			<div class="container first-container atualize">
				<div class="card py-5 px-5 mt-4 mb-0 shadow card-theme">
					<div class="row align-items-center">
						<div class="col-xl col-md-12 mx-auto px-0">
							<h2 class="theme px-5 text-center text-md-left">Apoie o desenvolvimento</h2>
							<p class="my-3 text-justify theme px-5">Ajude o Pharus a se manter no ar! Para deixar um sistema no ar temos que pagar um domínio e uma hospedagem. Entre em contato com <br><br>ribeiro.santos@escolar.ifrn.edu.br,<br> keliane.martins@escolar.ifrn.edu.br ou <br>	 samuel.soares@escolar.ifrn.edu.br e <br> saiba como ajudar.</p>
						</div>
						<div class="vertical-line"></div>
						<div class="col-xl col-md-12 mx-auto px-0">
							<div class="container h-100">
								<div class="mb-2 rounded-lg px-3 py-5">
									<div class="">
										<div class="d-flex justify-content-center">
											<div class="brand_logo_container theme" style="min-width: 230px">
												<h1 class="title_log theme">Doe via PIX</h1><!--Nossa Logo-->
												<form method="post" action="" class="inativo" id="chaves">
													<span>Chave 1:</span>
													<div class="input-group mb-2">
														<input type="text" value="ssoares981@gmail.com" class="form-control dados_user border-0" placeholder="" disabled style="border: none!important;">
													</div>
													<span>Chave 2:</span>
													<div class="input-group mb-2">
														<input type="text" value="ssoares981@gmail.com" class="form-control dados_user border-0" placeholder="" disabled style="border: none!important;">
													</div>
													<span>Chave 3:</span>
													<div class="input-group mb-2">
														<input type="text" value="ssoares981@gmail.com" class="form-control dados_user border-0" placeholder="" disabled style="border: none!important;">
													</div>
												</form>
												<button class="btn btn-warning" id="verchaves" onclick="$('#chaves').toggleClass('inativo'); $('#esconderchaves').toggleClass('inativo'); $('#verchaves').toggleClass('inativo');" style="width: 100%!important">Visualizar Chaves</button><br>
												<button class="btn btn-warning inativo" id="esconderchaves" onclick="$('#chaves').toggleClass('inativo'); $('#esconderchaves').toggleClass('inativo'); $('#verchaves').toggleClass('inativo');" style="width: 100%!important">Esconder Chaves</button>
											</div>
										</div>
										<!-- <div class="d-flex justify-content-center form_container theme">
											<form method="post" action="">
												<span>Nome Completo:</span>
												<div class="input-group mb-2">
													<input type="text" name="nome" class="form-control dados_user border-0 text-capitalize" placeholder="">
												</div>
												<span>Email:</span>
												<div class="input-group mb-2">
													<input type="text" name="email" class="form-control dados_user border-0" placeholder="">
												</div>
												<span>Contribuição:</span>
												<div class="input-group mb-2">
													<input type="text" min="5" max="100" step="5" name="tarifa_kwh" id="tarifa" class="form-control input_pass maskMoney dados_user border-0">
												</div>
										</div> -->
												<!-- <div class="d-flex justify-content-center mt-3 login_container my-3">
													<button type="" name="editar" id="atualizar" class="btn btn-warning position-absolute my-4 mb-5" disabled>Fazer contribuição</button>
												</form>
											</div> -->
									</div>
								</div>
							</div>
							<!--conteudo-->
						</div>
					</div>
				</div>

				<!--Segundo container-->

				<div class="card py-5 px-5 my-4 mt-0 shadow card-theme">
					<div class="row align-items-center">
						<div class="col-xl col-md-12 mx-auto px-0">	
							<h2 class="my-3 px-5 theme">Como funciona?</h2>
							<ul class="col-xl col-md-12 mx-auto px-5 theme" style="list-style-type: none">
								<li>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
								<li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </li>
								<li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </li>
								<li>Excepteur sint occaecat cupidatat non proident.</li>
							</ul>
						</div>
						<div class="vertical-line"></div>
						<div class="col-xl col-md-12 mx-auto px-0">
							<h2 class="my-3 px-5 theme">Quais as vantagens?</h2>
							<ul class="col-xl col-md-12 mx-auto px-5 theme" style="list-style-type: none">
								<li>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
								<li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </li>
								<li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </li>
								<li>Excepteur sint occaecat cupidatat non proident.</li>
							</ul>
							<!--conteudo-->
						</div>
					</div>
				</div>
			</div>
		<div class="modal fade show d-block" id="tipapoie" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered tutorialdvi1" role="document">
		  	<div class="rounded-circle card-theme theme tutorialdvi2"><div class="tutorialicone"><i class="fas fa-award mx-auto"></i></div></div>
		    <div class="modal-content card-theme theme tutorialcontent">
		      <div class="modal-header tutorialheader"><h3 class="modal-title text-uppercase tutorialtitle" id="TituloModal">Conquistas</h3></div>
		      <div class="modal-body text-center">
		      	<p class="tutorialp">Sinta-se à vontade para nos apoiar com algum valor caso tenha gostado do sistema e queira ajuda-lo a se manter no ar.</p>
		      </div>
		      <div class="modal-footer tutorialfooter"><button class="btn btn-warning px-4 py-1" id="hidetipapoie">Entendi</button></div>
		    </div>
		  </div>
		</div>
		<div class="modal-backdrop fade show" id="bg-dark"></div>
		<script>
			const tipapoie = localStorage.getItem('tipapoie')
			if (tipapoie) {
			  $('#tipapoie').removeClass('show');
			  $('#tipapoie').removeClass('d-block'); 
			  $('#bg-dark').removeClass('show'); 
			  $('#bg-dark').addClass('d-none');
			  $('body').removeClass('modal-open');
			}else{$('body').addClass('modal-open');}
			$("#hidetipapoie").click(function(e) {
			  e.preventDefault();
			    $('#tipapoie').removeClass('show');
			  	$('#tipapoie').removeClass('d-block'); 
			 	$('#bg-dark').removeClass('show'); 
			  	$('#bg-dark').addClass('d-none');
			  	$('body').removeClass('modal-open');
			    localStorage.setItem('tipapoie', true);
			});
		</script>
		<script>
			var atual ="Apoie";
		</script>