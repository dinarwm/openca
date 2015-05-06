<!doctype html>
<html>
<head>
    <title>
        Membuat Sertifikat
    </title>
    <link href="css/bootstrap.css" rel="stylesheet">    
</head>
<body>
    <div class="container">
    <h1 class="text-center">Certificate Form</h1>
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form action="createCertificate.php" method="POST" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nama</label>
                                <div class="col-md-6">
                                    <input class="form-control" placeholder="Name" name="commonName" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Country</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="country">
                                        <option value="ID">Indonesia</option>
                                        <option value="US">USA</option>
                                        <option value="CA">Canada</option>
                                        <option value="FR">France</option>
                                        <option value="JP">Japan</option>
                                        <option value="QA">Qatar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">State or Province</label>
                                <div class="col-md-6">
                                    <input class="form-control" placeholder="Name" name="province" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Locality</label>
                                <div class="col-md-6">
                                    <input class="form-control" placeholder="Name" name="locality" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Organization Name</label>
                                <div class="col-md-6">
                                    <input class="form-control" placeholder="Name" name="organization" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Organizational Unit Name</label>
                                <div class="col-md-6">
                                    <input class="form-control" placeholder="Name" name="organizationUnit" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Email</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="email" type="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>