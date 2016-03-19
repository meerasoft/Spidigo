<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function addusers($data=array())
	{
		$this->db->insert('users',$data);
		$id = $this->db->insert_id();
		return $id;
	}
	
	public function getusertype($id=NULL)
	{
		if($id!='')
		{
			$this->db->select("u.*");
			$this->db->from("user_type u");
		}
		$query = $this->db->get('user_type');
		$result =$query->result_array();
		return $result;
	
	}
	
	public function getusers($id=NULL)
	{
		if($id!='')
		{
			$this->db->select("u.*");
			$this->db->from("users u");
			$this->db->where("u.Id = ".$id." ");
		}
		$query = $this->db->get('users');
		$arrData = $query->result_array();
	
		//var_dump($arrData);
		return $arrData;
	}
	
	public function getclusterid($id=NULL)
	{
		if($id!='')
		{
			$this->db->select("c.*");
			$this->db->from("cluster c");
		}
		$query = $this->db->get('cluster');
		$result =$query->result_array();
		return $result;
	}
	
	public function editusers($data=array())
	{
		$update = array();
		$update['fname'] = $data['fname'];
		$update['lname'] = $data['lname'];
		$update['user_name'] = $data['user_name'];
		$update['email'] = $data['email'];
		$update['password'] = $data['password'];
		$update['contact'] = $data['contact'];
	
		$this->db->where("Id = ".$data['Id']." ");
		$this->db->update('users',$update);
	}
	
	public function deleteusers($Id=NULL)
	{
		$this->db->where("Id = '".$Id."' ");
		$this->db->delete("users");
	}
	
	public function editcluster($data=array())
	{
		$update = array();
		$update['cluster_id'] = $data['cluster_id'];
		//var_dump($data);
		//break;
		$this->db->where("Id = ".$data['Id']." ");
		$this->db->update('users',$update);
	}
	
}
?>