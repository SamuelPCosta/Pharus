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

	public function tarifa($usuario){
		$this->db->select('tarifa_kwh');
		$this->db->where('usuario', $usuario); //Onde o usuário for igual ao nome de usuário q está logado
		$query = $this->db->get('usuario');
		$tarifa_kwh = $query->row()->tarifa_kwh;
		return $tarifa_kwh;
	}

	public function estado($usuario){
		$this->db->select('estado');
		$this->db->where('usuario', $usuario); //Onde o usuário for igual ao nome de usuário q está logado
		$query = $this->db->get('usuario');
		$estado = $query->row()->estado;
		return $estado;
	}

	public function foto($usuario){
		$this->db->select('foto');
		$this->db->where('usuario', $usuario); //Onde o usuário for igual ao nome de usuário q está logado
		$query = $this->db->get('usuario');
		$foto = $query->row()->foto;
		return $foto;
	}

	public function regsitrarFoto($contaContrato){
		$this->db->set('foto', "true");
		$this->db->where('conta_contrato', $contaContrato); //Onde a contacontrato for igual a q está logado
		$this->db->update('usuario');
	}

	public function removerFoto($contaContrato){
		$this->db->set('foto', NULL);
		$this->db->where('conta_contrato', $contaContrato); //Onde a contacontrato for igual a q está logado
		$this->db->update('usuario');
	}

	public function bandeira($usuario){
		$this->db->select('bandeira');
		$this->db->where('usuario', $usuario); //Onde o usuário for igual ao nome de usuário q está logado
		$query = $this->db->get('consumo');
		$bandeira = $query->row()->bandeira;
		return $bandeira;
	}

	public function premium($usuario){
		$this->db->select('premium');
		$this->db->where('usuario', $usuario); //Onde o usuário for igual ao nome de usuário q está logado
		$query = $this->db->get('usuario');
		$premium = $query->row()->premium;
		return $premium;
	}

	public function intervaloTempo($contaContrato){
		$this->db->select('intervalo_tempo');
		$this->db->where('usuario', $contaContrato); //Onde o usuário for igual ao nome de usuário q está logado
		$query = $this->db->get('consumo_mensal');
		$intervalo_tempo = $query->row()->intervalo_tempo;
		return $intervalo_tempo;
	}
}
