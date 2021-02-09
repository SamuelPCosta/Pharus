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
		background-color: #eeeeee !important;
		box-shadow: none;
	}
	.container-simulador h2{
		font-family: 'Open Sans', sans-serif !important;
		color: #222;
		margin: 5px 0px 10px 50px;
		display: inline-block;
		font-weight: 100;
		font-size: 2em;
		width: 100% !important;
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
	input.text-white, select.text-white{
		background-color: #464b51 !important;
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
	@keyframes recolher{
	    0% {transform: translateY(0);}
	    50% {transform: translateY(6px);}
	    100% {transform: translateY(0);}
	}
	.recolher{animation: recolher 0.5s;-webkit-animation-fill-mode: forwards;/*animation-timing-function: linear;*/}
	@media(max-width:1200px){
		h2, input.personalizados{
			font-size: 1.5em!important;
		}
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
		table{
			margin-left: -15px!important;
		}
		input, select{
			margin-right: 25px!important;
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
	<div class="container first-container mt-5 container-simulador">
		<!-- <h1 class="mb-5 text-uppercase theme">Simulador de Consumo</h1> -->
		<form method="post" action="Raiz/Consumir" id="formulariodesimulcao">
		<div class="row align-items-center">
			<h2 class="mt-0 mb-1 card text-lg-left text-center card-theme px-5 py-3 theme mx-3 d-inline titulosimulador">Simulador de Consumo<span class="float-right d-inline span-fa-chevron-down"><i class="fa fa-chevron-down" style="cursor: pointer;"></i></span></h2>
				<?php $cozinha = array('Exaustor','Freezer','Fogão Elétrico','Geladeira','Microondas','Lava-Louça','Liquidificador');
				$quartosala = array('Ar-Condicionado','Computador','Estabilizador','Impressora','Televisão','Ventilador','Vídeogame');
				$outros = array('Chuveiro Elétrico','Ferro Elétrico','Lâmpada Fluor.','Lâmpada Incan.','Lavadora','Secador');
				if (empty($horassalvas)) {
					for ($i=0; $i <30 ; $i++) { 
						$horassalvas[$i]="";
					}
					
				}
				if (isset($_SESSION['personalizados'])) {
					$personalizados = $aparelhosPersonalizados;
					if (empty($personalizados)){$personalizados=array('Aparelho 1', 'Aparelho 2', 'Aparelho 3', 'Aparelho 4', 'Aparelho 5', 'Aparelho 6');}
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
				<div class="card py-5 px-5 mt-4 mb-0 shadow card-theme instrucoesSimulador expandir">
					<div class="row align-items-center">
						<div class="col-xl col-md-12 mx-auto px-0">	
							<ul class="col-xl col-md-12 mx-auto px-5 theme text-justify">
								<li>Insira os valores correspondentes a quantas horas cada aparelho permanece ligado.</li>
								<li>Consideramos uma potência média para cada aparelho.</li>
								<li>Após a segunda simulação esses dados ficam salvos.</li>
							</ul>
						</div>
						<div class="vertical-line" style="height: 150px!important"></div>
						<div class="col-xl col-md-12 mx-auto px-0">
							<ul class="col-xl col-md-12 mx-auto px-5 theme text-justify">
								<li>O último bloco é reservado para aparelhos personalizáveis.</li>
								<li>Você pode alterar seus nomes clicando sobre eles.</li>
								<li>Além disso, você pode alterar a potência destes aparelhos.</.li>
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
										<td><input type='number' min='0' max='24' name='horas[]' value='".$horassalvas[$i]."' placeholder='h/dia' class='soma theme'>
										<select name='potencia[]' style='display:none!important;' class='g1".$i."'>".$optionsC."</select>
										<select name='qntd[]' class='theme'>".$qntd."</select></td></tr>";
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
										<td><input type='number' min='0' max='24' name='horas[]' value='".$horassalvas[$i+7]."' placeholder='h/dia' class='soma theme'>
										<select name='potencia[]' style='display:none!important;' class='g2".$i."'>".$optionsQS."</select>
										<select name='qntd[]' class='theme'>".$qntd."</select></td></tr>";
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
										<td><input type='number' min='0' max='24' name='horas[]' value='".$horassalvas[$i+14]."' placeholder='h/dia' class='soma theme'>
										<select name='potencia[]' style='display:none!important;' class='g3".$i."'>".$optionsO."</select>
										<select name='qntd[]' class='theme'>".$qntd."</select></td></tr>";
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
									echo "<tr><td class='theme nomep'><input type='text' class='personalizados' name='personalizados[]' placeholder='' value='".$personalizados[$i]."' style='width:200px;border-radius: 0px; text-transform: capitalize;'></td>
										<td><input type='number' min='0' max='24' name='horas[]' class='horasp soma theme' value='".$horassalvas[$i+20]."' placeholder='h/dia'>
										<select name='qntd[]' class='mr-0 ml-0 corrigiraltura theme'>".$qntd."</select>
										<select name='potencia[]' class='potenciap theme'>".$optionsC.$optionsQS.$optionsO."</select></td></tr>";
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
		<button type="submit" name="button" accesskey="i" class="btn login_btn bg-warning mx-auto d-block w-25 mt-1" id="iniciarsimulador" disabled>Simular consumo</button>
		</form>
		<!-- <form method="post" action="Raiz/zerar">
			<button type="submit" class="btn login_btn bg-danger text-white mx-auto d-block w-25 mt-1">Zerar simulador</button>
		</form> -->
</div>
		<!-- Modal -->
	<div class="modal fade show d-block" id="tipsimulador" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered tutorialdvi1" role="document">
	  	<div class="rounded-circle card-theme theme tutorialdvi2"><div class="tutorialicone"><i class="fas fa-laptop-code mx-auto"></i></div></div>
	    <div class="modal-content card-theme theme tutorialcontent">
	      <div class="modal-header tutorialheader"><h3 class="modal-title text-uppercase tutorialtitle" id="TituloModal">Simulador</h3></div>
	      <div class="modal-body text-center">
	      	<p class="tutorialp">Insira os valores correspondentes ao tempo de uso de cada aparelho e clique em “Simular Consumo” para criar uma simulação de consumo de energia.</p>
	      </div>
	      <div class="modal-footer tutorialfooter"><button class="btn btn-warning px-4 py-1" id="hidetipsimulador" style="margin-right: 0px">Entendi</button></div>
	    </div>
	  </div>
	</div>
	<div class="modal-backdrop fade show" id="bg-dark"></div>
	<script>
		const tipsimulador = localStorage.getItem('tipsimulador')
		if (tipsimulador) {
		  $('#tipsimulador').removeClass('show');
		  $('#tipsimulador').removeClass('d-block'); 
		  $('#bg-dark').removeClass('show'); 
		  $('#bg-dark').addClass('d-none');
		  $('body').removeClass('modal-open');
		}else{$('body').addClass('modal-open');}
		$("#hidetipsimulador").click(function(e) {
		  e.preventDefault();
		    $('#tipsimulador').removeClass('show');
		  	$('#tipsimulador').removeClass('d-block'); 
		 	$('#bg-dark').removeClass('show'); 
		  	$('#bg-dark').addClass('d-none');
		  	$('body').removeClass('modal-open');
		    localStorage.setItem('tipsimulador', true);
		});
	</script>
<script>
const recolhido = localStorage.getItem('recolhido')

// caso tenha o valor no localStorage
if (recolhido) {
	$(".instrucoesSimulador").toggleClass('inativo');
	$(".instrucoesSimulador").toggleClass('expandir');
	$(".span-fa-chevron-down").toggleClass('recolher');
	setTimeout(function() { $('.span-fa-chevron-down').toggleClass('recolher');}, 500);
}

$(".fa-chevron-down").click(function(e) {
	e.preventDefault();
	$(".instrucoesSimulador").toggleClass('inativo');
	$(".instrucoesSimulador").toggleClass('expandir');
	$(".span-fa-chevron-down").toggleClass('recolher');
	setTimeout(function() { $('.span-fa-chevron-down').toggleClass('recolher');}, 500);

	if($(".instrucoesSimulador").hasClass('inativo')) {
		// salva o tema no localStorage
		localStorage.setItem('recolhido', true)
		return
	}
	// senão remove
	localStorage.removeItem('recolhido')
});


//declaro uma var para somar o total
var total = 0;
//faço um foreach percorrendo todos os inputs com a class soma e faço a soma na var criada acima
$(".soma").each(function(){
    total = total + Number($(this).val());  
});
//mostro o total no input Sub Total
console.log(total);
if (total>=1) {
	$("#iniciarsimulador").prop("disabled", false );
}else{
	$("#iniciarsimulador").prop("disabled", true);
}

$("#formulariodesimulcao").change(function () {
	$(".soma").change(function(){
        //declaro uma var para somar o total
        var total = 0;
        //faço um foreach percorrendo todos os inputs com a class soma e faço a soma na var criada acima
        $(".soma").each(function(){
            total = total + Number($(this).val());  
        });
        //mostro o total no input Sub Total
        console.log(total);
        if (total>=1) {
    		$("#iniciarsimulador").prop("disabled", false );
    	}else{
    		$("#iniciarsimulador").prop("disabled", true);
    	}
    });
}).change();

var atual ="Simulador";
</script>