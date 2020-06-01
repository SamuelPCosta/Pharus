			<style type="text/css">
				.enviado{
					margin-right: 100px;
					//background-color: #0099dd;
					min-height: 40px;
					padding-left: 10%;
					text-align: right;
				}
				.remetente{
					//background-color: #ff9955;
					min-height: 40px;
					padding-right: 10%
				}
				#suporte button{
					background-color: #ffc107;
					border: none;
				}
				.enviado .rounded-pill{
					background-color: #f7da8055 !important
				}
				.enviado .rounded-pill.bg-dark{
					background-color: #464b51 !important
				}
				.remetente .rounded-pill{
					width: 350px;
				}
				
			</style>
			<div class="container first-container usuario" style="display: flex; flex-direction: column; justify-content: center; min-height: calc(100vh - 78px);">
				<h2 class="mt-4 mb-1 card text-lg-left text-center card-theme px-5 py-3 theme">Entre em contato</h2>
				<div class="card py-5 px-5 my-4 shadow card-theme">
					<div class="row align-items-center">
						<div class="col-xl col-md-12 mx-auto px-0">
							<form id="suporte">
								<div style="">
									<div class="remetente mb-2"><div class="rounded-pill px-4 py-2 shadow-sm card-theme card theme"><span style="text-transform: capitalize;">Olá, <?php echo $this->session->userdata('usuario'); ?>!</span></div></div>
									<div class="remetente mb-2"><div class="rounded-pill px-4 py-2 shadow-sm card-theme card theme">Como podemos te ajudar hoje?</div></div>
									<div class="enviado mb-2 w-100"><div class="rounded-pill px-4 py-2 shadow-sm card-theme card theme">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</div></div>
									<input type="" name="" class="rounded card-theme theme shadow-sm border-0 pl-2 py-2" placeholder="Digite aqui sua mensagem..." autofocus style="width: 94%; border-left: 4px solid #ffc107!important">
									<button class="rounded-circle" style="width: 45px; height: 45px"><i class="fas fa-paper-plane"></i></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		<script>
			var atual ="Usuario";
		</script>