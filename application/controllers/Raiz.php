<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Raiz extends CI_Controller {
	public function index(){
		if (isset($_SESSION['login'])) {
			$this->load->model("Operacoes");
			$usuario = $this->session->userdata('usuario');
			$contaContrato = $this->Operacoes->contaContrato($usuario);
			$this->inserirConsumo($contaContrato);
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
			$this->ChecarPreminum();
			$title['titulo'] ="Home";
			$this->load->view('header_sidebar', $title);
			$this->load->view('index', $consumo);
			$this->load->view('footer');
		}else{
			redirect('login'); 
		}	
	}

	public function ChecarPreminum(){
		$this->load->model("Operacoes");
		$usuario = $this->session->userdata('usuario');
		$premium = $this->Operacoes->premium($usuario);
		if ($premium) {
			$this->session->set_userdata('premium', true);
		}
	}

	public function visaogeral(){
		if (isset($_SESSION['login'])) {
			$title['titulo'] ="Visão Geral";
			$this->load->view('header_sidebar', $title);
			$this->load->view('visaogeral');
			$this->load->view('footer');
		}else{
			redirect('login?error=2'); 
		}
	}

	public function consumo(){
		date_default_timezone_set('America/Sao_Paulo');
		if (isset($_SESSION['login'])) {
			$usuario = $this->session->userdata('usuario');
			$this->load->model("Operacoes");//converter conta contrato
			$contaContrato['usuario'] = $this->Operacoes->contaContrato($usuario);
			$title['titulo'] ="Consumo";
			$this->inserirConsumo($this->Operacoes->contaContrato($usuario));
			$this->load->view('header_sidebar', $title);
			$this->load->view('consumo', $contaContrato);
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
			$this->load->model("Usuarios_model");
			$faixa = $this->Usuarios_model->getFaixa($this->session->userdata('usuario'));
			if ($faixa==1) {
				$this->session->set_userdata('faixa', "122 e 155"); //dois valores alterar aqui e no controller questionario
			}elseif ($faixa==2) {
				$this->session->set_userdata('faixa', "156 e 210");
			}elseif ($faixa==3) {
				$this->session->set_userdata('faixa', "211 e 300");
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

	public function atualize(){
		if ($this->session->userdata('premium')==TRUE) {
			$this->notFound();
		}else{
			if (isset($_SESSION['login'])) {
				$title['titulo'] ="Atualize sua conta";
				$this->load->view('header_sidebar', $title);
				$this->load->view('atualize');
				$this->load->view('footer');
			}else{
				redirect('login?error=2'); 
			}
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

	public function conquistas(){
		if (isset($_SESSION['login'])) {
			$title['titulo'] ="Conquistas";
			$this->load->view('header_sidebar', $title);
			$this->load->view('conquistas');
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
	        'max_size'      => '10000',
	        'max_width:'    => '5000',
	        'max_height:'   => '5000'
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
			$this->load->view('footer');
		}else{
			redirect('login?error=2'); 
		}
	}

		public function parceiros(){
		if (isset($_SESSION['login'])) {
			$title['titulo'] ="Nossos parceiros";
			$this->load->view('header_sidebar', $title);
			$this->load->view('parceiros');
			$this->load->view('footer');
		}else{
			redirect('login?error=2'); 
		}
	}

	public function contato(){
		if (isset($_SESSION['login'])) {
			$title['titulo'] ="Contato";
			$this->load->view('header_sidebar', $title);
			$this->load->view('contato');
			$this->load->view('footer');
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
		if (isset($_SESSION['login'])) {
			$this->load->model("Operacoes");//converter conta contrato
			$usuario = $this->session->userdata('usuario');
			$contaContrato = $this->Operacoes->contaContrato($usuario);
			$dados['contaContrato'] ="Quem somos";
			$title['titulo'] ="Simulador";
			$this->load->view('header_sidebar', $title);
			$this->load->view('simulador',$dados);
			$this->load->view('footer');
		}else{
			redirect('login?error=2'); 
		}
	}

//Todo o codigo abaixo é destinado a simulacao de consumo, seja por meio do cadastro de aparelhos ou leitura manual
//Todo o codigo abaixo é destinado a simulacao de consumo, seja por meio do cadastro de aparelhos ou leitura manual
//Todo o codigo abaixo é destinado a simulacao de consumo, seja por meio do cadastro de aparelhos ou leitura manual
//Todo o codigo abaixo é destinado a simulacao de consumo, seja por meio do cadastro de aparelhos ou leitura manual
//Todo o codigo abaixo é destinado a simulacao de consumo, seja por meio do cadastro de aparelhos ou leitura manual

	public function criarSimulacao(){
		$usuario = $this->session->userdata('usuario');
		$this->load->model("Operacoes");//converter conta contrato
		$contaContrato = $this->Operacoes->contaContrato($usuario);
		$simulador = $this->session->userdata('totalSimulador'.$contaContrato);
		//echo $simulador."<br>";
		if (isset($_SESSION['leitura'])) {
			$leitura = $this->session->userdata('leitura');
			if (isset($_SESSION['totalSimulador'.$contaContrato])) {
				$TotalDia = ($leitura+$simulador)/2; //media ponderada entre leitura e simulador
			} else {
				$TotalDia = $leitura;
			}
		} else {
			$TotalDia = $simulador;
		}
		//echo $TotalDia."<br>";

		//Variaveis
		$this->load->model("Usuarios_model");
		if ($this->Usuarios_model->getHorasDormidas($contaContrato)!=NULL) {
			$horasDormidas = $this->Usuarios_model->getHorasDormidas($contaContrato);
		}else{
			$horasDormidas = 8;
		}
		if ($this->Usuarios_model->getHoraInicial($contaContrato)!=NULL) {
			$horaInicialDeSono = $this->Usuarios_model->getHoraInicial($contaContrato);
		}else{
			$horaInicialDeSono = 22;
		}
		if ($this->Usuarios_model->getBaseDormindo($contaContrato)!=NULL) {
			$kwhBase_horasDormidas = $this->Usuarios_model->getBaseDormindo($contaContrato);
		}else{
			$kwhBase_horasDormidas = 0.022;
			//$this->session->set_userdata('kwhBase_horasDormidas'.$contaContrato, 0.022);
		}
		if (24-$horaInicialDeSono>0) {
			$horaFinalDeSono = $horasDormidas-(24-$horaInicialDeSono);
		}else{
			$horaFinalDeSono = $horasDormidas;
		}
		//$kwhBase_horasDormidas = $this->session->userdata('kwhBase_horasDormidas'.$contaContrato); //Substituir aqui para alterar o consumo durante a noite
		$consumoDormindo = $kwhBase_horasDormidas*$horasDormidas;
		$consumoAcordado = $TotalDia-$consumoDormindo;
		$qtd_consumidaMedia = $consumoAcordado/(24-$horasDormidas);
		echo "<br>".$horasDormidas;
		echo "<br>".$horaInicialDeSono;
		echo "<br>".$kwhBase_horasDormidas;
		//echo $qtd_consumidaMedia;
		//aqui embaixo que a magica vai acontecer
		do {
			for ($i=0; $i <24 ; $i++) { 
				if ($i>$horaInicialDeSono || $i<=$horaFinalDeSono) {//Dormindo
					$consumo = $kwhBase_horasDormidas;
				}elseif($i>=18 && $i<=$horaInicialDeSono) {//Acordado em pico
					$porcentagem = rand(150,160);
					$consumo = ($qtd_consumidaMedia/100)*$porcentagem;
				}else{//Acordado fora de pico
					$porcentagem = rand(60,70); 
					$consumo = ($qtd_consumidaMedia/100)*$porcentagem; //Erro1: quando calculo o resultado fica maior q no horario de pico
				}
				$consumoSimuladoPorHora[] = number_format($consumo, 3);
			}
			$gabarito = array_sum($consumoSimuladoPorHora);
		} while ($gabarito > $TotalDia);//|| $gabarito < $TotalDia-$TotalDia*10/100 -- atualmente a margem de erro é 18%
		echo $gabarito." - Gabarito<br>";
		echo $TotalDia." - TotalDia<br>";
		$this->session->set_userdata('consumo'.$contaContrato, $consumoSimuladoPorHora); //Array com simulacao
		$arrayBackup = $this->session->userdata('consumo'.$contaContrato);
		$this->load->model("Simulador_model");

		$simulcaoAtiva = $this->Simulador_model->checharUsuarioSimulcao($contaContrato);
		if ($simulcaoAtiva==true) {
			$this->Simulador_model->getBackupSimulador($contaContrato);
			$backupSimulador = $this->session->userdata('simulacaoBackup'.$contaContrato);
		}else{$simulcaoAtiva=false;$this->Simulador_model->ativarSimulacao($contaContrato);}
		
		$this->Simulador_model->backupSimulador($contaContrato,$arrayBackup);
		//unset($_SESSION['reiniciado'.$contaContrato]); 
		//$this->session->set_userdata('reiniciado'.$contaContrato, true);
		$this->inserirConsumo($contaContrato);
		redirect('consumo');
	}

	public function consumir(){//Faz a somatória do simulador e depois joga pra simulacao propriamente dita
		$consumo=[];
		$horas=$this->input->post("horas");
		$potencia=$this->input->post("potencia");
		$qntd=$this->input->post("qntd");
		$i=0;
		foreach ($horas as $aparelho) {
			if(empty($horas[$i])){
				$horas[$i]=0;
			}
			$consumo[] = $potencia[$i]*$horas[$i]*$qntd[$i];
			array_sum($consumo);
			$i++;
			//print_r($consumo); Ver produto por indice
		}
		$consumokwh = array_sum($consumo)/1000;
		//echo "Soma: ".$consumokwh; conferir manualmente
		$usuario=$this->session->userdata('usuario');
		$this->load->model("Operacoes");//converter conta contrato
		$contaContrato = $this->Operacoes->contaContrato($usuario);
		$this->session->set_userdata('totalSimulador'.$contaContrato, $consumokwh);
		$personalizados=$this->input->post("personalizados");
		$this->session->set_userdata('personalizados', $personalizados);
		$this->criarSimulacao();
	}

	public function leituras(){
		if ($_POST["btn"]=="salvar") {
			$leitura = $this->input->post("leitura"); //Recebe a leitura inserida
			date_default_timezone_set('America/Fortaleza');
			$minutos = (date('H')*60)+date('i');
			//echo $minutos;
			$minutosTotais = 1440; //minutos em um dia
			$porcentagemDia = ($minutos/$minutosTotais)*100;
			$estimativaLeitura = ($leitura*100)/$porcentagemDia;
			//echo $estimativa;
			$this->session->set_userdata('leitura', $estimativaLeitura);
			$this->criarSimulacao();
		}
	}

	public function inserirConsumo($contaContrato){
		date_default_timezone_set('America/Fortaleza');

		$this->load->model("Simulador_model");
		$simulcaoAtiva = $this->Simulador_model->checharUsuarioSimulcao($contaContrato);
		if ($simulcaoAtiva==true) {
			$this->Simulador_model->getBackupSimulador($contaContrato);
			$backupSimulador = $this->session->userdata('simulacaoBackup'.$contaContrato);
		}else{$simulcaoAtiva=false;}
		
		if (isset($_SESSION['simulacaoBackup'.$contaContrato]) && $simulcaoAtiva==true){
			$simulacao = $backupSimulador;
			$this->load->model("Consumo_model");
			$meta = $this->Consumo_model->SelecionarMeta($contaContrato);
			if ($meta!=NULL && $meta!=0) {
				if(date('H')==0){
					$totalAteHoraH = array_slice($simulacao, 0, 24);
					$totalInserir = array_sum($totalAteHoraH);
					$this->load->model("Simulador_model");
					$this->Simulador_model->adicionarConsumo($contaContrato, $totalInserir);
				}else{
					$totalAteHoraH = array_slice($simulacao, 0, date('H'));
					$totalInserir = array_sum($totalAteHoraH);
					//echo "<br>inserindo valor correspondente a hora".$totalInserir;
					$this->load->model("Simulador_model");
					$this->Simulador_model->adicionarConsumo($contaContrato, $totalInserir);
				}	
			}	
		}
	}

	//Criar uma funcao pra jogar do consumo diario pro mensal
	//
	//Add coluna dia na tabela simulacao pra ter a referencia de qndo foi criada a ultima simulacao
	//Na tabela consumo pegar kw_h_total e intervalo_tempo
	//Toda vez q abrir o index ou consumo chamar funcao para checar há qntos dias foi add no consumo mensal
	//$simulacao = $this->session->userdata('consumo'.$contaContrato);
	//Somar valor kw_h_total com (array_sum($simulacao)*(dia atual-intervalo_tempo))
	//Add no consumo mensal

	// public function zerarArray($contaContrato){
	// 	unset($_SESSION['inserirPorHora'.$contaContrato]);
	// 	unset($_SESSION['consumo'.$contaContrato]);
	// 	unset($_SESSION['totalSimulador'.$contaContrato]);
	// 	<?php
	// 		<script>
	// 		localStorage.removeItem('consumo');
	// 		</script>
	// 	<?php
	// 	$consumoSimuladoPorHora[] = 0;
	// 	$this->session->set_userdata('consumo'.$contaContrato, $consumoSimuladoPorHora);
	// }

	// public function zerar(){
	// 	$usuario=$this->session->userdata('usuario');
	// 	$this->load->model("Operacoes");
	// 	$contaContrato = $this->Operacoes->contaContrato($usuario);
	// 	$this->load->model("Simulador_model");
	// 	$this->Simulador_model->zerar($contaContrato);
	// 	$this->zerarArray($contaContrato);
	// 	redirect('simulador');
	// }

	// public function reiniciarInsercaoValores($contaContrato){
	// 	if (isset($_SESSION['consumo'.$contaContrato])){
	// 	unset($consumoSimuladoPorHora);
	// 	unset($_SESSION['consumo'.$contaContrato]);
	// 	for ($i=0; $i < 24; $i++) { 
	// 		$inserirPorHora[$i] = false;
	// 		$this->session->set_userdata('inserirPorHora'.$contaContrato, $inserirPorHora);
	// 	}
	// 	unset($_SESSION['inserirPorHora'.$contaContrato]);
	// 	unset($_SESSION['reiniciado'.$contaContrato]); 
	// 	echo "reiniciarInsercaoValores";
	// 	$this->load->model("Simulador_model");
	// 	$kwhBase_horasDormidas = $this->session->userdata('kwhBase_horasDormidas'.$contaContrato);
	// 	$this->Simulador_model->zerar($contaContrato,$kwhBase_horasDormidas); //zerar jogar o consumo pra 0.022 se necessario corrigir no model
	// }
}
