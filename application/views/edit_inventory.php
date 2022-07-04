<?php $page = 'products';
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
                <a href="<?php echo base_url().'Welcome/products'?>"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Back</a>
              </li>
            </ol>
          </nav>
          <h1 class="page-title"> Edit Product </h1>
        </header><!-- /.page-title-bar -->
        <!-- .page-section -->
        <div class="page-section">
          <!-- .card -->
          <div class="card card-fluid">
            <!-- .card-body -->
            <div class="card-body">

              <form action="<?php echo base_url().'Welcome/edit_inventory_script/'.$id.'/'.$product_id ?>" method="post" >
                <!-- .form-group -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label" for="vareint">Vareint</label>
                      <input type="text" id="vareint" name="vareint"class="form-control" value="<?php echo $vareint?>"/>
                    </div><!-- /.form-group -->
                    <div class="form-group">
                      <label class="control-label" for="qty">In Stock</label>
                      <input type="text" id="qty" name="qty"class="form-control" value="<?php echo $qty?>"/>
                    </div><!-- /.form-group -->
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label" for="color">Color</label>
                      <input type="text" id="color" name="color"class="form-control" value="<?php echo $color?>"/>
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
