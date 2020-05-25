<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conquist extends CI_Controller {
	public function usuario(){
		$usuario = $this->session->userdata('usuario');
		$this->load->model("Operacoes");
		$contaContrato = $this->Operacoes->contaContrato($usuario);
		return $contaContrato;
	}

	public function conquista2(){
		$contaContrato = $this->usuario();
		$this->load->model("Conquistas_model");
		$resposta['c2'] = $this->Conquistas_model->conquista2($contaContrato);
		echo json_encode($resposta);
	}

	public function conquista3(){
		$contaContrato = $this->usuario();
		$this->load->model("Conquistas_model");
		$resposta['c3'] = $this->Conquistas_model->conquista3($contaContrato);
		echo json_encode($resposta);
	}

	public function ConferirConquistas(){
		$contaContrato = $this->usuario();
		for ($i=2; $i < 10; $i++) { 
			"conquista".$i = $this->Conquistas_model->ConferirConquista1($usuario);
		}
	}
}