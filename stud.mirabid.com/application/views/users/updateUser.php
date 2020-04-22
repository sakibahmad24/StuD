<div class="container">
    <div class="row spaceTop">
        <div class="col-md-8 col-xs-12 offset-md-2">
          
<html lang="en">
<head>
  <!-- Title -->
  <title>Update User</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../favicon.ico">

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="../../assets/vendor/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="../../assets/vendor/animate.css/animate.min.css">

  <!-- CSS Space Template -->
  <link rel="stylesheet" href="../../assets/css/theme.css">
  <link rel="stylesheet" href="../../assets/css/signin.css">

  <style>
    .upload-btn-wrapper-custom {
        width: 100%;
        position: relative;
        overflow: hidden;
        display: inline-block;
      }

      .btn-custom {
        width: 100%;
        cursor: pointer;
        border: 2px solid #151B26;
        color: #FFF;
        background-color: #151B26;
        padding: 8px 20px;
        border-radius: 8px;
        font-size: 15px;
        /* font-weight: bold; */
      }

    .upload-btn-wrapper-custom input[type=file] {
      font-size: 100px;
      position: absolute;
      left: 0;
      top: 0;
      opacity: 0;
    }
    .spaceTop {
        margin-top:50px;
    }
    @media(max-width:480px) {
     .spaceTop {
            margin-top:0px;
        }   
    }
  </style>
</head>
 <!-- ========== MAIN CONTENT ========== -->
<body>
<?php echo form_open_multipart('RegistrationController/updateUserInfo', 'class="js-validate form-signin p-5"'); ?>
 
  <!-- <form class="js-validate form-signin p-5"> -->
    <!-- Logo -->
    <!-- <div class="text-center">
      <a href="../home/index.html" aria-label="Space">
        <img class="mb-3" src="../../assets/svg/logos/logo-short.svg" alt="Logo" width="60" height="60">
      </a>
    </div> -->
    <!-- End Logo -->

    <!-- Title -->
    <div class="text-center mb-4">
      <h1 class="h3 mb-0">Update your information</h1>
    </div>
    <!-- End Title -->

    <!-- Input -->
    <div class="js-form-message mb-3">
      <div class="js-focus-state input-group form">
        <div class="input-group-prepend form__prepend">
          <span class="input-group-text form__text">
            <span class="fa fa-user form__text-inner"></span>
          </span>
        </div>
        <input type="text" class="form-control" name="name" 
               placeholder="name"
               aria-label="name"
               data-msg="Please enter your name."
               value="<?php echo $this->session->userdata('fullname') ?>">



               <!-- <input type="email" class="form-control form__input" name="name" required
               placeholder="name"
               aria-label="name"
               data-msg="Please enter your name."
               data-error-class="u-has-error"
               data-success-class="u-has-success"> -->
      </div>
    </div>
    <!-- End Input -->

    <!-- Input -->
    <div class="js-form-message mb-3">
      <div class="js-focus-state input-group form">
        <div class="input-group-prepend form__prepend">
          <span class="input-group-text form__text">
            <span class="fas fa-at form__text-inner"></span>
          </span>
        </div>
        <input type="email" class="form-control" name="email" 
               placeholder="Email"
               aria-label="Email"
               value="<?php echo $this->session->userdata('email') ?>">
      </div>
    </div>
    <!-- End Input -->

    <!-- Input -->
    <div class="js-form-message mb-3">
      <div class="js-focus-state input-group form">
        <div class="input-group-prepend form__prepend">
          <span class="input-group-text form__text">
            <span class="fas fa-mobile form__text-inner"></span>
          </span>
        </div>
        <input type="phone" class="form-control" name="phone" 
               placeholder="phone"
               aria-label="phone"
               value="<?php echo $this->session->userdata('phone_number') ?>">
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
        <input type="password" class="form-control" name="password" id="password"
               placeholder="Password"
               aria-label="Password"
               data-msg="Your password is invalid. Please try again."
               data-error-class="u-has-error"
               data-success-class="u-has-success"
               required>
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
        <input type="password" class="form-control" name="confirmPassword"
               placeholder="Confirm Password"
               aria-label="Confirm Password"
               data-msg="Password does not match the confirm password."
               data-error-class="u-has-error"
               data-success-class="u-has-success">
      </div>
    </div>
    <!-- End Input -->

        <!-- Input -->
        <div class="">
      <div class="row">
        <!-- <div class="input-group-prepend form__prepend">
          <span class="input-group-text form__text">
            <span class="fa fa-key form__text-inner"></span>
          </span>
        </div> -->
        <div  class="col-md-6 js-form-message mb-3">
          <div class="upload-btn-wrapper-custom">
            <button class="btn-custom">Upload your picture</button>
            <input type="file" name="profile_pic" />
          </div>
        </div>
        <div  class="col-md-6 js-form-message mb-3">
        <div class="upload-btn-wrapper-custom">
          <button class="btn-custom">Upload your student ID</button>
          <input type="file" name="sid_pic" />
        </div>
        </div>
      </div>
    </div>
    <!-- End Input -->

    <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user_id') ?>">


    <div class="mb-3">
      <button type="submit" class="btn btn-block btn-primary">Update</button>
    </div>

    


  </form>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- JS Global Compulsory -->
  <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="../../assets/vendor/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="../../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>

  <!-- JS Space -->
  <script src="../../assets/js/hs.core.js"></script>
  <script src="../../assets/js/components/hs.validation.js"></script>
  <script src="../../assets/js/helpers/hs.focus-state.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // initialization of forms
      $.HSCore.helpers.HSFocusState.init();

      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate');
    });
  </script>
</body>
</html>  
        </div>
    </div>
</div>