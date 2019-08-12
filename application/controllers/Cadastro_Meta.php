<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro_Meta extends CI_Controller {
	public function adicionar(){
		$this->load->model("Metas_model");

		$meta = $this->input->post("meta");

		if ($meta>=20 && $meta<=2500) { //Se a meta do usuario for maior ou = a 20 e menor ou = a 2500
			//$meta = array('a'); //criar um erro pra parar a execução
			$usuario = $this->session->userdata('usuario');
			$this->Metas_model->salvar($meta, $usuario);
			$valor_tarifa = 0.7;
			$khw = intval($meta/$valor_tarifa);
			$this->Metas_model->kwh($khw, $usuario);

			//Obter meta
			$this->Metas_model->get_meta($this->session->userdata('usuario')); //Chama a função get meta dentro do modelo metas_model
			
			redirect('metas'); 
		}else{
			redirect('metas?error=1');
			//Aqui ficará o erro para redirecionar e informar ao usuário que a meta dele deve ser no mínimo 20 
		}	
	}
}