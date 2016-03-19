<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wh extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Wh_model");
	}
	
	public function index()
	{
		$this->load->view('commonwh/navbar');
		$this->load->view('commonwh/sidebar');
		$this->load->view('wh/newfile');
		$this->load->view('commonwh/footer');
	}
}
?>