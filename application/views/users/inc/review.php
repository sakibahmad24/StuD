<div class="container space-1 space-3--md">
      <div class="row">
        <div class="col-md-7 mb-7 mb-md-0">
          <!-- Cubeportfolio -->
          <div class="cbp cbp-caption-active cbp-caption-overlayBottomAlong cbp-ready" data-layout="grid" data-animation="quicksand" data-x-gap="32" data-y-gap="32" data-media-queries="[
                {&quot;width&quot;: 300, &quot;cols&quot;: 1}
              ]" style="height: 4248px;">
              <div class="cbp-wrapper-outer"><div class="cbp-wrapper">
            <!-- Item -->
            <div class="cbp-item" style="width: 634px; left: 0px; top: 0px;"><div class="cbp-item-wrapper">
              <div class="cbp-caption">
                <img src="<?= base_url('assets/assets_user/review_image/').$review_details['review_image'] ?>" alt="Image Description">
              </div>
            </div>
          </div>
            <!-- End Item -->
          </div>
        </div>
        </div>
          <!-- End Cubeportfolio -->
        </div>

        <div id="stickyBlockStartPoint" class="col-md-5">
          <!-- Sticky Block -->
          <div class="js-sticky-block pl-lg-4" data-sticky-view="md" data-start-point="#stickyBlockStartPoint" data-end-point="#stickyBlockEndPoint" data-offset-top="80" data-offset-bottom="130" style="z-index: 1; top: 80px; width: 445px; height: 580.4px;">
            <div class="mb-6">
              <h1><?php echo $review_details['review_title'] ?></h1>
              <strong> <p class="mb-0"><?php echo $review_details['review_subtitle'] ?></p> </strong>
              <p class="mb-0"><?php echo $review_details['review_body'] ?></p>
            </div>

            <hr class="my-5">

            <!-- List -->
            <ul class="list-unstyled mb-0">
              <li class="media mb-1">
                <div class="min-width-35">
                  <h2 class="h6">Rating</h2>
                </div>
                <div class="media-body">
                  <small class="text-muted" style="font-size: 20px;">
                    <strong>
                      <?php //echo $review_details['review_rating']?>
                  </strong>
                  <?php for($i=0;$i<$review_details['review_rating'];$i++) { ?>
                    <i class="fa fa-star rating" style="color: golden!important;" aria-hidden="true"></i>
                  <?php } ?>
                  </small>
                </div>
              </li>

              <!-- <li class="media mb-1">
                <div class="min-width-35">
                  <h4 class="h6">Designers</h4>
                </div>
                <div class="media-body">
                  <small class="text-muted">
                    Maria Muszynska,
                  </small>
                  <small class="text-muted">
                    Jack Wayley
                  </small>
                </div>
              </li> -->

              <!-- <li class="media mb-1">
                <div class="min-width-35">
                  <h3 class="h6">Partners</h3>
                </div>
                <div class="media-body">
                  <small class="text-muted">
                    Pixeel
                  </small>
                </div>
              </li> -->

              <!-- <li class="media">
                <div class="min-width-35">
                  <h4 class="h6">Awards</h4>
                </div>
                <div class="media-body">
                  <small class="d-block text-muted mb-1">
                    FWA Site of the Day
                  </small>
                  <small class="d-block text-muted mb-1">
                    Awwwards Site of the Day
                  </small>
                  <small class="d-block text-muted mb-1">
                    CSSAwards Site of the Day
                  </small>
                  <small class="d-block text-muted">
                    Bronze ADCN Lamp (Digital Craft)
                  </small>
                </div>
              </li> -->
            </ul>
            <!-- End List -->

            <hr class="my-5">

            <div class="media">
              <div class="min-width-35">
                <h4 class="h6">Share</h4>
              </div>
              <div class="media-body">
                <!-- Social Networks -->
                <ul class="list-inline mb-0">
                  <li class="list-inline-item">
                    <a class="u-icon u-icon--secondary u-icon--sm" href="#">
                      <span class="fab fa-facebook-f u-icon__inner"></span>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="u-icon u-icon--secondary u-icon--sm" href="#">
                      <span class="fab fa-google u-icon__inner"></span>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="u-icon u-icon--secondary u-icon--sm" href="#">
                      <span class="fab fa-twitter u-icon__inner"></span>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="u-icon u-icon--secondary u-icon--sm" href="#">
                      <span class="fab fa-github u-icon__inner"></span>
                    </a>
                  </li>
                </ul>
                <!-- End Social Networks -->
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <!-- End Sticky Block -->
        </div>
      </div>
    </div>
    <div class="container space-2-bottom">
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-between">
          <li class="page-item col">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
          </li>
          <li class="page-item col">
            <a class="page-link" href="#">
              <span class="fa fa-th"></span>
            </a>
          </li>
          <li class="page-item col">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>