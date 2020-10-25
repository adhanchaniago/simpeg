<?php
class M_operator extends CI_Model {
    
	var $tb = "admin";
	var $id = "id_admin";
	
	function __construct()
	{
		parent::__construct();	
	}
        
   
   
	function get_all()
	{
        $this->db->where('level !=', '1');
        return $this->db->get($this->tb);
    }  
}