<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medicos extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/medicos');
	}
}
