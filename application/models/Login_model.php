<?php

class Login_model extends CI_Model{
    function cek_login($table,$where){     
        return $this->db->get_where($table,$where);
    } 

	function cek_status($username) {
		$query=$this->db->query("SELECT status FROM users WHERE username='$username'");
        return $query->result();
        //return $query;
	}
	
	function cek_role($username) {
		$query=$this->db->query("SELECT role FROM users WHERE username='$username'");
        //return $query->result();
        return $query->result();
	}
	
	function cek_akses($username) {
		$query=$this->db->query("SELECT akses FROM users WHERE username='$username'");
        //return $query->result();
        return $query->result();
	}

}
?>