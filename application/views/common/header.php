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
  <!-- .app -->
  <div class="app">
    <!--[if lt IE 10]>
      <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
      <![endif]-->
    <!-- .app-header -->
    <header class="app-header app-header-dark">
      <!-- .top-bar -->
      <div class="top-bar">
        <!-- .top-bar-brand -->
        <div class="top-bar-brand">
          <!-- toggle aside menu -->
          <button class="hamburger hamburger-squeeze mr-2" type="button" data-toggle="aside-menu" aria-label="toggle aside menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle aside menu -->
          <a href="index-2.html">
            Inventory
          </a>
        </div><!-- /.top-bar-brand -->
        <!-- .top-bar-list -->
        <div class="top-bar-list">
          <!-- .top-bar-item -->
          <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
            <!-- toggle menu -->
            <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="toggle menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
          </div><!-- /.top-bar-item -->
          <!-- .top-bar-item -->

          <!-- .top-bar-item -->
          <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
            <!-- .nav -->

            <!-- .btn-account -->
            <div class="dropdown d-none d-md-flex">
              <button class="btn-account" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="user-avatar user-avatar-md"><img src="<?php echo base_url() ?>assets/images/avatars/profile.jpg" alt=""></span> <span class="account-summary pr-lg-4 d-none d-lg-block"><span class="account-name"><?php echo ucfirst($this->session->userdata('username')) ?></span> <span class="account-description"><?php echo ucfirst($this->session->userdata('user_type')) ?></span></span></button> <!-- .dropdown-menu -->
              <div class="dropdown-menu">
                <div class="dropdown-arrow d-lg-none" x-arrow=""></div>
                <div class="dropdown-arrow ml-3 d-none d-lg-block"></div>
                <h6 class="dropdown-header d-none d-md-block d-lg-none"> Beni Arisandi </h6><a class="dropdown-item" href="user-profile.html"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="<?php echo base_url() ?>auth/logout"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                
              </div><!-- /.dropdown-menu -->
            </div><!-- /.btn-account -->
          </div><!-- /.top-bar-item -->
        </div><!-- /.top-bar-list -->
      </div><!-- /.top-bar -->
    </header><!-- /.app-header -->
    <!-- .app-aside -->
    <aside class="app-aside app-aside-expand-md app-aside-light">
      <!-- .aside-content -->
      <div class="aside-content">
        <!-- .aside-header -->
        <header class="aside-header d-block d-md-none">
          <!-- .btn-account -->
          <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img src="<?php echo base_url() ?>assets/images/avatars/profile.jpg" alt=""></span> <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary"><span class="account-name">Beni Arisandi</span> <span class="account-description">Marketing Manager</span></span></button> <!-- /.btn-account -->
          <!-- .dropdown-aside -->
          <div id="dropdown-aside" class="dropdown-aside collapse">
            <!-- dropdown-items -->
            <div class="pb-3">
              <a class="dropdown-item" href="user-profile.html"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="auth-signin-v1.html"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Help Center</a> <a class="dropdown-item" href="#">Ask Forum</a> <a class="dropdown-item" href="#">Keyboard Shortcuts</a>
            </div><!-- /dropdown-items -->
          </div><!-- /.dropdown-aside -->
        </header><!-- /.aside-header -->
        <!-- .aside-menu -->
        <div class="aside-menu overflow-hidden">
          <!-- .stacked-menu -->
          <nav id="stacked-menu" class="stacked-menu">
            <!-- .menu -->
            <ul class="menu">
              <!-- .menu-item -->
              <li class="menu-item <?php echo ($page == 'dashboard')?'has-active':'' ?>">
                <a href="<?php echo base_url() ?>index.php/welcome/index_2" class="menu-link"><span class="menu-icon fas fa-home"></span> <span class="menu-text">Dashboard</span></a>
              </li><!-- /.menu-item -->
              <!-- .menu-item -->
              <!-- .menu-item -->

              <?php
              $this->db->like('rights',$this->session->userdata('user_type'));
              $parent_menus = $this->db->where('parent','0')->get('menus')->result();
              
               $current_id  = $this->db->where('link',$page)->get('menus')->row()->parent;
               foreach ($parent_menus as $key => $value) { ?>
                <li class="menu-item has-child <?php echo ($current_id == $value->id)?'has-active':'' ?>">
                <a href="#" class="menu-link"><span class="menu-icon fas fa-home"></span> <span class="menu-text"><?php echo $value->name ?></span></a>
                <ul class="menu">
                  <?php 
                  $this->db->like('rights',$this->session->userdata('user_type'));

                  $child_menus = $this->db->where('parent',$value->id)->get('menus')->result();
                  foreach ($child_menus as $key1 => $value1) {?>
                  <li class="menu-item <?php echo ($page == $value1->link)?'has-active':'' ?>">
                    <a href="<?php echo base_url() .'welcome/'.$value1->link ?>" class="menu-link"><?php echo $value1->name ?></a>
                  </li>
                 <?php }?>
                </ul><!-- /child menu -->

              </li><!-- /.menu-item -->
              <?php } ?>




              <!-- .menu-item -->
            </ul><!-- /.menu -->
          </nav><!-- /.stacked-menu -->
        </div><!-- /.aside-menu -->
        <!-- Skin changer -->
        <footer class="aside-footer border-top p-2">
          <button class="btn btn-light btn-block text-primary" data-toggle="skin"><span class="d-compact-menu-none">Night mode</span> <i class="fas fa-moon ml-1"></i></button>
        </footer><!-- /Skin changer -->
      </div><!-- /.aside-content -->
    </aside><!-- /.app-aside -->

  
</body>

</html>