<?php
session_start();
error_reporting(0);
include('includes/config.php');
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
    <script type="text/javascript">
    function checkLetter(theform) {
      pola_nama = /^[a-zA-Z .]*$/;
      if (!pola_nama.test(theform.fullname.value)) {
        alert('Hanya huruf yang diperbolehkan untuk Nama!');
        theform.fullname.focus();
        return false;
      }

      if (theform.pass.value != thform.conf.value) {
        alert("New Password and Confirm Password Field do not match!");
        theform.conf.focus();
        return false;
      }
      return (true);
    }
    </script>

    <script type="text/javascript">
    function checkAvailability() {
      $("#loaderIcon").show();
      jQuery.ajax({
        url: "check_availability.php",
        data: 'emailid=' + $("#emailid").val(),
        type: "POST",
        success: function(data) {
          $("#user-availability-status").html(data);
          $("#loaderIcon").hide();
        },
        error: function() {}
      });
    }
    </script>
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
    background-image: url("assests/images/bhamada.jpg");
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
          <button class="loginBtn">LOG IN</button>
        </div>
        <form method="post" name="theform" action="registration_act.php" id="theform">
          <div class="formGroup">
            <input class="form-control" id="username" type="text" name="username" placeholder="Masukan username"
              aria-describedby="username" autofocus="" tabindex="1" />
          </div>
          <div class="formGroup">
            <input class="form-control" id="fullname" type="text" name="fullname" placeholder="Isi nama lengkap anda"
              aria-describedby="fullname" autofocus="" tabindex="1" />
          </div>
          <div class="formGroup">
            <input type="password" class="form-control" id="pass" name="pass" placeholder="Password"
              required="required">
          </div>
          <div class="formGroup">
            <input type="password" class="form-control" id="conf" name="conf" placeholder="Konfirmasi Password"
              required="required">
          </div>
          <div class="checkBox">
            <span class="text">Sudah memiliki Akun? <a class="btn btn-primary" style="color:white"
                href="login.php"><span>&nbsp;Login</span></a></span>
          </div>
          <div class="formGroup">
            <button class="btn2" type="submit" name="submit">Daftar</button>

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
