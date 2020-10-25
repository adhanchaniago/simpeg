<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		
		
		
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Edit Pegawai</div>
					<div class="panel-body">
						<?php foreach ($pegawai->result() as $r) { 
						if ($r->tgl_lahir == "0000-00-00") {
							$r->tgl_lahir = "";
						}
						
						if ($r->tmt_cpns == "0000-00-00") {
							$r->tmt_cpns = "";
						}
						
						if ($r->tmt_pns == "0000-00-00") {
							$r->tmt_pns = "";
						}
						
						if ($r->tmt == "0000-00-00") {
							$r->tmt = "";
						}
						
						?>
						<form action="<?php echo base_url();?>pegawai/proses_edit" method="post" enctype="multipart/form-data">
								<input value="<?php echo $r->id ?>" name="id" type="hidden"  >
								
								<div class="form-group">
									<label>NIP</label>
									<input required value="<?php echo $r->nip ?>" maxlength="18" name="nip" type="text" class="form-control" >
								</div>
																
								<div class="form-group">
									<label>Nama</label>
									<input required value="<?php echo $r->nama ?>" maxlength="35" name="nama" type="text" class="form-control">
								</div>
								
													
								<div class="form-group">
									<label>Username</label>
									<input required value="<?php echo $r->username ?>" maxlength="10" name="username" type="text" class="form-control">
								</div>
								
								<div class="form-group">
									<label>Password</label>
									<input required value="" maxlength="10" name="password" type="password" class="form-control">
								</div>
								
								<div class="form-group row">
									<div class="col-xs-6" >
									<label> Tempat Lahir</label>
									<input maxlength="20" name="tmpt_lahir" value="<?=$r->tmpt_lahir ?>" type="text" class="form-control" >
									</div>
									<div class="col-xs-6" >
									<label>Tanggal Lahir</label>
									<input name="tgl_lahir" id="calendar" placeholder="mm/dd/yyyy" value="<?=date("m/d/Y", strtotime($r->tgl_lahir)) ?>" class="form-control" >
									</div>
								</div>
								
								<div class="form-group row">
									<div class="col-xs-4" >
									<label>Golongan Awal</label>
									<select class="form-control" name="gol_awal">
										<option value="I/a" <?php if ($r->gol_awal == "I/a") echo "checked"; ?> >I/a</option>
										<option value="I/b" <?php if ($r->gol_awal == "I/b") echo "checked"; ?> >I/b</option>
										<option value="I/c" <?php if ($r->gol_awal == "I/c") echo "checked"; ?> >I/c</option>
										<option value="I/d" <?php if ($r->gol_awal == "I/d") echo "checked"; ?> >I/d</option>
										<option value="II/a" <?php if ($r->gol_awal == "II/a") echo "checked"; ?> >II/a</option>
										<option value="II/b" <?php if ($r->gol_awal == "II/b") echo "checked"; ?> >II/b</option>
										<option value="II/c" <?php if ($r->gol_awal == "II/c") echo "checked"; ?> >II/c</option>
										<option value="II/d" <?php if ($r->gol_awal == "II/d") echo "checked"; ?> >II/d</option>
										<option value="III/a" <?php if ($r->gol_awal == "III/a") echo "checked"; ?> >III/a</option>
										<option value="III/b" <?php if ($r->gol_awal == "III/b") echo "checked"; ?> >III/b</option>
										<option value="III/c" <?php if ($r->gol_awal == "III/c") echo "checked"; ?> >III/c</option>
										<option value="III/d" <?php if ($r->gol_awal == "III/d") echo "checked"; ?> >III/d</option>
										<option value="IV/a" <?php if ($r->gol_awal == "IV/a") echo "checked"; ?> >IV/a</option>
										<option value="IV/b" <?php if ($r->gol_awal == "IV/b") echo "checked"; ?> >IV/b</option>
										<option value="IV/c" <?php if ($r->gol_awal == "IV/c") echo "checked"; ?> >IV/c</option>
										<option value="IV/d" <?php if ($r->gol_awal == "IV/d") echo "checked"; ?> >IV/d</option>
										<option value="IV/e" <?php if ($r->gol_awal == "IV/e") echo "checked"; ?> >IV/e</option>
									  </select>
									
									</div>
									<div class="col-xs-4" >
									<label class="col-xs-12" >TMT CPNS</label>
									<input name="tmt_cpns" id="calendar2" placeholder="mm/dd/yyyy" value="<?=date("m/d/Y", strtotime($r->tmt_cpns)) ?>"  class="form-control" >
									</div>
									<div class="col-xs-4" >
									<label>TMT PNS</label>
									<input name="tmt_pns" id="calendar3" placeholder="mm/dd/yyyy" value="<?=date("m/d/Y", strtotime($r->tmt_pns)) ?>"  class="form-control" >
									</div>
								</div>
								
								
								
								<div class="form-group">
									<label>Jenis Kelamin</label>
									<div class="radio">
									 <label style="padding-right:50px"><input required type="radio" name="jk" value="L" <?php if ($r->jk == "L") echo "checked"; ?> > Laki-laki</label>
									 <label style="padding-right:50px"><input required type="radio" name="jk" value="P" <?php if ($r->jk == "P") echo "checked"; ?>> Perempuan </label>
									</div>
								</div>
								
								<div class="form-group row">
									<div class="col-xs-4" >
									<label>Golongan Akhir</label>
									<select class="form-control" name="gol_akhir">
										<option value="I/a" <?php if ($r->gol_akhir == "I/a") echo "checked"; ?> >I/a</option>
										<option value="I/b" <?php if ($r->gol_akhir == "I/b") echo "checked"; ?> >I/b</option>
										<option value="I/c" <?php if ($r->gol_akhir == "I/c") echo "checked"; ?> >I/c</option>
										<option value="I/d" <?php if ($r->gol_akhir == "I/d") echo "checked"; ?> >I/d</option>
										<option value="II/a" <?php if ($r->gol_akhir == "II/a") echo "checked"; ?> >II/a</option>
										<option value="II/b" <?php if ($r->gol_akhir == "II/b") echo "checked"; ?> >II/b</option>
										<option value="II/c" <?php if ($r->gol_akhir == "II/c") echo "checked"; ?> >II/c</option>
										<option value="II/d" <?php if ($r->gol_akhir == "II/d") echo "checked"; ?> >II/d</option>
										<option value="III/a" <?php if ($r->gol_akhir == "III/a") echo "checked"; ?> >III/a</option>
										<option value="III/b" <?php if ($r->gol_akhir == "III/b") echo "checked"; ?> >III/b</option>
										<option value="III/c" <?php if ($r->gol_akhir == "III/c") echo "checked"; ?> >III/c</option>
										<option value="III/d" <?php if ($r->gol_akhir == "III/d") echo "checked"; ?> >III/d</option>
										<option value="IV/a" <?php if ($r->gol_akhir == "IV/a") echo "checked"; ?> >IV/a</option>
										<option value="IV/b" <?php if ($r->gol_akhir == "IV/b") echo "checked"; ?> >IV/b</option>
										<option value="IV/c" <?php if ($r->gol_akhir == "IV/c") echo "checked"; ?> >IV/c</option>
										<option value="IV/d" <?php if ($r->gol_akhir == "IV/d") echo "checked"; ?> >IV/d</option>
										<option value="IV/e" <?php if ($r->gol_akhir == "IV/e") echo "checked"; ?> >IV/e</option>
									  </select>
									</div>
									<div class="col-xs-4" >
									<label>TMT</label>
									<input value="<?=date("m/d/Y", strtotime($r->tmt)) ?>" name="tmt" id="calendar4" placeholder="mm/dd/yyyy" class="form-control" >
									</div>
									<div class="col-xs-4" >
									<label>Masa Kerja</label>
									<input readonly name="masa_kerja" value="<?=$r->masa_kerja?>" type="text" class="form-control" >
									</div>
								</div>	
								
								
								<div class="form-group row">	
									<div class="col-xs-6" >
									<label>Jenis Jabatan</label>
									 <select class="form-control" name="jenis_jabatan">
										<option value="fungsional" <?php if ($r->jenis_jabatan == "Fungsional") echo "selected"; ?>>Fungsional Tertentu</option>
										<option value="umum" <?php if ($r->jenis_jabatan == "umum") echo "selected"; ?>>Fungsional Umum</option>
										<option value="struktural" <?php if ($r->jenis_jabatan == "struktural") echo "selected"; ?>>struktural</option>
									  </select>
									</div>
									<div class="col-xs-6" >
									<label>Nama Jabatan</label>
									<input name="nama_jabatan" maxlength="40" type="text" value="<?=$r->nama_jabatan ?>" class="form-control" >
									</div>
								</div>
								
								<div class="form-group row">
									<div class="col-xs-6" >
									<label>Pendidikan</label>
									 <select class="form-control" name="pendidikan">
										<option value="SMA" <?php if ($r->pendidikan == "SMA") echo "selected"; ?>>SMA</option>
										<option value="SMK" <?php if ($r->pendidikan == "SMK") echo "selected"; ?> >SMK</option>
										<option value="D3" <?php if ($r->pendidikan == "D3") echo "selected"; ?>>DIPLOMA III</option>
										<option value="S1" <?php if ($r->pendidikan == "S1") echo "selected"; ?>>STRATA I</option>
										<option value="S2" <?php if ($r->pendidikan == "S2") echo "selected"; ?>>STRATA II</option>
										<option value="S3" <?php if ($r->pendidikan == "S3") echo "selected"; ?>>STRATA III</option>
									  </select>
									</div>
									<div class="col-xs-6" >
									<label>Kedudukan Hukum</label>
									 <select class="form-control" name="ked_hukum">
										<option value="Aktif" <?php if ($r->ked_hukum == "Aktif") echo "selected"; ?>>Aktif</option>
										<option value="Tugas Belajar" <?php if ($r->ked_hukum == "Aktif") echo "selected"; ?>>Tugas Belajar</option>
										<option value="PNS kena hukuman disiplin" <?php if ($r->ked_hukum == "Aktif") echo "selected"; ?> <?php if ($r->ked_hukum == "Hukuman") echo "selected"; ?> >PNS kena hukuman disiplin</option>
										<option value="Masa Persiapan Pensiun" <?php if ($r->ked_hukum == "bernan") echo "selected"; ?>> Masa Persiapan Pensiun</option>
										<option value="CPNS yang belum dapat SK CPNS <?php if ($r->ked_hukum == "Hukuman") echo "selected"; ?>">CPNS yang belum dapat SK CPNS</option>
									  </select>
									</div>
								</div>	
									
								<div class="form-group ">	
									<label>Unit Kerja</label>
									 <select class="form-control" name="id_unit_kerja">
									<?php foreach ($unit_kerja->result() as $s) {	?>	
										<option value="<?=$s->id_unit_kerja?>"><?=$s->nama_unit_kerja?></option>
									<?php } ?>	
									</select>
								</div>
								
								
								
								<button name="submit" type="submit" class="btn btn-primary btn-sm">Simpan</button>
								<button type="reset" class="btn btn-warning btn-sm">Reset</button>
							
						</form>
						<?php } ?>
					</div>
				</div>
			</div><!-- /.col-->
		
		
		
	</div>	<!--/.main-->