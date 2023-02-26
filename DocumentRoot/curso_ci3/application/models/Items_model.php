<?php

class Items_model extends CI_Model
{

    public function create($data)
    {
        $data = array(
            'code' => $data['inventory_name'],
            'type' => $data['type'],
            'brand' => $data['brand'],
            'model' => $data['model'],
            'serial_number' => $data['serial_number'],
            'state' => $data['state'],
            'user' => $data['username'],
            'location' => $data['location'],
            'invoice' => $data['invoice'],
            'comments' => $data['comments']

            // ('Id', 'Code', 'Type', 'Brand', 'User', 'Location'
        );
        if (!$this->db->insert('items', $data)) { // INSERT INTO...
            return false;
        }
        return true;
    }

    public function getItems()
    {
        $query = "SELECT * FROM items";
        return $this->db->query($query);
    }
}
