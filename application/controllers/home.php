<?php
	
class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login') != TRUE || $this->session->userdata('username') == "admin")
		{
			redirect('auth');
		}
	}

	function index()
	{
		$this->load->model('certificate');
		$data['userdata'] = $this->session->all_userdata();
		$username = $data['userdata']['username'];
		$data['cert']=$this->certificate->Get_cert($username);
		$data['username'] = "user";
		$this->load->view('Header');
		$this->load->view('Front');
		$this->load->view('Create', $data);
		if($data['cert']) $this->load->view('Download',$data);
		$this->load->view('Footer');
	}

	function createCertificate(){
		$username = $this->input->post('username');
		$country = $this->input->post('country');
		$province = $this->input->post('province');
		$locality = $this->input->post('locality');
		$organization =$this->input->post('organization');
		$organizationUnit = $this->input->post('organizationUnit');
		$Name = $this->input->post('Name');
		$email = $this->input->post('email');

		$dn = array(
		  'countryName' => $country,
		  'stateOrProvinceName' => $province,
		  'localityName' => $locality,
		  'organizationName' => $organization,
		  'organizationalUnitName' => $organizationUnit,
		  'commonName' => $Name,
		  'emailAddress' => $email
		);

		$privkey = openssl_pkey_new();
		openssl_pkey_export($privkey, $pkeyout, "my password");
		$pubkey=openssl_pkey_get_details($privkey);
		$publicKey = $pubkey['key'];

		$csr = openssl_csr_new($dn, $privkey);

		$sscert = openssl_csr_sign($csr, null, $privkey, 365);

		$file = $Name . "_" . $email . ".crt";
		$path = "C:\\xampp\\htdocs\\openca\\cert\\". $file;
		$server = "cert/" . $file;

		openssl_x509_export_to_file($sscert, $path,  FALSE );
		openssl_pkey_export_to_file($privkey, "kunci.txt");

		$path = "C:\\\\xampp\\\\htdocs\\\\openca\\\\cert\\\\". $file;
		$this->load->model('certificate');
		$auth = $this->certificate->createCertificate($username, $Name, $country,$province,$locality,$organization,$organizationUnit,$email,$server,$publicKey,$pkeyout);
		if($this->session->userdata('username') == "admin")
		{
			redirect('admin');
		}
		else
		{
			redirect('home');	
		}
	}

}

/* End of file admin.php */