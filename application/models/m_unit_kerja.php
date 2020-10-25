<?php
class m_unit_kerja extends CI_Model {
    
	var $tb = "unit_kerja";
	var $id = "id_unit_kerja";
	
	function __construct()
	{
		parent::__construct();	
	}
        
   
   
	function get_all()
	{
		return $this->db->get($this->tb);
	}  
	
	function post($data)
	{
		$this->db->insert($this->tb,$data);
	}
	
	function get_one($key)
	{
		return $this->db->get_where($this->tb, array($this->id => $key));
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
	
	
}		