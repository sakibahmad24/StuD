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
        <?php foreach($catOffer as $offer) { ?>
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

      

    </div>
    <!-- End Features Section -->



    <div style="margin-bottom:100px;"></div>

       

    <div class="clearfix"></div>

  </main>
