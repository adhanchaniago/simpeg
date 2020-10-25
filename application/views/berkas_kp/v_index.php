<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		
		
		<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Data Berkas Kenaikan Pangkat </div>
					<div class="panel-body">
					<?php if ($this->session->flashdata('status') != null) { ?>
					<div class="alert bg-success" role="alert">
					<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"/></svg>
					<?php echo $this->session->flashdata('status') ?>	
					<a  class="close" data-dismiss="alert" aria-label="close"><span class="glyphicon glyphicon-remove"></span></a>
					</div>
					<?php } ?>
					<div class="form-group pull-left">
					<a href="berkas_kp/cetak" target="_blank" class="btn btn-warning btn-sm">CETAK</a>
					</div>
					
						<table class="table table-responsive table-bordered text-capitalize">
						    <thead>
						    <tr class="tb-head">
						        <th >NIP</th>
						        <th style="width:200px">Nama</th>
						        <th >Unit Kerja</th>
						        <th >Jenis Kelamin</th>
						        <th >Gol. Akhir</th>
						        <th >Jenis KP</th>
						        <th >Status</th>
						        <th style="width:300px">Action</th>
						    </tr>
						    </thead>
							<?php 
			foreach ($berkas_kp->result() as $r) {
			?>	
			<tr>
				<td><?php echo $r->nip ?></td>
				<td><?php echo $r->nama ?></td>
				<td><?php echo $r->nama_unit_kerja ?></td>
				<td><?php if ($r->jk == "L") { echo "Laki-Laki"; } else { echo "Perempuan"; } ?></td>
				<td><?php  echo $r->gol_akhir ?></td>
				<td><?php echo $r->jenis_kp ?></td>
				<td><?php echo $r->status ?></td>
				<td>
				<a href="berkas_kp/delete/<?php echo $r->id ?>" onclick="return confirm ('Anda Yakin ingin menghapusnya?') " class="btn btn-danger btn-sm">HAPUS</a>
				<a href="berkas_kp/get_one/<?php echo $r->id ?>" class="btn btn-info btn-sm">DETAIL</a>
				
				<?php if ($r->status != "Naik Pangkat" && $r->status != "Tidak Naik") { ?>
				<a data-toggle="modal" href="#<?php echo $r->id ?>" class="btn btn-primary btn-sm">NAIK</a>
				
				<div class="modal fade" id="<?php echo $r->id  ?>" role="dialog">
							<div class="modal-dialog modal-md">
								<div class="modal-content">   
									<div class="modal-header" style="line-height:30px;">
									<b>WARNING!!</b> 
									<a data-dismiss="modal" style="cursor:pointer" class="btn btn-sm btn-default pull-right"><span class="glyphicon glyphicon-remove"></span></a>
									</div>	
									<div class="modal-body text-center">
										<h1><i class="fa fa-exclamation-triangle"></i></h1>
										<h2>Apa status pegawai ini?</h2>
										<br>
										<div class="form-group">
											<a  href="berkas_kp/naik/<?=$r->id ?>/<?=$r->nip ?>" class="btn btn-success">
												<i class="fa fa-check"></i>&nbsp;&nbsp;<b>Naik Pangkat</b>
											</a>
										<span style="margin-left:20px"></span>
											<a  id="tidak" class="btn btn-danger">
												<i class="fa fa-close"></i>&nbsp;&nbsp;<b>Tidak Naik Pangkat</b>
											</a>
										</div>	
										<hr>
								<form id="alasan" style="display: none;" action="berkas_kp/tidak_naik" method="post" enctype="multipart/form-data">				
								<div class="form-group text-left">
									<label>Input alasan kenapa pegawai ini tidak naik pangkat</label>
									<textarea required  name="alasan" id="isi" type="text" class="form-control"></textarea>
									<input required  name="id" value="<?=$r->id ?>" type="hidden" class="form-control"/>
								</div>
								
								<button name="submit" type="submit" class="btn btn-primary">Simpan</button>
								<button id="reset"  class="btn btn-warning">Reset</button>
							
								</form>
										
										
									</div>
									
								</div>
							</div>
						</div>
				
				<?php } ?>
				
				<a target="_blank" href="berkas_kp/cetak_one/<?php echo $r->id ?>" class="btn btn-warning btn-sm">CETAK</a>	
				</td>
			</tr>
			<?php } if (count($berkas_kp->result()) == 0) { ?>
			<tr>
				<td colspan="6" class="text-center"><b>TIDAK ADA DATA</b></td>
			</tr>	
			<?php } ?>	
						</table>
						
					</div>
				</div>
			</div>
		
		
	</div>	<!--/.main-->