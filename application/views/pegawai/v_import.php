<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Import Data Pegawai</div>
					<div class="panel-body">
					<div class="alert bg-primary" role="alert">
					<h4><svg class="glyph stroked upload"><use xlink:href="#stroked-upload"/></svg>
					
					Sebelum Anda import Data Pegawai melalui file Excel, harap ikuti format penulisan sesuai yang ada di sini <a href="<?php echo base_url("import/format_import_pegawai.xlsx");?>" class="btn btn-primary btn-sm">Download </a>   </h4>
					</div>
					<?php if(isset($_POST['submit'])) {
					 echo $error;

					 } ?>	
							<form action="" method="post" enctype="multipart/form-data">
								
								<div class="form-group row">
									<label class="col-xs-12">File Excel Data Pegawai</label>
									<div class="col-xs-10" style="padding-left:15px;">
										<input class="form-control" id="uploadFile1" placeholder="Harap Format Penulisan sudah benar" readonly />
									</div>
									<div class="col-xs-2" style="padding-right:15px;padding-left:0;">
									
									   <div class="file-upload btn btn-block btn-success ">		
											<span><i class="fa fa-image"></i>&nbsp;&nbsp;<b>Pilih File</b></span>
											<input  id="uploadBtn1" name="file" type="file" class="upload"  />
											
										</div>
									</div>
								</div>
								
								<button name="submit" type="submit" class="btn btn-primary btn-sm">Simpan</button>
								<a href="<?php echo base_url('pegawai');?>" class="btn btn-warning btn-sm">Kembali</a>
							
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		
		
		
	</div>	<!--/.main-->