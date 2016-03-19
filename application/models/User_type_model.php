<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_type_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function addusertype($data=array())
	{
		$this->db->insert('user_type',$data);
		$id = $this->db->insert_id();
		return $id;
	}
	
	public function getusertype($id=NULL)
	{
		if($id!='')
		{
			$this->db->select("u.*");
			$this->db->from("user_type u");
			$this->db->where("u.user_type_id = ".$id." ");
		}
		$query = $this->db->get('user_type');
		$arrData = $query->result_array();
			
		//var_dump($arrData);
		return $arrData;
	}
	
	public function editusertype($data=array())
	{
		$update = array();
		$update['user_type'] = $data['user_type'];
		//var_dump($update);
		//break;
		$this->db->where("user_type_id = ".$data['user_type_id']." ");
		$this->db->update('user_type',$update);
	}
	
	public function delete($user_type_id=NULL)
	{
		$this->db->where("user_type_id = '".$user_type_id."' ");
		$this->db->delete("user_type");
	}
}
?>