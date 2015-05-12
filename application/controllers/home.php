<?php
	
class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login') != TRUE)
		{
			redirect('auth');
		}
	}

	function index()
	{
		$this->load->view('Header');
		$this->load->view('Front');
		$this->load->view('Create');
		$this->load->view('Footer');
	}

	function createCretificate(){
		
	}

}

/* End of file admin.php */