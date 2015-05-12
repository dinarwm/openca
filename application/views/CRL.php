    <section id="CRL">
        <h1 class="text-center">Certificate Revoke List</h1>
            <div class="row">
                <div class="text-center">
                <div class="col-md-offset-2 col-md-8">
                    <table class="table table-hover ">
                      <thead>
                          <tr>
                            <th class="col-md-1 text-center">Username</th>
                            <th class="col-md-1 text-center">Email</th>
                            <th class="col-md-1 text-center">Download</th>
                            <th class="col-md-1 text-center">Revoke</th>
                            <th class="col-md-1 text-center">Public Key</th>
                            <th class="col-md-1 text-center">Private Key</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($cert as $row)
                                {
                            ?>
                            <?php if ($row['RevokeC'] == "1"){
                                    ?>
                            <tr>
                            <td class="col-md-1 text-center" ><?php echo $row['Username'];?></td>
                            <td class="col-md-1 text-center"><?php echo $row['Email'];?></td>
                            <td class="col-md-1 text-center"><a href="<?php echo base_url();echo $row['Certificate'];?>" class="btn btn-success" download>Download</a></td>
                            <td class="col-md-1 text-center">
                                -
                            </td>
                            <td class="col-md-1 text-center">
                                <div class="row text-center">
                                    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#largeModal">Public Key</a>
                                </div>
                            </td>
                            <td class="col-md-1 text-center">
                                <div class="row text-center">
                                    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#largeModal2">Private Key</a>
                                </div>
                            </td>
                            </tr>
                            
                            <?php }}
                            ?>
                        </tbody>
                    </table>

                    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true" style="margin-top:10%;">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Public Key</h4>
                              </div>
                              <div class="modal-body">
                                <?php echo $row['PublicKey'];?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="largeModal2" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true" style="margin-top:10%;">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Private Key</h4>
                              </div>
                              <div class="modal-body">
                                <?php echo $row['PrivateKey'];?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            </div>
    </section>