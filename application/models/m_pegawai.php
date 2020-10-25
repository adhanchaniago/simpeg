<?php
class m_pegawai extends CI_Model {
    
	var $tb = "pegawai";
	var $id = "id";
	
	function __construct()
	{
		parent::__construct();	
	}
        
   
    function auth($username){		
		return $this->db->query("SELECT * FROM pegawai p, unit_kerja u WHERE p.username = '$username' AND p.id_unit_kerja = u.id_unit_kerja");
	}	
	
	 function cek_login($where){		
		return $this->db->get_where($this->tb,$where);
	}	
   
	function get_all()
	{
		
		return $this->db->query("SELECT * FROM pegawai p, unit_kerja u WHERE p.id_unit_kerja = u.id_unit_kerja");
	}  
	
	function post($data)
	{
		$this->db->insert($this->tb,$data);
	}
	
	function get_one($key)
	{
		return $this->db->get_where($this->tb, array($this->id => $key));
	}
	
	function get_nip($nip)
	{
		return $this->db->get_where($this->tb, array('nip' => $nip));
	}
	
	function get_one_pegawai($id){		
		return $this->db->query("SELECT * FROM pegawai p, unit_kerja u WHERE p.id = '$id' AND p.id_unit_kerja = u.id_unit_kerja");
	}
	
	function edit($data, $key)
	{
		$this->db->where($this->id, $key);
		$this->db->update($this->tb, $data);
	}
	
	function delete($key)
	{
		$this->db->delete($this->tb, array($this->id => $key)); 
	}
	
	function get_auth(){		
		return $this->db->get_where($this->tb,  array('username' => $_SESSION['username']));
	}	
	
	function ganti($data, $nip)
	{
		$this->db->where('nip', $nip);
		$this->db->update($this->tb, $data);
	}	
	
	// Buat sebuah fungsi untuk melakukan insert lebih dari 1 data  
	function insert_multiple($data)
	{    
		$this->db->insert_batch($this->tb, $data);  
	}
	
}		