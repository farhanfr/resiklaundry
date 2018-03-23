<!DOCTYPE html>
<html>
<head>
	<title>Login ResikLaundry</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/style_user.css">
	<script type="text/javascript" src="<?= base_url();?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
	<style type="text/css">
		body{
			background: url('<?= base_url();?>assets/img/resik_header.jpg');
			background-position: center;
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
		.wadah{
				width: 40%;
				margin:auto;
				margin-top: 10%;			
			}
			#notif_reg{
				 cursor: pointer;
    position: fixed;
    right: 0px;
    bottom: 0px;
    margin-bottom: 22px;
    margin-right: 15px;
    min-width: 300px; 
    max-width: 800px;  
			}
		@media screen and (max-width: 768px){
			.wadah{
				width: 100%;
				margin:auto;			
			}
		}
		@media screen and (max-width: 450px){
			.wadah{
				width: 100%;
				margin:auto;		
			}
		}

	</style>
</head>
<body>


<div class="panel panel-default wadah">
	<div class="panel-body">
		<h3>Login ResikLaundry</h3>

		<form method="post" action="<?php echo base_url().'index.php/Con_resiklaundry/logipel';?>">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="usernamepel" class="form-control" placeholder="Masukan username anda">
				<?= form_error('usernamepel');?>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="passwordpel" class="form-control" placeholder="Masukan password anda">
				<?= form_error('passwordpel');?>
			</div>
			<input type="submit" name="submit" class="btn btn-info" value="Login">
			<p style="color: red;"><?php echo @$logpel_fail;?></p>
			<?php echo @$alert; ?>
		</form>
<h5 style="text-align: left;color: #283038;">Tidak punya akun? 
<?php
	echo anchor('Con_resiklaundry/dash_regpel', 'oke daftar langsung');
?>
</h5>
<h5 style="text-align: left;color: #283038;">Kembali ke 
	<?php
	echo anchor('Con_resiklaundry/index', 'Halaman Utama');
?>

</h5>
	</div>
</div>

<h4 style="text-align: center;color:white;">&copy;ResikLaundry 2018</h4>

<div id="notif_reg"><?php echo $this->session->flashdata('msg_reg');?></div>

</body>
</html>
<script type="text/javascript">
	//NOTIF
$('#notif_reg').slideDown('slow').delay(3000).slideUp('slow');
</script>
