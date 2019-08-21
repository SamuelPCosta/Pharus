<<<<<<< HEAD
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dicas_model extends CI_Model {
	public function exibir($letra){ //Recebe uma letra q indica o tamanho da dica (a, b ou c)
		$query = $this->db->get('dicas'); //consulta na table dicas
		$ndicas = $query->num_rows(); //numero de regitro na table dicas
		$ndicas = rand(1, $ndicas); //sorteio de um número entre 1 e o número de registros
		//echo $ndicas." "; //Veja os números sorteados no topo

		$this->db->select('dica_'.$letra); //Seleciona uma dica 
		$this->db->where('id_dicas', $ndicas); //com a id = ao número sorteado
		$query = $this->db->get('dicas'); 
		$dica = 'dica_'.$letra; //altera de forma dinâmica a letra da dica
		$dica = $query->row()->$dica; //Pega a consulta
		return $dica; //retorna a consulta
	}
}
=======
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dicas_model extends CI_Model {
	public function exibir($letra){ //Recebe uma letra q indica o tamanho da dica (a, b ou c)
		$query = $this->db->get('dicas'); //consulta na table dicas
		$ndicas = $query->num_rows(); //numero de regitro na table dicas
		$ndicas = rand(1, $ndicas); //sorteio de um número entre 1 e o número de registros
		//echo $ndicas." "; //Veja os números sorteados no topo

		$this->db->select('dica_'.$letra); //Seleciona uma dica 
		$this->db->where('id_dicas', $ndicas); //com a id = ao número sorteado
		$query = $this->db->get('dicas'); 
		$dica = 'dica_'.$letra; //altera de forma dinâmica a letra da dica
		$dica = $query->row()->$dica; //Pega a consulta
		return $dica; //retorna a consulta
	}
}
>>>>>>> 21720dccfa5f31846a6118137e2e729a153cc2cc
