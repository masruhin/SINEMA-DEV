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
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <!-- jQuery CDN Link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Sinema Bhamada</title>
  </head>
  <style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: Arial, Helvetica, sans-serif;
    background-image: url("../assests/images/bhamada.jpg");
    background-size: cover;
    background-attachment: fixed;
  }

  /* align items center vertically and horizontally  */
  .container {
    display: flex;
    justify-content: center;
    align-items: center !important;
    height: 100vh;
  }

  .form {
    width: 350px;
    height: 450px;
    background-color: rgba(41, 39, 39, 0.3);
    box-shadow: 0 5px 30px black;
  }

  .btn button {
    padding: 3px;
    margin: 30px 0px 40px 30px;
    border-style: none;
    background-color: transparent;
    color: beige;
    font-size: 18px;
    font-weight: 550;
  }

  .formGroup {
    display: flex;
    justify-content: center;
  }

  .formGroup input {
    border: none;
    width: 80%;
    border-bottom: 2px solid white;
    padding: 10px;
    margin-bottom: 20px;
    font-size: 14px;
    font-weight: bold;
    background-color: transparent;
    color: white;
  }

  input:focus {
    outline: none !important;
    border-bottom: 2px solid rgb(91, 243, 131);
    font-size: 17px;
    font-weight: bold;
    color: white;
  }

  ::placeholder {
    color: white;
  }

  .checkBox {
    display: flex;
    justify-content: center;
    margin: 16px !important;
  }

  #checkbox {
    margin-right: 10px;
    height: 15px;
    width: 15px;
  }

  .text {
    color: rgb(199, 197, 197);
    font-size: 13px;
  }

  .btn2 {
    padding: 10px;
    width: 150px;
    border-radius: 20px;
    background-color: rgb(10, 136, 43);
    border-style: none;
    color: white;
    font-weight: 600;
  }

  .btn2:hover {
    background-color: rgba(10, 136, 43, 0.5);
  }

  .btn button:hover {
    border-bottom: 2px solid rgb(91, 243, 131);
  }

  /* hide signup form */
  .login {
    display: none;
  }

  /* Login form code */
  .login {
    margin-top: 40px;
  }

  .login .checkBox {
    margin-top: 30px !important;
  }

  </style>

  <body>
    <div class="container">
      <div class="form">
        <div class="btn">
          <button class="loginBtn">Login Administrator</button>
        </div>
        <form class="signUp" action="" method="POST">
          <div class="formGroup">
            <input class="form-control" id="username" type="text" name="username" placeholder="username"
              aria-describedby="username" autofocus="" tabindex="1" />
          </div>
          <div class="formGroup">
            <input class="form-control form-control-merge" id="password" type="password" name="password"
              placeholder="············" aria-describedby="password" tabindex="2" />
          </div>
          <div class="formGroup">
            <button class="btn2" type="submit" name="submit">Login</button>

          </div>
        </form>


      </div>
    </div>

    <script src="jQuery.js">
    /* Show login form on button click */

    $('.loginBtn').click(function() {
      $('.login').show();
      $('.signUp').hide();
      /* border bottom on button click */
      $('.loginBtn').css({
        'border-bottom': '2px solid #ff4141'
      });
      /* remove border after click */
      $('.signUpBtn').css({
        'border-style': 'none'
      });
    });


    /* Show sign Up form on button click */

    $('.signUpBtn').click(function() {
      $('.login').hide();
      $('.signUp').show();
      /* border bottom on button click */
      $('.signUpBtn').css({
        'border-bottom': '2px solid #ff4141'
      });
      /* remove border after click */
      $('.loginBtn').css({
        'border-style': 'none'
      });
    });
    </script>

  </body>


</html>
