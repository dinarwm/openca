    <section id="Download">
        <h1 class="text-center">Download Certificate</h1>
            <div class="row">
                <div class="text-center">
                    <div class="col-md-offset-5 col-md-2">
                    <table class="table">
                        <tr>
                    <?php
                        foreach($cert as $row)
                        {
                             ?>
                             <td class="col-md-1 text-center">
                    <a href="<?php echo base_url();echo $row['Certificate'];?>" class="btn btn-success" download>Download</a>
                    </td>
                    <?php }
                    ?>
                    <td class="col-md-1 text-center">
                        <div class="row text-center">
                            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#largeModal2">Private Key</a>
                        </div>
                    </td>
                </tr>
            </table>
                    </div>
                </div>
            </div>
    </section>

                    <div class="modal fade" id="largeModal2" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true" style="margin-top:10%;">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Private Key</h4>
                              </div>
                              <div class="modal-body text-center">
                                <?php echo $row['PrivateKey'];?>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                        </div>
                    </div>