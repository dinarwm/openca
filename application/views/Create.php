    <section id="create">
        <h1 class="text-center">Create Certificate</h1>
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <form action="<?php echo base_url(); ?>Home/createCertificate" method="POST" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Username</label>
                            <div class="col-md-6">
                                <input class="form-control" name="username" type="text" value="<?php echo $_SESSION["username"]; ?>" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input class="form-control" placeholder="Name" name="Name" type="text">
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
                                <input class="form-control" placeholder="State or Province" name="province" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Locality</label>
                            <div class="col-md-6">
                                <input class="form-control" placeholder="Locality" name="locality" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Organization Name</label>
                            <div class="col-md-6">
                                <input class="form-control" placeholder="Organization Name" name="organization" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Organizational Unit Name</label>
                            <div class="col-md-6">
                                <input class="form-control" placeholder="Organizational Unit Name" name="organizationUnit" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-6">
                                <input class="form-control" name="email" type="email" placeholder="blabla@blabla.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary col-md-12">
                                    Create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>