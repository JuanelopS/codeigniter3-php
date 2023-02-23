<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Items extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->session->userdata('is_logged')) {
            $view = $this->load->view('admin/admin_items', '', TRUE);
            $this->get_view($view);
        } else {
            show_404();
        }
    }

    public function get_view($view)
    {
        $data = array(
            'header' => $this->load->view('layout/header', '', TRUE),
            'nav' => $this->load->view('layout/nav', '', TRUE),
            'aside' => $this->load->view('layout/aside', '', TRUE),
            'footer' => $this->load->view('layout/footer', '', TRUE),
            'content' => $view
        );
        $this->load->view('dashboard', $data);
    }
}
