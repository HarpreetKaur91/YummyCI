<?php 
   class Test extends CI_Controller
   {
  	public function __construct()
	{
		//call CodeIgniter's default Constructor
		parent::__construct();
		
		//load database libray manually
		$this->load->database();
		$this->load->helper('url');
		//load Model
		$this->load->model('Test_Model');
	}
	public function test()
	{
		$this->load->view('test');
	}
	public function savedata()
	{
		//load registration view form
		$this->load->view('test');
		//Check submit button 
		if($this->input->post('save'))
		{
			//get form's data and store in local varable
			$n=$this->input->post('name');
			$e=$this->input->post('email');
			$m=$this->input->post('password');
			
			//call saverecords method of Hello_Model and pass variables as parameter
			$this->Test_Model->saverecords($n,$e,$m);		
			redirect("test/dispdata");
		}
	}
	public function dispdata()
	{
		$result['data']=$this->Test_Model->displayrecords();
		$this->load->view('records',$result);
	}

	public function deletedata()
	{
		$id=$this->input->get('id');
		$this->Test_Model->deleterecords($id);
		redirect("test/dispdata");
	}

	public function updatedata()
	{
		$id=$this->input->get('id');
		$result['data']=$this->Test_Model->displayrecordsById($id);
		$this->load->view('update_records',$result);	
		
			if($this->input->post('update'))
			{
				$n=$this->input->post('name');
				$e=$this->input->post('email');
				$m=$this->input->post('password');
				$this->Test_Model->updaterecords($n,$e,$m,$id);
				redirect("test/dispdata");
			}
		}
   }

    
?>