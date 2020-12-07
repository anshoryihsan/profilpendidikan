<!DOCTYPE html>
<html>
<head>
  <!--bootstrap-->
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap-theme.css')?>">
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js') ?>"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIstem Informasi Profil Sekolah</title>

  <style>
  #logo{
  width: 100px;
  height: 80px;
  }
  </style>
</head>
<body>

  <!--navbar atas-->
  <nav class="navbar navbar-inverse" style="background: rgba(6, 7, 8, 0);border-radius:0px;margin:0px;border:none;">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#" style="color:#fafafa; font-family:Poiret One; font-size: 24px;"><img src="<?php echo base_url('assets/a.png') ?>" alt="Unit Pelayanan Teknis Daerah (UPTD)"></a>
      </div>
    </div>
  </nav>

  <!--background-->
  <img src="<?php echo base_url(); ?>assets/home.png" style="margin-top: -50px !important; height:500px; width:100%"></img>

  <!--title-->
  <div class="col-md-5 col-md-offset-6" style="margin-top:-450px; border-radius:0px">
      <p style="color:#000; font-family:Poiret One; text-align:center; font-size:32px; margin:0px"><b> Selamat Datang di Profil Pendidikan</b></p>
      <p style="color:#000; font-family:Poiret One; text-align:center; font-size:18px"><b> Kabupaten Bandung Barat</b></p>
  </div>

  <!--form login-->
  <div class="well col-md-5 col-md-offset-6" style="margin-top: -229px; border-radius:0px">
    <div class="col-md-12">
      <p style="color:#ed6e37; font-family:Poiret One;"><b>Login To Acces System </b></p>
    </div>
    <form action="<?php echo base_url('index.php/C_login/masuk');?>" method="post">
      <?php $pesan = $this->session->flashdata('pesan'); if(isset($pesan)){ echo $pesan; }?>
      <div class="col-md-5">
        <input type="text" class="form-control" name="email" id="email" placeholder="example@example.com" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" required>
      </div>
      <div class="col-md-5">
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required>
      </div>
      <button value="Log in"  class="btn btn-default col-md-2" name="button" style="border-radius:0px;background:#0277bd; color:#fff; border:none">Login</button>
    </form>
  </div>

  <!--deskripsi footer-->
  <div class="well col-md-12"  style="background:#0277bd; border-radius:0px; margin:0px; border:none;">
    <div class="col-md-8 col-md-offset-2">
      <div class="col-md-4" style="color:#fff">
        <center>
          <span class="glyphicon glyphicon-cloud" style="font-size:72px"></span>
          <p>Perkantoran Pemerintah Kabupaten Bandung Barat Jl. Padalarang - Cisarua KM 2 Kecamatan Ngamprah, Gedung Cerdas LT 1</p>
        </center>
      </div>
      <div class="col-md-4" style="color:#fff">
        <center>
          <span class="glyphicon glyphicon-asterisk"  style="font-size:72px"></span>
          <p>(022)6866258 - (022)6866259 | kbb@bandungbaratkab.go.id</p>
        </center>
      </div>
      <div class="col-md-4" style="color:#fff">
        <center>
          <span class="glyphicon glyphicon-cloud"  style="font-size:72px"></span>
          <p>Profil pendidikan tingkat sekolah dasar dan menengah pertama kabupaten Bandung Barat</p>
        </center>
      </div>
    </div>
  </div>
</body>
</html>
