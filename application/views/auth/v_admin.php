<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		
		
		
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Ubah Profil Operator</div>
					<div class="panel-body">
					
					<?php if ($this->session->flashdata('status') != null) { ?>
					<div class="alert bg-success" role="alert">
					<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"/></svg>
					<?php echo $this->session->flashdata('status') ?>	
					<a  class="close" data-dismiss="alert" aria-label="close"><span class="glyphicon glyphicon-remove"></span></a>
					</div>
					<?php } ?>
					
						<?php foreach ($auth->result() as $r) { ?>
						<form action="<?php echo base_url();?>auth/proses_admin" method="post" enctype="multipart/form-data">
								<input value="<?php echo $r->id_admin ?>" name="id_admin" type="hidden"  >
								
																
								<div class="form-group col-lg-6">
									<label>Nama</label>
									<input value="<?php echo $r->nama ?>" name="nama" type="text" class="form-control">
								</div>
								
								
																
								<div class="form-group col-lg-6">
									<label>Username</label>
									<input value="<?php echo $r->username ?>" name="username" type="text" class="form-control">
								</div>
								
								<div class="form-group col-lg-6">
									<label>Password</label>
									<input value="" name="password" type="password" class="form-control">
								</div>
								
								<div class="form-group col-lg-6">
									<label>Nama Instansi</label>
									<input value="<?php echo $r->nama_instansi ?>" name="nama_instansi" type="text" class="form-control">
								</div>
								
								<div class="form-group col-lg-6">
									<label>Alamat</label>
									<input value="<?php echo $r->alamat_instansi ?>" name="alamat_instansi" type="text" class="form-control">
								</div>
								
								<div class="form-group col-lg-6">
									<label>Website</label>
									<input value="<?php echo $r->website_instansi ?>" name="website_instansi" type="text" class="form-control">
								</div>
								
								<div class="form-group col-lg-6">
									<label>Email</label>
									<input value="<?php echo $r->email_instansi ?>" name="email_instansi" type="text" class="form-control">
								</div>
								
								<div class="form-group col-lg-6">
									<label>No. Telp</label>
									<input value="<?php echo $r->notelp_instansi ?>" name="notelp_instansi" type="text" class="form-control">
								</div>
								
								<div class="form-group col-lg-6">
									<label>Logo Instansi</label>
									<input value="" name="logo_instansi" type="file" class="form-control">
								</div>
								<div class="form-group col-lg-6">
									<button name="submit" type="submit" class="btn btn-primary">Simpan</button>
									<button type="reset" class="btn btn-warning">Reset</button>
								</div>
							
						</form>
						<?php } ?>
					</div>
				</div>
			</div><!-- /.col-->
		
		
		
	</div>	<!--/.main-->