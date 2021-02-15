			<div class="container first-container atualize">
				<div class="card py-5 px-5 mt-4 mb-0 shadow card-theme">
					<div class="row align-items-center">
						<div class="col-xl col-md-12 mx-auto px-0">
							<h2 class="theme px-5  text-center text-md-left">Apoie o desenvolvimento</h2>
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
									</div>
								</div>
							</div>
							<!--conteudo-->
						</div>
					</div>
				</div>

				<!--Segundo container-->

				<div class="card py-5 px-5 mt-4 mb-3 shadow card-theme">
					<div class="row align-items-center">
						<div class="col-xl col-md-12 mx-auto px-0">	
							<h2 class="my-3 px-5 theme text-center text-md-left">Como funciona?</h2>
							<ul class="col-xl col-md-12 mx-auto px-5 theme" style="list-style-type: none">
								<li class="mb-2">Entre em contato com nossos emails para ajudar;</li>
								<li class="mb-2">Se preferir faça uma doação via PIX;</li>
								<li>Agradecemos qualquer tipo de ajuda.</li>
							</ul>
						</div>
						<div class="vertical-line"></div>
						<div class="col-xl col-md-12 mx-auto px-0">
							<h2 class="my-3 px-5 theme text-center text-md-left">Por que fazer isso?</h2>
							<ul class="col-xl col-md-12 mx-auto px-5 theme" style="list-style-type: none">
								<li class="mb-2">Fazendo isso você doa para ajudar o site a se manter no ar;</li>
								<li class="mb-2">Fazendo com que o sitema alcance mais pessoas;</li>
								<li>Quanto mais pessoas utilizando a ferramenta melhor será para o meio ambiente.</li>
							</ul>
							<!--conteudo-->
						</div>
					</div>
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