<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct() {
        parent::__construct();
    }

	public function login()
	{
		$data['action'] = 'login';
		$this->load->view('app/login', $data);
	}

	public function register()
	{
		$data['action'] = 'register';
		$this->load->view('app/login', $data);
	}
}
