<head>
	<style type="text/css">
	input, select{
		width: 72px;
		height: 30px;
		background-color: #eee;
		border: none;
		border-radius: 5px;
		padding-left: 10px;
		margin: 5px 20px 0px 15px;
		outline: 0;
	}
	select{
		width: 72px;
		padding-left: 0px;
		margin-bottom: 10px;
	}
	h2{
		font-family: 'Open Sans', sans-serif !important;
		color: #222;
		margin: 5px 0px 10px 50px;
		display: inline-block;
		font-weight: 100;
		font-size: 2em;
	}
	.personalizados{
		font-family: 'Open Sans', sans-serif !important;
		color: #222 !important;
		margin: 5px 0px 10px 50px !important;
		display: inline-block !important;
		font-weight: 100 !important;
		font-size: 2em !important;
		background: none !important;
		border-left: none !important;
		height: 38px !important;
		box-shadow: none !important;
		border-radius: none !important;
	}
	.theme.text-white .personalizados{
		color: white!important;
	}
	.col-lg-6{
		margin-bottom: 20px
	}
	button{
		margin: auto;
		margin-bottom: 20px;
		max-height: 40px;
	}
	@media(max-width:1200px){
		table{
			margin-left: auto!important;
			margin-right: auto!important;
		}

		.nomep{
			width:330px !important;
		}
	}
	@media(max-width:769px){
		.corrigiraltura{
			/*transform: translateY(25px);*/
		}
	}
	@media(max-width:450px){
		h2, input.personalizados{
			font-size: 1.5em!important;
		}
		input.personalizados{
			margin-left: 45px !important;
		}
		.potenciap, .horasp{
			margin-left: 0px !important;
		}
		.potenciap{
			margin-top: -5px !important;
		}
	}
	</style>
