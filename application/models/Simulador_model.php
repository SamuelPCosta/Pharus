<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simulador_model extends CI_Model {
	public function adicionarConsumo($usuario, $TotalInserir){
		$this->db->set('kw_h', $TotalInserir);
		$this->db->where('usuario', $usuario);  
		$this->db->update('consumo');
	}

	public function ativarSimulacao($usuario){
		$inserirContaContrato = array(
			'usuario' => $usuario
		);
		$this->db->insert("simulacao", $inserirContaContrato);
	}

	public function backupSimulador($usuario, $array){
		$i=0;
		foreach ($array as $key) {
			echo $i;
			$this->db->set('hora'.$i, $array[$i]);
			$this->db->where('usuario', $usuario);  
			$this->db->update('simulacao');
			$i++;
		}
	}

	public function checharUsuarioSimulcao($usuario){
		$this->db->select('usuario'); //Seleciona conta contrato
		$this->db->where('usuario', $usuario); //Onde o usuário for igual ao nome de usuário q está logado
		$query = $this->db->get('simulacao');
		$ativo =  $query->num_rows();
		if ($ativo>0) {//Se for >0 o usuário já tem simulacao
			return $ativo=TRUE;
		}
	}

	public function getBackupSimulador($usuario){
		if ($usuario != NULL) {
			for ($i=0; $i < 24; $i++) { 
				$this->db->select('hora'.$i);
				$this->db->where('usuario', $usuario);  
				$query = $this->db->get('simulacao');
				$hora = "hora".$i;
				$valor[] = $query->row()->$hora;	
			}$this->session->set_userdata('simulacaoBackup'.$usuario, $valor);
		}else{
			return NULL;
		}
	}

	public function zerar($usuario,$kwhBase_horasDormidas){
		$this->db->set('kw_h', $kwhBase_horasDormidas);
		$this->db->where('usuario', $usuario);  
		$this->db->update('consumo');
	}
}
