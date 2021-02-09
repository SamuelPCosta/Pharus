			<style type="text/css">
				.bg-dark a{
					color: #ffc107
				}
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
				.first-container.contato .card{
				    margin-top: 10px!important;
				}
				@media(max-width:769px) {
					.area-mensagem{
						padding-right: 20px!important;
						padding-left: 20px!important; 
					}
				}
			</style>
			<div class="container first-container usuario contato" style="display: flex; flex-direction: column; justify-content: center; min-height: calc(100vh - 78px);">
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
					<span class="theme">Como posso saber se meu consumo está sendo maior do que o normal?</span>
				</div>
				<div class="card py-4 px-5 shadow card-theme repsostasfaq text-justify resposta1 bg-light inativo">
					<span class="theme">O sistema Pharus conta com a ferramenta ideal de consumo, onde o usuário pode colocar informações relativas a seu consumo de energia e ter como resposta seu consumo ideal.<br>Veja em: <a href="idealdeconsumo">Ideal de consumo</a></span>
				</div>
				<div onclick="expandirResp(2)" class="faq card py-4 px-5 mt-2 shadow card-theme">
					<span class="theme">Como posso saber se ultrapassei minha meta de consumo diário?</span>
				</div>
				<div class="card py-4 px-5 shadow card-theme repsostasfaq text-justify resposta2 bg-light inativo">
					<span class="theme">Quando o usuário ultrapassa sua meta de consumo diário o sistema Pharus o informa a partir de uma notificação em seu histórico e no sininho, além do mais o seu gráfico de consumo ficará vermelho.<br>Veja em: <a href="consumo">Consumo</a></span>
				</div>
				<div onclick="expandirResp(3)" class="faq card py-4 px-5 mt-2 shadow card-theme">
					<span class="theme">Como posso diminuir meu consumo de energia?</span>
				</div>
				<div class="card py-4 px-5 shadow card-theme repsostasfaq text-justify resposta3 bg-light inativo">
					<span class="theme">A partir das dicas oferecidas pelo sistema Pharus o usuário pode encontrar informações sobre como diminuir seu consumo de energia.<br>Veja em: <a href="dicas">Dicas</a></span>
				</div>
				<div onclick="expandirResp(4)" class="faq card py-4 px-5 mt-2 shadow card-theme">
					<span class="theme">Como posso saber o quanto de energia eu venho gastando?</span>
				</div>
				<div class="card py-4 px-5 shadow card-theme repsostasfaq text-justify resposta4 bg-light inativo">
					<span class="theme">Além da opção de ver seu consumo diário na própria “Home” do site, você também pode verificar o quanto você gasta na aba “Consumo”.<br>Veja em: <a href="consumo">Consumo</a></span>
				</div>
				<div onclick="expandirResp(5)" class="faq card py-4 px-5 mt-2 shadow card-theme">
					<span class="theme">Como posso editar meus dados pessoais?</span>
				</div>
				<div class="card py-4 px-5 shadow card-theme repsostasfaq text-justify resposta5 bg-light inativo">
					<span class="theme">Você pode editar seus dados clicando no seu nome ao acessar sua conta no sistema Pharus.<br>Veja em: <a href="usuario">Usuário</a></span>
				</div>
				<div onclick="expandirResp(6)" class="faq card py-4 px-5 mt-2 shadow card-theme">
					<span class="theme">Como posso editar minha senha?</span>
				</div>
				<div class="card py-4 px-5 shadow card-theme repsostasfaq text-justify resposta6 bg-light inativo">
					<span class="theme">A partir da opção “Esqueci minha senha” na tela de login do site, para isso você apenas necessitará informar o email cadastrado em sua conta.<br>Veja em: <a href="editar-senha">Editar senha</a></span>
				</div>
				<div onclick="expandirResp(7)" class="faq card py-4 px-5 mt-2 shadow card-theme">
					<span class="theme">Como saber qual a minha distribuidora de energia?</span>
				</div>
				<div class="card py-4 px-5 shadow card-theme repsostasfaq text-justify resposta7 bg-light inativo">
					<span class="theme">Você pode checar a sua distribuidora em sua conta de energia e vinculá-la à sua conta em dados do usuário.<br>Vincule acessando: <a href="usuario">Usuário</a></span>
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