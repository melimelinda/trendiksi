<?php
session_start();
include "../admin/koneksi.php";

  if(!isset($_SESSION['username'])){
    header("location:../guest/login.php");
    exit();
  }else{
    $username = $_SESSION['username'];
  }
  ?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Basic Table | Creative - Bootstrap 3 Responsive Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <?php include "head.php"; ?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <img src="img/head.png" width="100%"><!--<i class="fa fa-laptop"></i> Dashboard</h3> -->
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="../guest/admin.html">Home</a></li>
              <li><i class="fa fa-table"></i>Table</li>
              <li><i class="fa fa-th-list"></i>Tabel Tamu</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-sm-10">
            <section class="panel">
              <header class="panel-heading">
                Tabel Tamu
              </header>
              <table class="table">
                <?php 
                  include "../admin/koneksi.php";
                ?>
                <thead>
                  <tr>
                    <form action="tabel-tamu.php" method="get">
                      <input type="text" name="cari" placeholder="Masukan Nama">
                      <input type="submit" value="Cari">
                    </form>
                    <?php 
                    if(isset($_GET['cari'])){
                      $cari = $_GET['cari'];
                      echo "<b>Hasil pencarian : ".$cari."</b>";
                    }
                    ?>
                    <br><br>
                  </tr>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Keterangan</th>
                    <th>Tgl. Berkunjung</th>
                    <th>No. Telp.</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                  
                </thead>
                <tbody>
                  <?php 
                  if(isset($_GET['cari'])){
                    $cari = $_GET['cari'];
                    $data = mysqli_query($con,"select * from tamu where nama like '%".$cari."%'");       
                  }else{
                    $data = mysqli_query($con,"select * from tamu order by id_tamu desc");    
                  }
                  $no = 1;
                  while($var = mysqli_fetch_array($data)){
                  echo "<tr>
                    <td>$no</td>
                    <td>$var[nama]</td>
                    <td>$var[alamat]</td>
                    <td>$var[keterangan]</td>
                    <td>$var[tgl]</td>
                    <td>$var[no_tlp]</td>";
                  ?>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="form-tamu.php"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" <?php echo "href='formedittamu.php?id_tamu=$var[id_tamu]'"; ?>><i class="icon_pencil-edit"></i></a>
                        <a class="btn btn-danger" <?php  echo "href='deletetamu.php?id_tamu=$var[id_tamu]'"?>><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  <?php echo "</tr>";
                  $no++;
                  }
                  ?>
                </tbody>
              </table>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          <a href="https://bootstrapmade.com/">Free Bootstrap Templates</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>
