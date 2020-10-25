<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Jabatan Struktural</div>
					<div class="panel-body">
					<div class="alert bg-info" role="alert">
					<h4><svg class="glyph stroked upload"><use xlink:href="#stroked-upload"/></svg>
					Berkas yang di-upload boleh berformat doc, docx, jpg, png, dan pdf</h4>
					</div>
						
							<form action="" method="post" enctype="multipart/form-data">
								<?php foreach ($auth->result() as $r) {?>	
								<div class="form-group row">
									<div class="col-xs-6" style="padding-left:15px;">
									<label >Nama Pegawai</label>
										<input class="form-control" name="nama" value="<?=$r->nama?>" placeholder="Nama Pegawai" readonly />
									</div>
									<div class="col-xs-6" style="padding-left:15px;">
									<label >NIP</label>
										<input class="form-control" name="nip" value="<?=$r->nip?>"  placeholder="NIP" readonly />
									</div>
								</div>
								<div class="form-group row">
									<div class="col-xs-12" style="padding-left:15px;">
									<label >Instansi</label>
										<input class="form-control"name="instansi" value="<?=$r->nama_unit_kerja?>"  placeholder="Instansi" readonly />
									</div>
								</div>
								<?php } ?>
								<div class="form-group row">
									<label class="col-xs-12">Fotokopi Sah KARPEG / KPE (LEGALISIR)</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input class="form-control" id="uploadFile1" placeholder="Fotokopi Sah KARPEG / KPE (LEGALISIR)" readonly />
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
										<input class="form-control" id="uploadFile2" placeholder="Fotokopi Sah KONVERSI NIP (LEGALISIR)" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn2" name="fc_konversi_nip" type="file" class="upload"  />
											
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-xs-12">Fotokopi Sah CPNS DAN PNS (LEGALISIR)</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input class="form-control" id="uploadFile3" placeholder="Fotokopi Sah CPNS DAN PNS (LEGALISIR)" readonly />
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
										<input class="form-control" id="uploadFile4" placeholder="Fotokopi Sah KENAIKAN PANGKAT TERAKHIR (LEGALISIR)" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn4" name="fc_kp_terakhir" type="file" class="upload"  />
											
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-xs-12">ASLI SK TUGAS BELAJAR / ASLI IJIN BELAJAR</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input class="form-control" id="uploadFile5" placeholder="Bagi PNS yang menyelesaikan pendidikan tugas belajar atau ijin belajar" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn5" name="sk_tugas_belajar" type="file" class="upload"  />
											
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-xs-12">Fotokopi Sah PENGEMBALIAN DARI KAMPUS</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input class="form-control" id="uploadFile6" placeholder="Bagi 
PNS tugas belajar" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn6" name="fc_pengembalian_kampus" type="file" class="upload"  />
											
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-xs-12">Fotokopi Sah IJAZAH</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input class="form-control" id="uploadFile7" placeholder="Fotokopi Sah IJAZAH" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn7" name="fc_ijazah" type="file" class="upload"  />
											
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-xs-12">Fotokopi Sah TRANSKRIP NILAI</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input class="form-control" id="uploadFile8" placeholder="Fotokopi Sah TRANSKRIP NILAI" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn8" name="fc_transkrip" type="file" class="upload"  />
											
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-xs-12">Fotokopi Sah PENEMPATAN KEMBALI SETELAH TUGAS BELAJAR</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input class="form-control" id="uploadFile9" placeholder="Fotokopi Sah PENEMPATAN KEMBALI SETELAH TUGAS BELAJAR" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn9" name="fc_tmpt_kembali" type="file" class="upload"  />
											
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-xs-12">Fotokopi Sah SK JABATAN STRUKTURAL DAN LAMPIRANNYA</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input class="form-control" id="uploadFile10" placeholder="Fotokopi Sah SK JABATAN STRUKTURAL DAN LAMPIRANNYA" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn10" name="fc_sk_jab_struktural" type="file" class="upload"  />
											
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-xs-12">Fotokopi Sah NASKAH PELANTIKAN</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input class="form-control" id="uploadFile11" placeholder="Fotokopi Sah NASKAH PELANTIKAN" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn11" name="fc_naskah_pelantikan" type="file" class="upload"  />
											
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-xs-12">Fotokopi Sah SURAT PERNYATAAN PELANTIKAN</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input class="form-control" id="uploadFile12" placeholder="Fotokopi Sah SURAT PERNYATAAN PELANTIKAN" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn12" name="fc_sp_pelantikan" type="file" class="upload"  />
											
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-xs-12">ASLI SURAT PERNYATAAN MASIH MENDUDUKI JABATAN (SPMJ) </label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input class="form-control" id="uploadFile13" placeholder="Sesuai periode kenaikan pangkat" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn13" name="spmj" type="file" class="upload"   />
											
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-xs-12">ASLI SKP TAHUN SEBELUM PENGANGKATAN</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input class="form-control" id="uploadFile14" placeholder="ASLI SKP TAHUN SEBELUM PENGANGKATAN" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn14" name="skp" type="file" class="upload"  />
											
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-xs-12">ASLI SK PANGKAT ATASAN LANGSUNG</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input class="form-control" id="uploadFile15" placeholder="ASLI SK PANGKAT ATASAN LANGSUNG" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn15" name="sk_pangkat_atasan_langsung" type="file" class="upload"  />
											
										</div>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-xs-12">ASLI DAFTAR RIWAYAT HIDUP / PEKERJAAN</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input class="form-control" id="uploadFile16" placeholder="ASLI DAFTAR RIWAYAT HIDUP / PEKERJAAN" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn16" name="cv" type="file" class="upload"  />
											
										</div>
									</div>
								</div>
																
								
							
							
								
								
								
								<button name="submit" type="submit" class="btn btn-primary">Simpan</button>
								<button type="reset" class="btn btn-warning">Reset</button>
							
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		
		
		
	</div>	<!--/.main-->