<?php

class Certificate extends CI_Model
{
	//admin
	public function createCertificate($username, $name, $country,$province,$locality,$organization,$organizationUnit,$email,$certificate,$public,$private)
	{
		//select * from user where username = $username and password = $password
		$sql = "INSERT INTO `certificate` (`ID_certificate`, `Username`, `Name`, `Country`, `Province`, `Locality`, `Organization Name`, `Organizational Unit Name`, `Email`, `Certificate`, `RevokeC`, `PublicKey`,`PrivateKey`) 
		VALUES (NULL,'$username','$name','$country','$province','$locality','$organization','$organizationUnit','$email','$certificate','0','$public','$private')";
		$this->db->query($sql);
		return True;
	}

	function Get_cert($username){
    	$sql = "SELECT Certificate FROM certificate where Username = '$username'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) 
        {
            return $query->result_array();
        }
        else 
        {
            return FALSE;
        }
    }

    function Get_list_cert(){
    	$sql = "SELECT * FROM certificate";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) 
        {
            return $query->result_array();
        }
        else 
        {
            return FALSE;
        }
    }

    public function revoke($id)
    {
    	$sql = "UPDATE Certificate SET RevokeC = '1' WHERE ID_certificate = '$id'";
    	$query = $this->db->query($sql);
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