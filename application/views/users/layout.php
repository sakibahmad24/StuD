<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>StuD</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo base_url('assets/assets_user/favicon.ico'); ?>">

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_user/vendor/font-awesome/css/all.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_user/vendor/hs-megamenu/src/hs.megamenu.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_user/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_user/vendor/custombox/dist/custombox.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_user/vendor/animate.css/animate.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_user/vendor/fancybox/jquery.fancybox.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_user/vendor/slick-carousel/slick/slick.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/assets_user/vendor/cubeportfolio/css/cubeportfolio.min.css')?>">

  <!-- CSS Space Template -->
  
  
  <link rel="stylesheet" href="<?php echo base_url('/assets/assets_user/css/theme.css'); ?>">
</head>

<body>
  <!-- Skippy -->
  <a id="skippy" class="sr-only sr-only-focusable u-skippy" href="#content">
    <div class="container">
      <span class="u-skiplink-text">Skip to main content</span>
    </div>
  </a>
  <!-- End Skippy -->

  <!-- ========== HEADER ========== -->
  <header id="header" class="u-header u-header--modern u-header--bordered u-header--bg-transparent u-header--white-nav-links u-header--sticky-top-lg">
    <div class="u-header__section">
      <div id="logoAndNav" class="container-fluid">
        <!-- Nav -->
        <nav class="js-mega-menu navbar navbar-expand-lg u-header__navbar hs-menu-initialized hs-menu-horizontal">
          <!-- Logo -->
          <div class="u-header__navbar-brand-wrapper">
            <a class="navbar-brand u-header__navbar-brand" href="<?= base_url() ?>" aria-label="Space">
              <img class="u-header__navbar-brand-default" style="height: 60px;width: 100%;" src="<?php echo base_url('assets/assets_user/img/stud/logo-header.png') ?>"  alt="Logo">
              <img class="u-header__navbar-brand-on-scroll" style="height: 60px;width: 100%;" src="<?php echo base_url('assets/assets_user/img/stud/logo-header.png') ?>"  alt="Logo">
              <img class="u-header__navbar-brand-mobile" style="height: 60px;width: 100%;" src="<?php echo base_url('assets/assets_user/img/stud/logo-header.png') ?>"  alt="Logo">
            </a>
          </div>
          <!-- End Logo -->

          <!-- Responsive Toggle Button -->
          <button type="button" class="navbar-toggler btn u-hamburger u-header__hamburger" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
            <span class="d-none d-sm-inline-block">Menu</span>
            <span id="hamburgerTrigger" class="u-hamburger__box ml-3">
              <span class="u-hamburger__inner"></span>
            </span>
          </button>
          <!-- End Responsive Toggle Button -->

          <!-- Navigation -->
          <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse py-0">
            <ul class="navbar-nav u-header__navbar-nav">
              <!-- Health and Fitness -->
              <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="fadeInUp" data-animation-out="fadeOut">
                <a id="homeMegaMenu" class="nav-link u-header__nav-link" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="homeSubMenu">
                  Health and Fitness
                  <!--<span class="fa fa-angle-down u-header__nav-link-icon"></span>-->
                </a>

                <!-- Home - Submenu -->

                <!-- End Home - Submenu -->
              </li>
              <!-- End Home -->

              <!-- Food and Drinks -->
              <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="fadeInUp" data-animation-out="fadeOut" data-position="right">
                <a id="PagesMegaMenu" class="nav-link u-header__nav-link" href="<?= base_url('restaurant') ?>">
                  Food and Drinks
                  <!--<span class="fa fa-angle-down u-header__nav-link-icon"></span>-->
                </a>

                <!-- Pages - Mega Menu -->

                <!-- End Pages - Mega Menu -->
              </li>
              <!-- End Pages -->

              <!-- Fashion -->
              <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="fadeInUp" data-animation-out="fadeOut">
                <a id="worksMegaMenu" class="nav-link u-header__nav-link" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="worksSubMenu">
                  Fashion
                  <!--<span class="fa fa-angle-down u-header__nav-link-icon"></span>-->
                </a>

              </li>
              <!-- End Works -->

              <!-- Blog -->
              <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="fadeInUp" data-animation-out="fadeOut">
                <a id="blogMegaMenu" class="nav-link u-header__nav-link" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="blogSubMenu">
                  Beauty
                  <!--<span class="fa fa-angle-down u-header__nav-link-icon"></span>-->
                </a> </li>
              <!-- End Button -->
              <?php if($class=='home' || $class=='signup') { ?>
              <li class="nav-item u-header__nav-item-btn">
                <a class="btn btn-sm btn-primary" href="#signupModal" role="button" data-modal-target="#signupModal" data-overlay-color="#151b26">
                  <span class="fa fa-user-circle mr-1"></span>
                  Signin
                </a>
              </li>
              <?php } else if($class =='profile') { ?>
              <li class="nav-item u-header__nav-item-btn">
                <a class="btn btn-sm btn-primary" href="<?php echo base_url('LoginController/logout') ?>" role="button">
                  <span class="fa fa-user-circle mr-1"></span>
                  Signout
                </a>
              </li>
              <?php } ?>
            </ul>
          </div>
          <!-- End Navigation -->

          <ul class="navbar-nav flex-row u-header__secondary-nav">
            <!-- Shopping Cart -->
            <!-- <li class="nav-item u-header__navbar-icon-wrapper u-header__navbar-icon">
              <a id="shoppingCartDropdownInvoker" class="btn btn-xs btn-icon btn-text-dark" href="javascript:;" role="button" aria-controls="shoppingCartDropdown" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-target="#shoppingCartDropdown" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                <span class="fa fa-shopping-cart btn-icon__inner"></span>
              </a>

              <div id="shoppingCartDropdown" class="u-unfold u-unfold--cart text-center border rounded-0 right-0 p-7 u-unfold--css-animation u-unfold--hidden fadeOut" aria-labelledby="shoppingCartDropdownInvoker" style="min-width: 250px; animation-duration: 300ms;">
                <span class="u-icon u-icon--primary u-icon--md rounded-circle mb-3">
                  <span class="fa fa-shopping-basket u-icon__inner"></span>
                </span>
                <span class="d-block">Your Cart is Empty</span>
              </div>
            </li> -->
            <!-- End Shopping Cart -->

            <!-- Account Signin -->
            <li class="nav-item u-header__navbar-icon">
              <!-- Account Sidebar Toggle Button -->
              <!-- <a id="sidebarNavToggler" class="btn btn-xs btn-icon btn-text-dark target-of-invoker-has-unfolds" href="javascript:;" role="button" aria-controls="sidebarContent" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent" data-unfold-type="css-animation" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                <span class="fa fa-bars btn-icon__inner font-size-13"></span>
              </a> -->
              <!-- End Account Sidebar Toggle Button -->
            </li>
            <!-- End Account Signin -->
          </ul>
        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <?php echo $body; ?>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  <footer class="bg-dark" style="position: relative;">
    <div class="container space-2" style="padding-bottom: 0;">
      <div class="row justify-content-md-between">
        <div class="col-6 col-md-3 col-lg-2 order-lg-3 mb-7 mb-lg-0">
          <h3 class="h6 text-white mb-3">About</h3>

          <!-- List Group -->
          <!-- <div class="list-group list-group-flush list-group-transparent">
            <a class="list-group-item list-group-item-action" href="../pages/about-agency.html">About Agency</a>
            <a class="list-group-item list-group-item-action" href="../pages/about-start-up.html">About Start-Up</a>
            <a class="list-group-item list-group-item-action" href="../pages/services-agency.html">Services Agency</a>
            <a class="list-group-item list-group-item-action" href="../pages/services-start-up.html">Services Start-Up</a>
          </div> -->
          <!-- End List Group -->
        </div>

        <div class="col-6 col-md-3 col-lg-2 order-lg-4 mb-7 mb-lg-0">
          <h3 class="h6 text-white mb-3">Company</h3>

          <!-- List Group -->
          <!-- <div class="list-group list-group-flush list-group-transparent">
            <a class="list-group-item list-group-item-action" href="../pages/contacts-agency.html">Contact Us</a>
            <a class="list-group-item list-group-item-action" href="../pages/help.html">Help</a>
            <a class="list-group-item list-group-item-action" href="../pages/careers.html">Careers</a>
            <a class="list-group-item list-group-item-action" href="../pages/terms.html">Terms &amp; Conditions</a>
            <a class="list-group-item list-group-item-action" href="../pages/privacy.html">Privacy &amp; Policy</a>
          </div> -->
          <!-- End List Group -->
        </div>

        <div class="col-6 col-md-3 col-lg-2 order-lg-5 mb-7 mb-lg-0">
          <h3 class="h6 text-white mb-3">Shop</h3>

          <!-- List Group -->
          <!-- <div class="list-group list-group-flush list-group-transparent">
            <a class="list-group-item list-group-item-action" href="../shop/classic.html">Classic</a>
            <a class="list-group-item list-group-item-action" href="../shop/single-product.html">Single Product</a>
            <a class="list-group-item list-group-item-action" href="../shop/checkout.html">Checkout</a>
          </div> -->
          <!-- End List Group -->
        </div>

        <div class="col-6 col-md-3 col-lg-2 order-lg-6 mb-7 mb-lg-0">
          <h3 class="h6 text-white mb-3">Social</h3>

          <!-- List -->
          <div class="list-group list-group-flush list-group-transparent">
            <a class="list-group-item list-group-item-action" href="#">
              <span class="fab fa-facebook-f min-width-3 text-center mr-2"></span>
              Facebook
            </a>
            <a class="list-group-item list-group-item-action" href="#">
              <span class="fab fa-instagram min-width-3 text-center mr-2"></span>
              Instagram
            </a>
            <!-- <a class="list-group-item list-group-item-action" href="#">
              <span class="fab fa-dribbble min-width-3 text-center mr-2"></span>
              Dribbble
            </a>
            <a class="list-group-item list-group-item-action" href="#">
              <span class="fab fa-github min-width-3 text-center mr-2"></span>
              GitHub
            </a> -->
          </div>
          <!-- End List -->
        </div>

        <div class="col-lg-4 order-lg-1 d-flex align-items-start flex-column">
          <!-- Logo -->
          <a class="d-inline-block mb-5" href="index.html" aria-label="Space">
            <img src="<?php echo base_url('assets/assets_user/img/stud/logo-footer.png') ?>" alt="Logo" style="max-width: 50%;">
          </a>
          <!-- End Logo -->

          <!-- Language -->
          <div class="btn-group d-block position-relative mb-4 mb-lg-auto" style="display:none!important;">
            <a id="footerLanguageInvoker" class="btn-text-secondary d-flex align-items-center u-unfold--language-btn rounded py-2 px-3" href="javascript:;" role="button"
               aria-controls="footerLanguage"
               aria-haspopup="true"
               aria-expanded="false"
               data-unfold-event="click"
               data-unfold-target="#footerLanguage"
               data-unfold-type="css-animation"
               data-unfold-duration="300"
               data-unfold-delay="300"
               data-unfold-hide-on-scroll="false"
               data-unfold-animation-in="slideInUp"
               data-unfold-animation-out="fadeOut">
              <span class="font-size-14">English</span>
              <span class="fa fa-angle-down u-unfold__icon-pointer u-unfold--language-icon-pointer ml-4"></span>
            </a>

            <!-- Content -->
            <div id="footerLanguage" class="u-unfold u-unfold--language bottom-0 left-0" aria-labelledby="footerLanguageInvoker">
              <div class="py-6 px-5">
                <h4 class="h6 mb-4">Select your language</h4>

                <div class="row">
                  <div class="col-6">
                    <!-- List of Languages -->
                    <div class="list-group list-group-borderless list-group-flush">
                      <a class="active d-flex align-items-center list-group-item list-group-item-action" href="#">
                        <img class="max-width-3 mr-2" src="../../assets/vendor/flag-icon-css/flags/4x3/us.svg" alt="United States Flag">
                        English
                      </a>
                      <a class="d-flex align-items-center list-group-item list-group-item-action" href="#">
                        <img class="max-width-3 mr-2" src="../../assets/vendor/flag-icon-css/flags/4x3/fr.svg" alt="France Flag">
                        Français
                      </a>
                      <a class="d-flex align-items-center list-group-item list-group-item-action" href="#">
                        <img class="max-width-3 mr-2" src="../../assets/vendor/flag-icon-css/flags/4x3/de.svg" alt="Germany Flag">
                        Deutsch
                      </a>
                      <a class="d-flex align-items-center list-group-item list-group-item-action" href="#">
                        <img class="max-width-3 mr-2" src="../../assets/vendor/flag-icon-css/flags/4x3/pt.svg" alt="Portugal Flag">
                        Português
                      </a>
                    </div>
                    <!-- End List of Languages -->
                  </div>

                  <div class="col-6">
                    <!-- List of Languages -->
                    <div class="list-group list-group-borderless list-group-flush">
                      <a class="d-flex align-items-center list-group-item list-group-item-action" href="#">
                        <img class="max-width-3 mr-2" src="../../assets/vendor/flag-icon-css/flags/4x3/es.svg" alt="Spain Flag">
                        Español
                      </a>
                      <a class="d-flex align-items-center list-group-item list-group-item-action" href="#">
                        <img class="max-width-3 mr-2" src="../../assets/vendor/flag-icon-css/flags/4x3/it.svg" alt="Italy Flag">
                        Italiano
                      </a>
                      <a class="d-flex align-items-center list-group-item list-group-item-action" href="#">
                        <img class="max-width-3 mr-2" src="../../assets/vendor/flag-icon-css/flags/4x3/ru.svg" alt="Russian Flag">
                        Русский
                      </a>
                      <a class="d-flex align-items-center list-group-item list-group-item-action" href="#">
                        <img class="max-width-3 mr-2" src="../../assets/vendor/flag-icon-css/flags/4x3/tr.svg" alt="Turkey Flag">
                        Türkçe
                      </a>
                    </div>
                    <!-- End List of Languages -->
                  </div>
                </div>
              </div>

              <!-- Signup -->
              <a class="u-unfold--language__link p-5" href="../pages/signup-simple.html">
                <small class="d-block text-muted mb-1">More languages coming soon.</small>
                <small class="d-block">Signup to get notified <span class="fa fa-arrow-right u-unfold__icon-pointer"></span></small>
              </a>
              <!-- End Signup -->
            </div>
            <!-- End Content -->
          </div>
          <!-- End Language -->

          <p class="small text-muted">All rights reserved. &copy; Stud 2020.</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Panel Sidebar Navigation -->
  <aside id="sidebarContent" class="u-sidebar u-unfold--css-animation u-unfold--hidden" aria-labelledby="sidebarNavToggler">
    <div class="u-sidebar__scroller">
      <div class="u-sidebar__container">
        <div class="u-sidebar--panel__footer-offset">
          <!-- Toggle Button -->
          <div class="d-flex align-items-center border-bottom py-4 px-5">
            <h4 class="h5 mb-0">Account</h4>

            <button type="button" class="close u-sidebar__close ml-auto"
                    aria-controls="sidebarContent"
                    aria-haspopup="true"
                    aria-expanded="false"
                    data-unfold-event="click"
                    data-unfold-hide-on-scroll="false"
                    data-unfold-target="#sidebarContent"
                    data-unfold-type="css-animation"
                    data-unfold-animation-in="fadeInRight"
                    data-unfold-animation-out="fadeOutRight"
                    data-unfold-duration="500">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- End Toggle Button -->

          <!-- Content -->
          <div class="js-scrollbar u-sidebar__body">
            <div class="u-sidebar__content py-5">
              <!-- Title -->
              <div class="py-2 px-5">
                <h4 class="text-uppercase text-muted font-size-13 mb-0">Menu label</h4>
              </div>
              <!-- End Title -->

              <!-- List -->
              <ul class="list-unstyled font-size-14 mb-5">
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="#">
                    <img class="max-width-4 mr-3" src="../../assets/svg/components/finance-dark-icon.svg" alt="Image Description">
                    <div class="media-body">
                      <span>Dashboard</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="#">
                    <img class="max-width-4 mr-3" src="../../assets/svg/components/touch-dark-icon.svg" alt="Image Description">
                    <div class="media-body">
                      <span>Activity</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="#">
                    <img class="max-width-4 mr-3" src="../../assets/svg/components/team-dark-icon.svg" alt="Image Description">
                    <div class="media-body">
                      <span>Team</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="#">
                    <img class="max-width-4 mr-3" src="../../assets/svg/components/email-dark-icon.svg" alt="Image Description">
                    <div class="media-body">
                      <span>Mailbox</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="#">
                    <img class="max-width-4 mr-3" src="../../assets/svg/components/projects-dark-icon.svg" alt="Image Description">
                    <div class="media-body">
                      <span>Projects</span>
                    </div>
                  </a>
                </li>
              </ul>
              <!-- End List -->

              <!-- Title -->
              <div class="py-2 px-5">
                <h4 class="text-uppercase text-muted font-size-13 mb-0">Sub level</h4>
              </div>
              <!-- End Title -->

              <!-- List -->
              <ul class="list-unstyled font-size-14 mb-0">
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="#">
                    <img class="max-width-4 mr-3" src="../../assets/svg/components/calendar-dark-icon.svg" alt="Image Description">
                    <div class="media-body">
                      <span>Calendar</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="#">
                    <img class="max-width-4 mr-3" src="../../assets/svg/components/cog-dark-icon.svg" alt="Image Description">
                    <div class="media-body">
                      <span>Tools</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="#">
                    <img class="max-width-4 mr-3" src="../../assets/svg/components/archive-dark-icon.svg" alt="Image Description">
                    <div class="media-body">
                      <span>Archive</span>
                    </div>
                  </a>
                </li>
              </ul>
              <!-- End List -->
            </div>
          </div>
          <!-- End Content -->
        </div>

        <!-- Footer -->
        <footer class="u-sidebar__footer u-sidebar__footer--panel py-4 px-5">
          <!-- List -->
          <ul class="list-inline font-size-14 mb-0">
            <li class="list-inline-item">
              <a class="u-sidebar--panel__link pr-2" href="../pages/privacy.html">Privacy</a>
            </li>
            <li class="list-inline-item">
              <a class="u-sidebar--panel__link px-2" href="../pages/terms.html">Terms</a>
            </li>
            <li class="list-inline-item">
              <a class="u-sidebar--panel__link pl-2" href="../pages/help.html">
                <i class="fa fa-info-circle"></i>
              </a>
            </li>
          </ul>
          <!-- End List -->
        </footer>
        <!-- End Footer -->
      </div>
    </div>
  </aside>
  <!-- End Panel Sidebar Navigation -->

  <!-- Signup Modal Window -->
  <div id="signupModal" class="js-signup-modal u-modal-window" style="width: 500px;">
    <!-- Modal Close Button -->
    <button class="btn btn-sm btn-icon btn-text-secondary u-modal-window__close" type="button" onclick="Custombox.modal.close();">
      <span class="fas fa-times"></span>
    </button>
    <!-- End Modal Close Button -->

    <!-- Content -->
    <div class="p-5">
        <!-- Signin -->
        <div id="signin" data-target-group="idForm">
          <!-- Title -->
          <header class="text-center mb-5">
            <h2 class="h4 mb-0">Please sign in</h2>
            <p>Signin to manage your account.</p>
          </header>
          <!-- End Title -->
          <?php echo form_open_multipart('LoginController/login', 'class="js-validate"'); ?>
          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <span class="fa fa-user form__text-inner"></span>
                </span>
              </div>
              <input type="email" class="form-control form__input" name="email" required
                     placeholder="Email"
                     aria-label="Email"
                     data-msg="Please enter a valid email address."
                     data-error-class="u-has-error"
                     data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <span class="fa fa-lock form__text-inner"></span>
                </span>
              </div>
              <input type="password" class="form-control form__input" name="password" required
                     placeholder="Password"
                     aria-label="Password"
                     data-msg="Your password is invalid. Please try again."
                     data-error-class="u-has-error"
                     data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <div class="row mb-3">
            <div class="col-6">
              <!-- Checkbox -->
              <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                <input type="checkbox" class="custom-control-input" id="rememberMeCheckbox">
                <label class="custom-control-label" for="rememberMeCheckbox">
                  Remember Me
                </label>
              </div>
              <!-- End Checkbox -->
            </div>

            <div class="col-6 text-right">
              <a class="js-animation-link float-right" href="javascript:;"
                 data-target="#forgotPassword"
                 data-link-group="idForm"
                 data-animation-in="fadeIn">Forgot Password?</a>
            </div>
          </div>

          <div class="mb-3">
            <button type="submit" class="btn btn-block btn-primary">Signin</button>
          </div>
          
          </form>

          <div class="text-center mb-3">
            <p class="text-muted">
              Do not have an account?
              <a href="<?php echo base_url('user/signup') ?>" target = "_blank">Signup
              </a>
            </p>
          </div>
          <!-- Divider -->
          <div class="text-center u-divider-wrapper my-3">
            <span class="u-divider u-divider--xs u-divider--text">OR</span>
          </div>
          <!-- End Divider -->

          <!-- Signin Social Buttons -->
          <div class="row mx-gutters-2 mb-4">
            <div class="col-sm-6 mb-2 mb-sm-0">
              <button type="button" class="btn btn-block btn-facebook">
                <span class="fab fa-facebook-f mr-2"></span>
                Signin with Facebook
              </button>
            </div>
            <div class="col-sm-6">
              <button type="button" class="btn btn-block btn-twitter">
                <span class="fab fa-twitter mr-2"></span>
                Signin with Twitter
              </button>
            </div>
          </div>
          <!-- End Signin Social Buttons -->
        </div>
        <!-- End Signin -->

        <!-- Signup -->
        <div id="signup" style="display: none; opacity: 0;" data-target-group="idForm">
          <!-- Title -->
          <header class="text-center mb-5">
            <h2 class="h4 mb-0">Please sign up</h2>
            <p>Fill out the form to get started.</p>
          </header>
          <!-- End Title -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <span class="fa fa-user form__text-inner"></span>
                </span>
              </div>
              <input type="text" class="form-control form__input" name="name" required
                     placeholder="Name"
                     aria-label="email"
                     data-msg="Please enter a your name."
                     data-error-class="u-has-error"
                     data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->
          
          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <span class="fa fa-envelope-square form__text-inner"></span>
                </span>
              </div>
              <input type="email" class="form-control form__input" name="email" required
                     placeholder="Email"
                     aria-label="Email"
                     data-msg="Please enter a valid email address."
                     data-error-class="u-has-error"
                     data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <span class="fa fa-phone form__text-inner"></span>
                </span>
              </div>
              <input type="text" class="form-control form__input" name="phone" required
                     placeholder="Phone"
                     aria-label="phone"
                     data-msg="Please enter your phone number."
                     data-error-class="u-has-error"
                     data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <span class="fa fa-id-card form__text-inner"></span>
                </span>
              </div>
              <input type="file" class="form-control form__input" name="student_id_img" required
                     placeholder="Student ID picture"
                     aria-label="phone"
                     data-msg="Please enter your student ID picture."
                     data-error-class="u-has-error"
                     data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <span class="fa fa-portrait form__text-inner"></span>
                </span>
              </div>
              <input type="file" class="form-control form__input" name="profile_img" required
                     placeholder="Profile picture"
                     aria-label="profile_img"
                     data-msg="Please enter your profile picture."
                     data-error-class="u-has-error"
                     data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <span class="fa fa-lock form__text-inner"></span>
                </span>
              </div>
              <input type="password" class="form-control form__input" name="password" id="password" required
                     placeholder="Password"
                     aria-label="Password"
                     data-msg="Your password is invalid. Please try again."
                     data-error-class="u-has-error"
                     data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <span class="fa fa-key form__text-inner"></span>
                </span>
              </div>
              <input type="password" class="form-control form__input" name="confirmPassword" required
                     placeholder="Confirm Password"
                     aria-label="Confirm Password"
                     data-msg="Password does not match the confirm password."
                     data-error-class="u-has-error"
                     data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <div class="mb-3">
            <button type="submit" class="btn btn-block btn-primary">Signup</button>
          </div>

          <div class="text-center mb-3">
            <p class="text-muted">
              Have an account?
              <a class="js-animation-link" href="javascript:;"
                 data-target="#signin"
                 data-link-group="idForm"
                 data-animation-in="fadeIn">Signin
              </a>
            </p>
          </div>

          <!-- Divider -->
          <div class="text-center u-divider-wrapper my-3">
            <span class="u-divider u-divider--xs u-divider--text">OR</span>
          </div>
          <!-- End Divider -->

          <!-- Signup Social Buttons -->
          <div class="row mx-gutters-2 mb-4">
            <div class="col-sm-6 mb-2 mb-sm-0">
              <button type="button" class="btn btn-block btn-facebook">
                <span class="fab fa-facebook-f mr-2"></span>
                Signup with Facebook
              </button>
            </div>
            <div class="col-sm-6">
              <button type="button" class="btn btn-block btn-twitter">
                <span class="fab fa-twitter mr-2"></span>
                Signup with Twitter
              </button>
            </div>
          </div>
          <!-- End Signup Social Buttons -->
        </div>
        <!-- End Signup -->

        <!-- Forgot Password -->
        <div id="forgotPassword" style="display: none; opacity: 0;" data-target-group="idForm">
          <!-- Title -->
          <header class="text-center mb-5">
            <h2 class="h4 mb-0">Recover account</h2>
            <p>Enter your email address and an email with instructions will be sent to you.</p>
          </header>
          <!-- End Title -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <span class="fa fa-user form__text-inner"></span>
                </span>
              </div>
              <input type="email" class="form-control form__input" name="email" required
                     placeholder="Email"
                     aria-label="Email"
                     data-msg="Please enter a valid email address."
                     data-error-class="u-has-error"
                     data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <div class="mb-3">
            <button type="submit" class="btn btn-block btn-primary">Recover Account</button>
          </div>

          <div class="text-center mb-3">
            <p class="text-muted">
              Have an account?
              <a class="js-animation-link" href="javascript:;"
                 data-target="#signin"
                 data-link-group="idForm"
                 data-animation-in="fadeIn">Signin
              </a>
            </p>
          </div>
        </div>
        <!-- End Forgot Password -->
      
    </div>
    <!-- End Content -->
  </div>
  <!-- End Signup Modal Window -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- Go to Top -->
  <a class="js-go-to u-go-to" href="javascript:;"
    data-position='{"bottom": 15, "right": 15 }'
    data-type="fixed"
    data-offset-top="400"
    data-compensation="#header"
    data-show-effect="slideInUp"
    data-hide-effect="slideOutDown">
    <span class="fa fa-arrow-up u-go-to__inner"></span>
  </a>
  <!-- End Go to Top -->
  
  <!-- JS Global Compulsory -->
  <script src="<?php echo base_url('assets/assets_user/vendor/jquery/dist/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/assets_user/vendor/jquery-migrate/dist/jquery-migrate.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/assets_user/vendor/popper.js/dist/umd/popper.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/assets_user/vendor/bootstrap/bootstrap.min.js'); ?>"></script>

  <!-- JS Implementing Plugins -->
  <script src="<?php echo base_url('assets/assets_user/vendor/hs-megamenu/src/hs.megamenu.js'); ?>"></script>
  <script src="<?php echo base_url('assets/assets_user/vendor/jquery-validation/dist/jquery.validate.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/assets_user/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/assets_user/vendor/custombox/dist/custombox.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/assets_user/vendor/custombox/dist/custombox.legacy.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/assets_user/vendor/slick-carousel/slick/slick.js'); ?>"></script>
  <script src="<?php echo base_url('assets/assets_user/vendor/fancybox/jquery.fancybox.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/assets_user/vendor/player.js/dist/player.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/assets_user/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js'); ?>"></script>



  <!-- JS Space -->
  <script src="<?php echo base_url('assets/assets_user/js/hs.core.js'); ?>"></script>
  <script src="<?php echo base_url('assets/assets_user/js/components/hs.header.js'); ?>"></script>
  <script src="<?php echo base_url('assets/assets_user/js/components/hs.unfold.js'); ?>"></script>
  <script src="<?php echo base_url('assets/assets_user/js/components/hs.validation.js'); ?>"></script>
  <script src="<?php echo base_url('assets/assets_user/js/helpers/hs.focus-state.js'); ?>"></script>
  <script src="<?php echo base_url('assets/assets_user/js/components/hs.malihu-scrollbar.js'); ?>"></script>
  <script src="<?php echo base_url('assets/assets_user/js/components/hs.modal-window.js'); ?>"></script>
  <script src="<?php echo base_url('assets/assets_user/js/components/hs.show-animation.js'); ?>"></script>
  <script src="<?php echo base_url('assets/assets_user/js/components/hs.slick-carousel.js'); ?>"></script>
  <script src="<?php echo base_url('assets/assets_user/js/components/hs.fancybox.js'); ?>"></script>
  <script src="<?php echo base_url('assets/assets_user/js/components/hs.video-player.js'); ?>"></script>
  <script src="<?php echo base_url('assets/assets_user/js/components/hs.go-to.js'); ?>"></script>


