<?php

class magenda extends CI_Model
{
	public function list_event($l_start, $l_end){
		$query = $this->db->query("
			SELECT * 
			FROM events 
			WHERE (Tanggal_Event >=  '$l_start' AND Tanggal_Event <= 'l_end');	
		");
		return $query->result_array();
	}

	public function detail_event($l_id){
		$query = $this->db->query("
			select l.Nama_Event, l.Tanggal_Event, l.Waktu, l.Detail
			from events l
			where l.ID_Event = '$l_id'
		");
		return $query->result_array();
	}

	public function get_notification($l_id){
		$query = $this->db->query("
			select l.*
			from notify_user_event m, events l
			where m.User = '$l_id' and m.Event = l.ID_Event
		");
		return $query->result_array();
	}

	public function get_notification($n_user, $n_event){
		$query = $this->db->query("INSERT INTO notify_user_event(User, Event)
									values (".$n_user.", ".$n_event.")");

	}

	public function event_edit($l_id){
		$query = $this->db->query("
			select *
			from events
			where ID_Event = '$l_id'
		");
		return $query->result_array();
	}

	public function delete_event($l_id){
		$query = $this->db->query("
			DELETE FROM events 
	    		WHERE ID_Event = '$l_id'
			");
	}

	public function create_event($l_namaEvent, $l_tanggalEvent, $l_waktu, $l_detail){
		$query = $this->db->query("INSERT INTO events(Nama_Event, Tanggal_Event, Waktu, Detail)
									values('".$l_namaEvent."','".$l_tanggalEvent."','".$l_waktu."','".$l_detail."')
								");
	}

	public function modify_event($l_id, $l_namaEvent, $l_tanggalEvent, $l_waktu, $l_detail){
		$query = $this->db->query("
			update events
			set Nama_Event = '$l_namaEvent', Tanggal_Event = '$l_tanggal', Waktu = '$l_waktu', Detail = '$l_detail'
		where ID_Event = '$l_id'
		");
	}

	public function register_user($u_username, $u_password, $u_power){
		$query = $this->db->query("INSERT INTO admin_user(Username, Password, Power)
									values('".$u_username."','MD5(".$u_password.")','".$u_power."',)
								");
	}
}