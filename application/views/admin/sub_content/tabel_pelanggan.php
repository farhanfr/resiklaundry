<!DOCTYPE html>
<html>
<head>
	<title>Data Pelanggan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/bootstrap.css">
	<script type="text/javascript" src="<?= base_url();?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
	 <style type="text/css">
 	.edit{
 		background-color: transparent;
 		color: green;
 	}
 	.delete{
 		background-color: transparent;
 		color: red;
 	}
 </style>
</head>
<body>
<div class="container">
  <h2>Data Pelanggan Resik Laundry</h2>
    <p><b>Notice!!</b>, Berhati-hatilah dalam mengontrol data</p>
  <div class="table-responsive">          
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
    <th>no</th>
	<th>id Pelanggan</th>
	<th>Nama Pelanggan</th>
	<th>Alamat</th>
	<th>No Telfon</th>
	<th>Email</th>
	<th>aksi</th>
      </tr>
    </thead>
    <?php  
    $no=1;
    foreach ($datapel as $dp) {?>
    <tbody>
    	<td><?= $no++; ?></td>
    	<td><?= $dp->id_pelanggan;?></td>
    	<td><?= $dp->namapel;?></td>
    	<td><?= $dp->alapel;?></td>	
    	<td><?= $dp->nopel;?></td>
    	<td><?= $dp->emapel;?></td>
    	<td>
			<center>
			<?= anchor('Con_resiklaundry/form_updatapel/'.$dp->id_pelanggan,'<button class="btn btn-success edit">Edit</button>'); ?>
      <?= anchor('Con_resiklaundry/confirm_delpel_admin/'.$dp->id_pelanggan,'<button class="btn btn-danger delete">Delete</button>'); ?>
           	
        </center>
			</td>

	</tbody>
	<?php } ?>
</table>
</div>
</div>



</body>
</html>