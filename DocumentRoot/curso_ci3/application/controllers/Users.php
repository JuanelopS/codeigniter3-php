<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('table');
        $this->load->model('Users_model');
    }

    public function index()
    {
        if ($this->session->userdata('is_logged')) {

            /* Layout and Content */
            $this->load->view('layout/header');
            $this->load->view('layout/nav');
            $this->load->view('layout/aside');
            $this->load->view('admin/admin_users', $this->display_users());
            $this->load->view('layout/footer');
        } else {
            show_404();
        }
    }

    public function display_users()
    {
        // table heading
        $this->table->set_heading('id', 'Username', 'Email', 'Department', 'Class', 'Status', '', '');

        // table template
        $style = array(
            'table_open' => '<table class="table text-center">',
            'row_start' => '<tr style="background-color: aliceblue">',
            'row_end' => '<td><i class="fa-solid fa-file-pen" style="color: #6495ED"></i></td><td><i class="fa-solid fa-trash-can" style="color: #DC143C"></i></td></tr>',
            'row_alt_end' => '<td><i class="fa-solid fa-file-pen" style="color: #6495ED"></i></td><td><i class="fa-solid fa-trash-can" style="color: #DC143C"></i></td></tr>',
        );
        $this->table->set_template($style);

        // table model
        $users = $this->Users_model->getUsers();

        // table from query result
        $data['usertable'] = $this->table->generate($users);

        return $data;
    }
}
