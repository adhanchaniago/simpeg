<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit_kerja extends CI_Controller {
	
	

	function __construct(){
		parent::__construct();
		if (!$this->session->has_userdata('username')) {
			redirect("login");
		} else {
			if ($this->session->userdata('level') != 'admin') {
				redirect("naik_pangkat");	
			}
		}	
		$this->load->model('m_unit_kerja');
		
	}
	
	public function index()
	{
		$data['menu'] = "unit_kerja";
		$data['unit_kerja']=    $this->m_unit_kerja->get_all();
		$this->template->load('template','unit_kerja/v_index',$data);
	}
	
	public function post()
	{	
		$data['menu'] = "unit_kerja";
		$this->template->load('template','unit_kerja/v_tambah',$data);
		
		if(isset($_POST['submit'])){
			$nama_unit_kerja   			 =  $this->input->post('nama_unit_kerja');
			
			$cek = $this->db->query("SELECT * FROM unit_kerja where nama_unit_kerja='$nama_unit_kerja'")->num_rows();
            if ($cek<=0) {          
			
				$data           =  array('nama_unit_kerja' 			=>$nama_unit_kerja);
									 
				$this->m_unit_kerja->post($data);	
				$this->session->set_flashdata('status', "Unit Kerja <b>Berhasil</b>  disimpan");	
				redirect('unit_kerja');
			} else {
				$this->session->set_flashdata('error', "Unit Kerja <b>Sudah Ada</b> di database");	
				redirect('unit_kerja');
			}	
		}	
	}
	
	
	
	public function delete($key)
	{	
		$this->m_unit_kerja->delete($key);
		$this->session->set_flashdata('status', "Unit Kerja <b>Berhasil</b>  dihapus");	
		redirect('unit_kerja');
		
	}
	
	
	    
	
	
}
