<?php

class Login_model extends CI_Model{
    public function check_login($table,$where){
        return $this->db->get_where($table,$where);
    }
    public function register($table,$data){
        return $this->db->insert($table,$data);
    }
}

?>