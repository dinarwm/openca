    <section id="Download">
        <h1 class="text-center">Download Certificate</h1>
            <div class="row">
                <div class="text-center">
                    <?php
                        foreach($cert as $row)
                        {
                             ?>
                    <a href="<?php echo base_url();echo $row['Certificate'];?>" class="btn btn-success" download>Download</a>
                    <?php }
                    ?>
                </div>
            </div>
    </section>