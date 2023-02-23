<?php

class Users extends CI_Model
{

    public function create($data)
    {
        $data = array(
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => $data['password'],
            'status' => 1,
            'range' => 1   // 1 normal, 2 admin
        );
        if (!$this->db->insert('users', $data)) { // INSERT INTO...
            return false;
        }
        return true;
    }
}
