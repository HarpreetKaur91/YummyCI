<?php
class User extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url', 'form');	
		$this->load->library('form_validation');
	}

	public function index()
	{
		if($this->input->post('register'))
		{
			$config['upload_path'] = './upload/';
	        $config['allowed_types'] = 'gif|jpg|png';
	        $config['max_size'] = 2000;
	        $config['max_width'] = 1500;
	        $config['max_height'] = 1500;
        	$this->load->library('upload', $config);

			$n=$this->input->post('name');
			$e=$this->input->post('email');
			$p=$this->input->post('password');
			$i=$this->input->post('image');
	
			$que=$this->db->query("select * from users where email='".$e."'");
			$row = $que->num_rows();
			if($row)
			{
				$data['error']="<h3 style='color:red'>This user already exists</h3>";
			}
			else
			{
				$que=$this->db->query("INSERT INTO users (name,email,password,image) VALUES('".$n."','".$e."','".$p."','".$i."')");
				$data['error']="<h3 style='color:blue'>Your account created successfully</h3>";
			}					
		}
		$this->load->view('student_registration',@$data);	
	}

	public function login()
	{
		if($this->input->post('login'))
		{
			$e=$this->input->post('email');
			$p=$this->input->post('pass');
	
			$que=$this->db->query("select * from users where email='".$e."' and password='".$p."'");
			$row = $que->num_rows();
			if($row)
			{
				redirect('User/dashboard');
			}
			else
			{
				$data['error']="<h3 style='color:red'>Invalid login details</h3>";
			}	
		}
		$this->load->view('login',@$data);		
	}

	function dashboard()
	{
		$this->load->view('dashboard');
	}

	function uploadView()
	{
		$this->load->view('imageupload_form');
	}

	public function upload() 
	{
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('profile_pic')) 
		{
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('imageupload_form', $error);
        } 
		else 
		{
            $data = array('image_metadata' => $this->upload->data());

            $this->load->view('imageupload_success', $data);
        }
    }
}
?>