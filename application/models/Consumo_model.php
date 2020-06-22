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
	    $diario=0;
	    $totalDiario=0;
	    $inativos=0;
	    $usuarioInativo=0;
	    for ($i=0; $i <$nUsersFaixa ; $i++) { 
	    	$this->db->select('kw_h_total');

	    	if($minhafaixa!=null) {
	    		$this->db->where("usuario", $usuarios->result_array()[$i]['conta_contrato']);
				$query = $this->db->get('consumo_mensal');
				$consumoTotal = $query->row()->kw_h_total;
				//echo $nUsersFaixa;

				$usuarioAtual = $usuarios->result_array()[$i]['conta_contrato'];
				if ($consumoTotal==0) {
					$usuarioInativo=1;
				}else{
					for ($j=0; $j < 24; $j++) { 
						$this->db->select('hora'.$j);
						$this->db->where('usuario', $usuarioAtual);  
						$query = $this->db->get('simulacao');
						$hora = "hora".$j;
						$valor[] = $query->row()->$hora;
						$diario = array_sum(array_slice($valor, 0, date('H')));
					}
				}

				$totalDiario=$totalDiario+$diario;
				$total=$total+$consumoTotal+$totalDiario;
				$inativos=$inativos+$usuarioInativo;
				//echo "<br>consumoTotal: ".$consumoTotal;
				//echo "<br>".$total;
	    	}else{return "-";}
	    }
		$media = $total/($nUsersFaixa-$usuarioInativo);
	    return $media;
	}
}
