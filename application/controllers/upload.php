<?php

class Upload extends CI_Controller{

	function __construct(){

		parent::__construct();
		$this->load->helper('form');		
		$this->load->model('track');
	}

	function index(){

		$this->load->view('upload_form', array('error'=>''));
	}

	function do_upload(){

		$config['upload_path'] = './uploads';
		$config['allowed_types'] = 'wav|ogg';
		$this->load->library('upload', $config);

		if( !$this->upload->do_upload() ){
			$error = array('error'=>$this->upload->display_errors());
			$this->load->view('upload_form', $error);
		} else {
			$data=array('upload_data' => $this->upload->data());
			$query = array(
					'author'=>$this->session->userdata('username'),
					'title'=>$_POST['title'],
					'dl_link'=>base_url().'uploads/'.$data['upload_data']['file_name'],
					'description'=>$_POST['description']
					);
			$this->track->upload_track($query);
			$this->load->view('upload_success', $data);
		}
	}
}