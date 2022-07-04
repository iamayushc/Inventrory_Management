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
          <!-- .breadcrumb -->

          <!-- title -->
          <h1 class="page-title"> Inventory of <?php echo ucfirst($product_name)?> </h1>
          <p class="text-muted"> All Stocks of <?php echo ucfirst($product_name)?> </p><!-- /title -->
        </header><!-- /.page-title-bar -->
        <!-- .page-section -->
        <div class="page-section">
          <!-- .card -->
          <div class="card card-fluid">
            <!-- .card-body -->

            <div class="card-body">
              <!-- .table -->
              <?php 
              $this->db->like('buttons.rights',$this->session->userdata('user_type'))   ;
              $right_of_btn = $this->db->select('buttons.*')->where('menus.link','products')->where('buttons.link','add_stock_script')->join('menus','menus.id=buttons.menu_id')->get('buttons')->row();
              if(isset($right_of_btn) AND $right_of_btn->id != ''){ ?>

              <button type="button" data-toggle="modal" data-target="#add_modal" class="btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i> New Varient</button>
              <?php } ?>
              

              <table class="table dt-responsive nowrap w-100" id="mytable">

                  <thead >
                      <tr>

                          <th class="align-middle select-checkbox">Sr No</th>
                          <th class="align-middle">Vareint </th>
                          <th class="align-middle">Color </th>
                          <th class="align-middle">In Stock</th>

                          <?php if($this->session->userdata('user_type') == 'admin'){ ?>
                           <th class="align-middle">Action </th>
                          <?php } ?>

                      </tr>
                  </thead>
                  <tbody>

                  </tbody>
              </table><!-- /.table -->
            </div><!-- /.card-body -->
          </div><!-- /.card -->
        </div><!-- /.page-section -->
      </div><!-- /.page-inner -->
    </div><!-- /.page -->
  </div><!-- .app-footer -->

                            <div id="upload_modal" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static">
                              <div class="modal-dialog">
                                 <!-- Modal content-->
                                 <div class="modal-content">
                                    <form method="post" id="upload_stock_form" action="<?php echo base_url() . 'Welcome/add_inventory_script/'.$id; ?>" enctype="multipart/form-data">
                                       <div class="modal-header text-center">
                                          <h4 class="modal-title mx-auto">Add Stock</h4>
                                       </div>
                                       <div class="modal-body">
                                        <div class="col-md-12 my-1">
                                             <div class="row form-group-inner">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                   <label class="login2 pull-right pull-right-pro">Upload</label>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-9 col-xs-12">
                                                   <input type="file" class="form-control" name="stock" >
                                                </div>
                                             </div>
                                          </div>

                                          
                                       </div>
                                       <div class="modal-footer">
                                          <button type="submit" class="float-right btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2">Submit</button>
                                          <button type="button" class="float-right btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2" data-dismiss="modal">Close</button>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                            </div>

                            <div id="add_modal" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static">
                              <div class="modal-dialog">
                                 <!-- Modal content-->
                                 <div class="modal-content">
                                    <form method="post" id="cat_select_form" action="<?php echo base_url() . 'Welcome/add_inventory_script/'.$id; ?>">
                                       <div class="modal-header text-center">
                                          <h4 class="modal-title mx-auto">Add Varient</h4>
                                       </div>
                                       <div class="modal-body">
                                        <div class="col-md-12 my-1">
                                             <div class="row form-group-inner">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                   <label class="login2 pull-right pull-right-pro">Vareint</label>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-9 col-xs-12">
                                                   <input type="text" class="form-control" name="vareint" >
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-12 my-1">
                                             <div class="row form-group-inner">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                   <label class="login2 pull-right pull-right-pro">Color</label>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-9 col-xs-12">
                                                   <input type="text" class="form-control" name="color" >
                                                </div>
                                             </div>
                                          </div>
                                          
                                       </div>
                                       <div class="modal-footer">
                                          <button type="submit" class="float-right btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2">Submit</button>
                                          <button type="button" class="float-right btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2" data-dismiss="modal">Close</button>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                            </div>
                            <div id="edit_cat" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static">
                              <div class="modal-dialog">
                                 <!-- Modal content-->
                                 <div class="modal-content">
                                    <form method="post" id="edit_inventory_form" action="<?php echo base_url() . 'Welcome/add_inventory_script/'.$id; ?>">
                                       <div class="modal-header text-center">
                                          <h4 class="modal-title mx-auto">Edit Varient</h4>
                                       </div>
                                       <div class="modal-body">
                                        <div class="col-md-12 my-1">
                                             <div class="row form-group-inner">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                   <label class="login2 pull-right pull-right-pro">Vareint</label>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-9 col-xs-12">
                                                   <input type="text" class="form-control" id="edit_vareint" name="vareint" value="">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-12 my-1">
                                             <div class="row form-group-inner">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                   <label class="login2 pull-right pull-right-pro">Color</label>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-9 col-xs-12">
                                                   <input type="text" class="form-control" id="edit_color" name="color" value="">
                                                </div>
                                             </div>
                                          </div>
                                          
                                       </div>
                                       <div class="modal-footer">
                                          <button type="submit" class="float-right btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2">Submit</button>
                                          <button type="button" class="float-right btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2" data-dismiss="modal">Close</button>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                            </div>

  <!-- /.wrapper -->
