<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class depan extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		if ($this->session->has_userdata('username')) {
			if ($this->session->userdata('level') == 'pegawai') {
				redirect("naik_pangkat");	
			} else if ($this->session->userdata('level') == 'admin') {
				redirect("home");	
			} 
		} 	
		
	}
	
	public function index()
	{
		$this->load->view('login/v_depan');
	}
}
