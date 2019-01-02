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
                <a href="inbox.php"><i class="icon_mail_alt"></i> My Inbox</a>
              </li>
              
              <li>
                <a href="../guest/logout.php"><i class="icon_key_alt"></i> Log Out</a>
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