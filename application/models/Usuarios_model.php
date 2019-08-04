<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {
	public function salvar($dados=NULL, $usuario){
		if ($dados != NULL) {
			$this->db->select('usuario');
			$this->db->where('usuario', $dados['usuario']);
			$query = $this->db->get('usuario');
			$nome_de_usuario = $query->num_rows();
			if ($nome_de_usuario>0) {
				return $nome_de_usuario_existente=TRUE;
			}else{
				$this->db->insert("usuario", $dados);
				$this->db->insert("consumo", $usuario);
				$this->db->insert("meta", $usuario);
			}
		}
	}

	public function logarUsuarios($usuario,$senha){
		$this->db->where("usuario", $usuario); 
		$this->db->where("senha", $senha);
		$login = $this->db->get("usuario")->row_array();
		return $login;
	}
}
