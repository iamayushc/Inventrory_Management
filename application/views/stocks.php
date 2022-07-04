
        <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"> -->
        <style type="text/css">
           .dataTables_wrapper .dataTables_paginate {
  float: right;
  text-align: right;
  padding-top: 0.25em;
}
.dataTables_wrapper .dataTables_paginate .paginate_button {
  box-sizing: border-box;
  display: inline-block;
  min-width: 1.5em;
  padding: 0.5em 1em;
  margin-left: 2px;
  text-align: center;
  text-decoration: none !important;
  cursor: pointer;
  *cursor: hand;
  color: #333 !important;
  border: 1px solid transparent;
  border-radius: 2px;
}
.dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
  color: #333 !important;
  border: 1px solid #979797;
  background-color: white;
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, white), color-stop(100%, #dcdcdc));
  /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top, white 0%, #dcdcdc 100%);
  /* Chrome10+,Safari5.1+ */
  background: -moz-linear-gradient(top, white 0%, #dcdcdc 100%);
  /* FF3.6+ */
  background: -ms-linear-gradient(top, white 0%, #dcdcdc 100%);
  /* IE10+ */
  background: -o-linear-gradient(top, white 0%, #dcdcdc 100%);
  /* Opera 11.10+ */
  background: linear-gradient(to bottom, white 0%, #dcdcdc 100%);
  /* W3C */
}
.dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
  cursor: default;
  color: #666 !important;
  border: 1px solid transparent;
  background: transparent;
  box-shadow: none;
}
.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
  color: white !important;
  border: 1px solid #111;
  background-color: #585858;
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #585858), color-stop(100%, #111));
  /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top, #585858 0%, #111 100%);
  /* Chrome10+,Safari5.1+ */
  background: -moz-linear-gradient(top, #585858 0%, #111 100%);
  /* FF3.6+ */
  background: -ms-linear-gradient(top, #585858 0%, #111 100%);
  /* IE10+ */
  background: -o-linear-gradient(top, #585858 0%, #111 100%);
  /* Opera 11.10+ */
  background: linear-gradient(to bottom, #585858 0%, #111 100%);
  /* W3C */
}
.dataTables_wrapper .dataTables_paginate .paginate_button:active {
  outline: none;
  background-color: #2b2b2b;
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #2b2b2b), color-stop(100%, #0c0c0c));
  /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
  /* Chrome10+,Safari5.1+ */
  background: -moz-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
  /* FF3.6+ */
  background: -ms-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
  /* IE10+ */
  background: -o-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
  /* Opera 11.10+ */
  background: linear-gradient(to bottom, #2b2b2b 0%, #0c0c0c 100%);
  /* W3C */
  box-shadow: inset 0 0 3px #111;
}
.dataTables_wrapper .dataTables_paginate .ellipsis {
  padding: 0 1em;
}
        </style>
<?php $page = 'stocks';

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
          <h1 class="page-title"> Stocks </h1>
          <p class="text-muted"> All Stocks </p><!-- /title -->
        </header><!-- /.page-title-bar -->
        <!-- .page-section -->
        <div class="page-section">
          <!-- .card -->
          <div class="card card-fluid">
            <!-- .card-body -->
            <div class="card-body">
              <!-- .table -->
              <?php 

              $this->db->like('buttons.rights',$this->session->userdata('user_type'));
              $right_of_btn = $this->db->select('buttons.*')->where('menus.link','stocks')->where('buttons.link','add_stocks')->join('menus','menus.id=buttons.menu_id')->get('buttons')->row();

              if(isset($right_of_btn) AND $right_of_btn->id != ''){ ?>
                <button type="button" data-toggle="modal" data-target="#add_modal" class="btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i> Add Stock</button>
              <?php } 

              $this->db->like('buttons.rights',$this->session->userdata('user_type'));
              $right_of_btn = $this->db->select('buttons.*')->where('menus.link','stocks')->where('buttons.link','assign_stocks')->join('menus','menus.id=buttons.menu_id')->get('buttons')->row();

              if(isset($right_of_btn) AND $right_of_btn->id != ''){ ?>
                <button type="button" data-toggle="modal" data-target="#assign_modal" class="btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i> Asssign Stocks</button>
              <?php } ?>



              
              <table class="table dt-responsive nowrap w-100" id="mytable">
                  <thead >
                      <tr>

                          <th class="align-middle select-checkbox">Sr No</th>
                          <th class="align-middle">Product Name </th>
                          <th class="align-middle">Model No </th>
                          <th class="align-middle">Material Code </th>
                          <th class="align-middle">Vareint </th>
                          <th class="align-middle">Color </th>
                          <th class="align-middle">IMEI 1 </th>
                          <th class="align-middle">IMEI 2 </th>
                          <?php if($this->session->userdata('user_type') == 'admin'){ ?>
                           <th class="align-middle">Status </th>
                          <th class="align-middle">Retailer Name </th>
                          <?php } ?>
                          
                          <!-- <th class="align-middle">Actions </th> -->

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
                                    <form method="post" id="cat_select_form" action="<?php echo base_url() . 'Welcome/add_stock_script'; ?>" enctype="multipart/form-data">
                                       <div class="modal-header text-center">
                                          <h4 class="modal-title mx-auto">Add Stock</h4>
                                       </div>
                                       <div class="modal-body">
                                          <div class="col-md-12 my-1">
                                             <div class="row form-group-inner">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                   <label class="login2 pull-right pull-right-pro">Product</label>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-9 col-xs-12">
                                                   <select type="text" class="form-control" name="product" id="add_product">
                                                    <option>Select Product</option>
                                                      <?php foreach ($products as $key => $value) { ?>
                                                        <option value="<?php echo $value->id ?>"><?php echo $value->product_name ?></option>
                                                            
                                                      <?php
                                                      }
                                                      ?>
                                                   </select> 
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-12 my-1">
                                             <div class="row form-group-inner">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                   <label class="login2 pull-right pull-right-pro">Vareint</label>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-9 col-xs-12">
                                                   <select type="text" class="form-control" name="inventory" id="add_inventory">
                                                    <option>Select Vareint</option>
                                                      <?php foreach ($inventory as $key => $value) { ?>
                                                        <option value="<?php echo $value->id ?>"><?php echo $value->vareint ?></option>
                                                            
                                                      <?php
                                                      }
                                                      ?>
                                                   </select> 
                                                </div>
                                             </div>
                                          </div>

                                          <div class="col-md-12 my-1">
                                             <div class="row form-group-inner">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                   <label class="login2 pull-right pull-right-pro">Upload</label>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-9 col-xs-12">
                                                   <input type="file" name="stock" class="form-control" >
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

                            <div id="assign_modal" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static">
                              <div class="modal-dialog">
                                 <!-- Modal content-->
                                 <div class="modal-content">
                                    <form method="post" id="cat_select_form" action="<?php echo base_url() . 'Welcome/assign_stock_script'; ?>" enctype="multipart/form-data">
                                       <div class="modal-header text-center">
                                          <h4 class="modal-title mx-auto">Assign Stocks</h4>
                                       </div>
                                       <div class="modal-body">
                                          <div class="col-md-12 my-1">
                                             <div class="row form-group-inner">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                   <label class="login2 pull-right pull-right-pro">Retailer</label>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-9 col-xs-12">
                                                   <select type="text" class="form-control" name="retailer" id="add_retailer">
                                                    <option>Select Retailer</option>
                                                      <?php foreach ($retailers as $key => $value) { ?>
                                                        <option value="<?php echo $value->id ?>"><?php echo $value->retailer_name ?></option>
                                                            
                                                      <?php
                                                      }
                                                      ?>
                                                   </select> 
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-12 my-1 d-none">
                                             <div class="row form-group-inner">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                   <label class="login2 pull-right pull-right-pro">Product</label>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-9 col-xs-12">
                                                   <select type="text" class="form-control" name="product" id="add_product">
                                                    <option>Select Product</option>
                                                      <?php foreach ($products as $key => $value) { ?>
                                                        <option value="<?php echo $value->id ?>"><?php echo $value->product_name ?></option>
                                                            
                                                      <?php
                                                      }
                                                      ?>
                                                   </select> 
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-12 my-1 d-none">
                                             <div class="row form-group-inner">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                   <label class="login2 pull-right pull-right-pro">Vareint</label>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-9 col-xs-12">
                                                   <select type="text" class="form-control" name="inventory" id="add_inventory">
                                                    <option>Select Vareint</option>
                                                      <?php foreach ($inventory as $key => $value) { ?>
                                                        <option value="<?php echo $value->id ?>"><?php echo $value->vareint ?></option>
                                                            
                                                      <?php
                                                      }
                                                      ?>
                                                   </select> 
                                                </div>
                                             </div>
                                          </div>

                                          <div class="col-md-12 my-1">
                                             <div class="row form-group-inner">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                   <label class="login2 pull-right pull-right-pro">Upload</label>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-9 col-xs-12">
                                                   <input type="file" name="stock" class="form-control" >
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
                                    <form method="post" id="edit_inventory_form" action="<?php echo base_url() . 'Welcome/add_inventory_script/'; ?>">
                                       <div class="modal-header text-center">
                                          <h4 class="modal-title mx-auto">Edit Stock</h4>
                                       </div>
                                        <div class="modal-body">
                                          <div class="col-md-12 my-1">
                                             <div class="row form-group-inner">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                   <label class="login2 pull-right pull-right-pro">Product</label>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-9 col-xs-12">
                                                   <select type="text" class="form-control" name="product" id="add_product">
                                                    <option>Select Product</option>
                                                      <?php foreach ($products as $key => $value) { ?>
                                                        <option value="<?php echo $value->id ?>"><?php echo $value->product_name ?></option>
                                                            
                                                      <?php
                                                      }
                                                      ?>
                                                   </select> 
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-12 my-1">
                                             <div class="row form-group-inner">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                   <label class="login2 pull-right pull-right-pro">Vareint</label>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-9 col-xs-12">
                                                   <select type="text" class="form-control" name="inventory" id="add_inventory">
                                                    <option>Select Vareint</option>
                                                      <?php foreach ($inventory as $key => $value) { ?>
                                                        <option value="<?php echo $value->id ?>"><?php echo $value->vareint ?></option>
                                                            
                                                      <?php
                                                      }
                                                      ?>
                                                   </select> 
                                                </div>
                                             </div>
                                          </div>

                                          <div class="col-md-12 my-1">
                                             <div class="row form-group-inner">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                   <label class="login2 pull-right pull-right-pro">IMEI 1</label>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-9 col-xs-12">
                                                   <input type="text" name="imei1" class="form-control" >
                                                </div>
                                             </div>
                                          </div>

                                          <div class="col-md-12 my-1">
                                             <div class="row form-group-inner">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                   <label class="login2 pull-right pull-right-pro">IMEI 2</label>
                                                </div>
                                                <div class="col-lg-8 col-md-6 col-sm-9 col-xs-12">
                                                   <input type="text" name="imei2" class="form-control" >
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
        <script src="<?php echo base_url()?>assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- file-manager js -->
        <script src="<?php echo base_url()?>assets/javascript/pages/file-manager.init.js"></script>

        <script src="<?php echo base_url()?>assets/javascript/app.js"></script>
        <script type="text/javascript" src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
                <script type="text/javascript">
    $(document).ready(function(){  
        
      var dataTable = $('#mytable').DataTable({  
          "serverSide":true,  
          "order":[],  
          "ajax":{  
                url:"<?php echo base_url() . 'Welcome/fetch_stock'; ?>",  
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
     
       
            $("#edit_cat_select_form").attr('action',$(this).attr('data-submit'));

            $("#edit_cat_name_modal").attr('value',$(this).attr('data-name'));

            $("#edit_cat_id_modal").attr('value',$(this).attr('data-id'));
   
     });

  $("#mytable").on('click','#view_modal' ,function (e) {
   
            //$('#edit_cat').modal('show');
     
            var array = $(this).attr('data-image').split(',');
            console.log(array);
            $("#app").html('');
            if($(this).attr('data-image') !='' && array.length > 0){
            $(array).each(function(val){
               // 
                
                console.log(array[val]);
                test = '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-9" ><img class="zoom w-100" id="blah" style="height:90px" src="<?php echo base_url()?>assets/images/product/' + array[val] + ' " ></div>';
                $("#app").append(test);
            })
            }else{
               test = '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-21" ><p>Add some image to this product</p></div>';
                $("#app").append(test); 
            }
            //$("#blah").attr('src',$(this).attr('data-image'));

            //$("#edit_cat_name_modal").attr('value',$(this).attr('data-name'));

            //$("#edit_cat_id_modal").attr('value',$(this).attr('data-id'));
   
     });

$('#add_product').change(function() {
    // console.log('subcat trigger' + sd1);
    var product = $(this).val();
          $.ajax({
              url: "<?php echo base_url().'Welcome/get_inventory/'?>" + product,
              data: {product: product},
              method: 'POST',
              success: function(result){
                  $('#add_inventory').html(result);
              }
    });
    

        });
 });


        </script>

