<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		
		
		<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Data Pegawai</div>
					<div class="panel-body">
					<?php if ($this->session->flashdata('status') != null) { ?>
					<div class="alert bg-success" role="alert">
					<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"/></svg>
					<?php echo $this->session->flashdata('status') ?>	
					<a  class="close" data-dismiss="alert" aria-label="close"><span class="glyphicon glyphicon-remove"></span></a>
					</div>
					<?php } ?>
					<div class="form-group ">
					<a href="pegawai/post" class="btn btn-success btn-sm">TAMBAH</a>
					
					<a href="pegawai/import" class="btn btn-primary btn-sm">IMPORT</a>
					
					
					<a href="pegawai/cetak" target="_blank" class="btn btn-warning btn-sm">CETAK</a>
				
					</div>
						<table class="table table-responsive table-bordered data">
						    <thead>
						    <tr class="tb-head">
						        <th >NIP</th>
						        <th >Nama</th>
						        <th >Golongan Akhir</th>
						        <th >Jenis Kelamin</th>
						        <th >Username</th>
						        <th style="width:200px">Action</th>
						    </tr>
						    </thead>
							<?php 
			foreach ($pegawai->result() as $r) {
			?>	
			<tr>
				<td><?php echo $r->nip ?></td>
				<td><?php echo $r->nama ?></td>
				<td><?php  echo $r->gol_akhir ?></td>
				<td>
				<?php  if ($r->jk == "L") { echo "Laki-Laki"; } else { echo "Perempuan"; }  ?>
				</td>
				<td><?php echo $r->username ?></td>
				<td>
				<a href="pegawai/delete/<?php echo $r->id ?>" class="btn btn-danger btn-sm">HAPUS</a>
				<a href="pegawai/edit/<?php echo $r->id ?>" class="btn btn-info btn-sm">EDIT</a>
				
				</td>
			</tr>
			<?php } if (count($pegawai->result()) == 0) { ?>
			<tr>
				<td colspan="6" class="text-center"><b>TIDAK ADA DATA</b></td>
			</tr>	
			<?php } ?>	
						</table>
						
					</div>
				</div>
			</div>
		
		
	</div>	<!--/.main-->