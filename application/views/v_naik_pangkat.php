<div class="col-sm-10 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		
		<div class="col-md-12">
		
				<div class="panel panel-default">
					<div class="panel-heading">Kenaikan Pangkat</div>
					<div class="panel-body">
					<?php if ($this->session->flashdata('status') != null) { ?>
					<div class="alert bg-success" role="alert">
					<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"/></svg>
					<?php echo $this->session->flashdata('status') ?>	
					<a  class="close" data-dismiss="alert" aria-label="close"><span class="glyphicon glyphicon-remove"></span></a>
					</div>
					<?php } ?>
					<?php if ($this->session->flashdata('error') != null) { ?>
					<div class="alert bg-danger" role="alert">
					<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"/></svg>
					<?php echo $this->session->flashdata('error') ?>	
					<a  class="close" data-dismiss="alert" aria-label="close"><span class="glyphicon glyphicon-remove"></span></a>
					</div>
					<?php } ?>
					
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
			<tr>
				<th>Jenis Jabatan</td>
				<td><?php echo $p->jenis_jabatan ?></td>
			</tr>			
			
						</table>
						<?php } ?>					
					
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-6">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-2 col-lg-4 widget-left">
							<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
						</div>
						<div class="col-sm-10 col-lg-8 widget-right">
							<div class="large"><?=$jumlah_struktural?> 
							
							<?php 
							if ($status_struktural == 0) {
							if ($jumlah_struktural == 0) { ?>
							<a href="<?php echo base_url('naik_pangkat/struktural');?>" class="btn btn-success btn-md">Upload Berkas</a>
							<?php } else { ?>
							<a href="<?php echo base_url('edit_berkas/struktural');?>" class="btn btn-warning btn-md">Edit Berkas</a>
							
							<a href="<?php echo base_url('selesai/struktural');?>" class="btn btn-primary btn-md">Lihat Berkas</a>
							<?php } 
							} else { ?>
							<span  class="label label-success statusku">Terkirim</span>
							<?php } ?>
							</div>
							<div class="text-panel"><b>Jabatan Struktural</b> </div>
							
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-6">
				<div class="panel panel-red panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-2 col-lg-4 widget-left">
							<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
						</div>
						<div class="col-sm-10 col-lg-8 widget-right">
							<div class="large"><?=$jumlah_fungsional?> 
							
							<?php 
							if ($status_fungsional == 0) {
							if ($jumlah_fungsional == 0) { ?>
							<a href="<?php echo base_url('naik_pangkat/fungsional');?>" class="btn btn-success btn-md">Upload Berkas</a>
							<?php } else { ?>
							<a href="<?php echo base_url('edit_berkas/fungsional');?>" class="btn btn-warning btn-md">Edit Berkas</a>
							
							<a href="<?php echo base_url('selesai/fungsional');?>" class="btn btn-primary btn-md">Lihat Berkas</a>
							<?php } 
							} else { ?>
							<span  class="label label-success statusku">Terkirim</span>
							<?php } ?>
							</div>
							<div class="text-panel"><b>Jabatan Fungsional Tertentu</b> </div>
							
						</div>
					</div>
				</div>
			</div>
		</div>	
			
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-6">
				<div class="panel panel-orange panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-2 col-lg-4 widget-left">
							<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
						</div>
						<div class="col-sm-10 col-lg-8 widget-right">
							<div class="large"><?=$jumlah_ijazah?> 
							
							<?php 
							if ($status_ijazah == 0) {
							if ($jumlah_ijazah == 0) { ?>
							<a href="<?php echo base_url('naik_pangkat/ijazah');?>" class="btn btn-success btn-md">Upload Berkas</a>
							<?php } else { ?>
							<a href="<?php echo base_url('edit_berkas/ijazah');?>" class="btn btn-warning btn-md">Edit Berkas</a>
							
							<a href="<?php echo base_url('selesai/ijazah');?>" class="btn btn-primary btn-md">Lihat Berkas</a>
							<?php } 
							} else { ?>
							<span  class="label label-success statusku">Terkirim</span>
							<?php } ?>
							</div>
							<div class="text-panel"><b>Penyesuaian Ijazah</b> </div>
							
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-6">
				<div class="panel panel-teal panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-2 col-lg-4 widget-left">
							<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
						</div>
						<div class="col-sm-10 col-lg-8 widget-right">
							<div class="large"><?=$jumlah_reguler?> 
							
							<?php
							if ($status_reguler == 0) {
							if ($jumlah_reguler == 0) { ?>
							<a href="<?php echo base_url('naik_pangkat/reguler');?>" class="btn btn-success btn-md">Upload Berkas</a>
							<?php } else { ?>
							<a href="<?php echo base_url('edit_berkas/reguler');?>" class="btn btn-warning btn-md">Edit Berkas</a>
							
							<a href="<?php echo base_url('selesai/reguler');?>" class="btn btn-primary btn-md">Lihat Berkas</a>
							<?php } 
							} else { ?>
							<span  class="label label-success statusku">Terkirim</span>
							<?php } ?>
							</div>
							<div class="text-panel"><b>Reguler</b> </div>
							
						</div>
					</div>
				</div>
			</div>
		</div>	
					
						
					</div>
				</div>
			</div>
		
		
		
	</div>	<!--/.main-->