<?php 

//when you start work on login. Firstly start session.
session_start();

//include connection file here
include('includes/config.php');

//here i am checking. User logged in or not.
if(!empty($_SESSION['id']))
{
    header("location:login.php");
}

$error = '';  //Initialize error variable

if(isset($_POST['submit'])) 
{

    $username = $_POST['username'];
    $password = md5($_POST['password']); 

    //check query for user and password exist in user table or not
    $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";

    $row = mysqli_query($kon,$sql);
    $count = mysqli_num_rows($row);

    if($count > 0)
    {
        $rows = mysqli_fetch_object($row);
        if($rows->status == '1')
        {
            $_SESSION['id'] = $rows->id;
            $_SESSION['username'] = $rows->username;
            echo "<script> alert('Berhasil Login..'); location.replace('index.php') </script>";
        }
        else
        {
          echo "<script> alert('Gagal Login, Akun anda Belum Aktif'); location.replace('login.php') </script>";	
        }
        
    }
    else 
    {
      echo "<script> alert('Gagal Login, Pastikan username dan password benar.'); location.replace('login.php') </script>";	
    }
    
 }

?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="keywords" content="SAKTI, LPM BHAMADA, AKREDITASI, SAKTI BHAMADA"> -->
    <meta name="description" content="Sistem Informasi Akreditasi Perguruan Tinggi">
    <meta name="author" content="LPM BHAMADA">
    <!-- <link rel="shortcut icon" href="https://sakti.lpm.bhamada.ac.id/assets/img/logo-sakti-favicon.png"> -->
    <title>Login - SINEMA</title>
    <link rel="stylesheet" href="https://sakti.lpm.bhamada.ac.id/assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://sakti.lpm.bhamada.ac.id/assets/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://sakti.lpm.bhamada.ac.id/assets/loginCSS/login.css">
  </head>
  <style>
  html,
  body {
    /* background-image: url('../img/background3.jpg'); */
    background-color: rgba(198, 217, 255, 0.3) !important;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    height: 100%;
    font-family: 'Numans', sans-serif;
  }

  .container {
    height: 100%;
    align-content: center;
  }

  .card {
    min-height: 60%;
    position: relative;
    margin-top: auto;
    margin-bottom: auto;
    width: 400px;
    background-color: rgba(190, 255, 38, 0.49) !important;
  }

  .social_icon span {
    font-size: 60px;
    margin-left: 10px;
    color: #313557;
  }

  .social_icon span:hover {
    color: white;
    cursor: pointer;
  }

  .card-header h5 {
    font-family: Verdana;
    color: white;
  }

  .social_icon {
    position: absolute;
    right: 20px;
    top: -45px;
  }

  .input-group-prepend span {
    width: 40px;
    background-color: #DCDDDD;
    color: #313557;
    border: 0 !important;
  }

  input:focus {
    outline: 0 0 0 0 !important;
    box-shadow: 0 0 0 0 !important;

  }

  .remember {
    color: white;
  }

  .remember input {
    width: 20px;
    height: 20px;
    margin-left: 15px;
    margin-right: 5px;
  }

  .login_btn {
    color: white;
    background-color: #EF7E1C;
    width: 100px;
  }

  .login_btn:hover {
    color: black;
    background-color: white;
  }

  .links {
    color: white;
  }

  .links a {
    margin-left: 4px;
  }

  </style>

  <body>
    <div class="container">
      <div class="d-flex justify-content-center h-100">
        <div class="card">
          <div class="card-header text-center mt-1">
            <img src="assests/images/LOGOBARU.png" style="height: 80;width:190px;" alt="" /><br><br>
            <!-- <h7><small>Sistem Informasi Akreditasi Perguruan Tinggi</small></h7> -->
          </div>
          <div class="card-body">
            <form method="POST">
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i data-feather='check'></i></span>
                </div>
                <input type="text" class="form-control" id="username" type="text" name="username"
                  placeholder="Masukkan Username Anda" required autofocus>

              </div>
              <div class="input-group form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i data-feather='check'></i></span>
                </div>
                <input type="password" class="form-control" id="password" type="password" name="password"
                  placeholder="Masukkan Password Anda" required>
              </div><br>
              <div class="form-group">
                <div>
                  <input type="submit" name="submit" class="btn btn-block float-right login_btn">
                </div>
              </div>
            </form>
          </div>
          <div class="card-footer">

            <div class="d-flex justify-content-center links">
              <span style="font-size:8pt;color:black">Pengguna Baru? <a href="registration.php"
                  class="text-decoration-none">Buat Akun</a></span>
            </div>
            <div class="d-flex justify-content-center links">
              <span style="font-size:8pt;color:black">Copyright &copy; 2023 <a href="https://sinema.bhamada.id/"
                  class="text-decoration-none">Sinema Bhamada</a></span>
            </div>
            <div class="d-flex justify-content-center">
              <a href="https://sinema.bhamada.id/">
                <span class="text-white" style="font-size:8pt">
                  <img src="assests/images/humas.png" style="width: 70px; height:70px" alt="" /> </a>

              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://sakti.lpm.bhamada.ac.id/assets/js/bootstrap.min.js"></script>
  </body>

</html>
