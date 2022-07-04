<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from uselooper.com/component-list-views.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Mar 2022 06:19:13 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> List Views | Looper - Bootstrap 4 Admin Theme </title>
    <meta property="og:title" content="List Views">
    <meta name="author" content="Beni Arisandi">
    <meta property="og:locale" content="en_US">
    <meta name="description" content="Responsive admin theme build on top of Bootstrap 4">
    <meta property="og:description" content="Responsive admin theme build on top of Bootstrap 4">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
    <meta property="og:site_name" content="Looper - Bootstrap 4 Admin Theme">
    <script type="application/ld+json">
      {
        "name": "Looper - Bootstrap 4 Admin Theme",
        "description": "Responsive admin theme build on top of Bootstrap 4",
        "author":
        {
          "@type": "Person",
          "name": "Beni Arisandi"
        },
        "@type": "WebSite",
        "url": "",
        "headline": "List Views",
        "@context": "http://schema.org"
      }
    </script><!-- End SEO tag -->
    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="144x144" href="assets/apple-touch-icon.png">
    <link rel="shortcut icon" href="assets/favicon.ico">
    <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="assets/vendor/open-iconic/font/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/jstree/themes/default/style.min.css">
    <link rel="stylesheet" href="assets/vendor/toastr/build/toastr.min.css"><!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="assets/stylesheets/theme.min.css" data-skin="default">
    <link rel="stylesheet" href="assets/stylesheets/theme-dark.min.css" data-skin="dark">
    <link rel="stylesheet" href="assets/stylesheets/custom.css">
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
            <a href="index-2.html"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="28" viewbox="0 0 351 100">
                <defs>
                  <path id="a" d="M156.538 45.644v1.04a6.347 6.347 0 0 1-1.847 3.98L127.708 77.67a6.338 6.338 0 0 1-3.862 1.839h-1.272a6.34 6.34 0 0 1-3.862-1.839L91.728 50.664a6.353 6.353 0 0 1 0-9l9.11-9.117-2.136-2.138a3.171 3.171 0 0 0-4.498 0L80.711 43.913a3.177 3.177 0 0 0-.043 4.453l-.002.003.048.047 24.733 24.754-4.497 4.5a6.339 6.339 0 0 1-3.863 1.84h-1.27a6.337 6.337 0 0 1-3.863-1.84L64.971 50.665a6.353 6.353 0 0 1 0-9l26.983-27.008a6.336 6.336 0 0 1 4.498-1.869c1.626 0 3.252.622 4.498 1.87l26.986 27.006a6.353 6.353 0 0 1 0 9l-9.11 9.117 2.136 2.138a3.171 3.171 0 0 0 4.498 0l13.49-13.504a3.177 3.177 0 0 0 .046-4.453l.002-.002-.047-.048-24.737-24.754 4.498-4.5a6.344 6.344 0 0 1 8.996 0l26.983 27.006a6.347 6.347 0 0 1 1.847 3.98zm-46.707-4.095l-2.362 2.364a3.178 3.178 0 0 0 0 4.501l2.362 2.364 2.361-2.364a3.178 3.178 0 0 0 0-4.501l-2.361-2.364z"></path>
                </defs>
                <g fill="none" fill-rule="evenodd">
                  <path fill="currentColor" fill-rule="nonzero" d="M39.252 80.385c-13.817 0-21.06-8.915-21.06-22.955V13.862H.81V.936h33.762V58.1c0 6.797 4.346 9.026 9.026 9.026 2.563 0 5.237-.446 8.58-1.783l3.677 12.034c-5.794 1.894-9.694 3.009-16.603 3.009zM164.213 99.55V23.78h13.372l1.225 5.571h.335c4.457-4.011 10.585-6.908 16.491-6.908 13.817 0 22.174 11.031 22.174 28.08 0 18.943-11.588 29.863-23.957 29.863-4.903 0-9.694-2.117-13.594-6.017h-.446l.78 9.025V99.55h-16.38zm25.852-32.537c6.128 0 10.92-4.903 10.92-16.268 0-9.917-3.232-14.932-10.14-14.932-3.566 0-6.797 1.56-10.252 5.126v22.397c3.12 2.674 6.686 3.677 9.472 3.677zm69.643 13.372c-17.272 0-30.643-10.586-30.643-28.972 0-18.163 13.928-28.971 28.748-28.971 17.049 0 26.075 11.477 26.075 26.52 0 3.008-.558 6.017-.78 7.354h-37.663c1.56 8.023 7.465 11.589 16.491 11.589 5.014 0 9.36-1.337 14.263-3.9l5.46 9.917c-6.351 4.011-14.597 6.463-21.951 6.463zm-1.338-45.463c-6.462 0-11.031 3.454-12.702 10.363h23.622c-.78-6.797-4.568-10.363-10.92-10.363zm44.238 44.126V23.779h13.371l1.337 12.034h.334c5.46-9.025 13.595-13.371 22.398-13.371 4.902 0 7.465.78 10.697 2.228l-3.343 13.706c-3.454-1.003-5.683-1.56-9.806-1.56-6.797 0-13.928 3.566-18.608 13.483v28.749h-16.38z"></path>
                  <use class="fill-warning" xlink:href="#a"></use>
                </g>
              </svg></a>
          </div><!-- /.top-bar-brand -->
          <!-- .top-bar-list -->
          <div class="top-bar-list">
            <!-- .top-bar-item -->
            <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
              <!-- toggle menu -->
              <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="toggle menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
            </div><!-- /.top-bar-item -->
            <!-- .top-bar-item -->
            <div class="top-bar-item top-bar-item-full">
              <!-- .top-bar-search -->
              <form class="top-bar-search">
                <!-- .input-group -->
                <div class="input-group input-group-search dropdown">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                  </div><input type="text" class="form-control" data-toggle="dropdown" aria-label="Search" placeholder="Search"> <!-- .dropdown-menu -->
                  <div class="dropdown-menu dropdown-menu-rich dropdown-menu-xl ml-n4 mw-100">
                    <div class="dropdown-arrow ml-3"></div><!-- .dropdown-scroll -->
                    <div class="dropdown-scroll perfect-scrollbar h-auto" style="max-height: 360px">
                      <!-- .list-group -->
                      <div class="list-group list-group-flush list-group-reflow mb-2">
                        <h6 class="list-group-header d-flex justify-content-between">
                          <span>Shortcut</span>
                        </h6><!-- .list-group-item -->
                        <div class="list-group-item py-2">
                          <a href="#" class="stretched-link"></a>
                          <div class="tile tile-sm bg-muted">
                            <i class="fas fa-user-plus"></i>
                          </div>
                          <div class="ml-2"> Create user </div>
                        </div><!-- /.list-group-item -->
                        <!-- .list-group-item -->
                        <div class="list-group-item py-2">
                          <a href="#" class="stretched-link"></a>
                          <div class="tile tile-sm bg-muted">
                            <i class="fas fa-dollar-sign"></i>
                          </div>
                          <div class="ml-2"> Create invoice </div>
                        </div><!-- /.list-group-item -->
                        <h6 class="list-group-header d-flex justify-content-between mt-2">
                          <span>In projects</span> <a href="#" class="font-weight-normal">Show more</a>
                        </h6><!-- .list-group-item -->
                        <div class="list-group-item py-2">
                          <a href="#" class="stretched-link"><span class="sr-only">Go to search result</span></a>
                          <div class="user-avatar user-avatar-sm bg-muted">
                            <img src="assets/images/avatars/bootstrap.svg" alt="">
                          </div>
                          <div class="ml-2">
                            <div class="mb-n1"> Bootstrap </div><small class="text-muted">Just now</small>
                          </div>
                        </div><!-- /.list-group-item -->
                        <!-- .list-group-item -->
                        <div class="list-group-item py-2">
                          <a href="#" class="stretched-link"><span class="sr-only">Go to search result</span></a>
                          <div class="user-avatar user-avatar-sm bg-muted">
                            <img src="assets/images/avatars/slack.svg" alt="">
                          </div>
                          <div class="ml-2">
                            <div class="mb-n1"> Slack </div><small class="text-muted">Updated 25 minutes ago</small>
                          </div>
                        </div><!-- /.list-group-item -->
                        <!-- /.list-group-item -->
                        <h6 class="list-group-header d-flex justify-content-between mt-2">
                          <span>Another section</span> <a href="#" class="font-weight-normal">Show more</a>
                        </h6><!-- .list-group-item -->
                        <div class="list-group-item py-2">
                          <a href="#" class="stretched-link"><span class="sr-only">Go to search result</span></a>
                          <div class="tile tile-sm bg-muted"> P </div>
                          <div class="ml-2">
                            <div class="mb-n1"> Product name </div>
                          </div>
                        </div><!-- /.list-group-item -->
                      </div><!-- /.list-group -->
                    </div><!-- /.dropdown-scroll -->
                    <a href="#" class="dropdown-footer">Show all results</a>
                  </div><!-- /.dropdown-menu -->
                </div><!-- /.input-group -->
              </form><!-- /.top-bar-search -->
            </div><!-- /.top-bar-item -->
            <!-- .top-bar-item -->
            <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
              <!-- .nav -->
              <ul class="header-nav nav">
                <!-- .nav-item -->
                <li class="nav-item dropdown header-nav-dropdown has-notified">
                  <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="oi oi-pulse"></span></a> <!-- .dropdown-menu -->
                  <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                    <div class="dropdown-arrow"></div>
                    <h6 class="dropdown-header stop-propagation">
                      <span>Activities <span class="badge">(2)</span></span>
                    </h6><!-- .dropdown-scroll -->
                    <div class="dropdown-scroll perfect-scrollbar">
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item unread">
                        <div class="user-avatar">
                          <img src="assets/images/avatars/uifaces15.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Jeffrey Wells created a schedule </p><span class="date">Just now</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item unread">
                        <div class="user-avatar">
                          <img src="assets/images/avatars/uifaces16.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Anna Vargas logged a chat </p><span class="date">3 hours ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="assets/images/avatars/uifaces17.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Sara Carr invited to Stilearn Admin </p><span class="date">5 hours ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="assets/images/avatars/uifaces18.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Arthur Carroll updated a project </p><span class="date">1 day ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="assets/images/avatars/uifaces19.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Hannah Romero created a task </p><span class="date">1 day ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="assets/images/avatars/uifaces20.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Angela Peterson assign a task to you </p><span class="date">2 days ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="assets/images/avatars/uifaces21.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Shirley Mason and 3 others followed you </p><span class="date">2 days ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                    </div><!-- /.dropdown-scroll -->
                    <a href="user-activities.html" class="dropdown-footer">All activities <i class="fas fa-fw fa-long-arrow-alt-right"></i></a>
                  </div><!-- /.dropdown-menu -->
                </li><!-- /.nav-item -->
                <!-- .nav-item -->
                <li class="nav-item dropdown header-nav-dropdown has-notified">
                  <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="oi oi-envelope-open"></span></a> <!-- .dropdown-menu -->
                  <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                    <div class="dropdown-arrow"></div>
                    <h6 class="dropdown-header stop-propagation">
                      <span>Messages</span> <a href="#">Mark all as read</a>
                    </h6><!-- .dropdown-scroll -->
                    <div class="dropdown-scroll perfect-scrollbar">
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item unread">
                        <div class="user-avatar">
                          <img src="assets/images/avatars/team1.jpg" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Stilearning </p>
                          <p class="text text-truncate"> Invitation: Joe's Dinner @ Fri Aug 22 </p><span class="date">2 hours ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="assets/images/avatars/team3.png" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Openlane </p>
                          <p class="text text-truncate"> Final reminder: Upgrade to Pro </p><span class="date">23 hours ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="tile tile-circle bg-green"> GZ </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Gogo Zoom </p>
                          <p class="text text-truncate"> Live healthy with this wireless sensor. </p><span class="date">1 day ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="tile tile-circle bg-teal"> GD </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Gold Dex </p>
                          <p class="text text-truncate"> Invitation: Design Review @ Mon Jul 7 </p><span class="date">1 day ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="user-avatar">
                          <img src="assets/images/avatars/team2.png" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Creative Division </p>
                          <p class="text text-truncate"> Need some feedback on this please </p><span class="date">2 days ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item">
                        <div class="tile tile-circle bg-pink"> LD </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Lab Drill </p>
                          <p class="text text-truncate"> Our UX exercise is ready </p><span class="date">6 days ago</span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                    </div><!-- /.dropdown-scroll -->
                    <a href="page-messages.html" class="dropdown-footer">All messages <i class="fas fa-fw fa-long-arrow-alt-right"></i></a>
                  </div><!-- /.dropdown-menu -->
                </li><!-- /.nav-item -->
                <!-- .nav-item -->
                <li class="nav-item dropdown header-nav-dropdown">
                  <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="oi oi-grid-three-up"></span></a> <!-- .dropdown-menu -->
                  <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                    <div class="dropdown-arrow"></div><!-- .dropdown-sheets -->
                    <div class="dropdown-sheets">
                      <!-- .dropdown-sheet-item -->
                      <div class="dropdown-sheet-item">
                        <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-indigo"><i class="oi oi-people"></i></span> <span class="tile-peek">Teams</span></a>
                      </div><!-- /.dropdown-sheet-item -->
                      <!-- .dropdown-sheet-item -->
                      <div class="dropdown-sheet-item">
                        <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-teal"><i class="oi oi-fork"></i></span> <span class="tile-peek">Projects</span></a>
                      </div><!-- /.dropdown-sheet-item -->
                      <!-- .dropdown-sheet-item -->
                      <div class="dropdown-sheet-item">
                        <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-pink"><i class="fa fa-tasks"></i></span> <span class="tile-peek">Tasks</span></a>
                      </div><!-- /.dropdown-sheet-item -->
                      <!-- .dropdown-sheet-item -->
                      <div class="dropdown-sheet-item">
                        <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-yellow"><i class="oi oi-fire"></i></span> <span class="tile-peek">Feeds</span></a>
                      </div><!-- /.dropdown-sheet-item -->
                      <!-- .dropdown-sheet-item -->
                      <div class="dropdown-sheet-item">
                        <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-cyan"><i class="oi oi-document"></i></span> <span class="tile-peek">Files</span></a>
                      </div><!-- /.dropdown-sheet-item -->
                    </div><!-- .dropdown-sheets -->
                  </div><!-- .dropdown-menu -->
                </li><!-- /.nav-item -->
              </ul><!-- /.nav -->
              <!-- .btn-account -->
              <div class="dropdown d-none d-md-flex">
                <button class="btn-account" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="user-avatar user-avatar-md"><img src="assets/images/avatars/profile.jpg" alt=""></span> <span class="account-summary pr-lg-4 d-none d-lg-block"><span class="account-name">Beni Arisandi</span> <span class="account-description">Marketing Manager</span></span></button> <!-- .dropdown-menu -->
                <div class="dropdown-menu">
                  <div class="dropdown-arrow d-lg-none" x-arrow=""></div>
                  <div class="dropdown-arrow ml-3 d-none d-lg-block"></div>
                  <h6 class="dropdown-header d-none d-md-block d-lg-none"> Beni Arisandi </h6><a class="dropdown-item" href="user-profile.html"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="auth-signin-v1.html"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Help Center</a> <a class="dropdown-item" href="#">Ask Forum</a> <a class="dropdown-item" href="#">Keyboard Shortcuts</a>
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
            <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img src="assets/images/avatars/profile.jpg" alt=""></span> <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary"><span class="account-name">Beni Arisandi</span> <span class="account-description">Marketing Manager</span></span></button> <!-- /.btn-account -->
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
                <li class="menu-item">
                  <a href="index-2.html" class="menu-link"><span class="menu-icon fas fa-home"></span> <span class="menu-text">Dashboard</span></a>
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon far fa-file"></span> <span class="menu-text">App Pages</span> <span class="badge badge-warning">New</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="page-clients.html" class="menu-link">Clients</a>
                    </li>
                    <li class="menu-item">
                      <a href="page-teams.html" class="menu-link">Teams</a>
                    </li>
                    <li class="menu-item has-child">
                      <a href="#" class="menu-link">Team</a> <!-- grand child menu -->
                      <ul class="menu">
                        <li class="menu-item">
                          <a href="page-team.html" class="menu-link">Overview</a>
                        </li>
                        <li class="menu-item">
                          <a href="page-team-feeds.html" class="menu-link">Feeds</a>
                        </li>
                        <li class="menu-item">
                          <a href="page-team-projects.html" class="menu-link">Projects</a>
                        </li>
                        <li class="menu-item">
                          <a href="page-team-members.html" class="menu-link">Members</a>
                        </li>
                      </ul><!-- /grand child menu -->
                    </li>
                    <li class="menu-item has-child">
                      <a href="#" class="menu-link">Project</a> <!-- grand child menu -->
                      <ul class="menu">
                        <li class="menu-item">
                          <a href="page-project.html" class="menu-link">Overview</a>
                        </li>
                        <li class="menu-item">
                          <a href="page-project-board.html" class="menu-link">Board</a>
                        </li>
                        <li class="menu-item">
                          <a href="page-project-gantt.html" class="menu-link">Gantt View</a>
                        </li>
                      </ul><!-- /grand child menu -->
                    </li>
                    <li class="menu-item">
                      <a href="page-calendar.html" class="menu-link">Calendar</a>
                    </li>
                    <li class="menu-item has-child">
                      <a href="#" class="menu-link">Invoices</a> <!-- grand child menu -->
                      <ul class="menu">
                        <li class="menu-item">
                          <a href="page-invoices.html" class="menu-link">List</a>
                        </li>
                        <li class="menu-item">
                          <a href="page-invoice.html" class="menu-link">Details</a>
                        </li>
                      </ul><!-- /grand child menu -->
                    </li>
                    <li class="menu-item">
                      <a href="page-messages.html" class="menu-link">Messages</a>
                    </li>
                    <li class="menu-item">
                      <a href="page-conversations.html" class="menu-link">Conversations</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-wrench"></span> <span class="menu-text">Auth</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="auth-comingsoon-v1.html" class="menu-link">Coming Soon v1</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-comingsoon-v2.html" class="menu-link">Coming Soon v2</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-cookie-consent.html" class="menu-link">Cookie Consent</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-empty-state.html" class="menu-link">Empty State</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-error-v1.html" class="menu-link">Error Page v1</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-error-v2.html" class="menu-link">Error Page v2</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-error-v3.html" class="menu-link">Error Page v3</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-maintenance.html" class="menu-link">Maintenance</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-page-message.html" class="menu-link">Page Message</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-session-timeout.html" class="menu-link">Session Timeout</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-signin-v1.html" class="menu-link">Sign In v1</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-signin-v2.html" class="menu-link">Sign In v2</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-signup.html" class="menu-link">Sign Up</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-recovery-username.html" class="menu-link">Recovery Username</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-recovery-password.html" class="menu-link">Recovery Password</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-lockscreen.html" class="menu-link">Screen Locked</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-person"></span> <span class="menu-text">User</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="user-profile.html" class="menu-link">Profile</a>
                    </li>
                    <li class="menu-item">
                      <a href="user-activities.html" class="menu-link">Activities</a>
                    </li>
                    <li class="menu-item">
                      <a href="user-teams.html" class="menu-link">Teams</a>
                    </li>
                    <li class="menu-item">
                      <a href="user-projects.html" class="menu-link">Projects</a>
                    </li>
                    <li class="menu-item">
                      <a href="user-tasks.html" class="menu-link">Tasks</a>
                    </li>
                    <li class="menu-item">
                      <a href="user-profile-settings.html" class="menu-link">Profile Settings</a>
                    </li>
                    <li class="menu-item">
                      <a href="user-account-settings.html" class="menu-link">Account Settings</a>
                    </li>
                    <li class="menu-item">
                      <a href="user-billing-settings.html" class="menu-link">Billing Settings</a>
                    </li>
                    <li class="menu-item">
                      <a href="user-notification-settings.html" class="menu-link">Notification Settings</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-browser"></span> <span class="menu-text">Layouts</span> <span class="badge badge-subtle badge-success">+4</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="layout-blank.html" class="menu-link">Blank Page</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-nosearch.html" class="menu-link">Header no Search</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-horizontal-menu.html" class="menu-link">Horizontal Menu</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-fullwidth.html" class="menu-link">Full Width</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-pagenavs.html" class="menu-link">Page Navs</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-pagecover.html" class="menu-link">Page Cover</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-pagecover-img.html" class="menu-link">Cover Image</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-pagesidebar.html" class="menu-link">Page Sidebar</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-pagesidebar-fluid.html" class="menu-link">Sidebar Fluid</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-pagesidebar-hidden.html" class="menu-link">Sidebar Hidden</a>
                    </li>
                    <li class="menu-item">
                      <a href="layout-custom.html" class="menu-link">Custom</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item">
                  <a href="landing-page.html" class="menu-link"><span class="menu-icon fas fa-rocket"></span> <span class="menu-text">Landing Page</span></a>
                </li><!-- /.menu-item -->
                <!-- .menu-header -->
                <li class="menu-header">Interfaces </li><!-- /.menu-header -->
                <!-- .menu-item -->
                <li class="menu-item has-active has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-puzzle-piece"></span> <span class="menu-text">Components</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="component-general.html" class="menu-link">General</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-icons.html" class="menu-link">Icons</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-rich-media.html" class="menu-link">Rich Media</a>
                    </li>
                    <li class="menu-item has-active">
                      <a href="component-list-views.html" class="menu-link">List Views</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-sortable-nestable.html" class="menu-link">Sortable & Nestable</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-activity.html" class="menu-link">Activity</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-steps.html" class="menu-link">Steps</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-tasks.html" class="menu-link">Tasks</a>
                    </li>
                    <li class="menu-item">
                      <a href="component-metrics.html" class="menu-link">Metrics</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-pencil"></span> <span class="menu-text">Forms</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="form-basic.html" class="menu-link">Basic Elements</a>
                    </li>
                    <li class="menu-item">
                      <a href="form-autocompletes.html" class="menu-link">Autocompletes</a>
                    </li>
                    <li class="menu-item">
                      <a href="form-pickers.html" class="menu-link">Pickers</a>
                    </li>
                    <li class="menu-item">
                      <a href="form-editors.html" class="menu-link">Editors</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon fas fa-table"></span> <span class="menu-text">Tables</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="table-basic.html" class="menu-link">Basic Table</a>
                    </li>
                    <li class="menu-item">
                      <a href="table-datatables.html" class="menu-link">Datatables</a>
                    </li>
                    <li class="menu-item">
                      <a href="table-responsive-datatables.html" class="menu-link">Responsive Datatables</a>
                    </li>
                    <li class="menu-item">
                      <a href="table-filters-datatables.html" class="menu-link">Filter Columns</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-bar-chart"></span> <span class="menu-text">Collections</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item has-child">
                      <a href="#" class="menu-link">Chart.js</a> <!-- grand child menu -->
                      <ul class="menu">
                        <li class="menu-item">
                          <a href="collection-chartjs-line.html" class="menu-link">Line</a>
                        </li>
                        <li class="menu-item">
                          <a href="collection-chartjs-bar.html" class="menu-link">Bar</a>
                        </li>
                        <li class="menu-item">
                          <a href="collection-chartjs-radar-scatter.html" class="menu-link">Radar & Scatter</a>
                        </li>
                        <li class="menu-item">
                          <a href="collection-chartjs-others.html" class="menu-link">Others</a>
                        </li>
                      </ul><!-- /grand child menu -->
                    </li>
                    <li class="menu-item">
                      <a href="collection-flot-charts.html" class="menu-link">Flot</a>
                    </li>
                    <li class="menu-item">
                      <a href="collection-inline-charts.html" class="menu-link">Inline Charts</a>
                    </li>
                    <li class="menu-item">
                      <a href="collection-jqvmap.html" class="menu-link">Vector Map</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon oi oi-list-rich"></span> <span class="menu-text">Level Menu</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="#" class="menu-link">Menu Item</a>
                    </li>
                    <li class="menu-item has-child">
                      <a href="#" class="menu-link">Menu Item</a> <!-- grand child menu -->
                      <ul class="menu">
                        <li class="menu-item">
                          <a href="#" class="menu-link">Child Item</a>
                        </li>
                        <li class="menu-item">
                          <a href="#" class="menu-link">Child Item</a>
                        </li>
                        <li class="menu-item has-child">
                          <a href="#" class="menu-link">Child Item</a> <!-- grand child menu -->
                          <ul class="menu">
                            <li class="menu-item">
                              <a href="#" class="menu-link">Grand Child Item</a>
                            </li>
                            <li class="menu-item">
                              <a href="#" class="menu-link">Grand Child Item</a>
                            </li>
                            <li class="menu-item">
                              <a href="#" class="menu-link">Grand Child Item</a>
                            </li>
                            <li class="menu-item">
                              <a href="#" class="menu-link">Grand Child Item</a>
                            </li>
                          </ul><!-- /grand child menu -->
                        </li>
                        <li class="menu-item">
                          <a href="#" class="menu-link">Child Item</a>
                        </li>
                      </ul><!-- /grand child menu -->
                    </li>
                    <li class="menu-item">
                      <a href="#" class="menu-link">Menu Item</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
              </ul><!-- /.menu -->
            </nav><!-- /.stacked-menu -->
          </div><!-- /.aside-menu -->
          <!-- Skin changer -->
          <footer class="aside-footer border-top p-2">
            <button class="btn btn-light btn-block text-primary" data-toggle="skin"><span class="d-compact-menu-none">Night mode</span> <i class="fas fa-moon ml-1"></i></button>
          </footer><!-- /Skin changer -->
        </div><!-- /.aside-content -->
      </aside><!-- /.app-aside -->
      <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
              <header class="page-title-bar">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                      <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Components</a>
                    </li>
                  </ol>
                </nav>
                <h1 class="page-title"> List Views </h1>
                <p class="text-muted"> Lists present multiple line items vertically as a single continuous element. </p>
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .section-block -->
                <div class="section-block">
                  <!-- grid row -->
                  <div class="row">
                    <!-- grid column -->
                    <div class="col-lg-6">
                      <!-- .list-group -->
                      <ul class="list-group mb-3">
                        <li class="list-group-item">Basic list item </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">List item with badge <span class="badge badge-danger badge-pill">14</span>
                        </li>
                        <li class="list-group-header">List header </li>
                        <li class="list-group-item active">Active list item </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">List item with switcher <label class="switcher-control"><input type="checkbox" name="onoffswitch" class="switcher-input" checked> <span class="switcher-indicator"></span></label>
                        </li>
                        <li class="list-group-item disabled">Disable list item </li>
                      </ul><!-- /.list-group -->
                    </div><!-- /grid column -->
                    <!-- grid column -->
                    <div class="col-lg-6">
                      <!-- .list-group -->
                      <div class="list-group mb-3">
                        <a href="#" class="list-group-item list-group-item-action">Basic list item</a> <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">List item with badge <span class="badge badge-danger badge-pill">14</span></a>
                        <div class="list-group-header"> List header </div><a href="#" class="list-group-item list-group-item-action active">Active list item</a> <a href="#" class="list-group-item list-group-item-action disabled">Disable list item</a> <a href="#" class="list-group-item list-group-item-action">Basic list item</a>
                      </div><!-- /.list-group -->
                    </div><!-- /grid column -->
                    <!-- grid column -->
                    <div class="col-lg-6">
                      <!-- .list-group -->
                      <div class="list-group list-group-bordered mb-3">
                        <a href="#" class="list-group-item list-group-item-action list-group-item-primary">This is a primary list group item</a> <a href="#" class="list-group-item list-group-item-action list-group-item-success">This is a success list group item</a>
                        <div class="list-group-header"> List header </div><a href="#" class="list-group-item list-group-item-action list-group-item-danger">This is a danger list group item</a> <a href="#" class="list-group-item list-group-item-action list-group-item-warning">This is a warning list group item</a> <a href="#" class="list-group-item list-group-item-action list-group-item-info">This is a info list group item</a> <a href="#" class="list-group-item list-group-item-action list-group-item-dark">This is a dark list group item</a>
                      </div><!-- /.list-group -->
                    </div><!-- /grid column -->
                    <!-- grid column -->
                    <div class="col-lg-6">
                      <!-- .list-group -->
                      <div class="list-group list-group-divider mb-3">
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure">
                            <span class="fa fa-lg fa-fw fa-briefcase"></span>
                          </div>
                          <div class="list-group-item-body">
                            <span class="list-group-item-text">Business</span>
                          </div>
                        </a> <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure">
                            <span class="fa fa-lg fa-fw fa-comments"></span>
                          </div>
                          <div class="list-group-item-body d-flex justify-content-between align-items-center">
                            <span class="list-group-item-text">Communication</span> <span class="badge badge-danger badge-pill">14</span>
                          </div>
                        </a>
                        <div class="list-group-header"> List header </div><a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure">
                            <span class="fa fa-lg fa-fw fa-paint-brush"></span>
                          </div>
                          <div class="list-group-item-body">
                            <span class="list-group-item-text">Design</span>
                          </div>
                        </a> <a href="#" class="list-group-item list-group-item-action active">
                          <div class="list-group-item-figure">
                            <span class="fa fa-lg fa-fw fa-graduation-cap"></span>
                          </div>
                          <div class="list-group-item-body">
                            <span class="list-group-item-text">Education</span>
                          </div>
                        </a> <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure">
                            <span class="fa fa-lg fa-fw fa-chart-line"></span>
                          </div>
                          <div class="list-group-item-body">
                            <span class="list-group-item-text">Finance</span>
                          </div>
                        </a> <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure">
                            <span class="fa fa-lg fa-fw fa-utensils"></span>
                          </div>
                          <div class="list-group-item-body">
                            <span class="list-group-item-text">Food</span>
                          </div>
                        </a>
                      </div><!-- /.list-group -->
                    </div><!-- /grid column -->
                  </div><!-- /grid row -->
                </div><!-- /.section-block -->
                <hr class="my-5">
                <!-- .section-block -->
                <div class="section-block">
                  <h3 class="section-title"> Single-line list </h3>
                </div><!-- /.section-block -->
                <!-- .section-block -->
                <div class="section-block">
                  <!-- grid row -->
                  <div class="row">
                    <!-- grid column -->
                    <div class="col-lg-6">
                      <!-- .list-group -->
                      <div class="list-group list-group-bordered mb-3">
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure">
                            <div class="tile bg-success">
                              <span class="oi oi-chat"></span>
                            </div>
                          </div>
                          <div class="list-group-item-body"> Dapibus ac facilisis in </div>
                        </a> <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure">
                            <div class="tile bg-danger">
                              <span class="oi oi-data-transfer-upload"></span>
                            </div>
                          </div>
                          <div class="list-group-item-body"> Morbi leo risus </div>
                        </a> <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure">
                            <div class="tile bg-warning">
                              <span class="oi oi-tags"></span>
                            </div>
                          </div>
                          <div class="list-group-item-body"> Porta ac consectetur ac </div>
                        </a> <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure">
                            <div class="tile bg-info">
                              <span class="oi oi-cart"></span>
                            </div>
                          </div>
                          <div class="list-group-item-body"> Vestibulum at eros </div>
                        </a>
                      </div><!-- /.list-group -->
                    </div><!-- /grid column -->
                    <!-- grid column -->
                    <div class="col-lg-6">
                      <!-- .list-group -->
                      <div class="list-group list-group-bordered mb-3">
                        <div class="list-group-item">
                          <div class="list-group-item-figure">
                            <a href="#" class="tile tile-circle bg-success"><i class="oi oi-chat"></i></a>
                          </div>
                          <div class="list-group-item-body"> Dapibus ac facilisis in </div>
                          <div class="list-group-item-figure">
                            <button class="btn btn-sm btn-icon btn-light"><i class="fa fa-info-circle"></i></button>
                          </div>
                        </div>
                        <div class="list-group-item">
                          <div class="list-group-item-figure">
                            <a href="#" class="tile tile-circle bg-danger"><i class="oi oi-data-transfer-upload"></i></a>
                          </div>
                          <div class="list-group-item-body"> Morbi leo risus </div>
                          <div class="list-group-item-figure">
                            <button class="btn btn-sm btn-icon btn-light"><i class="fa fa-info-circle"></i></button>
                          </div>
                        </div>
                        <div class="list-group-item">
                          <div class="list-group-item-figure">
                            <a href="#" class="tile tile-circle bg-warning"><i class="oi oi-tags"></i></a>
                          </div>
                          <div class="list-group-item-body"> Porta ac consectetur ac </div>
                          <div class="list-group-item-figure">
                            <button class="btn btn-sm btn-icon btn-light"><i class="fa fa-info-circle"></i></button>
                          </div>
                        </div>
                        <div class="list-group-item">
                          <div class="list-group-item-figure">
                            <a href="#" class="tile tile-circle bg-info"><i class="oi oi-cart"></i></a>
                          </div>
                          <div class="list-group-item-body"> Vestibulum at eros </div>
                          <div class="list-group-item-figure">
                            <button class="btn btn-sm btn-icon btn-light"><i class="fa fa-info-circle"></i></button>
                          </div>
                        </div>
                      </div><!-- /.list-group -->
                    </div><!-- /grid column -->
                    <!-- grid column -->
                    <div class="col-lg-6">
                      <!-- .list-group -->
                      <div class="list-group list-group-bordered mb-3">
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure">
                            <div class="tile tile-circle bg-primary"> BA </div>
                          </div>
                          <div class="list-group-item-body"> Beni Arisandi </div>
                        </a> <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure">
                            <div class="tile tile-circle bg-yellow"> DP </div>
                          </div>
                          <div class="list-group-item-body"> Diane Peters </div>
                        </a> <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure">
                            <div class="tile tile-circle bg-purple"> JG </div>
                          </div>
                          <div class="list-group-item-body"> Jennifer Gray </div>
                        </a> <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure">
                            <div class="tile tile-circle bg-red"> ZF </div>
                          </div>
                          <div class="list-group-item-body"> Zachary Fowler </div>
                        </a>
                      </div><!-- /.list-group -->
                    </div><!-- /grid column -->
                    <!-- grid column -->
                    <div class="col-lg-6">
                      <!-- .list-group -->
                      <div class="list-group list-group-bordered mb-3">
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure">
                            <div class="user-avatar">
                              <img src="assets/images/avatars/profile.jpg" alt="">
                            </div>
                          </div>
                          <div class="list-group-item-body"> Beni Arisandi </div>
                        </a> <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure">
                            <div class="tile tile-circle bg-muted">
                              <i class="oi oi-person"></i>
                            </div>
                          </div>
                          <div class="list-group-item-body"> Diane Peters </div>
                        </a> <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure">
                            <div class="user-avatar">
                              <img src="assets/images/avatars/uifaces11.jpg" alt="">
                            </div>
                          </div>
                          <div class="list-group-item-body"> Jennifer Gray </div>
                        </a> <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure">
                            <div class="user-avatar">
                              <img src="assets/images/avatars/uifaces12.jpg" alt="">
                            </div>
                          </div>
                          <div class="list-group-item-body"> Zachary Fowler </div>
                        </a>
                      </div><!-- /.list-group -->
                    </div><!-- /grid column -->
                  </div><!-- /grid row -->
                </div><!-- /.section-block -->
                <hr class="my-5">
                <!-- .section-block -->
                <div class="section-block">
                  <h3 class="section-title"> Two-line list </h3>
                </div><!-- /.section-block -->
                <!-- grid row -->
                <div class="row">
                  <!-- grid column -->
                  <div class="col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .list-group -->
                      <div class="list-group list-group-flush list-group-divider">
                        <!-- .list-group-item -->
                        <div class="list-group-item">
                          <div class="list-group-item-figure">
                            <a href="#" class="tile tile-circle bg-success"><span class="fa fa-file-archive"></span></a>
                          </div>
                          <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                              <a href="#">Business services</a>
                            </h4>
                            <p class="list-group-item-text"> Jan 28, 2018 </p>
                          </div>
                          <div class="list-group-item-figure">
                            <button class="btn btn-sm btn-icon btn-light"><i class="oi oi-data-transfer-download"></i></button>
                          </div>
                        </div><!-- /.list-group-item -->
                        <!-- .list-group-item -->
                        <div class="list-group-item">
                          <div class="list-group-item-figure">
                            <a href="#" class="tile tile-circle bg-danger"><span class="fa fa-file-video"></span></a>
                          </div>
                          <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                              <a href="#">Miscellaneous expenses</a>
                            </h4>
                            <p class="list-group-item-text"> Jan 21, 2018 </p>
                          </div>
                          <div class="list-group-item-figure">
                            <button class="btn btn-sm btn-icon btn-light"><i class="oi oi-data-transfer-download"></i></button>
                          </div>
                        </div><!-- /.list-group-item -->
                        <!-- .list-group-item -->
                        <div class="list-group-item">
                          <div class="list-group-item-figure">
                            <a href="#" class="tile tile-circle bg-purple"><span class="fa fa-folder"></span></a>
                          </div>
                          <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                              <a href="#">Education & Children</a>
                            </h4>
                            <p class="list-group-item-text"> Jan 19, 2018 </p>
                          </div>
                          <div class="list-group-item-figure">
                            <button class="btn btn-sm btn-icon btn-light"><i class="oi oi-data-transfer-download"></i></button>
                          </div>
                        </div><!-- /.list-group-item -->
                        <!-- .list-group-item -->
                        <div class="list-group-item">
                          <div class="list-group-item-figure">
                            <a href="#" class="tile tile-circle bg-info"><span class="fa fa-file-image"></span></a>
                          </div>
                          <div class="list-group-item-body">
                            <h4 class="list-group-item-title">
                              <a href="#">Auto & Transport</a>
                            </h4>
                            <p class="list-group-item-text"> Jan 12, 2018 </p>
                          </div>
                          <div class="list-group-item-figure">
                            <button class="btn btn-sm btn-icon btn-light"><i class="oi oi-data-transfer-download"></i></button>
                          </div>
                        </div><!-- /.list-group-item -->
                      </div><!-- /.list-group -->
                    </div><!-- /.card -->
                  </div><!-- /grid column -->
                  <!-- grid column -->
                  <div class="col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .list-group -->
                      <div class="list-group list-group-flush list-group-divider">
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure">
                            <div class="user-avatar">
                              <img src="assets/images/avatars/profile.jpg" alt="">
                            </div>
                          </div>
                          <div class="list-group-item-body">
                            <h4 class="list-group-item-title"> Are you free tonight? </h4>
                            <p class="list-group-item-text text-truncate">
                              <span class="text-dark">Beni Arisandi</span> – Fuga quis quod voluptas mollitia aliquid alias tenetur. Laboriosam asperiores cupiditate aperiam! </p>
                          </div>
                        </a> <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure">
                            <div class="tile tile-circle bg-muted">
                              <i class="oi oi-person"></i>
                            </div>
                          </div>
                          <div class="list-group-item-body">
                            <h4 class="list-group-item-title"> RE: Your trip to Montreal <span class="text-muted">6</span>
                            </h4>
                            <p class="list-group-item-text text-truncate">
                              <span class="text-dark">Diane Peters</span> – Consectetur quis veritatis aut maiores omnis, expedita officiis delectus perspiciatis a dolores. </p>
                          </div>
                        </a> <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure">
                            <div class="user-avatar">
                              <img src="assets/images/avatars/uifaces11.jpg" alt="">
                            </div>
                          </div>
                          <div class="list-group-item-body">
                            <h4 class="list-group-item-title"> Invitation: Joe's Dinner @ Fri Aug 22 </h4>
                            <p class="list-group-item-text text-truncate">
                              <span class="text-dark">Me, Jennifer, Alex</span> – Officiis numquam, repellat nam tempore sit aliquid nostrum autem excepturi quis nihil. </p>
                          </div>
                        </a> <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure">
                            <div class="user-avatar">
                              <img src="assets/images/avatars/uifaces12.jpg" alt="">
                            </div>
                          </div>
                          <div class="list-group-item-body">
                            <h4 class="list-group-item-title"> The Perfect Gift For Everyone On Your List </h4>
                            <p class="list-group-item-text text-truncate">
                              <span class="text-dark">Zachary Fowler</span> – Ad earum dolore excepturi itaque officia vel fugiat quo, quisquam dicta ex. </p>
                          </div>
                        </a>
                      </div><!-- /.list-group -->
                    </div><!-- /.card -->
                  </div><!-- /grid column -->
                </div><!-- /grid row -->
                <hr class="my-5">
                <!-- .section-block -->
                <div class="section-block">
                  <h3 class="section-title"> Three-line list </h3>
                </div><!-- /.section-block -->
                <!-- grid row -->
                <div class="row">
                  <!-- grid column -->
                  <div class="col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .list-group -->
                      <div class="list-group list-group-flush list-group-divider">
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure">
                            <div class="user-avatar user-avatar-lg">
                              <img src="assets/images/avatars/profile.jpg" alt="">
                            </div>
                          </div>
                          <div class="list-group-item-body">
                            <h4 class="list-group-item-title"> Are you free tonight? </h4>
                            <h5 class="list-group-item-subtitle"> Beni Arisandi </h5>
                            <p class="list-group-item-text text-truncate"> Fuga quis quod voluptas mollitia aliquid alias tenetur. Laboriosam asperiores cupiditate aperiam! </p>
                          </div>
                        </a> <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure">
                            <div class="tile tile-lg tile-circle bg-muted">
                              <i class="oi oi-person"></i>
                            </div>
                          </div>
                          <div class="list-group-item-body">
                            <h4 class="list-group-item-title"> RE: Your trip to Montreal <span class="text-muted">6</span>
                            </h4>
                            <h5 class="list-group-item-subtitle"> Diane Peters </h5>
                            <p class="list-group-item-text text-truncate"> Consectetur quis veritatis aut maiores omnis, expedita officiis delectus perspiciatis a dolores. </p>
                          </div>
                        </a> <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure">
                            <div class="user-avatar user-avatar-lg">
                              <img src="assets/images/avatars/uifaces11.jpg" alt="">
                            </div>
                          </div>
                          <div class="list-group-item-body">
                            <h4 class="list-group-item-title"> Invitation: Joe's Dinner @ Fri Aug 22 </h4>
                            <h5 class="list-group-item-subtitle"> Me, Jennifer, Alex </h5>
                            <p class="list-group-item-text text-truncate"> Officiis numquam, repellat nam tempore sit aliquid nostrum autem excepturi quis nihil. </p>
                          </div>
                        </a> <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure">
                            <div class="user-avatar user-avatar-lg">
                              <img src="assets/images/avatars/uifaces12.jpg" alt="">
                            </div>
                          </div>
                          <div class="list-group-item-body">
                            <h4 class="list-group-item-title"> The Perfect Gift For Everyone On Your List </h4>
                            <h5 class="list-group-item-subtitle"> Zachary Fowler </h5>
                            <p class="list-group-item-text text-truncate"> Ad earum dolore excepturi itaque officia vel fugiat quo, quisquam dicta ex. </p>
                          </div>
                        </a>
                      </div><!-- /.list-group -->
                    </div><!-- /.card -->
                  </div><!-- /grid column -->
                  <!-- grid column -->
                  <div class="col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .list-group -->
                      <div class="list-group list-group-flush list-group-divider">
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure">
                            <div class="user-avatar user-avatar-lg">
                              <img src="assets/images/avatars/profile.jpg" alt="">
                            </div>
                          </div>
                          <div class="list-group-item-body">
                            <h4 class="list-group-item-title"> Beni Arisandi </h4>
                            <h5 class="list-group-item-subtitle"> Are you free tonight? </h5>
                            <p class="list-group-item-text text-truncate"> Fuga quis quod voluptas mollitia aliquid alias tenetur. Laboriosam asperiores cupiditate aperiam! </p>
                          </div>
                        </a> <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure">
                            <div class="tile tile-lg tile-circle bg-muted">
                              <i class="oi oi-person"></i>
                            </div>
                          </div>
                          <div class="list-group-item-body">
                            <h4 class="list-group-item-title"> Diane Peters </h4>
                            <h5 class="list-group-item-subtitle"> RE: Your trip to Montreal <span class="text-muted">6</span>
                            </h5>
                            <p class="list-group-item-text text-truncate"> Consectetur quis veritatis aut maiores omnis, expedita officiis delectus perspiciatis a dolores. </p>
                          </div>
                        </a> <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure">
                            <div class="user-avatar user-avatar-lg">
                              <img src="assets/images/avatars/uifaces11.jpg" alt="">
                            </div>
                          </div>
                          <div class="list-group-item-body">
                            <h4 class="list-group-item-title"> Me, Jennifer, Alex </h4>
                            <h5 class="list-group-item-subtitle"> Invitation: Joe's Dinner @ Fri Aug 22 </h5>
                            <p class="list-group-item-text text-truncate"> Officiis numquam, repellat nam tempore sit aliquid nostrum autem excepturi quis nihil. </p>
                          </div>
                        </a> <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure">
                            <div class="user-avatar user-avatar-lg">
                              <img src="assets/images/avatars/uifaces12.jpg" alt="">
                            </div>
                          </div>
                          <div class="list-group-item-body">
                            <h4 class="list-group-item-title"> Zachary Fowler </h4>
                            <h5 class="list-group-item-subtitle"> The Perfect Gift For Everyone On Your List </h5>
                            <p class="list-group-item-text text-truncate"> Ad earum dolore excepturi itaque officia vel fugiat quo, quisquam dicta ex. </p>
                          </div>
                        </a>
                      </div><!-- /.list-group -->
                    </div><!-- /.card -->
                  </div><!-- /grid column -->
                </div><!-- /grid row -->
                <hr class="my-5">
                <!-- .section-block -->
                <div class="section-block">
                  <h3 class="section-title"> Media list </h3>
                </div><!-- /.section-block -->
                <!-- .section-block -->
                <div class="section-block">
                  <!-- grid row -->
                  <div class="row">
                    <!-- grid column -->
                    <div class="col-lg-6">
                      <!-- .list-group -->
                      <div class="list-group list-group-media mb-3">
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure rounded-left">
                            <img src="assets/images/dummy/img-5.jpg" alt="placeholder image">
                          </div>
                          <div class="list-group-item-body">
                            <h4 class="list-group-item-title"> Expanding Your Home Network’s Reach </h4>
                            <p class="list-group-item-text"> A incidunt, corrupti. Quasi, incidunt ab, vel quidem debitis fuga? Delectus, ipsam... </p>
                          </div>
                        </a> <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure rounded-left">
                            <img src="assets/images/dummy/img-1.jpg" alt="placeholder image">
                          </div>
                          <div class="list-group-item-body">
                            <h4 class="list-group-item-title"> The Wealth of New Choices With Robot Vacuum Cleaners </h4>
                            <p class="list-group-item-text"> Fugiat beatae vel neque, minus voluptatum in. Placeat repellat qui impedit, consectetur... </p>
                          </div>
                        </a>
                      </div><!-- /.list-group -->
                    </div><!-- /grid column -->
                    <!-- grid column -->
                    <div class="col-lg-6">
                      <!-- .list-group -->
                      <div class="list-group list-group-media mb-3">
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure rounded-left">
                            <img src="assets/images/dummy/img-4.jpg" alt="placeholder image">
                          </div>
                          <div class="list-group-item-body">
                            <h4 class="list-group-item-title"> Meet the People Who Train the Robots </h4>
                            <p class="list-group-item-text"> Veritatis dicta expedita dolorem repudiandae nemo odit quos optio vero libero quia... </p>
                          </div>
                        </a> <a href="#" class="list-group-item list-group-item-action">
                          <div class="list-group-item-figure rounded-left">
                            <img src="assets/images/dummy/img-2.jpg" alt="placeholder image">
                          </div>
                          <div class="list-group-item-body">
                            <h4 class="list-group-item-title"> Daily Report: Cloud Computing Asserts Itself </h4>
                            <p class="list-group-item-text"> Reprehenderit iure et, fugit libero harum doloremque culpa... </p>
                          </div>
                        </a>
                      </div><!-- /.list-group -->
                    </div><!-- /grid column -->
                  </div><!-- /grid row -->
                </div><!-- /.section-block -->
                <hr class="my-5">
                <!-- .section-block -->
                <div class="section-block">
                  <h3 class="section-title"> Form-element list </h3>
                </div><!-- /.section-block -->
                <!-- grid row -->
                <div class="row">
                  <!-- grid column -->
                  <div class="col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .list-group -->
                      <div class="list-group list-group-flush list-group-bordered">
                        <div class="list-group-header"> Input Checkbox </div><label class="list-group-item custom-control custom-checkbox mb-0"><input name="listcheckbox" type="checkbox" class="custom-control-input" checked> <span class="custom-control-label">List checkbox #1</span></label> <label class="list-group-item custom-control custom-checkbox mb-0"><input name="listcheckbox" type="checkbox" class="custom-control-input" checked> <span class="custom-control-label">List checkbox #2</span></label>
                        <div class="list-group-header"> Input Radio </div><label class="list-group-item custom-control custom-radio mb-0"><input name="listradio" type="radio" class="custom-control-input" checked> <span class="custom-control-label">List radio #1</span></label> <label class="list-group-item custom-control custom-radio mb-0"><input name="listradio" type="radio" class="custom-control-input" checked> <span class="custom-control-label">List radio #2</span></label>
                      </div><!-- /.list-group -->
                    </div><!-- /.card -->
                  </div><!-- /grid column -->
                  <!-- grid column -->
                  <div class="col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .list-group -->
                      <div class="list-group list-group-flush list-group-bordered">
                        <div class="list-group-header"> I have switcher </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center"> Switch me! <label class="switcher-control switcher-control-success"><input type="checkbox" name="onoffswitch" class="switcher-input" checked> <span class="switcher-indicator"></span></label>
                        </div>
                        <div class="list-group-header"> Control Input </div><input type="text" class="list-group-item" placeholder="Username"> <input type="password" class="list-group-item" placeholder="Password"> <select class="list-group-item custom-select">
                          <option selected> Select one </option>
                          <option value="1"> One </option>
                          <option value="2"> Two </option>
                          <option value="3"> Three </option>
                        </select>
                      </div><!-- /.list-group -->
                    </div><!-- /.card -->
                  </div><!-- /grid column -->
                </div><!-- /grid row -->
                <hr class="my-5">
                <!-- .section-block -->
                <div class="section-block">
                  <h2 class="section-title"> Treeview </h2>
                  <p class="text-muted"> jQuery tree plugin, that provides interactive trees. Supports HTML & JSON data sources, AJAX & async callback loading. </p>
                </div><!-- /.section-block -->
                <!-- grid row -->
                <div class="row">
                  <!-- grid column -->
                  <div class="col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <h4 class="card-title"> Basic </h4><!-- #jstree1 -->
                        <div id="jstree1">
                          <ul>
                            <li data-jstree='{"opened":true, "type":"root"}'>Root <ul>
                                <li data-jstree='{"type":"folder"}'>Directory </li>
                                <li data-jstree='{"type":"file"}'>File Unread </li>
                                <li data-jstree='{"opened":true, "type":"folder"}'>Another directory <ul>
                                    <li data-jstree='{"type":"text"}'>File text </li>
                                    <li data-jstree='{"type":"word"}'>File word </li>
                                    <li data-jstree='{"type":"excel"}'>File excel </li>
                                    <li data-jstree='{"type":"ppt", "disabled":true}'>File powerpoint </li>
                                    <li data-jstree='{"type":"pdf"}'>File pdf </li>
                                    <li data-jstree='{"type":"archive"}'>File archive </li>
                                    <li data-jstree='{"type":"image"}'>File image </li>
                                    <li data-jstree='{"type":"audio"}'>File audio </li>
                                    <li data-jstree='{"type":"video"}'>File video </li>
                                  </ul>
                                </li>
                                <li data-jstree='{"type":"folder"}'>Something else </li>
                                <li data-jstree='{"type":"file"}'>File node </li>
                              </ul>
                            </li>
                          </ul>
                        </div><!-- /#jstree1 -->
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- grid column -->
                  <!-- grid column -->
                  <div class="col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <h4 class="card-title"> JSON data </h4><!-- #jstree2 -->
                        <div id="jstree2"></div><!-- /#jstree2 -->
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- grid column -->
                  <!-- grid column -->
                  <div class="col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <h4 class="card-title"> Ajax </h4><!-- #jstree3 -->
                        <div id="jstree3"></div><!-- /#jstree3 -->
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- grid column -->
                  <!-- grid column -->
                  <div class="col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <h4 class="card-title"> Working with events </h4>
                        <p class="card-subtitle text-muted mb-3"> Let's use the most basic event <code>changed</code> - it fires when selection on the tree changes: </p><!-- #jstree4 -->
                        <div id="jstree4"></div><!-- /#jstree4 -->
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- grid column -->
                  <!-- grid column -->
                  <div class="col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <h4 class="card-title"> Checkbox </h4><!-- #jstree5 -->
                        <div id="jstree5"></div><!-- /#jstree5 -->
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- grid column -->
                  <!-- grid column -->
                  <div class="col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <h4 class="card-title"> Contextmenu </h4><!-- #jstree6 -->
                        <div id="jstree6"></div><!-- /#jstree6 -->
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- grid column -->
                  <!-- grid column -->
                  <div class="col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <h4 class="card-title"> Drag & drop </h4><!-- #jstree7 -->
                        <div id="jstree7"></div><!-- /#jstree7 -->
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- grid column -->
                  <!-- grid column -->
                  <div class="col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <h4 class="card-title"> Massload </h4><!-- #jstree8 -->
                        <div id="jstree8"></div><!-- /#jstree8 -->
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- grid column -->
                  <!-- grid column -->
                  <div class="col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <h4 class="card-title"> Search </h4><!-- .form-group -->
                        <div class="form-group has-clearable" style="width: 300px">
                          <button type="button" class="close show" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button> <input id="jstree9_q" type="text" class="form-control">
                        </div><!-- /.form-group -->
                        <!-- #jstree9 -->
                        <div id="jstree9"></div><!-- /#jstree9 -->
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- grid column -->
                  <!-- grid column -->
                  <div class="col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <h4 class="card-title"> Sort </h4><!-- #jstree10 -->
                        <div id="jstree10"></div><!-- /#jstree10 -->
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- grid column -->
                  <!-- grid column -->
                  <div class="col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body">
                        <h4 class="card-title"> Wholerow </h4><!-- #jstree11 -->
                        <div id="jstree11"></div><!-- /#jstree11 -->
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- grid column -->
                </div><!-- grid row -->
              </div><!-- /.page-section -->
            </div><!-- /.page-inner -->
          </div><!-- /.page -->
        </div><!-- .app-footer -->
        <footer class="app-footer">
          <ul class="list-inline">
            <li class="list-inline-item">
              <a class="text-muted" href="#">Support</a>
            </li>
            <li class="list-inline-item">
              <a class="text-muted" href="#">Help Center</a>
            </li>
            <li class="list-inline-item">
              <a class="text-muted" href="#">Privacy</a>
            </li>
            <li class="list-inline-item">
              <a class="text-muted" href="#">Terms of Service</a>
            </li>
          </ul>
          <div class="copyright"> Copyright © 2018. All right reserved. </div>
        </footer><!-- /.app-footer -->
        <!-- /.wrapper -->
      </main><!-- /.app-main -->
    </div><!-- /.app -->
    <!-- BEGIN BASE JS -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/popper.js/umd/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="assets/vendor/pace-progress/pace.min.js"></script>
    <script src="assets/vendor/stacked-menu/js/stacked-menu.min.js"></script>
    <script src="assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/vendor/jstree/jstree.min.js"></script>
    <script src="assets/vendor/toastr/build/toastr.min.js"></script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="assets/javascript/theme.min.js"></script> <!-- END THEME JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="assets/javascript/pages/jstree-demo.js"></script> <!-- END PAGE LEVEL JS -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116692175-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-116692175-1');
    </script>
  </body>

<!-- Mirrored from uselooper.com/component-list-views.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Mar 2022 06:19:13 GMT -->
</html>