</head>
	<div class="container first-container mt-5">
		<!-- <h1 class="mb-5 text-uppercase theme">Simulador de Consumo</h1> -->
		<form method="post" action="Raiz/Consumir">
		<div class="row align-items-center">
			<h2 class="mt-0 mb-1 card text-lg-left text-center card-theme px-5 py-3 theme mx-3" >Simulador de Consumo</h2>
				<?php $cozinha = array('Exaustor','Freezer','Fogão Elétrico','Geladeira','Microondas','Lava-Louça','Liquidificador');
				$quartosala = array('Ar-Condicionado','Computador','Estabilizador','Impressora','Televisão','Ventilador','Vídeogame');
				$outros = array('Chuveiro Elétrico','Ferro Elétrico','Lâmpada Fluor.','Lâmpada Incan.','Lavadora','Secador');
				if (isset($_SESSION['personalizados'])) {
					$personalizados = $this->session->userdata('personalizados');
					//var_dump($personalizados);
				}else{
					$personalizados = array('Aparelho 1', 'Aparelho 2', 'Aparelho 3', 'Aparelho 4', 'Aparelho 5', 'Aparelho 6');
				}
				$optionsC = "<option value='170'>170W (Exaustor)</option>
							<option value='130'>130W (Freezer)</option>
							<option value='9120'>9120W (Fogão Elétrico)</option>
							<option value='110'>110W (Geladeira)</option>
							<option value='120'>1200W (Microondas)</option>
							<option value='1500'>1500W (Lavadora de Louças)</option>
							<option value='300'>300W (Liquidificador)</option>";
				$optionsQS = "<option value='1200'>1200W (Ar-Condicionado)</option>
							<option value='200'>200W (Computador)</option>
							<option value='150'>150W (Estabilizador)</option>
							<option value='20'>20W (Impressora)</option>
							<option value='80'>80W (TV)</option>
							<option value='90'>90W (Ventilador)</option>
							<option value='180'>180W (PS4)</option>";
				$optionsO = "<option value='4500'>4500W (Chuveiro Elétrico)</option>
							<option value='100'>1000W (Ferro Elétrico)</option>
							<option value='15'>15W (Lâmpada Fluo.)</option>
							<option value='55'>55W (Lâmpada Inc.)</option>
							<option value='500'>500W (Lavadora de Roupas)</option>
							<option value='700'>700W (Secador de Cabelo)</option>";
							
				$qntd = "	<option value='1'>1 (unidade)</option>
							<option value='2'>2 (unidades)</option>
							<option value='3'>3 (unidades)</option>
							<option value='4'>4 (unidades)</option>
							<option value='5'>5 (unidades)</option>
							<option value='10'>10 (unidades)</option>
							<option value='15'>15 (unidades)</option>
							<option value='20'>20 (unidades)</option>";
				?>
			</div>
				<div class="card py-5 px-5 mt-4 mb-0 shadow card-theme">
					<div class="row align-items-center">
						<div class="col-xl col-md-12 mx-auto px-0">	
							<ul class="col-xl col-md-12 mx-auto px-5 theme text-justify">
								<li>Insira os valores correspondentes a quantas horas cada aparelho permanece ligado.</li>
								<li>Estamos considerando uma potência média para cada aparelho.</li>
								<li>---Só não tá salvando ainda os dados, mas tá salvando o nome dos personalizados.---</li>
							</ul>
						</div>
						<div class="vertical-line" style="height: 150px!important"></div>
						<div class="col-xl col-md-12 mx-auto px-0">
							<ul class="col-xl col-md-12 mx-auto px-5 theme text-justify">
								<li>O último bloco é reservado para aparelhos personalizavéis.</li>
								<li>Você pode alterar seus nomes clicando sobre eles.</li>
								<li>Além disso, você pode alterar a potência desses aparelhos.</.li>
							</ul>
							<!--conteudo-->
						</div>
					</div>
				</div>

				<div class="card py-5 px-2 mt-4 mb-0 shadow card-theme" style="min-width: 100%">
					<div class="row align-items-center">
						<div class="col-xl col-md-12 mx-auto px-0">	
							<div id="cozinha">
								<table>					
								<?php
								$i=0;
								foreach ($cozinha as $aparelho) {
									echo "<tr><td style='width:330px;'><h2 class='theme'>".$aparelho.":</h2></td>
										<td><input type='number' min='0' max='24' name='horas[]' placeholder='Horas'>
										<select name='potencia[]' style='display:none!important;' class='g1".$i."'>".$optionsC."</select>
										<select name='qntd[]'>".$qntd."</select></td></tr>";
								?>
								<script>
									var sel = "<?php echo $i;?>";
									$(".g1"+sel).val($(".g1"+sel+" option:eq("+sel+")").val());
								</script>	
								<?php  
								$i++;
								}
								?>
								</table>
							</div>
						</div>
						<div class="vertical-line"></div>
						<div class="col-xl col-md-12 mx-auto px-0">
							<div id="quarto">
								<table>					
								<?php
								$i=0;
								foreach ($quartosala as $aparelho) {
									echo "<tr><td style='width:330px;'><h2 class='theme'>".$aparelho.":</h2></td>
										<td><input type='number' min='0' max='24' name='horas[]' placeholder='Horas'>
										<select name='potencia[]' style='display:none!important;' class='g2".$i."'>".$optionsQS."</select>
										<select name='qntd[]'>".$qntd."</select></td></tr>";
								?>
								<script>
									var sel = "<?php echo $i;?>";
									$(".g2"+sel).val($(".g2"+sel+" option:eq("+sel+")").val());
								</script>	
								<?php  
								$i++;
								}
								?>
								</table>
							</div>
						</div>
					</div>
				</div>

				<div class="card py-5 px-2 my-4 mt-0 shadow card-theme" style="min-width: 100%">
					<div class="row align-items-center">
						<div class="col-xl col-md-12 mx-auto px-0">	
							<div id="sala">
								<table>					
								<?php
								$i=0;
								foreach ($outros as $aparelho) {
									echo "<tr><td style='width:330px;'><h2 class='theme'>".$aparelho.":</h2></td>
										<td><input type='number' min='0' max='24' name='horas[]' placeholder='Horas'>
										<select name='potencia[]' style='display:none!important;' class='g3".$i."'>".$optionsO."</select>
										<select name='qntd[]'>".$qntd."</select></td></tr>";
								?>
								<script>
									var sel = "<?php echo $i;?>";
									$(".g3"+sel).val($(".g3"+sel+" option:eq("+sel+")").val());
								</script>	
								<?php  
								$i++;
								}
								?>
								</table>
							</div>
						</div>
						<div class="vertical-line"></div>
						<div class="col-xl col-md-12 mx-auto px-0">
							<div id="outros">
								<table>					
								<?php
								$i=0;
								foreach ($personalizados as $aparelho) {
									echo "<tr><td class='theme' class='nomep'><input type='text' class='personalizados' name='personalizados[]' placeholder='' value='$aparelho'style='width:200px;border-radius: 0px; text-transform: capitalize;'></td>
										<td><input type='number' min='0' max='24' name='horas[]' class='horasp' placeholder='Horas'>
										<select name='qntd[]' class='mr-0 ml-0 corrigiraltura'>".$qntd."</select>
										<select name='potencia[]' class='potenciap'>".$optionsC.$optionsQS.$optionsO."</select></td></tr>";
								$i++;
								}
								?>
								</table>
							</div>
						</div>
					</div>
				</div>
		</div>
		<br>
		<button type="submit" name="button" class="btn login_btn bg-warning mx-auto d-block w-25 mt-1">Simular consumo</button>
		</form>
		<!-- <form method="post" action="Raiz/zerar">
			<button type="submit" class="btn login_btn bg-danger text-white mx-auto d-block w-25 mt-1">Zerar simulador</button>
		</form> -->
</div>
<script>
var atual ="Simulador";
</script>