<main id="content" role="main">

    <?php if($searchOffers) { ?>
    <!-- Features Section -->
    <div class="bg-gray-100">
      <div class="container space-2 space-3--lg">
        <!-- Title -->
        <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
          <span class="u-label u-label--sm u-label--purple mb-3">Offers</span>
          <h2 class="h3"></h2>
        </div>
        <!-- End Title -->

        <div class="row">
        <?php foreach($searchOffers as $offer) { ?>
          <div class="col-md-3">
              <div class="card card-frame mb-3">
                <div class="card-body p-3">
                    <a href="<?php  echo base_url('offers-and-reviews/').$offer['offer_brand'] ?>">
                        <img class="customFeaturedImg" src="<?php  echo base_url('assets/common/offers_picture/').$offer['offer_image'] ?>">
                    </a>
                    <h4 class="customFeaturedTitle"><?php echo $offer['offer_name'] ?></h4>
                    <p class="customFeaturedDesc"><?php echo $offer['offer_details'] ?></p>
                    <center>
                        <p style="visibility: hidden" id="promocode_match<?php echo $offer['offer_id']?>"><?php echo $offer['offer_id']?></p><br>

                        <p id="promocode<?php echo $offer['offer_id']?>"></p><br>
                        <button id="getOffer" class="btn btn-success" onclick="getOffer('<?php echo $offer['offer_id']?>')">Get Offer</button>
                    </center>
                </div>
              </div>
          </div>
        <?php } ?>

    </div>
    <?php } ?>
    <!-- End Features Section -->
    
    <br><br>
    
    <!-- Hero Section -->
    <div class="container space-2 space-3-top--lg">
      <?php if($allResults) { ?>
        <h3>All Reviews (<?php echo $allResults[0]['sale_brand_name']; ?>)</h3>
      <?php } else { ?>
        <h3>Search result (0)</h3>
      <?php } ?>
      
      <!-- Rating -->
      <?php 
      $avgReview= (float)$avgReview;
      // echo gettype($avgReview); exit;
    //   echo round($avgReview,2); exit;

    if(strpos($avgReview,".") !== false) {     
      $lastRate='<i class="fa fa-star-half rating"></i>';
    } else {
      $lastRate='<i class="fa fa-star rating"></i>';
    }
    // exit;
      ?>
      <?php if($allResults) { ?>
      <p class="lead">Average Rating: <strong>
          <?php for($i=1;$i<$avgReview;$i++) { ?>
            <i class="fa fa-star rating" aria-hidden="true"></i>
          <?php } echo $lastRate; echo " (".round($avgReview,1).")"; ?>
        </strong> 
      </p>
      <?php } ?>
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