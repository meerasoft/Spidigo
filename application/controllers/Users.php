<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Users_model");
		//$this->load->library('pagination');
	}
	
	public function index()
	{
		$this->load->view("common/navbar");
		$this->load->view("common/sidebar");
		$this->load->view("users/addusers");
		$this->load->view("common/footer");
	}
	
	public function addusers()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fname','First Name','required');
		$this->form_validation->set_rules('lname','Last Name','required');
		$this->form_validation->set_rules('user_name','User Name','required');
		$this->form_validation->set_rules('email','Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('contact','contact','required');
		$this->form_validation->set_rules('user_type','user type','required');
		
			
		if($this->form_validation->run() == FALSE)
		{
			$result = $this->Users_model->getusertype();
			//var_dump($result);
			$data['usertype'] = $result;
			$this->load->view("common/navbar");
			$this->load->view("common/sidebar");
			$this->load->view("users/addusers",$data);
			$this->load->view("common/footer");
		}
		else
		{
			if($this->input->post('submit')!='')
			{
				$arrInsert = array();
				$arrInsert['fname'] = $this->input->post('fname');
				$arrInsert['lname'] = $this->input->post('lname');
				$arrInsert['user_name'] = $this->input->post('user_name');
				$arrInsert['email'] = $this->input->post('email');
				$arrInsert['password'] = $this->input->post('password');
				$arrInsert['contact'] = $this->input->post('contact');
				$arrInsert['user_type'] = $this->input->post('user_type');
				//var_dump($arrInsert);
				$id = $this->Users_model->addusers($arrInsert);
				//redirect("users");
			}
			redirect('users/getusers');
		}
	
	}
	
	public function getusers()
	{
	
		$arrData = $this->Users_model->getusers();
		$data['info'] = $arrData;
	
		$this->load->view("common/navbar");
		$this->load->view("common/sidebar");
		$this->load->view("users/listusers",$data);
		$this->load->view("common/footer");
		//$this->load->view('agent/agentview');
	}
	
	public function getclusterid($id=NULL)
	{
		$result = $this->Users_model->getclusterid();
		//var_dump($result);
		//break;
		$data['uid'] = $id;
		$data['clusterid'] = $result;
		$this->load->view("common/navbar");
		$this->load->view("common/sidebar");
		$this->load->view('users/clusterassign',$data);
		$this->load->view('common/footer');
	}
	
	public function editusers($Id=NULL)
	{
		$arrUsers = $this->Users_model->getusers($Id);
		if($this->input->post('submit')!='')
		{
			$arrInsert = array();
			$arrInsert['fname'] = $this->input->post('fname');
			$arrInsert['lname'] = $this->input->post('lname');
			$arrInsert['user_name'] = $this->input->post('user_name');
			$arrInsert['email'] = $this->input->post('email');
			$arrInsert['password'] = $this->input->post('password');
			$arrInsert['contact'] = $this->input->post('contact');
			$arrInsert['Id']    =  $Id;
			$intUid = $this->Users_model->editusers($arrInsert);
			redirect("users/getusers");
		}
		$data['user'] = $arrUsers;
	
		$this->load->view("common/navbar");
		$this->load->view("common/sidebar");
		$this->load->view("users/editusers",$data);
		$this->load->view("common/footer");
	}
	
	public function getusertype()
	{
		$result = $this->Users_model->getusertype();
		//var_dump($result);
		$data['usertype'] = $result;
		//$this->load->view('users/newfile',$data);
	}
	
	public function deleteusers($Id=NULL)
	{
		$this->Users_model->deleteusers($Id);
		redirect("users/getusers");
	}
	
	public function editcluster()
	{
		if($this->input->post('submit')!='')
		{
			$this->load->helper('form');
			$arrInsert = array();
			$arrInsert['cluster_id'] = $this->input->post('cluster_id');
			$arrInsert['Id']    = $this->input->post('id');
			//var_dump($arrInsert);
			//break;
			$intUid = $this->Users_model->editcluster($arrInsert);
			redirect("users/getusers");
		}
	}
}
?>