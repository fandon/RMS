<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Menu extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->check_status();
	}

	public function index()
	{
		$this->load->view('public/head');
		$this->load->view('menu/index');
	}

	public function add()
	{
		$this->load->view('menu/add');
	}

	public function add_menu()
	{

	}

	public function edit()
	{

	}
	public function edit_menu()
	{

	}
	public function delete()
	{
		
	}
}