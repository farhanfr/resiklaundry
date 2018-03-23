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
        margin-top: 5%;      
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
	foreach ($confirm_delete as $cd){?>
		
	


<div class="panel panel-default wadah">
  <div class="panel-body" style="text-align: center;">
    <h3>Akun ini akan dihapus?</h3>
	<center><?= anchor('Con_resiklaundry/datapel_control/'.$cd->id_pelanggan,'<button class="btn btn-success edit">Tidak Jadi Hapus</button>'); ?>
      <?= anchor('Con_resiklaundry/delpel2/'.$cd->id_pelanggan,'<button class="btn btn-danger delete">Hapus Akun Ini</button>'); ?></center>

    <?php 
    echo anchor('Con_resiklaundry/datapel_control', 'Kembali Ke tabel Data Pelanggan');
    ?>

  </div>
</div>
<?php } ?>
</body>
</html>