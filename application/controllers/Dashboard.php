<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_CONTROLLER {
	function __construct() 
    {
        parent::__construct();
        // $this->load->model('db_m');
    }
	// public function index()
	// {
	// 	$this->load->view('home_page');
	// }
	function index()//index page
    {
        // $data['post'] = $this->db_m->get_posts(20, $start);
        
        //pagination
        // $this->load->library('pagination');
        // $config['base_url'] = base_url().'index.php/blog/index/';//url to set pagination
        // $config['total_rows'] = $this->db_m->get_post_count();
        // $config['per_page'] = 5; 
        // $this->pagination->initialize($config); 
        // $data['pages'] = $this->pagination->create_links(); //Links of pages
        
        // $class_name = array(
        //     'home_class'=>'current', 
        //     'login_class' => '', 
        //     'register_class' => '',
        //     'upload_class'=>'',
        //     'contact_class'=>'');
        $this->load->view('admin/dashboard');
        // $this->load->view('home_v',$data);
        // $this->load->view('home_footer_v');
    }

    function index_user()//index page
    {

        $this->load->view('user/dashboard');

    }
}