<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Loginmodel extends CI_Model {
	
		public $senha;
		public $email;

		/*
			Método de validarEmail
		*/
		public function validarEmail(){

			$this->db->select('email');
			$this->db->where('email',$this->email);
			$this->db->where('ativo',1);
			$result = $this->db->get('usuarios');

			return $result->result();
			
		}

		/*
			Método de validarSenha
		*/
		public function validarSenha(){

			$this->db->select('senha');
			$this->db->where('senha',$this->senha);
			$this->db->where('ativo',1);
			$result = $this->db->get('usuarios');

			return $result->result();
			
		}

		/*
			Método de getPermissao
		*/
		public function getPermissao(){

			$this->db->select('id,nome,usuario,id_empresa,email,cpf,perfil');
			$this->db->where('email',$this->email);
			$this->db->where('ativo',1);
			$result = $this->db->get('usuarios');

			return $result->result();
			
		}
		
	}
?>