<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	{
		$this->load->view('public/head');
		$this->load->view('user/index');
	}

	public function getusers(){
		$pagecurr = $_POST['pagecurr'];
		if(empty($pagecurr)){
			$pagecurr = 1;
		}
		$count = $this->db->count_all_results('f_user');
		$total = ceil($count/12);
		$order = 'id DESC';
		$limit = 12*($pagecurr-1).','.$pagecurr*12;
		$users = $this->User_model->get_users($order,$limit)->result();
		$this->output->set_output(json_encode(
			$data = array(
				'users'=>$users,
				'total'=>$total
				)
			));
	}
}