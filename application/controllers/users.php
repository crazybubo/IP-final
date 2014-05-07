<?php

class Users extends CI_Controller{

	function __construct(){

		parent::__construct();
		$this->load->model('user');
		$this->load->library('session');
	}

	function login(){

		$data['error'] = 0;
		if($_POST){
			$username = $this->input->post('username', true);
			$password = $this->input->post('password', true);
			$user = $this->user->login($username, $password);
			if(!$user){
				$data['error'] = 1;
			} else {
				$this->session->set_userdata('username', $user['username']);
				$this->session->set_userdata('firstname', $user['first_name']);
				$this->session->set_userdata('lastname', $user['last_name']);
				$this->session->set_userdata('description', $user['description']);
				redirect(base_url().'profiles');
			}

		}
		$this->load->view('header');
		$this->load->view('login', $data);
		$this->load->view('footer');
	}

	function logout(){
		//$this->load->library('session');
		$this->user->unset_session();
		redirect(base_url());
	}

	function registration(){

		if(isset($_POST['username'])){
			if($_POST['password'] != $_POST['repeatPassword']){
				$data['error'] = 1;
				$this->load->view('header');
				$this->load->view('registration', array('data' => $data));
				$this->load->view('footer');
			} else {
				$query = array(
					'username'=>$_POST['username'],
					'password'=>$_POST['password'],
					'first_name'=>$_POST['firstname'],
					'last_name'=>$_POST['lastname']
				);
				$this->user->create_user($query);
				$data['success'] = 1;
				$this->load->view('header');
				$this->load->view('registration', array('data' => $data));
				$this->load->view('footer');
			}
		} else {
			$this->load->view('header');
			$this->load->view('registration');
			$this->load->view('footer');
		}
	}
}

?>