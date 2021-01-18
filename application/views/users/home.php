<main id="content" role="main">
    
    <!-- Topbar offer -->
    <div class="topBarOffer">
        <a href="#">
            <h3>Welcome to StuD</h3>
        </a>
    </div>

    <!-- Skyscrapper ad left -->
    <div class="skyScrapperLeft">
    <i class="fa fa-times-circle skyScrapperLeftClose" aria-hidden="true"></i>
      <a href="#" target="_blank">
        <img src="<?php echo base_url('assets/common/ads/skyscrapper.png'); ?>">
      </a>
    </div>
    <!-- Skyscrapper ad right -->
    <div class="skyScrapperRight">
    <i class="fa fa-times-circle skyScrapperRightClose" aria-hidden="true"></i>
      <a href="#" target="_blank">
        <img src="<?php echo base_url('assets/common/ads/skyscrapper.png'); ?>">
      </a>
    </div>

    <!-- Hero Section -->
    <div class="js-slick-carousel u-slick"
         data-infinite="true"
         data-autoplay="true"
         data-speed="7000"
         data-fade="true"
         data-adaptive-height="true"
         data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
         data-arrow-left-classes="fa fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
         data-arrow-right-classes="fa fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
         data-numbered-pagination="#slickPaging">
        
    <!-- Sliders -->        
    <?php foreach($homesliders as $slider) { ?>
    
      <div class="js-slide">
        <div class="d-md-flex align-items-md-center height-20vh--lg gradient-overlay-half-dark-v2 bg-img-hero" style="background-image: url(<?php echo base_url('assets/common/sliders_picture/').$slider['slider_image'] ?>);">
          <div class="container-fluid text-center space-2 space-3--md">
            <!-- Description -->
            <?php if($slider['slider_title']) { ?>
                <div class="w-lg-80 mx-lg-auto mb-3">
                  <h1 class="display-3 font-size-48--md-down text-white text-custom"
                      data-scs-animation-in="fadeInUp"><?php echo $slider['slider_title'] ?></h1>
                </div>
            <?php } else if($slider['slider_title']==NULL) { ?>
                <div style="height:136px; width:100%; background: transparent;"></div>
            <?php } ?>
            
            <div class="w-lg-80 mx-lg-auto mb-3">
              <p class="lead text-white lead-text-custom"
                 data-scs-animation-in="fadeInUp"
                 data-scs-animation-delay="200"><?php echo $slider['slider_subtitle'] ?></p>
            </div>
            <div data-scs-animation-in="fadeInUp"
                 data-scs-animation-delay="400">
            </div>
            <!-- End Description -->
          </div>
        </div>
      </div>
      
    <? } ?>  
    <!-- End Sliders  -->
      
      
    </div>
    <!-- End Hero Section -->

    <!-- End Features Section -->

    <!-- Features Section -->
    <div class="bg-gray-100">
      <div class="container space-2 space-3--lg">
        <!-- Title -->
        <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
          <span class="u-label u-label--sm u-label--purple mb-3">Join StuD</span>
          <h2 class="h3">Students save with StuD</h2>
        </div>
        <!-- End Title -->

        <div class="row">
        <?php foreach($homeoffers as $offer) { ?>
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
          <!-- <div class="col-md-3">
              <a class="card card-frame mb-3" href="">
                <div class="card-body p-3">
                  <div class="media">
                    <img class="max-width-6 mr-3" src="">
                      <div class="media-body">
                      <h4 class="h6 text-dark mb-0">About</h4>
                      <p class="small mb-0">Find out more about us</p>
                    </div>
                  </div>
                  <p class="small mb-0" style="text-align:justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                </div>
              </a>
          </div> -->
          <!-- <div class="col-md-3">
              <a class="card card-frame mb-3" href="">
                <div class="card-body p-3">
                  <div class="media">
                    <img class="max-width-6 mr-3" src="">
                      <div class="media-body">
                      <h4 class="h6 text-dark mb-0">About</h4>
                      <p class="small mb-0">Find out more about us</p>
                    </div>
                  </div>
                  <p class="small mb-0" style="text-align:justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                </div>
              </a>
          </div> -->
          <!-- <div class="col-md-3">
              <a class="card card-frame mb-3" href="">
                <div class="card-body p-3">
                  <div class="media">
                    <img class="max-width-6 mr-3" src="">
                      <div class="media-body">
                      <h4 class="h6 text-dark mb-0">About</h4>
                      <p class="small mb-0">Find out more about us</p>
                    </div>
                  </div>
                  <p class="small mb-0" style="text-align:justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                </div>
              </a>
          </div>

        
      </div> -->

      

    </div>
    <!-- End Features Section -->


  <!--  <div class="container" style="margin-bottom: 30px;">-->
  <!--  <div class="row" style="margin:30px 0 0 0;">-->
  <!--    <div class="col-md-6">-->
  <!--      <a href="#">-->
  <!--          <div class="large-box">-->
  <!--              <img src="<?php echo base_url('assets/assets_user/img/win.PNG') ?>" style="height: 100%; width: 100%">-->
  <!--          </div>-->
  <!--      </a>-->
  <!--    </div>-->
  <!--    <div class="col-md-6">-->
  <!--        <a href="#">-->
  <!--          <div class="large-box">-->
  <!--              <img src="<?php echo base_url('assets/assets_user/img/instore.PNG') ?>" style="height: 100%; width: 100%">-->
  <!--          </div>-->
  <!--      </a>-->
  <!--    </div>-->
  <!--    <div class="col-md-6">-->
  <!--        <a href="#">-->
  <!--          <div class="large-box">-->
  <!--              <img src="<?php echo base_url('assets/assets_user/img/new.PNG') ?>" style="height: 100%; width: 100%">-->
  <!--          </div>-->
  <!--      </a>-->
  <!--    </div>-->
  <!--    <div class="col-md-6">-->
  <!--        <a href="#">-->
  <!--          <div class="large-box">-->
  <!--              <img src="<?php echo base_url('assets/assets_user/img/last_chance.PNG') ?>" style="height: 100%; width: 100%">-->
  <!--          </div>-->
  <!--      </a>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div>-->





    <!-- News Section -->
    <div class="bg-gray-100">
      <div class="container space-2 space-3--lg">
        <!-- Title -->
        <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
          <h2 class="h3">Read user reviews</h2>
          <p>These genuine reviews will help you explore your options and make wiser decisions.</p>
        </div>
        <!-- End Title -->

        <div class="row">

       <?php foreach($homeblog as $value) { ?> 

        <div class="card-deck d-block d-lg-flex col-md-6">
          <article class="card border-0 mb-5">
            <div class="card-body row align-items-stretch no-gutters p-0 ">
              <!-- News Blog Card -->
              <div class="col-7 border border-right-0 rounded-left">
                <div class="p-5">
                  <h2 class="h5 mb-3">
                    <a href="<?php echo base_url('blog-details/').$value['review_id'] ?>"><?php echo $value['review_title'] ?></a>
                  </h2>
                  <p class="mb-0"><?php echo $value['sale_brand_name'] ?></p>
                </div>
              </div>
              <div class="col-5 card-img-right border border-left-0 bg-img-hero" data-bg-img-src="<?php echo base_url('assets/assets_user/review_image/').$value['review_image'] ?>"></div>
            </div>
            <!-- End News Blog Card -->
          </article>
        </div>

       <?php } ?>

        </div>

        <center>
          <a href="<?php echo base_url('blogs'); ?>">
            <span class="u-label u-label--sm u-label--purple mb-3">More Blogs</span>
            </a>  
        </center>

        

        
      </div>
    </div>
    <!-- End News Section -->

    
       <!-- FAQ Section -->
       <div class="container space-2 space-3--lg" style="margin-bottom: 100px;">
      <div class="row justify-content-lg-between">
        <div class="col-lg-4 mb-7 mb-lg-0">
          <!-- Info -->
          <div class="bg-dark shadow-sm rounded p-5 mt-lg-9">
            <h3 class="text-white">Have a question?</h3>
            <p class="text-light-70">Email us and we'll be happy to help.</p>

            <address class="mb-0">
              <span class="d-block text-light-70 font-weight-medium py-1">54, purana palton line, Dhaka metro south market (2nd floor), Dhaka-1000.</span>
              <span class="d-block text-light-70 font-weight-light py-1">Monday - Friday</span>
            </address>
          </div>
          <!-- End Info -->
        </div>

        <div class="col-lg-7">
          <!-- Title -->
          <div class="mb-4">
            <h2 class="h3">Frequently asked question</h2>
          </div>
          <!-- End Title -->

          <!-- Accordion -->
          <div class="mb-5" id="basicsAccordion">
            <div class="card card-collapse mb-3">
              <div class="card-header card-collapse__header" id="basicsHeadingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link btn-block d-flex justify-content-between card-collapse__btn collapsed"
                          data-toggle="collapse"
                          data-target="#basicsCollapseOne"
                          aria-expanded="false"
                          aria-controls="basicsCollapseOne">
                    How to get discounts?

                    <span class="card-collapse__btn-arrow">
                      <span class="fa fa-arrow-down card-collapse__btn-arrow-inner"></span>
                    </span>
                  </button>
                </h5>
              </div>
              <div id="basicsCollapseOne" class="collapse"
                   aria-labelledby="basicsHeadingOne"
                   data-parent="#basicsAccordion">
                <div class="card-body card-collapse__body">
                  Just register and click on the offers to get one.
                </div>
              </div>
            </div>

            <div class="card card-collapse mb-3">
              <div class="card-header card-collapse__header" id="basicsHeadingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link btn-block d-flex justify-content-between card-collapse__btn collapsed"
                          data-toggle="collapse"
                          data-target="#basicsCollapseTwo"
                          aria-expanded="false"
                          aria-controls="basicsCollapseTwo">
                    Can I add/upgrade my account?

                    <span class="card-collapse__btn-arrow">
                      <span class="fa fa-arrow-down card-collapse__btn-arrow-inner"></span>
                    </span>
                  </button>
                </h5>
              </div>
              <div id="basicsCollapseTwo" class="collapse"
                   aria-labelledby="basicsHeadingTwo"
                   data-parent="#basicsAccordion">
                <div class="card-body card-collapse__body">
                  Not right now.
                </div>
              </div>
            </div>

            <div class="card card-collapse mb-3">
              <div class="card-header card-collapse__header" id="basicsHeadingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link btn-block d-flex justify-content-between card-collapse__btn collapsed"
                          data-toggle="collapse"
                          data-target="#basicsCollapseThree"
                          aria-expanded="false"
                          aria-controls="basicsCollapseThree">
                    Can I purchase online through here?

                    <span class="card-collapse__btn-arrow">
                      <span class="fa fa-arrow-down card-collapse__btn-arrow-inner"></span>
                    </span>
                  </button>
                </h5>
              </div>
              <div id="basicsCollapseThree" class="collapse"
                   aria-labelledby="basicsHeadingThree"
                   data-parent="#basicsAccordion">
                <div class="card-body card-collapse__body">
                 No, we only show the offers.
                </div>
              </div>
            </div>

            <div class="card card-collapse">
              <div class="card-header card-collapse__header" id="basicsHeadingFour">
                <h5 class="mb-0">
                  <button class="btn btn-link btn-block d-flex justify-content-between card-collapse__btn collapsed"
                          data-toggle="collapse"
                          data-target="#basicsCollapseFour"
                          aria-expanded="false"
                          aria-controls="basicsCollapseFour">
                    How do I change my password?

                    <span class="card-collapse__btn-arrow">
                      <span class="fa fa-arrow-down card-collapse__btn-arrow-inner"></span>
                    </span>
                  </button>
                </h5>
              </div>
              <div id="basicsCollapseFour" class="collapse"
                   aria-labelledby="basicsHeadingFour"
                   data-parent="#basicsAccordion">
                <div class="card-body card-collapse__body">
                  Click forget password or change password from user settings.
                </div>
              </div>
            </div>
          </div>
          <!-- End Accordion -->

          <a href="../pages/help.html">See all FAQs</a>
        </div>
      </div>
    </div>
    <!-- End FAQ Section -->

    <div class="clearfix"></div>

  </main>
