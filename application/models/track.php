<?php

class Track Extends CI_Model{

	function upload_track($data){	

		return $this->db->insert('tracks', $data);
	}
}