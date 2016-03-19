<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cluster extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model("Cluster_model");
	}
	
	public function index()
	{
		$this->load->view("common/navbar");
		$this->load->view("common/sidebar");
		$this->load->view("cluster/addcluster");
		$this->load->view("common/footer");
	}
	
	public function addcluster()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('area','area','required');
		$this->form_validation->set_rules('location','location','required');
	
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view("common/navbar");
		    $this->load->view("common/sidebar");
			$this->load->view("cluster/addcluster");
			$this->load->view("common/footer");
		}
		else
		{
			if($this->input->post('submit')!='')
			{
				$arrInsert = array();
				$arrInsert['name'] = $this->input->post('name');
				$arrInsert['area'] = $this->input->post('area');
				$arrInsert['location'] = $this->input->post('location');
				//var_dump($arrInsert);
				$id = $this->Cluster_model->addcluster($arrInsert);
				//redirect("users");
			}
			redirect('cluster/getcluster');
		}
	
	}
	
	public function getcluster()
	{
		$arrData = $this->Cluster_model->getcluster();
		$data['info'] = $arrData;
	
		$this->load->view("common/navbar");
		$this->load->view("common/sidebar");
		$this->load->view("cluster/listcluster",$data);
		$this->load->view("common/footer");
		//$this->load->view('agent/agentview');
	}
}
?>