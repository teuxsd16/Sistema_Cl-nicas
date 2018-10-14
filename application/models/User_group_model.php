<?php
class User_group_model extends My_Model {
    function __construct() {
        parent::__construct();
        $this->table = 'user_group';
    }
}
