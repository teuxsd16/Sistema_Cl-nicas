<?php
class Cliente_model extends My_Model {
    function __construct() {
        parent::__construct();
        $this->table = 'cliente';
    }
}
