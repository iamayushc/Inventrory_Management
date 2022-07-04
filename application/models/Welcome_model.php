
<?php 
class Welcome_model extends CI_Model {
     public function product_datatables_query()  
     { 

          $table = "product_tbl as product";  
          $select_column = array("product.id","product.product_name","product.model_no","product.material_code");  
          $order_column = array(null,"product.product_name","product.model_no","product.material_code",null);
          

          $this->db->select($select_column);
          $this->db->from($table);

          if(isset($_POST["search"]["value"]) )  
          {  
               //$this->db->where('supplier',$this->session->userdata('supplier_id'));
               $this->db->group_start();
               $this->db->like("product_name", $_POST["search"]["value"]);
               $this->db->or_like("product.model_no", $_POST["search"]["value"]);
               $this->db->or_like("product.material_code", $_POST["search"]["value"]);
               $this->db->group_end();
          }  


          if(isset($_POST["order"]))  
          {  
               $this->db->order_by($order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
          }  
          else  
          {  
               $this->db->order_by('id', 'DESC');  
          }

     }

     function product_make_datatables(){  

          $this->product_datatables_query();  
          if($_POST["length"] != -1)  
          {  
               $this->db->limit($_POST['length'], $_POST['start']);  
          }  
          $query = $this->db->get();  
          return $query->result();  
     }  
     function get_product_filtered_data(){  

          $this->product_datatables_query();  
          $query = $this->db->get();  
          return $query->num_rows();  
     }       
     function get_all_product_data(){  

          $this->db->select("*");  
          $this->db->from("product_tbl");
          return $this->db->count_all_results();
     }

     public function stock_datatables_query()  
     { 

          $table = "stock";  
          $select_column = array("stock.*","product.product_name","product.model_no","product.material_code","in.vareint","in.color","stock.status","retailer.retailer_name");
          $order_column = array(null,"product.product_name","product.model_no","product.material_code","in.vareint","in.color","stock.status","retailer.retailer_name",null);
          

          $this->db->select($select_column);
          $this->db->from($table);
          if($this->session->userdata('user_type') != 'admin'){
             $this->db->where('stock.retailer',$this->session->userdata('user_id'));  
          } 
          $this->db->where('stock.status !=','ordered');
          $this->db->join('product_tbl as product','product.id=stock.product_id');
          $this->db->join('inventory as in','in.id=stock.inventory');
          $this->db->join('retailer_tbl as retailer','retailer.id=stock.retailer','left');

          if(isset($_POST["search"]["value"]) )  
          {  
               //$this->db->where('supplier',$this->session->userdata('supplier_id'));
               $this->db->group_start();
               $this->db->like("product.product_name", $_POST["search"]["value"]);
               $this->db->or_like("product.model_no", $_POST["search"]["value"]);
               $this->db->or_like("product.material_code", $_POST["search"]["value"]);
               $this->db->or_like("in.vareint", $_POST["search"]["value"]);
               $this->db->or_like("in.color", $_POST["search"]["value"]);
               $this->db->or_like("stock.imei1", $_POST["search"]["value"]);
               $this->db->or_like("stock.imei2", $_POST["search"]["value"]);
               $this->db->or_like("retailer.retailer_name", $_POST["search"]["value"]);
               $this->db->or_like("stock.status", str_replace(' ','_',$_POST["search"]["value"]));
               $this->db->group_end();
          }  


          if(isset($_POST["order"]))  
          {  
               $this->db->order_by($order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
          }  
          else  
          {  
               $this->db->order_by('id', 'DESC');  
          }

     }

     function stock_make_datatables(){  

          $this->stock_datatables_query();  
          if($_POST["length"] != -1)  
          {  
               $this->db->limit($_POST['length'], $_POST['start']);  
          }  
          $query = $this->db->get();  
          return $query->result();  
     }  
     function get_stock_filtered_data(){  

          $this->stock_datatables_query();  
          $query = $this->db->get();  
          return $query->num_rows();  
     }       
     function get_all_stock_data(){  

          $table = "stock";  
          $select_column = array("stock.id","product.product_name","product.model_no","product.material_code","in.vareint","in.color","stock.status","retailer.retailer_name");      

          $this->db->select($select_column);
          $this->db->from($table);
          if($this->session->userdata('user_type') != 'admin'){
             $this->db->where('stock.retailer',$this->session->userdata('user_id'));  
          } 
          $this->db->where('stock.status !=','ordered');
          $this->db->join('product_tbl as product','product.id=stock.product_id');
          $this->db->join('inventory as in','in.id=stock.inventory');
          $this->db->join('retailer_tbl as retailer','retailer.id=stock.retailer','left');
          return $this->db->count_all_results();
     }

     public function order_datatables_query()  
     { 

          $table = "stock as order";  
          $select_column = array("order.*","product.product_name","product.model_no","product.material_code","in.vareint","in.color","order.status","retailer.retailer_name");
          $order_column = array(null,"product.product_name","product.model_no","product.material_code","in.vareint","in.color","order.status","retailer.retailer_name",null);
          

          $this->db->select($select_column);
          $this->db->from($table);
          if($this->session->userdata('user_type') != 'admin'){
             $this->db->where('order.retailer',$this->session->userdata('user_id'));  
          } 
          $this->db->where('order.status','ordered');
          $this->db->join('product_tbl as product','product.id=order.product_id');
          $this->db->join('inventory as in','in.id=order.inventory');
          $this->db->join('retailer_tbl as retailer','retailer.id=order.retailer','left');

          if(isset($_POST["search"]["value"]) )  
          {  
               //$this->db->where('supplier',$this->session->userdata('supplier_id'));
               $this->db->group_start();
               $this->db->like("product.product_name", $_POST["search"]["value"]);
               $this->db->or_like("product.model_no", $_POST["search"]["value"]);
               $this->db->or_like("product.material_code", $_POST["search"]["value"]);
               $this->db->or_like("in.vareint", $_POST["search"]["value"]);
               $this->db->or_like("in.color", $_POST["search"]["value"]);
               $this->db->or_like("order.imei1", $_POST["search"]["value"]);
               $this->db->or_like("order.imei2", $_POST["search"]["value"]);
               $this->db->group_end();
          }  


          if(isset($_POST["order"]))  
          {  
               $this->db->order_by($order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
          }  
          else  
          {  
               $this->db->order_by('id', 'DESC');  
          }

     }

     function order_make_datatables(){  

          $this->order_datatables_query();  
          if($_POST["length"] != -1)  
          {  
               $this->db->limit($_POST['length'], $_POST['start']);  
          }  
          $query = $this->db->get();  
          return $query->result();  
     }  
     function get_order_filtered_data(){  

          $this->order_datatables_query();  
          $query = $this->db->get();  
          return $query->num_rows();  
     }       
     function get_all_order_data(){  

          $table = "stock as order";  
          $select_column = array("order.id","product.product_name","product.model_no","product.material_code","in.vareint","in.color","order.status","retailer.retailer_name");      

          $this->db->select($select_column);
          $this->db->from($table);
          if($this->session->userdata('user_type') != 'admin'){
             $this->db->where('order.retailer',$this->session->userdata('user_id'));  
          }
          $this->db->where('order.status','ordered');
          $this->db->join('product_tbl as product','product.id=order.product_id');
          $this->db->join('inventory as in','in.id=order.inventory');
          $this->db->join('retailer_tbl as retailer','retailer.id=order.retailer','left');
          return $this->db->count_all_results();
     }


     public function inventory_datatables_query($id)  
     { 

          $table = "inventory"; 
          // $qty = "(SELECT count(id) as qty from stock where inventory = inventory.id and STATUS = 'assign' and retailer = ".$this->session->userdata('user_id').")";
          if($this->session->userdata('user_type') == 'retailer'){
               $qty = "(SELECT count(id) as qty from stock where inventory = inventory.id and STATUS = 'assign' and retailer = ".$this->session->userdata('user_id').")";    
          }else{
               $qty = "(SELECT count(id) as qty from stock where inventory = inventory.id and STATUS = 'not_assign')";
          }
          
          $select_column = array("inventory.id","inventory.product_id","inventory.vareint","inventory.color",$qty." as qty");  
          $order_column = array(null,"inventory.id","inventory.vareint","inventory.color","inventory.qty",null);
          

          $this->db->select($select_column);
          $this->db->from($table);
          $this->db->where('product_id',$id);

          if(isset($_POST["search"]["value"]) )  
          {  
               //$this->db->where('supplier',$this->session->userdata('supplier_id'));
               $this->db->group_start();
               $this->db->or_like("inventory.vareint", $_POST["search"]["value"]);
               $this->db->or_like("inventory.color", $_POST["search"]["value"]);
               $this->db->or_like($qty,$_POST["search"]["value"]);
               $this->db->group_end();
          }  


          if(isset($_POST["order"]))  
          {  
               $this->db->order_by($order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
          }  
          else  
          {  
               $this->db->order_by('id', 'DESC');  
          }

     }

     function inventory_make_datatables($id){  

          $this->inventory_datatables_query($id);  
          if($_POST["length"] != -1)  
          {  
               $this->db->limit($_POST['length'], $_POST['start']);  
          }  
          $query = $this->db->get();  
          return $query->result();  
     }  
     function get_inventory_filtered_data($id){  

          $this->inventory_datatables_query($id);  
          $query = $this->db->get();  
          return $query->num_rows();  
     }       
     function get_all_inventory_data($id){  

          $this->db->select("*");  
          $this->db->from("inventory");
          $this->db->where('product_id',$id);
          return $this->db->count_all_results();
     }

     public function retailer_datatables_query()  
     { 

          $table = "retailer_tbl as retailer";  
          $select_column = array("retailer.id","retailer.retailer_name","retailer.mobile_no","retailer.company_name","retailer.username","retailer.email","retailer.status","retailer.created_date");  
          $order_column = array(null,"retailer.id","retailer.retailer_name","retailer.mobile_no","retailer.company_name","retailer.username","retailer.email","retailer.status","retailer.created_date",null);
          

          $this->db->select($select_column);
          $this->db->from($table);

          if(isset($_POST["search"]["value"]) )  
          {  
               //$this->db->where('supplier',$this->session->userdata('supplier_id'));
               $this->db->group_start();
               $this->db->like("retailer.username", $_POST["search"]["value"]);
               $this->db->or_like("retailer.mobile_no", $_POST["search"]["value"]);
               $this->db->or_like("retailer.company_name", $_POST["search"]["value"]);
               $this->db->or_like("retailer.email", $_POST["search"]["value"]);
               $this->db->group_end();
          }  


          if(isset($_POST["order"]))  
          {  
               $this->db->order_by($order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
          }  
          else  
          {  
               $this->db->order_by('id', 'DESC');  
          }

     }

     function retailer_make_datatables(){  

          $this->retailer_datatables_query();  
          if($_POST["length"] != -1)  
          {  
               $this->db->limit($_POST['length'], $_POST['start']);  
          }  
          $query = $this->db->get();  
          return $query->result();  
     }  
     function get_retailer_filtered_data(){  

          $this->retailer_datatables_query();  
          $query = $this->db->get();  
          return $query->num_rows();  
     }       
     function get_all_retailer_data(){  

          $this->db->select("*");  
          $this->db->from("retailer_tbl");
          return $this->db->count_all_results();
     }

}
?>