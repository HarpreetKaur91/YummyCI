<?php
class Test_Model extends CI_Model 
{
	function saverecords($name,$email,$password)
	{
		$query="INSERT INTO users (name,email,password) VALUES('".$name."','".$email."','".$password."')";
		$this->db->query($query);
	}

	function displayrecords()
	{
		$query=$this->db->query("select * from users");
		return $query->result();
	}

	function deleterecords($id)
	{
		$this->db->query("delete  from users where id='".$id."'");
	}

	function displayrecordsById($id)
	{
		$query=$this->db->query("select * from users where id='".$id."'");
		return $query->result();
	}
	
	function updaterecords($name,$email,$password,$id)
	{
		$query=$this->db->query("update users SET name='$name',email='$email',password='$password' where id='".$id."'");
	}
}
