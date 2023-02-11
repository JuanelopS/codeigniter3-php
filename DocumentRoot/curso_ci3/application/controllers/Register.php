<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('getmenu'));
        $this->load->model('Users');
        $this->load->library(array('form_validation'));
    }

    public function index()
    {
        $data['menu'] = main_menu(); // main_menu es una función definida en el helper 'getmenu'
        $this->load->view('register', $data);
        $query = $this->db->get('users');
        // var_dump($query->result());
    }

    /**
     * Register users in database
     * @return void
     */
    public function create()
    {
        $data['menu'] = main_menu();

        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $c_password = $this->input->post('c_password');

        $config = array(
            array(
                'field' => 'username',
                'label' => 'username',
                'rules' => 'required|alpha_numeric'
            ),
            array(
                'field' => 'email',
                'label' => 'email',
                'rules' => 'required|valid_email',
                'errors' => '%s invalid'
            ),
        );

        $this->form_validation->set_rules($config);

        if($this->form_validation->run() == FALSE){
            $this->load->view('register', $data);
        } else {
            
            $insert = array(
                'username' => $username,
                'email' => $email,
                'password' => $password,
            );
            if (!$this->Users->create($insert)) {
                $data['msg'] = 'An error occurred inserting the data!';
                $this->load->view('register', $data);
            }
            $data['msg'] = 'Properly registered!';
            $this->load->view('register', $data);
        }
    }
}
