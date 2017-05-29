<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('login_m');
        $this->load->library('session','unit_test');
    }

	public function index()
	{
		$this->load->view('admin/welcome_message');
	}

	function aksi() {
		// echo ("salah");
        $data = array(
            'username' => $this->input->post('NIP'),
            'password' => $this->input->post('password'));

        // var_dump($data);
        $cek = $this->login_m->m_aksi($data);

        if ($cek == 1) {
            // $x = $this->session->set_userdata('userdata',$data);
            redirect('dashboard');
        } else {
            echo '<script type="text/javascript">'; 
            echo 'alert("Wrong Username or Password!");'; 
            echo 'location.replace ("http://localhost/RK/");';
            echo '</script>';
//            echo "salah";
        }
    }

    public function create()
    {
    	$this->load->view('admin/create');
    }


    public function do_create()
    {
    	
    }
}
