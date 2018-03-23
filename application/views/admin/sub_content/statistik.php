<style type="text/css">
  #div1 {
  /*background-color: red;*/
  transform: translateY(33%);
}

#time {
  font-family: 'Nova Mono', monospace;
  font-size: 18px;
  color: white;
  text-align: center;
  text-shadow: 0px 0px 20px;
}

</style>

<!--PANEL STATISTIK-->
<div class="container-fluid"><h3> <span class="glyphicon glyphicon-stat"></span> Statistik</h3></div>
 <div class="container-fluid statistic">
 	<div class="row">

 	<div class="col-xs-12 col-sm-6 col-md-3">
 		<div class="panel panel-default" style="background-color: #00C0EF;">
 			 <div class="panel-body">
   				 <h4 style="font-size: 20px;color: white;"><span class="counter"><?php echo $countpel; ?> </span> Pelanggan</h4>
  			</div>
  			<div class="panel-footer" style="background-color: #00ACD7;border: none;" >
  				<a href="<?= base_url();?>index.php/Con_resiklaundry/datapel_control"><h5 style="color: white;">Lihat Detail <span class=" glyphicon glyphicon-circle-arrow-right" ></span></h5></a>
  			</div>
		</div>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-3">
 		<div class="panel panel-default" style="background-color: #DD4B39;">
 			 <div class="panel-body" >
   				  <h4 style="font-size: 20px;color: white;"><span class="counter"><?php echo $countad; ?> </span> Admin</h4>
  			</div>
  			<div class="panel-footer" style="background-color: #C64333;border: none;">
  				<a href="<?= base_url();?>index.php/Con_resiklaundry/see_alldatad"><h5 style="color: white;">Lihat Detail <span class=" glyphicon glyphicon-circle-arrow-right" ></span></h5>
  			</div></a>
		</div>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-3">
 		<div class="panel panel-default" style="background-color: orange;">
 			 <div class="panel-body">
   				 <h4 style="font-size: 20px;color: white;"><span class="counter"><?php echo $countfeedpel; ?> </span> Feedback</h4>
  			</div>
  			<div class="panel-footer" style="background-color: #CF850F;border: none;">
  				<a href="<?= base_url();?>index.php/Con_resiklaundry/see_feedpel"><h5 style="color: white;">Lihat Detail <span class=" glyphicon glyphicon-circle-arrow-right" ></span></h5></a>
  			</div>
		</div>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-3">
 		<div class="panel panel-default" style="background-color: #00A65A;">
 			 <div class="panel-body" >
   				 <h4 style="font-size: 20px;color: white;"><span class="counter"><?php echo $counttrans;?></span> transaksi</h4>
  			</div>
  			<div class="panel-footer" style="background-color: #008D4D;border: none;">
  				<a href="<?= base_url();?>index.php/Con_resiklaundry/see_transaksi_foradmin"><h5 style="color: white;">Lihat Detail <span class=" glyphicon glyphicon-circle-arrow-right" ></span></h5></a>
  			</div>
		</div>
	</div>

</div>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-4">
<div class="panel panel-default">
    <div class="panel-heading" style="backgound-color:#191E23;border: none;color: white;text-align: center;">Waktu (WIB)</div>
    <div class="panel-body" style="background-color: #283038;">
   <div id="div1">
    <p id="time"></p>
  </div>
    </div>
  </div>
  </div>

<div class="col-xs-12 col-sm-6 col-md-4">
<div class="panel panel-default">
    <div class="panel-heading"> Status Admin </div>
    <div class="panel-body">
       <table class="table table-bordered">
         <thead>
           <tr>
             <th>Nama Admin</th>
             <th>Status</th>
           </tr>
         </thead>
         <tbody>
          <?php
          foreach ($see_status_admin_var as $ssav) { ?>
                
        
           <tr>
             <td><?php echo $ssav->namad;?></td>
             <td><?php echo $ssav->status;?></td>
           </tr>

           <?php } ?>
         </tbody>
       </table>
    </div>
  </div>
  </div>

<!--STATISTIK 2-->
<div class="container-fluid">
  <div class="row">

   <div class="col-xs-12 col-sm-6 col-md-12">
<div class="panel panel-default">
    <div class="panel-heading" style="background-color:silver;border: none;color: white;">Website Utama ResikLaundry</div>
    <div class="panel-body" style="background-color: #ffffff;">

     <iframe src="<?= base_url('index.php/Con_resiklaundry/index');?>" style="width: 100%;height: 100%;"></iframe>

    </div>
  </div>
  </div>



      

</div>
</div>

<script type="text/javascript">
  
window.setInterval(ut, 1000);

function ut() {
  var d = new Date();
  document.getElementById("time").innerHTML = d.toLocaleTimeString();
  document.getElementById("date").innerHTML = d.toLocaleDateString();
}
 
</script>