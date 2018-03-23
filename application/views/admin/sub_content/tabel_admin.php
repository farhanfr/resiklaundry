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
  <h2>Data Admin Resik Laundry</h2>
    <p><b>Notice!!</b>, Lihat Seluruh Admin</p>
  <div class="table-responsive">          
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
    <th>no</th>
	<th>id Admin</th>
	<th>Nama Admin</th>
  <th>Email</th>
	<th>No Telfon</th>
	<th>username</th>
	<th>password</th>
	<th>Status</th>
      </tr>
    </thead>
    <?php  
    $no=1;
    foreach ($datad as $dp) {?>
    <tbody>
    	<td><?= $no++; ?></td>
    	<td><?= $dp->id_admin;?></td>
    	<td><?= $dp->namad;?></td>
    	<td><?= $dp->emailad;?></td>	
    	<td><?= $dp->nomad;?></td>
    	<td><?= $dp->usernamad;?></td>
    	<td><?= $dp->passwordad;?></td>
      <td><?= $dp->status;?></td>
	</tbody>
	<?php } ?>
</table>
</div>
</div>



</body>
</html>