<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conquistas_model extends CI_Model {
	public function conquista2($contaContrato){
		$this->db->select('usuario'); //Seleciona conta contrato
		$this->db->where('usuario', $contaContrato); //Onde o usuário for igual ao nome de usuário q está logado
		$query = $this->db->get('simulacao');
		$ativo =  $query->num_rows();
		if ($ativo>0) {//Se for >0 o usuário já tem simulacao
			$resposta="true";
		}else{
			$resposta="false";
		}
		return $resposta;
	}

	public function conquista3($contaContrato){
		$this->db->select('usuario'); //Seleciona conta contrato
		$this->db->where('usuario', $contaContrato); //Onde o usuário for igual ao nome de usuário q está logado
		$query = $this->db->get('simulacao');
		$ativo =  $query->num_rows();
		if ($ativo>0) {//Se for >0 o usuário já tem simulacao
			$resposta="false"; //removi o true porque essa funcao e de teste
		}else{
			$resposta="false";
		}
		return $resposta;
	}
}
?>