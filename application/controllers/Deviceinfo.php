<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deviceinfo extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Deviceinfo_model");
	}
	
	public function index()
	{
		$this->load->view("common/navbar");
		$this->load->view("common/sidebar");
		$this->load->view("deviceinfo/adddevice");
		//$this->load->view("deviceinfo/singledevice");
		//$this->load->view("deviceinfo/multipledevice");
		$this->load->view("common/footer");
	}
	
	public function adddevices()
	{
		//var_dump($_POST['device']);
		if($this->input->post('submit')!='')
		{
			$arrInsert = $_POST['device'];
			$id = $this->Deviceinfo_model->adddevices($arrInsert);
		}
		redirect('Deviceinfo');
		//break;
	}
	
	public function adddevice()
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
			$this->load->view("common/navbar");
		    $this->load->view("common/sidebar");
		    $this->load->view("deviceinfo/adddevice");
			$this->load->view("common/footer");
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
				
				//var_dump($arrInsert);
				$id = $this->Deviceinfo_model->adddevice($arrInsert);
				//redirect("users");
			}
			redirect('Deviceinfo');
		}
	
	}
}
?>