<?php
class Clinica_model extends MY_Model {
    function __construct() {
        parent::__construct();
        
    }   

    public function cadastro_cliente()
    {
    	$inserir['cpf']	=	$this->input->post('cpf');
		$inserir['nome']	=	$this->input->post('nome');	
		$inserir['nome_reduzido']	=	$this->input->post('nome_reduzido');	
		$inserir['empresa']	=	$this->input->post('empresa');	
		$inserir['setor_destino']	=	$this->input->post('setor_destino');	
		$inserir['responsavel']	=	$this->input->post('responsavel');	
		$inserir['motivo']	=	$this->input->post('motivo');	
		$inserir['data']	=	$this->input->post('data');

		
    }

    function Inserir($data) {
	    if(!isset($data))
	      return false;
	    return $this->db->insert($this->cliente, $data);
	}

    public function cadastro_clinica()
    {
    	
    }

    public function cadastro_medico()
    {
    	
    }
}