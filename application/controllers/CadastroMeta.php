<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastroMeta extends CI_Controller {
	public function adicionar(){
		if($this->session->userdata('meta')==$this->input->post("meta")){
			redirect('metas?error=1');
		}
		$this->load->model("Operacoes");
		$meta = $this->input->post("meta");

		if ($meta>=20 && $meta<=10000) { //Se a meta do usuario for maior ou = a 20 e menor ou = a 2500
			//$meta = array('a'); //criar um erro pra parar a execução
			$this->load->model("Usuarios_model");
			$usuario = $this->session->userdata('usuario');
			$faixa = $this->Usuarios_model->getFaixa($usuario);
			if ($faixa==1) {
				$faixa = 400; //um valor alterar aqui e no controller questionario
			}elseif ($faixa==2) {
				$faixa = 210;
			}elseif ($faixa==3) {
				$faixa = 300;
			}
			$limitePelaFaixa = $faixa+(40/100*$faixa);//Quantos % acima da faixa pode ser definido como meta para evitar trapaças
			if ($meta<=$limitePelaFaixa){
				$contaContrato = $this->Operacoes->contaContrato($usuario);
				$this->load->model("Metas_model");
				$this->Metas_model->salvar($meta, $contaContrato);
				$this->load->model("Operacoes");
				$tarifa = $this->Operacoes->tarifa($usuario);
				$bandeira = $this->Operacoes->bandeira($contaContrato);
				$valor_tarifa = $tarifa; //Preciso ajustar a funcao da bandeira, antes tava $bandeira+$tarifa;
				$imposto = 38.2; //Quem tem consumo acimda de 300kwh paga isso
				$testemeta = $meta-(($imposto/100)*$meta);
				if ($testemeta/$tarifa > 300) {//300 e o limite para n pagar icms	
				}elseif($testemeta/$tarifa > 100){
					$imposto = 30.56;
					$testemeta = $meta-(($imposto/100)*$meta);
					if ($testemeta/$tarifa > 300) {
						$imposto = 38.2;
					}
				} else{//Quem tem consumo abaixo de 300kwh paga isso
				$imposto = 0;} //Quem tem consumo abaixo de 100kwh paga isso
				//$meta = ($meta*100)/(100+$imposto);
				echo $imposto;
				$meta = $meta-(($imposto/100)*$meta); //Desfazer o acrescimo de imposto
				$khw = ceil ($meta/$valor_tarifa); //ceil arredonda pra cima
				$this->session->set_userdata('imposto', $imposto);
				$this->Metas_model->kwh($khw, $contaContrato);

				//Obter meta
				$this->Metas_model->get_meta($contaContrato); //Chama a função get meta dentro do modelo metas_model
				$this->session->set_userdata('mensagem', "Fique de olho no seu consumo!");
				redirect('metas'); 
			}else{
				redirect('metas?error=2');
			}
		}else{
			redirect('metas?error=1');
			//Aqui ficará o erro para redirecionar e informar ao usuário que a meta dele deve ser no mínimo 20 
		}	
	}
}