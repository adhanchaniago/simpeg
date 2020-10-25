<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class berkas_kp extends CI_Controller {
	
	

	function __construct(){
		parent::__construct();
		if (!$this->session->has_userdata('username')) {
			redirect("login");
		} else {
			if ($this->session->userdata('level') != 'admin') {
				redirect("naik_pangkat");	
			}
		}	
		$this->load->model('m_berkas_kp');
		$this->load->model('m_pegawai');
	}
	
	public function index()
	{
		$data['menu'] = "berkas_kp";
		$data['berkas_kp']=    $this->m_berkas_kp->get_all();
		$this->template->load('template','berkas_kp/v_index',$data);
	}
	
	public function cetak()
	{
		$data['menu'] = "berkas_kp";
		$data['berkas_kp']=    $this->m_berkas_kp->get_all();
		$this->load->view('berkas_kp/v_cetak',$data);
	}
	
	public function cetak_one($key)
	{	
		$data['menu'] = "berkas_kp";
		$data['berkas_kp']=    $this->m_berkas_kp->get_one($key);
		$berkas_kp	=    $this->m_berkas_kp->get_one($key);
		foreach ($berkas_kp->result() as $r) {
			$data['nama'] = $r->nama;
		}
		$this->load->view('berkas_kp/v_cetak_detail',$data);
		
	}
	
	public function get_one($key)
	{	
		$data['menu'] = "berkas_kp";
		$data['berkas_kp']=    $this->m_berkas_kp->get_one($key);
		$this->template->load('template','berkas_kp/v_detail', $data);
		
	}
	
	
	
	
	public function naik($key, $nip)
	{	
		$status   			 =  "Naik Pangkat";
		$data           =  array('status' 			=>$status);						 
		$this->m_berkas_kp->status($data, $key);	
		
		//update golongan dan pangkat
		$pegawai = $this->m_pegawai->get_nip($nip);	
		foreach ($pegawai->result() as $r) {
			$gol_akhir = $r->gol_akhir;

			switch ($gol_akhir) {
				case "I/a":		$gol_update = "I/b";	break;
				case "I/b":		$gol_update = "I/c";	break;
				case "I/c":		$gol_update = "I/d";	break;
				case "I/d":		$gol_update = "II/a";	break;
				case "II/a":	$gol_update = "II/b";	break;
				case "II/b":	$gol_update = "II/c";	break;
				case "II/c":	$gol_update = "II/d";	break;
				case "II/d":	$gol_update = "III/a";	break;
				case "III/a":	$gol_update = "III/b";	break;
				case "III/b":	$gol_update = "III/c";	break;
				case "III/c":	$gol_update = "III/d";	break;
				case "III/d":	$gol_update = "IV/a";	break;
				case "IV/a":	$gol_update = "IV/b";	break;
				case "IV/b":	$gol_update = "IV/c";	break;
				case "IV/c":	$gol_update = "IV/d";	break;
				case "IV/d":	$gol_update = "IV/e";	break;
				default: $gol_update = "";
			}
		}
		$data2           =  array('gol_akhir' 			=>$gol_update);			
		$this->m_pegawai->ganti($data2, $nip);	
			
		
		$this->session->set_flashdata('status', "Pegawai ini <b>Berhasil</b>  Naik Pangkat dari <b>$gol_akhir</b> menjadi <b>$gol_update</b>");
		redirect('berkas_kp');
			
		
	}
	
	public function tidak_naik()
	{	
		$status   			 =  "Tidak Naik";
		$key   				 =  $this->input->post('id');
		$alasan   			 =  $this->input->post('alasan');
			
			
		$data           =  array('status' 			=>$status,
								 'alasan'			=>$alasan);						 
		$this->m_berkas_kp->status($data, $key);	
		
		
			
		
		$this->session->set_flashdata('status', "Pegawai ini <b>Tidak Naik Pangkat</b> berdasarkan berkas tersebut");
		redirect('berkas_kp');
			
		
	}
	
	public function delete($key)
	{	
		$berkas_kp=    $this->m_berkas_kp->get_one($key);
		foreach ($berkas_kp->result() as $r) {
			$jenis_kp = $r->jenis_kp;
			if ($r->jenis_kp == 'struktural') {
				$path = "berkas_struktural";
			} else if ($r->jenis_kp == 'fungsional') { 
				$path = "berkas_fungsional";
			} else if ($r->jenis_kp == 'ijazah') { 
				$path = "berkas_ijazah";
			} else if ($r->jenis_kp == 'reguler') { 
				$path = "berkas_reguler";
			}	
			$x = 0;
			$nip = $r->nip;
			$fc_karpeg = $r->fc_karpeg;
			if ($fc_karpeg != "") {
				if (!unlink("$path/$nip/$fc_karpeg")) {
					echo "Error! fc_karpeg";
					$x = 1;
				}
					
			}
			$fc_konversi_nip = $r->fc_konversi_nip;
			if ($fc_konversi_nip != "") {
				if (!unlink("$path/$nip/$fc_konversi_nip")) {
					echo "Error! fc_konversi_nip";
					$x = 1;
				}
			}
			
			$fc_cpns_pns = $r->fc_cpns_pns;
			if ($fc_cpns_pns != "") {
				if (!unlink("$path/$nip/$fc_cpns_pns")) {
					echo "Error! fc_cpns_pns";
					$x = 1;
				}
			}
			
			$fc_kp_terakhir = $r->fc_kp_terakhir;
			if ($fc_kp_terakhir != "") {
				if (!unlink("$path/$nip/$fc_kp_terakhir")) {
					echo "Error! fc_kp_terakhir";
					$x = 1;
				}
			}
			
			$sk_tugas_belajar = $r->sk_tugas_belajar;
			if ($sk_tugas_belajar != "") {
				if (!unlink("$path/$nip/$sk_tugas_belajar")) {
					echo "Error! sk_tugas_belajar";
					$x = 1;
				}
			}
			
			$fc_pengembalian_kampus = $r->fc_pengembalian_kampus;
			if ($fc_pengembalian_kampus != "") {
				if (!unlink("$path/$nip/$fc_pengembalian_kampus")) {
					echo "Error! fc_pengembalian_kampus";
					$x = 1;
				}
			}
			
			$fc_ijazah = $r->fc_ijazah;
			if ($fc_ijazah != "") {
				if (!unlink("$path/$nip/$fc_ijazah")) {
					echo "Error! fc_ijazah";
					$x = 1;
				}
			}
			
			$fc_transkrip = $r->fc_transkrip;
			if ($fc_transkrip != "") {
				if (!unlink("$path/$nip/$fc_transkrip")) {
					echo "Error! fc_transkrip";
					$x = 1;
				}
			}
			
			$fc_tmpt_kembali = $r->fc_tmpt_kembali;
			if ($fc_tmpt_kembali != "") {
				if (!unlink("$path/$nip/$fc_tmpt_kembali")) {
					echo "Error! fc_tmpt_kembali";
					$x = 1;
				}
			}
			
			$fc_sk_jab_struktural = $r->fc_sk_jab_struktural;
			if ($fc_sk_jab_struktural != "") {
				if (!unlink("$path/$nip/$fc_sk_jab_struktural")) {
					echo "Error! fc_sk_jab_struktural";
					$x = 1;
				}
			}
			
			$fc_naskah_pelantikan = $r->fc_naskah_pelantikan;
			if ($fc_naskah_pelantikan != "") {
				if (!unlink("$path/$nip/$fc_naskah_pelantikan")) {
					echo "Error! fc_naskah_pelantikan";
					$x = 1;
				}	
			}
			
			$fc_sp_pelantikan = $r->fc_sp_pelantikan;
			if ($fc_sp_pelantikan != "") {
				if (!unlink("$path/$nip/$fc_sp_pelantikan")) {
					echo "Error! fc_sp_pelantikan";
					$x = 1;
				}	
			}
			
			$spmj = $r->spmj;
			if ($spmj != "") {
				if (!unlink("$path/$nip/$spmj")) {
					echo "Error! spmj";
					$x = 1;
				}	
			}
			
			$skp = $r->skp;
			if ($skp != "") {
				if (!unlink("$path/$nip/$skp")) {
					echo "Error! skp";
					$x = 1;
				}	
			}
			
			$cv = $r->cv;
			if ($cv != "") {
				if (!unlink("$path/$nip/$cv")) {
					echo "Error! cv";
					$x = 1;
				}	
			}
			
			$fc_sertifikat_diklat = $r->fc_sertifikat_diklat;
			if ($fc_sertifikat_diklat != "") {
				if (!unlink("$path/$nip/$fc_sertifikat_diklat")) {
					echo "Error! fc_sertifikat_diklat";
					$x = 1;
				}	
			}
			
			$fc_sk_pengangkatan_kembali = $r->fc_sk_pengangkatan_kembali;
			if ($fc_sk_pengangkatan_kembali != "") {
				if (!unlink("$path/$nip/$fc_sk_pengangkatan_kembali")) {
					echo "Error! fc_sk_pengangkatan_kembali";
					$x = 1;
				}	
			}
			
			$pak_baru = $r->pak_baru;
			if ($pak_baru != "") {
				if (!unlink("$path/$nip/$pak_baru")) {
					echo "Error! pak_baru";
					$x = 1;
				}	
			}
			
			$pak_lama = $r->pak_lama;
			if ($pak_lama != "") {
				if (!unlink("$path/$nip/$pak_lama")) {
					echo "Error! pak_lama";
					$x = 1;
				}	
			}
			
			$sk_pangkat_atasan_langsung = $r->sk_pangkat_atasan_langsung;
			if ($sk_pangkat_atasan_langsung != "") {
				if (!unlink("$path/$nip/$sk_pangkat_atasan_langsung")) {
					echo "Error! sk_pangkat_atasan_langsung";
					$x = 1;
				}	
			}
			
			$fc_surat_tanda_lulus = $r->fc_surat_tanda_lulus;
			if ($fc_surat_tanda_lulus != "") {
				if (!unlink("$path/$nip/$fc_surat_tanda_lulus")) {
					echo "Error! fc_surat_tanda_lulus";
					$x = 1;
				}	
			}
			
			$uraian_tugas = $r->uraian_tugas;
			if ($uraian_tugas != "") {
				if (!unlink("$path/$nip/$uraian_tugas")) {
					echo "Error! uraian_tugas";
					$x = 1;
				}		
			}
			
			$fc_sk_pengangkatan = $r->fc_sk_pengangkatan;
			if ($fc_sk_pengangkatan != "") {
				if (!unlink("$path/$nip/$fc_sk_pengangkatan")) {
					echo "Error! fc_sk_pengangkatan";
					$x = 1;
				}	
			}
			
			$daftar_nilai = $r->daftar_nilai;
			if ($daftar_nilai != "") {
				if (!unlink("$path/$nip/$daftar_nilai")) {
					echo "Error! daftar_nilai";
					$x = 1;
				}	
			}
			
		}
		if ($x == 0) {
			rmdir("$path/$nip");
			$this->m_berkas_kp->delete($key);
			redirect('berkas_kp');
		}
		
	}
	
	
	
	
}	