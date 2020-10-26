<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		if (!$this->session->has_userdata('username')) {
			redirect("login");
		}	
		
		$this->load->model('m_pegawai');
		//$this->load->model('m_berkas_kp');
		$this->load->model('m_unit_kerja');
		
	}
	
	public function index()
	{
		$data['menu'] = "home";
		$data['pegawai']=    $this->m_pegawai->get_all()->num_rows();
		//$data['berkas']=    $this->m_berkas_kp->get_all()->num_rows();
		$data['unit_kerja']=    $this->m_unit_kerja->get_all()->num_rows();
		$this->template->load('template','v_home', $data);
	}
}
