<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function get_users()
	{
		$sql = "SELECT * FROM f_user";
		$res = $this->db->query($sql);
		return $res;
	}

	public function get_user_id($id){
		$sql = "SELECT * FROM f_user where id=".$id;
		$res = $this->db->query($sql);
		return $res->result;
	}
}