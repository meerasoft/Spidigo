<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_type extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("User_type_model");
	}
	
	public function index()
	{
		$this->load->view('common/navbar');
		$this->load->view('common/sidebar');
		$this->load->view('usertype/addusertype');
		$this->load->view('common/footer');
	}
	
	public function addusertype()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user_type','User type','required');
			
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('common/navbar');
			$this->load->view('common/sidebar');
			$this->load->view('usertype/addusertype');
			$this->load->view('common/footer');
		}
		else
		{
			if($this->input->post('submit')!='')
			{
				$arrInsert = array();
				$arrInsert['user_type'] = $this->input->post('user_type');
				//var_dump($arrInsert);
				$id = $this->User_type_model->addusertype($arrInsert);
				//redirect("users");
			}
			redirect('User_type/getusertype');
		}
	
	}
	
	public function getusertype()
	{
	
		$arrData = $this->User_type_model->getusertype();
		$data['info'] = $arrData;
		
		$this->load->view('common/navbar');
		$this->load->view('common/sidebar');
		$this->load->view('usertype/usertypelist',$data);
		$this->load->view('common/footer');
		//$this->load->view('agent/agentview');
	}
	
	public function editusertype($user_type_id=NULL)
	{
		$arrUsers = $this->User_type_model->getusertype($user_type_id);
		if($this->input->post('submit')!='')
		{
			$arrInsert = array();
			$arrInsert['user_type'] = $this->input->post('user_type');
			$arrInsert['user_type_id']    =  $user_type_id;
			$intUid = $this->User_type_model->editusertype($arrInsert);
			redirect("user_type/getusertype");
		}
		$data['user'] = $arrUsers;
		$this->load->view('common/navbar');
		$this->load->view('common/sidebar');
		$this->load->view('usertype/editusertype',$data);
		$this->load->view('common/footer');
	}
	
	public function delete($user_type_id=NULL)
	{
		$this->User_type_model->delete($user_type_id);
		redirect("user_type/getusertype");
	}
	
}
?>