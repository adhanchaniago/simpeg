<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Selesai extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
		if (!$this->session->has_userdata('username')) {
			redirect("login_pegawai");
		} else {
			if ($this->session->userdata('level') != 'pegawai') {
				redirect("home");	
			}
		}	
		
		$this->load->model('m_pegawai');
		$this->load->model('m_berkas_kp');
		
	}
	
	
	public function struktural()
	{
		$data['menu'] = "berkas_kp";
		$nip = $this->session->userdata('nip');
		$id = $this->session->userdata('id');
		$jenis_kp = $this->session->userdata('jenis_kp');
		$data['pegawai']=    $this->m_pegawai->get_one_pegawai($id);
		$data['berkas_kp']=    $this->m_berkas_kp->get_selesai_upload($nip, 'struktural');
		
		$this->template->load('template_p','selesai/v_struktural', $data);
		
		
		
	}
	
	public function fungsional()
	{
		$data['menu'] = "berkas_kp";
		$nip = $this->session->userdata('nip');
		$id = $this->session->userdata('id');
		$jenis_kp = $this->session->userdata('jenis_kp');
		$data['pegawai']=    $this->m_pegawai->get_one_pegawai($id);
		$data['berkas_kp']=    $this->m_berkas_kp->get_selesai_upload($nip, 'fungsional');
		
		$this->template->load('template_p','selesai/v_fungsional', $data);
		
		
		
	}
	
	public function ijazah()
	{
		$data['menu'] = "berkas_kp";
		$nip = $this->session->userdata('nip');
		$id = $this->session->userdata('id');
		$jenis_kp = $this->session->userdata('jenis_kp');
		$data['pegawai']=    $this->m_pegawai->get_one_pegawai($id);
		$data['berkas_kp']=    $this->m_berkas_kp->get_selesai_upload($nip, 'ijazah');
		
		$this->template->load('template_p','selesai/v_ijazah', $data);
		
		
		
	}
	
	public function reguler()
	{
		$data['menu'] = "berkas_kp";
		$nip = $this->session->userdata('nip');
		$id = $this->session->userdata('id');
		$jenis_kp = $this->session->userdata('jenis_kp');
		$data['pegawai']=    $this->m_pegawai->get_one_pegawai($id);
		$data['berkas_kp']=    $this->m_berkas_kp->get_selesai_upload($nip, 'reguler');
		
		$this->template->load('template_p','selesai/v_reguler', $data);
		
		
	}
}
