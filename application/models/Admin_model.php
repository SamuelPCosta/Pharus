<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	public function logarAdmin($usuario,$senha){
		$this->db->where("usuario", $usuario); 
		$this->db->where("senha", $senha);
		$this->db->where("admin", 1);
		$loginAdmin = $this->db->get("admin")->row_array();
		return $loginAdmin;
	}

	public function salvar($dados=NULL, $usuario){
		if ($dados != NULL) {
			$this->db->select('usuario');
			$this->db->where('usuario', $dados['usuario']);
			$query = $this->db->get('admin');
			$nome_de_usuario = $query->num_rows(); //Obtem o número de linhas
			if ($nome_de_usuario>0) {//Se for >0, o nome de usuário já existe
				return $nome_de_usuario_existente=TRUE;
			}else{
				$this->db->insert("admin", $dados);//Insere os dados na tabela admin
			}
		}
	}
}
