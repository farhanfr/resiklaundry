<!DOCTYPE html>
<html>
<head>
	<title>Data Feedback</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/bootstrap.css">
	<script type="text/javascript" src="<?= base_url();?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
	 <style type="text/css">
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
        width: 50%;
        margin:auto;
        margin-top: 3%;      
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

<?php
foreach ($see_pelanggan_data as $spd) {?>

<div class="panel panel-default wadah">
  <div class="panel-body">
    <h3>Edit Data Pelanggan untuk admin</h3>

    <form method="post" action="<?php echo base_url().'index.php/Con_resiklaundry/uppel2';?>">
      <div class="form-group">
        <input type="hidden" name="id_pelanggan" class="form-control" placeholder="Masukan nama anda" value="<?php echo $spd->id_pelanggan;?>" >
      
      </div>
      <div class="form-group">
        <label>Nama</label>
        <input type="text" name="namapel" class="form-control" placeholder="Masukan nama anda" value="<?php echo $spd->namapel;?>" >
      
      </div>
      <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alapel" class="form-control" placeholder="Anda Tinggal dimana" value="<?php echo $spd->alapel ?>">
        
      </div>
      <div class="form-group">
        <label>No Hp</label>
        <input type="number" name="nopel" class="form-control" placeholder="Berapa no hp anda" value="<?php echo $spd->nopel;?>">
        
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="emapel" class="form-control" placeholder="Masukan nama anda" value="<?php echo $spd->emapel;?>">
        
      </div>
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="usernamepel" class="form-control" placeholder="Masukan username anda" value="<?php echo $spd->usernamepel ?>">
        
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="text" name="passwordpel" class="form-control" placeholder="Masukan password anda" value="<?php echo $spd->passwordpel ?>">
        
      </div>
      <input type="submit" name="submit" class="btn btn-info">
      <?php echo @$notice_failregpel; ?>
    </form>

<?php } ?>


<h5 style="text-align: left;color: #283038;"> <?php
  echo anchor('Con_resiklaundry/datapel_control', 'Kembali');
?> </h5>
  </div>

</body>
</html>