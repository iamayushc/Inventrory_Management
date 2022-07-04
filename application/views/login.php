<?php $page = 'products';
include('common/outer_header.php');?>

      <form class="auth-form" method="post" action="<?php echo base_url()?>auth/login_script">
        <!-- .form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" name="username" id="inputUser" class="form-control" placeholder="Username" autofocus=""> <label for="inputUser">Username</label>
          </div>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password"> <label for="inputPassword">Password</label>
          </div>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group">
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group text-center">
          <div class="custom-control custom-control-inline custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="remember-me"> <label class="custom-control-label" for="remember-me">Keep me sign in</label>
          </div>
        </div><!-- /.form-group -->
        <!-- recovery links -->
        <div class="text-center pt-3">
          <a href="auth-recovery-username.html" class="link">Forgot Username?</a> <span class="mx-2">·</span> <a href="auth-recovery-password.html" class="link">Forgot Password?</a>
        </div><!-- /recovery links -->
      </form><!-- /.auth-form -->

<?php include('common/outer_footer.php');?>