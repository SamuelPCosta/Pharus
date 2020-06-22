			<div class="container first-container usuario">
				<div class="card py-5 px-5 my-4 shadow card-theme">
					<div class="row align-items-center">
						<div class="col-xl col-md-12 mx-auto px-0">
							<div class="mx-auto col-12 h-75 my-3 rounded-circle overflow-hidden content px-0" id="div_photo_user">
								<a class="mx-auto" href="#" role="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<img src="<?= base_url()?>assets/fotos/user_man.png" class="photo_user" width=260 alt="espaço para sua foto">
									<div clas s="btn-group">
										<i class="fas fa-upload ml-1 text-white"></i>
									</div>
								</a>
								<div class="dropdown-menu dropdown-menu-foto mt-2" aria-labelledby="dropdownMenuLink">
									<form action="Raiz/salvarimg" method="post" enctype="multipart/form-data">
										<span class="position-relative overflow-hidden text-center"><p style="font-weight: normal;">Atualize sua foto</p></span>
										<input type="file" name="foto" id="upload" class="position-absolute">
										<!-- <div><input type="submit" onclick="salvarimg()" class="btn" value="Salvar Foto"></div> -->
										<a class="dropdown-item" href="" id="removerimg">Remover foto Atual</a>
									
								</div>
								<!-- <input type="submit" name="Salvar">	 -->
							</div>
							<h4 class="my-3 text-center theme"><span class="text-capitalize" style="font-size: 2rem; font-weight:lighter;"><?php echo $this->session->userdata('usuario'); ?></span></h4>
							<div class="d-flex justify-content-center mt-0 login_container mb-4" style="transform: translateY(-50px);">
								<button type="submit" onclick="salvarimg()" id="btndesalvar" class="btn btn-warning position-absolute mx-auto text-center inativo">Salvar foto</button>
							</div>
							</form>
						</div>
						<div class="vertical-line"></div>
						<div class="col-xl col-md-12 mx-auto px-0">
							<div class="container h-100 usuario">
								<div class="mb-2 rounded-lg px-3 pt-2 pb-5">
									<div class="">
										<div class="d-flex justify-content-center">
											<div class="brand_logo_container">
												<h1 class="title_log theme">Dados do usuário</h1><!--Nossa Logo-->
											</div>
										</div>
										<div class="d-flex justify-content-center form_container theme">
											<form method="post" action="cadastro/editarDados">
												<span>Nome Completo:</span>
												<div class="input-group mb-2">
													<input type="text" name="nome" value="<?php echo $nome ?>" class="form-control dados_user border-0 text-capitalize" placeholder="">
												</div>
												<span>Usuário:</span>
												<div class="input-group mb-2">
													<input type="text" name="usuario" value="<?php echo $this->session->userdata('usuario'); ?>" class="form-control dados_user border-0 text-capitalize" placeholder="">
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
													<input type="text" name="email" value="<?php echo $email ?>" class="form-control dados_user border-0" placeholder="">
												</div>
												<span>Estado/Fornecedor:</span><br>
												<div class="input-group mb-2">
													<select name="estado" id="estado" class="input-group mb-2 pr-0 form-control input_pass dados_user" style="width:10px!important; display: inline-block;">
														<option value="AC">AC</option>
														<option value="AL">AL</option>
														<option value="AP">AP</option>
														<option value="AM">AM</option>
														<option value="BA">BA</option>
														<option value="CE">CE</option>
														<option value="DF">DF</option>
														<option value="ES">ES</option>
														<option value="GO">GO</option>
														<option value="MA">MA</option>
														<option value="MT">MT</option>
														<option value="MS">MS</option>
														<option value="MG">MG</option>
														<option value="PA">PA</option>
														<option value="PB">PB</option>
														<option value="PR">PR</option>
														<option value="PE">PE</option>
														<option value="PI">PI</option>
														<option value="RJ">RJ</option>
														<option value="RN">RN</option>
														<option value="RS">RS</option>
														<option value="RO">RO</option>
														<option value="RR">RR</option>
														<option value="SC">SC</option>
														<option value="SP">SP</option>
														<option value="SE">SE</option>
														<option value="TO">TO</option>
													</select>
													<input type="hidden" name="estado" value="estado">
													<script type="text/javascript">
														$(document).ready(function (){
														var nomedoestado = "<?php echo $nomeestado?>"
															$("input[name=estado]").val(nomedoestado)
															if (nomedoestado=="") {
																$("#estado option:contains(null)").attr('selected', true);
															}else{
																$("#estado option:contains('"+nomedoestado+"')").attr('selected', true);
															}
															var str = "";
														    $("#estado option:selected").each(function() {
														      str += $( this ).text();
														    });
														    //console.log(str);
														    $("input[name=estado]").val(str)
														    var valorName = $("input[name=estado]").val()
															console.log(valorName);
															var estado = '<?php echo $nomeestado?>'
															$.ajax({
													            url: "<?php echo base_url(); ?>Cadastro/carregarfornecedores",
													            type: "POST",
													            data: {estado: estado},
													            success: function(result){
													            console.log(JSON.parse(result));
													            $('#fornecedor').html(JSON.parse(result));
													            var fornecedor = "<?php echo $fornecedor?>"
															if (fornecedor=="") {
															$("#fornecedor option:contains(null)").attr('selected', true);}else{
															$("#fornecedor option:contains('"+fornecedor+"')").attr('selected', true);}
														        },
														        error: function(){
														            console.log('Error');
														        }
													        });
														});

														$("#estado").change(function () {
															var str = "";
														    $("#estado option:selected").each(function() {
														      str += $( this ).text();
														    });
														    //console.log(str);
														    $("input[name=estado]").val(str)
														    var valorName = $("input[name=estado]").val()
															console.log(valorName);
															var estado = valorName
															$.ajax({
													            url: "<?php echo base_url(); ?>Cadastro/carregarfornecedores",
													            type: "POST",
													            data: {estado: estado},
													            success: function(result){
													            console.log(JSON.parse(result));
													            $('#fornecedor').html(JSON.parse(result));
														        },
														        error: function(){
														            console.log('Error');
														        }
													        });
														}).change();
													</script>
													<select name="fornecedor" id="fornecedor" class="input-group mb-2 ml-3 form-control input_pass dados_user" style="width: 140px!important; display: inline-block;"><option></option>
													</select>
													<script>
														// $(document).ready(function (){
														// var fornecedor = "<?php echo $fornecedor?>"
														// setTimeout(function(){if (fornecedor=="") {
														// 	$("#fornecedor option:contains(null)").attr('selected', true);}else{
														// 	$("#fornecedor option:contains('Pesadao')").attr('selected', true);}}, 50);
														// });
													</script>
												</div>
												<a href="editar-senha" class="sidebar-li-a text-dark theme" id="editar_senha"><i class="fas fa-edit"></i> Editar senha</a>
												<a href="login" class="ml-1 float-right" data-toggle="modal" data-target="#saibamais"><i class="far fa-question-circle mr-2 theme" style="position: relative; top: -78px; bottom: 0px; z-index: 333"></i></a>		
										</div>
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
												<div class="d-flex justify-content-center mt-0 login_container mb-4">
													<button type="submit" name="editar" id="Salvar_dados" class="btn login_btn btn-warning position-absolute my-4 mb-5">Editar dados</button>
												</div>
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
			$("#tarifa").maskMoney({
			  thousands: '.', 
			  decimal: '.' , 
			  precision: 2, 
			  affixesStay : false, 
			  bringCaretAtEndOnFocus: true 
			}); 
		</script>
		<script>
			localStorage.setItem('Usuario', "<?php echo $contaContrato; ?>");
			//var consumo = localStorage.getItem('consumo');
			var atual ="Usuario";
		</script>