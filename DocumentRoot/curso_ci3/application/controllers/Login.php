<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('getmenu', 'url'));
		$this->load->library('form_validation');
		$this->load->helper(array('auth/login_rules'));
		$this->load->model('Auth');
	}

	public function index(){
		$this->load->view('login');
	}

	public function validate(){
		$this->form_validation->set_error_delimiters('', '');
		$rules = getLoginRules();
		$this->form_validation->set_rules($rules);
		
		if($this->form_validation->run() === FALSE) {
			$errors = array(
				'email' => form_error('email'), //errores específicos de cada input
				'password' => form_error('password')
			);
			$this->output->set_status_header(400);
			echo json_encode($errors);
		} else {
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			if(!$res = $this->Auth->login($email, $password)){
				$this->output->set_status_header(401);
				echo json_encode(array('msg' => 'Username and/or password incorrect.'));
				exit;
			}
			echo json_encode(array('msg' => 'Welcome!'));
		}
	}
}