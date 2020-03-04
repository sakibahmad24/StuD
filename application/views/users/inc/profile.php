<div class="container-fluid" style="margin-top:100px;">
<div class="clearfix"></div>
    <div class="row">
        <div class="col-md-2 no-padding">
            <?php $this->load->view('users/inc/user_panel') ?>
        </div>
        <div class="col-md-10 no-padding">
            <div class="container">
                <div class="row">
                    <div class="jumbotron jumbotron_profile" style="background-color: #ffffff;">
                        <h3 class="display-3">Hello, <?php echo $this->session->userdata('fullname') ?></h3>
                        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                        <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>