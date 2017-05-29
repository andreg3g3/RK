<?php

class Login_M extends CI_Model {

    function __construct() {
        $this->load->database();
    }

    function m_aksi($data) {        
        $d = $this->db->get_where('admin_only', $data);
        return $d->num_rows();
    }

    function m_aksi_user($data) {        
        $d = $this->db->get_where('admin_user', $data);
        return $d->num_rows();
    }

}

?>