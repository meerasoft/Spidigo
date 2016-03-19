<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Deviceinfo_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	
	
	public function adddevice($data=array())
	{
		
			$this->db->insert('device_master',$data);
		
		$id = $this->db->insert_id();
		return $id;
		
	}
	
	public function adddevices($data=array())
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
			$this->db->insert('device_master',$data[$x]);
			//print_r($x);
		}
			//break;
		//$id = $this->db->insert_id();
		//return $id;
	}
}
?>