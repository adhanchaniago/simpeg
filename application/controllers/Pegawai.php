<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {
	
	

	function __construct(){
		parent::__construct();
		if (!$this->session->has_userdata('username')) {
			redirect("login");
		}
		$this->load->model('m_pegawai');
		$this->load->model('m_admin');
		 
	}
	
	public function index()
	{
		$data['menu'] = "pegawai";
		$data['pegawai']=    $this->m_pegawai->get_all($this->session->userdata('level'));
		$this->template->load('template','pegawai/v_index',$data);
	}
	
	
	public function cetak()
	{
		$data['menu'] = "pegawai";
		$data['auth']=    $this->m_admin->get_auth();
		$data['pegawai']=    $this->m_pegawai->get_all($this->session->userdata('level'));
		$this->load->view('pegawai/v_cetak',$data);
	}
	
	public function post()
	{	
		$data['menu'] = "pegawai";
		$data['unit_kerja']=    $this->m_unit_kerja->get_all();
		$this->template->load('template','pegawai/v_tambah',$data);
		
		if(isset($_POST['submit'])){
			$tmpt_lahir   			 =  $this->input->post('tmpt_lahir');
			$tgl_lahir   			 =  date("Y-m-d", strtotime($this->input->post('tgl_lahir')));
			$gol_awal   			 =  $this->input->post('gol_awal');
			$tmt_cpns   			 =  date("Y-m-d", strtotime($this->input->post('tmt_cpns')));
			$tmt_pns   			 	 =  date("Y-m-d", strtotime($this->input->post('tmt_pns')));
			$jk   			 		 =  $this->input->post('jk');
			$gol_akhir   			 =  $this->input->post('gol_akhir');
			$tmt   			 		 =  date("Y-m-d", strtotime($this->input->post('tmt')));
			$tgl_skrg				 =  date_create();
			$tgl_dulu				 =  date_create($tmt_cpns);
			$diff 					 =  date_diff($tgl_dulu,$tgl_skrg);
			$masa_kerja   			 =  $diff->y." thn ".$diff->m." bln";
			
			$jenis_jabatan   		 =  $this->input->post('jenis_jabatan');
			$nama_jabatan   		 =  $this->input->post('nama_jabatan');
			$pendidikan   			 =  $this->input->post('pendidikan');
			$ked_hukum   			 =  $this->input->post('ked_hukum');
			$id_unit_kerja   			 =  $this->input->post('id_unit_kerja');
			$nip   			 =  $this->input->post('nip');
			$nama       	 =  $this->input->post('nama');
			$username        =  $this->input->post('username');
			$password        =  md5($this->input->post('password'));
			
			$data           =  array('tmpt_lahir' 		=>$tmpt_lahir,
                                     'tgl_lahir'     	=>$tgl_lahir,
                                     'gol_awal'     	=>$gol_awal,
                                     'tmt_cpns'     	=>$tmt_cpns,
                                     'tmt_pns'			=>$tmt_pns,
                                     'jk'				=>$jk,
                                     'gol_akhir'				=>$gol_akhir,
                                     'tmt'				=>$tmt,
                                     'masa_kerja'				=>$masa_kerja,
                                     'jenis_jabatan'				=>$jenis_jabatan,
                                     'nama_jabatan'				=>$nama_jabatan,
                                     'pendidikan'				=>$pendidikan,
                                     'ked_hukum'				=>$ked_hukum,
                                     'id_unit_kerja'				=>$id_unit_kerja,
                                     'nip'       =>$nip,
                                     'nama'       =>$nama,
                                     'username'       =>$username,
                                     'password'       =>$password);
									 
			$this->m_pegawai->post($data);	
			$this->session->set_flashdata('status', "Data Pegawai <b>Berhasil</b>  disimpan");
			redirect('pegawai');
		}	
	}
	
	public function edit($key)
	{	
		$data['menu'] = "pegawai";
		$data['pegawai']=    $this->m_pegawai->get_one($key);
		$data['unit_kerja']=    $this->m_unit_kerja->get_all();
		$this->template->load('template','pegawai/v_edit', $data);
		
	}
	
	public function proses_edit()
	{	
		if(isset($_POST['submit'])){
			$id   			 =  $this->input->post('id');
			$tmpt_lahir   			 =  $this->input->post('tmpt_lahir');
			$tgl_lahir   			 =   date("Y-m-d", strtotime($this->input->post('tgl_lahir')));
			$gol_awal   			 =  $this->input->post('gol_awal');
			$tmt_cpns   			 =   date("Y-m-d", strtotime($this->input->post('tmt_cpns')));
			$tmt_pns   			 	 =   date("Y-m-d", strtotime($this->input->post('tmt_pns')));
			$jk   			 		 =  $this->input->post('jk');
			$gol_akhir   			 =  $this->input->post('gol_akhir');
			$tmt   			 		 =  date("Y-m-d", strtotime($this->input->post('tmt')));
			$tgl_skrg				 =  date_create();
			$tgl_dulu				 =  date_create($tmt_cpns);
			$diff 					 =  date_diff($tgl_dulu,$tgl_skrg);
			$masa_kerja   			 =  $diff->y." thn ".$diff->m." bln";
			$jenis_jabatan   		 =  $this->input->post('jenis_jabatan');
			$nama_jabatan   		 =  $this->input->post('nama_jabatan');
			$pendidikan   			 =  $this->input->post('pendidikan');
			$ked_hukum   			 =  $this->input->post('ked_hukum');
			$id_unit_kerja   			 =  $this->input->post('id_unit_kerja');
			$nip   			 =  $this->input->post('nip');
			$nama       	 =  $this->input->post('nama');
			$username        =  $this->input->post('username');
			$password        =  md5($this->input->post('password'));
			
			$data           =  array('tmpt_lahir' 		=>$tmpt_lahir,
                                     'tgl_lahir'     	=>$tgl_lahir,
                                     'gol_awal'     	=>$gol_awal,
                                     'tmt_cpns'     	=>$tmt_cpns,
                                     'tmt_pns'			=>$tmt_pns,
                                     'jk'				=>$jk,
                                     'gol_akhir'				=>$gol_akhir,
                                     'tmt'				=>$tmt,
                                     'masa_kerja'				=>$masa_kerja,
                                     'jenis_jabatan'				=>$jenis_jabatan,
                                     'nama_jabatan'				=>$nama_jabatan,
                                     'pendidikan'				=>$pendidikan,
                                     'ked_hukum'				=>$ked_hukum,
                                     'id_unit_kerja'				=>$id_unit_kerja,
                                     'nip'       =>$nip,
                                     'nama'       =>$nama,
                                     'username'       =>$username,
                                     'password'       =>$password);
									 
			$this->m_pegawai->edit($data, $id);	
			$this->session->set_flashdata('status', "Data Pegawai <b>Berhasil</b>  diedit");
			redirect('pegawai');
		}	
		
	}
	
	public function delete($key)
	{	
		$this->m_pegawai->delete($key);
		$this->session->set_flashdata('status', "Data Pegawai <b>Berhasil</b>  dihapus");
		redirect('pegawai');
		
	}
	
	
	public function import()
	{   
		$namafile = "import_pegawai";
		$data = array(); 
		$data['menu'] = "pegawai";
		
		if(isset($_POST['submit'])){ 	
			$this->load->library('upload'); 
			$config['upload_path'] = './import/';    
			$config['allowed_types'] = 'xlsx';    
			$config['max_size']  = '10000';    
			$config['overwrite'] = true;    
			$config['file_name'] = $namafile;      
			$this->upload->initialize($config); 		
			
			if($this->upload->do_upload('file')){ 
			   
				include APPPATH.'third_party/PHPExcel/PHPExcel.php';                
				$excelreader = new PHPExcel_Reader_Excel2007();        
				$loadexcel = $excelreader->load('import/'.$namafile.'.xlsx'); 
				$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);                
				
				$data = [];        
				$numrow = 1;    
				foreach($sheet as $row){      
					if($numrow > 2){        
						array_push($data, [          
							'tmpt_lahir' 		=>$row['B'],    
							'tgl_lahir'     	=>$row['C'],   
							'gol_awal'     		=>$row['D'], 
							'tmt_cpns'     		=>$row['E'],   
							'tmt_pns'			=>$row['F'],  
							'jk'				=>$row['G'],  
							'gol_akhir'			=>$row['H'],  
							'tmt'				=>$row['I'], 
							'masa_kerja'		=>$row['J'], 
							'jenis_jabatan'		=>$row['K'], 
							'nama_jabatan'		=>$row['L'], 
							'pendidikan'		=>$row['M'], 
							'ked_hukum'			=>$row['N'],
							'id_unit_kerja'		=>$row['O'],
							'nip'       		=>$row['P'],
							'nama'       		=>$row['Q'],
							'username'       	=>$row['R'],
							'password'       	=>$row['S'],
							]);      
					}            
					$numrow++;    
				}    
				 
				$this->m_pegawai->insert_multiple($data);  
				unlink("import/$namafile.xlsx");
				$this->session->set_flashdata('status', "Data Pegawai <b>Berhasil</b>  diimport");	
				redirect("pegawai"); 
			}else{ 
				$data['error'] =  $this->upload->display_errors();   
				
			}    
		}        
		
		$this->template->load('template','pegawai/v_import', $data);  
	}    
	
	
}
