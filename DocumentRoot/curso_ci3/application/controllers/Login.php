<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('getmenu', 'url'));
		$this->load->library('form_validation');
		$this->load->helper(array('auth/login_rules'));
	}

	public function index(){
		$data['menu'] = main_menu(); // main_menu es una función definida en el helper
		$this->load->view('login', $data);
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
			echo json_encode($errors);
		} else {
			
		}
	}
}