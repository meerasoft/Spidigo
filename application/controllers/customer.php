<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Customer_model");
		//$this->load->library('pagination');
	}
	
	public function index()
	{
		$this->load->view("common/navbar");
		$this->load->view("common/sidebar");
		$this->load->view("customer/view");
		$this->load->view("common/footer");
	}
	
	public function addcustomer()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('account_no','First Name','required');
		$this->form_validation->set_rules('caf_no','Last Name','required');
		$this->form_validation->set_rules('user_name','User Name','required');
		$this->form_validation->set_rules('email','Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('cname','Password','required');
		$this->form_validation->set_rules('contact','contact','required');
		$this->form_validation->set_rules('address','address','required');
		$this->form_validation->set_rules('area','area','required');
		$this->form_validation->set_rules('city','city','required');
		$this->form_validation->set_rules('zip','zip','required');
		$this->form_validation->set_rules('state','state', 'required');
		$this->form_validation->set_rules('status','status','required');
		$this->form_validation->set_rules('plan_name','Plan Name','required');
	
			
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view("common/navbar");
			$this->load->view("common/sidebar");
			$this->load->view("customer/addcustomer");
			$this->load->view("common/footer");
		}
		else
		{
			if($this->input->post('submit')!='')
			{
				$arrInsert = array();
				$arrInsert['account_no'] = $this->input->post('account_no');
				$arrInsert['caf_no'] = $this->input->post('caf_no');
				$arrInsert['user_name'] = $this->input->post('user_name');
				$arrInsert['email'] = $this->input->post('email');
				$arrInsert['cname'] = $this->input->post('cname');
				$arrInsert['contact'] = $this->input->post('contact');
				$arrInsert['address'] = $this->input->post('address');
				$arrInsert['area'] = $this->input->post('area');
				$arrInsert['city'] = $this->input->post('city');
				$arrInsert['zip'] = $this->input->post('zip');
				$arrInsert['state'] = $this->input->post('state');
				$arrInsert['status'] = $this->input->post('status');
				$arrInsert['plan_name'] = $this->input->post('plan_name');
				//var_dump($arrInsert);
				$id = $this->Customer_model->addcustomer($arrInsert);
				//redirect("users");
			}
			redirect('customer');
		}
	
	}
	
	public function getcustomer()
	{
	
		$arrData = $this->Customer_model->getcustomer();
		$data['info'] = $arrData;
	
		$this->load->view("common/navbar");
		$this->load->view("common/sidebar");
		$this->load->view("customer/listcustomer",$data);
		$this->load->view("common/footer");
		//$this->load->view('agent/agentview');
	}
	
	public function editcustomer($Id=NULL)
	{
		$arrUsers = $this->Customer_model->getcustomer($Id);
		if($this->input->post('submit')!='')
		{
			$arrInsert = array();
			$arrInsert['account_no'] = $this->input->post('account_no');
			$arrInsert['caf_no'] = $this->input->post('caf_no');
			$arrInsert['user_name'] = $this->input->post('user_name');
			$arrInsert['email'] = $this->input->post('email');
			$arrInsert['cname'] = $this->input->post('cname');
			$arrInsert['contact'] = $this->input->post('contact');
			$arrInsert['address'] = $this->input->post('address');
			$arrInsert['area'] = $this->input->post('area');
			$arrInsert['city'] = $this->input->post('city');
			$arrInsert['zip'] = $this->input->post('zip');
			$arrInsert['state'] = $this->input->post('state');
			$arrInsert['status'] = $this->input->post('status');
			$arrInsert['plan_name'] = $this->input->post('plan_name');
			$arrInsert['Id']    =  $Id;
			$intUid = $this->Customer_model->editcustomer($arrInsert);
			redirect("customer/getcustomer");
		}
		$data['user'] = $arrUsers;
	
		$this->load->view("common/navbar");
		$this->load->view("common/sidebar");
		$this->load->view("customer/editcustomer",$data);
		$this->load->view("common/footer");
	}
	
	public function deletecustomer($Id=NULL)
	{
		$this->Customer_model->deletecustomer($Id);
		redirect("customer/getcustomer");
	}
	
	public function mail_exists() 
	{
		echo "hiiiii";
		
		$this->load->library('form_validation');
		$this->load->model('Customer_model');
		$is_exist = $this->Customer_model->mail_exists($email);
	
		if ($is_exist)
		{
			$this->form_validation->set_message('isEmailExist', 'Email address is already exist.');
			return false;
		} else {
			return true;
		}
	}
	
	function rolekey_exists($key)
	{
		$this->form_validation->set_rules('email', 'Email', 'callback_rolekey_exists');
		$this->Customer_model->mail_exists($key);
	}
	
}?>