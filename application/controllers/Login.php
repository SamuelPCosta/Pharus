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
			$this->load->model("Operacoes");
			$contaContrato = $this->Operacoes->contaContrato($this->session->userdata('usuario')); 
			$this->load->model("Metas_model");
			$this->Metas_model->get_meta($contaContrato); 
			//Chama a função get meta dentro do modelo metas_model
			redirect('index'); 
		}else{
			redirect('login?error=1'); 
		}		
	}

	public function loginAdmin(){
			$this->load->model("usuarios_model");
			$usuario = $this->input->post("usuario"); //Recebe entrada de usuario
			$senha = $this->input->post("senha"); //Recebe entrada de senha
			$loginAdmin = $this->usuarios_model->logarAdmin($usuario,$senha); //Chama a função logar usuário dentro do modelo usuários model
		if($loginAdmin){
			//$this->session->set_flashdata('mensagem_login','Logado com secesso!'); 
			$this->session->set_userdata('loginAdmin', 'autenticado');
			//Tentarei salvar user na session
			$this->session->set_userdata('admin', $usuario);
			$this->load->model("Operacoes");
			$contaContrato = $this->Operacoes->contaContrato($this->session->userdata('usuario')); 
			$this->load->model("Metas_model");
			$this->Metas_model->get_meta($contaContrato); 
			//Chama a função get meta dentro do modelo metas_model
			redirect('admin'); 
		}else{
			redirect('login-administrador?error=1'); 
		}		
	}

	public function logout(){
		$this->load->helper('cookie');
		//delete_cookie("a"); delete_cookie("b"); delete_cookie("c");
		unset($_SESSION['login']);
		unset($_SESSION['meta']);
		if ($_SESSION['admin']) {
			unset($_SESSION['admin']);
			redirect('login-administrador'); 
		}
		redirect('login'); 
	}

	public function atualizar_senha(){
		$senha_atual = $this->input->post("senha_atual"); //Recebe a senha atual
		$nova_senha = $this->input->post("nova_senha"); //Recebe a nova senha 
		$confirmar_senha = $this->input->post("confirmar_senha"); //Recebe a confirmação de nova senha
		$usuario = $this->session->userdata('usuario');
		$this->load->model("usuarios_model");
		$senha = $this->usuarios_model->senhaAtual($usuario,$senha_atual);
		if ($senha) {
			if ($nova_senha==$confirmar_senha) {
				$this->usuarios_model->atualizarSenha($usuario,$nova_senha);
				redirect('login');
			}else{
				redirect('editar-senha?error=2');
			}
		}else{
			redirect('editar-senha?error=1');
			//Senha atual errada
		}
	}
}
