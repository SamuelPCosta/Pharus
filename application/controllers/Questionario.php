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
		if ($questao>=7) {//Número de questões +1 (Após respondido)
			$resultado = max($resultado_a, $resultado_b, $resultado_c);
			//Conferir faixa a faixa, em caso de empate de número de questões permanece a menor faixa
			if ($resultado==$resultado_a) {
				$this->session->set_userdata('faixa', "157 e 198"); //dois valores
				$faixa = '1';
			}elseif ($resultado==$resultado_b) {
				$this->session->set_userdata('faixa', "199 e 247");
				$faixa = '2';
			}elseif ($resultado==$resultado_c) {
				$this->session->set_userdata('faixa', "248 e 370");
				$faixa = '3';
			}
			$this->load->model("Usuarios_model");
			$usuario = $this->session->userdata('usuario');
			$this->Usuarios_model->adicionarFaixa($usuario, $faixa);
			redirect('resultado');
		}else{
			redirect('idealdeconsumo?questao='.$questao);
		}
		
	}
}