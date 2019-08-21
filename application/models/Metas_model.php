<<<<<<< HEAD
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Metas_model extends CI_Model {
	//Função para salvar a meta do usuario
	public function salvar($meta=NULL, $contaContrato){
		if ($meta != NULL) {
			$this->db->set('meta', $meta);
			$this->db->where('usuario', $contaContrato);
    		$this->db->update('meta');
		}
	}

	//Função para obter a meta do usuario
	public function get_meta($contaContrato){
		if ($contaContrato != NULL) {
			$this->db->select('meta');
			$this->db->where('usuario', $contaContrato);
    		$query = $this->db->get('meta');
    		$meta = $query->row()->meta;
    		$this->session->set_userdata('meta', $meta);
		}
	}

	//Função para converter meta em khw
	public function kwh($khw=NULL, $contaContrato){
		if ($contaContrato != NULL) {
			$this->db->set('kw_h', $khw);
			$this->db->where('usuario', $contaContrato);
    		$this->db->update('meta');
		}
	}
}
=======
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Metas_model extends CI_Model {
	//Função para salvar a meta do usuario
	public function salvar($meta=NULL, $contaContrato){
		if ($meta != NULL) {
			$this->db->set('meta', $meta);
			$this->db->where('usuario', $contaContrato);
    		$this->db->update('meta');
		}
	}

	//Função para obter a meta do usuario
	public function get_meta($contaContrato){
		if ($contaContrato != NULL) {
			$this->db->select('meta');
			$this->db->where('usuario', $contaContrato);
    		$query = $this->db->get('meta');
    		$meta = $query->row()->meta;
    		$this->session->set_userdata('meta', $meta);
		}
	}

	//Função para converter meta em khw
	public function kwh($khw=NULL, $contaContrato){
		if ($contaContrato != NULL) {
			$this->db->set('kw_h', $khw);
			$this->db->where('usuario', $contaContrato);
    		$this->db->update('meta');
		}
	}
}
>>>>>>> 21720dccfa5f31846a6118137e2e729a153cc2cc
