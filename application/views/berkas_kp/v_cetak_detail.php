<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LAPORAN KENAIKAN PANGKAT  <?php echo strtoupper($nama) ?></title>

<link href="<?php echo base_url();?>assets/css/print.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body class="print" onLoad="window.print()">  
<div style="width:1000px;" class="preview">
	<div class="title">
	<span style="float:left">
		<img class="logo" style="width:100px" src="<?php echo base_url(); ?>assets/mansel.png">
	</span>
	<b>DETAIL KENAIKAN PANGKAT PEGAWAI</b><br>
	<b>BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA</b><br>
	<b>KABUPATEN MANOKWARI SELATAN</b><br>
	<small>Alamat : Jl. Soejarwo Condronegoro, SH <span style="margin-left:20px"></style>
	email : bkd_mansel@yahoo.co.id Kode Pos : 98355
</small>	
	<div class="border"></div>
	</div>
	<?php 
			foreach ($berkas_kp->result() as $r) {
			?>	
		<table class="table1">
							
			<tr>
				<td style="width:150px">NIP</td>
				<td><?php echo $r->nip ?></td>
			</tr>
			<tr>	
				<td >Nama</td>
				<td><?php echo $r->nama ?></td>
			</tr>
			<tr>	
				<td >Jenis Jabatan</td>
				<td><?php echo $r->jenis_jabatan ?></td>
			</tr>
			<tr>	
				<td >Nama Jabatan</td>
				<td><?php echo $r->nama_jabatan ?></td>
			</tr>
			<tr>	
				<td >Unit Kerja</td>
				<td><?php echo $r->nama_unit_kerja ?></td>
			</tr>
			<tr>	
				<td >Jenis Kelamin</td>
				<td><?php if ($r->jk == "L") { echo "Laki-Laki"; } else { echo "Perempuan"; } ?></td>
			</tr>
			<tr>	
				<td >Golongan Akhir</td>
				<td><?php  echo $r->gol_akhir ?></td>
			</tr>
			<tr>	
				<td >Jenis Kenaikan Pangkat</td>
				<td><?php echo $r->jenis_kp ?></td>
			</tr>
			
						</table>
			<table class="table table-responsive table-bordered">
						    <thead>
						    <tr class="tb-head">
						        <th >No.</th>
						        <th >Nama Berkas</th>
						        <th style="width:200px">Status</th>
						    </tr>
						    </thead>
							
			<?php 
			if ($r->jenis_kp == 'struktural') {
				$path = "berkas_struktural";
			} else if ($r->jenis_kp == 'fungsional') { 
				$path = "berkas_fungsional";
			} else if ($r->jenis_kp == 'ijazah') { 
				$path = "berkas_ijazah";
			} else if ($r->jenis_kp == 'reguler') { 
				$path = "berkas_reguler";
			}	
			$nip = $r->nip;
			$no = 0;
			if ($r->fc_karpeg != "") { $no++;
			?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH KARPEG / KPE (LEGALISIR)</th>
				<td>ADA</td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->fc_konversi_nip != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH KONVERSI NIP (LEGALISIR)</th>
				<td>ADA</td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->fc_cpns_pns != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH CPNS DAN PNS (LEGALISIR)</th>
				<td>ADA</td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->fc_kp_terakhir != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH KENAIKAN PANGKAT TERAKHIR (LEGALISIR)</th>
				<td>ADA</td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->fc_sertifikat_diklat != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH SERTIFIKAT DIKLAT SESUAI JENJANG JFT YANG DIISYARATKAN</th>
				<td>ADA</td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->fc_sk_pengangkatan != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH SK PENGANGKATAN PERTAMA DALAM JABATAN FUNGSIONAL</th>
				<td>ADA</td>
			</tr>	
			<?php } ?>
			
			
			
			<?php if ($r->sk_tugas_belajar != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>ASLI SK TUGAS BELAJAR / ASLI IJIN BELAJAR</th>
				<td>ADA</td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->fc_pengembalian_kampus != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH PENGEMBALIAN DARI KAMPUS</th>
				<td>ADA</td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->fc_ijazah != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH IJAZAH </th>
				<td>ADA</td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->fc_transkrip != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH TRANSKRIP NILAI </th>
				<td>ADA</td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->fc_sk_pengangkatan_kembali != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH SK PENGANGKATAN KEMBALI DALAM JABATAN JFT SETELAH TUGAS BELAJAR</th>
				<td>ADA</td>
			</tr>	
			<?php } ?>
			
			
			<?php if ($r->pak_baru != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>ASLI PENETAPAN ANGKA KREDIT (PAK) BARU</th>
				<td>ADA</td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->pak_lama != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH PENETAPAN ANGKA KREDIT (PAK) LAMA</th>
				<td>ADA</td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->fc_tmpt_kembali != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH PENEMPATAN KEMBALI SETELAH TUGAS BELAJAR </th>
				<td>ADA</td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->fc_surat_tanda_lulus != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH SURAT TANDA LULUS UJIAN DINAS (STLUD)</th>
				<td>ADA</td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->uraian_tugas != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>URAIAN TUGAS YANG DITANDA TANGANI PEJABAT ES II</th>
				<td>ADA</td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->fc_sk_jab_struktural != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH SK JABATAN STRUKTURAL DAN LAMPIRANNYA</th>
				<td>ADA</td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->fc_naskah_pelantikan != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH NASKAH PELANTIKAN</th>
				<td>ADA</td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->fc_sp_pelantikan != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH SURAT PERNYATAAN PELANTIKAN</th>
				<td>ADA</td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->spmj != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>ASLI SURAT PERNYATAAN MASIH MENDUDUKI JABATAN (SPMJ)</th>
				<td>ADA</td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->skp != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>ASLI SKP TAHUN SEBELUM PENGANGKATAN</th>
				<td>ADA</td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->sk_pangkat_atasan_langsung != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>ASLI SK PANGKAT ATASAN LANGSUNG</th>
				<td>ADA</td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->daftar_nilai != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>DAFTAR NILAI AKADEMIK 2 (DUA) TAHUN TERAKHIR BAGI PNS YANG TUGAS BELAJAR DARI KAMPUS TEMPAT TUGAS BELAJAR</th>
				<td>ADA</td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->cv != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>DAFTAR RIWAYAT HIDUP</th>
				<td>ADA</td>
			</tr>	
			<?php } ?>
						</table>			
			<?php } ?>				
	<br>			
	<div class="footer">Sistem Informasi Kepegawaian</div>				
</div>	

		
</body>

</html>		