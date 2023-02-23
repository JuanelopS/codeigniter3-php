<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('getmenu', 'url'));
		$this->load->library(array('form_validation'));
		$this->load->helper(array('auth/login_rules'));
		$this->load->model('Auth');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function validate()
	{
		$this->form_validation->set_error_delimiters('', '');
		$rules = getLoginRules();
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() === FALSE) {
			$errors = array(
				'email' => form_error('email'), //errores específicos de cada input
				'password' => form_error('password')
			);
			$this->output->set_status_header(400);
			echo json_encode($errors);
		} else {
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			if (!$res = $this->Auth->login($email, $password)) {
				$this->output->set_status_header(401);
				echo json_encode(array('msg' => 'Username and/or password incorrect.'));
				exit;
			}
			$data = array(
				'id' => $res->id,
				'range' => $res->range,
				'status' => $res->status,
				'username' => $res->username,
				'is_logged' => TRUE
			);
			$this->session->set_userdata($data);
			// flashdata: setear una variable temporal (se pierde incluso al refrescar la página)	
			$this->session->set_flashdata('msg', 'Bienvenido ' . $data['username']);
			// var_dump($res->username);
			echo json_encode(array('url' => base_url('dashboard')));
		}
	}

	public function logout()
	{
		$data = array('id', 'range', 'status', 'username', 'is_logged');
		$this->session->unset_userdata($data);
		$this->session->sess_destroy(); //same as php function session_destroy 

		redirect('login');
	}
}
