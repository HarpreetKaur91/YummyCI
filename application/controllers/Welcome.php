<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends My_Controller {

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
		echo $this->session->userdata('isUserLoggedIn'); 
		$this->load->view('welcome_message.php');
	}

	public function signup()
	{
		if($this->input->post('submit_test'))
		{ 
			$this->form_validation->set_rules('first_name', 'First Name', 'required'); 
            $this->form_validation->set_rules('last_name', 'Last Name', 'required'); 
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check'); 
            $this->form_validation->set_rules('password', 'password', 'required'); 
            $this->form_validation->set_rules('password_confirmation', 'Re-enter Pass', 'required|matches[password]'); 
            $this->form_validation->set_rules('gender','Gender','Required');
			$this->form_validation->set_rules('phone','Phone no','Required');
			$this->form_validation->set_rules('role_id','Role','Required');
			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
			if($this->form_validation->run())
			{
				$data = $this->input->post();
				echo '<pre>';
				print_r($data);
				echo '</pre>';
				exit();
			}
			else
			{
				$data = validation_errors();
			}
		}

		$this->load->model('queries');
		$roles = $this->queries->getRoles();
		$this->load->view('layouts/header.php');
		$this->load->view('Test/registration.php',['roles'=>$roles,'data'=>$data]);
		$this->load->view('layouts/footer.php');
	}
}
