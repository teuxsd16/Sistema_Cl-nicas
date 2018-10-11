<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Cliente_model');
        $this->load->model('Clinica_model');
        $this->load->model('Medico_model');
    }

	public function index()
	{
		$this->load->view('login');
	}
}
