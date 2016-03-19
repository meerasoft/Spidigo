<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Device_inward extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Device_inward_model");
	}
	
	public function index()
	{
		$this->load->view('commonwh/navbar');
		$this->load->view('commonwh/sidebar');
		$this->load->view('deviceinward/adddevice');
		$this->load->view('commonwh/footer');
	}
	
	public function inwarddevices()
	{
		//var_dump($_POST['device']);
		if($this->input->post('submit')!='')
		{
			$arrInsert = $_POST['device'];
			$id = $this->Device_inward_model->inwarddevices($arrInsert);
		}
		redirect('Device_inward');
		//break;
	}
	
	public function inwarddevice()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('device_name','Name','required');
		$this->form_validation->set_rules('description','area','required');
		$this->form_validation->set_rules('mac','location','required');
		$this->form_validation->set_rules('device_type','Name','required');
		$this->form_validation->set_rules('serial_no','area','required');
		$this->form_validation->set_rules('warranty','location','required');
		$this->form_validation->set_rules('expiry','Name','required');
		$this->form_validation->set_rules('purchase_date','area','required');
	
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view("commonwh/navbar");
			$this->load->view("commonwh/sidebar");
			$this->load->view('deviceinward/adddevice');
			$this->load->view("commonwh/footer");
		}
		else
		{
			if($this->input->post('submit')!='')
			{
				$arrInsert = array();
				$arrInsert['device_name'] = $this->input->post('device_name');
				$arrInsert['description'] = $this->input->post('description');
				$arrInsert['mac'] = $this->input->post('mac');
				$arrInsert['device_type'] = $this->input->post('device_type');
				$arrInsert['serial_no'] = $this->input->post('serial_no');
				$arrInsert['warranty'] = $this->input->post('warranty');
				$arrInsert['expiry'] = $this->input->post('expiry');
				$arrInsert['purchase_date'] = $this->input->post('purchase_date');
	
				var_dump($arrInsert);
				$id = $this->Device_inward_model->inwarddevice($arrInsert);
				//redirect("users");
			}
			redirect('Device_inward');
		}
	
	}
	
	public function getdeviceinward()
	{
		    $arrData = $this->Device_inward_model->getdeviceinward();
		    $data['info'] = $arrData;
	
		    $this->load->view("commonwh/navbar");
			$this->load->view("commonwh/sidebar");
			$this->load->view('deviceinward/listdevice',$data);
			$this->load->view("commonwh/footer");
		//$this->load->view('agent/agentview');
	}
	
	public function edit($Id=NULL)
	{
		$arrUsers = $this->Device_inward_model->getdeviceinward($Id);
		if($this->input->post('submit')!='')
		{
			$arrInsert = array();
			$arrInsert['device_name'] = $this->input->post('device_name');
			$arrInsert['description'] = $this->input->post('description');
			$arrInsert['mac'] = $this->input->post('mac');
			$arrInsert['device_type'] = $this->input->post('device_type');
			$arrInsert['serial_no'] = $this->input->post('serial_no');
			$arrInsert['warranty'] = $this->input->post('warranty');
			$arrInsert['expiry'] = $this->input->post('expiry');
			$arrInsert['purchase_date'] = $this->input->post('purchase_date');
			
			//var_dump($arrInsert);
			//break;
			$arrInsert['Id']  =  $Id;
			$intUid = $this->Device_inward_model->edit($arrInsert);
			redirect("Device_inward/getdeviceinward");
		}
		    $data['user'] = $arrUsers;
		    $this->load->view("commonwh/navbar");
			$this->load->view("commonwh/sidebar");
			$this->load->view('deviceinward/editdeviceinward',$data);
			$this->load->view("commonwh/footer");
	}
	
	public function delete($Id=NULL)
	{
		$this->Device_inward_model->delete($Id);
		redirect("Device_inward/getdeviceinward");
	}
}
?>