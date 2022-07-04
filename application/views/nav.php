	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style type="text/css">
	 
.dropdown-menu > li.kopie > a {
    padding-left:5px;
}
 
.dropdown-submenu {
    position:relative;
}
.dropdown-submenu>.dropdown-menu {
   top:0;left:100%;
   margin-top:-6px;margin-left:-1px;
   -webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;
 }
  
.dropdown-submenu > a:after {
  border-color: transparent transparent transparent #333;
  border-style: solid;
  border-width: 5px 0 5px 5px;
  content: " ";
  display: block;
  float: right;  
  height: 0;     
  margin-right: -10px;
  margin-top: 5px;
  width: 0;
}
 
.dropdown-submenu:hover>a:after {
    border-left-color:#555;
 }

.dropdown-menu > li > a:hover, .dropdown-menu > .active > a:hover {
  text-decoration: underline;
}  
  
@media (max-width: 767px) {
  .navbar-nav  {
     display: inline;
  }
  .navbar-default .navbar-brand {
    display: inline;
  }
  .navbar-default .navbar-toggle .icon-bar {
    background-color: #fff;
  }
  .navbar-default .navbar-nav .dropdown-menu > li > a {
    color: red;
    background-color: #ccc;
    border-radius: 4px;
    margin-top: 2px;   
  }
   .navbar-default .navbar-nav .open .dropdown-menu > li > a {
     color: #333;
   }
   .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
   .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
     background-color: #ccc;
   }

   .navbar-nav .open .dropdown-menu {
     border-bottom: 1px solid white; 
     border-radius: 0;
   }
  .dropdown-menu {
      padding-left: 10px;
  }
  .dropdown-menu .dropdown-menu {
      padding-left: 20px;
   }
   .dropdown-menu .dropdown-menu .dropdown-menu {
      padding-left: 30px;
   }
   li.dropdown.open {
    border: 0px solid red;
   }

}
 
@media (min-width: 768px) {
  ul.nav li:hover > ul.dropdown-menu {
    display: block;
  }
  #navbar {
    text-align: center;
  }
}  



</style>


<div id="navbar">
  <nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse-1">
      <ul class="nav navbar-nav">
       
        
       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Apps <b class="caret"></b></a>
          <ul class="dropdown-menu">
           
          	<li class="dropdown dropdown-submenu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Anti Thief</a>
              <ul class="dropdown-menu">
               
              
                 <li class="dropdown dropdown-submenu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">SECURITY</a>
					<ul class="dropdown-menu">
					<li><a href="<?php echo site_url('Security/anti_theft');?>">ANTI THEFT</a></li>
					<li><a href="<?php echo site_url('Security/remote_security');?>">REMOTE SECURITY</a></li>
					<li><a href="<?php echo site_url('Security/ladies_and_child_protection');?>">LADIES & CHILD PROTECTION</a></li>
					<li><a href="<?php echo site_url('Security/anti_virus');?>">ANTI VIRUS</a></li>
					<li><a href="<?php echo site_url('Security/app_locker');?>">APP LOCKER</a></li>
					<!--<li><a href="<?php echo site_url('Security/secure_data');?>">SECURE DATA</a></li>-->
				</ul>
                </li>
                <li class="dropdown dropdown-submenu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">TOOLS</a>
                  	<ul class="dropdown-menu">
						<li><a href="<?php echo site_url('Tools/secret_camera');?>">SECRET CAMERA</a></li>
						<li><a href="<?php echo site_url('Tools/call_record_blocker');?>">CALL RECORD BLOCKER</a></li>
						<li><a href="<?php echo site_url('Tools/contact_and_sms_backup');?>">CONTACTS BACKUP</a></li>
						<li><a href="<?php echo site_url('Tools/app_analyzer');?>">APP ANALYZER</a></li>
					</ul>
                </li>
                <li class="dropdown dropdown-submenu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">ENTERTAINMENT</a>
                  <ul class="dropdown-menu">
					<li><a href="<?php echo site_url('Entertainment/youtube');?>">YOUTUBE</a></li>
					<!--<li><a href="<?php echo site_url('Entertainment/video_downloader');?>">VIDEO DOWNLOADER</a></li>-->
				 </ul>
                </li>
                <li class="dropdown dropdown-submenu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">HEALTH & FITNESS</a>
                 <ul class="dropdown-menu">
					<li><a href="<?php echo site_url('Health_and_fitness/relax_sound');?>">RELAX SOUND</a></li>
					<li><a href="<?php echo site_url('Health_and_fitness/fitness');?>">FITNESS</a></li>
				</ul>
                </li>
                <li class="dropdown dropdown-submenu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">GAME</a>
                 <ul class="dropdown-menu">
					<li><a href="<?php echo site_url('Games/game_2064');?>">2048</a></li>
					<li><a href="<?php echo site_url('Games/pacman');?>">PACMAN</a></li>
					<li><a href="<?php echo site_url('Games/clumsy_bird');?>">CLUMSY BIRD</a></li>
				</ul>
                </li>
                <li class="dropdown dropdown-submenu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">EDUCATION</a>
                  <ul class="dropdown-menu" >
						<li><a href="<?php echo site_url('Education/class1');?>">CLASS 1-12</a></li>
						<!--<li><a href="<?php echo site_url('Education/class2');?>">CLASS 2</a></li>-->
						<!--<li><a href="<?php echo site_url('Education/class3');?>">CLASS 3</a></li>-->
						<!--<li><a href="<?php echo site_url('Education/class4');?>">CLASS 4</a></li>-->
						<!--<li><a href="<?php echo site_url('Education/class5');?>">CLASS 5</a></li>-->
						<!--<li><a href="<?php echo site_url('Education/class6');?>">CLASS 6</a></li>-->
						<!--<li><a href="<?php echo site_url('Education/class7');?>">CLASS 7</a></li>-->
						<!--<li><a href="<?php echo site_url('Education/class8');?>">CLASS 8</a></li>-->
						<!--<li><a href="<?php echo site_url('Education/class9');?>">CLASS 9</a></li>-->
						<!--<li><a href="<?php echo site_url('Education/class10');?>">CLASS 10</a></li>-->
						<!--<li><a href="<?php echo site_url('Education/class11');?>">CLASS 11</a></li>-->
						<!--<li><a href="<?php echo site_url('Education/class12');?>">CLASS 12</a></li>-->
						<li><a href="<?php echo site_url('Education/calc_and_converter');?>">Calc & Converter </a></li>
					</ul>
                </li>
                  <li><a href="#">News</a></li>
                
              </ul>
            </li>
            <li class="dropdown dropdown-submenu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Family Care</a>
              <ul class="dropdown-menu">
               
                <li><a href="#">Kids Protection</a></li>
                <li><a href="#">Family Care</a></li>
                <li><a href="#">Education</a></li>
                
              </ul>
            </li>
            
          </ul>
        </li>

        	<li>	<a href="<?php echo site_url('Partner');?>" > PARTNER </a></li>
        	<li>	<a href="<?php echo site_url('About');?>" >ABOUT </a></li>
        	<li>	<a href="<?php echo site_url('Career');?>" >CAREERS </a></li>
        	<li><a href="<?php echo site_url('Contact');?>">Contact</a></li>

        	<li><a class="btn btn-primary" href="<?php echo site_url('Customer');?>" target="_blank" style="margin-top:12px; line-height:0; left:-14px; "  >Customer Login</a></li>
        	<li><a class="btn btn-primary" href="<?php echo site_url('Payment2');?>" target="_blank" style="margin-top:12px; line-height:0; left:-14px; " >Get Application</a></li>



      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </nav>
</div>