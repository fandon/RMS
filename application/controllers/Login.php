<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->check_status();
	}
	public function index()
	{
		$this->load->view("login");
	}

	public function check()
	{
		$account = $this->input->post('userName');
		$pwd = $this->input->post('password');
		$this->check_login($account,$pwd);
	}

	public function out()
	{
		$this->check_out();
	}
}
