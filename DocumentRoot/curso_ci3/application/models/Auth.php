<?php

class Auth extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }

    public function login($email, $password)
    {
        $query = $this->db->get_where('users', array('email' => $email, 'password' => $password), 1); //1 -> LIMIT SQL QUERY
        if (!$query->result()) {
            return false;
        }
        return $query->row();
    }
}
