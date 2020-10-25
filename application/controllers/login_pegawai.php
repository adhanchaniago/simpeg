<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_pegawai extends CI_Controller {

	
	function __construct(){
		
		parent::__construct();		
		
		
		$this->load->model('m_pegawai');
 
	}
	
	function index(){
		if ($this->session->has_userdata('username')) {
			if ($this->session->userdata('level') == 'pegawai') {
				redirect("naik_pangkat");	
			} else if ($this->session->userdata('level') == 'admin') {
				redirect("home");	
			} 
		} 	
			$this->load->view('login/v_pegawai');
	}
 
	function login(){
		if ($this->session->has_userdata('username')) {
			if ($this->session->userdata('level') == 'pegawai') {
				redirect("naik_pangkat");	
			} else if ($this->session->userdata('level') == 'admin') {
				redirect("home");	
			} 
		} 	
		if (isset($_POST['submit'])) {
			$username = $this->input->post('username');
		  	$password = $this->input->post('password');
		  	$where = array(
		  		'username' => $username,
		  		'password' => md5($password)
		  		);
		  	$cek = $this->m_pegawai->cek_login($where)->num_rows();
			$data = $this->m_pegawai->cek_login($where);
			
			if($cek > 0){
				
				foreach ($data->result() as $r) {
				$nip = $r->nip;	
				$id = $r->id;	
				}	
	 
				$data_session = array(
					'username' 		=> $username,
					'level' 		=> "pegawai",
					'nip' 			=> $nip,
					'id' 			=> $id
					);
				
				$this->session->set_userdata($data_session);
				$this->session->set_flashdata('status', 'Berhasil Login');
				redirect("naik_pangkat");

			}else{	
				$this->session->set_flashdata('status', 'Gagal Login');
				redirect("login_pegawai");
			}
		} 
	
	}	
 
	function logout(){
		$this->session->sess_destroy();
		redirect("login_pegawai");
	}
}
