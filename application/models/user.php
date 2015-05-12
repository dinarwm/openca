<?php

class User extends CI_Model
{
	//admin
	public function login($username, $password)
	{
		//select * from user where username = $username and password = $password
		$result = $this->db->get_where('user',
			array
			(
				'username' => $username,
				'password' => $password
			)
		);
		
		if ($result->num_rows() > 0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function register($username, $password)
	{
		//select * from user where username = $username and password = $password
		$result = $this->db->get_where('user',
			array
			(
				'username' => $username,
				'password' => $password
			)
		);
		
		if ($result->num_rows() > 0)
		{
			return TRUE;
		}
		else
		{
			$sql = "INSERT INTO user (Username, Password) VALUES ('$username','$password')";
			$this->db->query($sql);
			return False;
		}
	}
	
}

/* End of file akun.php */