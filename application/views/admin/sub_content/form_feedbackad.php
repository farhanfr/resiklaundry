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
  $fetch=$this->db->query("SELECT * FROM admin WHERE id_admin='".$this->session->id_admin."'")->row_array();
?>


<?php
foreach ($form_fbad as $ff) { ?>
  



<div class="panel panel-default wadah">
  <div class="panel-body">
    <h3>Form Feedback Admin</h3>

    <form method="post" action="<?= base_url().'index.php/Con_resiklaundry/feedad';?>">
      <div class="form-group">
        <label>Nama Admin</label>
        <input type="text" name="namad" class="form-control" disabled placeholder="Masukan username anda" value=<?php echo $fetch['namad'];?>>
      
      </div>
      <div class="form-group">
        <label>Id Feedback User ("Mohon untuk tidak mengubah id ini")</label>
        <input type="text" name="id_feedbacku" class="form-control"  placeholder="Masukan username anda" value=<?php echo $ff->id_feedbacku;?>>                 
      </div>

       <div class="form-group">
        <label>id Pelanggan ("Mohon untuk tidak mengubah id ini")</label>
        <input type="text" name="id_pelanggan" class="form-control"  placeholder="Masukan username anda" value=<?php echo $ff->id_pelanggan;?>>
      
      </div>
       <div class="form-group">
        <label>Kirim Ke</label>
        <input type="text" name="namafeedu" class="form-control" disabled placeholder="Masukan username anda" value=<?php echo $ff->namafeedu;?>>
      
      </div>
      <div class="form-group">
        <label>Feedback</label>
        <input type="text" name="isifeedad" required class="form-control" placeholder="Masukan Feedback anda">
        
      </div>
      <input type="submit" name="submit" class="btn btn-info" value="Kirim Feedback">
    </form>

    <?php 
    echo anchor('Con_resiklaundry/see_feedpel', 'Kembali Ke tabel Feedback');
    ?>

  </div>
</div>

<?php } ?>
    

</body>
</html>