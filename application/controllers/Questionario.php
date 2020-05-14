<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questionario extends CI_Controller {
	public function perguntas($questao){
		$this->load->helper('cookie');
		if ($_POST['resposta']!=NULL) {
			$questao++; //Passar para a proxima questao
			$resultado_a = get_cookie('a');
			$resultado_b = get_cookie('b');
			$resultado_c = get_cookie('c');
			$resposta = $_POST['resposta'];
			if ($resposta==="resposta_a") {
				$resultado_a = get_cookie('a')+1; //Aumenta 1 caso a resposta seja A
				set_cookie('a', $resultado_a, '300'); //Dá update no cookie
			}elseif ($resposta==="resposta_b") {
				$resultado_b = get_cookie('b')+1;
				set_cookie('b', $resultado_b, '300');
			}elseif ($resposta==="resposta_c") {
				$resultado_c = get_cookie('c')+1;
				set_cookie('c', $resultado_c, '300');
			}
		}
		$usuario = $this->session->userdata('usuario');
		if ($questao>=10) {//Número de questões +1 (Após respondido)
			$resultado = max($resultado_a, $resultado_b, $resultado_c);
			//Conferir faixa a faixa, em caso de empate de número de questões permanece a menor faixa
			if ($resultado==$resultado_a) {
				$this->session->set_userdata('faixa', "122 e 155"); //dois valores alterar aqui e no controller Raiz
				$faixa = '1';
			}elseif ($resultado==$resultado_b) {
				$this->session->set_userdata('faixa', "156 e 210");
				$faixa = '2';
			}elseif ($resultado==$resultado_c) {
				$this->session->set_userdata('faixa', "211 e 300");
				$faixa = '3';
			}
			$this->load->model("Usuarios_model");
			$this->Usuarios_model->adicionarFaixa($usuario, $faixa);
			if ($questao==10) {
				if ($resposta==="resposta_a") {
					$base = 00;
				}elseif ($resposta==="resposta_b") {
					$base = 0.022;
				}elseif ($resposta==="resposta_c") {
					$base = 0.05;
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
			if ($questao==8) {
				if ($resposta==="resposta_a") {
					$horasDormidas = 6;
				}elseif ($resposta==="resposta_b") {
					$horasDormidas = 8;
				}elseif ($resposta==="resposta_c") {
					$horasDormidas = 10;
				}
				$this->Usuarios_model->adicionarHorasDormidas($horasDormidas, $contaContrato);
			}elseif ($questao==9) {
				if ($resposta==="resposta_a") {
					$horaInicial = 22;
				}elseif ($resposta==="resposta_b") {
					$horaInicial = 23;
				}elseif ($resposta==="resposta_c") {
					$horaInicial = 24;
				}
				$this->Usuarios_model->adicionarHoraInicial($horaInicial, $contaContrato);
			}
			redirect('idealdeconsumo?questao='.$questao);
		}
		
	}
}