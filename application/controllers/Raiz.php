<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Raiz extends CI_Controller {
	public function index(){
		if (isset($_SESSION['login'])) {
			$this->load->model("Operacoes");
			$usuario = $this->session->userdata('usuario');
			$contaContrato = $this->Operacoes->contaContrato($usuario);
			$this->load->model("Consumo_model");
			$consumo['meta'] = $this->Consumo_model->SelecionarMeta($contaContrato);
			if($consumo['meta']!=0){
				//$valor_tarifa = 0.7; //Atualizar com base na tarifa local
				date_default_timezone_set('America/Sao_Paulo'); 
				if(date('m')==2){
					$qtd_dias=28;
					$ano = date('Y');
					if (($ano/4)==0 && ($ano/100)!=0) {//Conferir se o ano e bissexto
						$qtd_dias=29;
					}
				}elseif(date('m')==4 || date('m')==6 || date('m')==9 || date('m')==11){
					$qtd_dias=30;
				}else{
					$qtd_dias=31;
				}
				$valor_dia = ($consumo['meta']/$qtd_dias);
				$consumo['consumo'] = $this->Consumo_model->SelecionarConsumo($contaContrato);
				$consumo['gasto'] = $consumo['consumo']*100/$valor_dia;
				$porcentagem = $consumo['gasto'];
				$this->load->helper('cookie');
				if ($porcentagem>=100) {
					$this->session->set_userdata('mensagem', "Você precisa melhorar seu consumo!");
				}else{
					$this->session->set_userdata('mensagem', "Seu consumo está ótimo!");
				}
				if (date('d')==1) {
					$this->conferirMeta($contaContrato);
				}
				//set_cookie('mensagem_meta', $mensagem, (86400));		
			}
			$title['titulo'] ="Home";
			$this->load->view('header_sidebar', $title);
			$this->load->view('index', $consumo);
			$this->load->view('footer');
		}else{
			redirect('login'); 
		}	
	}

	public function AdminIndex(){
		if (isset($_SESSION['admin'])) {
			$this->load->view('Admin/index');
		}else{
			redirect('login-administrador?error=2'); 
		}
	}

	public function consumo(){
		date_default_timezone_set('America/Sao_Paulo');
		if (isset($_SESSION['login'])) {
			$title['titulo'] ="Consumo";
			$this->load->view('header_sidebar', $title);
			$this->load->view('consumo');
			$this->load->view('footer');
		}else{
			redirect('login?error=2'); 
		}
	}

	public function metas(){
		if (isset($_SESSION['login'])) {
			$title['titulo'] ="Metas";
			$this->load->view('header_sidebar', $title);
			$this->load->view('metas');
			$this->load->view('footer');
		}else{
			redirect('login?error=2'); 
		}
	}

	public function conferirMeta($contaContrato){
		$this->load->model("Consumo_model");
		$metaTotal = $this->Consumo_model->SelecionarMeta($contaContrato);
		$consumoTotal = $this->Consumo_model->SelecionarConsumoTotal($contaContrato);
		if ($metaTotal>=$consumoTotal) {
			$this->session->set_userdata('conferirMeta','cumpriu');
			$this->session->set_userdata('mensagem', "Parabéns por cumprir a meta!");
		}else{
			$this->session->set_userdata('conferirMeta','não cumpriu');
			$this->session->set_userdata('mensagem', "Boa sorte nesse mês!");
		}
	}

	public function notificacao(){
		if ($_POST["btn"]=="salvar") {
			$horario = $this->input->post("horario"); //Recebe horario inserido
			$horas = substr($horario, 0, 2); //Quebra em horas
			$minutos = substr($horario, 3, 2); //E em minutos
			$this->session->set_userdata('horas', $horas);
			$this->session->set_userdata('minutos', $minutos);
			$this->session->set_userdata('notificacao', 'Ativada'); 
			//Salva em session o que vai definir ao final da view se a notificacao esta ativa ou nao
			//Nesse caso ela sera ativada
		}else{
			unset($_SESSION['notificacao']);
			//Destruindo essa sesseion nos desativamos a notificacao
		}	
		redirect('metas');
	}

	public function idealdeconsumo(){
		if (isset($_SESSION['login'])) {
			$this->load->helper('cookie');
			if (!isset($_GET['questao'])) {
				delete_cookie("a"); delete_cookie("b"); delete_cookie("c");
			}
			$title['titulo'] ="Ideal de consumo";
			$this->load->view('header_sidebar', $title);
			$this->load->view('idealdeconsumo');
			$this->load->view('footer');
		}else{
			redirect('login?error=2'); 
		}
	}

	public function resultado(){
		if (isset($_SESSION['login'])) {
			$title['titulo'] ="Resultado";
			$this->load->view('header_sidebar', $title);
			$this->load->view('resultado');
			$this->load->view('footer');
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
			$title['titulo'] ="Dicas";
			$this->load->view('header_sidebar', $title);
			$this->load->view('dicas', $dicas);
			$this->load->view('footer');
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

	public function loginAdmin(){
		if (isset($_SESSION['login'])) {
			redirect('index'); 
		}else{
			$this->load->view('loginAdmin');
		}
	}

	public function usuario(){
		if (isset($_SESSION['login'])) {
			$usuario = $this->session->userdata('usuario');
			$this->load->model("Operacoes");
			$dados['nome'] = $this->Operacoes->nomeCompleto($usuario);
			$dados['email'] = $this->Operacoes->email($usuario);
			$dados['contaContrato'] = $this->Operacoes->contaContrato($usuario);
			$dados['tarifa'] = $this->Operacoes->tarifa($usuario);
			$title['titulo'] ="Usuário";
			$this->load->view('header_sidebar', $title);
			$this->load->view('usuario', $dados);
			$this->load->view('footer');
		}else{
			$this->load->view('login');
		}
	}

	public function salvarimg(){
	    $curriculo    = $_FILES['foto'];
	    $usuario = $this->session->userdata('usuario');
	    $config = array(
	        'upload_path'   => './assets/fotos/',
	        'allowed_types' => 'png|jpg|jpeg',
	        'overwrite'		=> TRUE,
	        'file_name'     => 'profile_'.$usuario.'.png',
	        //'file_name'     => 'foto_user'.'.png',
	        'max_size'      => '5000',
	        'max_width:'    => '2000',
	        'max_height:'   => '2000'
	    );      
	    $this->load->library('upload');
	    $this->upload->initialize($config);
	    if ($this->upload->do_upload('foto')){
	        echo 'Arquivo salvo com sucesso.';
	    	redirect('usuario');
	    }else{
	        echo $this->upload->display_errors();
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
			$title['titulo'] ="Editar senha";
			$this->load->view('header_sidebar', $title);
			$this->load->view('editar_senha');
			$this->load->view('footer');
		}else{
			redirect('login?error=2'); 
		}
	}

	public function quemsomos(){
		if (isset($_SESSION['login'])) {
			$title['titulo'] ="Quem somos";
			$this->load->view('header_sidebar', $title);
			$this->load->view('quemsomos');
		}else{
			redirect('login?error=2'); 
		}
	}

	public function notFound(){
		if (isset($_SESSION['login'])) {
			$title['titulo'] ="Erro 404";
			$this->load->view('404', $title);
		}else{
			redirect('login?error=2'); 
		}
	}

	public function simulador(){
		$this->load->view('simulador');
	}


	public function monitorarConsumo(){
	//Criar uma array q implementa o consumo de hora em hora e ao final do dia é destruido
		date_default_timezone_set('America/Sao_Paulo');
		if (isset($_SESSION['consumo'])){
			//echo date('H');
			if(date('H')==1){
				unset($consumoPorHora);
				unset($_SESSION['consumo']);
			?>
				<script>
				localStorage.removeItem('consumo');
				</script>
			<?php
				$this->load->model("Operacoes");
				$usuario = $this->session->userdata('usuario');
				$contaContrato = $this->Operacoes->contaContrato($usuario);
				$this->load->model("Consumo_model");
				$consumo=$this->Consumo_model->SelecionarConsumo($contaContrato);	
				$consumoPorHora[] = $consumo;
				$this->session->set_userdata('consumo', $consumoPorHora);
				//print_r($consumoPorHora); conferir adição de valores 
			}else{
				//for ($i=0; $i <23; $i++) { Se o cron for implementado isso se torna desnecessario
				$this->load->model("Operacoes");
				$usuario = $this->session->userdata('usuario');
				$contaContrato = $this->Operacoes->contaContrato($usuario);
				$this->load->model("Consumo_model");
				$consumoPorHora = $this->session->userdata('consumo');
				$consumoPrevio=array_sum($consumoPorHora);
				$consumo=$this->Consumo_model->SelecionarConsumo($contaContrato);	
				$consumo=$consumo-$consumoPrevio;
				$consumo=number_format($consumo,3);
				array_push($consumoPorHora, $consumo);
				$this->session->set_userdata('consumo', $consumoPorHora);
				//print_r($consumoPorHora); conferir adição de valores 
				//unset($_SESSION['consumo']);
			}
			//}
		}else{
			$this->load->model("Operacoes");
			$usuario = $this->session->userdata('usuario');
			$contaContrato = $this->Operacoes->contaContrato($usuario);
			$this->load->model("Consumo_model");
			$consumo=$this->Consumo_model->SelecionarConsumo($contaContrato);	
			$consumoPorHora[date('H')] = $consumo;
			$this->session->set_userdata('consumo', $consumoPorHora);
			// print_r($consumoPorHora); conferir adição de valores
		}
		//redirect('monitor');
		// print_r($consumoPorHora);
		// echo date('H:i:s');
	}

	public function adicionarConsumo(){
		date_default_timezone_set('America/Fortaleza');
		$horas = date('H');
		$simulador = $this->session->userdata('totalSimulador');
		$usuario = $this->session->userdata('contaContratoSimulador');
		$this->load->model("Consumo_model");
		$previo = $this->Consumo_model->SelecionarConsumo($usuario);
		$qtd_consumida = $simulador/24;
		if ($horas>9 && $horas<22) {
			$porcentagem = rand(2,20);
			$margem = ($qtd_consumida/100)*$porcentagem;
		}else{
			$porcentagem = rand(2,20);
			$margem = -($qtd_consumida/100)*$porcentagem;
		}
		$TotalInserir=$qtd_consumida+$margem+$previo;
		if (($qtd_consumida+$margem+$previo)>$simulador) {
			$TotalInserir=$simulador;
		}
		$this->load->model("Admin_model");
		$this->Admin_model->adicionarConsumo($usuario, $TotalInserir);
		$this->load->model("Consumo_model");
		$previo = $this->Consumo_model->SelecionarConsumo($usuario);
		$this->session->set_userdata('totalInserir', ($simulador-$previo));
		//$novoTotal = $simulador-$TotalInserir;
		$this->monitorarConsumo();
		redirect('simuladorAtualizar');
	}

	public function consumir(){
		$consumo=[];
		$horas=$this->input->post("horas");
		$potencia=$this->input->post("potencia");
		$i=0;
		foreach ($horas as $aparelho) {
			if(empty($horas[$i])){
				$horas[$i]=0;
			}
			$consumo[] = $potencia[$i]*$horas[$i];
			array_sum($consumo);
			$i++;
			//print_r($consumo); Ver produto por indice
		}
		$consumokwh = array_sum($consumo)/1000;
		//echo "Soma: ".$consumokwh; conferir manualmente
		$this->session->set_userdata('totalSimulador', $consumokwh);
		$usuario=$this->input->post("usuario");
		//converter conta contrato
		$this->session->set_userdata('usuarioSimulado', $usuario);
		$this->load->model("Operacoes");
		$contaContrato = $this->Operacoes->contaContrato($usuario);
		$this->session->set_userdata('contaContratoSimulador', $contaContrato);
		$this->adicionarConsumo();
		redirect('simuladorAtualizar');
	}
}
