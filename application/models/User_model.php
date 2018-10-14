<?php
class User_model extends My_Model {
    function __construct() {
        parent::__construct();
        $this->table = 'user';
    }
    public function checkLogin($data)
    {
      if (is_array($data)) {
        $this->db->where('username', $data['username']);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0 && md5($data['password']) == $query->row_array()['senha']) {
          return true;
        }
      }
      return false;
    }
}
