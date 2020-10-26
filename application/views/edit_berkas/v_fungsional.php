<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Edit Berkas Jabatan Fungsional</div>
					<div class="panel-body">
					
					
					
					
					<div class="alert bg-info" role="alert">
					<h4><svg class="glyph stroked upload"><use xlink:href="#stroked-upload"/></svg>
					Berkas yang di-upload boleh berformat doc, docx, jpg, png, dan pdf</h4>
					</div>
					
					
					<div class="col-lg-12 row form-group pull-left">
						<a href="<?php echo base_url("naik_pangkat/detail_pegawai");?>" class="btn btn-success btn-md">KEMBALI</a>
					</div>
						
							<form action="" method="post" enctype="multipart/form-data">
								<?php foreach ($berkas_kp->result() as $r) {?>	
								<div class="form-group row">
									<div class="col-xs-6" style="padding-left:15px;">
									<label >Nama Pegawai</label>
										<input class="form-control" name="nama" value="<?=$r->nama?>" placeholder="Nama Pegawai" readonly />
									</div>
									<div class="col-xs-6" style="padding-left:15px;">
									<label >NIP</label>
										<input class="form-control" name="nip" value="<?=$r->nip?>"  placeholder="NIP" readonly />
										<input name="id" value="<?=$r->id?>" type="hidden"  placeholder="NIP" readonly />
										<input name="jenis_kp" value="<?=$r->jenis_kp?>" type="hidden"  placeholder="NIP" readonly />
									</div>
								</div>
								<div class="form-group row">
									<div class="col-xs-12" style="padding-left:15px;">
									<label >Instansi</label>
										<input class="form-control"name="instansi" value="<?=$r->instansi?>"  placeholder="Instansi" readonly />
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-xs-12">Fotokopi Sah KARPEG / KPE (LEGALISIR)</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input value="<?=$r->fc_karpeg?>"  class="form-control" id="uploadFile1" placeholder="Fotokopi Sah KARPEG / KPE (LEGALISIR)" readonly />
										<input value="<?=$r->fc_karpeg?>"  name="fc_karpeg_hid" type="hidden" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn1" name="fc_karpeg" type="file" class="upload"  />
											
										</div>
									</div>
								</div>
																
								<div class="form-group row">
									<label class="col-xs-12">Fotokopi Sah KONVERSI NIP (LEGALISIR)</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input value="<?=$r->fc_konversi_nip?>" class="form-control" id="uploadFile2" placeholder="Fotokopi Sah KONVERSI NIP (LEGALISIR)" readonly />
										<input value="<?=$r->fc_konversi_nip?>"  name="fc_konversi_nip_hid" type="hidden" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn2"	 name="fc_konversi_nip" type="file" class="upload"  />
											
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-xs-12">Fotokopi Sah CPNS DAN PNS (LEGALISIR)</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input value="<?=$r->fc_cpns_pns?>" class="form-control" id="uploadFile3" placeholder="Fotokopi Sah CPNS DAN PNS (LEGALISIR)" readonly />
										<input value="<?=$r->fc_cpns_pns?>"  name="fc_cpns_pns_hid" type="hidden" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn3" name="fc_cpns_pns" type="file" class="upload"  />
											
										</div>
									</div>
								</div>
																
								<div class="form-group row">
									<label class="col-xs-12">Fotokopi Sah KENAIKAN PANGKAT TERAKHIR (LEGALISIR)</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input value="<?=$r->fc_kp_terakhir?>" class="form-control" id="uploadFile4" placeholder="Fotokopi Sah KENAIKAN PANGKAT TERAKHIR (LEGALISIR)" readonly />
										<input value="<?=$r->fc_kp_terakhir?>"  name="fc_kp_terakhir_hid" type="hidden" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn4" name="fc_kp_terakhir" type="file" class="upload"  />
											
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-xs-12">Fotokopi Sah SERTIFIKAT DIKLAT SESUAI JENJANG JFT YANG DIISYARATKAN</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input value="<?=$r->fc_sertifikat_diklat?>" class="form-control" id="uploadFile5" placeholder="Fotokopi Sah SERTIFIKAT DIKLAT SESUAI JENJANG JFT YANG DIISYARATKAN" readonly />
										<input value="<?=$r->fc_sertifikat_diklat?>"  name="fc_sertifikat_diklat_hid" type="hidden" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn5" name="fc_sertifikat_diklat" type="file" class="upload"  />
											
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-xs-12">Fotokopi Sah SK PENGANGKATAN PERTAMA DALAM JABATAN FUNGSIONAL</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input value="<?=$r->fc_sk_pengangkatan?>" class="form-control" id="uploadFile6" placeholder="Fotokopi Sah SK PENGANGKATAN PERTAMA DALAM JABATAN FUNGSIONAL" readonly />
										<input value="<?=$r->fc_sk_pengangkatan?>"  name="fc_sk_pengangkatan_hid" type="hidden" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn6" name="fc_sk_pengangkatan" type="file" class="upload"  />
											
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-xs-12">ASLI SK TUGAS BELAJAR / ASLI IJIN BELAJAR</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input value="<?=$r->sk_tugas_belajar?>" class="form-control" id="uploadFile7" placeholder="Bagi PNS yang menyelesaikan pendidikan tugas belajar atau ijin belajar" readonly />
										<input value="<?=$r->sk_tugas_belajar?>"  name="sk_tugas_belajar_hid" type="hidden" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn7" name="sk_tugas_belajar" type="file" class="upload"  />
											
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-xs-12">Fotokopi Sah PENGEMBALIAN DARI KAMPUS</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input value="<?=$r->fc_pengembalian_kampus?>" class="form-control" id="uploadFile8" placeholder="Bagi PNS tugas belajar" readonly />
										
										<input value="<?=$r->fc_pengembalian_kampus?>"  name="fc_pengembalian_kampus_hid" type="hidden" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn8" name="fc_pengembalian_kampus" type="file" class="upload"  />
											
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-xs-12">Fotokopi Sah IJAZAH</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input value="<?=$r->fc_ijazah?>" class="form-control" id="uploadFile9" placeholder="Fotokopi Sah IJAZAH" readonly />
										<input value="<?=$r->fc_ijazah?>"  name="fc_ijazah_hid" type="hidden" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn9" name="fc_ijazah" type="file" class="upload"  />
											
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-xs-12">Fotokopi Sah TRANSKRIP NILAI</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input value="<?=$r->fc_transkrip?>" class="form-control" id="uploadFile10" placeholder="Fotokopi Sah TRANSKRIP NILAI" readonly />
										<input value="<?=$r->fc_transkrip?>"  name="fc_transkrip_hid" type="hidden" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn10" name="fc_transkrip" type="file" class="upload"  />
											
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-xs-12">Fotokopi Sah PENEMPATAN KEMBALI SETELAH TUGAS BELAJAR</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input value="<?=$r->fc_tmpt_kembali?>" class="form-control" id="uploadFile11" placeholder="Fotokopi Sah PENEMPATAN KEMBALI SETELAH TUGAS BELAJAR" readonly />
										<input value="<?=$r->fc_tmpt_kembali?>"  name="fc_tmpt_kembali_hid" type="hidden" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn11" name="fc_tmpt_kembali" type="file" class="upload"  />
											
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-xs-12">Fotokopi Sah SK PENGANGKATAN KEMBALI DALAM JABATAN JFT SETELAH TUGAS BELAJAR</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input value="<?=$r->fc_sk_pengangkatan_kembali?>" class="form-control" id="uploadFile12" placeholder="Dan apabila ybs dari jabatan struktural kembali ke jft" readonly />
										<input value="<?=$r->fc_sk_pengangkatan_kembali?>"  name="fc_sk_pengangkatan_kembali_hid" type="hidden" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn12" name="fc_sk_pengangkatan_kembali" type="file" class="upload"  />
											
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-xs-12">ASLI PENETAPAN ANGKA KREDIT (PAK) BARU</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input value="<?=$r->pak_baru?>"  class="form-control" id="uploadFile13" placeholder="ASLI PENETAPAN ANGKA KREDIT (PAK) BARU" readonly />
										<input value="<?=$r->pak_baru?>"  name="pak_baru_hid" type="hidden" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn13" name="pak_baru" type="file" class="upload"  />
											
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-xs-12">Fotokopi Sah PENETAPAN ANGKA KREDIT (PAK) LAMA</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input value="<?=$r->pak_lama?>" class="form-control" id="uploadFile14" placeholder="Fotokopi Sah PENETAPAN ANGKA KREDIT (PAK) LAMA" readonly />
										<input value="<?=$r->pak_lama?>"  name="pak_lama_hid" type="hidden" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn14" name="pak_lama" type="file" class="upload"  />
											
										</div>
									</div>
								</div>
								
								
								<div class="form-group row">
									<label class="col-xs-12">ASLI SKP TAHUN SEBELUM PENGANGKATAN</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input value="<?=$r->skp?>"  class="form-control" id="uploadFile15" placeholder="ASLI SKP TAHUN SEBELUM PENGANGKATAN" readonly />
										<input value="<?=$r->skp?>"  name="skp_hid" type="hidden" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn15" name="skp" type="file" class="upload"   />
											
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-xs-12">ASLI SK PANGKAT ATASAN LANGSUNG</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input value="<?=$r->sk_pangkat_atasan_langsung?>" class="form-control" id="uploadFile16" placeholder="ASLI SK PANGKAT ATASAN LANGSUNG" readonly />
										<input value="<?=$r->sk_pangkat_atasan_langsung?>"  name="sk_pangkat_atasan_langsung_hid" type="hidden" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn16" name="sk_pangkat_atasan_langsung" type="file" class="upload"   />
											
										</div>
									</div>
								</div>
								
								
								<div class="form-group row">
									<label class="col-xs-12">ASLI DAFTAR RIWAYAT HIDUP / PEKERJAAN</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input value="<?=$r->cv?>" class="form-control" id="uploadFile17" placeholder="ASLI DAFTAR RIWAYAT HIDUP / PEKERJAAN" readonly />
										<input value="<?=$r->cv?>"  name="cv_hid" type="hidden" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn17" name="cv" type="file" class="upload"  />
											
										</div>
									</div>
								</div>
																
								
								<?php } ?>
							
								
								
								
								<button name="submit" type="submit" class="btn btn-primary">Simpan</button>
								<button type="reset" class="btn btn-warning">Reset</button>
							
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		
		
		
	</div>	<!--/.main-->