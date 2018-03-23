<?php
$query=$this->db->query("SELECT * FROM pelanggan WHERE id_pelanggan='".$this->session->id_pelanggan."'")->row_array();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Resik Laundry Landing</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/style_user.css">
</head>
<body>

<!--SIDE NAVBAR IN <768PX AND SIDENAV PRIMARY-->
<div id="mySidenav" class="sidenav">
	<a class="closebtn" onclick="closeNav()">&times;</a>
	  <h2>ResikLaundry</h2>
  	<img src="<?= base_url();?>assets/img/user.png" class="img-responsive">
  		<?php
  		if ($this->session->id_pelanggan) {
  			echo '<h4>'.$query['namapel'].'</h4>';
  		}
  		else{
  			echo '<h4>Guest</h4>';
  		}
  		?>
  		<?php
  		if ($this->session->id_pelanggan) {
  			echo '<h4>'.$query['emapel'].'</h4>';
  		}
  		else{
  			echo '<h5>Guest@gmail.com</h5>';
  		}
  		?>
  		<?php
  		if ($this->session->id_pelanggan) {
  			echo ' <div class="dropdown accountaction">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Aksi akun anda
  <span class="caret"></span></button>
  <ul class="dropdown-menu dropmenu">
    <li>'.anchor('Con_resiklaundry/logoutpel', '<span class="glyphicon glyphicon-log-out"></span> Logout</a>').'</li>
    <li>'.anchor('Con_resiklaundry/dash_uppel', '<span class="glyphicon glyphicon-pencil"></span> Edit</a>').'</li>
    <li>'.anchor('Con_resiklaundry/dash_chodel', '<span class="glyphicon glyphicon-trash"></span> Delete').'</li>
  </ul>
</div>';
  		}
  		else{
  			echo '';
  		}
  		?>
  	<hr>
  <ul>
  	<div class="navbar768px">
  		<?php
			if ($this->session->id_pelanggan) {
				echo'<li><a href=<?= base_url'.('index.php/Con_resiklaundry/see_mailuser/'.$this->session->id_pelanggan.'').';?> Pesan <span class="badge"></span></a></li>';
				}else{
					echo '';
				}
				?>
		<?php
			if ($this->session->id_pelanggan) {
				echo '<li><a href=<?= base_url'.('index.php/Con_resiklaundry/see_transaksi/'.$this->session->id_pelanggan.'').';?> Transaksi Saya <span class="badge"></span></a></li>';
			}
			else{
				echo '';
			}
		?>
				

			</div>
			</ul>
			<?php
			if ($this->session->id_pelanggan) {
				echo '';
			}
			else{
				echo anchor('Con_resiklaundry/dash_logipel', '<button class="btn btn-success btn-block">Login</button>');
			}
			?>
			
</div>

<!--FEEDBACK MODAL-->
<?php
if ($this->session->id_pelanggan) {
	echo '<div id="feedbackmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 style="color:black;">Form Feedback</h4>
      </div>
      <div class="modal-body">

       <form method="post" action="'.base_url('index.php/Con_resiklaundry/feedpel').'">
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="" class="form-control" placeholder="Masukan nama anda" value="'.$query['namapel'].'" disabled>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="" class="form-control" placeholder="Masukan Email Anda" value="'.$query['emapel'].'" disabled>
			</div>
			<div class="form-group">
				<label>Jenis FeedBack</label>
				<select name="pilihfeedu" class="form-control">
					<option value="bug">Bug</option>
					<option value="report">Report</option>
					<option value="kritikan">Kritikan / Saran </option>
					<option value="lain">Lain-lain</option>
				</select>
			</div>
			<div class="form-group">
				<label>Feedback </label>
				<textarea name="isifeedu" placeholder="masukkan feedback anda" class="form-control"></textarea>
					'.form_error('isifeedu').'
			</div>
			<input type="submit" name="submit" class="btn btn-info" value="Kirim Feedback">
			'.@$feedu_fail.'
		
		</form>

		</div>
      </div>
    </div>

  </div>
</div>';
}
else{
echo '<div id="feedbackmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 style="color:black;">ResikLaundry System </h4>
      </div>
      <div class="modal-body">
       <h4 style="color:black;">Mohon untuk login terlebih dahulu</h4>
       '.anchor('Con_resiklaundry/dash_logipel', '<center><button type="submit" class="btn btn-default  btn-lg"><span class="glyphicon glyphicon-log-in"></span> LOGIN </button></center></div>').'
      </div>
     
    </div>

  </div>
</div>';
}
?>

