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
		$data['users'] = $this->User_model->get_users()->result();
		$this->load->view('public/head');
		$this->load->view('user/index',$data);
	} 
}