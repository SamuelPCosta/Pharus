<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consumo_model extends CI_Model {
	public function meta($usuario){
		$this->db->select('conta_contrato'); //seleciona conta contrato
		$this->db->where('usuario', $usuario);
		$query = $this->db->get('usuario');
		$conta_contrato = $query->row()->conta_contrato;
		$this->db->select('kw_h'); //Seleciona o consumo
		$this->db->where('usuario', $conta_contrato);
    	$query = $this->db->get('meta');
    	$consumo = $query->row()->kw_h; //Pega a consulta
		return $consumo; //retorna o consumo
	}

	public function exibir($usuario){
		$this->db->select('conta_contrato'); //seleciona conta contrato
		$this->db->where('usuario', $usuario);
		$query = $this->db->get('usuario');
		$conta_contrato = $query->row()->conta_contrato;
		$this->db->select('kw_h'); //Seleciona o consumo
		$this->db->where('usuario', $conta_contrato);
    	$query = $this->db->get('consumo');
    	$consumo = $query->row()->kw_h; //Pega a consulta
		return $consumo; //retorna o consumo
	}
}
