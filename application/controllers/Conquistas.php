<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function usuario(){
		$usuario = $this->session->userdata('usuario');
		$contaContrato = $this->Operacoes->contaContrato($usuario);
	}

	public function conquista1(){
		$usuario = $this->usuario();
		if (condition) {
			$this->Conquistas_model->conquista1($usuario);
		}
	}

	public function ConferirConquistas(){
		$usuario = $this->usuario();
		for ($i=1; $i < 13; $i++) { 
			"\$c_".$i = $this->Conquistas_model->ConferirConquista1($usuario, $i);
		}
	}
}