<!--NAVBAR UPPER-->
<nav class="navbar navbar-default navbar-fixed-top menu">
	<div class="container-fluid">

			<div class="navbar-header">
				<button class="btn btn-default btnsidemenu" onclick="openNav()">&#9776; Menu</button>
				<a href="#" class="navbar-brand">ResikLaundry</a>
			</div>
			<ul class="nav navbar-nav menulist">
				<li><a href="#">Cara kerja kami</a></li>
				<li><a href="#">Harga</a></li>
				<li><a href="#">Produk Kami</a></li>
				<li><a href="#!">Jam Pelayanan</a></li>
				<li data-toggle="modal" data-target="#feedbackmodal"><a href="#">Feedback</a></li>
			</ul>
			<div class="navbar-right">
				<?php
				if ($this->session->id_pelanggan) {
					echo '<button type="submit" class="btn btn-default btnlogin btn-lg"  onclick="openNav()"><span class="glyphicon glyphicon-book"></span> My Data </button></div>';
				}
				else{
				echo anchor('Con_resiklaundry/dash_logipel', '<button type="submit" class="btn btn-default btnlogin btn-lg"><span class="glyphicon glyphicon-log-in"></span> LOGIN </button></div>');
				}
			
				?>
			 
			</div>
	</div>
</nav>

<!--PRIMARY HEADER-->

<div class="header">
	<h2><b>RESIK</b> LAUNDRY</h2>
	<p>Buat pakaian anda resik dan rapi berkilau</p>
	<div class="header_button">
	<button class="btn btn-default btn-lg btnbooking" data-toggle="modal" data-target="#transaksi"><span class="glyphicon glyphicon-shopping-cart"></span> Gunakan layanan Kami</button>
	<button class="btn btn-default btn-lg btnsee"><span class="glyphicon glyphicon-download"></span> jelajahi lihat Kami dulu</button>
	</div>
</div>


<!--MISI DAN VISI KAMI-->
<section data-as="true" class="anime-start-1" data-as-animation="anime-end-1">
<div class="misivisi">
	<div class="container ">
	<h2><span class="glyphicon glyphicon-flag"></span> <b>Misi Visi</b> Kami</h2>
	<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6
	">
		<div class="well">
			<div class="well-lg">
				<h3><b>Misi</b> Resik Laundry</h3>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-6
	">
		<div class="well">
			<div class="well-lg">
				<h3><b>Visi</b> Resik Laundry</h3>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id e</p>
			</div>
		</div>
	</div>
</div>

</div>
</div>
</div>
</section>

<!--MENGAPA MEMILIH KAMI-->
<section data-as="true" class="anime-start-2" data-as-animation="anime-end-2">
<div class="container-fluid pilihkami">
	<div class="container ">
		<h2><b>Mengapa Memilih</b> Kami</h2>
		<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="panel panel-default komen">
		<div class="media">
			<div class="media-left">
			<a href="#"><img src="<?= base_url();?>assets/img/rp.png" class="media-object"></a>
		</div>
		<div class="media-body">
			<h4 class="media-heading" style="color: black;">Harga Bersahabat</h4>
			<p>I bought tickets online. Since, this was my first time, I didn't now which seats to pick, so I randomly picked something near the front/center. The seats were clean-looking and I had a fun time playing with the power-recliner. I like how they give you a lot of space between people.
                               </p>
		</div>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="panel panel-default komen">
		<div class="media">
			<div class="media-left">
			<a href="#"><img src="<?= base_url();?>assets/img/clock.png" class="media-object"></a>
		</div>
		<div class="media-body">
			<h4 class="media-heading" style="color: black;" >Waktu Tepat</h4>
			<p>I bought tickets online. Since, this was my first time, I didn't now which seats to pick, so I randomly picked something near the front/center. The seats were clean-looking and I had a fun time playing with the power-recliner. I like how they give you a lot of space between people.
                               </p>
		</div>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="panel panel-default komen">
		<div class="media">
			<div class="media-left">
			<a href="#"><img src="<?= base_url();?>assets/img/technician.png" class="media-object"></a>
		</div>
		<div class="media-body">
			<h4 class="media-heading" style="color: black;">Petugas Ramah</h4>
			<p>I bought tickets online. Since, this was my first time, I didn't now which seats to pick, so I randomly picked something near the front/center. The seats were clean-looking and I had a fun time playing with the power-recliner. I like how they give you a lot of space between people.
                               </p>
		</div>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="panel panel-default komen">
		<div class="media">
			<div class="media-left">
			<a href="#"><img src="<?= base_url();?>assets/img/happy.png" class="media-object"></a>
		</div>
		<div class="media-body">
			<h4 class="media-heading" style="color: black;">Hasil Memuaskan</h4>
			<p>I bought tickets online. Since, this was my first time, I didn't now which seats to pick, so I randomly picked something near the front/center. The seats were clean-looking and I had a fun time playing with the power-recliner. I like how they give you a lot of space between people.
                               </p>
		</div>
					</div>
				</div>
			</div>

		</div><!--DIV ROW-->
