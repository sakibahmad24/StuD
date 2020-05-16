<main id="content" role="main">
    <!-- Hero Section -->
    <div class="container space-2 space-3-top--lg">
      <h1>All Reviews</h1>
      
      <!-- Rating -->
      <?php 
    //   echo round($avgReview,2); exit;
      if(is_int(round($avgReview,0))) {
        $lastRate='<i class="fa fa-star rating"></i>';
    } else if(is_float(round($avgReview,1))) {
        $lastRate='<i class="fa fa-star-half rating"></i>';
    }
      ?>
      
      <p class="lead">Average Rating: <strong>
          <?php for($i=1;$i<$avgReview;$i++) { ?>
            <i class="fa fa-star rating" aria-hidden="true"></i>
          <?php } echo $lastRate; echo " (".round($avgReview,1).")"; ?>
        </strong> 
      </p>
      <!-- Rating -->
    </div>
    <!-- End Hero Section -->

    <!-- News Blog Content -->
    <div class="container space-3-bottom--lg">
        <div class="row">
            
            <?php foreach($allResults as $result) { ?> 
            
            <div class="col-md-6">
                <div class="card-deck d-block d-lg-flex">
                <article class="card border-0 mb-5">
                  <div class="card-body row align-items-stretch no-gutters p-0">
                    <!-- News Blog Card -->
                    <div class="col-7 border border-right-0 rounded-left">
                      <div class="p-5">
                        <h2 class="h5 mb-3">
                          <a href="<?php echo base_url('blog-details/').$result['review_id'] ?>"><?php echo $result['review_title'] ?></a>
                        </h2>
                        <p class="mb-0"><?php echo $result['sale_brand_name'] ?></p>
                        <p class="mb-0">
                        <?php for($i=0;$i<$result['review_rating'];$i++) { ?>
                          <i class="fa fa-star rating" style="color: golden!important;" aria-hidden="true"></i>
                        <?php } ?>
                        </p>
                      </div>
                    </div>
                    <div class="col-5 card-img-right border border-left-0 bg-img-hero" data-bg-img-src="<?php echo base_url('assets/assets_user/review_image/').$result['review_image'] ?>"></div>
                  </div>
                  <!-- End News Blog Card -->
                </article>
              </div>
            </div>
            
            <?php } ?>
            
        </div>
        
      


      <div class="mb-9"></div>
      
      
      
      <!-- Pagination -->
      <nav aria-label="Page navigation">
            <?php echo $pagination; ?>
      </nav>
      
      <!-- End Pagination -->
      <br><br>
      <style>
          .page-item.active .page-link {margin-top:12px;margin-right:20px;}
      </style>
    </div>
    <div style="margin-bottom:50px;"></div>
    <!-- End News Blog Content -->
  </main>