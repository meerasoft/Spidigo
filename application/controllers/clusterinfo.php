<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clusterinfo extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model("Clusterinfo_model");
	}
	
	public function index()
	{
		$result = $this->Clusterinfo_model->getc();
		$data['dept'] = $result;
		$this->load->view("commonwh/navbar");
		$this->load->view("commonwh/sidebar");
		$this->load->view("clusterinfo/clusterinfo",$data);
		$this->load->view("commonwh/footer");
	}
	
	public function getc()
	{
		$result = $this->Clusterinfo_model->getc();
		$data['dept'] = $result;
		//$this->load->view('wh/newfile',$data);
	
		$this->load->view("commonwh/navbar");
		$this->load->view("commonwh/sidebar");
		$this->load->view("clusterinfo/clusterinfo",$data);
		$this->load->view("commonwh/footer");
	}
}
?>