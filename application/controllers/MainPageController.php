<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainPageController extends CI_Controller
{
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	*/
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('layouts/header.php');
		$this->load->view('pages/about.php');
		$this->load->view('layouts/footer.php');
	}

	public function blog()
	{
		$this->load->helper('url');
		$this->load->view('layouts/header.php');
		$this->load->view('pages/blog.php');
		$this->load->view('layouts/footer.php');
	}

	public function categories()
	{
		$this->load->helper('url');
		$this->load->view('layouts/header.php');
		$this->load->view('pages/categories.php');
		$this->load->view('layouts/footer.php');
	}

	public function contact()
	{
		$this->load->helper('url');
		$this->load->view('layouts/header.php');
		$this->load->view('pages/contact.php');
		$this->load->view('layouts/footer.php');
	}

	public function receipe()
	{
		$this->load->helper('url');
		$this->load->view('layouts/header.php');
		$this->load->view('pages/receipe.php');
		$this->load->view('layouts/footer.php');
	}
}
