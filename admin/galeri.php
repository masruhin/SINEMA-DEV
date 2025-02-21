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
            <h4 class="card-title">Pengaturan Tampilan Galeri</h4>
            <button type="button" class="btn btn-outline-success round btn-sm" data-toggle="modal" data-target="#add">
              <strong>Tambah</strong>
            </button>
          </div>
          <div class="card-body table-responsive">
            <table id="dataTables" class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Mitra</th>
                  <th>Deskripsi</th>
                  <th>Gambar</th>
                  <th style="text-align:center;">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
											include "config.php";
											$no = 1;
											$data = mysqli_query($kon, "SELECT * FROM galeri ORDER BY id ASC");
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
                  <td><?php echo $hasil ['judul'];?></td>
                  <td><?php echo $hasil ['deskripsi'];?></td>
                  <td><img src="../img/<?php echo $hasil['gambar']; ?>" width="100" height="100"></td>
                  <td style="text-align:center ;">
                    <a href="#" type="button" class="open_modal btn btn-outline-dark round btn-sm" data-toggle="modal"
                      data-target="#edit<?php echo $hasil['id']; ?>">Edit</a>
                    <!-- <a href="#" type="button" class="open_modal btn btn-outline-danger round btn-sm" data-toggle="modal"
                      data-target="#deleteEmployeeModal<?php echo $hasil['id']; ?>">Hapus</a> -->
                  </td>
                </tr>

                <!-- MODAL EDIT -->
                <div class="modal-size-lg d-inline-block">
                  <div class="modal fade text-left" id="edit<?php echo $hasil['id']; ?>" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel17" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="myModalLabel110">Edit Data Galeri</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="galeri_act.php" enctype="multipart/form-data">
                            <!-- <form class="form form-horizontal" action="galeri_act.php" method="POST"> -->
                            <?php
                              $id = $hasil['id']; 
                              $query_edit = mysqli_query($kon, "SELECT * FROM galeri WHERE id='$id'");
                              while ($row = mysqli_fetch_array($query_edit)) {  
                              ?>
                            <input type="hidden" name="id" value="<?= $row['id']?>">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group row">
                                  <label class="col-sm-2 col-form-label">Judul</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Masukkan Judul Kerjasama"
                                      name="judul" value="<?php echo $row['judul']?>">
                                  </div>
                                </div>
                                <div class=" form-group row">
                                  <label class="col-sm-2 col-form-label">Deskripsi</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Masukkan Deskripsi"
                                      name="deskripsi" value="<?php echo $row['deskripsi']?>">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label class="col-sm-2 col-form-label">Gambar</label>
                                  <div class="input-group col-sm-10">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                      <label class="custom-file-label" for="gambar">Pilih Gambar Logo</label>
                                    </div>
                                  </div>
                                  <div class="col-sm-2"></div>
                                  <div class="col-sm-10">
                                    <div class="border text-center p-3">
                                      <img src="<?php echo "../img/$row[gambar]" ?>" class="img-fluid img-rounded"
                                        id="preview-img">
                                      <div style="color: rgb(255,0,0);">*Catatan : Kosongkan gambar jika tidak ingin
                                        merubah banner.
                                      </div>
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
                              ?>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END MODAL EDIT -->

                <!-- MODAL HAPUS -->
                <div id="deleteEmployeeModal<?php echo $hasil['id']; ?>" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <form method="post" action="galeri_act.php">
                        <?php
                                  $id = $hasil['id']; 
                                  $query_edit = mysqli_query($kon, "SELECT * FROM galeri WHERE id='$id'");
                                  //$result = mysqli_query($conn, $query);
                                  while ($row = mysqli_fetch_array($query_edit)) {  
                                  ?>
                        <input type="hidden" class="form-control" value="<?php echo $hasil['id']; ?>" name="id">

                        <div class="modal-header">
                          <h4 class="modal-title">Delete</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                          <p>Apakah Kamu akan menghapus Tampilan Gambar judul <?php echo $hasil['judul']; ?>?</p>
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


  <!-- Modal ADD-->
  <div class="modal-size-lg d-inline-block">
    <div class="modal fade text-left" id="add" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel110">Tambah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" method="POST" action="galeri_act.php" enctype="multipart/form-data"
              id="myForm">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Judul</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Masukkan Judul Kerjasama" name="judul">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Deskripsi</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Masukkan Deskripsi" name="deskripsi">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Gambar</label>
                      <div class="input-group col-sm-10">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="gambar" name="gambar">
                          <label class="custom-file-label" for="gambar">Pilih Gambar Logo</label>
                        </div>
                      </div>
                      <div class="col-sm-2"></div>
                      <!-- <div class="col-sm-10">
                        <div class="border text-center p-3">
                          <img src="<?= $srcLogo; ?>" class="img-fluid img-rounded" id="preview-img">
                          <div style="color: rgb(255,0,0);">*Catatan : Kosongkan gambar jika tidak ingin merubah banner.
                          </div>
                        </div>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- card body -->

              <!-- card-footer -->
              <div class="col-sm-12 offset-sm-12 modal-footer">
                <button type="submit" class="btn btn-info mr-1 btn-sm" name="upload">Simpan</button>
                <button type="reset" class="btn btn-outline-danger btn-sm">Reset</button>
              </div>
              <!-- card-footer -->

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal ADD-->
  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>
  <?php include "footer.php";?>
  <script type="text/javascript">

  </script>
  </body>

  </html>
