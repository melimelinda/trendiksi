<?php
session_start();
include "admin/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content=" width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>TRENDIKSI AL-MANSYUR AS-SALAMAH</title>

  <!-- Bootstrap CSS -->
  <link href="guest/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="guest/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="guest/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="guest/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="guest/css/owl.carousel.css" type="text/css">
  <link href="guest/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="guest/css/fullcalendar.css">
  <link href="guest/css/widgets.css" rel="stylesheet">
  <link href="guest/css/style.css" rel="stylesheet">
  <link href="guest/css/style-responsive.css" rel="stylesheet" />
  <link href="guest/css/xcharts.min.css" rel=" stylesheet">
  <link href="guest/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <link rel="stylesheet" href="guest/css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="guest/js/bootstrap.min.js"></script>
  <link href="guest/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="guest/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    

    <!-- Custom styles for this template -->
    <link href="guest/freelancer.min.css" rel="stylesheet">
  
 
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
 
    <!--sidebar end-->

    <!--main content start-->
    <!-- <section id="main-content"> -->
      <!-- <section class="wrapper"> -->
        <!--overview start-->
    <!--header start-->

   <header class="header dark-bg">
      <div class="toggle-nav">
      </div>

      <!--logo start-->
      <a href="index.php" class="logo">TREN<span class="lite">DIKSI</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
              <li><a href="guest/struktur.php">Struktur</a></li>
              <li><a href="guest/visi-misi.php">Visi-Misi</a></li>
              <li><a href="guest/contak.php">Contact</a></li>
              <li><a href="guest/galery.php">Galery</a></li>
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
              <a href="guest/login.php"><i class="icon_profile"></i> Login</a>
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
        <div class="row">
          <div class="col-lg-12">
            <br/>
            <br/>
             <img src="guest/img/head.png" width="100%" >
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
        </div>
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
                  <p align="center"><img src="guest\img\logo.png" alt="Chicago" style="width:20%;"></p>
                  <div class="carousel-caption">
                    <h3>Logo Ponpes</h3>
                  </div>
                </div>

              
                <div class="item">
                  <p align="center"><img src="guest\img\logo.jpg" alt="New York" style="width:50%;"></p>
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


        <div class="row">
          
          
        </div>
        <!-- project team & activity end -->

      <!-- </section> -->
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
    <!--main content end-->
  <!-- </section> -->
  <!-- container section start -->

  <!-- javascripts -->
  <script src="guest/js/jquery.js"></script>
  <script src="guest/js/jquery-ui-1.10.4.min.js"></script>
  <script src="guest/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="guest/js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="guest/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="guest/js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="guest/assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="guest/js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="guest/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="guest/js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="guest/js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="guest/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="guest/js/calendar-custom.js"></script>
    <script src="guest/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="guest/js/jquery.customSelect.min.js"></script>
    <script src="guest/assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="guest/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="guest/js/sparkline-chart.js"></script>
    <script src="guest/js/easy-pie-chart.js"></script>
    <script src="guest/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="guest/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="guest/js/xcharts.min.js"></script>
    <script src="guest/js/jquery.autosize.min.js"></script>
    <script src="guest/js/jquery.placeholder.min.js"></script>
    <script src="guest/js/gdp-data.js"></script>
    <script src="guest/js/morris.min.js"></script>
    <script src="guest/js/sparklines.js"></script>
    <script src="guest/js/charts.js"></script>
    <script src="guest/js/jquery.slimscroll.min.js"></script>
    <script src="guest/vendor/jquery/jquery.min.js"></script>
    <script src="guest/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="guest/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="guest/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="guest/js/jqBootstrapValidation.js"></script>
    <script src="guest/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="guest/js/freelancer.min.js"></script>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script>
  $(document).ready(function() {    
    //Events that reset and restart the timer animation when the slides change
    $("#transition-timer-carousel").on("slide.bs.carousel", function(event) {
      //The animate class gets removed so that it jumps straight back to 0%
      $(".transition-timer-carousel-progress-bar", this)
        .removeClass("animate").css("width", "0%");
    }).on("slid.bs.carousel", function(event) {
      //The slide transition finished, so re-add the animate class so that
      //the timer bar takes time to fill up
      $(".transition-timer-carousel-progress-bar", this)
        .addClass("animate").css("width", "100%");
    });
    
    //Kick off the initial slide animation when the document is ready
    $(".transition-timer-carousel-progress-bar", "#transition-timer-carousel")
      .css("width", "100%");
  });
  </script>
</body>

</html>