</div>
</div>
</section>
<!--CARA PENGGUNA KAMI-->
<section data-as="true" class="anime-start-1" data-as-animation="anime-end-1">
<div class="container-fluid carakerja">
	<div class="container ">
		<h2><b>Cara Penggunaan</b> Kami</h2>
       <div class="tab-content">
           <div class="tab-pane active" id="a">
           	<h3>Mode Online</h3>
		<div class="row" style="text-align: center;">
		<div class="col-xs-12 col-sm-6 col-md-3">
			<img src="<?= base_url();?>assets/img/laundrykerja1.png">
			<h3>1. Pesan Online</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<img src="<?= base_url();?>assets/img/laundrykerja2.png">
			<h3>2. Pengambilan</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<img src="<?= base_url();?>assets/img/laundrykerja3.png">
			<h3>3. Proses Laundry</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<img src="<?= base_url();?>assets/img/laundrykerja4.png">
			<h3>4. Pengiriman</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
		</div>
	</div>
 </div>
 

		<div class="tab-pane fade" id="b">
			<h3>Mode Offline</h3>
		<div class="row" style="text-align: center;">
		<div class="col-xs-12 col-sm-6 col-md-3">
			<img src="<?= base_url();?>assets/img/laundrykerja6.png">
			<h3>1. Membawa Ke Kantor</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<img src="<?= base_url();?>assets/img/laundrykerja5.png">
			<h3>2. Mendapatkan Bonus</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<img src="<?= base_url();?>assets/img/laundrykerja3.png">
			<h3>3. Proses Laundry</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<img src="<?= base_url();?>assets/img/laundrykerja4.png">
			<h3>4. Pengiriman</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
		</div>
	</div>
</div>

       </div><!--DIV PENUTUP TAB-CONTENT -->
       <div class="tabbable btnmode">
       	<h4 style="color:white;">Tekan untuk lihat mode penggunaan</h4>
			<button class="btn btn-default btn-lg btnmodeon" href="#a" data-toggle="tab">Mode Online</button>
			<button class="btn btn-default btn-lg btnmodeof" href="#b" data-toggle="tab">Mode Offline</button>
       </div>

	</div>
</div><!--DIV PENUTUP CONTAINER FLUID CARAKERJA -->
</section>
<!--PRODUK KAMI-->
<section data-as="true" class="anime-start-2" data-as-animation="anime-end-2">
<div class="container-fluid prokam">
	<div class="container ">
		<h2><b>Produk</b> Kami</h2>
		<div class="row prokamcontent">
			<div class="col-xs-12 col-sm-4 col-md-4">
				<img src="<?= base_url();?>assets/img/produk3.png">
				<h3>Kiloan - Rp.15.000</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4">
				<img src="<?= base_url();?>assets/img/produk2.png">
				<h3>Flash - Rp.25.000</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
			</div>	
			<div class="col-xs-12 col-sm-4 col-md-4">
				<img src="<?= base_url();?>assets/img/produk.png">
				<h3>Platinum - Rp.50.000 </h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
			</div>
		</div>
		<div class="btnharga">
		<button class="btn btn-success btn-lg btnhargat">Lihat Harga Barang</button>
	</div>

	</div>
</div>
</section>
<!--TESTIMONIAL-->
<section data-as="true" class="anime-start-1" data-as-animation="anime-end-1">
<div class="container-fluid testimonial">
	<div class="container ">
		<h2><b>Testimonial</b> ResikLaundry</h2>
<div class="row">
                    <div class="col-md-12" data-wow-delay="0.2s">
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Bottom Carousel Indicators -->
                            <ol class="carousel-indicators" style="display: none;">
                                <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="img/pro2.jpg" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="img/pro2.jpg" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="img/pro2.jpg" alt="">
                                </li>
                            </ol>

                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner text-center">

                                <!-- Quote 1 -->
                                <div class="item active">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                                <small>Someone famous</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 2 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">

                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                <small>Someone famous</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 3 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">

                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                                <small>Someone famous</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>

                      
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</section>

