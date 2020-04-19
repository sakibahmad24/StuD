<div class="container-fluid" style="margin-top:100px;">
<div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <div class="row">
                    <div class="jumbotron jumbotron_profile" style="background-color: #ffffff;">
                        <h3 class="display-3">Hello, <?php echo $this->session->userdata('fullname') ?></h3>
                        <p>Your promocode is: <strong><?php echo $this->session->userdata('promocode') ?></strong></p>
                        <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>