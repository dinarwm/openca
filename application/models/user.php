<?php

class User extends CI_Model
{
	//admin
	public function login($username, $password)
	{
		//select * from user where username = $username and password = $password
		$sql = "SELECT username FROM user where Username = '$username' and Password = '$password'";
        $query = $this->db->query($sql);
		
		if ($query->num_rows() > 0)
		{
			return $username;
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