<!--PEMBELIAN JASA-->
<section data-as="true" class="anime-start-2" data-as-animation="anime-end-2">
<div class="container-fluid pemjas">
  <h2>Anda mempunyai pakaian yang kotor, bau, kusam dan harus dicuci?</h2>
  <h2>Serahkan pada ResikLaundry, pakaian akan bersih dan wangi kembali</h2>
  <div class="btnbooking2zone">
  <button class="btn btn-default btn-lg btnbooking2" data-toggle="modal" data-target="#transaksi"><span class="glyphicon glyphicon-shopping-cart"></span> Gunakan Layanan Kami</button>
</div>
</div>
</section>
<?php
if (empty($this->session->id_pelanggan)) {
	echo '<div id="transaksi" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 style="color:black;">ResikLaundry System </h4>
      </div>
      <div class="modal-body">
       <h4 style="color:black;">Mohon untuk login terlebih dahulu</h4>
       '.anchor('Con_resiklaundry/dash_logipel', '<center><button type="submit" class="btn btn-default  btn-lg"><span class="glyphicon glyphicon-log-in"></span> LOGIN </button></center></div>').'
      </div>
    </div>
  </div>
</div>';
}
else {
	echo '
<div id="transaksi" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 style="color:black;"> Form Pembelian </h4>
      </div>
      <div class="modal-body">
      
      	  <form method="post" action="'.base_url('index.php/Con_resiklaundry/transaksi').'">
			<div class="form-group">
				<input type="hidden" name="id_pelanggan" class="form-control" placeholder="Masukan Alamat Anda" value="'.$query['id_pelanggan'].'">
			</div>
			<div class="form_group">
				<input type="hidden" name="tgl_trans" class="form-control" placeholder="Masukan nama anda" value="'.date('d-m-Y').'" >
			</div>
			<div class="form_group">
				<label>Nama Anda</label>
				<input type="text" name="namapel" class="form-control" placeholder="Masukan nama anda" value="'.$query['namapel'].'" disabled>
			</div>
			<div class="form-group">
				<label>Alamat Anda</label>
				<input type="text" name="alamatpel" class="form-control" placeholder="Masukan Alamat Anda" value="">
				'.form_error('alamatpel').'
			</div>
			<div class="form-group">
				<label>Jenis Paket</label>
				<select name="jenis_paket" class="form-control">
					<option value="Kiloan">Kiloan - Rp.15.000</option>
					<option value="flash">Flash - Rp.25.000</option>
					<option value="platinum">Platinum - Rp.50.000</option>
				</select>
			</div>
			<div class="form-group">
				<label>Keterangan (Optional)</label>
				<textarea name="keterangan" placeholder="masukkan Keterangan anda, Contoh:(Untuk Baju Merah tolong jangan dicapur dengan lainnya, soalnya mudah luntur)" class="form-control"></textarea>
			</div>
			<input type="submit" name="submit" class="btn btn-info" value="Pesan Sekarang">
		</form>


      </div>
    </div>
  </div>
</div>
	';
}
?>

<!--JAM PELAYANAN KAMI DAN NOTIF BUKA TUTUP-->
<div class="container-fluid jam_pelayanan">
	<div class="container">
		<h2><b>Jam</b> Pelayanan</h2>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg6">
			<div class="well well-lg">
				<table class="table table-condensed table-hover">
					<tr>
						<th>Hari</th>
						<th>Waktu</th>
					</tr>
					<tr>
						<td>Senin</td>
						<td>07.00 - 15.00 WIB</td>
					</tr>
					<tr>
						<td>Selasa</td>
						<td>07.00 - 15.00 WIB</td>
					</tr>
					<tr>
						<td>Rabu</td>
						<td>07.00 - 15.00 WIB</td>
					</tr>
					<tr>
						<td>Kamis</td>
						<td>07.00 - 15.00 WIB</td>
					</tr>
					<tr>
						<td>Jumat</td>
						<td>Libur</td>
					</tr>
					<tr>
						<td>Sabtu</td>
						<td>Libur</td>
					</tr>
					<tr>
						<td>Minggu</td>
						<td>07.00 - 15.00 WIB</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<?php
	date_default_timezone_set('Asia/Jakarta');
	$h=date('H');
	if (($h >= 7 ) && ($h <= 14)) {
		echo '<div class="alert alert-success">Hai !!, apakah anda mempunyai barang atau pakaian yang kotor atau ingin dibersihkan?, <b>Sekarang ResikLaundry buka</b> ^o^</div>';
	}
	else {
		echo '<div class="alert alert-danger">Maaf kami sudah tutup u_u, Tenang, kami akan buka lagi pada jam 7 pagi</div>';
	}
	?>
		</div>
	</div>
