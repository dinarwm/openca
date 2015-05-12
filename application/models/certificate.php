<?php

class Certificate extends CI_Model
{
	//admin
	public function createCertificate($username, $name, $country,$province,$locality,$organization,$organizationUnit,$email,$certificate,$privkey)
	{
		//select * from user where username = $username and password = $password
		$sql = "INSERT INTO `certificate` (`ID_certificate`, `Username`, `Name`, `Country`, `Province`, `Locality`, `Organization Name`, `Organizational Unit Name`, `Email`, `Certificate`, `RevokeC`, `KeyC`) 
		VALUES (NULL,'$username','$name','$country','$province','$locality','$organization','$organizationUnit','$email','$certificate','0','$privkey')";
		$this->db->query($sql);
		return True;
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