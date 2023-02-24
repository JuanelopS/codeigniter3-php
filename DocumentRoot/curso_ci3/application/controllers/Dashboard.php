<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->session->userdata('is_logged')) {

            /* Layout and Content */
            $this->load->view('layout/header');
            $this->load->view('layout/nav');
            $this->load->view('layout/aside');
            $this->load->view('admin/admin_dashboard');
            $this->load->view('layout/footer');
        } else {
            show_404();
        }
    }
}
