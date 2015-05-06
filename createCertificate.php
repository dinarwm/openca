<!DOCTYPE html>
<html>
<head>
	<title>
		Certifikat
	</title>
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<h1 class="text-center">CERTIFICATE</h1>
<body style="margin-top: 120px">
<div class="text-center">
<a href="certificate.crt" download>
  <img src="certificate.jpg" alt="certificate" width="204" height="262" class="img-thumbnail">
  <br>
  Click to Download
</a>
<br>
<br>
<a href="index.php"> Back </a>
</div>

</body>
</html>

<?php
// Fill in data for the distinguished name to be used in the cert
// You must change the values of these keys to match your name and
// company, or more precisely, the name and company of the person/site
// that you are generating the certificate for.
// For SSL certificates, the commonName is usually the domain name of
// that will be using the certificate, but for S/MIME certificates,
// the commonName will be the name of the individual who will use the
// certificate.
$dn = array(
    "countryName" => $_POST["country"],
    "stateOrProvinceName" => $_POST["province"],
    "localityName" => $_POST["locality"],
    "organizationName" => $_POST["organization"],
    "organizationalUnitName" => $_POST["organizationUnit"],
    "commonName" => $_POST["commonName"],
    "emailAddress" => $_POST["email"]
);

// Generate a new private (and public) key pair
$privkey = openssl_pkey_new();

// Generate a certificate signing request
$csr = openssl_csr_new($dn, $privkey);

// You will usually want to create a self-signed certificate at this
// point until your CA fulfills your request.
// This creates a self-signed cert that is valid for 365 days
$sscert = openssl_csr_sign($csr, null, $privkey, 365);

// Now you will want to preserve your private key, CSR and self-signed
// cert so that they can be installed into your web server, mail server
// or mail client (depending on the intended use of the certificate).
// This example shows how to get those things into variables, but you
// can also store them directly into files.
// Typically, you will send the CSR on to your CA who will then issue
// you with the "real" certificate.
openssl_csr_export($csr, $csrout);// and var_dump($csrout);
openssl_x509_export($sscert, $certout);// and var_dump($certout);
openssl_pkey_export($privkey, $pkeyout, "mypassword");// and var_dump($pkeyout);

// Show any errors that occurred here
while (($e = openssl_error_string()) !== false) {
    //echo $e . "\n";
}

openssl_x509_export_to_file($sscert,  'C:\xampp\htdocs\CA\certificate.crt',  FALSE );
?>