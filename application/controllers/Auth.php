<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
    }
	public function index()
	{
		$this->load->view('index');
	}


    public function login()
    {
        $this->load->view('login');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->load->view('login');
    }

    public function login_script()
    {
        $userdata = $this->input->post();

        $query = $this->db->where('username',$userdata['username'])->where('password',$userdata['password'])->get('retailer_tbl');
        if($query->num_rows() > 0){
            $this->session->set_userdata('user_type',$query->row()->user_type);
            $this->session->set_userdata('user_id',$query->row()->id);
            $this->session->set_userdata('username',$query->row()->username);
            $this->session->set_userdata('logged',true);
            redirect('welcome/orders');
        }
        // print_r($userdata);exit();
    }

}

