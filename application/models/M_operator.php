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
	
	function reset_password($id_admin)
	{
		$this->db->where($this->id, $id_admin);
		$this->db->update($this->tb, array('password'=>'e10adc3949ba59abbe56e057f20f883e'));
	}
}