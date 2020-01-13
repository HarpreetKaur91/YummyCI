<?php
	class Queries extends CI_Model
	{
		public function getRoles()
		{
			$roles = $this->db->get('roles');
			if($roles->num_rows() > 0)
			{
				return $roles->result();
			}
		}

		public function register($data)
		{
			unset($data['password_confirmation']);
			return $this->db->insert('users',$data);
		}

		public function check_admin_exists()
		{
			$check = $this->db->where(['role_id','1'])->get('users');
			if($check->num_rows() > 0)
			{
				return $check->num_rows();
			}
		}

		public function adminExist($email,$password)
		{
			$chkAdmin = $this->db->where(['email'=>$email,'password'=>$password,'role_id'=>'1'])->get('users');
			if($chkAdmin->num_rows() > 0)
			{
				return $chkAdmin->row();
			}
		}
	}
?>