<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clusterinfo_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function getcluster($Id=NULL)
	{
		$this->db->select('c.*');
		$this->db->from('cluster c');
		if($Id!='')
		{
			$this->db->where("c.Id= '".$Id." '");
		}
		$query = $this->db->get();
		var_dump($query);
		
		$arrUser = $query->result_array();
		return $arrUser;
	}
	
	public function getc($id=NULL)
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
}
?>