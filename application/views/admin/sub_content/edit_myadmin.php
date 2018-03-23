<?php
$query=$this->db->query("SELECT * FROM admin WHERE id_admin='".$this->session->id_admin."'")->row_array();
?>
<div class="panel panel-default" style="width: 40%;margin:auto;margin-top: 2%;">
	<div class="panel-body">
		<h3>My Data Admin</h3>
		<p>Anda dapat mengubah data Anda disini</p>

		<form method="post" action="<?php echo base_url().'index.php/Con_resiklaundry/up_mydatad';?>">
			<div class="form-group">
				<input type="hidden" name="id_admin" class="form-control" placeholder="Masukan nama anda" value=<?= $query['id_admin'];?> >
			
			</div>
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="namad" class="form-control" placeholder="Masukan nama anda" value=<?= $query['namad'];?> >
			
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="emailad" class="form-control" placeholder="Masukan nama anda" value=<?= $query['emailad'];?>>
				
			</div>		
			<div class="form-group">
				<label>No Hp</label>
				<input type="number" name="nomad" class="form-control" placeholder="Berapa no hp anda" value=<?= $query['nomad'];?>>
				
			</div>
			
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="usernamad" class="form-control" placeholder="Masukan username anda" value=<?= $query['usernamad'];?>>
				
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="text" name="passwordad" class="form-control" placeholder="Masukan password anda" value=<?= $query['passwordad'];?>>
				
			</div>
			<div class="form-group">
				<label>Status</label>
				<select name="status" class="form-control" >
					<option disabled>-- HARAP ISI STATUS "ONLINE TERLEBIH DAHULU" --</option>
					<option value="online">Online</option>
					<option value="sibuk">Sibuk</option>
					<option value="offline">Offline</option>
					<option value="afk">AFK (Away From Keyboard)</option>
				</select>
				<?= form_error('status');?>
			</div>

			<input type="submit" name="submit" value="Update Data" class="btn btn-info">
			
		</form>

	</div>

</div>
<h4 style="text-align: center;color: white;">&copy;ResikLaundry 2018 </h4>

