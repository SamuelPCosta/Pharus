<?php 
	
	function simulador(){
		$h_geladeira = 24; //horas que a geladeira fica ligada
		rand(4,6);
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Simulador de consumo</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> <!--Importação do CSS do BS-->
	<link rel="shortcut icon" href="<?= base_url()?>assets/img/icon.png"/> <!--Icone-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> <!--Importação da fonte Open Sans-->
	<link rel="shortcut icon" href="<?= base_url()?>assets/img/icon.ico"/> <!--Icone-->
	<style type="text/css">
		html, body{
			background-color: #9aada3;
		}
		input{
			width: 70px;
			height: 30px;
			background-color: #eee;
			border: none;
			border-radius: 5px;
			padding-left: 10px;
			float: right;
			margin: 32px 0px 0px 15px;
		}
		select{
			float: right;
		}
		h1{
			font-family: 'Open Sans', sans-serif !important;
			color: #222;
			margin: auto;
			text-align: center;
			margin-top: 50px;
			display: block;
			text-transform: uppercase;
			font-weight: 700;
		}
		h2{
			font-family: 'Open Sans', sans-serif !important;
			color: #222;
			margin: 25px 0px 0px 50px;
			display: inline-block;
		}
		button{
			background-color: #364046 !important;
			color: white !important;
			margin: auto;
			margin-top: 50px;
			margin-bottom: 50px;
			max-height: 40px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Simulador de Consumo <br>de um domicílio</h1>
		<div class="row">
				<div class="col-xl-4 col-lg-6">
					<form method="post" action="#">
					<h2>Geladeira:</h2>
					<input type="number" min="0" max="24" name="geladeira" placeholder="Horas">
					<select>
						<option>Potência</option>
						<option>Potência</option>
					</select>
					<br>
					<h2>Fogão:</h2>
					<input type="number" min="0" max="24" name="fogao" placeholder="Horas"><br>
					<h2>Microondas:</h2>
					<input type="number" min="0" max="24" name="microondas" placeholder="Horas"><br>
					<h2>Freezer:</h2>
					<input type="number" min="0" max="24" name="freezer" placeholder="Horas"><br>
					<h2>Geladeira:</h2>
					<input type="number" min="0" max="24" name="" placeholder="Horas"><br>
				</div>
				<div class="col-xl-4 col-lg-6">
					<h2>Geladeira:</h2>
					<input type="number" min="0" max="24" name="" placeholder="Horas"><br>
					<h2>Fogão:</h2>
					<input type="number" min="0" max="24" name="" placeholder="Horas"><br>
					<h2>Microondas:</h2>
					<input type="number" min="0" max="24" name="" placeholder="Horas"><br>
					<h2>Freezer:</h2>
					<input type="number" min="0" max="24" name="" placeholder="Horas"><br>
					<h2>Geladeira:</h2>
					<input type="number" min="0" max="24" name="" placeholder="Horas"><br>
				</div>
				<div class="col-xl-4 col-lg-6">
					<h2>Geladeira:</h2>
					<input type="number" min="0" max="24" name="" placeholder="Horas"><br>
					<h2>Fogão:</h2>
					<input type="number" min="0" max="24" name="" placeholder="Horas"><br>
					<h2>Microondas:</h2>
					<input type="number" min="0" max="24" name="" placeholder="Horas"><br>
					<h2>Freezer:</h2>
					<input type="number" min="0" max="24" name="" placeholder="Horas"><br>
					<h2>Geladeira:</h2>
					<input type="number" min="0" max="24" name="" placeholder="Horas"><br>
				</div>
				<button type="submit" name="button" class="btn login_btn">Consumir</button>
			</form>
		</div>
	</div>
	<?php 
		//$geladeira = $_POST['geladeira'];//*potencia da geladeira;

	?>
</body>
</html>