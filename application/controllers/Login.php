<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        $this->load->model('loginmodel');
                
    }
	
	// Inicio da aplicação
	public function index()
	{


		$data = array(
			"msg_sucesso"=>"",
			"msg_error"=>"",
			"email"=>"",
		 	"pass"=>"",
		 	"email_error" => "",
		 	"senha_error" => ""
		 );

		$this->load->view("loginview",$data);

	}

	

	public function VerificarLogin(){
		
		$this->load->library('form_validation');

		$config = array(
			array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required|valid_email|trim|callback_email_check'
				 ),
			array(
				'field' => 'senha',
				'label' => 'Senha',
				'rules' => 'required|trim|callback_senha_check'
				 )
		);
		$this->form_validation->set_rules($config);

		if ($this->form_validation->run() == FALSE){

        	$data['email'] = set_value('email', $this->input->post('email'));
        	$data['email_error'] = form_error('email', '<div class="error">', '</div>');
        	$data['senha'] = set_value('senha', $this->input->post('senha'));
        	$data['senha_error'] = form_error('senha', '<div class="error">', '</div>');
        	
        	$this->session->set_flashdata('msg_error',"<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>×</button><strong>Atenção!</strong> Email ou senha inválidos.</div>");

        	$this->load->view('loginview',$data);
        }
        else{

        	$this->loginmodel->email = $this->input->post('email');
        	$dados = $this->loginmodel->getPermissao();

        	$this->session->set_userdata('logado',TRUE);
        	$this->session->set_userdata('id_usuario',$dados[0]->id);
        	$this->session->set_userdata('nome',$dados[0]->nome);
        	$this->session->set_userdata('usuario',$dados[0]->usuario);
        	$this->session->set_userdata('permissao',$dados[0]->perfil);
        	$this->session->set_userdata('id_empresa',$dados[0]->id_empresa);
        	$this->session->set_userdata('email',$dados[0]->email);
     
        	redirect('main');
        }


	}

	public function email_check($email){

		$this->loginmodel->email = $email;
		$result = $this->loginmodel->validarEmail();

		if($result){
			return true;
		}else{
			$this->form_validation->set_message('email_check','Erro E-mail');
			return false;
		}
	}

	public function senha_check($senha){

		$this->loginmodel->senha = base64_encode($senha);
		$result = $this->loginmodel->validarSenha();

		if($result){
			return true;
		}else{
			$this->form_validation->set_message('senha_check','Erro Senha');
			return false;
		}
	}


	public function logoff(){

		session_destroy();
		redirect('login');
	}
}
