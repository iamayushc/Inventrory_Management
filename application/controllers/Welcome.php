<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index/welcome
	 *	- or -
	 * 		http://example.com/index/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() 
    {
        parent::__construct();
        $this->load->database();	
        date_default_timezone_set("Asia/Kolkata");
        // $data['menus'] = $this->db->where('parent','0')->get('menus')->result();
        $this->if_logged_in();
    }
	public function index()
	{
		$this->load->view('index');
	}

    public function if_logged_in()
    {
        if($this->session->userdata('logged') != true){
            redirect('auth/login');
        }
        // print_r($this->session->userdata());exit();
    }

    public function register()
    {
        $this->load->view('register');
    }

    public function register_script()
    {
        $userdata = $this->input->post();
        // print_r($userdata);exit();

        $this->db->insert('retailer',$userdata);
        // $this->load->view('register');
    }

	public function add_product()
	{
		$this->load->view('add_product');
	}

	public function add_product_script()
	{
		$userdata = $this->input->post();

		$data = array();
		$data['product_name'] = $userdata['pname'];
		$data['model_no'] = $userdata['mno'];
		// $data['imei_no1'] = $userdata['imei1'];
		// $data['imei_no2'] = $userdata['imei2'];
		$data['material_code'] = $userdata['mcode'];

		// print_r($data);
		$this->db->insert('product_tbl',$data);
		redirect('Welcome/products');

	}

	public function products()
	{
		$this->load->view('products');
	}

    /*----------data fetching section Start Here-------*/
    public function fetch_product(){  

        $this->load->model("Welcome_model");  
        $fetch_data = $this->Welcome_model->product_make_datatables();  
        $data = array();  
        $i=1;
        //echo $this->db->last_query();
        //exit();
        foreach($fetch_data as $row)  
        {  
            $sub_array = array();  
            $sub_array[] = $i++;





            $sub_array[] = $row->product_name;
            $sub_array[] = $row->model_no;
            $sub_array[] = $row->material_code;



            $action = '';

            $this->db->like('buttons.rights',$this->session->userdata('user_type'));
            $right_of_btn = $this->db->select('buttons.*')->where('menus.link','products')->where('buttons.link','inventory')->join('menus','menus.id=buttons.menu_id')->get('buttons')->row();

            // print_r($right_of_btn);exit();
            if(isset($right_of_btn) AND $right_of_btn->id != ''){ 
                $action .= '<a class="btn btn-sm btn-icon btn-secondary" href="'.base_url().'Welcome/inventory/'.$row->id.'"><i class="fa fa-eye"></i></a>';
            }

            $this->db->like('buttons.rights',$this->session->userdata('user_type'));
            $right_of_btn = $this->db->select('buttons.*')->where('menus.link','products')->where('buttons.link','edit_product')->join('menus','menus.id=buttons.menu_id')->get('buttons')->row();

            if(isset($right_of_btn) AND $right_of_btn->id != ''){ 
                     $action .= '<a class="btn btn-sm btn-icon btn-secondary" href="'.base_url().'Welcome/edit_product/'.$row->id.'"><i class="fa fa-pencil-alt"></i></a>';
            }

            $this->db->like('buttons.rights',$this->session->userdata('user_type'));
            $right_of_btn = $this->db->select('buttons.*')->where('menus.link','products')->where('buttons.link','delete_product_script')->join('menus','menus.id=buttons.menu_id')->get('buttons')->row();

            if(isset($right_of_btn) AND $right_of_btn->id != ''){ 
                $action .= '<a class="btn btn-sm btn-icon btn-secondary" href="'.base_url().'Welcome/delete_product_script/'.$row->id.'" onclick="return checkDelete()"><i class="far fa-trash-alt"></i></a>';
            }

            $sub_array[] = $action;

            $data[] = $sub_array;  
        }  
        $output = array(  
            "draw"                    =>     intval($_POST["draw"]),  
            "recordsTotal"          =>      $this->Welcome_model->get_all_product_data(),  
            "recordsFiltered"     =>     $this->Welcome_model->get_product_filtered_data(),  
            "data"                    =>     $data  
        );  
        echo json_encode($output);  
    }
    /*----------data fetching section End Here-------*/


	public function edit_product($id)
	{
		$data = $this->db->where('id',$id)->get('product_tbl')->row();
		$this->load->view('edit_product',$data);
	}

	public function edit_product_script($id)
	{
		$userdata = $this->input->post();

		$data = array();
		$data['product_name'] = $userdata['pname'];
		$data['model_no'] = $userdata['mno'];
		$data['imei_no1'] = $userdata['imei1'];
		$data['imei_no2'] = $userdata['imei2'];
		$data['material_code'] = $userdata['mcode'];

		// print_r($data);
		$this->db->where('id',$id)->update('product_tbl',$data);
		redirect('Welcome/products');

	}

	public function delete_product_script($id)
	{
		$this->db->where('id',$id)->delete('product_tbl');
		redirect('Welcome/products');
	}
	public function get_inventory($pro_id){

        $this->db->where('product_id',$pro_id);
        $this->db->order_by('vareint','asc');
        $data = $this->db->get('inventory');
        if($data->num_rows() > 0){
            $sel ='<option>Select Vareint</option>';

            foreach($data->result() as $val){
                $sel = $sel.' <option value="'.$val->id.'">'.$val->vareint.'</option>';
            }
        }else{
            $sel ='<option>Select Vareint</option>';
        }
        echo $sel;
    }

     public function orders()
     {
          $data['products'] = $this->db->get('product_tbl')->result();
          // $data['inventory'] = $this->db->get('inventory')->result();
          $this->load->view('orders',$data);
     }

    /*----------data fetching section Start Here-------*/
    public function fetch_order(){  

        $this->load->model("Welcome_model");  
        $fetch_data = $this->Welcome_model->order_make_datatables();  
        $data = array();  
        $i=1;
        //echo $this->db->last_query();
        //exit();
        foreach($fetch_data as $row)  
        {  
            $sub_array = array();  
            $sub_array[] = $i++;





            $sub_array[] = $row->product_name;
            $sub_array[] = $row->model_no;
            $sub_array[] = $row->material_code;
            $sub_array[] = $row->vareint;
            $sub_array[] = $row->color;
            $sub_array[] = $row->imei1;
            $sub_array[] = $row->imei2;
            $sub_array[] = ($row->status == 'not_assign')?'<span class="text-success">In order</span>':'<span class="text-danger">Assigned To</span>';
            $sub_array[] = $row->retailer_name;
            




            // $sub_array[] = '<a href="#" data-toggle="modal" data-target="#edit_cat" data-id = "'.$row->id.'"  id="edit_modal"  class="btn btn-sm btn-icon btn-secondary"  data-submit="'.base_url().'Welcome/edit_inventory_script/'.$row->id.'" data-vareint="'.$row->vareint.'" data-color="'.$row->color.'" ><i class="fa fa-pencil-alt"></i></a><a class="btn btn-sm btn-icon btn-secondary" href="'.base_url().'Welcome/delete_inventory_script/'.$row->id.'" onclick="return checkDelete()"><i class="far fa-trash-alt"></i></a><a href="#" data-toggle="modal" data-target="#upload_modal" data-id = "'.$row->id.'"  id="upload_modal_btn"  class="btn btn-sm btn-icon btn-secondary"  data-submit="'.base_url().'Welcome/add_order_script/'.$row->id.'" data-id="'.$row->id.'" ><i class="fa fa-upload"></i></a>';

            $data[] = $sub_array;  
        }  
        $output = array(  
            "draw"                    =>     intval($_POST["draw"]),  
            "recordsTotal"          =>      $this->Welcome_model->get_all_order_data(),  
            "recordsFiltered"     =>     $this->Welcome_model->get_order_filtered_data(),  
            "data"                    =>     $data  
        );  
        echo json_encode($output);  
    }
    /*----------data fetching section End Here-------*/

	public function stocks()
	{
		$data['products'] = $this->db->get('product_tbl')->result();
		$data['retailers'] = $this->db->get('retailer_tbl')->result();
		$this->load->view('stocks',$data);
	}

    /*----------data fetching section Start Here-------*/
    public function fetch_stock(){  

        $this->load->model("Welcome_model");  
        $fetch_data = $this->Welcome_model->stock_make_datatables();  
        $data = array();  
        $i=1;
        //echo $this->db->last_query();
        //exit();
        foreach($fetch_data as $row)  
        {  
            $sub_array = array();  
            $sub_array[] = $i++;





            $sub_array[] = $row->product_name;
            $sub_array[] = $row->model_no;
            $sub_array[] = $row->material_code;
            $sub_array[] = $row->vareint;
            $sub_array[] = $row->color;
            $sub_array[] = $row->imei1;
            $sub_array[] = $row->imei2;
            $sub_array[] = ($row->status == 'not_assign')?'<span class="text-success">In Stock</span>':'<span class="text-danger">Assigned To</span>';
            $sub_array[] = $row->retailer_name;
            




            // $sub_array[] = '<a href="#" data-toggle="modal" data-target="#edit_cat" data-id = "'.$row->id.'"  id="edit_modal"  class="btn btn-sm btn-icon btn-secondary"  data-submit="'.base_url().'Welcome/edit_inventory_script/'.$row->id.'" data-vareint="'.$row->vareint.'" data-color="'.$row->color.'" ><i class="fa fa-pencil-alt"></i></a><a class="btn btn-sm btn-icon btn-secondary" href="'.base_url().'Welcome/delete_inventory_script/'.$row->id.'" onclick="return checkDelete()"><i class="far fa-trash-alt"></i></a><a href="#" data-toggle="modal" data-target="#upload_modal" data-id = "'.$row->id.'"  id="upload_modal_btn"  class="btn btn-sm btn-icon btn-secondary"  data-submit="'.base_url().'Welcome/add_stock_script/'.$row->id.'" data-id="'.$row->id.'" ><i class="fa fa-upload"></i></a>';

            $data[] = $sub_array;  
        }  
        $output = array(  
            "draw"                    =>     intval($_POST["draw"]),  
            "recordsTotal"          =>      $this->Welcome_model->get_all_stock_data(),  
            "recordsFiltered"     =>     $this->Welcome_model->get_stock_filtered_data(),  
            "data"                    =>     $data  
        );  
        echo json_encode($output);  
    }
    /*----------data fetching section End Here-------*/


	public function edit_stock($id)
	{
		$data = $this->db->where('id',$id)->get('stock_tbl')->row();
		$this->load->view('edit_stock',$data);
	}

	public function edit_stock_script($id)
	{
		$userdata = $this->input->post();

		$data = array();
		$data['stock_name'] = $userdata['pname'];
		$data['model_no'] = $userdata['mno'];
		$data['imei_no1'] = $userdata['imei1'];
		$data['imei_no2'] = $userdata['imei2'];
		$data['material_code'] = $userdata['mcode'];

		// print_r($data);
		$this->db->where('id',$id)->update('stock_tbl',$data);
		redirect('Welcome/stocks');

	}

	public function delete_stock_script($id)
	{
		$this->db->where('id',$id)->delete('stock_tbl');
		redirect('Welcome/stocks');
	}
	// public function add_stock()
	// {
	// 	$this->load->view('add_stock');
	// }

	public function add_stock_script($id=0,$pro_id=0)
	{
		$userdata = $this->input->post();
		if(isset($userdata['product'])){
			$id = $userdata['inventory'];
			$pro_id = $userdata['product'];
		}
		if(isset($_FILES['stock']['name']) && $_FILES['stock']['name']!='')
        {               
            //create folder if not exists
             $config['upload_path']          = 'uploads/';
            $config['allowed_types']        = '*';
            $config['encrypt_name'] = FALSE;
 
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('stock'))
            {
                   echo  $error = $this->upload->display_errors(); die();
            }
            else
            {
                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];
                //Load library
                error_reporting(0);
                require_once 'application/third_party/phpexcel/PHPExcel.php';
                require_once 'application/third_party/phpexcel/PHPExcel/IOFactory.php';

                 // print_r(glob("application/third_party"));
                // exit();
                $objPHPExcel = new PHPExcel(); 
                $fileFullPath = "uploads/".$file_name;
                $inputFileType = PHPExcel_IOFactory::identify($fileFullPath);

                // Read the file
                $objReader = PHPExcel_IOFactory::createReader($inputFileType);

                $objPHPExcel = $objReader->load($fileFullPath);
                 // echo "<pre>";print_r($objPHPExcel); die();
                $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
                $arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet
               	// echo $arrayCount;exit;
                if($arrayCount>1)
                {
                  	for($i=2;$i<=$arrayCount;$i++)
                  	{     

                  		$product_id = $this->db->where('product_name',$allDataInSheet[$i]["E"])->get('product_tbl')->row()->id;
                  		$retailer_id = $this->db->where('retailer_name',$allDataInSheet[$i]["H"])->get('retailer_tbl')->row()->id;
                  		$inventory = $this->db->where('id',$id)->get('inventory')->row();
                           
                         $insData[] = array(

                            'imei1' => $allDataInSheet[$i]["A"],
                            'imei2' => $allDataInSheet[$i]["B"],
                            'product_id' => $pro_id,
                            'inventory' => $id,
                            'created_date' => date('Y-m-d H:i:s'),
                            
                        );
                   	}

                  //	 echo "<pre>"; print_r($insData);exit();

                    //insert actions
                       if(isset($insData) && !empty($insData))
                       {
                            $this->db->insert_batch('Stock', $insData); 
                            if($this->db->affected_rows() > 0)
                            {
                            	$qty = intval($inventory->qty) + intval($this->db->affected_rows());
                            	
                                //$this->session->set_flashdata('success', 'Data Added Successfully...');
                                $this->db->where('id',$id)->set('qty',$qty)->update('inventory');
                                echo "Successfully";
                                // redirect('Welcome/inventory/'.$pro_id);
                            }
                            else
                            {
                                //$this->session->set_flashdata('error', 'Oops! Something went Wrong.');
                                echo "failed";
                                // redirect('Welcome/inventory/'.$pro_id);
                            }
                       }
                    
                }
                else
                {
                   // $this->session->set_flashdata('error', 'Oops! Something went Wrong.');
                    echo "failed";
                    // redirect('Welcome/inventory/'.$id);
                }
                if(isset($userdata['product'])){
					redirect('Welcome/stocks');
				}else{
					redirect('Welcome/inventory/'.$pro_id);
				}
                
            }
        }

	}

    public function assign_stock_script()
    {

        $userdata = $this->input->post();
        if(isset($_FILES['stock']['name']) && $_FILES['stock']['name']!='')
        {               
            //create folder if not exists
             $config['upload_path']          = 'uploads/';
            $config['allowed_types']        = '*';
            $config['encrypt_name'] = FALSE;
 
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('stock'))
            {
                   echo  $error = $this->upload->display_errors(); die();
            }
            else
            {
                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];
                //Load library
                error_reporting(0);
                require_once 'application/third_party/phpexcel/PHPExcel.php';
                require_once 'application/third_party/phpexcel/PHPExcel/IOFactory.php';

                 // print_r(glob("application/third_party"));
                // exit();
                $objPHPExcel = new PHPExcel(); 
                $fileFullPath = "uploads/".$file_name;
                $inputFileType = PHPExcel_IOFactory::identify($fileFullPath);

                // Read the file
                $objReader = PHPExcel_IOFactory::createReader($inputFileType);

                $objPHPExcel = $objReader->load($fileFullPath);
                 // echo "<pre>";print_r($objPHPExcel); die();
                $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
                $arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet
                // echo $arrayCount;exit;
                if($arrayCount>1)
                {
                  for($i=2;$i<=$arrayCount;$i++)
                    {     
                        $product_id = $this->db->where('product_name',$allDataInSheet[$i]["E"])->get('product_tbl')->row()->id;
                        $retailer_id = $this->db->where('retailer_name',$allDataInSheet[$i]["H"])->get('retailer_tbl')->row()->id;
                        // echo $this->db->last_query();
                           
                         $insData = array(
                            'status' => 'assign',
                            'retailer' => $userdata['retailer'],
                            'outbound_time' => date('Y-m-d H:i:s'),

                                    );
                         $this->db->where('imei1',$allDataInSheet[$i]["A"])->where('status','not_assign')->update('stock', $insData);
                      }




                   // echo "<pre>"; print_r($insData);exit();
                        // echo $this->db->last_query();

                    //insert actions
                       if(isset($insData) && !empty($insData))
                       {

                            //$this->db->where('ime1',$allDataInSheet[$i]["A"])->update('village_tbl_new', $insData); 
                            // $this->db->update_batch('Stock',$updateArray, 'imei1');
                            
                                //$this->session->set_flashdata('success', 'Data Added Successfully...');
                                echo "Successfully";
                                // redirect('Welcome/orders');
                            
                            
                       }
                    
                }
                else
                {
                    //$this->session->set_flashdata('error', 'Oops! Something went Wrong.');
                    echo "failed";
                    // redirect('Welcome/orders');
                }
                
            }
        }
        else
        {
            //$this->session->set_flashdata('error', 'Oops! Something went Wrong.');

            // redirect('Welcome/orders');
        }

    }
	public function add_inventory_script($id)
	{
		$userdata = $this->input->post();

		$data = array();
		$data['vareint'] = $userdata['vareint'];
		$data['color'] = $userdata['color'];
		$data['product_id'] = $id;
		$data['created_date'] = date('Y-m-d H:i:s');

		// print_r($data);
		$this->db->insert('inventory',$data);
		redirect('Welcome/inventory/'.$id);

	}

	public function inventory($id)
	{
		$data = $this->db->where('id',$id)->get('product_tbl')->row();	
		$this->load->view('inventory',$data);
	}

    /*----------data fetching section Start Here-------*/
    public function fetch_inventory($id){  

        $this->load->model("Welcome_model");  
        $fetch_data = $this->Welcome_model->inventory_make_datatables($id);  
        $data = array();  
        $i=1;
        // echo $this->db->last_query();
        // exit();
        foreach($fetch_data as $row)  
        {  
            $sub_array = array();  
            $sub_array[] = $i++;



            // $qty = $this->db->select('sum(id) as all_qty')->where('inventory',$row->id)->get('stock')->row()->all_qty;

            // $this->db->last_query();exit();
            $sub_array[] = $row->vareint;
            $sub_array[] = $row->color;
            $sub_array[] = $row->qty;

            $action = '';

            

            $this->db->like('buttons.rights',$this->session->userdata('user_type'));
            $right_of_btn = $this->db->select('buttons.*')->where('menus.link','products')->where('buttons.link','edit_inventory_script')->join('menus','menus.id=buttons.menu_id')->get('buttons')->row();

            if(isset($right_of_btn) AND $right_of_btn->id != ''){ 
                     $action .= '<a href="#" data-toggle="modal" data-target="#edit_cat" data-id = "'.$row->id.'"  id="edit_modal"  class="btn btn-sm btn-icon btn-secondary"  data-submit="'.base_url().'Welcome/edit_inventory_script/'.$row->id.'/'.$row->product_id.'" data-vareint="'.$row->vareint.'" data-color="'.$row->color.'" ><i class="fa fa-pencil-alt"></i></a>';
            }

            $this->db->like('buttons.rights',$this->session->userdata('user_type'));
            $right_of_btn = $this->db->select('buttons.*')->where('menus.link','products')->where('buttons.link','delete_inventory_script')->join('menus','menus.id=buttons.menu_id')->get('buttons')->row();

            if(isset($right_of_btn) AND $right_of_btn->id != ''){ 
                $action .= '<a class="btn btn-sm btn-icon btn-secondary" href="'.base_url().'Welcome/delete_inventory_script/'.$row->id.'/'.$row->product_id.'" onclick="return checkDelete()"><i class="far fa-trash-alt"></i></a>';
            }

            $this->db->like('buttons.rights',$this->session->userdata('user_type'));
            $right_of_btn = $this->db->select('buttons.*')->where('menus.link','products')->where('buttons.link','add_stock_script')->join('menus','menus.id=buttons.menu_id')->get('buttons')->row();

            if(isset($right_of_btn) AND $right_of_btn->id != ''){ 
                $action .= '<a href="#" data-toggle="modal" data-target="#upload_modal" data-id = "'.$row->id.'"  id="upload_modal_btn"  class="btn btn-sm btn-icon btn-secondary"  data-submit="'.base_url().'Welcome/add_stock_script/'.$row->id.'/'.$row->product_id.'" data-id="'.$row->id.'" ><i class="fa fa-upload"></i></a>';
            }

            $sub_array[] = $action;


            $data[] = $sub_array;  
        }  
        $output = array(  
            "draw"                    =>     intval($_POST["draw"]),  
            "recordsTotal"          =>      $this->Welcome_model->get_all_inventory_data($id),  
            "recordsFiltered"     =>     $this->Welcome_model->get_inventory_filtered_data($id),  
            "data"                    =>     $data  
        );  
        echo json_encode($output);  
    }
    /*----------data fetching section End Here-------*/




	public function edit_inventory_script($id,$pro_id)
	{
		$userdata = $this->input->post();

		$data = array();
		$data['vareint'] = $userdata['vareint'];
		$data['color'] = $userdata['color'];
		// $data['product_id'] = $id;
		$data['modified_date'] = date('Y-m-d H:i:s');

		// print_r($data);exit();
		$this->db->where('id',$id)->update('inventory',$data);
		redirect('Welcome/inventory/'.$pro_id);

	}

	public function delete_inventory_script($id,$pro_id)
	{
		$this->db->where('id',$id)->delete('inventory');
		redirect('Welcome/inventory/'.$pro_id);
	}
	public function add_retailer()
	{
		$this->load->view('add_retailer');
	}

	public function add_retailer_script()
	{
		$userdata = $this->input->post();

		// print_r($userdata);die();

		$data['retailer_name'] = $userdata['rname'];
		$data['company_name'] = $userdata['cname'];
		$data['username'] = $userdata['uname'];
		$data['password'] = $userdata['password'];
		$data['mobile_no'] = $userdata['mno'];
		$data['email'] = $userdata['email'];
		$data['created_date'] = date('Y-m-d H:i:s');
		// print_r($data);
		$query = $this->db->where('username',$data['username'])->get('retailer_tbl');
		if($query->num_rows() > 0){
			echo 'Username Already Exist';
		}else{
			if($this->db->insert('retailer_tbl',$data)){
				echo 'Data inserted Successfully';
			}else{
				echo 'Oops! Something went Wrong';
			}
		}
		
		redirect('Welcome/retailers');



	}

	public function retailers()
	{
		$this->load->view('retailers');
	}
    /*----------data fetching section Start Here-------*/

    public function fetch_retailer(){  

        $this->load->model("Welcome_model");  
        $fetch_data = $this->Welcome_model->retailer_make_datatables();  
        $data = array();  
        $i=1;
        //echo $this->db->last_query();
        //exit();
        foreach($fetch_data as $row)  
        {  
            $sub_array = array();  
            $sub_array[] = $i++;





            $sub_array[] = $row->username;
            $sub_array[] = $row->company_name;
            $sub_array[] = $row->mobile_no;
            $sub_array[] = $row->email;

            $action = '';

            

            $this->db->like('buttons.rights',$this->session->userdata('user_type'));
            $right_of_btn = $this->db->select('buttons.*')->where('menus.link','retailers')->where('buttons.link','edit_retailer')->join('menus','menus.id=buttons.menu_id')->get('buttons')->row();

            if(isset($right_of_btn) AND $right_of_btn->id != ''){ 
                     $action .= '<a class="btn btn-sm btn-icon btn-secondary" href="'.base_url().'Welcome/edit_retailer/'.$row->id.'"><i class="fa fa-pencil-alt"></i></a>';
            }

            $this->db->like('buttons.rights',$this->session->userdata('user_type'));
            $right_of_btn = $this->db->select('buttons.*')->where('menus.link','retailers')->where('buttons.link','delete_retailer_script')->join('menus','menus.id=buttons.menu_id')->get('buttons')->row();

            if(isset($right_of_btn) AND $right_of_btn->id != ''){ 
                $action .= '<a class="btn btn-sm btn-icon btn-secondary" href="'.base_url().'Welcome/delete_retailer_script/'.$row->id.'" onclick="return checkDelete()"><i class="far fa-trash-alt"></i></a>';
            }

            $sub_array[] = $action;

            

            $data[] = $sub_array;  
        }  
        $output = array(  
            "draw"                    =>     intval($_POST["draw"]),  
            "recordsTotal"          =>      $this->Welcome_model->get_all_retailer_data(),  
            "recordsFiltered"     =>     $this->Welcome_model->get_retailer_filtered_data(),  
            "data"                    =>     $data  
        );  
        echo json_encode($output);  
    }
    /*----------data fetching section End Here-------*/

	public function edit_retailer($id)
	{
		$data = $this->db->where('id',$id)->get('retailer_tbl')->row();
		$this->load->view('edit_retailer',$data);
	}

	public function edit_retailer_script($id)
	{
		$userdata = $this->input->post();

		// print_r($userdata);die();

		$data = array();
		$data['retailer_name'] = $userdata['rname'];
		$data['mobile_no'] = $userdata['mno'];
		$data['company_name'] = $userdata['cname'];
		$data['username'] = $userdata['uname'];
		$data['password'] = $userdata['password'];
		$data['email'] = $userdata['email'];
		$data['modified_date'] = date('Y-m-d H:i:s');
		// print_r($data);
		$query = $this->db->where('username',$data['username'])->where('id!=',$id)->get('retailer_tbl');
		if($query->num_rows() > 0){
			echo 'Username Already Exist';
		}else{
			if($this->db->where('id',$id)->update('retailer_tbl',$data)){
				echo 'Data Updated Successfully';
			}else{
				echo 'Oops! Something went Wrong';
			}
		}

		// redirect('Welcome/retailers');

	}
	public function delete_retailer_script($id)
	{
		$this->db->where('id',$id)->delete('retailer_tbl');
		redirect('Welcome/retailers');
	}
	public function add_orders()
	{
		$this->load->view('add_orders');
	}

	public function add_orders_script()
	{

        if(isset($_FILES['order']['name']) && $_FILES['order']['name']!='')
        {               
            //create folder if not exists
             $config['upload_path']          = 'uploads/';
            $config['allowed_types']        = '*';
            $config['encrypt_name'] = FALSE;
 
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('order'))
            {
                   echo  $error = $this->upload->display_errors(); die();
            }
            else
            {
                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];
                //Load library
                error_reporting(0);
                require_once 'application/third_party/phpexcel/PHPExcel.php';
                require_once 'application/third_party/phpexcel/PHPExcel/IOFactory.php';

                 // print_r(glob("application/third_party"));
                // exit();
                $objPHPExcel = new PHPExcel(); 
                $fileFullPath = "uploads/".$file_name;
                $inputFileType = PHPExcel_IOFactory::identify($fileFullPath);

                // Read the file
                $objReader = PHPExcel_IOFactory::createReader($inputFileType);

                $objPHPExcel = $objReader->load($fileFullPath);
                 // echo "<pre>";print_r($objPHPExcel); die();
                $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
                $arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet
               	// echo $arrayCount;exit;
                if($arrayCount>1)
                {
                  for($i=2;$i<=$arrayCount;$i++)
                    {     
                    	$product_id = $this->db->where('product_name',$allDataInSheet[$i]["E"])->get('product_tbl')->row()->id;
                  		$retailer_id = $this->db->where('retailer_name',$allDataInSheet[$i]["H"])->get('retailer_tbl')->row()->id;
                  		// echo $this->db->last_query();
                           
                         $insData = array(
                         				'imei1' => $allDataInSheet[$i]["A"],
                         	            'retailer' => $retailer_id,
                                        'customer_name' => $allDataInSheet[$i]["J"],
                                        'invoice_no' => $allDataInSheet[$i]["M"],
                                        'invoice_date' => date('Y-m-d H:i:s',strtotime($allDataInSheet[$i]["N"])),
                                        'status' => 'ordered',
                                        'modified_date' => date('Y-m-d H:i:s'),

                                    );
                         $this->db->where('imei1',$allDataInSheet[$i]["A"])->where('status','assign')->update('stock', $insData);
                      }




                   // echo "<pre>"; print_r($insData);exit();

                    //insert actions
                       if(isset($insData) && !empty($insData))
                       {

                            //$this->db->where('ime1',$allDataInSheet[$i]["A"])->update('village_tbl_new', $insData); 
                       		// $this->db->update_batch('Stock',$updateArray, 'imei1');
                            
                                //$this->session->set_flashdata('success', 'Data Added Successfully...');
                                echo "Successfully";
                                // redirect('Welcome/orders');
                            
                            
                       }
                    
                }
                else
                {
                    //$this->session->set_flashdata('error', 'Oops! Something went Wrong.');
                    echo "failed";
                    // redirect('Welcome/orders');
                }
                
            }
        }
        else
        {
            //$this->session->set_flashdata('error', 'Oops! Something went Wrong.');

            // redirect('Welcome/orders');
        }

	}

	
	// public function orders()
	// {
	// 	$this->load->view('orders');
	// }


	public function form_autocompletes()
	{
		$this->load->view('form-autocompletes');
	}

	public function table_datatables()
	{
		$this->load->view('table-datatables');
	}
	

	public function accopen()
	{
		$this->load->view('accopen');
	}
	public function form_basic()
	{
		$this->load->view('form-basic');
	}


	// public function contact()
	// {
	// 	$this->load->view('contact');
	// }




	// public function dd()
	// {
	// 	$this->load->view('dd');
	// }


	// public function depositloan()
	// {
	// 	$this->load->view('depositloan');
	// }



	// public function fd()
	// {
	// 	$this->load->view('fd');
	// }



	// public function goldloan()
	// {
	// 	$this->load->view('goldloan');
	// }



	// public function impemail()
	// {
	// 	$this->load->view('impemail');
	// }



	// public function index_2()
	// {
	// 	$this->load->view('index_2');
	// }


	// public function index()
	// {
	// 	$this->load->view('index');
	// }


	// public function invest()
	// {
	// 	$this->load->view('invest');
	// }



	// public function loan()
	// {
	// 	$this->load->view('loan');
	// }



	// public function member()
	// {
	// 	$this->load->view('member');
	// }


	// public function mis()
	// {
	// 	$this->load->view('mis');
	// }


	// public function portfolio()
	// {
	// 	$this->load->view('portfolio');
	// }


	// public function pricing()
	// {
	// 	$this->load->view('pricing');
	// }



	// public function propertyloan()
	// {
	// 	$this->load->view('propertyloan');
	// }


	// public function rd()
	// {
	// 	$this->load->view('rd');
	// }


	// public function sa()
	// {
	// 	$this->load->view('sa');
	// }


	// public function index_2()
	// {
	// 	$this->load->view('index-2');
	// }


	// public function index_3()
	// {
	// 	$this->load->view('index-3');
	// }



	// public function index_4()
	// {
	// 	$this->load->view('index-4');
	// }



	// public function index_5()
	// {
	// 	$this->load->view('index-5');
	// }


	// public function index_op_2()
	// {
	// 	$this->load->view('index-op-2');
	// }


	// public function index_op_3()
	// {
	// 	$this->load->view('index-op-3');
	// }


	// public function index_op_4()
	// {
	// 	$this->load->view('index-op-4');
	// }


	// public function index_op_5()
	// {
	// 	$this->load->view('index-op-5');
	// }


	// public function index_op()
	// {
	// 	$this->load->view('index-op');
	// }


	// public function login()
	// {
	// 	$this->load->view('login');
	// }


	// public function privacy_policy()
	// {
	// 	$this->load->view('privacy-policy');
	// }


	// public function project_single()
	// {
	// 	$this->load->view('project-single');
	// }


	// public function register()
	// {
	// 	$this->load->view('register');
	// }


	// public function services_2()
	// {
	// 	$this->load->view('services-2');
	// }


	// public function services_3()
	// {
	// 	$this->load->view('services-3');
	// }


	// public function services_single()
	// {
	// 	$this->load->view('services-single');
	// }



	// public function services()
	// {
	// 	$this->load->view('services');
	// }



	// public function team()
	// {
	// 	$this->load->view('team');
	// }


	// public function viewcombbro()
	// {
	// 	$this->load->view('viewcombbro');
	// }


	// public function viewinvbro()
	// {
	// 	$this->load->view('viewinvbro');
	// }
	
	// public function viewloanbro()
	// {
	// 	$this->load->view('viewloanbro');
	// }

	// public function zerosa()
	// {
	// 	$this->load->view('zerosa');
	// }

}

