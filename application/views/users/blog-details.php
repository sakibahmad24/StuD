<main id="content" role="main">
    <!-- Article Content -->
    <div class="container space-2 space-3--lg">
      <header class="w-md-75 w-lg-60 mx-md-auto">
        <h1 class="mb-5"><?php echo $blogDetails['review_title']; ?></h1>

        <!-- Author -->
        <div class="media align-items-center mb-5">
          <img class="u-avatar rounded-circle mr-3" src="<?php echo base_url('assets/assets_user/profile_pic/').$blogDetails['user_profile_pic']; ?>" alt="Image Description">
          <div class="media-body">
            <h4 class="h6 mb-0"><?php echo $blogDetails['user_fullname']; ?></h4>
            <?php  $actual = strtotime($blogDetails['review_created_at']);?>
            <small class="d-block text-muted"><?php echo $datemod = date("F d, Y", $actual); ?></small>
          </div>
          <p>
              <?php for($i=0;$i<$blogDetails['review_rating'];$i++) { ?>
                <i class="fa fa-star rating" aria-hidden="true"></i>
              <?php } ?> 
              <?php echo "(".$blogDetails['review_rating'].")"; ?>
          </p>
        </div>
        <!-- End Author -->
      </header>

      <!-- Image -->
      <div class="w-lg-75 text-center mx-lg-auto mb-5">
        <img style="height:300px; width: 350px;" class="img-fluid mb-2" src="<?php echo base_url('assets/assets_user/review_image/').$blogDetails['review_image']; ?>" alt="Image Description">
        <a class="small text-muted" href="#"></a>
      </div>
      <!-- End Image -->

      <!-- Description -->
      <div class="w-md-75 w-lg-60 mx-md-auto mb-9">
        <p style="margin: 50px 0;">
            <?php echo $blogDetails['review_body']; ?>
        </p>
        
        
        
        <!-- Share This -->
        <div class="sharethis-inline-share-buttons" data-title='<?php echo $blogDetails['review_title']; ?>'></div>

        <br>
        <?php if($this->session->userdata('isLoggedin')) { 
              if($blogDetails['is_reported']==0 || $blogDetails['reported_by']==NULL) { ?>
                <center>
                  <a onclick="report(<?php echo $blogDetails['review_id']; ?>)"
                    style="cursor:pointer;color:red;margin:5px;padding:5px;border:1px solid red;border-radius:5px;">
                    Report
                  </a>
                </center>
              <?php } elseif ($blogDetails['is_reported']==1 && $blogDetails['reported_by']==$this->session->userdata('fullname')) { ?>
                <center>
                <a href="<?php echo base_url('report/'.$blogDetails['review_id']); ?>" 
                  style="color:red;margin:5px;padding:5px;border:1px solid red;border-radius:5px;">
                  Undo Report
                </a>
              </center>
              <?php } else { ?>
                <center>
                <a href="<?php echo base_url('report/'.$blogDetails['review_id']); ?>" 
                  style="color:red;margin:5px;padding:5px;border:1px solid red;border-radius:5px;">
                  Report
                </a>
              </center>
             <?php }?>  
        <?php } ?>

        <!-- Share This -->
        <style>.popup_content{display: none !important;}</style>
        
    </div>
    <!-- End Article Content -->
  </main>
  <div style="margin-bottom:100px;"></div>