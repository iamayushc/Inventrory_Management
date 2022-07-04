<?php include('common/header.php');?>
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
                <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Back</a>
              </li>
            </ol>
          </nav>
          <h1 class="page-title"> Add Orders </h1>
        </header><!-- /.page-title-bar -->
        <!-- .page-section -->
        <div class="page-section">
          <!-- .card -->
          <div class="card card-fluid">
            <!-- .card-body -->
            <div class="card-body">

              <form action="<?php echo base_url().'Welcome/add_stock_script'?>" method="post"  enctype="multipart/form-data">
                <!-- .form-group -->
                <div class="row">

                    <div class="form-group w-100">
                      <label class="control-label" for="stock">Orders</label>
                      <input type="file" id="stock" name="stock" class="form-control" />
                    </div><!-- /.form-group -->




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
