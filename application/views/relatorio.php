<!DOCTYPE html>
<html>
<head>
	<title>Relatorio Mensal - Pharus</title>
	<link rel="shortcut icon" href="<?= base_url()?>assets/img/logo2.png"/> <!--Icone-->
	<style type="text/css">
		body { 
		    font-family: sans-serif; 
		    font-size: 10pt; 
		}
		table{
			border-collapse: collapse;
		}
		th{
			text-align: left;
			padding-bottom: 5px!important;
		}
		td{
			border-top: 1px solid #22242a;
		}
		.borda-bottom{
			border-bottom: 1px solid #22242a;
		}
		tr td:first-child{
			width: 75%;
		}
		td.resp{
			text-align: right;
			margin-right: 0px;
		}
	</style>
</head>
<body style="height: 200vh; width: 100vw; background-image: url(http://localhost/pharus/assets/img/template.png); background-repeat: no-repeat; background-size: auto; "><br>
	<?php date_default_timezone_set('America/Sao_Paulo'); ?>
	<?php 
	setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
	date_default_timezone_set('America/Sao_Paulo');
	?>
	<h2 style="position: relative; margin-top: 75px; text-align: center; font-weight: normal;">Relatório Mensal - Mês de <?php  echo strftime('%B', strtotime('today'));?></h2>
	<table style="width: 100%">
		<tr>
			<th colspan='2'>Dados gerais</th><th></th>
		</tr>
		<tr>
			<td>Nome completo:</td>
			<td class="resp"><?php echo $nomeCompleto; ?></td>
		</tr>
		<tr>
			<td>Nome de usuário:</td>
			<td class="resp"><?php echo $nomedeusuario; ?></td>
		</tr>
		<tr>
			<td>Email utilizado:</td>
			<td class="resp"><?php echo $email; ?></td>
		</tr>
		<tr>
			<td>Estado/Fornecedor de energia:</td>
			<td class="resp"><?php echo $estado." - ".$fornecedor; ?></td>
		</tr>
		<tr>
			<td class="borda-bottom">Possui conta premium:</td>
			<td class="borda-bottom resp"><?php if (isset($_SESSION['premium'])) {
				echo "Sim";
			}else{echo "Não";} ?></td>
		</tr>
	</table>
	<br><br>
	<table style="width: 100%">
		<tr>
			<th colspan='2'>Consumo diário e mensal</th><th></th>
		</tr>
		<tr>
			<td>Consumo estimado de hoje de acordo com simulação (kWh):</td>
			<?php if (isset($_SESSION['simulacaoBackup'.$usuario])) {
				$array = $this->session->userdata('simulacaoBackup'.$usuario);
			}else{$array[] = 0;} ?>
			<td class="resp"><?php echo  number_format(array_sum($array),2); ?></td>
		</tr>
		<tr>
			<td>Consumo estimado de hoje de acordo com simulação (Reais):</td>
			<td class="resp"><?php echo number_format((array_sum($array)*$tarifa),2); ?></td>
		</tr>
		<tr>
			<td>Consumo estimado do mês atual de acordo com simulação (kWh):</td>
			<td class="resp"><?php echo  number_format($meuconsumo,2); ?></td>
		</tr>
		<tr>
			<td class="borda-bottom">Consumo estimado do mês atual de acordo com simulação (Reais):</td>
			<td class="borda-bottom resp">a</td>
		</tr>
	</table>
	<br><br>
	<table style="width: 100%">
		<tr>
			<th colspan='2'>Meta e faixa de gasto</th><th></th>
		</tr>
		<tr>
			<td>Sua meta em kWh está definida para:</td>
			<td class="resp"><?php echo $meta; ?></td>
		</tr>
		<tr>
			<td>Sua meta em reais está definida para:</td>
			<td class="resp"><?php if ($metareais!=0) {
				echo $metareais;
			}else{
				echo "-";
			} ?></td>
		</tr>
		<tr>
			<td>Você pertence a faixa de gastos:</td>
			<td class="resp"><?php echo $minhafaixa; ?></td>
		</tr>
		<tr>
			<td class="borda-bottom">Porcentagem do consumo em relação a meta:</td>
			<td class="borda-bottom resp"><?php echo  number_format(($meuconsumo*100)/$meta,2); ?></td>
		</tr>
	</table>
	<br><br>
	<table style="width: 100%">
		<tr>
			<th colspan='2'>Conquistas</th><th></th>
		</tr>
		<tr>
			<td>Número de conquistas desbloqueadas:</td>
			<td class="resp"><?php echo $conquistas+1; ?></td>
		</tr>
		<tr>
			<td class="borda-bottom">Número de conquistas restantes:</td>
			<td class="borda-bottom resp"><?php echo 8-$conquistas; ?></td>
		</tr>
	</table>
	<br><br>
	<p style="position: absolute; bottom: 25px; text-align: left;">O presente relatório foi gerado automáticamente no dia <?php echo date('d')."/".date('m')."/".date('Y') ?> às <?php echo date('H') ?> horas e <?php echo date('i') ?> minutos.</p>
</body>
</html>