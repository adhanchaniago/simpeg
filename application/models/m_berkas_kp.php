<?php
class m_berkas_kp extends CI_Model {
    
	var $tb = "kenaikan_pangkat";
	var $id = "id";
	
	function __construct()
	{
		parent::__construct();	
	}
        
   
    function get_all()
	{
		return $this->db->query("SELECT * FROM pegawai p, kenaikan_pangkat k, unit_kerja u WHERE p.nip = k.nip  AND u.id_unit_kerja = p.id_unit_kerja AND k.status != ''");
	}  
	
	 function get_pengumuman()
	{
		return $this->db->query("SELECT * FROM pegawai p, kenaikan_pangkat k, unit_kerja u WHERE p.nip = k.nip AND u.id_unit_kerja = p.id_unit_kerja AND (k.status = 'Naik Pangkat' or  k.status = 'Tidak Naik')");
	}  
   
    function post($data)
	{
		$this->db->insert($this->tb,$data);
	}
   
	function get_struktural()
	{
		return $this->db->get_where($this->tb, array('status' => '', 'jenis_kp' => 'struktural', 'nip' => $_SESSION['nip']));
	}  
	
	function get_fungsional()
	{
		return $this->db->get_where($this->tb, array('status' => '', 'jenis_kp' => 'fungsional', 'nip' => $_SESSION['nip']));
	}  
	
	function get_ijazah()
	{
		return $this->db->get_where($this->tb, array('status' => '', 'jenis_kp' => 'ijazah', 'nip' => $_SESSION['nip']));
	}  
	
	function get_reguler()
	{
		return $this->db->get_where($this->tb, array('status' => '', 'jenis_kp' => 'reguler', 'nip' => $_SESSION['nip']));
	} 



	function cek_struktural($nip)
	{
		return $this->db->get_where($this->tb, array('status' => 'terkirim', 'jenis_kp' => 'struktural', 'nip' => $nip));
	}  
	
	function cek_fungsional($nip)
	{
		return $this->db->get_where($this->tb, array('status' => 'terkirim', 'jenis_kp' => 'fungsional', 'nip' => $nip));
	}  
	
	function cek_ijazah($nip)
	{
		return $this->db->get_where($this->tb, array('status' => 'terkirim', 'jenis_kp' => 'ijazah', 'nip' => $nip));
	}  
	
	function cek_reguler($nip)
	{
		return $this->db->get_where($this->tb, array('status' => 'terkirim', 'jenis_kp' => 'reguler', 'nip' => $nip ));
	} 
	
	
	function get_one($key)
	{
		return $this->db->query("SELECT * FROM pegawai p, kenaikan_pangkat k, unit_kerja u WHERE p.nip = k.nip AND k.id='$key' AND u.id_unit_kerja = p.id_unit_kerja");
	}
	
	
	function get_detail_pegawai($nip)
	{
		return $this->db->query("SELECT * FROM pegawai p, kenaikan_pangkat k WHERE p.nip = k.nip AND k.nip='$nip'  ");
	}
	
	function get_selesai_upload($nip, $jenis_kp)
	{
		return $this->db->query("SELECT * FROM pegawai p, kenaikan_pangkat k WHERE p.nip = k.nip AND k.nip='$nip' AND k.jenis_kp = '$jenis_kp' order by k.id DESC LIMIT 1");
	}
	
	function edit_berkas($nip, $jenis_kp)
	{
		return $this->db->query("SELECT * FROM pegawai p, kenaikan_pangkat k WHERE p.nip = k.nip AND k.nip='$nip' AND k.jenis_kp = '$jenis_kp' ");
	}
	
	function proses_edit($data, $id)
	{
		$this->db->where($this->id, $id);
		$this->db->update($this->tb, $data);
	}
	
	function status($data, $key)
	{
		$this->db->where($this->id, $key);
		$this->db->update($this->tb, $data);
	}
	
	function delete($key)
	{
		$this->db->delete($this->tb, array($this->id => $key)); 
	}
	
	
	
}		