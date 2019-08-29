<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {
	public function adicionar(){
		$this->load->model("usuarios_model");

		//Esse array passa os campos a serem inseridos na table usuario;
		$dados = array(
			'conta_contrato' => $this->input->post("conta_contrato"),
			'usuario' => $this->input->post("usuario"),
			'nome' => $this->input->post("nome"),
			'email' => $this->input->post("email"),
			'senha' => $this->input->post("senha")	
		);

		//Próximo array serve para povoar table consumo e metas
		$usuario = array('usuario' => $this->input->post("conta_contrato"));

		$senha = $dados['senha']; //Define a variavel senha
		$ncaracteres = strlen($senha); //Função que conta o número de caracteres de uma variavel
		$confirmar_senha = $this->input->post("confirmar_senha"); 
		//Define a variavel senha, ela não faz parte do nosso vetor, pois serve apenas para verificação e não vai para o Banco de Dados
		if ($ncaracteres>=8) { //Se a senha do usuario for maior ou igual a 8 caracteres podemos prosseguir
			if ($senha===$confirmar_senha) {
				$nome_de_usuario_existente = $this->usuarios_model->salvar($dados, $usuario);
				if ($nome_de_usuario_existente) {
					redirect('cadastro?error=3');	
				}else{
					redirect('login');	
				}
			}else{
				redirect('cadastro?error=2');	
				//Aqui fica o erro para informar ao usuário que a senha dele não bate com a confirmação
			}
		}else{
			redirect('cadastro?error=1');	
			//Aqui fica o erro para informar ao usuário que a senha dele deve ter no mínimo 8 caracteres
		}
	}

	public function editarDados(){
		$this->load->model("usuarios_model");
		
		//Esse array passa os campos a serem inseridos na table usuario;
		$dados = array(
			'conta_contrato' => $this->input->post("conta_contrato"),
			'usuario' => $this->input->post("usuario"),
			'nome' => $this->input->post("nome"),
			'email' => $this->input->post("email")
		);
	}
}