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
            <h4 class="card-title">Situs Instansi Pemerintah / Swasta</h4>
            <button type="button" class="btn btn-outline-success round btn-sm" data-toggle="modal"
              data-target="#tambah_data">Tambah</button>
          </div>
          <div class="card-body table-responsive">
            <table id="dataTables" class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NAMA INSTANSI</th>
                  <th>NAMA SITUS</th>
                  <th style="text-align:center ;">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
											include "config.php";
											$no = 1;
											$data = mysqli_query($kon, "SELECT * FROM instansi ORDER BY nama_instansi ASC");
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
                  <td><?php echo $hasil ['nama_instansi'];?></td>
                  <td><a href="<?php echo $hasil ['situs_instansi'];?>"
                      target="_blank"><strong><?php echo $hasil ['situs_instansi'];?></strong></a>
                  </td>
                  <td style="text-align:center ;">
                    <a href="#" type="button" class="open_modal btn btn-outline-dark round btn-sm" data-toggle="modal"
                      data-target="#edit<?php echo $hasil['id_instansi']; ?>">Edit</a> |
                    <a href="#" type="button" class="open_modal btn btn-outline-danger round btn-sm" data-toggle="modal"
                      data-target="#deleteEmployeeModal<?php echo $hasil['id_instansi']; ?>">Hapus</a>
                  </td>
                </tr>

                <!-- MODAL EDIT -->
                <div class="modal fade text-left modal-success" id="edit<?php echo $hasil['id_instansi']; ?>"
                  tabindex="-1" role="dialog" aria-labelledby="myModalLabel110" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel110">Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form class="form form-horizontal" action="instansi_act.php" method="POST">
                          <?php
                  $id = $hasil['id_instansi']; 
                  $query_edit = mysqli_query($kon, "SELECT * FROM instansi WHERE id_instansi='$id'");
                  while ($row = mysqli_fetch_array($query_edit)) {  
                  ?>
                          <input type="hidden" name="id_instansi" value="<?= $row['id_instansi']?>">
                          <div class="row">
                            <div class="col-12">
                              <div div class="form-group row">
                                <div class="col-sm-4 col-form-label">
                                  <label for="nama_instansi"><strong>Nama Instansi </strong></label>
                                </div>
                                <div class="col-sm-8">
                                  <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">
                                        <i data-feather="terminal"></i>
                                      </span>
                                    </div>
                                    <input type="text" id="nama_instansi" class="form-control" name="nama_instansi"
                                      placeholder="Isikan dengan nama Fakultas" value="<?= $row['nama_instansi']?>" />
                                  </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-sm-4 col-form-label">
                                  <label for="situs_instansi"><strong>Nama Situs</strong></label>
                                </div>
                                <div class="col-sm-8">
                                  <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">
                                        <i data-feather="layers"></i>
                                      </span>
                                    </div>
                                    <input type="text" id="situs_instansi" class="form-control" name="situs_instansi"
                                      placeholder="Isikan dengan nama Fakultas" value="<?= $row['situs_instansi']?>" />
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
                <div id="deleteEmployeeModal<?php echo $hasil['id_instansi']; ?>" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <form method="post" action="instansi_act.php">
                        <?php
          $id = $hasil['id_instansi']; 
          $query_edit = mysqli_query($kon, "SELECT * FROM instansi WHERE id_instansi='$id'");
          //$result = mysqli_query($conn, $query);
          while ($row = mysqli_fetch_array($query_edit)) {  
          ?>
                        <input type="hidden" class="form-control" value="<?php echo $hasil['id_instansi']; ?>"
                          name="id_instansi" required>

                        <div class="modal-header">
                          <h4 class="modal-title">Delete</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                          <p>Apakah Kamu akan menghapus Nama Situs <?php echo $hasil['situs_instansi']; ?>?</p>
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
          <h5 class="modal-title" id="myModalLabel110"><strong>Tambah Situs Instansi</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form form-horizontal" action="instansi_act.php" method="POST">
            <div class="row">
              <div class="col-12">
                <div div class="form-group row">
                  <div class="col-sm-4 col-form-label">
                    <label for="nama_instansi"><strong>Nama Instansi </strong></label>
                  </div>
                  <div class="col-sm-8">
                    <div class="input-group input-group-merge">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i data-feather="terminal"></i>
                        </span>
                      </div>
                      <input type="text" id="nama_instansi" class="form-control" name="nama_instansi"
                        placeholder="Isikan dengan Nama Instansi" />
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-4 col-form-label">
                    <label for="situs_instansi"><strong>Nama Situs </strong></label>
                  </div>
                  <div class="col-sm-8">
                    <div class="input-group input-group-merge">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i data-feather="layers"></i>
                        </span>
                      </div>
                      <input type="text" id="situs_instansi" class="form-control" name="situs_instansi"
                        placeholder="Isikan dengan nama Fakultas" />
                    </div>
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

  </script>
  </body>

  </html>
