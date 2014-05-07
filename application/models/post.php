<?php

class Post extends CI_Model{

	function get_posts($num=20, $start=0){

		//$sql = "SELECT * FROM users WHERE active=1 ORDER BY date_added DESC LIMIT 0, 20;"
		//$query=mysql_query($sql);
		//$this->db->select('*')->from('posts')->where('active', 1)->order_by('date_added', 'desc')->limit($num, $start);
		//$query=$this->db->get();
		$this->db->order_by('date_added', 'desc');
		$query=$this->db->get_where('posts', array('active'=>1), $num, $start);

		return $query->result_array(); //or $query->result() for an object instead of an array
	}

	function get_post($postID){

		$this->db->select()->from('posts')->where(array('active'=>1, 'postID'=>$postID))->order_by('date_added', 'desc');
		$query=$this->db->get();

		return $query->first_row('array');
	}

	function insert_post($data){

		$this->db->insert('posts', $data);

		return $this->db->insert_id();
	}

	function update_post($postID, $data){

		$this->db->where('postID', $postID);
		$this->db->update('posts', $data);
	}

	function delete_post($postID){

		$this->db->where('postID', $postID);
		$this->db->delete('posts');
	}

	function count_posts(){

		$postCount = $this->db->count_all_results('posts');
		return $postCount-1;
	}
	/*function insert_post($data){

		$data=array(
			'title'=>'this is a test',
			'description'=>'this is the description'
		);
		$this->db->insert('posts', $data);	

		return $this->db->insert_id();
	}

	function update_post($postID, $data){

		$this->db->where('postID', $postID);
		$this->db->update('posts', $data);
	}

	function delete_post($postID, $data){

		$this->db->where('postID', $postID);
		$this->db->delete('posts', $data);
	}*/
}

?>