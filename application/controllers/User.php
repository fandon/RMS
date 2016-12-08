<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
	
	function __construct(argument)
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	{
		$this->User_model->get_users();
	} 