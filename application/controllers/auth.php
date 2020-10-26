<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	

	function __construct(){
		parent::__construct();
		
		$this->load->model('m_admin');
		$this->load->model('m_pegawai');
	}
	
	public function pegawai()
	{
		if (!$this->session->has_userdata('username')) {
			redirect("login_pegawai");
		} else {
			if ($this->session->userdata('level') != 'pegawai') {
				redirect("home");	
			}
		}	
		
		$data['menu'] = "auth";
		$data['auth']=    $this->m_pegawai->get_auth();
		$this->template->load('template_p','auth/v_pegawai',$data);
	}
	
	public function proses_pegawai()
	{	
		if (!$this->session->has_userdata('username')) {
			redirect("login_pegawai");
		} else {
			if ($this->session->userdata('level') != 'pegawai') {
				redirect("home");	
			}
		}	
		
		if(isset($_POST['submit'])){
			$id   			 =  $this->input->post('id');
			$nip   			 =  $this->input->post('nip');
			$nama       	 =  $this->input->post('nama');
			$golongan   	 =  $this->input->post('golongan');
			$username        =  $this->input->post('username');
			$password        =  md5($this->input->post('password'));
			
			$data           =  array('nip' 			=>$nip,
                                     'nama'     	=>$nama,
                                     'username'       =>$username,
                                     'password'       =>$password);
									 
			$this->m_pegawai->ganti($data, $id);	
			$this->session->set_flashdata('status', 'Data berhasil diganti');
			if ($_SESSION['username'] == $username) {
				redirect('auth/pegawai');
			} else {
				redirect('.');
			}	
		}	
		
	}
	
	
	
	
	
	
	public function admin()
	{	
		if (!$this->session->has_userdata('username')) {
			redirect("login");
		} 
		
		$data['menu'] = "auth";
		$data['auth']=    $this->m_admin->get_auth();
		$this->template->load('template','auth/v_admin', $data);
		
	}
	
	public function proses_admin()
	{	
		if (!$this->session->has_userdata('username')) {
			redirect("login");
		}
		if(isset($_POST['submit'])){
			$id_admin   		=  $this->input->post('id_admin');
			$nama       	 	=  $this->input->post('nama');
			$username        	=  $this->input->post('username');
			$nama_instansi 		= $this->input->post('nama_instansi');
			$alamat_instansi	= $this->input->post('alamat_instansi');
			$website_instansi	= $this->input->post('website_instansi');
			$email_instansi		= $this->input->post('email_instansi');
			$notelp_instansi	= $this->input->post('notelp_instansi');

			if($this->input->post('password',true)){
				$password        =  md5($this->input->post('password'));
				$data   =  array('nama'     	=>$nama,
                        	 'username'       	=>$username,
							 'password'       	=>$password,
							 'nama_instansi'	=>$nama_instansi,
							 'alamat_instansi'	=>$alamat_instansi,
							 'website_instansi'	=>$website_instansi,
							 'email_instansi'	=>$email_instansi,
							 'notelp_instansi'	=>$notelp_instansi						 
							);
			} else {
			$data   =  array('nama'     	=>$nama,
                        	 'username'       =>$username,
							 'nama_instansi'	=>$nama_instansi,
							 'alamat_instansi'	=>$alamat_instansi,
							 'website_instansi'	=>$website_instansi,
							 'email_instansi'	=>$email_instansi,
							 'notelp_instansi'	=>$notelp_instansi	
							);
			}						 
			$this->m_admin->ganti($data, $id_admin);	
			$this->session->set_flashdata('status', 'Data profil operator berhasil diganti');
			if ($_SESSION['username'] == $username) {
				redirect('auth/admin');
			} else {
				redirect('.');
			}	
		}	
		
	}
	
	
	
	
	
	
	
	
	 
	
	
}
