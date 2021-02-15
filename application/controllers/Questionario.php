<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questionario extends CI_Controller {
	public function perguntas($questao){
		$this->load->helper('cookie');
		//Respostas
		$a1=6.00; $b1=9.00; $c1=12.00;
		$a2=1.00; $b2=2.00; $c2=3.00; //1 dia, 2 dias, 3 dias
		$a3=1.25; $b3=3.10; $c3=5.00;
		$a4=08.10; $b4=13.50; $c4=21.60; 
		$a5=8.00; $b5=12.00; $c5=16.00;
		$a6=15.00; $b6=30.00; $c6=60.00;
		$a7=2.52; $b7=04.20; $c7=11.76;
		$a8=6.00; $b8=8.00; $c8=10.00;
		$a9=00.00; $b9=00.00; $c9=00.00;
		$a10=1.25; $b10=14.64; $c10=00.00;

		// Soma
		// A min = 40
		// B min = 105
		// C min = 204
		// Considerando 45% de imposto e arredondando temos:
		// A min = 60
		// B min = 150
		// C min = 300
		// Como são 3 faixas o ponto D será calculado a partir de um gráfico
		// D min = 530

		if ($_POST['resposta']!=NULL) {
			$resultado_a = get_cookie('a');
			$resultado_b = get_cookie('b');
			$resultado_c = get_cookie('c');
			$resposta = $_POST['resposta'];
			if ($resposta==="resposta_a") {
				if ($questao==2) {
					$horasMaquina = $resultado_a+$resultado_b+$resultado_c;
					$lavagem = $horasMaquina*$a2;
					$resultado_a = get_cookie('a')+$lavagem; //Aumenta 1 caso a resposta seja A
					set_cookie('a', $resultado_a, '300'); //Dá update no cookie
				}else{
					$valor = 'a'.$questao;
					$resultado_a = get_cookie('a')+$$valor; //Aumenta 1 caso a resposta seja A
					set_cookie('a', $resultado_a, '300'); //Dá update no cookie
				}
			}elseif ($resposta==="resposta_b") {
				if ($questao==2) {
					$horasMaquina = $resultado_a+$resultado_b+$resultado_c;
					$lavagem = $horasMaquina*$b2;
					$resultado_b = get_cookie('b')+$lavagem; //Aumenta 1 caso a resposta seja A
					set_cookie('b', $resultado_b, '300'); //Dá update no cookie
				}else{
					$valor = 'b'.$questao;
					$resultado_b = get_cookie('b')+$$valor; //Aumenta 1 caso a resposta seja A
					set_cookie('b', $resultado_b, '300'); //Dá update no cookie
				}
			}elseif ($resposta==="resposta_c") {
				if ($questao==2) {
					$horasMaquina = $resultado_a+$resultado_b+$resultado_c;
					$lavagem = $horasMaquina*$c2;
					$resultado_c = get_cookie('c')+$lavagem; //Aumenta 1 caso a resposta seja A
					set_cookie('c', $resultado_c, '300'); //Dá update no cookie
				}else{
					$valor = 'c'.$questao;
					$resultado_c = get_cookie('c')+$$valor; //Aumenta 1 caso a resposta seja A
					set_cookie('c', $resultado_c, '300'); //Dá update no cookie
				}
			}
			$questao++; //Passar para a proxima questao
		}
		$usuario = $this->session->userdata('usuario');
		if ($questao>=11) {//Número de questões +1 (Após respondido)
			//$resultado = max($resultado_a, $resultado_b, $resultado_c);
			//Conferir faixa a faixa, em caso de empate de número de questões permanece a menor faixa
			$soma=$resultado_a+$resultado_b+$resultado_c;
			$total = ($soma*100)/75;
			$total = $total+$total*45/100;
			if ($total<=150) {
				$this->session->set_userdata('faixa', "60 e 140"); //dois valores alterar aqui e no controller Raiz
				$faixa = '1';
			}elseif ($total<=280) {
				$this->session->set_userdata('faixa', "140 e 280");
				$faixa = '2';
			}elseif ($total<=420) {
				$this->session->set_userdata('faixa', "280 e 420");
				$faixa = '3';
			}elseif ($total>420) {
				$this->session->set_userdata('faixa', "420 e 530");
				$faixa = '4';
			}
			// if ($resultado==$resultado_a) {
			// 	$this->session->set_userdata('faixa', "60 e 150"); //dois valores alterar aqui e no controller Raiz
			// 	$faixa = '1';
			// }elseif ($resultado==$resultado_b) {
			// 	$this->session->set_userdata('faixa', "150 e 300");
			// 	$faixa = '2';
			// }elseif ($resultado==$resultado_c) {
			// 	$this->session->set_userdata('faixa', "300 e 530");
			// 	$faixa = '3';
			// }
			$this->load->model("Usuarios_model");
			$this->Usuarios_model->adicionarFaixa($usuario, $faixa);
			if ($questao==11) {
				if ($resposta==="resposta_a") {
					$base = 1.25;
				}elseif ($resposta==="resposta_b") {
					$base = 14.64;
				}elseif ($resposta==="resposta_c") {
					$base = 1.25;
				}else{
					$base = 0.022;
				}
				$this->load->model("Operacoes");
				$contaContrato = $this->Operacoes->contaContrato($usuario);
				$this->Usuarios_model->adicionarBaseDormindo($base, $contaContrato);
			}
			redirect('resultado');
		}else{
			$this->load->model("Operacoes");
			$contaContrato = $this->Operacoes->contaContrato($usuario);
			$this->load->model("Usuarios_model");
			//echo $contaContrato;
			if ($questao==9) {
				if ($resposta==="resposta_a") {
					$horasDormidas = 6;
				}elseif ($resposta==="resposta_b") {
					$horasDormidas = 8;
				}elseif ($resposta==="resposta_c") {
					$horasDormidas = 10;
				}else{
					$horasDormidas = 8;
				}
				$this->Usuarios_model->adicionarHorasDormidas($horasDormidas, $contaContrato);
			}elseif ($questao==10) {
				if ($resposta==="resposta_a") {
					$horaInicial = 22;
				}elseif ($resposta==="resposta_b") {
					$horaInicial = 23;
				}elseif ($resposta==="resposta_c") {
					$horaInicial = 24;
				}else{
					$horaInicial = 22;
				}
				$this->Usuarios_model->adicionarHoraInicial($horaInicial, $contaContrato);
			}
			redirect('idealdeconsumo?questao='.$questao);
		}
		
	}
}