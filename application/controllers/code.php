<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 生成明码、暗码
*/
class Code extends CI_Controller
{
	function __construct()
	{
        parent::__construct();
		$this->load->model('Code_model');
	}
	
	public function index()
	{
		$this->load->view('public/head');
		$this->load->view('code/index');
	}

	public function  get_codes()
    {
        $pagecurr = $_POST['pagecurr'];
        if(empty($pagecurr)){
            $pagecurr = 1;
        }
        $count = $this->db->count_all_results('f_code');
        $total = ceil($count/12);
        $order = 'id DESC';
        $limit = 12*($pagecurr-1).','.$pagecurr*12;
        $codes = $this->Code_model->get_code_condition($fields = '*','',$limit, $order)->result();
        $this->output->set_output(json_encode(
            $data = array(
                'codes'=>$codes,
                'total'=>$total
            )
        ));
    }
}