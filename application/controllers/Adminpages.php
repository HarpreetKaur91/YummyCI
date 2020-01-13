<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminpages extends My_Controller
{
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user_id'))
			return redirect('admin');
	}

	public function dashboard()
	{
		$this->load->view('admin/dashboard.php');
	}

	public function addCategory()
	{
		echo "add category";
	}
}
