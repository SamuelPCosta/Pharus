<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {
	public function adicionar(){
		$this->load->model("usuarios_model");

		$fornecedor = $this->input->post("fornecedor");
		if (empty($this->input->post("fornecedor"))) {
			$fornecedor = NULL;
		}
		// $estado = $this->input->post("estado");
		// if ($this->input->post("estado")=="Estado/Fornecedor") {
		// 	$estado = NULL;
		// }
		//Esse array passa os campos a serem inseridos na table usuario;
		$dados = array(
			'usuario' => $this->input->post("usuario"),
			'nome' => $this->input->post("nome"),
			'email' => $this->input->post("email"),
			'senha' => md5($this->input->post("senha")),
			'fornecedor' => $fornecedor,
			'estado' => $this->input->post("estado")
		);

		//Próximo array serve para povoar table consumo, consumo_mensal e metas
		$usuario = array('usuario' => $this->input->post("conta_contrato"));

		$senha = md5($this->input->post("senha")); //Define a variavel senha
		$ncaracteres = strlen($senha); //Função que conta o número de caracteres de uma variavel
		$confirmar_senha = md5($this->input->post("confirmar_senha")); 
		//Define a variavel senha, ela não faz parte do nosso vetor, pois serve apenas para verificação e não vai para o Banco de Dados

		if (!empty($this->input->post("tarifa_kwh"))){$tarifa_kwh=$this->input->post("tarifa_kwh");}
		$dadoserro['nome'] = $this->input->post("nome");
		$dadoserro['email'] = $this->input->post("email");
		$dadoserro['estado'] =$this->input->post("estado");
		$dadoserro['fornecedor'] = $fornecedor;
		
		if ($ncaracteres>=8) { //Se a senha do usuario for maior ou igual a 8 caracteres podemos prosseguir
			if ($senha===$confirmar_senha) {
				$nome_de_usuario_existente = $this->usuarios_model->salvar($dados, $usuario);
				if ($nome_de_usuario_existente) {
					$this->session->set_userdata('dadoserro', $dadoserro);
					redirect('cadastro?error=3');	
				}else{
					$usuario = $this->input->post("usuario");
					$this->inserirTarifaDB($usuario, $fornecedor);
					redirect('login');
				}
			}else{
				$dadoserro['usuario'] = $this->input->post("usuario");
				$this->session->set_userdata('dadoserro', $dadoserro);
				redirect('cadastro?error=2');	
				//Aqui fica o erro para informar ao usuário que a senha dele não bate com a confirmação
			}
		}else{
			$dadoserro['usuario'] = $this->input->post("usuario");
			$this->session->set_userdata('dadoserro', $dadoserro);
			redirect('cadastro?error=1');	
			//Aqui fica o erro para informar ao usuário que a senha dele deve ter no mínimo 8 caracteres
		}
	}

	public function editarDados(){
		$this->load->model("Operacoes");
		
		$usuario = $this->input->post("usuario");
		$nome = $this->input->post("nome");
		$email = $this->input->post("email");
		$fornecedor = $this->input->post("fornecedor");
		$estado = $this->input->post("estado");

		$usuarioAtual=$this->session->userdata('usuario');
		$nomeAtual=$this->Operacoes->nomeCompleto($usuarioAtual);
		$contaContratoAtual=$this->Operacoes->contaContrato($usuarioAtual);
		$emailAtual=$this->Operacoes->email($usuarioAtual);
		$fornecedorAtual=$this->Operacoes->fornecedor($usuarioAtual);
		$estadoAtual=$this->Operacoes->estado($usuarioAtual);

		//Esse array passa os campos a serem atualizados na table usuario;
		$dadosUpdate = array();
			if ($usuario!=$usuarioAtual && $usuario!=NULL && $usuario!=" ") {
				$dadosUpdate['usuario'] = $usuario;
			}else{
				$dadosUpdate['usuario'] = $usuarioAtual;
			}if ($nome!=$nomeAtual && $nome!=NULL && $nome!=" ") {
				$dadosUpdate['nome'] = $nome;
			}if ($email!=$emailAtual && $email!=NULL && $email!=" ") {
				$dadosUpdate['email'] = $email;
			}if ($fornecedor!=$fornecedorAtual && $fornecedor!=NULL && $fornecedor!=" ") {
				$dadosUpdate['fornecedor'] = $fornecedor;
			}if ($estado!=$estadoAtual) {
				$dadosUpdate['estado'] = $estado;
			}
		$this->load->model("Usuarios_model");
		$nome_de_usuario_existente = $this->Usuarios_model->atualizarDados($dadosUpdate, $usuarioAtual);
		if ($nome_de_usuario_existente) {
			redirect('usuario?error=1');	//Nome de usuário já existe
		}else{
			$this->inserirTarifaDB($usuario, $fornecedor);
			if ($usuario!=$usuarioAtual && $usuario!=NULL && $usuario!=" ") {
				$this->session->set_userdata('usuario', $usuario);
				//Sobrescreve a seção de usuário
			}
			redirect('usuario');
		}
	}

	public function carregarfornecedores(){
		$estado = $this->input->post('estado');
		if ($estado=='AC') {echo json_encode('<option value="Eletroacre">Eletroacre</option>');}
		elseif ($estado=='AL') {echo json_encode('<option value="Ceal">Ceal</option>');}
		elseif ($estado=='AP') {echo json_encode('<option value="AmE">AmE</option>');}
		elseif ($estado=='AM') {echo json_encode('<option value="CEA">CEA</option>');}
		elseif ($estado=='BA') {echo json_encode('<option value="Coelba">Coelba</option>');}
		elseif ($estado=='CE') {echo json_encode('<option value="Enel CE">Enel CE</option>');}
		elseif ($estado=='DF') {echo json_encode('<option value="CEB-DIS">CEB-DIS</option>');}
		elseif ($estado=='ES') {echo json_encode('<option value="EDP ES">EDP ES</option><option value="ELSFM">ELSFM</option>');}
		elseif ($estado=='GO') {echo json_encode('<option value="Celg-D">Celg-D</option><option value="Chesp">Chesp</option>');}
		elseif ($estado=='MA') {echo json_encode('<option value="Cemar">Cemar</option>');}
		elseif ($estado=='MT') {echo json_encode('<option value="EMS">EMS</option>');}
		elseif ($estado=='MS') {echo json_encode('<option value="EMT">EMT</option>');}
		elseif ($estado=='MG') {echo json_encode('<option value="Cemig-D">Cemig-D</option><option value="DMED">DMED</option><option value="EMG">EMG</option>');}
		elseif ($estado=='PA') {echo json_encode('<option value="Celpa">Celpa</option>');}
		elseif ($estado=='PB') {echo json_encode('<option value="EBO">EBO</option><option value="EPB">EPB</option>');}
		elseif ($estado=='PR') {echo json_encode('<option value="CASTRO - DIS">CASTRO - DIS</option><option value="Ceral DIS">Ceral DIS</option><option value="Cocel">Cocel</option><option value="Copel-DIS">Copel-DIS</option><option value="Forcel">Forcel</option>');}
		elseif ($estado=='PE') {echo json_encode('<option value="Celpe">Celpe</option>');}
		elseif ($estado=='PI') {echo json_encode('<option value="Cepisa">Cepisa</option>');}
		elseif ($estado=='RJ') {echo json_encode('<option value="CERAL ARARUAMA">CERAL ARARUAMA</option><option value="CERCI">CERCI</option><option value="Ceres">Ceres</option><option value="Enel RJ">Enel RJ</option><option value="ENF">ENF</option><option value="Light">Light</option>');}
		elseif ($estado=='RN') {echo json_encode('<option value="Cosern">Cosern</option>');}
		elseif ($estado=='RS') {echo json_encode('<option value="CEEE-D">CEEE-D</option><option value="CERFOX">CERFOX</option><option value="Ceriluz">Ceriluz</option><option value="Cermissões">Cermissões</option><option value="Certaja">Certaja</option><option value="Certel">Certel</option><option value="CERTHIL">CERTHIL</option><option value="Cooperluz">Cooperluz</option><option value="COOPERNORTE">COOPERNORTE</option><option value="COOPERSUL">COOPERSUL</option><option value="Coprel">Coprel</option><option value="Creluz-D">Creluz-D</option><option value="Creral">Creral</option><option value="Demei">Demei</option><option value="Eletrocar">Eletrocar</option><option value="Hidropan">Hidropan</option><option value="MuxEnergia">MuxEnergia</option><option value="RGE (nova)">RGE (nova)</option><option value="Uhenpal">Uhenpal</option>');}
		elseif ($estado=='RO') {echo json_encode('<option value="Ceron">Ceron</option>');}
		elseif ($estado=='RR') {echo json_encode('<option value="Roraima Energia">Roraima Energia</option>');}
		elseif ($estado=='SC') {echo json_encode('<option value="0.375">Santa Catarina - CEGERO</option><option value="Cejama">Cejama</option><option value="Celesc">Celesc-DIS</option><option value="Ceprag">Ceprag</option><option value="Ceraça">Ceraça</option><option value="Ceral">Ceral Anitápolis</option><option value="Cerbranorte">Cerbranorte</option><option value="Cerej">Cerej</option><option value="Cergal">Cergal</option><option value="Cergapa">Cergapa</option><option value="Cergral">Cergral</option><option value="Cermoful">Cermoful</option><option value="Cerpalo">Cerpalo</option><option value="CERSAD">CERSAD</option><option value="Cersul">Cersul</option><option value="Certrel">Certrel</option><option value="CODESAM">CODESAM</option><option value="Coopera">Coopera</option><option value="Cooperaliança">Cooperaliança</option><option value="Coopercocal">Coopercocal</option><option value="Coopermila">Coopermila</option><option value="COOPERZEM">COOPERZEM</option><option value="Coorsel">Coorsel</option><option value="EFLJC">EFLJC</option><option value="Eflul">Eflul</option><option value="Lenergia">Lenergia</option>');}
		elseif ($estado=='SP') {echo json_encode('<option value="0.585">São Paulo - Cedrap</option><option value="Cedri">Cedri</option><option value="Cemirim">Cemirim</option><option value="Cerim">Cerim</option><option value="Ceripa">Ceripa</option><option value="Ceris">Ceris</option><option value="CERMC">CERMC</option><option value="Cerpro">Cerpro</option><option value="CERRP">CERRP</option><option value="CERVAM">CERVAM</option><option value="Cetril">Cetril</option><option value="CPFL">CPFL Paulista</option><option value="CPFL">CPFL Piratininga</option><option value="CPFL">CPFL Santa Cruz (nova)</option><option value="EDP">EDP SP</option><option value="Elektro">Elektro</option><option value="Eletropaulo">Eletropaulo</option>');}
		elseif ($estado=='SE') {echo json_encode('<option value="Cercos">Cercos</option><option value="ESE">ESE</option><option value="Sulgipe">Sulgipe</option>');}
		elseif ($estado=='TO') {echo json_encode('<option value="ETO">ETO</option>');}
	}

	public function inserirTarifaDB($usuario, $fornecedor){
		if ($fornecedor=='Eletroacre') {$tarifa=0.570;}
		elseif ($fornecedor=='Ceal') {$tarifa=0.535;}
		elseif ($fornecedor=='AmE') {$tarifa=0.537;}
		elseif ($fornecedor=='CEA') {$tarifa=0.665;}
		elseif ($fornecedor=='Coelba') {$tarifa=0.552;}
		elseif ($fornecedor=='Enel CE') {$tarifa=0.529;}
		elseif ($fornecedor=='CEB-DIS') {$tarifa=0.518;}
		elseif ($fornecedor=='EDP ES') {$tarifa=0.526;}
		elseif ($fornecedor=='ELSFM') {$tarifa=0.518;}
		elseif ($fornecedor=='Celg-D') {$tarifa=0.534;}
		elseif ($fornecedor=='Chesp') {$tarifa=0.573;}
		elseif ($fornecedor=='Cemar') {$tarifa=0.630;}
		elseif ($fornecedor=='Cemig-D') {$tarifa=0.628;}
		elseif ($fornecedor=='DMED') {$tarifa=0.507;}
		elseif ($fornecedor=='EMG') {$tarifa=0.596;}
		elseif ($fornecedor=='EMS') {$tarifa=0.627;}
		elseif ($fornecedor=='EMT') {$tarifa=0.609;}

		elseif ($fornecedor=='Cosern') {$tarifa=0.506;}
		$this->load->model("Usuarios_model");
		$this->Usuarios_model->inserirTarifaDB($usuario, $tarifa);
	}
}
// <option value="0.570">Acre - Eletroacre</option>
// <option value="0.535">Alagoas - Ceal</option>
// <option value="0.537">Amapá - AmE</option>
// <option value="0.665">Amazonas - CEA</option>
// <option value="0.552">Bahia - Coelba</option>
// <option value="0.529">Ceará – Enel CE</option>
// <option value="0.518">Distrito Federal – CEB-DIS</option>
// <option value="0.526">Espírito Santo – EDP ES</option>
// <option value="0.518">Espírito Santo - ELSFM</option>
// <option value="0.534">Goiânia – Celg-D</option>
// <option value="0.573">Goiânia - Chesp</option>
// <option value="0.630">Manaus - Cemar</option>
// <option value="0.628">Minas Gerais – Cemig-D</option>
// <option value="0.507">Minas Gerais - DMED</option>
// <option value="0.596">Minas Gerais - EMG</option>
// <option value="0.627">Mato Grosso - EMS</option>
// <option value="0.609">Mato Grosso  do Sul - EMT</option>