</main><!-- /.app-main -->

</div><!-- /.app -->
        <script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
               
<?php include('common/footer.php');?>
        <script src="<?php echo base_url()?>assets/libs/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url()?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url()?>assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?php echo base_url()?>assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?php echo base_url()?>assets/libs/node-waves/waves.min.js"></script>

        <!-- apexcharts -->
        <!-- <script src="<?php echo base_url()?>assets/libs/apexcharts/apexcharts.min.js"></script> -->

        <!-- file-manager js -->
        <!-- <script src="<?php echo base_url()?>assets/javascript/pages/file-manager.init.js"></script> -->

        <script src="<?php echo base_url()?>assets/javascript/app.js"></script>
        <script type="text/javascript" src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
                <script type="text/javascript">
    $(document).ready(function(){  
        
      var dataTable = $('#mytable').DataTable({  
          "serverSide":true,  
          "order":[],  
          "ajax":{  
                url:"<?php echo base_url() . 'Welcome/fetch_inventory/'.$id; ?>",  
                type:"POST"  
          },
          lengthMenu: [
            [ 5, 10, 50, -1 ],
            [ '5', '10','50', 'Show All' ]
        ],
        
         buttons:
        [
         'pageLength',
        ],

        'language': {
            'loadingRecords': '&nbsp;',
            'processing': $(".se-pre-con").css("visibility", "visible"),
        } ,
          "columnDefs":[  
                {  
                     "targets":[0],  
                     "orderable":false,  
                },  
          ],
          
            select: true,
            bStateSave: true,
      }); 

 $("#mytable").on('click','#delete_modal' ,function (e) {
   
            //$('#delModal1').modal('show');
     
       
            $("#okDelete").attr('href',$(this).attr('data-submit'));
   
     });

    $("#mytable").on('click','#edit_modal' ,function (e) {
   
            //$('#edit_cat').modal('show');
     
            // alert('vgdsgd');
            $("#edit_inventory_form").attr('action',$(this).attr('data-submit'));

            $("#edit_vareint").attr('value',$(this).attr('data-vareint'));

            $("#edit_color").attr('value',$(this).attr('data-color'));
   
     });

    $("#mytable").on('click','#upload_modal_btn' ,function (e) {
   
            //$('#edit_cat').modal('show');
     
            // alert('vgdsgd');
            $("#upload_stock_form").attr('action',$(this).attr('data-submit'));

   
     });


 });


        </script>

