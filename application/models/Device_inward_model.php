<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Device_inward_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	
	public function inwarddevices($data=array())
	{
		//var_dump($data);
		//var_dump($data[1]);
		//break;
		$cnt = count($data);
		//var_dump($cnt);
		//break;
		for ($x = 1; $x <= $cnt; $x++) {
			//var_dump($data[$x]);
			//break;
			$this->db->insert('device_inward',$data[$x]);
			//print_r($x);
		}
		//break;
		//$id = $this->db->insert_id();
		//return $id;
	}
	
	public function inwarddevice($data=array())
	{
		$this->db->insert('device_inward',$data);
		$id = $this->db->insert_id();
		return $id;
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
	
	public function edit($data=array())
	{
		$update = array();
		$update['device_name'] = $data['device_name'];
		$update['description'] = $data['description'];
		$update['mac'] = $data['mac'];
		$update['device_type'] = $data['device_type'];
		$update['serial_no'] = $data['serial_no'];
		$update['warranty'] = $data['warranty'];
		$update['expiry'] = $data['expiry'];
		$update['purchase_date'] = $data['purchase_date'];
		//var_dump($update);
		//break;
		$this->db->where("Id = ".$data['Id']." ");
		$this->db->update('device_inward',$update);
	}
	
	public function delete($Id=NULL)
	{
		$this->db->where("Id = '".$Id."' ");
		$this->db->delete("device_inward");
	}
}
?>