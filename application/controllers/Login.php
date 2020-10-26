<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	function __construct(){
		
		parent::__construct();	
		
		
		
		$this->load->model('m_admin');
			
	}
	
	function index(){
		if ($this->session->has_userdata('username')) {
			if ($this->session->userdata('level') == 'pegawai') {
				redirect("naik_pangkat");	
			} else if ($this->session->userdata('level') == 'admin') {
				redirect("home");	
			} 
		} 	
			$this->load->view('login/v_admin');
	}
 
	function login(){
			
		if (isset($_POST['submit'])) {
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$where = array(
				'username' => $username,
				'password' => $password 
				);
			$cek = $this->m_admin->cek_login($where)->num_rows();
			$res = $this->m_admin->get_user($username);
			if($cek > 0){
	 
				$data_session = array(
					'nama' 		=> $res->nama,
					'username' 		=> $username,
					'level' 	=> $res->level,
					'id_admin'	=> $res->id_admin,
					);
				
				$this->session->set_userdata($data_session);
				$this->session->set_flashdata('status', 'Berhasil Login');
				redirect("home");

			}else{	
				$this->session->set_flashdata('status', 'Gagal Login');
				redirect("login");
			}
		} 
	
	}	
 
	function logout(){
		$this->session->sess_destroy();
		redirect("login");
	}
}
