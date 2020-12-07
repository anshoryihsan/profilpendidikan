<?php
  $user_level = $this->session->userdata('level');
  $namauser = $this->session->userdata('nama');
  $status = $this->session->userdata('login_status');
  if($user_level!="Bag. Program" && $status!==false){
    redirect(base_url());
  }
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <title>SISTEM INFORMASI PROFIL PENDIDIKAN</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- common stylesheets-->
      <!--bootstrap css-->
      <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap-responsive.min.css')?>">
      <!-- iconSweet2 icon pack (16x16) -->
      <link rel="stylesheet" href="<?php echo base_url('assets/img/icsw2_16/icsw2_16.css')?>">
      <!-- splashy icon pack -->
      <link rel="stylesheet" href="<?php echo base_url('assets/img/splashy/splashy.css')?>">
      <!-- flag icons -->
      <link rel="stylesheet" href="<?php echo base_url('assets/img/flags/flags.css')?>">
      <!-- power tooltips -->
      <link rel="stylesheet" href="<?php echo base_url('assets/js/lib/powertip/jquery.powertip.css')?>">
      <!-- google web fonts -->
      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Abel">
      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300">

    <!-- aditional stylesheets -->
      <!-- tree plugin -->
        <link rel="stylesheet" href="<?php echo base_url('assets/js/lib/dynatree/skin/ui.dynatree.css')?>">

    <!-- aditional stylesheets -->
      <!-- datatables -->
      <link rel="stylesheet" href="<?php echo base_url('assets/datatables/jquery.dataTables_themeroller.css')?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/datatables/datatables.min.css')?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/datatables/fixedheader/css/fixedHeader.bootstrap.css')?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/datatables/fixedheader/css/fixedHeader.bootstrap.min.css')?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/datatables/fixedcolumns/css/fixedColumns.bootstrap.min.css')?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/datatables/responsive/css/responsive.dataTables.min.css')?>">
       <!--<link rel="stylesheet" href="<?//php echo base_url('assets/js/lib/datatables/css/datatables_beoro.css')?>">
        <link rel="stylesheet" href="<?//php echo base_url('assets/js/lib/datatables/extras/TableTools/media/css/TableTools.css')?>">-->

      <!-- main stylesheet -->
      <link rel="stylesheet" href="<?php echo base_url('assets/css/beoro.css')?>">

      <!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css"><![endif]-->
      <!--[if IE 9]><link rel="stylesheet" href="css/ie9.css"><![endif]-->
      <!--[if lt IE 9]>
        <script src="js/ie/html5shiv.min.js"></script>
        <script src="js/ie/respond.min.js"></script>
        <script src="js/lib/flot-charts/excanvas.min.js"></script>
      <![endif]-->

    </head>
    <body class="bg_d">
    <!-- main wrapper (without footer) -->
        <div class="main-wrapper">
        <!-- top bar -->
            <div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                  <div class="container">
                    <div id="fade-menu" class="pull-left">
                      <ul class="clearfix" id="mobile-nav">
                        <li>
                        <!--<a><label><strong>DINAS KABBUPATEN BANDUNG BARAT  Sistem Informasi Profil Pendidikan </strong></label></a>-->
                          <!--<a href="<?php echo site_url(); ?>/upt/Identias_sekolah/datasd/"><label>Data Sekolah Dasar</label></a>-->
                        </li>
                        <!--<li>
                          <a href="<?php echo site_url(); ?>/upt/Identias_sekolah/datasmp/"><label>Data Sekolah Menengah Pertama</label></a>
                        </li>-->
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
        <!-- header -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="main-logo"><a ><img src="<?php echo base_url('assets/a.png') ?>" alt="Unit Pelayanan Teknis Daerah (UPTD)"></a></div>
                    </div>
                    <div class="span5">
                        <nav class="nav-icons">
                            <ul>
                                <li><a href="<?php echo site_url(); ?>/masterdata/home" class="ptip_s" title="home"><i class="icsw16-home"></i></a></li>
                                <li><a href="<?php echo site_url(); ?>/masterdata/Identitas_sekolah" class="ptip_s" title="Data Sekolah Dasar">Data SD</a></li>
                                <li><a href="<?php echo site_url(); ?>/masterdata/Identitas_sekolah/datasmp" class="ptip_s" title="Data Sekolah Menengah Petama">Data SMP</a></li>
                            </ul>
                         </nav>
                    </div>
                    <div class="span3">
                        <div class="user-box">
                            <div class="user-box-inner">
                                <img src="" alt="" class="user-avatar img-avatar">
                                <div class="user-info">
                                    Welcome, <strong><?php echo "$namauser"; ?></strong>
                                    <ul class="unstyled">
                                        <li>&middot;</li>
                                        <li><a href="<?php echo site_url();?>/C_login/keluar">Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
