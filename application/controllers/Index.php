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
			'icon'  =>'fa-cubes',
			'spread'=> true,
			'children'=>array(
				array(
				'title'=>'用户设置',
				'icon' =>'&#xe641;',
				'href' =>'/user/index'),
				array(
				'title'=>'角色设置',
				'icon' =>'&#xe641;',
				'href' =>'/role/index'
					)				
				)
			),
			array(
			'title' =>'员工管理',
			'icon'  =>'fa-cubes',
			'spread'=> true,
			'children'=>array(
				array(
				'title'=>'员工1',
				'icon' =>'&#xe641;',
				'href' =>'http://www.baidu.com'
				),
				array(
				'title'=>'员工2',
				'icon' =>'&#xe641;',
				'href' =>'http://www.baidu.com'
				)
				)				
			)
			);
		echo json_encode($bar);
	}
}