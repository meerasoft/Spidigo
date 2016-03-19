<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Device_assign_cluster_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	
	public function getdeviceinward($id=NULL)
	{
		if($id!='')
		{
			$this->db->select("d.*");
			$this->db->from("device_inward d");
			$this->db->where("d.Id = ".$id." ");
		}
		$query = $this->db->get('device_inward');
		$arrData = $query->result_array();
	
		//var_dump($arrData);
		return $arrData;
	}
	
}
?>