</div>
</div>

<hr style="width: 80%;">
<!--ARTIKEL LAUNDRY-->
<section data-as="true" class="anime-start-1" data-as-animation="anime-end-1">
<div class="container-fluid artikel">
	<div class="container">
	<h2><b>Artikel</b> Laundry</h2>
	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-4">
			<div class="thumbnail">
				<img src="<?= base_url();?>assets/img/art3.jpg" class="img-responsive">
				<div class="caption">
					<small style="color: grey;">Sumber http://www.laundrynesia.com</small>
					<h4>Interior rumah tampil ciamik dengan gorden yang selalu bersih</h4>

					<p>Gorden tak hanya digunakan untuk menutupi jendela agar kondisi di dalam rumah tidak terlihat sepenuhnya dari luar. Kain penutup jendela maupun pintu ini juga sekaligus berfungsi sebagai aksesori untuk mempercantik interior rumah. Tapi terkadang penghuni rumah mungkin</p>
					<button class="btn btn-info">Baca</button>
				</div>
			</div>	
		</div>

		<div class="col-xs-12 col-sm-4 col-md-4">
			<div class="thumbnail">
				<img src="<?= base_url();?>assets/img/art2.jpg" class="img-responsive">
				<div class="caption">
					<small style="color: grey;">Sumber http://www.laundrynesia.com</small>
					<h4>Tips ampuh merawat sofa kesayangan</h4>
					<p>Sofa memiliki berbagai macam bentuk dan jenis serta peletakannya pada rumah Anda. Sofa sering digunakan sehingga akan membuat sofa cepat kotor atau rusak. Untuk mencegah hal itu terjadi, Anda harus rajin merawat sofa Anda dan tahu betul bagaimana cara merawat sofa dengan baik dan benar tanpa adanya </p>
					<button class="btn btn-info">Baca</button>
				</div>
			</div>	
		</div>

		<div class="col-xs-12 col-sm-4 col-md-4">
			<div class="thumbnail">
				<img src="<?= base_url();?>assets/img/art5.jpg" class="img-responsive">
				<div class="caption">
					<small style="color: grey;">Sumber http://www.laundrynesia.com</small>
					<h4>Tidak ingin terjangkit alergi akibat tungau? Lakukan langkah berikut ini</h4>
					<p>Pada artikel sebelumnya telah dipaparkan secara ringkas sejumlah bahaya yang diakibatkan oleh tungau dan bagaimana gejala-gejalanya. Sebelumnya melanjutkan tidak ada salahnya jika anda membaca artikel kami tentang Tungau, kutu berbahaya yang selalu ada di sofa &</p>
					<button class="btn btn-info">Baca</button>
				</div>
			</div>	
		</div>

		</div>
	</div>
</div>
</section>
<!--FOOTER-->
<div class="container-fluid footer">
	<h2>&copy;Resik Laundry 2018 - Dibuat oleh Mochamad Farhan Fitrahtur Rachmad</h2>
</div>

<!--NOTIF-->
<div id="notif_trans"><?php echo $this->session->flashdata('msg_trans');?></div>


<script type="text/javascript" src="<?= base_url();?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/js/animate-scroll.js"></script>

</body>
</html>

<script type="text/javascript">
	$(document).scroll(function(){
    if($(this).scrollTop() > 0)
    {   
       $('.menu').css({"background":"white","box-shadow":"0 0 10px 0 black"});
       $('.menu ul li a').css({"color":"black"});
       $('.navbar-brand').css({"color":"black"});
       $('.btnlogin').css({"border":"2px solid black","color":"black"});
    } else {
       $('.menu').css({"background":"transparent","box-shadow":"none"});
        $('.menu ul li a').css({"color":"white"});
        $('.navbar-brand').css({"color":"white"});
        $('.btnlogin').css({"border":"2px solid white","color":"white"});
  
    }
});

function openNav() {
    document.getElementById("mySidenav").style.width = "260px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

//NOTIF
$('#notif_trans').slideDown('slow').delay(3000).slideUp('slow');
</script>