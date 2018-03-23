<?php
$query=$this->db->query("SELECT * FROM pelanggan WHERE id_pelanggan='".$this->session->id_pelanggan."'")->row_array();
?>
<html>
<head>
	<title>Delete Account Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/style_user.css">
	<style type="text/css">
		body{
			background: url('<?= base_url();?>assets/img/resik_header.jpg');
		}
		input[type="text"],input[type="password"],input[type="number"],input[type="email"]{
			border-radius: 1px;
			border: none;
			box-shadow: none;
			border-bottom: 1px solid silver;
		}
		.form-control:focus {
   			 border-color: #AC3038;
  			 box-shadow: none;
		}
		.panel-default{
			animation: slidedown .6s;
			-webkit-animation: slidedown .6s;
		}
		@keyframes slidedown{
			from{
				opacity: 0;
				-webkit-transform: translate3d(0,-100%,0);
				   -moz-transform: translate3d(0,-100%,0);
				    -ms-transform: translate3d(0,-100%,0);
				     -o-transform: translate3d(0,-100%,0);
				        transform: translate3d(0,-100%,0);
			}
			to{
				opacity: 1;
				-webkit-transform: none;
				   -moz-transform: none;
				    -ms-transform: none;
				     -o-transform: none;
				        transform: none;
			}
		}
		.panel h4{
			color: #283038;
			font-size: 22px;
		}
		.wadah{
				width: 40%;
				margin:auto;
				margin-top: 10%;			
			}
		@media screen and (max-width: 450px){
			.wadah{
				width: 100%;
				margin:auto;
				margin-top: 10%;			
			}
		}
		

	</style>
</head>
<body>
<div class="panel panel-default wadah" style="width: 40%;margin:auto;margin-top: 10%;">
	<div class="panel-body">
		<h4>Apakah anda akan menghapus akun resiklaundry ?</h4>
		<?php
		echo anchor('Con_resiklaundry/index', '<button class="btn btn-success btn-block">Tenang saya tidak akan menghapus</button>');
		
		?>
		<hr>
		<?php
		echo anchor('Con_resiklaundry/delpel/'.$query['id_pelanggan'], '<button class="btn btn-danger btn-block" style="5%;">Maaf saya akan menghapus</button>');
		
		?>

	</div>
</div>

</body>
</html>