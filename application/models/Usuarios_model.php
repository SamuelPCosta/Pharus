<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {
	public function salvar($dados=NULL, $usuario){
		if ($dados != NULL) {
			$this->db->select('usuario');
			$this->db->where('usuario', $dados['usuario']);
			$query = $this->db->get('usuario');
			$nome_de_usuario = $query->num_rows(); //Obtem o número de linhas
			if ($nome_de_usuario>0) {//Se for >0, o nome de usuário já existe
				return $nome_de_usuario_existente=TRUE;
			}else{
				$this->db->insert("usuario", $dados);//Insere os dados na tabela usuario
				$usuario = $dados['usuario'];
				$this->db->select('conta_contrato');
				$this->db->where('usuario', $usuario); //Onde o usuário for igual ao nome de usuário q está logado
				$query = $this->db->get('usuario');
				$contaContrato = $query->row()->conta_contrato;
				$inserirContaContrato = array(
					'usuario' => $contaContrato
				);
				$this->db->insert("consumo", $inserirContaContrato);
				$this->db->insert("meta", $inserirContaContrato);
				$this->db->insert("consumo_mensal", $inserirContaContrato);
			}
		}
	}

	public function logarUsuarios($usuario,$senha){
		$this->db->where("usuario", $usuario); 
		$this->db->where("senha", md5($senha));
		$login = $this->db->get("usuario")->row_array();
		return $login;
	}

	public function atualizarDados($dadosUpdate=NULL, $usuarioAtual){
		if ($dadosUpdate != NULL) {
			if ($dadosUpdate['usuario'] != $usuarioAtual) {
				$this->db->select('usuario');
				$this->db->where('usuario', $dadosUpdate['usuario']);
				$query = $this->db->get('usuario');
				$nome_de_usuario = $query->num_rows(); //Obtem o número de linhas
			}else{
				$nome_de_usuario=0;
			}
			if ($nome_de_usuario>0) {//Se for >0, o nome de usuário já existe
				return $nome_de_usuario_existente=TRUE;
			}else{
				$this->db->where('usuario', $usuarioAtual);
				$this->db->update('usuario', $dadosUpdate);
			}
		}
	}

	public function senhaAtual($usuario,$senha_atual){
		$this->db->where("usuario", $usuario); 
		$this->db->where("senha", md5($senha_atual));
		$senha = $this->db->get("usuario")->row_array();
		return $senha;
	}

	public function atualizarSenha($usuario,$nova_senha){
		$this->db->set('senha', md5($nova_senha));
		$this->db->where('usuario', $usuario);
		$this->db->update('usuario');
	}

	public function inserirTarifaDB($usuario,$tarifa){
		$this->db->set('tarifa_kwh', $tarifa);
		$this->db->where('usuario', $usuario);
		$this->db->update('usuario');
	}

	public function adicionarFaixa($usuario,$faixa){
		$this->db->set('faixa', $faixa);
		$this->db->where('usuario', $usuario);
		$this->db->update('usuario');
	}

	public function getFaixa($usuario){
		$this->db->select('faixa');
		$this->db->where('usuario', $usuario);
		$query = $this->db->get('usuario');
		$faixa = $query->row()->faixa;
		return $faixa;
	}

	public function adicionarHorasDormidas($horasDormidas,$contaContrato){
		$this->db->set('horas_dormidas', $horasDormidas);
		$this->db->where('usuario', $contaContrato);
		$this->db->update('consumo');
	}

	public function adicionarHoraInicial($horaInicial,$contaContrato){
		$this->db->set('hora_inicial_sono', $horaInicial);
		$this->db->where('usuario', $contaContrato);
		$this->db->update('consumo');
	}

	public function adicionarBaseDormindo($base,$contaContrato){
		$this->db->set('consumo_dormindo', $base);
		$this->db->where('usuario', $contaContrato);
		$this->db->update('consumo');
	}

	public function getHorasDormidas($contaContrato){
		$this->db->select('horas_dormidas');
		$this->db->where('usuario', $contaContrato);
		$query = $this->db->get('consumo');
		$horas_dormidas = $query->row()->horas_dormidas;
		return $horas_dormidas;
	}

	public function getHoraInicial($contaContrato){
		$this->db->select('hora_inicial_sono');
		$this->db->where('usuario', $contaContrato);
		$query = $this->db->get('consumo');
		$hora_inicial_sono = $query->row()->hora_inicial_sono;
		return $hora_inicial_sono;
	}

	public function getBaseDormindo($contaContrato){
		$this->db->select('consumo_dormindo');
		$this->db->where('usuario', $contaContrato);
		$query = $this->db->get('consumo');
		$consumo_dormindo = $query->row()->consumo_dormindo;
		return $consumo_dormindo;
	}
}
