<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		
		
		<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Unit Kerja</div>
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
					
					<div class="form-group ">
					<a href="unit_kerja/post" class="btn btn-success btn-md">TAMBAH</a>
					</div>
						<table class="table table-responsive table-bordered data">
						    <thead>
						    <tr class="tb-head">
						        <th >No</th>
						        <th >Nama Unit Kerja</th>
						        <th style="width:200px">Action</th>
						    </tr>
						    </thead>
							<?php 
							$no= 1;
			foreach ($unit_kerja->result() as $r) {
			?>	
			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $r->nama_unit_kerja ?></td>
				<td>
				<a href="unit_kerja/delete/<?php echo $r->id_unit_kerja ?>" class="btn btn-danger btn-md">HAPUS</a>
				</td>
			</tr>
			<?php $no++; } if (count($unit_kerja->result()) == 0) { ?>
			<tr>
				<td colspan="6" class="text-center"><b>TIDAK ADA DATA</b></td>
			</tr>	
			<?php } ?>	
						</table>
						
					</div>
				</div>
			</div>
		
		
	</div>	<!--/.main-->