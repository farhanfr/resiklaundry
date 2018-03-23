<?php
$fecth_data=$this->db->query("SELECT * FROM admin WHERE id_admin='".$this->session->id_admin."'")->row_array();
?>
<html>
<head>
	<title><?php echo $title;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/style_admin.css">
	<script type="text/javascript" src="<?= base_url();?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/js/jquery.countimator.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/js/jquery.countimator.wheel.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="#" class="navbar-brand">Admin <b>RESIK</b><font style="font-size: 15px;">LAUNDRY</font></a>
		</div>
    <ul class="nav navbar-nav">
        <li class="<?php
 		if($this->uri->segment(2)=="statistik" ){
 			echo'active';
 		}
        ?>"><a href="<?= base_url();?>index.php/Con_resiklaundry/statistik">Statistik</a></li><!--
     --><li class="<?php
 		if($this->uri->segment(2)=="see_mydatad"){
 			echo'active';
 		}
        ?>"><a href="<?= base_url();?>index.php/Con_resiklaundry/see_mydatad">MyData Admin</a></li><!--
     --><li class="<?php
 		if($this->uri->segment(2)=="datapel_control"){
 			echo'active';
 		}
        ?>"><a href="<?= base_url();?>index.php/Con_resiklaundry/datapel_control">Data Pelanggan</a></li>
     <li class="<?php
 		if($this->uri->segment(2)=="see_feedpel"){
 			echo'active';
 		}
        ?>"><a href="<?= base_url();?>index.php/Con_resiklaundry/see_feedpel">Data Feedback</a></li>
     <li class="<?php
     	if($this->uri->segment(2)=="see_transaksi_foradmin"){
     		echo'active';
     	}
     ?>"><a href="<?= base_url();?>index.php/Con_resiklaundry/see_transaksi_foradmin"">Data Transaksi</a></li>
     <li><a href="#">Bantuan / Petunjuk</a></li>
     
    </ul>

    <div class="navbar-right">
				<?php
				if ($this->session->id_admin) {
					echo anchor('Con_resiklaundry/logoutad', '<button type="submit" class="btn btn-default btnlogin btn-lg"><span class="glyphicon glyphicon-log-in"></span> LOGOUT </button></div>');
				}
				else{
				echo anchor('Con_resiklaundry/dash_logad', '<button type="submit" class="btn btn-default btnlogin btn-lg"><span class="glyphicon glyphicon-log-in"></span> LOGIN </button></div>');
				}
			
				?>
			 
			</div>

</nav>

<div class="container">
<h4 style="text-align: right;"><span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-placement="bottom" title="Ini Status Anda saat ini, Silahkan Update di MyData Admin"></span> Status Anda saat ini: <?php echo $fecth_data['status'];?></h4>
</div>
 

<?php $this->load->view($content);?>


</body>
</html>
<script>
	$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});

/*COUNET*/
$(function() {
  $(".counter").countimator();
});
</script>