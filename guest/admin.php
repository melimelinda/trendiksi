<?php
session_start();
include "../admin/koneksi.php";

  if(!isset($_SESSION['username'])){
    header("location:login.php");
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

  <title>TRENDIKSI AL-MANSYUR AS-SALAMAH</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
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


   <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="../guest/admin.php" class="logo">TREN<span class="lite">DIKSI</span></a>
      <!--logo end-->

      

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava icon_profile">
                            </span>
                            <span class="username">
                              <?php 
                                //$_SESSION['username']=$username; 
                                echo "$username";
                              ?>
                             </span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li>
                <a href="../admin/inbox.php"><i class="icon_mail_alt"></i> My Inbox</a>
              </li>
              
              <li>
                <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
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
   <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="../guest/admin.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Forms</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="../admin/form-perijinan.php">Form Perijinan</a></li>
              <li><a class="" href="../admin/form-tamu.php">Form Tamu</a></li>
              <li><a class="" href="../admin/form-pendaftaran.php">Form Pendaftaran</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Tables</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="../admin/tabel-tamu.php">Table Tamu</a></li>
              <li><a class="" href="../admin/tabel-santri.php">Table Data Santri</a></li>
              <li><a class="" href="../admin/tabel-perijinan.php">Table Perijinan</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Pages</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
             <!--  <li><a class="" href="../admin/struktur.php">Struktur</a></li>
              <li><a class="" href="../admin/visi-misi.php"><span>Visi-Misi</span></a></li> -->
              <li><a class="" href="../admin/galery.php">Galery</a></li>
              <li><a class="" href="../admin/contak.php">Contak</a></li>
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <br/>
            <br/>
             <img src="img/head.png" width="100%" >
            <!-- <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="admin.php">Home</a></li>
              <li><a href="sejarah.html">Sejarah</a></li>
              <li><a href="struktur.html">Struktur</a></li>
              <li><a href="visi-misi.php">Visi-Misi</a></li>
              <li><a href="contak1.html">Contact</a></li>
              <li><a href="galery.php">Galery</a></li>
              <li><a href="login.php">Login</a></li>
            </ol> -->
          </div>
        </div><br><br>
        <div class="row">
          <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">

                <div class="item active">
                  <p align="center"><img src="img\logo.png" alt="Chicago" style="width:20%;"></p>
                  <div class="carousel-caption">
                    <h3>Logo Ponpes</h3>
                  </div>
                </div>

              
                <div class="item">
                  <p align="center"><img src="img\logo.jpg" alt="New York" style="width:50%;"></p>
                  <div class="carousel-caption">
                    <h3>Logo TRENDIKSI</h3>
                  </div>
                </div>
            
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

        </div><br><br>


        <!-- statics end -->




        <!-- project team & activity start -->
        <div class="row">
          <div class="col-lg-2">
            <section class="panel">
            </section>
          </div>
          <div class="col-lg-8">
            <section class="panel">
              <div class="panel-body">
                <h2 class="text-center text-uppercase text-secondary mb-0">PONDOK PESANTREN AL-MANSYUR AS-SALAMAH</h2>
                <hr class="star-dark mb-5">
                <br><br>
                <p align="justify" style="text-align: justify; text-indent: 0.5in; font-size: 17px">Obsesi mendirikan pondok pesantren
                    Terinspirasi dari Mas oping syarofin  memiliki pondok pesantren di Jogja lebih dari 200, semua anak dominan Indramayu di sini pun terinspirasi dari beliau.</p> <br>
                    <p align="justify" style="text-align: justify; text-indent: 0.5in; font-size: 17px">
                    Mamih dan bapa Hayudi sejatinya dengan rasa kedermawanan dari keduanya berinisiatif untuk mendirikan pondok pesantren modern dengan sasaran Anak-anak yatim-piatu disekitar lingkungan, ide itu muncul pada tahun 2014 lalu karena dorongan hati nurani mereka. Mereka berfikir lahan rumah seluas itu hanya di huni oleh mereka dan pembantunya dikarenakan anak-anak mereka sudah tumbuh besar dan nantinya berkeluarga dan pergi dengan kehidupan baru mereka masing-masing. Keduanya tidak ingin kesepian melanda ketika anak-anak mereka sudah berkeluarga. </p><br>
                    <p align="justify" style="text-align: justify; text-indent: 0.5in; font-size: 17px">
                    Disitulah ide mendirikan pondok pesantren Al Mansyur As Salamah muncul, namun niat baik belum tentu akan mendapatkan jalan yang mudah. Mereka hampir putus asa karena belum bisa mendapatkan anak asuh (santri/anak yatim) dan ditambah lagi dengan dana yg mereka punya minim. Singkat cerita 2 tahun silam penuh kegelisahan, muncullah ide untuk mencari santri dengan bekerja sama dengan kampus yang jaraknya lumayan dekat dari pondok, dan terjadilah pertemuan dengan  pihak kampus (pa Jamal) menyarankan  untuk yang menjadi santri disitu anak-anak yang sekiranya sangat membutuhkan khususnya anak formadiksi. </p><br>
                    <p align="justify" style="text-align: justify; text-indent: 0.5in; font-size: 17px">
                    Pa oping dan pa Hayudi 
                    "Temen sedari SD sampai kuliah bareng".Cita cita pondok pesantren Al Mansyur As Salamah Ingin membangun 50 kamar @2 orang....kapasitas 100 orang harapan lebih dari itu.

                    Pa Hayudi orang yang sangat sibuk, pondok pesantren Al Mansyur As Salamah... berjalan dengan mandiri, dan nanti akan ada teman dari pa oping
                    Dan kegiatan bukan hanya mengaji...akan di beri motivasi enterpreneur dan lain sebagainya...
                    Makna dari materi
                    Surah at talak ayat 2
                    "Siapa orang yang bertakwa kepada Allah, maka Allah akan memberikan jalan keluar"
                    "Bahkan Allah mengatakan bahwa yang bertakwa kepada-Nya maka akan mendapatkan rejeki yang tidak terduga"
                    Jangan lupa
                    "Berbakti kepada orang tua, tentu orang tua yang kita utamakan"
                    Sekian.</p>
              </div>
            </section>
          </div>
          <div class="col-lg-2">
            <section class="panel">
            </section>
          </div>
        </div><br><br>
        <!--/.row-->


        <div class="row">
          

        </div>


        <!-- Today status end -->



        <div class="row">

         

         
            <!--/social-box-->

         
          <!--/col-->

        </div>



        <!-- statics end -->




        <!-- project team & activity start -->
        <div class="row">
          
        </div><br><br>

        <div class="row">
          
          
        </div>
        <!-- project team & activity end -->

      </section>
      <div class="text-right">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
         
        </div>
      </div>
    </section>
    <!--main content end--><!-- 
  </section> -->
  <!-- container section start -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
