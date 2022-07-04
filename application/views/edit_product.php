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

              <form action="<?php echo base_url().'Welcome/edit_product_script/'.$id ?>" method="post" >
                <!-- .form-group -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label" for="pname">Product Name</label>
                      <input type="text" id="pname" name="pname"class="form-control" value="<?php echo $product_name?>"/>
                    </div><!-- /.form-group -->
                    
                    <div class="form-group">
                      <label class="control-label" for="mcode">Material Code</label>
                      <input type="text" id="mcode" name="mcode"class="form-control" value="<?php echo $material_code?>"/>
                    </div><!-- /.form-group -->
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label" for="mno">Model No</label>
                      <input type="text" id="mno" name="mno"class="form-control" value="<?php echo $model_no?>"/>
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
