<?php
class Servico_model extends My_Model {
    function __construct() {
        parent::__construct();
        $this->table = 'tipo_servico';
    }
}
