<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastroMeta extends CI_Controller {
	public function adicionar(){
		if($this->session->userdata('meta')==$this->input->post("meta")){
			redirect('metas?error=1');
		}
		$this->load->model("Operacoes");
		$meta = $this->input->post("meta");

		if ($meta>=20 && $meta<=10000) { //Se a meta do usuario for maior ou = a 20 e menor ou = a 2500
			//$meta = array('a'); //criar um erro pra parar a execução
			$usuario = $this->session->userdata('usuario');
			$contaContrato = $this->Operacoes->contaContrato($usuario);
			$this->load->model("Metas_model");
			$this->Metas_model->salvar($meta, $contaContrato);
			$this->load->model("Operacoes");
			$tarifa = $this->Operacoes->tarifa($usuario);
			$bandeira = $this->Operacoes->bandeira($contaContrato);
			$valor_tarifa = $bandeira+$tarifa;
			$khw = intval($meta/$valor_tarifa);
			$this->Metas_model->kwh($khw, $contaContrato);

			//Obter meta
			$this->Metas_model->get_meta($contaContrato); //Chama a função get meta dentro do modelo metas_model
			$this->session->set_userdata('mensagem', "Fique de olho no seu consumo!");
			redirect('metas'); 
		}else{
			redirect('metas?error=1');
			//Aqui ficará o erro para redirecionar e informar ao usuário que a meta dele deve ser no mínimo 20 
		}	
	}
}