<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Code_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    /**~*/
	Public function get_code_condition($fields = '*',$where = '',$limit = '', $order = '')
	{
		$sql = ' SELECT '.$fields.' FROM f_code';
		if(!empty($where)){
			$sql .= ' WHERE '.$where;
		}
		if(!empty($order)){
			$sql .= ' ORDER BY '.$order;
		}
		if(!empty($limit)){
			$sql .= ' limit '.$limit;
		}
		return $this->db->query($sql);
	}
}