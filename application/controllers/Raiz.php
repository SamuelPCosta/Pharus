<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Raiz extends CI_Controller {
	public function index(){
		if (isset($_SESSION['login'])) {
			$this->load->view('index');
		}else{
			redirect('login'); 
		}	
	}

	public function consumo(){
		if (isset($_SESSION['login'])) {
			$this->load->view('consumo');
		}else{
			redirect('login?error=2'); 
		}
	}

	public function metas(){
		if (isset($_SESSION['login'])) {
			$this->load->view('metas');
		}else{
			redirect('login?error=2'); 
		}
	}

	public function idealdeconsumo(){
		if (isset($_SESSION['login'])) {
			$this->load->view('idealdeconsumo');
		}else{
			redirect('login?error=2'); 
		}
	}

	public function resultado(){
		if (isset($_SESSION['login'])) {
			$this->load->view('resultado');
		}else{
			redirect('login?error=2'); 
		}
	}

	public function dicas(){
		if (isset($_SESSION['login'])) {
			$this->load->view('dicas');
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

	public function cadastro(){
		$this->load->view('cadastro');
	}

	public function recuperarsenha(){
		$this->load->view('recuperarsenha');
	}

	public function quemsomos(){
		if (isset($_SESSION['login'])) {
			$this->load->view('quemsomos');
		}else{
			redirect('login?error=2'); 
		}
	}

	public function simulador(){
		$this->load->view('simulador');
	}
}
