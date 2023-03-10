<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Items extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('table');
        $this->load->model('Items_model');
    }

    public function index()
    {
        if ($this->session->userdata('is_logged')) {

            /* Layout and Content */
            $this->load->view('layout/header');
            $this->load->view('layout/nav');
            $this->load->view('layout/aside');
            $this->load->view('admin/admin_items', $this->display_items());
            $this->load->view('layout/footer');
        } else {
            show_404();
        }
    }

    public function display_items()
    {
        // table heading
        $this->table->set_heading('Id', 'Name', 'Type', 'Brand', 'Model', 's/n', 'State', 'User', 'Location', '', '');

        // table template
        $style = array(
            'table_open' => '<table class="table text-center">',
            'row_start' => '<tr style="background-color: aliceblue">',
            'row_end'               => '<td><i class="fa-solid fa-file-pen" style="color: #6495ED"></i></td><td><i class="fa-solid fa-trash-can" style="color: #DC143C"></i></td></tr>',
            'row_alt_end'           => '<td><i class="fa-solid fa-file-pen" style="color: #6495ED"></i></td><td><i class="fa-solid fa-trash-can" style="color: #DC143C"></i></td></tr>',
        );
        $this->table->set_template($style);

        // table model
        $items = $this->Items_model->getItems();

        // table from query result
        $data['itemtable'] = $this->table->generate($items);

        return $data;
    }

    public function create_items($data = NULL)
    {
        if ($this->session->userdata('is_logged')) {

            /* Layout and Content */
            $this->load->view('layout/header');
            $this->load->view('layout/nav');
            $this->load->view('layout/aside');
            $this->load->view('admin/admin_items_create', $data);
            $this->load->view('layout/footer');
        } else {
            show_404();
        }
    }

    public function insert_items()
    {
        $name = $this->input->post('name');
        $type = $this->input->post('type');
        $brand = $this->input->post('brand');
        $model = $this->input->post('model');
        $serial_number = $this->input->post('serial_number');
        $state = $this->input->post('state');
        $invoice = $this->input->post('invoice');
        $username = $this->input->post('username');
        $location = $this->input->post('location');
        $comments = $this->input->post('comments');

        $insert = array(
            'name' => $name,
            'type' => $type,
            'brand' => $brand,
            'model' => $model,
            'serial_number' => $serial_number,
            'state' => $state,
            'invoice' => $invoice,
            'username' => $username,
            'location' => $location,
            'comments' => $comments
        );

        if (!$this->Items_model->create($insert)) {
            $data['error'] = 'An error occurred inserting new item!';
            $this->create_items($data);
        }
        $data['success'] = 'Item properly added!';
        $this->create_items($data);
    }
}
