<?php $page = 'add_retailer';
include('common/header.php');?>
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
                <a href="<?php echo base_url().'Welcome/retailers'?>"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Back</a>
              </li>
            </ol>
          </nav>
          <h1 class="page-title"> Add Retailer </h1>
        </header><!-- /.page-title-bar -->
        <!-- .page-section -->
        <div class="page-section">
          <!-- .card -->
          <div class="card card-fluid">
            <!-- .card-body -->
            <div class="card-body">

              <form action="<?php echo base_url().'Welcome/add_retailer_script'?>" method="post">
                <!-- .form-group -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label" for="uname">User Name</label>
                      <input type="text" id="uname" name="uname"class="form-control" />
                    </div><!-- /.form-group -->
                    <div class="form-group">
                      <label class="control-label" for="rname">Retailer Name</label>
                      <input type="text" id="rname" name="rname"class="form-control" />
                    </div><!-- /.form-group -->
                    <div class="form-group">
                      <label class="control-label" for="email">Email ID</label>
                      <input type="email" id="email" name="email"class="form-control" />
                    </div><!-- /.form-group -->

                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label" for="password">Password</label>
                      <input type="text" id="password" name="password"class="form-control" />
                    </div><!-- /.form-group -->
                    <div class="form-group">
                      <label class="control-label" for="cname">Company Name</label>
                      <input type="text" id="cname" name="cname"class="form-control" />
                    </div><!-- /.form-group -->
                    <div class="form-group">
                      <label class="control-label" for="mno">Mobile No</label>
                      <input type="number" id="mno" name="mno"class="form-control" />
                    </div><!-- /.form-group -->

                  </div>
                  <button class=" mx-auto text-center btn btn-primary" value="submit">Submit
                    
                  </button>
                </div>

              </form><!-- /form -->
              <!-- default demo source -->

            </div><!-- /.card-body -->
          </div><!-- /.card -->
          <!-- .card -->
        </div><!-- /.page-section -->
      </div><!-- /.page-inner -->
    </div><!-- /.page -->
  </div><!-- .app-footer -->

  <!-- /.wrapper -->
</main><!-- /.app-main -->

</div><!-- /.app -->
<?php include('common/footer.php');?>
