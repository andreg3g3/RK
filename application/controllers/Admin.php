<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$this->load->view('admin/welcome_message');
	}

	function aksi() {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'));

        $cek = $this->login_m->m_aksi($data);
        if ($cek == 1) {
            $x = $this->session->set_userdata('userdata',$data);
            redirect('home');
        } else {
            echo '<script type="text/javascript">'; 
            echo 'alert("Wrong Username or Password!");'; 
            echo 'location.replace ("http://localhost/APSI/login");';
            echo '</script>';
//            echo "salah";
        }
    }
}
