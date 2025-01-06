<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Login Akun</title>
  </head>
  <style>
  .card {
    background-color: rgba(190, 255, 38, 0.49) !important;
  }

  </style>

  <body>

    <div class="container" style="margin-top: 50px">
      <div class="row">
        <div class="col-md-5 offset-md-3">
          <div class="card">
            <div class="card-header text-center mt-1">
              <img src="assests/images/LOGOBARU.png" style="height: 90;width:190px;" alt="" /><br><br>
              <!-- <h7><small>Sistem Informasi Akreditasi Perguruan Tinggi</small></h7> -->
            </div>
            <div class="card-body">
              <hr>
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" id="username" placeholder="Masukkan Username">
              </div>

              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan Password">
              </div>
              <button class="btn btn-login btn-block btn-success">LOGIN</button>
              <hr>

              <div class="card-footer">

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
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>

    <script>
    $(document).ready(function() {

      $(".btn-login").click(function() {

        var username = $("#username").val();
        var password = $("#password").val();

        if (username.length == "") {

          Swal.fire({
            type: 'warning',
            title: 'Oops...',
            text: 'Username Wajib Diisi !'
          });

        } else if (password.length == "") {

          Swal.fire({
            type: 'warning',
            title: 'Oops...',
            text: 'Password Wajib Diisi !'
          });

        } else {

          $.ajax({

            url: "cek-login.php",
            type: "POST",
            data: {
              "username": username,
              "password": password
            },

            success: function(response) {

              if (response == "success") {

                Swal.fire({
                    type: 'success',
                    title: 'Login Berhasil!',
                    text: 'Anda akan di arahkan dalam beberapa saat',
                    timer: 1000,
                    showCancelButton: false,
                    showConfirmButton: false
                  })
                  .then(function() {
                    window.location.href = "index.php";
                  });

              } else {

                Swal.fire({
                  type: 'error',
                  title: 'Login Gagal!',
                  text: 'silahkan coba lagi!'
                });

              }

              console.log(response);

            },

            error: function(response) {

              Swal.fire({
                type: 'error',
                title: 'Opps!',
                text: 'server error!'
              });

              console.log(response);

            }

          });

        }

      });

    });
    </script>

  </body>

</html>
