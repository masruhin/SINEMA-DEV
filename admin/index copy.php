<?php
include "config.php";
session_start();
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $cek = $kon->query("SELECT * FROM users WHERE username='$username' AND password='$password' ");
  if (mysqli_num_rows($cek) == 0) {
  //     var_dump($cek);
  // die();
    echo '<div class="alert alert-danger">
  <span class="text-capitalize"><p class="text-center">login gagal, silahkan coba lagi !</p></span>
  </div>';

  } else {
    $d = $cek->fetch_array();
    $_SESSION['username'] = $username;
    $_SESSION['nama_user'] = $d['nama_user'];
    $_SESSION['blokir'] = $d['blokir'];
    $_SESSION['level'] = $d['level'];
   		echo "<script> alert('Berhasil Login..'); location.replace('home.php') </script>";	

  }
}
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
      content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
      content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login Admin</title>
    <link rel="apple-touch-icon" href="../vendor/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../vendor/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
      rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../vendor/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../vendor/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../vendor/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../vendor/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../vendor/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../vendor/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../vendor/app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="../vendor/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../vendor/app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="../vendor/app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="../vendor/app-assets/css/pages/page-auth.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../vendor/assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->

  <body class="horizontal-layout horizontal-menu blank-page navbar-floating footer-static  " data-open="hover"
    data-menu="horizontal-menu" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
          <div class="auth-wrapper auth-v2">
            <div class="auth-inner row m-0">
              </a>
              <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid"
                    src="../vendor/app-assets/images/pages/login-v2.svg" alt="Login V2" /></div>
              </div>
              <!-- Login-->
              <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                  <h2 class="card-title font-weight-bold mb-1">Administrator! 👋</h2>
                  <form class="auth-login-form mt-2" action="" method="POST">
                    <div class="form-group">
                      <label class="form-label" for="username">username</label>
                      <input class="form-control" id="username" type="text" name="username" placeholder="username"
                        aria-describedby="username" autofocus="" tabindex="1" />
                    </div>
                    <div class="form-group">
                      <div class="d-flex justify-content-between">
                        <label for="password">Password</label>
                      </div>
                      <div class="input-group input-group-merge form-password-toggle">
                        <input class="form-control form-control-merge" id="password" type="password" name="password"
                          placeholder="············" aria-describedby="password" tabindex="2" />
                        <div class="input-group-append"><span class="input-group-text cursor-pointer"><i
                              data-feather="eye"></i></span></div>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit" name="submit">Masuk</button>
                  </form>
                </div>
              </div>
              <!-- /Login-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END: Content-->
    <?php include "footer.php";?>


    <!-- BEGIN: Vendor JS-->
    <script src="../vendor/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../vendor/app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="../vendor/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../vendor/app-assets/js/core/app-menu.js"></script>
    <script src="../vendor/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../vendor/app-assets/js/scripts/pages/page-auth-login.js"></script>
    <!-- END: Page JS-->

    <script>
    $(window).on('load', function() {
      if (feather) {
        feather.replace({
          width: 14,
          height: 14
        });
      }
    })
    </script>
  </body>
  <!-- END: Body-->

</html>
