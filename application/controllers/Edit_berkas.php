<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_berkas extends CI_Controller {
	
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
		$jenis_kp = "struktural";
		$data['berkas_kp'] = $this->m_berkas_kp->edit_berkas($nip, $jenis_kp);
		$this->template->load('template_p','edit_berkas/v_struktural', $data);
		
		if(isset($_POST['submit'])){
			$config['upload_path']          = "./berkas_struktural/$nip/";
			$config['allowed_types']        = 'jpg|png|docx|doc|pdf';

			$this->load->library('upload', $config);
			
			
			$id   			 =  $this->input->post('id');
			$instansi   			 =  $this->input->post('instansi');
			$jenis_kp   			 =  $this->input->post('jenis_kp');
			if ($jenis_kp == 'struktural') {
				$path = "berkas_struktural";
			} else if ($jenis_kp == 'fungsional') { 
				$path = "berkas_fungsional";
			} else if ($jenis_kp == 'ijazah') { 
				$path = "berkas_ijazah";
			} else if ($jenis_kp == 'reguler') { 
				$path = "berkas_reguler";
			}	
			$nip   			 =  $this->input->post('nip');
			
			
			$fc_karpeg_hid = $this->input->post('fc_karpeg_hid');
			if ($this->upload->do_upload('fc_karpeg')) {
			$fc_karpeg 		 = $this->upload->data('file_name');
				if ($fc_karpeg_hid != "") {
					$dir_del ="$path/$nip/$fc_karpeg_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_karpeg = $fc_karpeg_hid;
			}
			
			$fc_konversi_nip_hid = $this->input->post('fc_konversi_nip_hid');
			if ($this->upload->do_upload('fc_konversi_nip')) {
			$fc_konversi_nip 		 = $this->upload->data('file_name');
				if ($fc_konversi_nip_hid != "") {
					$dir_del ="$path/$nip/$fc_konversi_nip_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_konversi_nip = $fc_konversi_nip_hid;
			}
			
			$fc_cpns_pns_hid = $this->input->post('fc_cpns_pns_hid');
			if ($this->upload->do_upload('fc_cpns_pns')) {
			$fc_cpns_pns 		 = $this->upload->data('file_name');
				if ($fc_cpns_pns_hid != "") {
					$dir_del ="$path/$nip/$fc_cpns_pns_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_cpns_pns = $fc_cpns_pns_hid;
			}
			
			
			$fc_kp_terakhir_hid = $this->input->post('fc_kp_terakhir_hid');
			if ($this->upload->do_upload('fc_kp_terakhir')) {
			$fc_kp_terakhir 		 = $this->upload->data('file_name');
				if ($fc_kp_terakhir_hid != "") {
					$dir_del ="$path/$nip/$fc_kp_terakhir_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_kp_terakhir = $fc_kp_terakhir_hid;
			}
			
			$sk_tugas_belajar_hid = $this->input->post('sk_tugas_belajar_hid');
			if ($this->upload->do_upload('sk_tugas_belajar')) {
			$sk_tugas_belajar 		 = $this->upload->data('file_name');
				if ($sk_tugas_belajar_hid != "") {
					$dir_del ="$path/$nip/$sk_tugas_belajar_hid";
					unlink ($dir_del);
				}
			} else {
				$sk_tugas_belajar = $sk_tugas_belajar_hid;
			}
			
			$fc_pengembalian_kampus_hid = $this->input->post('fc_pengembalian_kampus_hid');
			if ($this->upload->do_upload('fc_pengembalian_kampus')) {
			$fc_pengembalian_kampus 		 = $this->upload->data('file_name');
				if ($fc_pengembalian_kampus_hid != "") {
					$dir_del ="$path/$nip/$fc_pengembalian_kampus_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_pengembalian_kampus = $fc_pengembalian_kampus_hid;
			}
			
			
			$fc_ijazah_hid = $this->input->post('fc_ijazah_hid');
			if ($this->upload->do_upload('fc_ijazah')) {
			$fc_ijazah 		 = $this->upload->data('file_name');
				if ($fc_ijazah_hid != "") {
					$dir_del ="$path/$nip/$fc_ijazah_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_ijazah = $fc_ijazah_hid;
			}
			
			$fc_transkrip_hid = $this->input->post('fc_transkrip_hid');
			if ($this->upload->do_upload('fc_transkrip')) {
			$fc_transkrip 		 = $this->upload->data('file_name');
				if ($fc_transkrip_hid != "") {
					$dir_del ="$path/$nip/$fc_transkrip_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_transkrip = $fc_transkrip_hid;
			}
			
			
			$fc_tmpt_kembali_hid = $this->input->post('fc_tmpt_kembali_hid');
			if ($this->upload->do_upload('fc_tmpt_kembali')) {
			$fc_tmpt_kembali 		 = $this->upload->data('file_name');
				if ($fc_tmpt_kembali_hid != "") {
					$dir_del ="$path/$nip/$fc_tmpt_kembali_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_tmpt_kembali = $fc_tmpt_kembali_hid;
			}
			
			$fc_sk_jab_struktural_hid = $this->input->post('fc_sk_jab_struktural_hid');
			if ($this->upload->do_upload('fc_sk_jab_struktural')) {
			$fc_sk_jab_struktural 		 = $this->upload->data('file_name');
				if ($fc_sk_jab_struktural_hid != "") {
					$dir_del ="$path/$nip/$fc_sk_jab_struktural_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_sk_jab_struktural = $fc_sk_jab_struktural_hid;
			}
			
			$fc_naskah_pelantikan_hid = $this->input->post('fc_naskah_pelantikan_hid');
			if ($this->upload->do_upload('fc_naskah_pelantikan')) {
			$fc_naskah_pelantikan 		 = $this->upload->data('file_name');
				if ($fc_naskah_pelantikan_hid != "") {
					$dir_del ="$path/$nip/$fc_naskah_pelantikan_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_naskah_pelantikan = $fc_naskah_pelantikan_hid;
			}
			
			$fc_sp_pelantikan_hid = $this->input->post('fc_sp_pelantikan_hid');
			if ($this->upload->do_upload('fc_naskah_pelantikan')) {
			$fc_sp_pelantikan 		 = $this->upload->data('file_name');
				if ($fc_sp_pelantikan_hid != "") {
					$dir_del ="$path/$nip/$fc_sp_pelantikan_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_sp_pelantikan = $fc_sp_pelantikan_hid;
			}
			
			$spmj_hid = $this->input->post('spmj_hid');
			if ($this->upload->do_upload('spmj')) {
			$spmj 		 = $this->upload->data('file_name');
				if ($spmj_hid != "") {
					$dir_del ="$path/$nip/$spmj_hid";
					unlink ($dir_del);
				}
			} else {
				$spmj = $spmj_hid;
			}
			
			
			$skp_hid = $this->input->post('skp_hid');
			if ($this->upload->do_upload('skp')) {
			$skp 		 = $this->upload->data('file_name');
				if ($skp_hid != "") {
					$dir_del ="$path/$nip/$skp_hid";
					unlink ($dir_del);
				}
			} else {
				$skp = $skp_hid;
			}
			
			
			$sk_pangkat_atasan_langsung_hid = $this->input->post('sk_pangkat_atasan_langsung_hid');
			if ($this->upload->do_upload('sk_pangkat_atasan_langsung')) {
			$sk_pangkat_atasan_langsung 		 = $this->upload->data('file_name');
				if ($sk_pangkat_atasan_langsung_hid != "") {
					$dir_del ="$path/$nip/$sk_pangkat_atasan_langsung_hid";
					unlink ($dir_del);
				}
			} else {
				$sk_pangkat_atasan_langsung = $sk_pangkat_atasan_langsung_hid;
			}
			
			
			$cv_hid = $this->input->post('cv_hid');
			if ($this->upload->do_upload('cv')) {
			$cv 		 = $this->upload->data('file_name');
				if ($cv_hid != "") {
					$dir_del ="$path/$nip/$cv_hid";
					unlink ($dir_del);
				}
			} else {
				$cv = $cv_hid;
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
												 
						$this->m_berkas_kp->proses_edit($data, $id);	
						
			$this->session->set_flashdata('status', "Berkas Anda <b>Berhasil</b>  di-edit");
			redirect('naik_pangkat');
		}	
		
	}
	
	public function fungsional()
	{
		$data['menu'] = "berkas_kp";
		$nip = $this->session->userdata('nip');
		$jenis_kp = "fungsional";
		$data['berkas_kp'] = $this->m_berkas_kp->edit_berkas($nip, $jenis_kp);
		$this->template->load('template_p','edit_berkas/v_fungsional', $data);
		
		if(isset($_POST['submit'])){
			$config['upload_path']          = "./berkas_fungsional/$nip/";
			$config['allowed_types']        = 'jpg|png|docx|doc|pdf';

			$this->load->library('upload', $config);
			
			
			$id   			 =  $this->input->post('id');
			$instansi   			 =  $this->input->post('instansi');
			$jenis_kp   			 =  $this->input->post('jenis_kp');
			if ($jenis_kp == 'struktural') {
				$path = "berkas_struktural";
			} else if ($jenis_kp == 'fungsional') { 
				$path = "berkas_fungsional";
			} else if ($jenis_kp == 'ijazah') { 
				$path = "berkas_ijazah";
			} else if ($jenis_kp == 'reguler') { 
				$path = "berkas_reguler";
			}	
			$nip   			 =  $this->input->post('nip');
			
			$fc_karpeg_hid = $this->input->post('fc_karpeg_hid');
			if ($this->upload->do_upload('fc_karpeg')) {
			$fc_karpeg 		 = $this->upload->data('file_name');
				if ($fc_karpeg_hid != "") {
					$dir_del ="$path/$nip/$fc_karpeg_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_karpeg = $fc_karpeg_hid;
			}
			
			$fc_konversi_nip_hid = $this->input->post('fc_konversi_nip_hid');
			if ($this->upload->do_upload('fc_konversi_nip')) {
			$fc_konversi_nip 		 = $this->upload->data('file_name');
				if ($fc_konversi_nip_hid != "") {
					$dir_del ="$path/$nip/$fc_konversi_nip_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_konversi_nip = $fc_konversi_nip_hid;
			}
			
			$fc_cpns_pns_hid = $this->input->post('fc_cpns_pns_hid');
			if ($this->upload->do_upload('fc_cpns_pns')) {
			$fc_cpns_pns 		 = $this->upload->data('file_name');
				if ($fc_cpns_pns_hid != "") {
					$dir_del ="$path/$nip/$fc_cpns_pns_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_cpns_pns = $fc_cpns_pns_hid;
			}
			
			
			$fc_kp_terakhir_hid = $this->input->post('fc_kp_terakhir_hid');
			if ($this->upload->do_upload('fc_kp_terakhir')) {
			$fc_kp_terakhir 		 = $this->upload->data('file_name');
				if ($fc_kp_terakhir_hid != "") {
					$dir_del ="$path/$nip/$fc_kp_terakhir_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_kp_terakhir = $fc_kp_terakhir_hid;
			}
			
			$fc_sertifikat_diklat_hid = $this->input->post('fc_sertifikat_diklat_hid');
			if ($this->upload->do_upload('fc_sertifikat_diklat')) {
			$fc_sertifikat_diklat 		 = $this->upload->data('file_name');
				if ($fc_sertifikat_diklat_hid != "") {
					$dir_del ="$path/$nip/$fc_sertifikat_diklat_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_sertifikat_diklat = $fc_sertifikat_diklat_hid;
			}
			
			$fc_sk_pengangkatan_hid = $this->input->post('fc_sk_pengangkatan_hid');
			if ($this->upload->do_upload('fc_sk_pengangkatan')) {
			$fc_sk_pengangkatan 		 = $this->upload->data('file_name');
				if ($fc_sk_pengangkatan_hid != "") {
					$dir_del ="$path/$nip/$fc_sk_pengangkatan_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_sk_pengangkatan = $fc_sk_pengangkatan_hid;
			}
			
			$sk_tugas_belajar_hid = $this->input->post('sk_tugas_belajar_hid');
			if ($this->upload->do_upload('sk_tugas_belajar')) {
			$sk_tugas_belajar 		 = $this->upload->data('file_name');
				if ($sk_tugas_belajar_hid != "") {
					$dir_del ="$path/$nip/$sk_tugas_belajar_hid";
					unlink ($dir_del);
				}
			} else {
				$sk_tugas_belajar = $sk_tugas_belajar_hid;
			}
			
			$fc_pengembalian_kampus_hid = $this->input->post('fc_pengembalian_kampus_hid');
			if ($this->upload->do_upload('fc_pengembalian_kampus')) {
			$fc_pengembalian_kampus 		 = $this->upload->data('file_name');
				if ($fc_pengembalian_kampus_hid != "") {
					$dir_del ="$path/$nip/$fc_pengembalian_kampus_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_pengembalian_kampus = $fc_pengembalian_kampus_hid;
			}
			
			
			$fc_ijazah_hid = $this->input->post('fc_ijazah_hid');
			if ($this->upload->do_upload('fc_ijazah')) {
			$fc_ijazah 		 = $this->upload->data('file_name');
				if ($fc_ijazah_hid != "") {
					$dir_del ="$path/$nip/$fc_ijazah_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_ijazah = $fc_ijazah_hid;
			}
			
			$fc_transkrip_hid = $this->input->post('fc_transkrip_hid');
			if ($this->upload->do_upload('fc_transkrip')) {
			$fc_transkrip 		 = $this->upload->data('file_name');
				if ($fc_transkrip_hid != "") {
					$dir_del ="$path/$nip/$fc_transkrip_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_transkrip = $fc_transkrip_hid;
			}
			
			
			$fc_tmpt_kembali_hid = $this->input->post('fc_tmpt_kembali_hid');
			if ($this->upload->do_upload('fc_tmpt_kembali')) {
			$fc_tmpt_kembali 		 = $this->upload->data('file_name');
				if ($fc_tmpt_kembali_hid != "") {
					$dir_del ="$path/$nip/$fc_tmpt_kembali_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_tmpt_kembali = $fc_tmpt_kembali_hid;
			}
			
			$fc_sk_pengangkatan_kembali_hid = $this->input->post('fc_sk_pengangkatan_kembali_hid');
			if ($this->upload->do_upload('fc_sk_pengangkatan_kembali')) {
			$fc_sk_pengangkatan_kembali 		 = $this->upload->data('file_name');
				if ($fc_sk_pengangkatan_kembali_hid != "") {
					$dir_del ="$path/$nip/$fc_sk_pengangkatan_kembali_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_sk_pengangkatan_kembali = $fc_sk_pengangkatan_kembali_hid;
			}
			
			$pak_baru_hid = $this->input->post('pak_baru_hid');
			if ($this->upload->do_upload('pak_baru')) {
			$pak_baru 		 = $this->upload->data('file_name');
				if ($pak_baru_hid != "") {
					$dir_del ="$path/$nip/$pak_baru_hid";
					unlink ($dir_del);
				}
			} else {
				$pak_baru = $pak_baru_hid;
			}
			
			$pak_lama_hid = $this->input->post('pak_lama_hid');
			if ($this->upload->do_upload('pak_lama')) {
			$pak_lama 		 = $this->upload->data('file_name');
				if ($pak_lama_hid != "") {
					$dir_del ="$path/$nip/$pak_lama_hid";
					unlink ($dir_del);
				}
			} else {
				$pak_lama = $pak_lama_hid;
			}
			
			
			
			$skp_hid = $this->input->post('skp_hid');
			if ($this->upload->do_upload('skp')) {
			$skp 		 = $this->upload->data('file_name');
				if ($skp_hid != "") {
					$dir_del ="$path/$nip/$skp_hid";
					unlink ($dir_del);
				}
			} else {
				$skp = $skp_hid;
			}
			
			
			$sk_pangkat_atasan_langsung_hid = $this->input->post('sk_pangkat_atasan_langsung_hid');
			if ($this->upload->do_upload('sk_pangkat_atasan_langsung')) {
			$sk_pangkat_atasan_langsung 		 = $this->upload->data('file_name');
				if ($sk_pangkat_atasan_langsung_hid != "") {
					$dir_del ="$path/$nip/$sk_pangkat_atasan_langsung_hid";
					unlink ($dir_del);
				}
			} else {
				$sk_pangkat_atasan_langsung = $sk_pangkat_atasan_langsung_hid;
			}
			
			
			$cv_hid = $this->input->post('cv_hid');
			if ($this->upload->do_upload('cv')) {
			$cv 		 = $this->upload->data('file_name');
				if ($cv_hid != "") {
					$dir_del ="$path/$nip/$cv_hid";
					unlink ($dir_del);
				}
			} else {
				$cv = $cv_hid;
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
												 
						$this->m_berkas_kp->proses_edit($data, $id);	
			
		
			
			$this->session->set_flashdata('status', "Berkas Anda <b>Berhasil</b>  di-edit");
			redirect('naik_pangkat');
		}	
	}
	
	
	public function ijazah()
	{
		$data['menu'] = "berkas_kp";
		$nip = $this->session->userdata('nip');
		$jenis_kp = "ijazah";
		$data['berkas_kp'] = $this->m_berkas_kp->edit_berkas($nip, $jenis_kp);
		$this->template->load('template_p','edit_berkas/v_ijazah', $data);
		
		if(isset($_POST['submit'])){
			$config['upload_path']          = "./berkas_ijazah/$nip/";
			$config['allowed_types']        = 'jpg|png|docx|doc|pdf';

			$this->load->library('upload', $config);
			
			
			$id   			 =  $this->input->post('id');
			$instansi   			 =  $this->input->post('instansi');
			$jenis_kp   			 =  $this->input->post('jenis_kp');
			if ($jenis_kp == 'struktural') {
				$path = "berkas_struktural";
			} else if ($jenis_kp == 'fungsional') { 
				$path = "berkas_fungsional";
			} else if ($jenis_kp == 'ijazah') { 
				$path = "berkas_ijazah";
			} else if ($jenis_kp == 'reguler') { 
				$path = "berkas_reguler";
			}	
			$nip   			 =  $this->input->post('nip');
			
			$fc_karpeg_hid = $this->input->post('fc_karpeg_hid');
			if ($this->upload->do_upload('fc_karpeg')) {
			$fc_karpeg 		 = $this->upload->data('file_name');
				if ($fc_karpeg_hid != "") {
					$dir_del ="$path/$nip/$fc_karpeg_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_karpeg = $fc_karpeg_hid;
			}
			
			
			
			$fc_cpns_pns_hid = $this->input->post('fc_cpns_pns_hid');
			if ($this->upload->do_upload('fc_cpns_pns')) {
			$fc_cpns_pns 		 = $this->upload->data('file_name');
				if ($fc_cpns_pns_hid != "") {
					$dir_del ="$path/$nip/$fc_cpns_pns_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_cpns_pns = $fc_cpns_pns_hid;
			}
			
			
			$fc_kp_terakhir_hid = $this->input->post('fc_kp_terakhir_hid');
			if ($this->upload->do_upload('fc_kp_terakhir')) {
			$fc_kp_terakhir 		 = $this->upload->data('file_name');
				if ($fc_kp_terakhir_hid != "") {
					$dir_del ="$path/$nip/$fc_kp_terakhir_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_kp_terakhir = $fc_kp_terakhir_hid;
			}
			
			
			
			$sk_tugas_belajar_hid = $this->input->post('sk_tugas_belajar_hid');
			if ($this->upload->do_upload('sk_tugas_belajar')) {
			$sk_tugas_belajar 		 = $this->upload->data('file_name');
				if ($sk_tugas_belajar_hid != "") {
					$dir_del ="$path/$nip/$sk_tugas_belajar_hid";
					unlink ($dir_del);
				}
			} else {
				$sk_tugas_belajar = $sk_tugas_belajar_hid;
			}
			
			$fc_pengembalian_kampus_hid = $this->input->post('fc_pengembalian_kampus_hid');
			if ($this->upload->do_upload('fc_pengembalian_kampus')) {
			$fc_pengembalian_kampus 		 = $this->upload->data('file_name');
				if ($fc_pengembalian_kampus_hid != "") {
					$dir_del ="$path/$nip/$fc_pengembalian_kampus_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_pengembalian_kampus = $fc_pengembalian_kampus_hid;
			}
			
			
			$fc_ijazah_hid = $this->input->post('fc_ijazah_hid');
			if ($this->upload->do_upload('fc_ijazah')) {
			$fc_ijazah 		 = $this->upload->data('file_name');
				if ($fc_ijazah_hid != "") {
					$dir_del ="$path/$nip/$fc_ijazah_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_ijazah = $fc_ijazah_hid;
			}
			
			$fc_transkrip_hid = $this->input->post('fc_transkrip_hid');
			if ($this->upload->do_upload('fc_transkrip')) {
			$fc_transkrip 		 = $this->upload->data('file_name');
				if ($fc_transkrip_hid != "") {
					$dir_del ="$path/$nip/$fc_transkrip_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_transkrip = $fc_transkrip_hid;
			}
			
			
			$fc_tmpt_kembali_hid = $this->input->post('fc_tmpt_kembali_hid');
			if ($this->upload->do_upload('fc_tmpt_kembali')) {
			$fc_tmpt_kembali 		 = $this->upload->data('file_name');
				if ($fc_tmpt_kembali_hid != "") {
					$dir_del ="$path/$nip/$fc_tmpt_kembali_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_tmpt_kembali = $fc_tmpt_kembali_hid;
			}
			
			$fc_surat_tanda_lulus_hid = $this->input->post('fc_surat_tanda_lulus_hid');
			if ($this->upload->do_upload('fc_surat_tanda_lulus')) {
			$fc_surat_tanda_lulus 		 = $this->upload->data('file_name');
				if ($fc_surat_tanda_lulus_hid != "") {
					$dir_del ="$path/$nip/$fc_surat_tanda_lulus_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_surat_tanda_lulus = $fc_surat_tanda_lulus_hid;
			}
			
			$uraian_tugas_hid = $this->input->post('uraian_tugas_hid');
			if ($this->upload->do_upload('uraian_tugas')) {
			$uraian_tugas 		 = $this->upload->data('file_name');
				if ($uraian_tugas_hid != "") {
					$dir_del ="$path/$nip/$uraian_tugas_hid";
					unlink ($dir_del);
				}
			} else {
				$uraian_tugas = $uraian_tugas_hid;
			}
			
			
			
			$skp_hid = $this->input->post('skp_hid');
			if ($this->upload->do_upload('skp')) {
			$skp 		 = $this->upload->data('file_name');
				if ($skp_hid != "") {
					$dir_del ="$path/$nip/$skp_hid";
					unlink ($dir_del);
				}
			} else {
				$skp = $skp_hid;
			}
			
			
			$sk_pangkat_atasan_langsung_hid = $this->input->post('sk_pangkat_atasan_langsung_hid');
			if ($this->upload->do_upload('sk_pangkat_atasan_langsung')) {
			$sk_pangkat_atasan_langsung 		 = $this->upload->data('file_name');
				if ($sk_pangkat_atasan_langsung_hid != "") {
					$dir_del ="$path/$nip/$sk_pangkat_atasan_langsung_hid";
					unlink ($dir_del);
				}
			} else {
				$sk_pangkat_atasan_langsung = $sk_pangkat_atasan_langsung_hid;
			}
			
			$daftar_nilai_hid = $this->input->post('daftar_nilai_hid');
			if ($this->upload->do_upload('daftar_nilai')) {
			$daftar_nilai 		 = $this->upload->data('file_name');
				if ($daftar_nilai_hid != "") {
					$dir_del ="$path/$nip/$daftar_nilai_hid";
					unlink ($dir_del);
				}
			} else {
				$daftar_nilai = $daftar_nilai_hid;
			}
			
			
			$cv_hid = $this->input->post('cv_hid');
			if ($this->upload->do_upload('cv')) {
			$cv 		 = $this->upload->data('file_name');
				if ($cv_hid != "") {
					$dir_del ="$path/$nip/$cv_hid";
					unlink ($dir_del);
				}
			} else {
				$cv = $cv_hid;
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
												 
						$this->m_berkas_kp->proses_edit($data, $id);	
			
			
			$this->session->set_flashdata('status', "Berkas Anda <b>Berhasil</b>  di-edit");
			redirect('naik_pangkat');
		}	
	}
	
	public function reguler()
	{
		$data['menu'] = "berkas_kp";
		$nip = $this->session->userdata('nip');
		$jenis_kp = "reguler";
		$data['berkas_kp'] = $this->m_berkas_kp->edit_berkas($nip, $jenis_kp);
		$this->template->load('template_p','edit_berkas/v_ijazah', $data);
		
		if(isset($_POST['submit'])){
			$config['upload_path']          = "./berkas_reguler/$nip/";
			$config['allowed_types']        = 'jpg|png|docx|doc|pdf';

			$this->load->library('upload', $config);
			
			
			$id   			 =  $this->input->post('id');
			$instansi   			 =  $this->input->post('instansi');
			$jenis_kp   			 =  $this->input->post('jenis_kp');
			if ($jenis_kp == 'struktural') {
				$path = "berkas_struktural";
			} else if ($jenis_kp == 'fungsional') { 
				$path = "berkas_fungsional";
			} else if ($jenis_kp == 'ijazah') { 
				$path = "berkas_ijazah";
			} else if ($jenis_kp == 'reguler') { 
				$path = "berkas_reguler";
			}	
			$nip   			 =  $this->input->post('nip');
			
			$fc_karpeg_hid = $this->input->post('fc_karpeg_hid');
			if ($this->upload->do_upload('fc_karpeg')) {
			$fc_karpeg 		 = $this->upload->data('file_name');
				if ($fc_karpeg_hid != "") {
					$dir_del ="$path/$nip/$fc_karpeg_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_karpeg = $fc_karpeg_hid;
			}
			
			
			
			$fc_cpns_pns_hid = $this->input->post('fc_cpns_pns_hid');
			if ($this->upload->do_upload('fc_cpns_pns')) {
			$fc_cpns_pns 		 = $this->upload->data('file_name');
				if ($fc_cpns_pns_hid != "") {
					$dir_del ="$path/$nip/$fc_cpns_pns_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_cpns_pns = $fc_cpns_pns_hid;
			}
			
			
			$fc_kp_terakhir_hid = $this->input->post('fc_kp_terakhir_hid');
			if ($this->upload->do_upload('fc_kp_terakhir')) {
			$fc_kp_terakhir 		 = $this->upload->data('file_name');
				if ($fc_kp_terakhir_hid != "") {
					$dir_del ="$path/$nip/$fc_kp_terakhir_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_kp_terakhir = $fc_kp_terakhir_hid;
			}
			
			
			
			$sk_tugas_belajar_hid = $this->input->post('sk_tugas_belajar_hid');
			if ($this->upload->do_upload('sk_tugas_belajar')) {
			$sk_tugas_belajar 		 = $this->upload->data('file_name');
				if ($sk_tugas_belajar_hid != "") {
					$dir_del ="$path/$nip/$sk_tugas_belajar_hid";
					unlink ($dir_del);
				}
			} else {
				$sk_tugas_belajar = $sk_tugas_belajar_hid;
			}
			
			$fc_pengembalian_kampus_hid = $this->input->post('fc_pengembalian_kampus_hid');
			if ($this->upload->do_upload('fc_pengembalian_kampus')) {
			$fc_pengembalian_kampus 		 = $this->upload->data('file_name');
				if ($fc_pengembalian_kampus_hid != "") {
					$dir_del ="$path/$nip/$fc_pengembalian_kampus_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_pengembalian_kampus = $fc_pengembalian_kampus_hid;
			}
			
			
			$fc_ijazah_hid = $this->input->post('fc_ijazah_hid');
			if ($this->upload->do_upload('fc_ijazah')) {
			$fc_ijazah 		 = $this->upload->data('file_name');
				if ($fc_ijazah_hid != "") {
					$dir_del ="$path/$nip/$fc_ijazah_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_ijazah = $fc_ijazah_hid;
			}
			
			$fc_transkrip_hid = $this->input->post('fc_transkrip_hid');
			if ($this->upload->do_upload('fc_transkrip')) {
			$fc_transkrip 		 = $this->upload->data('file_name');
				if ($fc_transkrip_hid != "") {
					$dir_del ="$path/$nip/$fc_transkrip_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_transkrip = $fc_transkrip_hid;
			}
			
			
			$fc_tmpt_kembali_hid = $this->input->post('fc_tmpt_kembali_hid');
			if ($this->upload->do_upload('fc_tmpt_kembali')) {
			$fc_tmpt_kembali 		 = $this->upload->data('file_name');
				if ($fc_tmpt_kembali_hid != "") {
					$dir_del ="$path/$nip/$fc_tmpt_kembali_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_tmpt_kembali = $fc_tmpt_kembali_hid;
			}
			
			$fc_surat_tanda_lulus_hid = $this->input->post('fc_surat_tanda_lulus_hid');
			if ($this->upload->do_upload('fc_surat_tanda_lulus')) {
			$fc_surat_tanda_lulus 		 = $this->upload->data('file_name');
				if ($fc_surat_tanda_lulus_hid != "") {
					$dir_del ="$path/$nip/$fc_surat_tanda_lulus_hid";
					unlink ($dir_del);
				}
			} else {
				$fc_surat_tanda_lulus = $fc_surat_tanda_lulus_hid;
			}
			
			$uraian_tugas_hid = $this->input->post('uraian_tugas_hid');
			if ($this->upload->do_upload('uraian_tugas')) {
			$uraian_tugas 		 = $this->upload->data('file_name');
				if ($uraian_tugas_hid != "") {
					$dir_del ="$path/$nip/$uraian_tugas_hid";
					unlink ($dir_del);
				}
			} else {
				$uraian_tugas = $uraian_tugas_hid;
			}
			
			
			
			$skp_hid = $this->input->post('skp_hid');
			if ($this->upload->do_upload('skp')) {
			$skp 		 = $this->upload->data('file_name');
				if ($skp_hid != "") {
					$dir_del ="$path/$nip/$skp_hid";
					unlink ($dir_del);
				}
			} else {
				$skp = $skp_hid;
			}
			
			
			$sk_pangkat_atasan_langsung_hid = $this->input->post('sk_pangkat_atasan_langsung_hid');
			if ($this->upload->do_upload('sk_pangkat_atasan_langsung')) {
			$sk_pangkat_atasan_langsung 		 = $this->upload->data('file_name');
				if ($sk_pangkat_atasan_langsung_hid != "") {
					$dir_del ="$path/$nip/$sk_pangkat_atasan_langsung_hid";
					unlink ($dir_del);
				}
			} else {
				$sk_pangkat_atasan_langsung = $sk_pangkat_atasan_langsung_hid;
			}
			
			$daftar_nilai_hid = $this->input->post('daftar_nilai_hid');
			if ($this->upload->do_upload('daftar_nilai')) {
			$daftar_nilai 		 = $this->upload->data('file_name');
				if ($daftar_nilai_hid != "") {
					$dir_del ="$path/$nip/$daftar_nilai_hid";
					unlink ($dir_del);
				}
			} else {
				$daftar_nilai = $daftar_nilai_hid;
			}
			
			
			$cv_hid = $this->input->post('cv_hid');
			if ($this->upload->do_upload('cv')) {
			$cv 		 = $this->upload->data('file_name');
				if ($cv_hid != "") {
					$dir_del ="$path/$nip/$cv_hid";
					unlink ($dir_del);
				}
			} else {
				$cv = $cv_hid;
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
												 
						$this->m_berkas_kp->proses_edit($data, $id);	
			
			
			$this->session->set_flashdata('status', "Berkas Anda <b>Berhasil</b>  di-edit");
			redirect('naik_pangkat');
		}
	}
}
