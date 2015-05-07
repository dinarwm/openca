<!DOCTYPE html>
<html>
<head>
  

<?php

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

$privkey = openssl_pkey_new();

$csr = openssl_csr_new($dn, $privkey);


$sscert = openssl_csr_sign($csr, null, $privkey, 365);

openssl_csr_export($csr, $csrout);
openssl_x509_export($sscert, $certout);
openssl_pkey_export($privkey, $pkeyout, 'mypassword');

$file = $commonName . "_" . $email;
$path = "C:\\xampp\\htdocs\\openca\\cert\\". $file .".crt";

openssl_x509_export_to_file($sscert, $path,  FALSE );
?>
<title>
    Sertifikat
  </title>
  <link href="css/bootstrap.css" rel="stylesheet">
</head>
<h1 class="text-center">CERTIFICATE</h1>
<body style="margin-top: 120px">
  <div class="text-center">
    <a href="index.php" class="btn btn-danger">Back</a>
    <a href="<?php echo $path; ?>" class="btn btn-success" download>Download</a>
  </div>
  <div class="hidden">