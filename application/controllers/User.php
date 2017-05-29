<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {


	function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('login_m');
        $this->load->library('session','unit_test');
    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('user/welcome_message');
	}


	function aksi() {
		// echo ("salah");
        $data = array(
            'Username' => $this->input->post('NRP'),
            'Password' => $this->input->post('password'));

        // var_dump($data);
        $cek = $this->login_m->m_aksi_user($data);

        if ($cek == 1) {
            // $x = $this->session->set_userdata('userdata',$data);
            redirect('dashboard/index_user');
        } else {
            echo '<script type="text/javascript">'; 
            echo 'alert("Wrong Username or Password!");'; 
            echo 'location.replace ("http://localhost/RK/");';
            echo '</script>';
//            echo "salah";
        }
    }
}
