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
	}
	@media(max-width:450px){
		h2{
			font-size: 1.5em;
		}
	}
	</style>
</head>
	<div class="container first-container mt-5">
		<!-- <h1 class="mb-5 text-uppercase theme">Simulador de Consumo</h1> -->
		<form method="post" action="Admin/Consumir">
		<div class="row align-items-center">
			<h2 class="mt-0 mb-1 card text-lg-left text-center card-theme px-5 py-3 theme mx-3" >Simulador de Consumo</h2>
				<!-- 
				• Criar array com nomes de aparelhos;
				• Criado laço foreach;
				• echo dentro do foreach com label (pegando do array), e inputs de potência e tempo 
				For (i=1; i++; i>=lenght){
					PotênciaHoras[] => "potencia[i]*horas[i]";
				}
				sum(PotênciaHoras);
				-->
				<?php $cozinha = array('Geladeira','Freezer','Exaustor','Liquidificador','Microondas','Fogão Elétrico','Lava-Louça');
				$quarto = array('Vídeogame','Computador','Impressora','Estabilizador','Ar-Condicionado', 'Aparelho 1', 'Aparelho 2');
				$sala = array('Televisão','Ventilador', 'Aparelho 1', 'Aparelho 2', 'Aparelho 3', 'Aparelho 4');
				$outros = array('Lâmpada Fluor.','Lâmpada Incan.','Lavadora','Secador','Ferro Elétrico','Chuveiro Elétrico');
				$options = "<option value='15'>15W (PS1)</option>
							<option value='180'>180W (Computador)</option>
							<option value='1500'>1500W (Ar-Condicionado)</option>
							<option value='80'>80W (TV)</option>
							<option value='90'>90W (Ventilador)</option>
							<option value='110'>110W (Geladeira)</option>
							<option value='130'>130W (Freezer)</option>
							<option value='170'>170W (Exaustor)</option>
							<option value='300'>300W (Liquidificador)</option>
							<option value='120'>1200W (Microondas)</option>
							<option value='9120'>9120W (Fogão Elétrico)</option>
							<option value='15'>15W (Lâmpada Fluo.)</option>
							<option value='55'>55W (Lâmpada Inc.)</option>
							<option value='500'>500W (Lavadora de Roupas)</option>
							<option value='700'>700W (Secador de Cabelo)</option>
							<option value='100'>1000W (Ferro Elétrico)</option>
							<option value='1500'>1500W (Lavadora de Louças)</option>
							<option value='4500'>4500W (Chuveiro Elétrico)</option>" 
				?>
			</div>
				<div class="card py-5 px-5 mt-4 mb-0 shadow card-theme">
					<div class="row align-items-center">
						<div class="col-xl col-md-12 mx-auto px-0">	
							<ul class="col-xl col-md-12 mx-auto px-5 theme text-justify">
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
								<li>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
								<li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </li>
								<li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </li>
								<li>Excepteur sint occaecat cupidatat non proident.</li>
							</ul>
						</div>
						<div class="vertical-line" style="height: 250px!important"></div>
						<div class="col-xl col-md-12 mx-auto px-0">
							<ul class="col-xl col-md-12 mx-auto px-5 theme text-justify">
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
								<li>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
								<li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </li>
								<li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </li>
								<li>Excepteur sint occaecat cupidatat non proident.</li>
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
								foreach ($cozinha as $aparelho) {
									$i=1;
									echo "<tr><td style='width:330px;'><h2 class='theme'>".$aparelho.":</h2></td>
										<td><input type='number' min='0' max='24' name='horas[]' placeholder='Horas'>
										<select name='potencia[]'>".$options."</select></div></td></tr>";
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
								foreach ($quarto as $aparelho) {
									$i=1;
									echo "<tr><td style='width:330px;'><h2 class='theme'>".$aparelho.":</h2></td>
										<td><input type='number' min='0' max='24' name='horas[]' placeholder='Horas'>
										<select name='potencia[]'>".$options."</select></div></td></tr>";
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
								foreach ($sala as $aparelho) {
									$i=1;
									echo "<tr><td style='width:330px;'><h2 class='theme'>".$aparelho.":</h2></td>
										<td><input type='number' min='0' max='24' name='horas[]' placeholder='Horas'>
										<select name='potencia[]'>".$options."</select></div></td></tr>";
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
								foreach ($outros as $aparelho) {
									$i=1;
									echo "<tr><td style='width:330px;'><h2 class='theme'>".$aparelho.":</h2></td>
										<td><input type='number' min='0' max='24' name='horas[]' placeholder='Horas'>
										<select name='potencia[]'>".$options."</select></div></td></tr>";
									$i++;
								}
								?>
								</table>
							</div>
						</div>
					</div>
				</div>

				<!-- <div class="col-lg-6 col-sm-12 card card-theme shadow px-2 py-5" id="cozinha">
					<table>					
					<?php
					foreach ($cozinha as $aparelho) {
						$i=1;
						echo "<tr><td style='width:330px;'><h2 class='theme'>".$aparelho.":</h2></td>
							<td><input type='number' min='0' max='24' name='horas[]' placeholder='Horas'>
							<select name='potencia[]'>".$options."</select></div></td></tr>";
						$i++;
					}
					?>
					</table>
				</div>
				<div class="col-lg-6 col-sm-12 card card-theme shadow px-2 py-5" id="quarto">
					<table>					
					<?php
					foreach ($quarto as $aparelho) {
						$i=1;
						echo "<tr><td style='width:330px;'><h2 class='theme'>".$aparelho.":</h2></td>
							<td><input type='number' min='0' max='24' name='horas[]' placeholder='Horas'>
							<select name='potencia[]'>".$options."</select></div></td></tr>";
						$i++;
					}
					?>
					</table>
				</div>
				<div class="col-lg-6 col-sm-12 card card-theme shadow px-2 py-5" id="sala">
					<table>					
					<?php
					foreach ($sala as $aparelho) {
						$i=1;
						echo "<tr><td style='width:330px;'><h2 class='theme'>".$aparelho.":</h2></td>
							<td><input type='number' min='0' max='24' name='horas[]' placeholder='Horas'>
							<select name='potencia[]'>".$options."</select></div></td></tr>";
						$i++;
					}
					?>
					</table>
				</div>
				<div class="col-lg-6 col-sm-12 card card-theme shadow px-2 py-5" id="outros">
					<table>					
					<?php
					foreach ($outros as $aparelho) {
						$i=1;
						echo "<tr><td style='width:330px;'><h2 class='theme'>".$aparelho.":</h2></td>
							<td><input type='number' min='0' max='24' name='horas[]' placeholder='Horas'>
							<select name='potencia[]'>".$options."</select></div></td></tr>";
						$i++;
					}
					?>
					</table>
				</div> -->	
		</div>
		</div>
		<br>
		<button type="submit" name="button" class="btn login_btn bg-warning mx-auto d-block w-25 mt-1">Simular consumo</button>
		</form>
		<form method="post" action="Admin/zerar">
			<button type="submit" class="btn login_btn bg-danger text-white mx-auto d-block w-25 mt-1">Zerar simulador</button>
		</form>
</div>
<script>
var atual ="Simulador";
</script>