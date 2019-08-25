<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operacoes extends CI_Model {
	public function contaContrato($usuario){
		$this->db->select('conta_contrato'); //Seleciona conta contrato
		$this->db->where('usuario', $usuario); //Onde o usuário for igual ao nome de usuário q está logado
		$query = $this->db->get('usuario');
		$conta_contrato = $query->row()->conta_contrato;
		return $conta_contrato; //retorna o consumo
	}

	public function nomeCompleto($usuario){
		$this->db->select('nome');
		$this->db->where('usuario', $usuario); //Onde o usuário for igual ao nome de usuário q está logado
		$query = $this->db->get('usuario');
		$nome = $query->row()->nome;
		return $nome;
	}

	public function email($usuario){
		$this->db->select('email');
		$this->db->where('usuario', $usuario); //Onde o usuário for igual ao nome de usuário q está logado
		$query = $this->db->get('usuario');
		$email = $query->row()->email;
		return $email;
	}
}
