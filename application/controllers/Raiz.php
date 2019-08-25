<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Raiz extends CI_Controller {
	public function index(){
		if (isset($_SESSION['login'])) {
			$this->load->model("Operacoes");
			$usuario = $this->session->userdata('usuario');
			$contaContrato = $this->Operacoes->contaContrato($usuario);
			$this->load->model("Consumo_model");
			$consumo['meta'] = $this->Consumo_model->meta($contaContrato);
			if($consumo['meta']!=0){
				$valor_tarifa = 0.7;
				$valor_dia = ($consumo['meta']/30)/$valor_tarifa;
				$consumo['consumo'] = $this->Consumo_model->consumo($contaContrato);
				$consumo['gasto'] = $consumo['consumo']*100/$valor_dia;
				$porcentagem = $consumo['gasto'];
				$this->load->helper('cookie');
				if ($porcentagem>=100) {
					$mensagem = "Baixa esse consumo aí fion.";
				}else{
					$mensagem = "Tá top o consumo.";
				}
				set_cookie('mensagem_meta', $mensagem, (86400));
				$titulo ="home";
			}
			$this->load->view('header_sidebar');
			$this->load->view('index', $consumo);
			$this->load->view('footer');
		}else{
			redirect('login'); 
		}	
	}

	public function consumo(){
		if (isset($_SESSION['login'])) {
			$this->load->view('header_sidebar');
			$this->load->view('consumo');
		}else{
			redirect('login?error=2'); 
		}
	}

	public function metas(){
		if (isset($_SESSION['login'])) {
			$this->load->view('header_sidebar');
			$this->load->view('metas');
		}else{
			redirect('login?error=2'); 
		}
	}

	public function idealdeconsumo(){
		if (isset($_SESSION['login'])) {
			$this->load->helper('cookie');
			if (!isset($_GET['questao'])) {
				delete_cookie("a"); delete_cookie("b"); delete_cookie("c");
			}
			$this->load->view('header_sidebar');
			$this->load->view('idealdeconsumo');
		}else{
			redirect('login?error=2'); 
		}
	}

	public function resultado(){
		if (isset($_SESSION['login'])) {
			$this->load->view('header_sidebar');
			$this->load->view('resultado');
		}else{
			redirect('login?error=2'); 
		}
	}

	public function dicas(){
		if (isset($_SESSION['login'])) {
			$this->load->model("Dicas_model");
			$dicas['dica1'] = $this->Dicas_model->exibir('a');
			$dicas['dica2'] = $this->Dicas_model->exibir('a');
			$dicas['dica3'] = $this->Dicas_model->exibir('a');
			$dicas['dica4'] = $this->Dicas_model->exibir('a');
			$dicas['dica5'] = $this->Dicas_model->exibir('b');
			$dicas['dica6'] = $this->Dicas_model->exibir('c');
			$this->load->view('header_sidebar');
			$this->load->view('dicas', $dicas);
		}else{
			redirect('login?error=2'); 
		}
	}

	public function login(){
		if (isset($_SESSION['login'])) {
			redirect('index'); 
		}else{
			$this->load->view('login');
		}
	}

	public function usuario(){
		if (isset($_SESSION['login'])) {
			$usuario = $this->session->userdata('usuario');
			$this->load->model("Operacoes");
			$dados['nome'] = $this->Operacoes->nomeCompleto($usuario);
			$dados['email'] = $this->Operacoes->email($usuario);
			$dados['contaContrato'] = $this->Operacoes->contaContrato($usuario);
			$this->load->view('header_sidebar');
			$this->load->view('usuario', $dados);
		}else{
			$this->load->view('login');
		}
	}

	public function cadastro(){
		$this->load->view('cadastro');
	}

	public function recuperarsenha(){
		$this->load->view('recuperarsenha');
	}

	public function editar_senha(){
		if (isset($_SESSION['login'])) {
			$this->load->view('header_sidebar');
			$this->load->view('editar_senha');
		}else{
			redirect('login?error=2'); 
		}
	}

	public function quemsomos(){
		if (isset($_SESSION['login'])) {
			$this->load->view('header_sidebar');
			$this->load->view('quemsomos');
		}else{
			redirect('login?error=2'); 
		}
	}

	public function simulador(){
		$this->load->view('simulador');
	}
}
