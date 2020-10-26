<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		
		
		
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Selesai Upload Berkas Jabatan Struktural</div>
					<div class="panel-body">
					<div class="alert bg-info" role="alert">
					<h4>
					<svg class="glyph stroked star"><use xlink:href="#stroked-star"/></svg>
					Anda telah <b>berhasil</b> upload berkas kenaikan pangkat Anda. Berikut adalah file-file yang telah di upload dan yang belum. 
					</h4>
					</div>
					
						<?php foreach ($pegawai->result() as $p) { ?>
						
							<table class="table  table-bordered col-lg-4 text-capitalize">
				
			<tr>
				<th>Nama Pegawai</th>
				<td><?php echo $p->nama ?></td>
			</tr>	
			<tr>
				<th>NIP</td>
				<td><?php echo $p->nip ?></td>
			</tr>
			<tr>
				<th>Instansi</td>
				<td><?php echo $p->nama_unit_kerja ?></td>
			</tr>	
						
			
						</table>
						<?php } ?>		
			
			<h4>Silahkan periksa file terlebih dahulu, Anda juga dapat mengganti file yang telah di upload
			<a href="<?php echo base_url('edit_berkas/struktural');?>" class="btn btn-primary btn-md">Disini</a>
			</h4>
			
			<table class="table  table-bordered col-lg-4 text-capitalize">
				
				<?php foreach ($berkas_kp->result() as $r) { ?>
				
			<tr>
				<th>Jenis Kenaikan Pangkat</th>
				<td><?php echo $r->jenis_kp ?></td>
			</tr>		
			
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
			?> 
			<tr>
				<th>Fotokopi SAH KARPEG / KPE (LEGALISIR)</th>
				<td>
				<?php if ($r->fc_karpeg != "") { ?>
				<a target="_blank" href="<?=base_url("$path/$nip");?>/<?php echo $r->fc_karpeg ?>" class="btn btn-primary btn-md">Lihat</a>
				<?php } else { ?> 
				<span class="label label-danger">Belum di upload</span>
				<?php } ?>
				</td>
			</tr>	
			
			<tr>
				<th>Fotokopi SAH KONVERSI NIP (LEGALISIR)</th>
				<td>
				<?php if ($r->fc_konversi_nip != "") { ?>
				<a target="_blank" href="<?=base_url("$path/$nip");?>/<?php echo $r->fc_konversi_nip ?>" class="btn btn-primary btn-md">Lihat</a>
				<?php } else { ?> 
				<span class="label label-danger">Belum di upload</span>
				<?php } ?>
				</td>
			</tr>	
			
			<tr>
				<th>Fotokopi SAH CPNS DAN PNS (LEGALISIR)</th>
				<td>
				<?php if ($r->fc_cpns_pns != "") { ?>
				<a target="_blank" href="<?=base_url("$path/$nip");?>/<?php echo $r->fc_cpns_pns ?>" class="btn btn-primary btn-md">Lihat</a>
				<?php } else { ?> 
				<span class="label label-danger">Belum di upload</span>
				<?php } ?>
				</td>
			</tr>	
			
			<tr>
				<th>Fotokopi SAH KENAIKAN PANGKAT TERAKHIR (LEGALISIR)</th>
				<td>
				<?php if ($r->fc_kp_terakhir != "") { ?>
				<a target="_blank" href="<?=base_url("$path/$nip");?>/<?php echo $r->fc_kp_terakhir ?>" class="btn btn-primary btn-md">Lihat</a>
				<?php } else { ?> 
				<span class="label label-danger">Belum di upload</span>
				<?php } ?>
				</td>
			</tr>	
			
			<tr>
				<th>ASLI SK TUGAS BELAJAR / ASLI IJIN BELAJAR</th>
				<td>
				<?php if ($r->sk_tugas_belajar != "") { ?>
				<a target="_blank" href="<?=base_url("$path/$nip");?>/<?php echo $r->sk_tugas_belajar ?>" class="btn btn-primary btn-md">Lihat</a>
				<?php } else { ?> 
				<span class="label label-danger">Belum di upload</span>
				<?php } ?>
				</td>
			</tr>	
			
			<tr>
				<th>Fotokopi SAH PENGEMBALIAN DARI KAMPUS</th>
				<td>
				<?php if ($r->fc_pengembalian_kampus != "") { ?>
				<a target="_blank" href="<?=base_url("$path/$nip");?>/<?php echo $r->fc_pengembalian_kampus ?>" class="btn btn-primary btn-md">Lihat</a>
				<?php } else { ?> 
				<span class="label label-danger">Belum di upload</span>
				<?php } ?>
				</td>
			</tr>	
			
			<tr>
				<th>Fotokopi SAH IJAZAH </th>
				<td>
				<?php if ($r->fc_ijazah != "") { ?>
				<a target="_blank" href="<?=base_url("$path/$nip");?>/<?php echo $r->fc_ijazah ?>" class="btn btn-primary btn-md">Lihat</a>
				<?php } else { ?> 
				<span class="label label-danger">Belum di upload</span>
				<?php } ?>
				</td>
			</tr>	
			
			<tr>
				<th>Fotokopi SAH TRANSKRIP NILAI </th>
				<td>
				<?php if ($r->fc_transkrip != "") { ?>
				<a target="_blank" href="<?=base_url("$path/$nip");?>/<?php echo $r->fc_transkrip ?>" class="btn btn-primary btn-md">Lihat</a>
				<?php } else { ?> 
				<span class="label label-danger">Belum di upload</span>
				<?php } ?>
				</td>
			</tr>	
			
			<tr>
				<th>Fotokopi SAH PENEMPATAN KEMBALI SETELAH TUGAS BELAJAR </th>
				<td>
				<?php if ($r->fc_tmpt_kembali != "") { ?>
				<a target="_blank" href="<?=base_url("$path/$nip");?>/<?php echo $r->fc_tmpt_kembali ?>" class="btn btn-primary btn-md">Lihat</a>
				<?php } else { ?> 
				<span class="label label-danger">Belum di upload</span>
				<?php } ?>
				</td>
			</tr>	
			
			<tr>
				<th>Fotokopi SAH SK JABATAN STRUKTURAL DAN LAMPIRANNYA</th>
				<td>
				<?php if ($r->fc_sk_jab_struktural != "") { ?>
				<a target="_blank" href="<?=base_url("$path/$nip");?>/<?php echo $r->fc_sk_jab_struktural ?>" class="btn btn-primary btn-md">Lihat</a>
				<?php } else { ?> 
				<span class="label label-danger">Belum di upload</span>
				<?php } ?>
				</td>
			</tr>	
			
			<tr>
				<th>Fotokopi SAH NASKAH PELANTIKAN</th>
				<td>
				<?php if ($r->fc_naskah_pelantikan != "") { ?>
				<a target="_blank" href="<?=base_url("$path/$nip");?>/<?php echo $r->fc_naskah_pelantikan ?>" class="btn btn-primary btn-md">Lihat</a>
				<?php } else { ?> 
				<span class="label label-danger">Belum di upload</span>
				<?php } ?>
				</td>
			</tr>	
			
			<tr>
				<th>Fotokopi SAH SURAT PERNYATAAN PELANTIKAN</th>
				<td>
				<?php if ($r->fc_sp_pelantikan != "") { ?>
				<a target="_blank" href="<?=base_url("$path/$nip");?>/<?php echo $r->fc_sp_pelantikan ?>" class="btn btn-primary btn-md">Lihat</a>
				<?php } else { ?> 
				<span class="label label-danger">Belum di upload</span>
				<?php } ?>
				</td>
			</tr>	
			
			<tr>
				<th>ASLI SURAT PERNYATAAN MASIH MENDUDUKI JABATAN (SPMJ)</th>
				<td>
				<?php if ($r->spmj != "") { ?>
				<a target="_blank" href="<?=base_url("$path/$nip");?>/<?php echo $r->spmj ?>" class="btn btn-primary btn-md">Lihat</a>
				<?php } else { ?> 
				<span class="label label-danger">Belum di upload</span>
				<?php } ?>
				</td>
			</tr>	
			
			<tr>
				<th>ASLI SKP TAHUN SEBELUM PENGANGKATAN</th>
				<td>
				<?php if ($r->skp != "") { ?>
				<a target="_blank" href="<?=base_url("$path/$nip");?>/<?php echo $r->skp ?>" class="btn btn-primary btn-md">Lihat</a>
				<?php } else { ?> 
				<span class="label label-danger">Belum di upload</span>
				<?php } ?>
				</td>
			</tr>	
			
			<tr>
				<th>ASLI SK PANGKAT ATASAN LANGSUNG</th>
				<td>
				<?php if ($r->sk_pangkat_atasan_langsung != "") { ?>
				<a target="_blank" href="<?=base_url("$path/$nip");?>/<?php echo $r->sk_pangkat_atasan_langsung ?>" class="btn btn-primary btn-md">Lihat</a>
				<?php } else { ?> 
				<span class="label label-danger">Belum di upload</span>
				<?php } ?>
				</td>
			</tr>	
			
			<tr>
				<th>DAFTAR RIWAYAT HIDUP</th>
				<td>
				<?php if ($r->cv != "") { ?>
				<a target="_blank" href="<?=base_url("$path/$nip");?>/<?php echo $r->cv ?>" class="btn btn-primary btn-md">Lihat</a>
				<?php } else { ?> 
				<span class="label label-danger">Belum di upload</span>
				<?php } ?>
				</td>
			</tr>	
			
						<?php } if ($berkas_kp->num_rows() == 0) { ?>					
			
			<tr>
				<th colspan="2" class="text-center">TIDAK ADA DATA</th>
				
			</tr>
				 <?php } ?>
			</table>			
						
			<h4>Jika sudah diperbaiki, Anda harus menekan tombol dibawah ini untuk mengirimkannya kepada Admin untuk ditindaklanjuti. Setelah itu, <b>Anda tidak dapat lagi melakukan perbaikan!</b>
			</h4>		
			<div class="form-group">		
			<a href="<?php echo base_url("naik_pangkat/kirim/".$r->id);?>" onclick="return confirm('Anda yakin ingin mengirimkan berkas ini?')" class="btn btn-danger btn-md">Kirim</a>			
			
					</div>
				</div>
			</div><!-- /.col-->
		
		
		
	</div>	<!--/.main-->