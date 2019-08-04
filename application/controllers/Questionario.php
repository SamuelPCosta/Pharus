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
				set_cookie('a', $resultado_a, time() + (300)); //Dá update no cookie
			}elseif ($resposta==="resposta_b") {
				$resultado_b = get_cookie('b')+1;
				set_cookie('b', $resultado_b, time() + (300));
			}elseif ($resposta==="resposta_c") {
				$resultado_c = get_cookie('c')+1;
				set_cookie('c', $resultado_c, time() + (300));
			}
		}
		if ($questao>=6) {//Número de questões +1 (Após respondido)
			$resultado = max($resultado_a, $resultado_b, $resultado_c);
			if ($resultado==$resultado_a) {
				$this->session->set_userdata('faixa', "A e B");
			}elseif ($resultado==$resultado_b) {
				$this->session->set_userdata('faixa', "B e C");
			}elseif ($resultado==$resultado_c) {
				$this->session->set_userdata('faixa', "C e D");
			}
			redirect('resultado?&ra='.$resultado_a.'&rb='.$resultado_b.'&rc='.$resultado_c);
		}else{
			redirect('idealdeconsumo?questao='.$questao.'&ra='.$resultado_a.'&rb='.$resultado_b.'&rc='.$resultado_c);
		}
		
	}
}