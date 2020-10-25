<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		
		
		
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Berkas Kenaikan Pangkat Per Pegawai</div>
					<div class="panel-body">
					
					
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
			
			<table class="table  table-bordered col-lg-4 text-capitalize">
				
			<tr>
				<th style="width:10px">No</th>
				<th>Jenis Kenaikan Pangkat</th>
				<th>Action</th>
			</tr>		
			
			<?php 
			$no = 1;
			foreach ($berkas_kp->result() as $r) { ?>
						
							
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $r->jenis_kp ?></td>
				<td>
				<?php if ($r->status == "terkirim") { ?>
				<span  class="label label-success statusku">Terkirim</span>
				<?php } else if ($r->status == "Naik Pangkat") { ?>
				<span  class="label label-primary statusku">Naik Pangkat</span>
				<?php } else if ($r->status == "Tidak Naik") { ?>
				<span  class="label label-danger statusku">Tidak Naik</span>
				<a href="#<?=$r->id ?>" data-toggle="modal" class="btn btn-success btn-md">Detail</a>
				<div class="modal fade" id="<?php echo $r->id  ?>" role="dialog">
							<div class="modal-dialog modal-md">
								<div class="modal-content">   
									<div class="modal-header" style="line-height:30px;">
									<b>ALASAN TIDAK NAIK PANGKAT!!</b> 
									<a data-dismiss="modal" style="cursor:pointer" class="btn btn-sm btn-default pull-right"><span class="glyphicon glyphicon-remove"></span></a>
									</div>	
									<div class="modal-body text-center">
										<div class="panelku">
										<?=$r->alasan ?>
										</div>
									</div>
									
								</div>
							</div>
						</div>
				<?php } else { ?>
				<a href="<?=base_url("edit_berkas/".$r->jenis_kp);?>" class="btn btn-primary btn-md">Edit</a>
				<a href="<?=base_url("selesai/".$r->jenis_kp);?>" class="btn btn-warning btn-md">Lihat</a>
				<?php } ?>
				</td>
			</tr>
			
						
						<?php } if ($berkas_kp->num_rows() == 0) { ?>					
			
			<tr>
				<th colspan="2" class="text-center">TIDAK ADA DATA</th>
				
			</tr>
				 <?php } ?>
			</table>			
						
						
			
					</div>
				</div>
			</div><!-- /.col-->
		
		
		
	</div>	<!--/.main-->