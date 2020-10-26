<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LAPORAN KENAIKAN PANGKAT PEGAWAI</title>

<link href="<?php echo base_url();?>assets/css/print.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body class="print" onLoad="window.print()">  
<div style="width:1000px;" class="preview">
	<div class="title">
	<span style="float:left">
		<img class="logo" style="width:100px" src="<?php echo base_url(); ?>assets/mansel.png">
	</span>
	<b>LAPORAN KENAIKAN PANGKAT PEGAWAI</b><br>
	<b>BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA</b><br>
	<b>KABUPATEN MANOKWARI SELATAN</b><br>
	<small>Alamat : Jl. Soejarwo Condronegoro, SH <span style="margin-left:20px"></style>
	email : bkd_mansel@yahoo.co.id Kode Pos : 98355
</small>	
	<div class="border"></div>
	</div>
	
		<table class="table">
						    <thead>
						    <tr class="tb-head">
						        <th >NIP</th>
						        <th >Nama</th>
						        <th >Jenis Jabatan</th>
						        <th >Nama Jabatan</th>
						        <th >Unit Kerja</th>
						        <th >Jenis Kelamin</th>
						        <th >Golongan Akhir</th>
						        <th >Jenis Kenaikan Pangkat</th>
						    </tr>
						    </thead>
							<?php 
			foreach ($berkas_kp->result() as $r) {
			?>	
			<tr>
				<td><?php echo $r->nip ?></td>
				<td><?php echo $r->nama ?></td>
				<td><?php echo $r->jenis_jabatan ?></td>
				<td><?php echo $r->nama_jabatan ?></td>
				<td><?php echo $r->nama_unit_kerja ?></td>
				<td><?php if ($r->jk == "L") { echo "Laki-Laki"; } else { echo "Perempuan"; } ?></td>
				<td><?php  echo $r->gol_akhir ?></td>
				<td><?php echo $r->jenis_kp ?></td>
				
			</tr>
			<?php } if (count($berkas_kp->result()) == 0) { ?>
			<tr>
				<td colspan="6" class="text-center"><b>TIDAK ADA DATA</b></td>
			</tr>	
			<?php } ?>	
						</table>
	<br>			
	<div class="footer">Sistem Informasi Kepegawaian</div>				
</div>	

		
</body>

</html>		