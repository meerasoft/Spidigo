<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cluster_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function addcluster($data=array())
	{
		$this->db->insert('cluster',$data);
		$id = $this->db->insert_id();
		return $id;
	}
	
	public function getcluster($id=NULL)
	{
		if($id!='')
		{
			$this->db->select("c.*");
			$this->db->from("cluster u");
			$this->db->where("c.Id = ".$id." ");
		}
		$query = $this->db->get('cluster');
		$arrData = $query->result_array();
	
		//var_dump($arrData);
		return $arrData;
	}
}
?>