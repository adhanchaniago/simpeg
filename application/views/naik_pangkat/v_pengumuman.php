<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		
		
		<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Daftar Pegawai Yang Naik Pangkat </div>
					<div class="panel-body">
					<?php if ($this->session->flashdata('status') != null) { ?>
					<div class="alert bg-success" role="alert">
					<svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"/></svg>
					<?php echo $this->session->flashdata('status') ?>	
					<a  class="close" data-dismiss="alert" aria-label="close"><span class="glyphicon glyphicon-remove"></span></a>
					</div>
					<?php } ?>
					
					
						<table class="table table-responsive table-bordered text-capitalize">
						    <thead>
						    <tr class="tb-head">
						        <th >NIP</th>
						        <th >Nama</th>
						        <th >Golongan Akhir</th>
						        <th >Jenis Kenaikan Pangkat</th>
						        <th >Status</th>
						        
						    </tr>
						    </thead>
							<?php 
			foreach ($berkas_kp->result() as $r) {
			?>	
			<tr>
				<td><?php echo $r->nip ?></td>
				<td><?php echo $r->nama ?></td>
				<td><?php  echo $r->gol_akhir ?></td>
				<td><?php echo $r->jenis_kp ?></td>
				<td><?php echo $r->status ?></td>
				
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