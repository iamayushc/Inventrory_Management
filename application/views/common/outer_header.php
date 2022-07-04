<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uselooper.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Mar 2022 06:18:25 GMT -->

<head>

  <title> Dashboard | Looper - Bootstrap 4 Admin Theme </title>

  <link rel="canonical" href="<?php echo base_url() ?>index.php/welcome/index">


  <!-- FAVICONS -->
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url() ?>assets/apple-touch-icon.png">
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/favicon.ico">

  <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
  <!-- BEGIN PLUGINS STYLES -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/open-iconic/font/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/flatpickr/flatpickr.min.css"><!-- END PLUGINS STYLES -->
  <!-- BEGIN THEME STYLES -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/stylesheets/theme.min.css" data-skin="default">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/stylesheets/theme-dark.min.css" data-skin="dark">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/stylesheets/custom.css">
  <script>
    var skin = localStorage.getItem('skin') || 'default';
    var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
    // Disable unused skin immediately
    disabledSkinStylesheet.setAttribute('rel', '');
    disabledSkinStylesheet.setAttribute('disabled', true);
    // add loading class to html immediately
    document.querySelector('html').classList.add('loading');
  </script><!-- END THEME STYLES -->
</head>

<body>
  <!-- .app-main -->

    <main class="auth">
      <header id="auth-header" class="auth-header" style="background-image: url(<?php echo base_url() ?>assets/images/illustration/img-1.png);">
        <h1>
          Inventory <span class="sr-only">Sign Up</span>
        </h1>
        <p> Already have an account? please <a href="auth-signin-v1.html">Sign In</a>
        </p>
      </header><!-- form -->