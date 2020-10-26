<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		
		
		
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Tambah Pegawai</div>
					<div class="panel-body">
						
							<form action="" method="post" enctype="multipart/form-data">
								
								<div class="form-group">
									<label>NIP</label>
									<input required name="nip" type="text" class="form-control" maxlength="18">
								</div>
																
								<div class="form-group">
									<label>Nama</label>
									<input required name="nama" type="text" class="form-control" maxlength="35">
								</div>
								
														
								
								<div class="form-group row">
									<div class="col-xs-6" >
									<label> Tempat Lahir</label>
									<input name="tmpt_lahir" type="text" class="form-control" maxlength="20">
									</div>
									<div class="col-xs-6" >
									<label>Tanggal Lahir</label>
									<input name="tgl_lahir" id="calendar" placeholder="mm/dd/yyyy" class="form-control" >
									</div>
								</div>
								
								<div class="form-group row">
									<div class="col-xs-4" >
									<label>Golongan Awal</label>
									
									<select class="form-control" name="gol_awal">
										<option value="I/a">I/a</option>
										<option value="I/b">I/b</option>
										<option value="I/c">I/c</option>
										<option value="I/d">I/d</option>
										<option value="II/a">II/a</option>
										<option value="II/b">II/b</option>
										<option value="II/c">II/c</option>
										<option value="II/d">II/d</option>
										<option value="III/a">III/a</option>
										<option value="III/b">III/b</option>
										<option value="III/c">III/c</option>
										<option value="III/d">III/d</option>
										<option value="IV/a">IV/a</option>
										<option value="IV/b">IV/b</option>
										<option value="IV/c">IV/c</option>
										<option value="IV/d">IV/d</option>
										<option value="IV/e">IV/e</option>
									  </select>
									</div>
									<div class="col-xs-4" >
									<label class="col-xs-12" >TMT CPNS</label>
									<input name="tmt_cpns"  id="calendar2" placeholder="mm/dd/yyyy" class="form-control" >
									</div>
									<div class="col-xs-4" >
									<label>TMT PNS</label>
									<input name="tmt_pns"  id="calendar3" placeholder="mm/dd/yyyy" class="form-control" >
									</div>
								</div>
								
								
								
								<div class="form-group">
									<label>Jenis Kelamin</label>
									<div class="radio">
									 <label style="padding-right:50px"><input required type="radio" name="jk" value="L" > Laki-laki</label>
									 <label style="padding-right:50px"><input required type="radio" name="jk" value="P"> Perempuan </label>
									</div>
								</div>
								
								<div class="form-group row">
									<div class="col-xs-4" >
									<label>Golongan Akhir</label>
									<select class="form-control" name="gol_akhir">
										<option value="I/a">I/a</option>
										<option value="I/b">I/b</option>
										<option value="I/c">I/c</option>
										<option value="I/d">I/d</option>
										<option value="II/a">II/a</option>
										<option value="II/b">II/b</option>
										<option value="II/c">II/c</option>
										<option value="II/d">II/d</option>
										<option value="III/a">III/a</option>
										<option value="III/b">III/b</option>
										<option value="III/c">III/c</option>
										<option value="III/d">III/d</option>
										<option value="IV/a">IV/a</option>
										<option value="IV/b">IV/b</option>
										<option value="IV/c">IV/c</option>
										<option value="IV/d">IV/d</option>
										<option value="IV/e">IV/e</option>
									  </select>
									</div>
									<div class="col-xs-4" >
									<label>TMT</label>
									<input name="tmt"  id="calendar4" placeholder="mm/dd/yyyy" class="form-control" >
									</div>
									<div class="col-xs-4" >
									<label>Masa Kerja</label>
									<input readonly name="masa_kerja"  type="text" class="form-control" placeholder="Otomatis terinput nanti">
									</div>
									
								</div>
								
								<div class="form-group row">
									
									<div class="col-xs-6" >
									<label>Jenis Jabatan</label>
									 <select class="form-control" name="jenis_jabatan">
										<option value="fungsional">Fungsional Tertentu</option>
										<option value="umum">Fungsional Umum</option>
										<option value="struktural">Struktural</option>
									  </select>
									</div>
									<div class="col-xs-6" >
									<label>Nama Jabatan</label>
									<input name="nama_jabatan" type="text" class="form-control" maxlength="40">
									</div>
								</div>
								
								<div class="form-group row">
									<div class="col-xs-6" >
										<label>Pendidikan</label>
										<select class="form-control" name="pendidikan">
											<option value="SMA">SMA</option>
											<option value="SMK">SMK</option>
											<option value="D3">DIPLOMA III</option>
											<option value="S1">STRATA I</option>
											<option value="S2">STRATA II</option>
											<option value="S3">STRATA III</option>
										</select>
									</div>
									<div class="col-xs-6" >
										<div class="form-group">
										<label>Unit Kerja</label>
										<select class="form-control" name="id_unit_kerja">
										<?php foreach ($unit_kerja->result() as $r) {	?>	
											<option value="<?=$r->id_unit_kerja?>"><?=$r->nama_unit_kerja?></option>
										<?php } ?>	
										</select>
									</div>
									</div>
								</div>
								
								
								
							
							
								
								
								
								<button name="submit" type="submit" class="btn btn-primary btn-sm">Simpan</button>
								<button type="reset" class="btn btn-warning btn-sm">Reset</button>
							
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		
		
		
	</div>	<!--/.main-->