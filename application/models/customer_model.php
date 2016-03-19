<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function addcustomer($data=array())
	{
		$this->db->insert('customer',$data);
		$id = $this->db->insert_id();
		return $id;
	}
	
    public function getcustomer($id=NULL)
	{
		if($id!='')
		{
			$this->db->select("c.*");
			$this->db->from("customer c");
			$this->db->where("c.Id = ".$id." ");
		}
		$query = $this->db->get('customer');
		$arrData = $query->result_array();
	
		//var_dump($arrData);
		return $arrData;
	}
	
	public function editcustomer($data=array())
	{
		$update = array();
		$update['account_no'] = $data['account_no'];
		$update['caf_no'] = $data['caf_no'];
		$update['user_name'] = $data['user_name'];
		$update['email'] = $data['email'];
		$update['cname'] = $data['cname'];
		$update['contact'] = $data['contact'];
		$update['address'] = $data['address'];
		$update['area'] = $data['area'];
		$update['city'] = $data['city'];
		$update['zip'] = $data['zip'];
		$update['state'] = $data['state'];
		$update['status'] = $data['status'];
		$update['plan_name'] = $data['plan_name'];
	
		$this->db->where("Id = ".$data['Id']." ");
		$this->db->update('customer',$update);
	}
	
	public function deletecustomer($Id=NULL)
	{
		$this->db->where("Id = '".$Id."' ");
		$this->db->delete("customer");
	}
	
	
	
	function mail_exists($email)
	{
		$this->db->where('email',$email);
		$query = $this->db->get('customer');
		var_dump($query);
		//break;
		if ($query->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}
}
?>