<!-- script for blog fixation -->
  <script>
        $(window).scroll(function(){
      //more then or equals to
      if($(window).scrollTop() >= 100 && $(window).scrollTop() <= 500 ){
          // $( ".js-sticky-block" ).css("margin-bottom", "100px");
          $( ".js-sticky-block" ).css({"position":"fixed","top":"100px"});

    
      //less then 100px from top
      }
    });
  </script>

  <!-- JS Plugins Init. -->
  <script>
    $(window).on('load', function () {
      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 991,
        hideTimeOut: 0
      });
    });

    $(document).on('ready', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
        afterOpen: function () {
          if (!$('body').hasClass('IE11')) {
            $(this).find('input[type="search"]').focus();
          }
        }
      });

      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate', {
        rules: {
          confirmPassword: {
            equalTo: '#password'
          }
        }
      });

      // initialization of forms
      $.HSCore.helpers.HSFocusState.init();

      // initialization of malihu scrollbar
      $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

      // initialization of autonomous popups
      $.HSCore.components.HSModalWindow.init('[data-modal-target]', '.js-signup-modal', {
        autonomous: true
      });

      // initialization of show animations
      $.HSCore.components.HSShowAnimation.init('.js-animation-link');

      // initialization of slick carousel
      $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

      // initialization of fancybox
      $.HSCore.components.HSFancyBox.init('.js-fancybox');

      // initialization of video player
      $.HSCore.components.HSVideoPlayer.init('.js-inline-video-player');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>


  <!-- below script for signup file upload placeholder -->
  <script>
        $("[type=file]").on("change", function(){
    // Name of file and placeholder
    var file = this.files[0].name;
    var dflt = $(this).attr("placeholder");
    if($(this).val()!=""){
        $(this).next().text(file);
    } else {
        $(this).next().text(dflt);
    }
    });
</script>



  
</body>
</html>