<?php

/* FIXME: MIGRATION OTHER TABLES */

defined('BASEPATH') or exit('No direct script access allowed');
class Migration_create_item extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'inventory_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE
            ),
            'type' => array(
                'type' => 'INT',
                'null' => TRUE,
            ),
            'brand' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE,
            ),
            'model' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE,
            ),
            'id_user' => array(
                'type' => 'INT',
                'constraint' => '10',
                'null' => TRUE,
                'unsigned' => TRUE
            ),
            'location' => array(
                'type' => 'TINYINT',
                'constraint' => '1',
                'null' => TRUE,
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('items');
    }

    public function down()
    {
        $this->dbforge->drop_table('items');
    }
}
