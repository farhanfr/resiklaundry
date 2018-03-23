<!DOCTYPE html>
<html>
<head>
	<title>Pesan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/bootstrap.css">
	<script type="text/javascript" src="<?= base_url();?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<h3>Pesan Saya</h3>
	<p>Berikut pesan-pesan yang masuk ke anda</p>
	<div class="col-lg-offset-10">
	<input type="search" name="" placeholder="Search" class="form-control">
</div>
<br>
<div class="table-responsive">
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No Feedback</th>
			<th>Nama admin</th>
			<th>Isi pesan</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<?php 
	foreach ($lihat_mailuser as $lm) { ?>
	<tbody>

		<tr>
			<td style="width: 110px;"><?php echo $lm->id_feedbacku;?></td>
			<td style="width: 200px"><?php echo $lm->namad;?></td>
			<td><?php echo $lm->isifeedad;?></td>
			<td style="width: 220px;"><span class="glyphicon glyphicon-trash"></span> Hapus Pesan
			<span class="glyphicon glyphicon-eye-open"></span> Baca Pesan</td>
		</tr>
	</tbody>
<?php } ?>
</table>
</div>
<?php
	echo anchor('Con_resiklaundry/index', '<button class="btn btn-info">Kembali ke dashboard</button>');
?>
</div>


		


</body>
</html>