<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consumo_model extends CI_Model {
	public function SelecionarMeta($contaContrato){
		$this->db->select('kw_h'); //Seleciona o consumo
		$this->db->where('usuario', $contaContrato);
    	$query = $this->db->get('meta');
    	$consumo = $query->row()->kw_h; //Pega a consulta
		return $consumo; //retorna o consumo
	}

	public function SelecionarConsumo($contaContrato){ //Selecionar o consumo até o momento
		$this->db->select('kw_h'); //Seleciona o consumo
		$this->db->where('usuario', $contaContrato);
    	$query = $this->db->get('consumo');
    	$consumo = $query->row()->kw_h; //Pega a consulta
		return $consumo; //retorna o consumo
	}
	
	public function SelecionarConsumoTotal($contaContrato){ //Selecionar o consumo até o momento
		$this->db->select('kw_h_total'); //Seleciona o consumo
		$this->db->where('usuario', $contaContrato);
    	$query = $this->db->get('consumo_mensal');
    	$consumoTotal = $query->row()->kw_h_total; //Pega a consulta
		return $consumoTotal; //retorna o consumo
	}

	public function inserirConsumoTotal($inserirTotal, $contaContrato){ //Selecionar o consumo até o momento
		$this->db->set('kw_h_total', $inserirTotal); //Seleciona o consumo
		$this->db->where('usuario', $contaContrato);
		$this->db->update('consumo_mensal');
	}

	public function mediaFaixa($usuario,$minhafaixa){
		$this->db->select('usuario');
		$this->db->where('faixa', $minhafaixa);
		$query = $this->db->get('usuario');
		$nUsersFaixa = $query->num_rows(); //Obtem o número de linhas

		$this->db->select('conta_contrato');
		$this->db->where("faixa", $minhafaixa);
	    $usuarios = $this->db->get('usuario');
	    $total=0;
	    $inativos=0;
	    $usuarioInativo=0;
	    for ($i=0; $i <$nUsersFaixa ; $i++){ 
	    	$this->db->select('kw_h_total');
			$this->db->where('usuario', $usuario);
			$query = $this->db->get('consumo_mensal');
	    	//$this->db->select('kw_h_total');
	    	//Preciso pegar esse valor, mas n na tabela usuario

	    	if($minhafaixa!=null) {
	    		$this->db->where("usuario", $usuarios->result_array()[$i]['conta_contrato']);
				$query = $this->db->get('consumo_mensal');
				$consumoTotal = $query->row()->kw_h_total;
				//echo $nUsersFaixa;

				$usuarioAtual = $usuarios->result_array()[$i]['conta_contrato'];
				if ($consumoTotal==0) {
					$usuarioInativo=1;
				}

				$total=$total+$consumoTotal;
				$inativos=$inativos+$usuarioInativo;
				//echo "<br>consumoTotal: ".$consumoTotal;
				//echo "<br>".$total;
	    	}else{return 0;}
	    }
	    if ($nUsersFaixa-$usuarioInativo==0) {
	    	$media = 0;
	    }else{
	    	$media = $total/($nUsersFaixa-$usuarioInativo);
	    }
	    return $media;
	}
}
