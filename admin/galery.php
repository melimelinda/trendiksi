<?php
session_start();
include "../admin/koneksi.php";

  if(!isset($_SESSION['username'])){
    header("location:../guest/login.php");
    exit();
  }else{
    $username = $_SESSION['username'];
  }
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Form Component | Creative - Bootstrap 3 Responsive Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- date picker -->

  <!-- color picker -->

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
              <li><i class="fa fa-home"></i><a href="../guest/admin.php">Home</a></li>
              <li><i class="fa fa-bars"></i>Pages</li>
              <li><i class="fa fa-square-o"></i>Galery</li>
            </ol>
          </div>
        </div>
            <div class="row">
              <!-- Bootsrep Editor -->
              
              <!-- CKEditor -->
              <div class="col-lg-12">
                <section class="panel">
              <header class="panel-heading">
                Galery
              </header>
              <div class="panel-body">
                <form role="form" action="savegaleri.php" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="judul">Judul Gambar</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="tglupload">Tgl Galery</label>
                    <input type="date" class="form-control" id="tglupload" name="tglupload" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="gambar">Choose File</label>
                    <input type="file" id="gambar" name="gambar">
                    <p class="help-block">Deskripsi</p>
                  </div>
                  <div class="form-group">
                          <div class="col-sm-12">
                            <textarea class="form-control ckeditor" name="deskripsi" rows="6"></textarea>
                          </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>

              </div>
            
              </div>
            </div>
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
                    <th>No.</th>
                    <th>Judul Gambar</th>
                    <th>Tgl. Upload</th>
                    <th>Gambar</th>
                    <th>Deskripsi</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                  
                </thead>
                <tbody>
                  <?php 
                  $query=mysqli_query($con,"SELECT * FROM galeri ORDER BY id_galeri DESC");
                  $no=1;
                  while($var=mysqli_fetch_array($query)){
                  echo "<tr>
                    <td>$no</td>
                    <td>$var[nama]</td>
                    <td>$var[tgl_galeri]</td>
                    <td>$var[gambar]</td>
                    <td>$var[deskripsi]</td>";
                  ?>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-danger" <?php  echo "href='deletegaleri.php?id_galeri=$var[id_galeri]'"?>><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  <?php echo "</tr>";
                  $no++;
                  }
                  ?>
                </tbody>
              </table>
            </section>
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
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

  <!-- jquery ui -->
  <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

  <!--custom checkbox & radio-->
  <script type="text/javascript" src="js/ga.js"></script>
  <!--custom switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>

  <!-- colorpicker -->

  <!-- bootstrap-wysiwyg -->
  <script src="js/jquery.hotkeys.js"></script>
  <script src="js/bootstrap-wysiwyg.js"></script>
  <script src="js/bootstrap-wysiwyg-custom.js"></script>
  <!-- ck editor -->
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
  <!-- custom form component script for this page-->
  <script src="js/form-component.js"></script>
  <!-- custome script for all page -->
  <script src="js/scripts.js"></script>


</body>

</html>
