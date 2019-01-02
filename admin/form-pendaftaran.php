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

  <title>Form Validation | Creative - Bootstrap 3 Responsive Admin Template</title>

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
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <img src="img/head.png" width="100%"><!--<i class="fa fa-laptop"></i> Dashboard</h3> -->
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="../guest/admin.php">Home</a></li>
              <li><i class="icon_document_alt"></i>Forms</li>
              <li><i class="fa fa-files-o"></i>Form Pendaftaran</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Form validations
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="formpendaftaran" method="POST" action="savedaftar.php">
                    <div class="form-group ">
                      <label for="nik" class="control-label col-lg-2">NIK </label>
                      <div class="col-lg-10">
                        <input class="form-control" id="nik" name="nik" type="number" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="nama" class="control-label col-lg-2">Nama </label>
                      <div class="col-lg-10">
                        <input class="form-control" id="nama" name="nama" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="tmptlahit" class="control-label col-lg-2">Tempat Lahir </label>
                      <div class="col-lg-10">
                        <input class="form-control " id="tmptlahir" type="text" name="tmptlahir" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="tgllahir" class="control-label col-lg-2">Tgl Lahir</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="tgllahir" type="date" name="tgllahir" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="jk" class="control-label col-lg-2">Jenis kelamin </label>
                      <div class="col-lg-10">
                        <input class="form-control" id="jk" name="jk" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="alamat" class="control-label col-lg-2">Alamat </label>
                      <div class="col-lg-10">
                        <input class="form-control" id="alamat" name="alamat" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="status" class="control-label col-lg-2">Status </label>
                      <div class="col-lg-10">
                        <input class="form-control" id="status" name="status" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="kewarganegaraan" class="control-label col-lg-2">Kewarganegaraan </label>
                      <div class="col-lg-10">
                        <input class="form-control" id="kewarganegaraan" name="kewarganegaraan" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="pekerjaan" class="control-label col-lg-2">Pekerjaan </label>
                      <div class="col-lg-10">
                        <input class="form-control" id="pekerjaan" name="pekerjaan" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="notelp" class="control-label col-lg-2">No. Telp </label>
                      <div class="col-lg-10">
                        <input class="form-control" id="notelp" name="notelp" type="number" required />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Save</button>
                        <button class="btn btn-default" type="button">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
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
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery validate js -->
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>

  <!-- custom form validation script for this page-->
  <script src="js/form-validation-script.js"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>
