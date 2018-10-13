<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$this->load->view('app/login');
	}

	public function cadastro()
	{

		$inserir['Nome_cliente']	=	$this->input->post('nome');
		$inserir['Email']	=	$this->input->post('email');
		$inserir['Senha']	=	$this->input->post('senha');
		/*$inserir['setor_destino']	=	$this->input->post('setor_destino');
		$inserir['responsavel']	=	$this->input->post('responsavel');
		$inserir['motivo']	=	$this->input->post('motivo');
		$inserir['data']	=	$this->input->post('data');*/

		var_dump($inserir);
	}
}
