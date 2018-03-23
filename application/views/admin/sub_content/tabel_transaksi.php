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
  <h2>Transaksi</h2>
  <div class="table-responsive">          
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
  <th>no</th>
  <th>Id_transaksi</th>
  <th>Id_pelanggan</th>
  <th>tgl_transaksi</th>
	<th>Nama Pelanggan</th>
	<th>Alamat Pelanggan</th>
	<th>Jenis Paket</th>
  <th>Keterangan</th>
  <th>Aksi</th>
      </tr>
    </thead>
    <?php  
    $no=1;
    foreach ($lihat_transaksi as $lt) {?>
    <tbody>
    	<td><?= $no++; ?></td>
      <td><?= $lt->id_transaksi;?></td>
      <td><?= $lt->id_pelanggan;?></td>
    	<td><?= $lt->tgl_trans;?></td>	
    	<td><?= $lt->namapel;?></td>
    	<td><?= $lt->alamatpel;?></td>
      <td><?= $lt->jenis_paket;?></td>
      <td><?= $lt->keterangan;?></td>
      <td> 
        <?php
        echo anchor('Con_resiklaundry/del_feedbacku_confirm/'.$lt->id_transaksi.'', '<span class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#myModal2"></span>');
        ?>
           
      </td>
	</tbody>
	<?php } ?>
</table>
</div>
</div>
