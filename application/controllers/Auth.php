<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
  	parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('form');
  }

	public function login()
	{
		$rules = array(
			array(
				'field' => 'username',
				'label' => 'Nome de Usuário',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'password',
				'label' => 'Senha',
				'rules' => 'trim|required'
			)
		);
		$this->form_validation->set_rules($rules);

		$this->load->model('user_model');
		if ($this->form_validation->run() && $this->user_model->checkLogin($this->input->post())) {
			redirect('/admin');
		} else {
			$this->session->set_flashdata('error_message', 'Dados Incorretos');
		}

		$data['action'] = 'login';
		$this->load->view('app/login', $data);

	}

	public function register()
	{
		$data['action'] = 'register';
		$this->load->view('app/login', $data);
	}
}
