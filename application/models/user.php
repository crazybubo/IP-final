<?php

class User Extends CI_Model{

	function create_user($data){	

		return $this->db->insert('users', $data);
	}

	function login($username, $password){

		$where = array(
			'username' => $username,
			'password' => $password
		);
		$this->db->select()->from('users')->where($where);
		$query = $this->db->get();

		return $query->first_row('array');
	}

	function unset_session(){

		$this->session->unset_userdata('username');
		$this->session->unset_userdata('firstname');
		$this->session->unset_userdata('lastname');
		$this->session->unset_userdata('description');
	}
}