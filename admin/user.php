<?php 
include "header.php";
if(empty($_SESSION['username'])){
	echo "<script>alert('Silahkan Login Terlebih Dahulu');window.location='index.php'</script>";
}

?>
<!-- BEGIN: Content-->
<div class="app-content content ">
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>
  <div class="content-wrapper container-xxl p-0">
    <div class="row match-height">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Data Users</h4>
            <button type="button" class="btn btn-outline-success round btn-sm" data-toggle="modal"
              data-target="#tambah_data">Tambah</button>
          </div>
          <div class="card-body table-responsive">
            <table id="dataTables" class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Nama User</th>
                  <th>Status</th>
                  <th>Group</th>
                  <th style="text-align:center ;">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
											include "config.php";
											$no = 1;
											$data = mysqli_query($kon, "SELECT * FROM users ORDER BY username ASC");
											if (!$data) {
												printf("Error: %s\n", mysqli_error($kon));
												exit();
											}
											while($hasil = mysqli_fetch_array($data)){
											?>
                <tr>
                  <td>
                    <?php echo $no++; ?>
                  </td>
                  <td><?php echo $hasil ['username'];?></td>
                  <td><?php echo $hasil ['nama_user'];?></td>
                  <td>
                    <?php 
                    if ($hasil['status']==1) {
                      echo "<div class='badge badge-pill badge-glow badge-success' id=str".$hasil['id'].">Aktif</div>";
                    }else {
                      echo "<div class='badge badge-pill badge-glow badge-danger' id=str".$hasil['id'].">Nonaktif</div>";

                    }
                    ?>
                  </td>
                  <!-- <td>
                    <select class="select2 form-select form-control" name="status_kerjasama"
                      onchange="active_user(this.value,<?php echo $hasil['id']?>)">
                      <option value="1">
                        Aktif
                      </option>
                      <option value="0">
                        Nonaktif
                      </option>
                    </select>
                  </td> -->
                  <td><?php echo $hasil ['level'];?>
                  </td>
                  <td style=" text-align:center ;">
                    <!-- <a href="#" type="button" class="open_modal btn btn-outline-dark round btn-sm" data-toggle="modal"
                      data-target="#edit<?php echo $hasil['id']; ?>">Edit</a> | -->
                    <a href="#" type="button" class="open_modal btn btn-outline-danger round btn-sm" data-toggle="modal"
                      data-target="#deleteEmployeeModal<?php echo $hasil['id']; ?>">Hapus</a>
                  </td>
                </tr>

                <!-- MODAL EDIT -->
                <div class="modal fade text-left modal-success" id="edit<?php echo $hasil['id_fak']; ?>" tabindex="-1"
                  role="dialog" aria-labelledby="myModalLabel110" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel110">Edit Data Fakultas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form class="form form-horizontal" action="fakultas_act.php" method="POST">
                          <?php
                  $id = $hasil['id_fak']; 
                  $query_edit = mysqli_query($kon, "SELECT * FROM fakultas WHERE id_fak='$id'");
                  while ($row = mysqli_fetch_array($query_edit)) {  
                  ?>
                          <input type="hidden" name="id_fak" value="<?= $row['id_fak']?>">
                          <div class="row">
                            <div class="col-12">
                              <div div class="form-group row">
                                <div class="col-sm-4 col-form-label">
                                  <label for="fak_kode"><strong>Kode Fakultas </strong></label>
                                </div>
                                <div class="col-sm-8">
                                  <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">
                                        <i data-feather="terminal"></i>
                                      </span>
                                    </div>
                                    <input type="text" id="fak_kode" class="form-control" name="fak_kode"
                                      placeholder="Isikan dengan nama Fakultas" value="<?= $row['fak_kode']?>" />
                                  </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-sm-4 col-form-label">
                                  <label for="fak_nama"><strong>Nama Fakultas </strong></label>
                                </div>
                                <div class="col-sm-8">
                                  <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">
                                        <i data-feather="layers"></i>
                                      </span>
                                    </div>
                                    <input type="text" id="fak_nama" class="form-control" name="fak_nama"
                                      placeholder="Isikan dengan nama Fakultas" value="<?= $row['fak_nama']?>" />
                                  </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-sm-4 col-form-label">
                                  <label for="fak_ket"><strong> Keterangan </strong></label>
                                </div>
                                <div class="col-sm-8">
                                  <div class="input-group input-group">
                                    <textarea class="form-control" id="" name="fak_ket" colspan="4" rows="3"
                                      placeholder="Keterangan Fakultas"><?= $row['fak_ket']?>
                              </textarea>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-sm-4 col-form-label">
                                  <label for="date_created"><strong> Tgl diBuat </strong></label>
                                </div>
                                <div class="col-sm-8">
                                  <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">
                                        <i data-feather="phone-call"></i>
                                      </span>
                                    </div>
                                    <input type="text" id="date_created" class="form-control" name="date_created"
                                      placeholder="tanggal dibuat" value="<?= $row['date_created']?>" disabled />
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-12 offset-sm-12 modal-footer">
                              <button type="submit" class="btn btn-info mr-1 btn-sm" name="ubah">Simpan</button>
                              <button type="reset" class="btn btn-outline-danger btn-sm">Reset</button>
                            </div>
                          </div>
                          <?php 
                    }
                    //mysql_close($host);
                    ?>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END MODAL EDIT -->

                <!-- MODAL HAPUS -->
                <div id="deleteEmployeeModal<?php echo $hasil['id']; ?>" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <form method="post" action="user_act.php">
                        <?php
          $id = $hasil['id']; 
          $query_edit = mysqli_query($kon, "SELECT * FROM users WHERE id='$id'");
          //$result = mysqli_query($conn, $query);
          while ($row = mysqli_fetch_array($query_edit)) {  
          ?>
                        <input type="hidden" class="form-control" value="<?php echo $hasil['id']; ?>" name="id"
                          required>

                        <div class="modal-header">
                          <h4 class="modal-title">Delete</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                          <p>Apakah Kamu akan menghapus User <?php echo $hasil['nama_user']; ?>?</p>
                        </div>
                        <div class="col-sm-12 offset-sm-12 modal-footer">
                          <button type="submit" class="btn btn-danger mr-1 btn-sm" name="delete">Hapus</button>
                          <button type="submit" class="btn btn-info mr-1 btn-sm" name="hapus" value="Batal"
                            data-dismiss="modal">Batal</button>
                        </div>
                        <?php 
              }
              //mysql_close($host);
              ?>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- END MODAL HAPUS -->
                <?php               
									} 
									?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- MODAL ADD -->
  <div class="modal fade text-left modal-success" id="tambah_data" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel110" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel110"><strong>Tambah Data Fakultas</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form form-horizontal" action="user_act.php" method="POST">
            <div class="row">
              <div class="col-12">
                <div div class="form-group row">
                  <div class="col-sm-4 col-form-label">
                    <label for="fak_kode"><strong>Username</strong></label>
                  </div>
                  <div class="col-sm-8">
                    <div class="input-group input-group-merge">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i data-feather="terminal"></i>
                        </span>
                      </div>
                      <input class="form-control" id="username" type="text" name="username" placeholder="Masukan username" aria-describedby="username" />
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-4 col-form-label">
                    <label for="fak_nama"><strong>Nama Lengkap </strong></label>
                  </div>
                  <div class="col-sm-8">
                    <div class="input-group input-group-merge">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i data-feather="layers"></i>
                        </span>
                      </div>
                      <input class="form-control" id="fullname" type="text" name="fullname" placeholder="Isi nama lengkap anda" aria-describedby="fullname"/>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-4 col-form-label">
                    <label for="register-password" class="form-label" style="color: black">Password</label>
                  </div>
                  <div class="col-sm-8">
                    <div class="input-group input-group-merge form-password-toggle">
                        <input type="password" class="form-control form-control-merge" id="pass" name="pass" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="register-password" tabindex="3" />
                        <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                    </div>
                  </div>
                </div>

                 <!-- <div class="form-group row">
                  <div class="col-sm-4 col-form-label">
                    <label for="register-password" class="form-label" style="color: black">Konfirmasi Password</label>
                  </div>
                  <div class="col-sm-8">
                    <div class="input-group input-group-merge form-password-toggle">
                        <input type="password" class="form-control form-control-merge" class="form-control" id="conf" name="conf" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="register-password" tabindex="3" />
                        <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                    </div>
                  </div>
                </div> -->

                <div class="form-group row">
                  <div class="col-sm-4 col-form-label">
                    <label for="fak_nama"><strong>Status User </strong></label>
                  </div>
                  <div class="col-sm-8">
                    <select class="select3 form-control" name="status" id="status" >
                      <option value="1">Aktif</option>
                      <option value="0">Nonaktif</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 offset-sm-12 modal-footer">
                <button type="submit" class="btn btn-info mr-1 btn-sm" name="tambah">Simpan</button>
                <button type="reset" class="btn btn-outline-danger btn-sm">Reset</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- END MODAL ADD -->


  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>
  <?php include "footer.php";?>
  <script type="text/javascript">
  function active_user(val, id) {
    $.ajax({
      type: 'POST',
      url: 'user_ubah.php',
      data: {
        val: val,
        id: id
      },
      success: function(result) {
        if (result == 1) {
          $('#str' + id).html('Aktif')
        } else {
          $('#str' + id).html('Nonaktif')
        }
      },
    });
  }
  </script>
  <script>
  $(document).ready(function() {
    $(".select2").select2();
  });

  $(document).ready(function() {
    $(".select3").select2();
  });
  </script>
  </body>

  </html>
