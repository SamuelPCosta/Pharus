			<style type="text/css">
				.enviado{
					margin-right: 100px;
					//background-color: #0099dd;
					min-height: 40px;
					min-width: 100px;
					padding-left: 10%;
					text-align: left;
				}
				.remetente{
					//background-color: #ff9955;
					min-height: 40px;
				}
				.remetente .bg-dark{
					background-color: #22242a66 !important;
				}
				#suporte button{
					background-color: #f7da8055;
					border: 1px solid #464b5133;
				}
				#suporte button i{
					color: #464b51;
				}
				#suporte button.text-white{
					background-color: #464b51;
					border: none;
				}
				#suporte button.text-white i{
					color: #fff;
				}
				.rounded-pill{
					border-radius: 21px !important
				}
				.enviado .rounded-pill{
					background-color: #f7da8055 !important;
				}
				.enviado .rounded-pill.bg-dark{
					background-color: #464b51 !important;
				}
				.remetente .rounded-pill{
					width: 350px;
				}
				.inputmensagem{
 					border: 1px solid #ddd!important
				}
				.inputmensagem.bg-dark{
 					border: 1px solid #464b51!important
				}
				.faq{
					cursor: pointer;
				}
				.repsostasfaq.bg-dark{
					background-color: #464b51 !important;
				}
			</style>
			<div class="container first-container usuario" style="display: flex; flex-direction: column; justify-content: center; min-height: calc(100vh - 78px);">
				<h2 class="mt-4 mb-1 card text-lg-left text-center card-theme px-5 py-3 theme" style="width: 100%!important">Entre em contato</h2>
				<div class="card py-5 px-5 my-4 shadow card-theme area-mensagem">
					<div class="row align-items-center">
						<div class="col-xl col-md-12 mx-auto px-0">
							<form id="suporte">
								<div style="">

									<div align="left" class="remetente mb-2"> 
										<div class="rounded-pill px-4 py-2 shadow-sm card-theme card theme" style="width: fit-content"><span style="text-transform: capitalize;">Olá, <?php echo $this->session->userdata('usuario'); ?>!</span></div>
									</div>
									<div align="left" class="remetente mb-2"> 
										<div class="rounded-pill px-4 py-2 shadow-sm card-theme card theme" style="width: fit-content">Como podemos te ajudar hoje?</div>
									</div>
									<div align="right" class="enviado mb-2 w-100"> 
										<div class="rounded-pill px-4 py-2 shadow-sm card-theme card theme" style="width: fit-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</div>
									</div>

									<input type="" name="" class="rounded-pill card-theme theme shadow-sm border-0 pl-4 py-2 inputmensagem" placeholder="Digite aqui sua mensagem..." autofocus spellcheck="true" style="width: calc(100% - 55px); border-left: 4px solid #ffc107!important;">
									<button class="rounded-circle theme shadow-sm" style="width: 45px; height: 45px"><i class="fas fa-paper-plane"></i></button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<h2 class="mt-4 mb-1 card text-lg-left text-center card-theme px-5 py-3 theme" style="width: 100%!important">Perguntas Frequentes</h2>
				<div onclick="expandirResp(1)" class="faq card py-4 px-5 mt-4 shadow card-theme">
					<span class="theme">Pergunta tal?</span>
				</div>
				<div class="card py-4 px-5 shadow card-theme repsostasfaq text-justify resposta1 bg-light inativo">
					<span class="theme">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</span>
				</div>
				<div onclick="expandirResp(2)" class="faq card py-4 px-5 mt-2 shadow card-theme">
					<span class="theme">Pergunta tal2?</span>
				</div>
				<div class="card py-4 px-5 shadow card-theme repsostasfaq text-justify resposta2 bg-light inativo">
					<span class="theme">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
				</div>
				<div onclick="expandirResp(3)" class="faq card py-4 px-5 mt-2 shadow card-theme">
					<span class="theme">Pergunta tal3?</span>
				</div>
				<div class="card py-4 px-5 shadow card-theme repsostasfaq text-justify resposta3 bg-light inativo">
					<span class="theme">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
				</div>
				<div onclick="expandirResp(4)" class="faq card py-4 px-5 mt-2 shadow card-theme">
					<span class="theme">Pergunta tal4?</span>
				</div>
				<div class="card py-4 px-5 shadow card-theme repsostasfaq text-justify resposta4 bg-light inativo">
					<span class="theme">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
				</div>
				<div onclick="expandirResp(5)" class="faq card py-4 px-5 mt-2 shadow card-theme">
					<span class="theme">Pergunta tal5?</span>
				</div>
				<div class="card py-4 px-5 shadow card-theme repsostasfaq text-justify resposta5 bg-light inativo">
					<span class="theme">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
				</div>
				<br><br>
			</div>
		<script>
			function expandirResp(pergunta) {
				var pergunta = pergunta;
				if (!$(".resposta"+pergunta).hasClass('inativo')) {
					$(".resposta"+pergunta).addClass('inativo');
					return
				}
				$(".repsostasfaq").addClass('inativo');
				$(".resposta"+pergunta).removeClass('inativo');
				$(".resposta"+pergunta).addClass('expandir');
			}

			$(document).mouseup(function(e){
			    var area = $(".area-mensagem");
			    area.click(function(){
					$("input").focus();
				});  
			});
		</script>