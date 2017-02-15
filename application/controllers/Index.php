<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->check_status();
	}

	public function index()
	{
		$this->load->view('public/head');
		$this->load->view('index/index');
		$this->load->view('public/foot');
	}
	
	public function getbar(){
		$bar = array(
			array(
			'title' =>'系统设置',
			'icon'  =>'&#xe614;',
			'spread'=> true,
			'children'=>array(
				array(
				'title'=>'用户设置',
				'icon' =>'&#xe613;',
				'href' =>'/user/index'),
				array(
				'title'=>'角色设置',
				'icon' =>'&#xe600;',
				'href' =>'/role/index'
					),
				array(
				'title' => '菜单设置',
				'icon' =>'&#xe641',
				'href' =>'/menu/index'
					)				
				)
			),
			);
		echo json_encode($bar);
	}
}