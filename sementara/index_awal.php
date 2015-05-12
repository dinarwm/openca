<html>
<head>
	<title>
		Membuat Sertifikat
	</title>
	<link href="css/bootstrap.css" rel="stylesheet">	
</head>
<body>
	<div class="container">
		<label><h1>Certificate Form</h1></label>
		<form action="createCertificate.php" method="POST">
			<label>
				<h5>Name</h5>
			</label>
			<input type="text" class="input-block-level" name="commonName">
			<label><h5>Country</h5></label>
			<table class="table">
				<thead>
					<tr>
						<td>
							<label class="radio">
								<input type="radio" name="country" id="optionsRadios1" value="ID" checked=""> Indonesia 
							</label>
						</td>
						<td>
							<label class="radio">
								<input type="radio" name="country" id="optionsRadios1" value="US"> USA
							</label> 
						</td>
						<td>
							<label class="radio ">
								<input type="radio" name="country" id="optionsRadios1" value="CA"> Canada 
							</label> 
						</td>
						<td>
							<label class="radio">		
								<input type="radio" name="country" id="optionsRadios1" value="FR"> France
							</label>
						</td>
					<td>
						<label class="radio">		
							<input type="radio" name="country" id="optionsRadios1" value="JP"> Japan
						</label>
					</td>
					<td>
						<label class="radio">		
							<input type="radio" name="country" id="optionsRadios1" value="QA"> Qatar
						</label>
					</td>
				</tr>
				</thead>
			</table>

			<label>
				<h5>State Or Province Name</h5>
			</label>
			<input type="text" class="input-block-level" name="province">
			<label>
				<h5>Locality Name</h5>
			</label>
			<input type="text" class="input-block-level" name="locality">
			<label>
				<h5>Organization Name</h5>
			</label>
			<input type="text" class="input-block-level" name="organization">
			<label>
				<h5>Organizational Unit Name</h5>
			</label>
			<input type="text" class="input-block-level" name="organizationUnit">
			<label>
				<h5>Email Address</h5>
			</label>
			<input type="email" class="input-block-level" name="email">
			<br>
			<br>
			<input type="submit" class="btn btn-large btn-primary btn-block" value="submit">
		</form>
	</div>
</body>