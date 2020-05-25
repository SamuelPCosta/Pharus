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
			//echo $i;
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

	public function horasSimulacao($usuario, $array){
		$this->db->set('horas_simulacao', json_encode($array));
		$this->db->where('usuario', $usuario);  
		$this->db->update('simulacao');
	}

	public function getHorasSimulacao($usuario){
		$this->db->select('horas_simulacao');
		$this->db->where('usuario', $usuario);
		$query = $this->db->get('simulacao');
		$horas_simulacao = $query->row()->horas_simulacao;
		return $horas_simulacao;
	}

	public function aparelhosPersonalizados($usuario, $array){
		$this->db->set('aparelhos_personalizados', json_encode($array));
		$this->db->where('usuario', $usuario);  
		$this->db->update('simulacao');
	}

	public function getAparelhosPersonalizados($usuario){
		$this->db->select('aparelhos_personalizados');
		$this->db->where('usuario', $usuario);
		$query = $this->db->get('simulacao');
		$aparelhos_personalizados = $query->row()->aparelhos_personalizados;
		return $aparelhos_personalizados;
	}
	
	public function zerar($usuario,$kwhBase_horasDormidas){
		$this->db->set('kw_h', $kwhBase_horasDormidas);
		$this->db->where('usuario', $usuario);  
		$this->db->update('consumo');
	}
}
