<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Device_assign_cluster extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Device_assign_cluster_model");
	}
	
	public function index()
	{
		$this->load->view('commonwh/navbar');
		$this->load->view('commonwh/sidebar');
		$this->load->view('Device_assign_cluster/Device_assign_cluster');
		$this->load->view('commonwh/footer');
	}
	
	public function getcluster()
	{
		$result = $this->Device_assign_cluster_model->getcluster();
		$data['dept'] = $result;
		//$this->load->view('wh/newfile',$data);
	
		$this->load->view('commonwh/navbar');
		$this->load->view('commonwh/sidebar');
		$this->load->view('Device_assign_cluster/Device_assign_cluster',$data);
		$this->load->view('commonwh/footer');
	}
	
	public function getdeviceinward()
	{
		$arrData = $this->Device_assign_cluster_model->getdeviceinward();
		$data['info'] = $arrData;
	
		$this->load->view("commonwh/navbar");
		$this->load->view("commonwh/sidebar");
		$this->load->view('Device_assign_cluster/listassign',$data);
		$this->load->view("commonwh/footer");
		//$this->load->view('agent/agentview');
	}
}
?>