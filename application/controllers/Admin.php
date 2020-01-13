<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function index()
	{
		$this->form_validation->set_rules('email', 'email', 'required|valid_email'); 
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run())
		{
			$email=$this->input->post('email');
			$password=sha1($this->input->post('password'));
			$this->load->model('queries');
			$userExist = $this->queries->adminExist($email,$password);
			if($userExist)
			{
				$sessionData = [
					'user_id'=>$userExist->id,
					'username'=>$userExist->first_name." ".$userExist->last_name,
					'email'=>$userExist->email,
					'role_id'=>$userExist->role_id 
				];
				$this->session->set_flashdata('message',"You're successfully logged in!.");
				$this->session->set_userdata($sessionData);
				return redirect('admin/dashboard');
			}
			else
			{
				$this->session->set_flashdata('message',"You're not able to login!.");
				return redirect('admin');
			}
		}

		if($this->session->userdata('user_id'))
		{
			return redirect('admin/dashboard');
		}
		else
		{
			$this->load->view('admin/login.php');
		}
	}

	public function register()
	{
		$this->form_validation->set_rules('first_name', 'first name', 'required'); 
        $this->form_validation->set_rules('last_name', 'last name', 'required'); 
        $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[users.email]'); 
        $this->form_validation->set_rules('password', 'password', 'required'); 
       	$this->form_validation->set_rules('password_confirmation', 'password confirmation', 'required|matches[password]'); 
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run())
		{
			$data = $this->input->post();
			$data['password']=sha1($this->input->post('password'));
			$data['created'] = date("Y-m-d H:i:s"); 
			$data['modified'] = date("Y-m-d H:i:s"); 
			$this->load->model('queries');
			if($this->queries->register($data))
			{
				$this->session->set_flashdata('message',"You're successfully registered!.");
				return redirect('admin/dashboard');
			}
			else
			{
				$this->session->set_flashdata('message','Failed to register!.');
				return redirect('admin/register');
			}
		}
		if($this->session->userdata('user_id'))
		{
			return redirect('admin/dashboard');
		}
		else
		{
			$this->load->model('queries');
			$roles = $this->queries->getRoles();
			$this->load->view('admin/register.php');
		}
	}

	public function post_sign_up()
	{
		$this->form_validation->set_rules('first_name', 'first name', 'required'); 
        $this->form_validation->set_rules('last_name', 'last name', 'required'); 
        $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[users.email]'); 
        $this->form_validation->set_rules('password', 'password', 'required'); 
       	$this->form_validation->set_rules('password_confirmation', 'password confirmation', 'required|matches[password]'); 
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run())
		{
			$data = $this->input->post();
			$data['password']=sha1($this->input->post('password'));
			$data['created'] = date("Y-m-d H:i:s"); 
			$data['modified'] = date("Y-m-d H:i:s"); 
			$this->load->model('queries');
			if($this->queries->register($data))
			{
				$this->session->set_flashdata('message',"You're successfully registered!.");
				return redirect('admin/dashboard');
			}
			else
			{
				$this->session->set_flashdata('message','Failed to register!.');
				return redirect('admin/register');
			}
		}
		else
		{
			$this->register();
		}
	}

	public function logout()
	{
		$this->session->unset_userdata("user_id");
		return redirect('admin');
	}
}
