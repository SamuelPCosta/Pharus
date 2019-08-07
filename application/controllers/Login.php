<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function autenticar(){
		$this->load->model("usuarios_model");
			$usuario = $this->input->post("usuario"); //Recebe entrada de usuario
			$senha = $this->input->post("senha"); //Recebe entrada de senha
			$login = $this->usuarios_model->logarUsuarios($usuario,$senha); //Chama a função logar usuário dentro do modelo usuários model
		if($login){
			//$this->session->set_flashdata('mensagem_login','Logado com secesso!'); 
			$this->session->set_userdata('login', 'autenticado');
			//Tentarei salvar user na session
			$this->session->set_userdata('usuario', $usuario);
			//Obter meta isso tá repetido no controler de cadastro de meta para que possamos salvar por usuario
			$this->load->model("Metas_model");
			$this->Metas_model->get_meta($this->session->userdata('usuario')); 
			//Chama a função get meta dentro do modelo metas_model
			redirect('index'); 
		}else{
			redirect('login?error=1'); 
		}		
	}

	public function logout(){
		$this->load->helper('cookie');
		delete_cookie("a"); delete_cookie("b"); delete_cookie("c");
		unset($_SESSION['login']);
		unset($_SESSION['meta']);
		redirect('login'); 
	}
}
