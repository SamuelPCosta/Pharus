<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Metas_model extends CI_Model {
	public function salvar($meta=NULL, $usuario){
		if ($meta != NULL) {
			$this->db->select('conta_contrato');
			$this->db->where('usuario', $usuario);
			$query = $this->db->get('usuario');
			$conta_contrato = $query->row()->conta_contrato;
			//foreach ($query->result() as $row){} Modo antigo
			//$this->db->where('usuario', $row->conta_contrato);
			$this->db->set('meta', $meta);
			$this->db->where('usuario', $conta_contrato);
    		$this->db->update('meta');
		}
	}

	//Função para obter a meta do usuario
	public function get_meta($usuario){
		if ($usuario != NULL) {
			$this->db->select('conta_contrato');
			$this->db->where('usuario', $usuario);
			$query = $this->db->get('usuario');
			$conta_contrato = $query->row()->conta_contrato;

			$this->db->select('meta');
			$this->db->where('usuario', $conta_contrato);
    		$query = $this->db->get('meta');
    		$meta = $query->row()->meta;
    		$this->session->set_userdata('meta', $meta);
		}
	}
}
