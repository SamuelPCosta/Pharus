<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {
	public function adicionar(){
		$this->load->model("usuarios_model");

		$tarifa_kwh = $this->input->post("tarifa_kwh");
		if (empty($this->input->post("tarifa_kwh"))) {
			$tarifa_kwh = '0.55';
		}
		//Esse array passa os campos a serem inseridos na table usuario;
		$dados = array(
			'usuario' => $this->input->post("usuario"),
			'nome' => $this->input->post("nome"),
			'email' => $this->input->post("email"),
			'senha' => md5($this->input->post("senha")),
			'tarifa_kwh' => $tarifa_kwh
		);

		//Próximo array serve para povoar table consumo, consumo_mensal e metas
		$usuario = array('usuario' => $this->input->post("conta_contrato"));

		$senha = md5($this->input->post("senha")); //Define a variavel senha
		$ncaracteres = strlen($senha); //Função que conta o número de caracteres de uma variavel
		$confirmar_senha = md5($this->input->post("confirmar_senha")); 
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
		$this->load->model("Operacoes");
		
		$usuario = $this->input->post("usuario");
		$nome = $this->input->post("nome");
		$email = $this->input->post("email");
		$tarifa = $this->input->post("tarifa_kwh");

		$usuarioAtual=$this->session->userdata('usuario');
		$nomeAtual=$this->Operacoes->nomeCompleto($usuarioAtual);
		$contaContratoAtual=$this->Operacoes->contaContrato($usuarioAtual);
		$emailAtual=$this->Operacoes->email($usuarioAtual);
		$tarifaAtual=$this->Operacoes->tarifa($usuarioAtual);

		//Esse array passa os campos a serem atualizados na table usuario;
		$dadosUpdate = array();
			if ($usuario!=$usuarioAtual && $usuario!=NULL && $usuario!=" ") {
				$dadosUpdate['usuario'] = $usuario;
			}if ($nome!=$nomeAtual && $nome!=NULL && $nome!=" ") {
				$dadosUpdate['nome'] = $nome;
			}if ($email!=$emailAtual && $email!=NULL && $email!=" ") {
				$dadosUpdate['email'] = $email;
			}if ($tarifa!=$tarifaAtual && $tarifa!=NULL && $tarifa!=" ") {
				$dadosUpdate['tarifa_kwh'] = $tarifa;
			}
		$this->load->model("Usuarios_model");
		$nome_de_usuario_existente = $this->Usuarios_model->atualizarDados($dadosUpdate, $usuarioAtual);
		if ($nome_de_usuario_existente) {
			redirect('usuario?error=1');	//Nome de usuário já existe
		}else{
			if ($usuario!=$usuarioAtual && $usuario!=NULL && $usuario!=" ") {
				$this->session->set_userdata('usuario', $usuario);
				//Sobrescreve a seção de usuário
			}
			redirect('usuario');
		}
	}
}