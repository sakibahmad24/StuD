<main id="content" role="main">
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
    <?php foreach($catSlider as $slider) { ?>
    
      <div class="js-slide">
        <div class="d-md-flex align-items-md-center height-20vh--lg gradient-overlay-half-dark-v2 bg-img-hero" style="background-image: url(<?php echo base_url('assets/common/sliders_picture/').$slider['slider_image'] ?>);">
          <div class="container text-center space-2 space-3--md">
            <!-- Description -->
            <?php if($slider['slider_title']) { ?>
                <div class="w-lg-80 mx-lg-auto mb-3">
                  <h1 class="display-3 font-size-48--md-down text-white"
                      data-scs-animation-in="fadeInUp"><?php echo $slider['slider_title'] ?></h1>
                </div>
            <?php } else if($slider['slider_title']==NULL) { ?>
                <div style="height:136px; width:100%; background: transparent;"></div>
            <?php } ?>
            
            <div class="w-lg-50 mx-lg-auto mb-7">
              <p class="lead text-white"
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
          <span class="u-label u-label--sm u-label--purple mb-3">What is Stud?</span>
          <h2 class="h3">Build for Students and provides enjoyable usage</h2>
        </div>
        <!-- End Title -->

        <div class="row">
        <?php foreach($homeoffers as $offer) { ?>
          <div class="col-md-3">
              <a class="card card-frame mb-3" href="<?php echo base_url('pages/about-agency.html');   ?>">
                <div class="card-body p-3">
                  <div class="media">
                    <img class="max-width-6 mr-3" src="<?php  echo base_url('assets/common/offers_picture/').$offer['offer_image'] ?>">
                      <div class="media-body">
                      <h4 class="h6 text-dark mb-0"><?php echo $offer['offer_name'] ?></h4>
                      <!-- <p class="small mb-0"></p> -->
                    </div>
                  </div>
                  <p class="small mb-0" style="text-align:justify;"><?php echo $offer['offer_details'] ?></p>
                </div>
              </a>
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







    <!-- News Section -->
    <div class="bg-gray-100">
      <div class="container space-2 space-3--lg">
        <!-- Title -->
        <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
          <h2 class="h3">Read our news &amp; blogs</h2>
          <p>Our duty towards you is to share our experience we're reaching in our work path with you.</p>
        </div>
        <!-- End Title -->

        <div class="row">

       <?php foreach($homeblog as $value) { ?> 

        <div class="card-deck d-block d-lg-flex col-md-6">
          <article class="card border-0 mb-5">
            <div class="card-body row align-items-stretch no-gutters p-0">
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

    <!-- CTA -->
    <div class="gradient-overlay-half-primary-v1" style="display:none;">
      <div class="bg-img-hero" style="background-image: url(<?php echo base_url('assets/assets_user/img/bg/bg2.png') ?>);">
        <div class="container text-center space-2">
          <!-- Title -->
          <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
            <h2 class="h1 text-white">Get started with Space</h2>
            <p class="lead text-white">Space gives you everything you need to manage business, build great stuff, and reach your goals.</p>
          </div>
          <!-- End Title -->

          <!-- Slick Carousel -->
          <div class="js-slick-carousel u-slick"
               data-autoplay="true"
               data-speed="5000"
               data-infinite="true"
               data-slides-show="6"
               data-responsive='[{
                 "breakpoint": 1200,
                 "settings": {
                   "slidesToShow": 4
                 }
               }, {
                 "breakpoint": 992,
                 "settings": {
                   "slidesToShow": 4
                 }
               }, {
                 "breakpoint": 768,
                 "settings": {
                   "slidesToShow": 3
                 }
               }, {
                 "breakpoint": 576,
                 "settings": {
                   "slidesToShow": 3
                 }
               }, {
                 "breakpoint": 480,
                 "settings": {
                   "slidesToShow": 2
                 }
               }]'>
            <div class="js-slide">
              <img class="u-clients" src="<?php echo base_url('assets/assets_user/img/clients/amazon-white.png') ?>" alt="Image Description">
            </div>
            <div class="js-slide">
            <img class="u-clients" src="<?php echo base_url('assets/assets_user/img/clients/google-white.png') ?>" alt="Image Description">
            </div>
            <div class="js-slide">
            <img class="u-clients" src="<?php echo base_url('assets/assets_user/img/clients/paypal-white.png') ?>" alt="Image Description">
            </div>
            <div class="js-slide">
            <img class="u-clients" src="<?php echo base_url('assets/assets_user/img/clients/slack-white.png') ?>" alt="Image Description">
            </div>
            <div class="js-slide">
            <img class="u-clients" src="<?php echo base_url('assets/assets_user/img/clients/samsung-white.png') ?>" alt="Image Description">
            </div>
            <div class="js-slide">
            <img class="u-clients" src="<?php echo base_url('assets/assets_user/img/clients/airbnb-white.png') ?>" alt="Image Description">
            </div>
            <div class="js-slide">
            <img class="u-clients" src="<?php echo base_url('assets/assets_user/img/clients/lenovo-white.png') ?>" alt="Image Description">
            </div>
            <div class="js-slide">
            <img class="u-clients" src="<?php echo base_url('assets/assets_user/img/clients/spotify-white.png') ?>" alt="Image Description">
            </div>
          </div>
          <!-- End Slick Carousel -->
        </div>
      </div>
    </div>
    <!-- End CTA -->

       

    <div class="clearfix"></div>

  </main>

