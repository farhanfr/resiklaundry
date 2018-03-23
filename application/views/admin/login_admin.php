<!DOCTYPE html>
<html>
<head>
	<title>Login Admin ResikLaundry</title>
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
<div class="panel panel-default wadah">
	<div class="panel-body">
		<h3>Login Admin ResikLaundry</h3>

		<form method="post" action="<?php echo base_url().'index.php/Con_resiklaundry/logad';?>">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="usernamad" class="form-control" placeholder="Masukan username anda">
				<?= form_error('usernamad');?>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="passwordad" class="form-control" placeholder="Masukan password anda">
				<?= form_error('passwordad');?>
			</div>
			<input type="submit" name="submit" class="btn btn-info" value="Login">
			<p style="color: red;"><?php echo @$logad_fail;?></p>
		</form>
<h5 style="text-align: left;color: #283038;">Admin baru ya? 
<?php
	echo anchor('Con_resiklaundry/dash_regad', 'oke daftar langsung');
?>
</h5>

	</div>
</div>

<h4 style="text-align: center;color:white;">&copy;ResikLaundry 2018</h4>


</body>
</html>
