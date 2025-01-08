<?php
session_start();
include 'config.php';
$data = mysqli_query($kon, "SELECT * FROM web");
if (!$data) {
  printf("Error: %s\n", mysqli_error($kon));
  exit();
}
while($hasil = mysqli_fetch_array($data)){
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
      content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
      content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Member</title>
    <link rel="stylesheet" type="text/css" href="vendor/app-assets/css/pages/page-auth.css">
    <link rel="stylesheet" type="text/css" href="vendor/app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="apple-touch-icon" href="vendor/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="vendor/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
      rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="vendor/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="vendor/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="vendor/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="vendor/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="vendor/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="vendor/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="vendor/app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="vendor/app-assets/css/themes/semi-dark-layout.css">

    <link rel="stylesheet" type="text/css" href="vendor/app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="vendor/app-assets/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="vendor/app-assets/css/plugins/charts/chart-apex.css">
    <link rel="stylesheet" type="text/css" href="vendor/assets/css/style.css">
  </head>

  <style>
  body {
    background: -webkit-linear-gradient(90deg, #ff94fa, #ffff47);
    background: linear-gradient(90deg, #ff94fa, #ffff47);
    font-size: 14px;
    font-weight: 500;
    font-family: Rubik, sans-serif;
    color: black;
  }

  .navbar-container {
    background-color: #5ad9ff;
  }

  .table thead,
  .table th {
    text-align: center;
  }

  /* .dropdown-item {
    color: #000000;
  }

  .table {
    width: 100%;
    margin-bottom: 1rem;
    color: #000000;
  }
*/
  .table tbody tr:nth-child(odd) td {
    color: black;
    background-color: #b7f9c1;
  }

  .table tbody tr:nth-child(even) td {
    color: black;
    background-color: #fffe7e;
  }

  .table tbody tr.highlight td {
    color: black;
    background-color: #F2F5A9;
  }

  #logo {
    position: absolute;
    max-width: 160px;
    max-height: 100px;
    margin-left: 40px;
    margin-top: 10px;
  }

  .carousel-item img {
    margin: 0 auto;
    /* this will align the image to center. */
    width: auto;
    /* for those images which don't have a width specified, but has a max-height will be auto adjusted */
  }

  </style>

  <body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover"
    data-menu="horizontal-menu" data-col="">

    <nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center"
      data-nav="brand-center">
      <div class="navbar-header d-xl-block d-none">
        <ul class="nav navbar-nav">
          <li class="nav-item">
            <a href="#loginform" data-toggle="modal" data-dismiss="modal">
              <span class="brand-logo"></span>
              <h2 class="brand-text mb-0"></h2>
            </a>
          </li>
        </ul>
      </div>
      <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
          <img src="./assests/images/SINEMAHE.svg" alt="" id=logo alt="Logo image">
          <ul class="nav navbar-nav d-xl-none">
            <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon"
                  data-feather="menu"></i></a></li>
          </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ml-auto">
          <div class="media" style="margin-right:20px;">
            <div class="avatar bg-light-primary rounded mr-1">
              <div class="avatar-content">
                <i data-feather="phone-call" class="avatar-icon font-medium-3"></i>
              </div>
            </div>
            <div class="media-body">
              <small><strong>02836197570</strong></small>
              <h6 class="mb-0">
                bhamadahumas@gmail.com
              </h6>
            </div>
          </div>
          <div class="media">
            <div class="avatar bg-light-primary rounded mr-1">
              <div class="avatar-content">
                <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
              </div>
            </div>
            <div class="media-body">
              <small>Jl. Cut Nyak Dhien No.16, Desa Kalisapu, <br>
                Kecamatan Slawi, Kabupaten Tegal 52416</small>
            </div>
          </div>
          <!-- <li class="nav-item d-none d-lg-block">
            <a class="nav-link nav-link-style">
              <i class="ficon" data-feather="moon"></i>
            </a>
          </li> -->
          <li class="nav-item dropdown dropdown-user">
            <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="user-nav d-sm-flex d-none">
                <span class="user-name font-weight-bolder"></span>
                <span class="user-status"></span>
              </div>
              <span class="avatar"><img class="round" src="vendor/app-assets//images/portrait/small/h.png" alt="avatar"
                  height="40" width="40">
                <span class="avatar-status-online"></span></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
              <?php 
                          if (!empty($_SESSION)) {
                            echo '<a class="dropdown-item" href="#">
                                <i class="mr-50" data-feather="edit"></i>
                                Update Profile</a>
                            <a class="dropdown-item" href="page-auth-login-v2.html">
                                <i class="mr-50" data-feather="key"></i>
                                Update Password</a>
                            <a class="dropdown-item" href="logout.php">
                                <i class="mr-50" data-feather="log-out"></i>
                                Keluar</a> ';
                          }else {
                            echo '<a class="dropdown-item" href="login.php">
                                <i class="mr-50" data-feather="log-in"></i>
                                Login</a>
                                <a class="dropdown-item" href="registration.php">
                                <i class="mr-50" data-feather="file-text"></i>
                                Daftar Akun</a>';
                          }?>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <!-- MENU -->
    <div class="horizontal-menu-wrapper">
      <div
        class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-shadow menu-border container-xxl"
        role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
        <div class="navbar-header">
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
              <a href="#loginform" data-toggle="modal" data-dismiss="modal">
                <span class="brand-logo">
                  <!-- MASUKAN LOGO PERUSAHAAN -->
                </span>
                <img src="./assests/images/sinema2.png" alt="" height="80%" width="70%">
                <!-- <h2 class="brand-text mb-0">SINEMA</h2> -->
              </a>
            </li>
            <li class="nav-item nav-toggle">
              <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="navbar-container main-menu-content" data-menu="menu-container">
          <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
            <li data-menu="" <?php if (isset($_GET["home"])){echo 'class="active"';}?>>
              <a class="dropdown-item d-flex align-items-center" href="index.php?home">
                <i data-feather="home"></i>
                <span data-i18n="Documentation"><strong>Home</strong></span>
              </a>
            </li>
            <li data-menu="" <?php if (isset($_GET["profile"])){echo 'class="active"';}?>>
              <a class="dropdown-item d-flex align-items-center" href="profile.php?profile">
                <i data-feather="bar-chart-2"></i>
                <span data-i18n="Documentation"><strong>Profile</strong> </span>
              </a>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown" <?php if (isset($_GET["kerja"])){echo 'class="active"';}?>>
              <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
                <i data-feather="share-2"></i>
                <span data-i18n="Misc"><strong>Kerjasama</strong></span></a>
              <ul class="dropdown-menu">
                    <li data-menu="" <?php if (isset($_GET["kerja"])){echo 'class="active"';}?>>
                      <a class="dropdown-item d-flex align-items-center" href="kerja_lpm.php?kerja"
                        data-toggle="dropdown" data-i18n="Raise Support">
                        <i data-feather="circle"></i>
                        <span data-i18n="Raise Support">LPM</span></a>
                    </li>
                    <li data-menu="" <?php if (isset($_GET["kerja"])){echo 'class="active"';}?>>
                      <a class="dropdown-item d-flex align-items-center" href="kerja_lp2m.php?kerja"
                        data-toggle="dropdown" data-i18n="Raise Support">
                        <i data-feather="circle"></i>
                        <span data-i18n="Raise Support">LP2M</span></a>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                        class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown"
                        data-i18n="Second Level"><i data-feather="circle"></i><span
                          data-i18n="Second Level">FIKES</span></a>
                      <ul class="dropdown-menu">
                        <li data-menu="" <?php if (isset($_GET['lap'])) {echo 'class=""active';}?>><a
                            class="dropdown-item d-flex align-items-center" href="kerja_fikes_s1_keperawatan.php?kerja"
                            data-toggle="dropdown" data-i18n="Third Level"><i data-feather="circle"></i><span
                              data-i18n="Third Level">Ilmu
                              Keperawatan (S1)</span></a>
                        </li>
                        <li data-menu="" <?php if (isset($_GET['kerja'])) {echo 'class=""active';}?>><a
                            class="dropdown-item d-flex align-items-center" href="kerja_fikes_s1_farmasi.php?kerja"
                            data-toggle="dropdown" data-i18n="Third Level"><i data-feather="circle"></i><span
                              data-i18n="Third Level">Farmasi
                              (S1)</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="kerja_fikes_d3_kebidanan.php?kerja" data-toggle="dropdown" data-i18n="Third Level"><i
                              data-feather="circle"></i><span data-i18n="Third Level">Kebidanan (D3)</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="kerja_fikes_d3_keperawatan.php?kerja" data-toggle="dropdown" data-i18n="Third Level"><i
                              data-feather="circle"></i><span data-i18n="Third Level">Keperawatan (D3)</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="kerja_fikes_k3.php?kerja" data-toggle="dropdown" data-i18n="Third Level"><i
                              data-feather="circle"></i><span data-i18n="Third Level">Keselamatan dan Kesehatan Kerja
                              (D4)</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="lapker_fikes_ners.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                              data-feather="circle"></i><span data-i18n="Third Level">Profesi Ners</span></a>
                        </li>
                      </ul>
                    </li>
                    <!-- <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"
                      <?php if (isset($_GET['lap'])) {echo 'class=""active';}?>><a
                        class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown"
                        data-i18n="Second Level"><i data-feather="circle"></i><span
                          data-i18n="Second Level">FEB</span></a>
                      <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="lapker_feb_bisdig.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                              data-feather="circle"></i><span data-i18n="Third Level">Bisnis Digital (S1)</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="lapker_feb_kwu.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                              data-feather="circle"></i><span data-i18n="Third Level">Kewirausahaan (S1)</span></a>
                        </li>
                      </ul>
                    </li> -->
                     <li data-menu="" <?php if (isset($_GET["kerja"])){echo 'class="active"';}?>>
                      <a class="dropdown-item d-flex align-items-center" href="kerja_feb.php?kerja"
                        data-toggle="dropdown" data-i18n="Raise Support">
                        <i data-feather="circle"></i>
                        <span data-i18n="Raise Support">FEB</span></a>
                    </li>
                    <!-- <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"
                      <?php if (isset($_GET['lap'])) {echo 'class=""active';}?>><a
                        class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown"
                        data-i18n="Second Level"><i data-feather="circle"></i><span
                          data-i18n="Second Level">FIKOM</span></a>
                      <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="lapker_fikom_it.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                              data-feather="circle"></i><span data-i18n="Third Level">Informatika (S1)</span></a>
                        </li>
                      </ul>
                    </li> -->
                    <li data-menu="" <?php if (isset($_GET["kerja"])){echo 'class="active"';}?>>
                      <a class="dropdown-item d-flex align-items-center" href="kerja_fikom.php?kerja"
                        data-toggle="dropdown" data-i18n="Raise Support">
                        <i data-feather="circle"></i>
                        <span data-i18n="Raise Support">FIKOM</span></a>
                    </li>
              </ul>
            </li>
            <!-- <li data-menu="" <?php if (isset($_GET["kerjasama"])){echo 'class="active"';}?>>
              <a class="dropdown-item d-flex align-items-center" href="kerjasama?kerjasama">
                <i data-feather='share-2'></i>
                <span data-i18n="Documentation"> <strong>Kerjasama</strong> </span>
              </a>
            </li> -->
            <li data-menu="" <?php if (isset($_GET["info"])){echo 'class="active"';}?>>
              <a class="dropdown-item d-flex align-items-center" href="info.php?info">
                <i data-feather='help-circle'></i>
                <span data-i18n="Documentation"> <strong>Informasi</strong> </span>
              </a>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown" <?php if (isset($_GET["lap"])){echo 'class="active"';}?>>
              <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
                <i data-feather="book"></i>
                <span data-i18n="Misc"><strong>Laporan</strong></span></a>
              <ul class="dropdown-menu">

                <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                    class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown"
                    data-i18n="Charts"><i data-feather="pie-chart"></i><span data-i18n="Charts">Laporan
                      Kerjasama</span></a>
                  <ul class="dropdown-menu">
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                        class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown"
                        data-i18n="Second Level"><i data-feather="circle"></i><span
                          data-i18n="Second Level">UNIVERSITAS</span></a>
                      <ul class="dropdown-menu">
                        <li data-menu="" <?php if (isset($_GET['lap'])) {echo 'class=""active';}?>><a
                            class="dropdown-item d-flex align-items-center" href="lapker_univ.php?lap"
                            data-toggle="dropdown" data-i18n="Third Level"><i data-feather="circle"></i><span
                              data-i18n="Third Level">Antar Universitas</span></a>
                        </li>
                        <li data-menu="" <?php if (isset($_GET['lap'])) {echo 'class=""active';}?>><a
                            class="dropdown-item d-flex align-items-center" href="lapker_unit_humas.php?lap"
                            data-toggle="dropdown" data-i18n="Third Level"><i data-feather="circle"></i><span
                              data-i18n="Third Level">Unit Humas</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="lapker_unit_lab.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                              data-feather="circle"></i><span data-i18n="Third Level">Unit Laboratorium</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="lapker_unit_pmb.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                              data-feather="circle"></i><span data-i18n="Third Level">Unit PMB dan Promosi</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="lapker_unit_perpus.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                              data-feather="circle"></i><span data-i18n="Third Level">Unit Perpustakaan</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="lapker_unit_sarpras.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                              data-feather="circle"></i><span data-i18n="Third Level">Unit Sarana & Prasarana</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="lapker_unit_baak.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                              data-feather="circle"></i><span data-i18n="Third Level">BAAK</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="lapker_unit_bau.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                              data-feather="circle"></i><span data-i18n="Third Level">BAU</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="lapker_bid_akademik.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                              data-feather="circle"></i><span data-i18n="Third Level">Bidang Akademik</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="lapker_bid_keuangan.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                              data-feather="circle"></i><span data-i18n="Third Level">Bidang Keuangan</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="lapker_bid_mhs.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                              data-feather="circle"></i><span data-i18n="Third Level">Bidang Kemahasiswaan</span></a>
                        </li>
                      </ul>
                    </li>
                    <li data-menu="" <?php if (isset($_GET["lap"])){echo 'class="active"';}?>>
                      <a class="dropdown-item d-flex align-items-center" href="lapker_unit_lpm.php?lap"
                        data-toggle="dropdown" data-i18n="Raise Support">
                        <i data-feather="circle"></i>
                        <span data-i18n="Raise Support">LPM</span></a>
                    </li>
                    <li data-menu="" <?php if (isset($_GET["lap"])){echo 'class="active"';}?>>
                      <a class="dropdown-item d-flex align-items-center" href="lapker_unit_lp2m.php?lap"
                        data-toggle="dropdown" data-i18n="Raise Support">
                        <i data-feather="circle"></i>
                        <span data-i18n="Raise Support">LP2M</span></a>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                        class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown"
                        data-i18n="Second Level"><i data-feather="circle"></i><span
                          data-i18n="Second Level">FIKES</span></a>
                      <ul class="dropdown-menu">
                        <li data-menu="" <?php if (isset($_GET['lap'])) {echo 'class=""active';}?>><a
                            class="dropdown-item d-flex align-items-center" href="lapker_fikes_ik.php?lap"
                            data-toggle="dropdown" data-i18n="Third Level"><i data-feather="circle"></i><span
                              data-i18n="Third Level">Ilmu
                              Keperawatan (S1)</span></a>
                        </li>
                        <li data-menu="" <?php if (isset($_GET['lap'])) {echo 'class=""active';}?>><a
                            class="dropdown-item d-flex align-items-center" href="lapker_fikes_far.php?lap"
                            data-toggle="dropdown" data-i18n="Third Level"><i data-feather="circle"></i><span
                              data-i18n="Third Level">Farmasi
                              (S1)</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="lapker_fikes_bid.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                              data-feather="circle"></i><span data-i18n="Third Level">Kebidanan (D3)</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="lapker_fikes_per.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                              data-feather="circle"></i><span data-i18n="Third Level">Keperawatan (D3)</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="lapker_fikes_k3.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                              data-feather="circle"></i><span data-i18n="Third Level">Keselamatan dan Kesehatan Kerja
                              (D4)</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="lapker_fikes_ners.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                              data-feather="circle"></i><span data-i18n="Third Level">Profesi Ners</span></a>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"
                      <?php if (isset($_GET['lap'])) {echo 'class=""active';}?>><a
                        class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown"
                        data-i18n="Second Level"><i data-feather="circle"></i><span
                          data-i18n="Second Level">FEB</span></a>
                      <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="lapker_feb_bisdig.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                              data-feather="circle"></i><span data-i18n="Third Level">Bisnis Digital (S1)</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="lapker_feb_kwu.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                              data-feather="circle"></i><span data-i18n="Third Level">Kewirausahaan (S1)</span></a>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"
                      <?php if (isset($_GET['lap'])) {echo 'class=""active';}?>><a
                        class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown"
                        data-i18n="Second Level"><i data-feather="circle"></i><span
                          data-i18n="Second Level">FIKOM</span></a>
                      <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                            href="lapker_fikom_it.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                              data-feather="circle"></i><span data-i18n="Third Level">Informatika (S1)</span></a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li data-menu="" <?php if (isset($_GET["lap"])){echo 'class="active"';}?>>
                  <a class="dropdown-item d-flex align-items-center" href="lap_kinerja.php?lap" data-toggle="dropdown"
                    data-i18n="Raise Support">
                    <i data-feather="life-buoy"></i>
                    <span data-i18n="Raise Support">Laporan Kinerja Tahunan</span></a>
                </li>
                <li data-menu="" <?php if (isset($_GET["lap"])){echo 'class="active"';}?>>
                  <a class="dropdown-item d-flex align-items-center" href="lap_kep_mitra.php?lap" data-toggle="dropdown"
                    data-i18n="Raise Support">
                    <i data-feather="life-buoy"></i>
                    <span data-i18n="Raise Support">Laporan Kepuasan Mitra</span></a>
                </li>
                <li data-menu="" <?php if (isset($_GET["lap"])){echo 'class="active"';}?>>
                  <a class="dropdown-item d-flex align-items-center" href="lap_monev.php?lap" data-toggle="dropdown"
                    data-i18n="Raise Support">
                    <i data-feather="life-buoy"></i>
                    <span data-i18n="Raise Support">Laporan Monev</span></a>
                </li>
                 <li data-menu="" <?php if (isset($_GET["lap"])){echo 'class="active"';}?>>
                  <a class="dropdown-item d-flex align-items-center" href="lap_ami.php?lap" data-toggle="dropdown"
                    data-i18n="Raise Support">
                    <i data-feather="life-buoy"></i>
                    <span data-i18n="Raise Support">Laporan AMI</span></a>
                </li>
              </ul>
            </li>
            <!-- <li data-menu="" <?php if (isset($_GET["kontak"])){echo 'class="active"';}?>>
              <a class="dropdown-item d-flex align-items-center" href="kontak-kami.php?kontak">
                <i data-feather="phone-call"></i>
                <span data-i18n="Documentation">Kontak Kami</span>
              </a>
            </li> -->
            <!-- <li data-menu="">
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i data-feather="bar-chart-2"></i>
                <span data-i18n="Documentation"><strong>Statistik</strong> </span>
              </a>
            </li> -->
            <?php 
            if (!empty($_SESSION)) {
              echo ' <li data-menu="" >
              <a class="dropdown-item d-flex align-items-center" href="survei2.php">
                <i data-feather="bar-chart-2"></i>
                <span data-i18n="Documentation"><strong>Survei Kepuasan</strong> </span>
              </a>
            </li>
              ';
            }else {
              echo '';
            }
            ?>

          </ul>

        </div>
      </div>
    </div>
    <!-- END MENU -->
    <?php } ?>
