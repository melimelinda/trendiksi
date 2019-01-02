<?php
session_start();
include "../admin/koneksi.php";

if (isset($_POST["simpan"])) {
$nama   = $_POST['nama'];
$email  = $_POST['email'];
$notelp  = $_POST['notelp'];
$pesan  = $_POST['pesan'];
$tgl = date('Y-m-d');
mysqli_query($con,"INSERT INTO inbox (nama,email,notelp,pesan,tgl)
VALUE('$nama','$email','$notelp','$pesan','$tgl')")or die("Database Tidak Bisa Di Buka ");
//header('location:../guest/contak.php');
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
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    

    <!-- Custom styles for this template -->
    <link href="freelancer.min.css" rel="stylesheet">

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
  <header class="header dark-bg">
      <div class="toggle-nav">
      </div>

      <!--logo start-->
      <a href="../index.php" class="logo">TREN<span class="lite">DIKSI</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
              <li><a href="struktur.php">Struktur</a></li>
              <li><a href="visi-misi.php">Visi-Misi</a></li>
              <li><a href="contak.php">Contact</a></li>
              <li><a href="galery.php">Galery</a></li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
            <li id="mail_notificatoin_bar" class="dropdown">
              
              
            </li>
            <!-- inbox notificatoin end -->
            <!-- alert notification start-->
            <li id="alert_notificatoin_bar" class="dropdown">
              
            </li>
            <!-- alert notification end-->
            <!-- user login dropdown start-->
            <li class="dropdown">
              <a href="login.php"><i class="icon_profile"></i> Login</a>
            </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notifica            <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
      
    </header>
        
            
    <!--header end-->

    <!--sidebar start-->

    <!--main content start-->
    <!-- <section id="main-content">
      <section class="wrapper"> -->
        <div class="row">
          <div class="col-lg-12">
            <br/>
            <br/>
            <img src="img/head.png" width="100%">
          </div>
        </div>
        <div class="row">
              <!-- Bootsrep Editor -->
              
              <!-- CKEditor -->
          <div class="col-lg-12">
              <div class="panel-body">
                <section id="contact">
                  <div class="container">
                    <h2 class="text-center text-uppercase text-secondary mb-0">Contact</h2>
                    <hr class="star-dark mb-5">
                    <div class="row">
                      <div class="col-lg-8 mx-auto">
                        <form  method="POST" action="">
                          <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                              <label>Name</label>
                              <input class="form-control" id="name" type="text" name="nama" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                            </div>
                          </div>
                          <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                              <label>Email Address</label>
                              <input class="form-control" id="email" type="email" name="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                            </div>
                          </div>
                          <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                              <label>Phone Number</label>
                              <input class="form-control" id="phone" name="notelp" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                            </div>
                          </div>
                          <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                              <label>Message</label>
                              <textarea class="form-control" id="message" name="pesan" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                            </div>
                          </div>
                          <br><!-- 
                          <div id="success"></div> -->
                          <div class="form-group">
                            <input type="submit" name="simpan" class="btn btn-primary btn-xl" value="Simpan">
                            <!-- <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button> -->
                          </div>
                        </form>
                        
                      </div>
                    </div> 
                  </div>
                </section>
                <footer class="footer text-center">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-4 mb-5 mb-lg-0">
                        <h2 class="text-uppercase mb-4">Location</h2>
                        <?php 
                        $query=mysqli_query($con,"SELECT * FROM kontak ORDER BY alamat");
                        $no=1;
                        while($var=mysqli_fetch_array($query)){
                        echo "<p>$var[alamat]</p>";
                        ?>
                      </div>
                      <div class="col-md-4 mb-5 mb-lg-0">
                        <h2 class="text-uppercase mb-4">Around the Web</h2>
                        <ul class="list-inline mb-0">
                          <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" <?php echo "href='$var[fb]'"; ?> >
                              <i class="fab fa-fw fa-facebook-f"></i>
                            </a>
                          </li>
                          <!--  -->
                          <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" >
                              <i class="fab fa-fw fa-twitter"></i>
                            </a>
                          </li>
                          
                        </ul>
                      </div>
                      <div class="col-md-4">
                        <h2 class="text-uppercase mb-4">Phone</h2>
                        <p ><?php echo "$var[nohp] <br> $var[email]";  ?> </p>
                      </div>
                      <?php
                      }
                          ?>
                    </div>
                  </div>
                </footer>
                <div class="copyright py-4 text-center text-white">
                  <div class="container">
                    <a href="https://bootstrapmade.com/">Free Bootstrap Templates</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        <!-- page end-->
    <!--   </section>
    </section> -->
    <!--main content end-->
    <!-- <div class="text-right">
      <div class="credits">
          
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          
          
        </div>
    </div> -->
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
  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>


</body>

</html>
