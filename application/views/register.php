<?php $page = 'products';
include('common/outer_header.php');?>
      <form class="auth-form" method="post" action="<?php echo base_url()?>welcome/register_script">
        <!-- .form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" name="retailer_name" id="inputUser" class="form-control" placeholder="Username" required=""> <label for="inputUser">Name</label>
          </div>
        </div><!-- /.form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" name="company_name" id="inputUser" class="form-control" placeholder="Username" required=""> <label for="inputUser">Company Name</label>
          </div>
        </div><!-- /.form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" name="mobile" id="inputUser" class="form-control" placeholder="Username" required=""> <label for="inputUser">Mobile</label>
          </div>
        </div><!-- /.form-group -->

        <div class="form-group">
          <div class="form-label-group">
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required="" autofocus=""> <label for="inputEmail">Email</label>
          </div>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" name="username" id="inputUser" class="form-control" placeholder="Username" required=""> <label for="inputUser">Username</label>
          </div>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required=""> <label for="inputPassword">Password</label>
          </div>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group">
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group text-center">
          <div class="custom-control custom-control-inline custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="newsletter"> <label class="custom-control-label" for="newsletter">Sign me up for the newsletter</label>
          </div>
        </div><!-- /.form-group -->
        <!-- recovery links -->
        <p class="text-center text-muted mb-0"> By creating an account you agree to the <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>. </p><!-- /recovery links -->
      </form><!-- /.auth-form -->
<?php include('common/outer_footer.php');?>