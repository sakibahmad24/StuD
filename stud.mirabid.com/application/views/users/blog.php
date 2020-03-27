<main id="content" role="main">
    <!-- Hero Section -->
    <div class="container space-2 space-3-top--lg">
      <h1>All Blogs</h1>
      <p class="lead">Our duty towards you is to share our experience we're reaching in our work path with you.</p>
    </div>
    <!-- End Hero Section -->

    <!-- News Blog Content -->
    <div class="container space-3-bottom--lg">
        <div class="row">
            
            <?php foreach($blogs as $blog) { ?> 
            
            <div class="col-md-6">
                <div class="card-deck d-block d-lg-flex">
                <article class="card border-0 mb-5">
                  <div class="card-body row align-items-stretch no-gutters p-0">
                    <!-- News Blog Card -->
                    <div class="col-7 border border-right-0 rounded-left">
                      <div class="p-5">
                        <h2 class="h5 mb-3">
                          <a href="<?php echo base_url('blog-details/').$blog['review_id'] ?>"><?php echo $blog['review_title'] ?></a>
                        </h2>
                        <p class="mb-0"><?php echo $blog['sale_brand_name'] ?></p>
                      </div>
                    </div>
                    <div class="col-5 card-img-right border border-left-0 bg-img-hero" data-bg-img-src="<?php echo base_url('assets/assets_user/review_image/').$blog['review_image'] ?>"></div>
                  </div>
                  <!-- End News Blog Card -->
                </article>
              </div>
            </div>
            
            <?php } ?>
            
        </div>
        
      


      <div class="mb-9"></div>
      
      
      
      <!-- Pagination -->
      <nav aria-label="Page navigation" style="margin-bottom:70px;">
            <?php echo $pagination; ?>
      </nav>
      
      <!-- End Pagination -->
      <br><br>
      <style>
          .page-item.active .page-link {margin-top:12px;margin-right:20px;}
      </style>
    </div>
    <!-- End News Blog Content -->
  </main>