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

<?php foreach ($confirm_feedbacku as $cf) { ?>
  


<div class="panel panel-default wadah">
  <div class="panel-body">
    <h3>Hapus Feedback Ini?</h3>
    <?php
    echo anchor('Con_resiklaundry/del_feedbacku/'.$cf->id_feedbacku.'', '  <button class="btn btn-danger">Saya hapus</button>');
    ?>
    <?php
    echo anchor('Con_resiklaundry/see_feedpel', '<button class="btn btn-success">tidak hapus</button>');
    ?>
     
    <?php 
    echo anchor('Con_resiklaundry/see_feedpel', 'Kembali Ke tabel Feedback');
    ?>

  </div>
</div>

<?php } ?>