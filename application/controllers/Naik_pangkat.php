<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Naik_pangkat extends CI_Controller {
	
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
	
	public function index()
	{
		$data['menu'] = "naik_pangkat";
		
		
		$data['jumlah_struktural']=    $this->m_berkas_kp->get_struktural()->num_rows();
		$data['jumlah_fungsional']=    $this->m_berkas_kp->get_fungsional()->num_rows();
		$data['jumlah_ijazah']=    $this->m_berkas_kp->get_ijazah()->num_rows();
		$data['jumlah_reguler']=    $this->m_berkas_kp->get_reguler()->num_rows();
		
		$nip = $this->session->userdata('nip');
		$username = $this->session->userdata('username');
		$data['pegawai']=    $this->m_pegawai->auth($username);
		
		$data['status_struktural']=    $this->m_berkas_kp->cek_struktural($nip)->num_rows();
		$data['status_fungsional']=    $this->m_berkas_kp->cek_fungsional($nip)->num_rows();
		$data['status_ijazah']=    $this->m_berkas_kp->cek_ijazah($nip)->num_rows();
		$data['status_reguler']=    $this->m_berkas_kp->cek_reguler($nip)->num_rows();
		
		
		$this->template->load('template_p','v_naik_pangkat', $data);
	}
	
	
	
	public function struktural()
	{
		$data['menu'] = "naik_pangkat";
		$username = $this->session->userdata('username');
		$data['auth'] = $this->m_pegawai->auth($username);
		$this->template->load('template_p','naik_pangkat/v_struktural', $data);
		
		if(isset($_POST['submit'])){
			$nip   			 =  $this->input->post('nip');
			$config['upload_path']          = "./berkas_struktural/$nip/";
			$config['allowed_types']        = 'jpg|png|docx|doc|pdf';

			$this->load->library('upload', $config);
			
			if (!is_dir($nip)) {
				mkdir("./berkas_struktural/$nip", 0755, TRUE);
			}
			$instansi   			 =  $this->input->post('instansi');
			$jenis_kp   			 =  "struktural";
			
			
			
			if ($this->upload->do_upload('fc_karpeg')) {
			$fc_karpeg 		 = $this->upload->data('file_name');
			} else { 
			$fc_karpeg = "";	
			}
			
			if ($this->upload->do_upload('fc_konversi_nip')) {
			$fc_konversi_nip 		 = $this->upload->data('file_name');
			} else { 
			$fc_konversi_nip = "";	
			}
			
			if ($this->upload->do_upload('fc_cpns_pns')) {
			$fc_cpns_pns 		 = $this->upload->data('file_name');
			} else { 
			$fc_cpns_pns = "";	
			}
			
			if ($this->upload->do_upload('fc_kp_terakhir')) {
			$fc_kp_terakhir 		 = $this->upload->data('file_name');
			} else { 
			$fc_kp_terakhir = "";	
			}
			
			if ($this->upload->do_upload('sk_tugas_belajar')) {
			$sk_tugas_belajar 		 = $this->upload->data('file_name');
			} else { 
			$sk_tugas_belajar = "";	
			}
			
			if ($this->upload->do_upload('fc_pengembalian_kampus')) {
			$fc_pengembalian_kampus 		 = $this->upload->data('file_name');
			} else { 
			$fc_pengembalian_kampus = "";	
			}
			
			if ($this->upload->do_upload('fc_ijazah')) {
			$fc_ijazah 		 = $this->upload->data('file_name');
			} else { 
			$fc_ijazah = "";	
			}
			
			if ($this->upload->do_upload('fc_transkrip')) {
			$fc_transkrip 		 = $this->upload->data('file_name');
			} else { 
			$fc_transkrip = "";	
			}
			
			if ($this->upload->do_upload('fc_tmpt_kembali')) {
			$fc_tmpt_kembali 		 = $this->upload->data('file_name');
			} else { 
			$fc_tmpt_kembali = "";	
			}
			
			if ($this->upload->do_upload('fc_sk_jab_struktural')) {
			$fc_sk_jab_struktural 		 = $this->upload->data('file_name');
			} else { 
			$fc_sk_jab_struktural = "";	
			}
			
			if ($this->upload->do_upload('fc_naskah_pelantikan')) {
			$fc_naskah_pelantikan 		 = $this->upload->data('file_name');
			} else { 
			$fc_naskah_pelantikan = "";	
			}
			
			if ($this->upload->do_upload('fc_sp_pelantikan')) {
			$fc_sp_pelantikan 		 = $this->upload->data('file_name');
			} else { 
			$fc_sp_pelantikan = "";	
			}
			
			if ($this->upload->do_upload('spmj')) {
			$spmj 		 = $this->upload->data('file_name');
			} else { 
			$spmj = "";	
			}
			
			if ($this->upload->do_upload('skp')) {
			$skp 		 = $this->upload->data('file_name');
			} else { 
			$skp = "";	
			}
			
			if ($this->upload->do_upload('sk_pangkat_atasan_langsung')) {
			$sk_pangkat_atasan_langsung 		 = $this->upload->data('file_name');
			} else { 
			$sk_pangkat_atasan_langsung = "";	
			}
			
			if ($this->upload->do_upload('cv')) {
			$cv 		 = $this->upload->data('file_name');
			} else { 
			$cv = "";	
			}
			
			
			$data           =  array('nip' 				=>$nip,
									 'instansi'     	=>$instansi,
									 'jenis_kp'			=>$jenis_kp,
									 'fc_karpeg'		=>$fc_karpeg,
									 'fc_konversi_nip'		=>$fc_konversi_nip,
									 'fc_cpns_pns'		=>$fc_cpns_pns,
									 'fc_kp_terakhir'		=>$fc_kp_terakhir,
									 'sk_tugas_belajar'		=>$sk_tugas_belajar,
									 'fc_pengembalian_kampus'		=>$fc_pengembalian_kampus,
									 'fc_ijazah'		=>$fc_ijazah,
									 'fc_transkrip'		=>$fc_transkrip,
									 'fc_tmpt_kembali'		=>$fc_tmpt_kembali,
									 'fc_sk_jab_struktural'		=>$fc_sk_jab_struktural,
									 'fc_naskah_pelantikan'		=>$fc_naskah_pelantikan,
									 'fc_sp_pelantikan'		=>$fc_sp_pelantikan,
									 'spmj'		=>$spmj,
									 'skp'		=>$skp,
									 'sk_pangkat_atasan_langsung'		=>$sk_pangkat_atasan_langsung,
									 'cv'		=>$cv);
												 
						$this->m_berkas_kp->post($data);	
						
			
			$this->session->set_flashdata('status', "Berkas Anda <b>Berhasil</b>  di-upload");
			redirect('selesai/struktural');
		}	
		
	}
	
	public function fungsional()
	{
		$data['menu'] = "naik_pangkat";
		$username = $this->session->userdata('username');
		$data['auth'] = $this->m_pegawai->auth($username);
		$this->template->load('template_p','naik_pangkat/v_fungsional', $data);
		
		if(isset($_POST['submit'])){
			$nip   			 =  $this->input->post('nip');
			$config['upload_path']          = "./berkas_fungsional/$nip/";
			$config['allowed_types']        = 'jpg|png|docx|doc|pdf';

			$this->load->library('upload', $config);
			
			if (!is_dir($nip)) {
				mkdir("./berkas_fungsional/$nip", 0755, TRUE);
			}
			$instansi   			 =  $this->input->post('instansi');
			$jenis_kp   			 =  "fungsional";
			
			if ($this->upload->do_upload('fc_karpeg')) {
			$fc_karpeg 		 = $this->upload->data('file_name');
			} else { 
			$fc_karpeg = "";	
			}
				
			if ($this->upload->do_upload('fc_konversi_nip')) {
			$fc_konversi_nip 		 = $this->upload->data('file_name');
			} else { 
			$fc_konversi_nip = "";	
			}
			
			if ($this->upload->do_upload('fc_cpns_pns')) {
			$fc_cpns_pns 		 = $this->upload->data('file_name');
			} else { 
			$fc_cpns_pns = "";	
			}
			
			if ($this->upload->do_upload('fc_kp_terakhir')) {
			$fc_kp_terakhir 		 = $this->upload->data('file_name');
			} else { 
			$fc_kp_terakhir = "";	
			}
			
			if ($this->upload->do_upload('fc_sertifikat_diklat')) {
			$fc_sertifikat_diklat 		 = $this->upload->data('file_name');
			} else { 
			$fc_sertifikat_diklat = "";	
			}
			
			if ($this->upload->do_upload('fc_sk_pengangkatan')) {
			$fc_sk_pengangkatan 		 = $this->upload->data('file_name');
			} else { 
			$fc_sk_pengangkatan = "";	
			}
			
			if ($this->upload->do_upload('sk_tugas_belajar')) {
			$sk_tugas_belajar 		 = $this->upload->data('file_name');
			} else { 
			$sk_tugas_belajar = "";	
			}
			
			if ($this->upload->do_upload('fc_pengembalian_kampus')) {
			$fc_pengembalian_kampus 		 = $this->upload->data('file_name');
			} else { 
			$fc_pengembalian_kampus = "";	
			}
			
			if ($this->upload->do_upload('fc_ijazah')) {
			$fc_ijazah 		 = $this->upload->data('file_name');
			} else { 
			$fc_ijazah = "";	
			}
			
			if ($this->upload->do_upload('fc_transkrip')) {
			$fc_transkrip 		 = $this->upload->data('file_name');
			} else { 
			$fc_transkrip = "";	
			}
			
			if ($this->upload->do_upload('fc_tmpt_kembali')) {
			$fc_tmpt_kembali 		 = $this->upload->data('file_name');
			} else { 
			$fc_tmpt_kembali = "";	
			}
			
			if ($this->upload->do_upload('fc_sk_pengangkatan_kembali')) {
			$fc_sk_pengangkatan_kembali 		 = $this->upload->data('file_name');
			} else { 
			$fc_sk_pengangkatan_kembali = "";	
			}
			
			if ($this->upload->do_upload('pak_baru')) {
			$pak_baru 		 = $this->upload->data('file_name');
			} else { 
			$pak_baru = "";	
			}
			
			if ($this->upload->do_upload('pak_lama')) {
			$pak_lama 		 = $this->upload->data('file_name');
			} else { 
			$pak_lama = "";	
			}
			
			if ($this->upload->do_upload('skp')) {
			$skp 		 = $this->upload->data('file_name');
			} else { 
			$skp = "";	
			}
			
			if ($this->upload->do_upload('sk_pangkat_atasan_langsung')) {
			$sk_pangkat_atasan_langsung 		 = $this->upload->data('file_name');
			} else { 
			$sk_pangkat_atasan_langsung = "";	
			}
			
			if ($this->upload->do_upload('cv')) {
			$cv 		 = $this->upload->data('file_name');
			} else { 
			$cv = "";	
			}
			
			
			$data           =  array('nip' 				=>$nip,
									 'instansi'     	=>$instansi,
									 'jenis_kp'			=>$jenis_kp,
									 'fc_karpeg'		=>$fc_karpeg,
									 'fc_konversi_nip'		=>$fc_konversi_nip,
									 'fc_cpns_pns'		=>$fc_cpns_pns,
									 'fc_kp_terakhir'		=>$fc_kp_terakhir,
									 'fc_sertifikat_diklat'		=>$fc_sertifikat_diklat,
									 'fc_sk_pengangkatan'		=>$fc_sk_pengangkatan,
									 'sk_tugas_belajar'		=>$sk_tugas_belajar,
									 'fc_pengembalian_kampus'		=>$fc_pengembalian_kampus,
									 'fc_ijazah'		=>$fc_ijazah,
									 'fc_transkrip'		=>$fc_transkrip,
									 'fc_tmpt_kembali'		=>$fc_tmpt_kembali,
									 'fc_sk_pengangkatan_kembali'		=>$fc_sk_pengangkatan_kembali,
									 'pak_baru'		=>$pak_baru,
									 'pak_lama'		=>$pak_lama,
									 'skp'		=>$skp,
									 'sk_pangkat_atasan_langsung'		=>$sk_pangkat_atasan_langsung,
									 'cv'		=>$cv);
												 
						$this->m_berkas_kp->post($data);	
			
			
			
			
			$this->session->set_flashdata('status', "Berkas Anda <b>Berhasil</b>  di-upload");
			redirect('selesai/fungsional');
		}
	}
	
	public function ijazah()
	{
		$data['menu'] = "naik_pangkat";
		$username = $this->session->userdata('username');
		$data['auth'] = $this->m_pegawai->auth($username);
		$this->template->load('template_p','naik_pangkat/v_ijazah', $data);
		
		if(isset($_POST['submit'])){
			$nip   			 =  $this->input->post('nip');
			$config['upload_path']          = "./berkas_ijazah/$nip/";
			$config['allowed_types']        = 'jpg|png|docx|doc|pdf';

			$this->load->library('upload', $config);
			
			if (!is_dir($nip)) {
				mkdir("./berkas_ijazah/$nip", 0755, TRUE);
			}
			$instansi   			 =  $this->input->post('instansi');
			$jenis_kp   			 =  "ijazah";
			
			if ($this->upload->do_upload('fc_karpeg')) {
			$fc_karpeg 		 = $this->upload->data('file_name');
			} else { 
			$fc_karpeg = "";	
			}
				
			if ($this->upload->do_upload('fc_cpns_pns')) {
			$fc_cpns_pns 		 = $this->upload->data('file_name');
			} else { 
			$fc_cpns_pns = "";	
			}
				
			if ($this->upload->do_upload('fc_kp_terakhir')) {
			$fc_kp_terakhir 		 = $this->upload->data('file_name');
			} else { 
			$fc_kp_terakhir = "";	
			}
				
			if ($this->upload->do_upload('sk_tugas_belajar')) {
			$sk_tugas_belajar 		 = $this->upload->data('file_name');
			} else { 
			$sk_tugas_belajar = "";	
			}
				
			if ($this->upload->do_upload('fc_pengembalian_kampus')) {
			$fc_pengembalian_kampus 		 = $this->upload->data('file_name');
			} else { 
			$fc_pengembalian_kampus = "";	
			}
				
			if ($this->upload->do_upload('fc_ijazah')) {
			$fc_ijazah 		 = $this->upload->data('file_name');
			} else { 
			$fc_ijazah = "";	
			}
				
			if ($this->upload->do_upload('fc_transkrip')) {
			$fc_transkrip 		 = $this->upload->data('file_name');
			} else { 
			$fc_transkrip = "";	
			}
			
			if ($this->upload->do_upload('fc_tmpt_kembali')) {
			$fc_tmpt_kembali 		 = $this->upload->data('file_name');
			} else { 
			$fc_tmpt_kembali = "";	
			}
			
			if ($this->upload->do_upload('fc_surat_tanda_lulus')) {
			$fc_surat_tanda_lulus 		 = $this->upload->data('file_name');
			} else { 
			$fc_surat_tanda_lulus = "";	
			}
			
			if ($this->upload->do_upload('uraian_tugas')) {
			$uraian_tugas 		 = $this->upload->data('file_name');
			} else { 
			$uraian_tugas = "";	
			}
			
			if ($this->upload->do_upload('skp')) {
			$skp 		 = $this->upload->data('file_name');
			} else { 
			$skp = "";	
			}
			
			if ($this->upload->do_upload('sk_pangkat_atasan_langsung')) {
			$sk_pangkat_atasan_langsung 		 = $this->upload->data('file_name');
			} else { 
			$sk_pangkat_atasan_langsung = "";	
			}
			
			if ($this->upload->do_upload('daftar_nilai')) {
			$daftar_nilai 		 = $this->upload->data('file_name');
			} else { 
			$daftar_nilai = "";	
			}
			
			if ($this->upload->do_upload('cv')) {
			$cv 		 = $this->upload->data('file_name');
			} else { 
			$cv = "";	
			}
			
			$data           =  array('nip' 				=>$nip,
									 'instansi'     	=>$instansi,
									 'jenis_kp'			=>$jenis_kp,
									 'fc_karpeg'		=>$fc_karpeg,
									 'fc_cpns_pns'		=>$fc_cpns_pns,
									 'fc_kp_terakhir'		=>$fc_kp_terakhir,
									 'sk_tugas_belajar'		=>$sk_tugas_belajar,
									 'fc_pengembalian_kampus'		=>$fc_pengembalian_kampus,
									 'fc_ijazah'		=>$fc_ijazah,
									 'fc_transkrip'		=>$fc_transkrip,
									 'fc_tmpt_kembali'		=>$fc_tmpt_kembali,
									 'fc_surat_tanda_lulus'		=>$fc_surat_tanda_lulus,
									 'uraian_tugas'		=>$uraian_tugas,
									 'skp'		=>$skp,
									 'sk_pangkat_atasan_langsung'		=>$sk_pangkat_atasan_langsung,
									 'daftar_nilai'		=>$daftar_nilai,
									 'cv'		=>$cv);
												 
						$this->m_berkas_kp->post($data);	
			
		
			
			
			$this->session->set_flashdata('status', "Berkas Anda <b>Berhasil</b>  di-upload");
			redirect('selesai/ijazah');
		}
	}
	
	public function reguler()
	{
		$data['menu'] = "naik_pangkat";
		$username = $this->session->userdata('username');
		$data['auth'] = $this->m_pegawai->auth($username);
		$this->template->load('template_p','naik_pangkat/v_reguler', $data);
		
		if(isset($_POST['submit'])){
			$nip   			 =  $this->input->post('nip');
			$config['upload_path']          = "./berkas_reguler/$nip/";
			$config['allowed_types']        = 'jpg|png|docx|doc|pdf';

			$this->load->library('upload', $config);
			
			if (!is_dir($nip)) {
				mkdir("./berkas_reguler/$nip", 0755, TRUE);
			}
			$instansi   			 =  $this->input->post('instansi');
			$jenis_kp   			 =  "reguler";
			
			if ($this->upload->do_upload('fc_karpeg')) {
			$fc_karpeg 		 = $this->upload->data('file_name');
			} else { 
			$fc_karpeg = "";	
			}
			
			if ($this->upload->do_upload('fc_konversi_nip')) {
			$fc_konversi_nip 		 = $this->upload->data('file_name');
			} else { 
			$fc_konversi_nip = "";	
			}
			
			if ($this->upload->do_upload('fc_cpns_pns')) {
			$fc_cpns_pns 		 = $this->upload->data('file_name');
			} else { 
			$fc_cpns_pns = "";	
			}
			
			if ($this->upload->do_upload('fc_kp_terakhir')) {
			$fc_kp_terakhir 		 = $this->upload->data('file_name');
			} else { 
			$fc_kp_terakhir = "";	
			}
			
			if ($this->upload->do_upload('sk_tugas_belajar')) {
			$sk_tugas_belajar 		 = $this->upload->data('file_name');
			} else { 
			$sk_tugas_belajar = "";	
			}
			
			if ($this->upload->do_upload('fc_pengembalian_kampus')) {
			$fc_pengembalian_kampus 		 = $this->upload->data('file_name');
			} else { 
			$fc_pengembalian_kampus = "";	
			}
			
			if ($this->upload->do_upload('fc_ijazah')) {
			$fc_ijazah 		 = $this->upload->data('file_name');
			} else { 
			$fc_ijazah = "";	
			}
			
			if ($this->upload->do_upload('fc_transkrip')) {
			$fc_transkrip 		 = $this->upload->data('file_name');
			} else { 
			$fc_transkrip = "";	
			}
			
			if ($this->upload->do_upload('fc_tmpt_kembali')) {
			$fc_tmpt_kembali 		 = $this->upload->data('file_name');
			} else { 
			$fc_tmpt_kembali = "";	
			}
			
			if ($this->upload->do_upload('fc_surat_tanda_lulus')) {
			$fc_surat_tanda_lulus 		 = $this->upload->data('file_name');
			} else { 
			$fc_surat_tanda_lulus = "";	
			}
			
			if ($this->upload->do_upload('uraian_tugas')) {
			$uraian_tugas 		 = $this->upload->data('file_name');
			} else { 
			$uraian_tugas = "";	
			}
			
			if ($this->upload->do_upload('skp')) {
			$skp 		 = $this->upload->data('file_name');
			} else { 
			$skp = "";	
			}
			
			if ($this->upload->do_upload('sk_pangkat_atasan_langsung')) {
			$sk_pangkat_atasan_langsung 		 = $this->upload->data('file_name');
			} else { 
			$sk_pangkat_atasan_langsung = "";	
			}
			
			if ($this->upload->do_upload('daftar_nilai')) {
			$daftar_nilai 		 = $this->upload->data('file_name');
			} else { 
			$daftar_nilai = "";	
			}
			
			if ($this->upload->do_upload('cv')) {
			$cv 		 = $this->upload->data('file_name');
			} else { 
			$cv = "";	
			}
			
			
			$data           =  array('nip' 				=>$nip,
									 'instansi'     	=>$instansi,
									 'jenis_kp'			=>$jenis_kp,
									 'fc_karpeg'		=>$fc_karpeg,
									 'fc_cpns_pns'		=>$fc_cpns_pns,
									 'fc_kp_terakhir'		=>$fc_kp_terakhir,
									 'sk_tugas_belajar'		=>$sk_tugas_belajar,
									 'fc_pengembalian_kampus'		=>$fc_pengembalian_kampus,
									 'fc_ijazah'		=>$fc_ijazah,
									 'fc_transkrip'		=>$fc_transkrip,
									 'fc_tmpt_kembali'		=>$fc_tmpt_kembali,
									 'fc_surat_tanda_lulus'		=>$fc_surat_tanda_lulus,
									 'uraian_tugas'		=>$uraian_tugas,
									 'skp'		=>$skp,
									 'sk_pangkat_atasan_langsung'		=>$sk_pangkat_atasan_langsung,
									 'daftar_nilai'		=>$daftar_nilai,
									 'cv'		=>$cv);
												 
						$this->m_berkas_kp->post($data);	
			
			
			
			
			
			$this->session->set_flashdata('status', "Berkas Anda <b>Berhasil</b>  di-upload");
			redirect('selesai/reguler');
		}
	}
	
	
	public function pengumuman()
	{
		$data['menu'] = "pengumuman";
		$data['berkas_kp']=    $this->m_berkas_kp->get_pengumuman();
		$this->template->load('template_p','naik_pangkat/v_pengumuman',$data);
	}
	
	public function detail_pegawai()
	{	
		$data['menu'] = "berkas_kp";
		$nip = $this->session->userdata('nip');
		$id = $this->session->userdata('id');
		$data['pegawai']=    $this->m_pegawai->get_one_pegawai($id);
		$data['berkas_kp']=    $this->m_berkas_kp->get_detail_pegawai($nip);
		$this->template->load('template_p','naik_pangkat/v_detail_pegawai', $data);
		
	}
	
	public function kirim($key)
	{	
		$status   			 =  "terkirim";
		$data           =  array('status' =>$status);
								 
		$this->m_berkas_kp->status($data, $key);	
		$this->session->set_flashdata('status', "Berkas ini <b>Berhasil</b> di kirim");
		redirect('naik_pangkat');
		
	}
}
