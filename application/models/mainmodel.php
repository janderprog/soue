<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Mainmodel extends CI_Model {

		public $id;
		public $nome;
    	public $usuario;
    	public $senha; // base 64 para segurança
    	public $tipo;
    	public $empresa;
    	public $email;
    	public $ramal;
    	public $salario;
    	public $dt_admissao;
    	public $cpf;
    	public $projeto;
    	public $departamento;
    	public $cargo;
    	public $ativo;
    	public $perfil;

		public function listarTipo(){
			$result = $this->db->get('tipo_funcionario');

			return $result->result();
		}

		public function listarEmpresas(){
			$result = $this->db->get('empresas');

			return $result->result();
		}

		public function listarProjetos(){
			$result = $this->db->get('projetos');

			return $result->result();
		}

		public function listarCargos(){
			$result = $this->db->get('cargos');

			return $result->result();
		}

		public function listarDepartamentos(){
			$result = $this->db->get('departamentos');

			return $result->result();
		}


		public function salvar(){

			$dados = array(
				'nome' => $this->nome,
				'usuario' => $this->usuario,
				'senha' => $this->senha,
				'id_tipo_usuario' => $this->tipo,
				'id_empresa' => $this->empresa,
				'email' => $this->email,
				'ramal' => $this->ramal,
				'salario' => $this->salario,
				'data_admissao' => $this->dt_admissao,
				'cpf' => $this->cpf,
				'id_projeto' => $this->projeto,
				'id_departamento' => $this->departamento,
				'id_cargo' => $this->cargo,
				'ativo' => $this->ativo,
				'perfil' => $this->perfil
				 );

			$this->db->insert('usuarios', $dados);

		}


		public function listar(){

			if($this->nome != ""){
				$this->db->like('u.nome', $this->nome);
			}

			if($this->usuario != ""){
				$this->db->like('u.usuario',$this->usuario);
			}

			if($this->email != ""){	
				$this->db->like('u.email',$this->email);
			}

			if($this->cpf != ""){
				$this->db->where('u.cpf',$this->cpf);
			}

			if($this->projeto != ""){
				$this->db->where('u.id_projeto',$this->projeto);
			}

			if($this->empresa != ""){
				$this->db->where('u.id_empresa',$this->empresa);
			}

			if($this->departamento != ""){
				$this->db->where('u.id_departamento',$this->departamento);
			}

			if($this->cargo != ""){
				$this->db->where('u.id_cargo',$this->cargo);
			}

			$this->db->select('
						u.id,
						u.nome,
						u.usuario,
						u.email,
						u.cpf,
						u.ramal,
						e.empresa,
						p.projeto,
						d.departamento,
						c.cargo'
					);

			$this->db->join('empresas as e','e.id=u.id_empresa');
			$this->db->join('projetos as p','p.id=u.id_projeto');
			$this->db->join('departamentos as d','d.id=u.id_departamento');
			$this->db->join('cargos as c','c.id=u.id_cargo');


			$result = $this->db->get('usuarios as u');

			return $result->result();
		}


		public function getUsuario(){

			$this->db->where('id',$this->id);

			$result = $this->db->get('usuarios');

			return $result->result();
		}


		public function alterar(){
			$dados = array(
				'nome' => $this->nome,
				'usuario' => $this->usuario,
				'senha' => $this->senha,
				 );

			$this->db->where('id',$this->id);

			$this->db->update('usuarios', $dados);
		}
	}


?>