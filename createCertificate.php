<!DOCTYPE html>
<html>
<head>
  <title>
    Sertifikat
  </title>
  <link href="css/bootstrap.css" rel="stylesheet">
</head>
<h1 class="text-center">CERTIFICATE</h1>
<body style="margin-top: 120px">
  <div class="text-center">
    <!-- <a href="certificate.crt" download> -->
    <!-- <img src="certificate.jpg" alt="certificate" width="204" height="262" class="img-thumbnail"> -->
    <!-- Click to Download -->
    <!-- </a> -->
    <a href="index.php" class="btn btn-danger">Back</a>
    <a href="certificate.crt" class="btn btn-success" download>Download</a>
  </div>
  <div class="hidden">

<?php
// Fill in data for the distinguished name to be used in the cert
// You must change the values of these keys to match your name and
// company, or more precisely, the name and company of the person/site
// that you are generating the certificate for.
// For SSL certificates, the commonName is usually the domain name of
// that will be using the certificate, but for S/MIME certificates,
// the commonName will be the name of the individual who will use the
// certificate.
$country = $_POST['country'];
$province = $_POST['province'];
$locality = $_POST['locality'];
$organization = $_POST['organization'];
$organizationUnit = $_POST['organizationUnit'];
$commonName = $_POST['commonName'];
$email = $_POST['email'];

$dn = array(
  'countryName' => $country,
  'stateOrProvinceName' => $province,
  'localityName' => $locality,
  'organizationName' => $organization,
  'organizationalUnitName' => $organizationUnit,
  'commonName' => $commonName,
  'emailAddress' => $email
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
openssl_pkey_export($privkey, $pkeyout, 'mypassword');// and var_dump($pkeyout);

// Show any errors that occurred here
while (($e = openssl_error_string()) !== false) {
    //echo $e . '\n";
}
$file = $commonName . "_" . $email;
$path = "C:\\xampp\\htdocs\\openca\\cert\\". $file .".crt";

openssl_x509_export_to_file($sscert, $path,  FALSE );
?>