<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {
	
	

	function __construct(){
		parent::__construct();
		if (!$this->session->has_userdata('username')) {
			redirect("login");
		} else {
			if ($this->session->userdata('level') != 'admin') {
				redirect("naik_pangkat");	
			}
		}	
		$this->load->model('M_operator');
		
	}
	
	public function index()
	{
		$data['menu'] = "operator";
		$data['operator']=    $this->M_operator->get_all();
		$this->template->load('template','operator/v_index',$data);
    }
}