// <option value="0.684">Pará - Celpa</option>
// <option value="0.498">Paraíba - EBO</option>
// <option value="0.545">Paraíba - EPB</option>
// <option value="0.549">Pernambuco - Celpe</option>
// <option value="0.569">Piauí - Cepisa</option>
// <option value="0.351">Paraná – CASTRO - DIS</option>
// <option value="0.470">Paraná – Ceral DIS</option>
// <option value="0.557">Paraná - Cocel</option>
// <option value="0.518">Paraná – Copel-DIS</option>
// <option value="0.619">Paraná - Forcel</option>
// <option value="0.950">Rio de Janeiro - CERAL ARARUAMA</option>
// <option value="0.895">Rio de Janeiro - CERCI</option>
// <option value="0.885">Rio de Janeiro - Ceres</option>
// <option value="0.684">Rio de Janeiro - Enel RJ</option>
// <option value="0.650">Rio de Janeiro – ENF</option>
// <option value="0.663">Rio de Janeiro - Light</option>
// <option value="0.506">Rio Grande do Norte - Cosern</option>
// <option value="0.577">Rondônia - Ceron</option>
// <option value="0.618">Roraima – Roraima Energia</option>
// <option value="0.515">Rio Grande do Sul – CEEE-D</option>
// <option value="0.562">Rio Grande do Sul - CERFOX</option>
// <option value="0.514">Rio Grande do Sul - Ceriluz</option>
// <option value="0.667">Rio Grande do Sul - Cermissões</option>
// <option value="0.616">Rio Grande do Sul - Certaja</option>
// <option value="0.459">Rio Grande do Sul - Certel</option>
// <option value="0.528">Rio Grande do Sul - CERTHIL</option>
// <option value="0.504">Rio Grande do Sul - Cooperluz</option>
// <option value="0.735">Rio Grande do Sul - COOPERNORTE</option>
// <option value="0.595">Rio Grande do Sul - COOPERSUL</option>
// <option value="0.571">Rio Grande do Sul - Coprel</option>
// <option value="0.592">Rio Grande do Sul – Creluz-D</option>
// <option value="0.607">Rio Grande do Sul - Creral</option>
// <option value="0.507">Rio Grande do Sul - Demei</option>
// <option value="0.542">Rio Grande do Sul - Eletrocar</option>
// <option value="0.601">Rio Grande do Sul - Hidropan</option>
// <option value="0.458">Rio Grande do Sul – MuxEnergia</option>
// <option value="0.560">Rio Grande do Sul – RGE (nova)</option>
// <option value="0.572">Rio Grande do Sul - Uhenpal</option>
// <option value="0.375">Santa Catarina - CEGERO</option>
// <option value="0.616">Santa Catarina - Cejama</option>
// <option value="0.470">Santa Catarina – Celesc-DIS</option>
// <option value="0.683">Santa Catarina - Ceprag</option>
// <option value="0.497">Santa Catarina - Ceraça</option>
// <option value="0.664">Santa Catarina – Ceral Anitápolis</option>
// <option value="0.544">Santa Catarina - Cerbranorte</option>
// <option value="0.580">Santa Catarina - Cerej</option>
// <option value="0.655">Santa Catarina - Cergal</option>
// <option value="0.524">Santa Catarina - Cergapa</option>
// <option value="0.559">Santa Catarina - Cergral</option>
// <option value="0.563">Santa Catarina - Cermoful</option>
// <option value="0.633">Santa Catarina - Cerpalo</option>
// <option value="0.564">Santa Catarina - CERSAD</option>
// <option value="0.420">Santa Catarina - Cersul</option>
// <option value="0.620">Santa Catarina - Certrel</option>
// <option value="0.387">Santa Catarina - CODESAM</option>
// <option value="0.387">Santa Catarina - Coopera</option>
// <option value="0.468">Santa Catarina - Cooperaliança</option>
// <option value="0.468">Santa Catarina - Coopercocal</option>
// <option value="0.506">Santa Catarina - Coopermila</option>
// <option value="0.560">Santa Catarina - COOPERZEM</option>
// <option value="0.592">Santa Catarina - Coorsel</option>
// <option value="0.639">Santa Catarina - EFLJC</option>
// <option value="0.648">Santa Catarina - Eflul</option>
// <option value="0.511">Santa Catarina - Lenergia</option>
// <option value="0.783">Sergipe - Cercos</option>
// <option value="0.531">Sergipe - ESE</option>
// <option value="0.619">Sergipe - Sulgipe</option>
// <option value="0.585">São Paulo - Cedrap</option>
// <option value="0.751">São Paulo - Cedri</option>
// <option value="0.471">São Paulo - Cemirim</option>
// <option value="0.687">São Paulo - Cerim</option>
// <option value="0.521">São Paulo - Ceripa</option>
// <option value="0.532">São Paulo - Ceris</option>
// <option value="0.628">São Paulo - CERMC</option>
// <option value="0.602">São Paulo - Cerpro</option>
// <option value="0.667">São Paulo - CERRP</option>
// <option value="0.697">São Paulo - CERVAM</option>
// <option value="0.523">São Paulo - Cetril</option>
// <option value="0.490">São Paulo – CPFL Paulista</option>
// <option value="0.541">São Paulo – CPFL Piratininga</option>
// <option value="0.526">São Paulo - CPFL Santa Cruz (nova)</option>
// <option value="0.532">São Paulo – EDP SP</option>
// <option value="0.516">São Paulo - Elektro</option>
// <option value="0.497">São Paulo - Eletropaulo</option>
// <option value="0.600">Tocantins - ETO</option>