<!DOCTYPE html>
<html>
<head>
	<title>Register Admin ResikLaundry</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/style_user.css">
	<style type="text/css">
	body{
		background: url('<?= base_url();?>assets/img/jasa.jpg');
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
				margin-top: 2%;			
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
		<h3>Register Admin ResikLaundry</h3>

		<form method="post" action="<?php echo base_url().'index.php/Con_resiklaundry/regad';?>">
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="namad" class="form-control" placeholder="Masukan nama anda">
				<?= form_error('namad');?>
			
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="emailad" class="form-control" placeholder="Masukkan Email Anda">
				<?= form_error('emailad');?>
				
			</div>
			<div class="form-group">
				<label>No Hp</label>
				<input type="number" name="nomad" class="form-control" placeholder="Berapa no hp anda">
				<?= form_error('nomad');?>
				
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="usernamad" class="form-control" placeholder="Masukan Username anda">
				<?= form_error('usernamad');?>
				<h5 style="color: red;text-align: left;"><?php echo @$dup_usernamad; ?></h5>
				
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="passwordad" class="form-control" placeholder="Masukan password anda">
				<?= form_error('passwordad');?>
				
				
			</div>
			<div class="form-group">
				<label>Status</label>
				<select name="status" class="form-control">
					<option disabled>-- HARAP ISI STATUS "ONLINE TERLEBIH DAHULU" --</option>
					<option value="online">Online</option>
					<option value="sibuk">Sibuk</option>
					<option value="offline">Offline</option>
					<option value="afk">AFK (Away From Keyboard)</option>
				</select>
				<?= form_error('status');?>
			</div>

			<input type="submit" name="submit" class="btn btn-info" value="Register Data">
			<?php echo @$regad_fail; ?>
		</form>

<h5 style="text-align: left;color: #283038;">Sudah pernah daftar? <?php
	echo anchor('Con_resiklaundry/dash_logad', 'oke Login');
?> </h5>
	</div>

</div>
<h4 style="text-align: center;color: white;">&copy;ResikLaundry 2018 </h4>

</body>
</html>