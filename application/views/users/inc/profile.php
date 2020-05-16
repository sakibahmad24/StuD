<div class="container" style="margin-top:120px;">
<div class="clearfix"></div>
    <div class="row">
        <div class="col-md-4">
            <div class="container">
                <div class="row">
                    <div class="profilePic">
                        <img src="<?php echo base_url('assets/assets_user/profile_pic/').$this->session->userdata('user_profile_pic'); ?>" style="height:100%;width:100%;"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="container">
                <div class="row">
                    <div class="jumbotron jumbotron_profile" style="background-color: #ffffff;">
                        <h3 class="display-3">Hello, <?php echo $this->session->userdata('fullname') ?></h3>
                        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                         <br>   
                        <p><a href="<?php echo base_url('user/profile/update'); ?>">Update Profile</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>