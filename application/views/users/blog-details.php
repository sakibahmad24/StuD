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
            <?php echo $blogDetails['review_title']; ?>
        </p>

      <!-- Social Networks -->
      <ul class="list-inline w-md-75 w-lg-60 text-center mx-md-auto mb-0">
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
            <span class="fab fa-pinterest u-icon__inner"></span>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="u-icon u-icon--secondary u-icon--sm" href="#">
            <span class="fab fa-get-pocket u-icon__inner"></span>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="u-icon u-icon--secondary u-icon--sm" href="#">
            <span class="fab fa-telegram-plane u-icon__inner"></span>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="u-icon u-icon--secondary u-icon--sm" href="#">
            <span class="fab fa-slack-hash u-icon__inner"></span>
          </a>
        </li>
      </ul>
      <!-- End Social Networks -->
    </div>
    <!-- End Article Content -->
  </main>
  <div style="margin-bottom:100px;"></div>