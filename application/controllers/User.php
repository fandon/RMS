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

	public function getusers()
	{
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

	public function add()
	{
		//$this->load->view('public/head');
		$this->load->view('user/add');
	}

	public function add_user()
	{
		$account = $this->input->post("account",true);
		$pwd = $this->input->post("pwd",true);
		$res = $this->db->insert('f_user',array('account'=>$account,'pwd'=>$pwd));
		if($res){
			$this->ajaxReturn(array('status'=>1,'msg'=>'success'));
		}else{
			$this->ajaxReturn(array('status'=>0,'msg'=>'fail'));
		}
	}

	public function edit()
	{
		$id = $this->input->get('id',true);
		$data = $this->db->get_where('f_user',array('id'=>$id));
		var_dump($data);
		$this->load->view('edit',$data);
	}
}