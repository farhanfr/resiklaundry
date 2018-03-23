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
  <h2>Feedback User ResikLaundry</h2>
    <p><b>Notice!!</b>, Jika ada yang spam yang tidak berguna hapus saja :v</p>
  <div class="table-responsive">          
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
  <th>no</th>
  <th>Id Feedback User</th>
  <th>Nama Pelanggan</th>
	<th>Email Pelanggan</th>
	<th>Jenis Feedback</th>
	<th>Isi Feedback</th>
  <th>Aksi</th>
      </tr>
    </thead>
    <?php  
    $no=1;
    foreach ($feedpel_data as $fd) {?>
    <tbody>
    	<td><?= $no++; ?></td>
      <td><?= $fd->id_feedbacku;?></td>
    	<td><?= $fd->namafeedu;?></td>	
    	<td><?= $fd->emafeedu;?></td>
    	<td><?= $fd->pilihfeedu;?></td>
      <td><?= $fd->isifeedu;?></td>
      <td> 
        <?php
        echo anchor('Con_resiklaundry/detail_form_feedbackad/'.$fd->id_feedbacku, '<span class="glyphicon glyphicon-pencil"> </span>');
        ?>
        <?php
        echo anchor('Con_resiklaundry/del_feedbacku_confirm/'.$fd->id_feedbacku.'', '<span class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#myModal2"></span>');
        ?>
           
      </td>
	</tbody>
	<?php } ?>
</table>
</div>
</div>
