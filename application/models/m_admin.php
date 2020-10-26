<?php
class M_admin extends CI_Model{
	
	var $tb = "admin";
	var $id = "id_admin";
	
	function cek_login($where){		
		return $this->db->get_where($this->tb,$where);
	}

	function get_auth(){		
		return $this->db->get_where($this->tb,  array('username' => $_SESSION['username']));
	}	
	
	function ganti($data, $key)
	{
		$this->db->where($this->id, $key);
		$this->db->update($this->tb, $data);
	}	
	
	function get_user($username)
    {
        $this->db->where('username', $username);
        return $this->db->get($this->tb)->row();
    }
}