<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		
		
		
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Detail Berkas Kenaikan Pangkat</div>
					<div class="panel-body">
					
					<div class="form-group pull-left">
						<a href="<?php echo base_url("berkas_kp");?>" class="btn btn-success btn-md">KEMBALI</a>
					</div>
					
						<?php foreach ($berkas_kp->result() as $r) { ?>
						
							<table class="table  table-bordered col-lg-4 text-capitalize">
				
			<tr>
				<th>Nama Pegawai</th>
				<td><?php echo $r->nama ?></td>
			</tr>	
			<tr>
				<th>NIP</td>
				<td><?php echo $r->nip ?></td>
			</tr>
			<tr>
				<th>Instansi</td>
				<td><?php echo $r->instansi ?></td>
			</tr>	
			<tr>
				<th>Jenis Kenaikan Pangkat</td>
				<td><?php echo $r->jenis_kp ?></td>
			</tr>				
			
						</table>
						
						<table class="table table-responsive table-bordered">
						    <thead>
						    <tr class="tb-head">
						        <th >No.</th>
						        <th >Nama Berkas</th>
						        <th style="width:200px">Action</th>
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
				<td><a href="<?=base_url("$path/$nip");?>/<?php echo $r->fc_karpeg ?>" class="btn btn-warna btn-md">Download</a></td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->fc_konversi_nip != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH KONVERSI NIP (LEGALISIR)</th>
				<td><a href="<?=base_url("$path/$nip");?>/<?php echo $r->fc_konversi_nip ?>" class="btn btn-warna btn-md">Download</a></td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->fc_cpns_pns != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH CPNS DAN PNS (LEGALISIR)</th>
				<td><a href="<?=base_url("$path/$nip");?>/<?php echo $r->fc_cpns_pns ?>" class="btn btn-warna btn-md">Download</a></td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->fc_kp_terakhir != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH KENAIKAN PANGKAT TERAKHIR (LEGALISIR)</th>
				<td><a href="<?=base_url("$path/$nip");?>/<?php echo $r->fc_kp_terakhir ?>" class="btn btn-warna btn-md">Download</a></td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->fc_sertifikat_diklat != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH SERTIFIKAT DIKLAT SESUAI JENJANG JFT YANG DIISYARATKAN</th>
				<td><a href="<?=base_url("$path/$nip");?>/<?php echo $r->fc_sertifikat_diklat  ?>" class="btn btn-warna btn-md">Download</a></td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->fc_sk_pengangkatan != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH SK PENGANGKATAN PERTAMA DALAM JABATAN FUNGSIONAL</th>
				<td><a href="<?=base_url("$path/$nip");?>/<?php echo $r->fc_sk_pengangkatan  ?>" class="btn btn-warna btn-md">Download</a></td>
			</tr>	
			<?php } ?>
			
			
			
			<?php if ($r->sk_tugas_belajar != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>ASLI SK TUGAS BELAJAR / ASLI IJIN BELAJAR</th>
				<td><a href="<?=base_url("$path/$nip");?>/<?php echo $r->sk_tugas_belajar ?>" class="btn btn-primary btn-md">Download</a></td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->fc_pengembalian_kampus != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH PENGEMBALIAN DARI KAMPUS</th>
				<td><a href="<?=base_url("$path/$nip");?>/<?php echo $r->fc_pengembalian_kampus ?>" class="btn btn-primary btn-md">Download</a></td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->fc_ijazah != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH IJAZAH </th>
				<td><a href="<?=base_url("$path/$nip");?>/<?php echo $r->fc_ijazah ?>" class="btn btn-primary btn-md">Download</a></td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->fc_transkrip != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH TRANSKRIP NILAI </th>
				<td><a href="<?=base_url("$path/$nip");?>/<?php echo $r->fc_transkrip ?>" class="btn btn-primary btn-md">Download</a></td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->fc_sk_pengangkatan_kembali != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH SK PENGANGKATAN KEMBALI DALAM JABATAN JFT SETELAH TUGAS BELAJAR</th>
				<td><a href="<?=base_url("$path/$nip");?>/<?php echo $r->fc_sk_pengangkatan_kembali ?>" class="btn btn-primary btn-md">Download</a></td>
			</tr>	
			<?php } ?>
			
			
			<?php if ($r->pak_baru != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>ASLI PENETAPAN ANGKA KREDIT (PAK) BARU</th>
				<td><a href="<?=base_url("$path/$nip");?>/<?php echo $r->pak_baru ?>" class="btn btn-primary btn-md">Download</a></td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->pak_lama != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH PENETAPAN ANGKA KREDIT (PAK) LAMA</th>
				<td><a href="<?=base_url("$path/$nip");?>/<?php echo $r->pak_lama ?>" class="btn btn-primary btn-md">Download</a></td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->fc_tmpt_kembali != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH PENEMPATAN KEMBALI SETELAH TUGAS BELAJAR </th>
				<td><a href="<?=base_url("$path/$nip");?>/<?php echo $r->fc_tmpt_kembali ?>" class="btn btn-primary btn-md">Download</a></td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->fc_surat_tanda_lulus != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH SURAT TANDA LULUS UJIAN DINAS (STLUD)</th>
				<td><a href="<?=base_url("$path/$nip");?>/<?php echo $r->fc_surat_tanda_lulus ?>" class="btn btn-primary btn-md">Download</a></td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->uraian_tugas != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>URAIAN TUGAS YANG DITANDA TANGANI PEJABAT ES II</th>
				<td><a href="<?=base_url("$path/$nip");?>/<?php echo $r->uraian_tugas ?>" class="btn btn-primary btn-md">Download</a></td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->fc_sk_jab_struktural != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH SK JABATAN STRUKTURAL DAN LAMPIRANNYA</th>
				<td><a href="<?=base_url("$path/$nip");?>/<?php echo $r->fc_sk_jab_struktural  ?>" class="btn btn-primary btn-md">Download</a></td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->fc_naskah_pelantikan != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH NASKAH PELANTIKAN</th>
				<td><a href="<?=base_url("$path/$nip");?>/<?php echo $r->fc_naskah_pelantikan  ?>" class="btn btn-primary btn-md">Download</a></td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->fc_sp_pelantikan != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>Fotokopi SAH SURAT PERNYATAAN PELANTIKAN</th>
				<td><a href="<?=base_url("$path/$nip");?>/<?php echo $r->fc_sp_pelantikan  ?>" class="btn btn-primary btn-md">Download</a></td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->spmj != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>ASLI SURAT PERNYATAAN MASIH MENDUDUKI JABATAN (SPMJ)</th>
				<td><a href="<?=base_url("$path/$nip");?>/<?php echo $r->spmj  ?>" class="btn btn-primary btn-md">Download</a></td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->skp != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>ASLI SKP TAHUN SEBELUM PENGANGKATAN</th>
				<td><a href="<?=base_url("$path/$nip");?>/<?php echo $r->skp  ?>" class="btn btn-primary btn-md">Download</a></td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->sk_pangkat_atasan_langsung != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>ASLI SK PANGKAT ATASAN LANGSUNG</th>
				<td><a href="<?=base_url("$path/$nip");?>/<?php echo $r->sk_pangkat_atasan_langsung  ?>" class="btn btn-primary btn-md">Download</a></td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->daftar_nilai != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>DAFTAR NILAI AKADEMIK 2 (DUA) TAHUN TERAKHIR BAGI PNS YANG TUGAS BELAJAR DARI KAMPUS TEMPAT TUGAS BELAJAR</th>
				<td><a href="<?=base_url("$path/$nip");?>/<?php echo $r->daftar_nilai ?>" class="btn btn-primary btn-md">Download</a></td>
			</tr>	
			<?php } ?>
			
			<?php if ($r->cv != "") {  $no++; ?> 
			<tr>
				<th><?=$no ?></th>
				<th>DAFTAR RIWAYAT HIDUP</th>
				<td><a href="<?=base_url("$path/$nip");?>/<?php echo $r->cv  ?>" class="btn btn-primary btn-md">Download</a></td>
			</tr>	
			<?php } ?>
			
			
			
			
			
						</table>
						
						
			<?php } if (count($berkas_kp->result()) == 0) { ?>
			<table class="table table-responsive table-bordered">
			 <thead>
			<tr>
				<td colspan="6" class="text-center"><b>TIDAK ADA DATA</b></td>
			</tr>	
			</thead>	
						<?php } ?>	
					</div>
				</div>
			</div><!-- /.col-->
		
		
		
	</div>	<!--/.main-->