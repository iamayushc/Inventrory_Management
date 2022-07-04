<?php $page = 'retailers';
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
          <h1 class="page-title"> Retailers </h1>
          <p class="text-muted"> All Retailers </p><!-- /title -->
        </header><!-- /.page-title-bar -->
        <!-- .page-section -->
        <div class="page-section">
          <!-- .card -->
          <div class="card card-fluid">
            <!-- .card-body -->
            <div class="card-body">
              <!-- .table -->
              <table class="table dt-responsive nowrap w-100" id="mytable">
                  <thead >
                      <tr>

                          <th class="align-middle select-checkbox">Sr No</th>
                          <th class="align-middle">User Name </th>
                          <th class="align-middle">Company Name </th>
                          <th class="align-middle">Mobile No </th>
                          <th class="align-middle">Email </th>
                          <th class="align-middle">Actions </th>

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

  <!-- /.wrapper -->
</main><!-- /.app-main -->

</div><!-- /.app -->
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

        <script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
                <script type="text/javascript">
    $(document).ready(function(){  

      function checkDelete(){
        return confirm('Are you sure?');
      }
        
      var dataTable = $('#mytable').DataTable({  
          "serverSide":true,  
          "order":[],  
          "ajax":{  
                url:"<?php echo base_url() . 'Welcome/fetch_retailer'; ?>",  
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
                     "targets":[0,5],  
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
 });


        </script>

