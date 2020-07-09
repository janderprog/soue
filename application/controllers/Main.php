<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * 
	 */

	public function __construct()
    {
        parent::__construct();

        $this->load->model('mainmodel');

        if(!$this->session->userdata('logado')){
        	redirect('login');
        }

    }

    // Index
	public function index()
	{
		$this->load->view('mainview');
	}

	public function inserirFuncionario(){

		$data = array(
			'tipo_usuario' => $this->mainmodel->listarTipo(),
			'empresas' => $this->mainmodel->listarEmpresas(),
			'projetos' => $this->mainmodel->listarProjetos(),
			'departamentos' => $this->mainmodel->listarDepartamentos(),
			'cargos' => $this->mainmodel->listarCargos(),
			'nome' => "",
			'usuario' => "",
			'senha' => "",
			'ativo_chk' => "",
			'tipo' =>"",
			'empresa' => "",
			'projeto' => "",
			'departamento' => "",
			'cargo' => "",
			'ramal' => "",
			'salario' => "",
			'cpf' => "",
			'email' => "",
			'email_error' => "",
			'usuario_error' => "",
			'tipo_error' => "",
			'nome_error' => "",
			'senha_error' => "",
			'empresa_error' => "",
			'projeto_error' => "",
			'departamento_error' => "",
			'cargo_error' => "",
			'ramal_error' => "",
			'salario_error' => "",
			'cpf_error' => "",
			'dt_admissao' => "",
			'dt_admissao_error' => ""
			 );

		$this->load->view('inserirfuncview', $data);
	}


	public function salvar(){

		$data = array(
			'tipo_usuario' => $this->mainmodel->listarTipo(),
			'empresas' => $this->mainmodel->listarEmpresas(),
			'projetos' => $this->mainmodel->listarProjetos(),
			'departamentos' => $this->mainmodel->listarDepartamentos(),
			'cargos' => $this->mainmodel->listarCargos()
		);

		$this->load->library('form_validation');

		$config = array(
			array(
				'field' => 'nome',
				'label' => 'Nome',
				'rules' => 'required|trim'
				 ),
			array(
				'field' => 'usuario',
				'label' => 'Usuario',
				'rules' => 'required|trim'
				 ),
			array(
				'field' => 'senha',
				'label' => 'Senha',
				'rules' => 'required|trim'
				 ),
			array(
				'field' => 'tipo',
				'label' => 'Tipo',
				'rules' => 'required'
				 ),
			array(
				'field' => 'empresa',
				'label' => 'Empresa',
				'rules' => 'required'
				 ),
			array(
				'field' => 'projeto',
				'label' => 'Projeto',
				'rules' => 'required'
				 ),
			array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required|trim|valid_email|is_unique[usuarios.email]'
				 ),
			array(
				'field' => 'departamento',
				'label' => 'Departamento',
				'rules' => 'required'
				 ),
			array(
				'field' => 'cargo',
				'label' => 'Cardo',
				'rules' => 'required'
				 ),
			array(
				'field' => 'ramal',
				'label' => 'Ramal',
				'rules' => 'required|trim|numeric'
				 ),
			array(
				'field' => 'salario',
				'label' => 'Salario',
				'rules' => 'required|trim'
				 ),
			array(
				'field' => 'salario',
				'label' => 'Salario',
				'rules' => 'required|trim'
				 ),
			array(
				'field' => 'cpf',
				'label' => 'Cpf',
				'rules' => 'required'
				 ),
		);
		$this->form_validation->set_rules($config);

		if($this->form_validation->run() == FALSE){

        	$data['nome'] = set_value('nome', $this->input->post('nome'));
        	$data['nome_error'] = form_error('nome', '<div class="error">', '</div>');
        	$data['usuario'] = set_value('usuario', $this->input->post('usuario'));
        	$data['usuario_error'] = form_error('usuario', '<div class="error">', '</div>');
        	$data['senha'] = set_value('senha', $this->input->post('senha'));
        	$data['senha_error'] = form_error('senha', '<div class="error">', '</div>');
        	$data['email'] = set_value('email', $this->input->post('email'));
        	$data['email_error'] = form_error('email', '<div class="error">', '</div>');
        	$data['ramal'] = set_value('ramal', $this->input->post('ramal'));
        	$data['ramal_error'] = form_error('ramal', '<div class="error">', '</div>');
        	$data['salario'] = set_value('salario', $this->input->post('salario'));
        	$data['salario_error'] = form_error('salario', '<div class="error">', '</div>');
        	$data['dt_admissao'] = set_value('dt_admissao', $this->input->post('dt_admissao'));
        	$data['dt_admissao_error'] = form_error('dt_admissao', '<div class="error">', '</div>');
        	$data['cpf'] = set_value('cpf', $this->input->post('cpf'));
        	$data['cpf_error'] = form_error('cpf', '<div class="error">', '</div>');

			$data['tipo'] = set_value('tipo', $this->input->post('tipo'));
        	$data['tipo_error'] = (form_error('tipo'))?form_error('tipo', '<div class="error">', '</div>'):"";
        	$data['empresa'] = set_value('empresa', $this->input->post('empresa'));
        	$data['empresa_error'] = (form_error('empresa'))?form_error('empresa', '<div class="error">', '</div>'):"";
        	$data['projeto'] = set_value('projeto', $this->input->post('projeto'));
        	$data['projeto_error'] = (form_error('projeto'))?form_error('projeto', '<div class="error">', '</div>'):"";
        	$data['departamento'] = set_value('departamento', $this->input->post('departamento'));
        	$data['departamento_error'] = (form_error('departamento'))?form_error('departamento', '<div class="error">', '</div>'):"";
        	$data['cargo'] = set_value('cargo', $this->input->post('cargo'));
        	$data['cargo_error'] = (form_error('cargo'))?form_error('cargo', '<div class="error">', '</div>'):"";

        	if($this->input->post('ativo') != ""){
        		$data['ativo_chk'] = "checked='checked'";
        	}else{
        		$data['ativo_chk'] = "";
        	}
        	
        	$this->session->set_flashdata('msg_error',"<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>×</button><strong>Atenção!</strong> Falha ao salvar os dados do funcionário.</div>");

        	$this->load->view('inserirfuncview',$data);
		}
		else{

			$cpf = str_replace('.', '', $this->input->post('cpf'));
			$cpf_formatado = str_replace('-', '', $cpf);

			$salario = str_replace('.', '', $this->input->post('salario'));
			$salario_formatado = str_replace(',', '.', $salario);

			$this->mainmodel->nome = $this->input->post('nome');
        	$this->mainmodel->usuario = $this->input->post('usuario');
        	$this->mainmodel->senha =  base64_encode($this->input->post('senha')); // base 64 para segurança
        	$this->mainmodel->tipo = $this->input->post('tipo');
        	$this->mainmodel->email = $this->input->post('email');
        	$this->mainmodel->ramal = $this->input->post('ramal');
        	$this->mainmodel->salario = $salario_formatado;
        	$this->mainmodel->dt_admissao = date('Y-m-d', strtotime($this->input->post('dt_admissao')));
        	$this->mainmodel->cpf = $cpf_formatado;
        	$this->mainmodel->projeto = $this->input->post('projeto');
        	$this->mainmodel->empresa = $this->input->post('empresa');
        	$this->mainmodel->departamento = $this->input->post('departamento');
        	$this->mainmodel->cargo = $this->input->post('cargo');
        	$this->mainmodel->ativo = $this->input->post('ativo');
        	$this->mainmodel->perfil = ($this->session->userdata('permissao')==1)?"1":"2"; // 1->Admin 2->funcionario
        	
			$this->mainmodel->salvar();

			$this->session->set_flashdata('msg_error',"<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert'>×</button> Dados do funcionário salvos com sucesso. </div>");
			redirect('main/inserirFuncionario');
		}
	}


	public function buscarFuncionario(){

		$data = array(
			'tipo_usuario' => $this->mainmodel->listarTipo(),
			'empresas' => $this->mainmodel->listarEmpresas(),
			'projetos' => $this->mainmodel->listarProjetos(),
			'departamentos' => $this->mainmodel->listarDepartamentos(),
			'cargos' => $this->mainmodel->listarCargos()
		);

		$this->load->view('buscarfuncview', $data);
	}


	public function listar(){

		$cpf = str_replace('.', '', $this->input->post('cpf'));
		$cpf_formatado = str_replace('-', '', $cpf);

		$data = array(
			'tipo_usuario' => $this->mainmodel->listarTipo(),
			'empresas' => $this->mainmodel->listarEmpresas(),
			'projetos' => $this->mainmodel->listarProjetos(),
			'departamentos' => $this->mainmodel->listarDepartamentos(),
			'cargos' => $this->mainmodel->listarCargos(),
			'tipo' => $this->input->post('tipo'),
			'empresa' => $this->input->post('empresa'),
			'projeto' => $this->input->post('projeto'),
			'departamento' => $this->input->post('departamento'),
			'cargo' => $this->input->post('cargo'),
			'nome' => $this->input->post('nome'),
			'usuario' => $this->input->post('usuario'),
			'email' => $this->input->post('email'),
			'cpf' => $cpf_formatado
		);

		$this->mainmodel->nome = $this->input->post('nome');
    	$this->mainmodel->usuario = $this->input->post('usuario');
    	$this->mainmodel->email = $this->input->post('email');
    	$this->mainmodel->cpf = $cpf_formatado;
    	$this->mainmodel->projeto = $this->input->post('projeto');
    	$this->mainmodel->empresa = $this->input->post('empresa');
    	$this->mainmodel->departamento = $this->input->post('departamento');
    	$this->mainmodel->cargo = $this->input->post('cargo');

    	$usuarios = $this->mainmodel->listar();
    	// $usuarios = true;
    	if($usuarios){
    		$data['usuarios'] = $usuarios;
    		$this->session->set_flashdata('msg_error',"");
    	}else{
    		$data['usuarios'] = "";
    		$this->session->set_flashdata('msg_error',"<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>×</button><strong>Atenção!</strong> Busca não encontrou resultrados.</div>");
    	}

		$this->load->view('listarfuncview', $data);
	}


	public function editar(){

		$this->mainmodel->id = $this->session->userdata('id_usuario');
		$usuario = $this->mainmodel->getUsuario()[0];
		
		$data = array(
			'nome' => $usuario->nome,
			'usuario' => $usuario->usuario,
			'senha' => $usuario->senha,
			'nome_error' => "",
			'usuario_error' => "",
			'senha_error' => ""
		 );

		$this->load->view('editarfuncview', $data);

	}


	public function alterar(){

		$this->load->library('form_validation');

		$config = array(

			array(
				'field' => 'senha',
				'label' => 'Senha',
				'rules' => 'required|trim'
			)
			
		);
		$this->form_validation->set_rules($config);

		if($this->form_validation->run() == FALSE){

        	$data['nome'] = set_value('nome', $this->input->post('nome'));
        	$data['nome_error'] = form_error('nome', '<div class="error">', '</div>');
        	$data['usuario'] = set_value('usuario', $this->input->post('usuario'));
        	$data['usuario_error'] = form_error('usuario', '<div class="error">', '</div>');
        	$data['senha'] = set_value('senha', $this->input->post('senha'));
        	$data['senha_error'] = form_error('senha', '<div class="error">', '</div>');
        	
        	
        	$this->session->set_flashdata('msg_error',"<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>×</button><strong>Atenção!</strong> Falha ao alterar os dados do funcionário.</div>");

        	$this->load->view('alterarfuncview',$data);
		}
		else{

			$this->mainmodel->id = $this->session->userdata('id_usuario');
			$this->mainmodel->nome = $this->input->post('nome');
        	$this->mainmodel->usuario = $this->input->post('usuario');
        	$this->mainmodel->senha =  base64_encode($this->input->post('senha')); // base 64 para segurança
        	
			$this->mainmodel->alterar();

			$this->session->set_flashdata('msg_error',"<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert'>×</button> Dados do funcionário alterados com sucesso. </div>");
			redirect('main/editar');
		}

	}

}