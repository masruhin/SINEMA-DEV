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
            <h4 class="card-title">Laporan Kerjasama <strong>Unit Sarana dan Prasarana</strong></h4>
            <button type="button" class="btn btn-outline-success round btn-sm" data-toggle="modal" data-target="#add">
              <strong>Tambah</strong>
            </button>
          </div>
          <div class="card-body table-responsive">
            <table id="dataTables" class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Pelaksana</th>
                  <th>Mitra</th>
                  <th>Jenis Kegiatan</th>
                  <th>judul Laporan</th>
                  <th>Tahun</th>
                  <th>File</th>
                  <!-- <th>Tanggal Di Upload</th>
                  <th>Tanggal Diubah</th> -->
                  <th style="text-align:center;">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
											include "config.php";
											$no = 1;
											$data = mysqli_query($kon, "SELECT a.id, 
                                                    YEAR(a.date_created) as tahun,
                                                    a.judul,
                                                    a.id_fak,
                                                    a.mitra,
                                                    a.kegiatan,
                                                    a.tahun_lap,
                                                    a.dok,
                                                    a.id_univ,
                                                    b.univ_nama, 
                                                    c.fak_nama
                                                    FROM lapker_unit_sarpras a   
                                                    LEFT JOIN universitas b ON b.id_univ = a.id_univ
                                                    LEFT JOIN fakultas c ON c.id_fak = a.id_fak
                                                    ORDER BY id ASC");
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
                  <td><?php echo $hasil ['fak_nama'];?></td>
                  <td><?php echo $hasil ['mitra'];?></td>
                  <td><?php echo $hasil ['kegiatan'];?></td>
                  <td><?php echo $hasil ['judul'];?></td>
                  <td><?php echo $hasil ['tahun_lap'];?></td>
                  <td>
                    <?php if ($hasil['dok']!=0) {?>
                    <button
                      onclick="JavaScript:window.location.href='download_unit_sarpras.php?dok=<?php echo $hasil['dok']?>';"
                      class="btn btn-outline-dark round btn-sm">Download</button>
                    <?php }else{ ?>
                    <span class="badge badge-pill badge-light-danger mr-1 lg">Tidak ada file!</span>
                    <?php }
                    ?>
                    <!-- <td><?php echo $hasil ['date_created'];?></td>
                  <td><?php echo $hasil ['date_updated'];?></td> -->
                  <td style="text-align:center ;">
                    <a href="#" type="button" class="open_modal btn btn-outline-dark round btn-sm" data-toggle="modal"
                      data-target="#edit<?php echo $hasil['id']; ?>">Edit</a> |
                    <a href="#" type="button" class="open_modal btn btn-outline-danger round btn-sm" data-toggle="modal"
                      data-target="#deleteEmployeeModal<?php echo $hasil['id']; ?>">Hapus</a>
                  </td>
                </tr>

                <!-- MODAL EDIT -->
                <div class="modal-size-lg d-inline-block">
                  <div class="modal fade text-left" id="edit<?php echo $hasil['id']; ?>" role="dialog"
                    aria-labelledby="myModalLabel17" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="myModalLabel110">Edit Data</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="lapker_unit_sarpras_act.php" enctype="multipart/form-data">
                            <!-- <form class="form form-horizontal" action="galeri_act.php" method="POST"> -->
                            <?php
                              $id = $hasil['id']; 
                              // $query_edit = mysqli_query($kon, "SELECT * FROM lapker_unit_sarpras WHERE id='$id'");
                              $query_edit = mysqli_query($kon, "SELECT  a.id,
                                                                        a.judul,
                                                                        a.id_fak,
                                                                        a.mitra,
                                                                        a.kegiatan,
                                                                        a.tahun_lap,
                                                                        a.dok,
                                                                        a.id_univ,
                                                                        b.univ_nama, 
                                                                        c.fak_nama
                                                                        FROM lapker_unit_sarpras a   
                                                                        LEFT JOIN universitas b ON b.id_univ = a.id_univ
                                                                        LEFT JOIN fakultas c ON c.id_fak = a.id_fak
                                                                WHERE id='$id' ");
                              while ($row = mysqli_fetch_array($query_edit)) {  
                              ?>
                            <input type="hidden" name="id" value="<?= $row['id']?>">

                            <div class="form-group row">
                              <label for="colFormLabel" class="col-sm-4 col-form-label"><span
                                  class="badge badge-pill badge-light-success mr-1 lg"
                                  style="background-color: rgb(255 205 21 / 83%); height:25px; color: #020202 !important;">Pelaksana</span></label>
                              <div class="col-sm-8">
                                <select class="select9 form-control" name="fak" id="fak" required>
                                  <option value="">--Pelaksana--</option>
                                  <?php
                                  include 'config.php';
                                $universitas = mysqli_query($kon,"select * from fakultas");
                                while($f = mysqli_fetch_array($universitas)){
                                  ?>
                                  <option value="<?php echo $f['id_fak'] ?>"><?php echo $f['fak_nama']; ?>
                                  </option>
                                  <?php
                                    }
                                    ?>
                                </select>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="colFormLabel" class="col-sm-4 col-form-label">
                                <span class="badge badge-pill badge-light-success mr-1 lg"
                                  style="background-color: rgb(255 205 21 / 83%); height:25px; color: #020202 !important;">Mitra</span>
                              </label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control" id="colFormLabel" name="mit"
                                  placeholder="Masukan mit" value="<?php echo $row['mitra'];?>">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="colFormLabel" class="col-sm-4 col-form-label">
                                <span class="badge badge-pill badge-light-success mr-1 lg"
                                  style="background-color: rgb(255 205 21 / 83%); height:25px; color: #020202 !important;">Jenis
                                  Kegiatan</span>
                              </label>
                              <div class="col-sm-8">
                                <select class="select3 form-control form-control-md" name="kegiatan" id="kegiatan">
                                  <option value="" selected="selected">-- Pilih Pelaksana --</option>
                                  <option>Pendidikan</option>
                                  <option>Penelitian</option>
                                  <option>PKM</option>
                                </select>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group row">
                                  <label for="colFormLabel" class="col-sm-4 col-form-label">
                                    <span class="badge badge-pill badge-light-success mr-1 lg"
                                      style="background-color: rgb(255 205 21 / 83%); height:25px; color: #020202 !important;">Judul
                                      Laporan Kerjasama</span>
                                  </label>
                                  <div class="col-sm-8">
                                    <input type="text" class="form-control" id="colFormLabel" name="judul"
                                      placeholder="Masukan Judul" value="<?php echo $row['judul'];?>">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="colFormLabel" class="col-sm-4 col-form-label">
                                    <span class="badge badge-pill badge-light-success mr-1 lg"
                                      style="background-color: rgb(255 205 21 / 83%); height:25px; color: #020202 !important;">Tahun
                                      Laporan</span>
                                  </label>
                                  <div class="col-sm-8">
                                    <input type="text" class="form-control" id="colFormLabel" name="tahun_lap"
                                      placeholder="Masukan Tahun Laporan" value="<?php echo $row['tahun_lap'];?>">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label class="col-sm-4 col-form-label">Dokumen Sebelumnya</label>
                                  <div class="col-sm-8">
                                    <div class="border text-center p-1">
                                      <div><span class="badge badge-pill badge-light-success mr-1 lg"
                                          style="background-color: rgb(26 179 31 / 43%);color: #020202 !important;">
                                          <?php echo $row['dok']?>
                                        </span>
                                      </div>
                                    </div>

                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label class="col-sm-4 col-form-label">Dokumen</label>
                                  <div class="input-group col-sm-8">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="dok" name="dok">
                                      <label class="custom-file-label" for="dok">Pilih Dokumen Pengganti</label>
                                    </div>
                                  </div>
                                  <div class="col-sm-4"></div>
                                  <div class="col-sm-8">
                                    <div class="border text-center p-1">
                                      <div style="color: rgb(255,0,0);">*Catatan : Kosongkan jika tidak ingin
                                        merubah .
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
                      <form method="post" action="lapker_unit_sarpras_act.php">
                        <?php
                                  $id = $hasil['id']; 
                                  $query_edit = mysqli_query($kon, "SELECT * FROM lapker_unit_sarpras WHERE id='$id'");
                                  //$result = mysqli_query($conn, $query);
                                  while ($row = mysqli_fetch_array($query_edit)) {  
                                  ?>
                        <input type="hidden" class="form-control" value="<?php echo $hasil['id']; ?>" name="id">

                        <div class="modal-header">
                          <h4 class="modal-title">Delete</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                          <p>Apakah Kamu akan menghapus Dokumen ? <span
                              class="badge badge-pill badge-light-success mr-1 lg"
                              style="background-color: rgb(26 179 31 / 43%);color: #020202 !important;">
                              <?php echo $hasil['dok']?>
                            </span></p>
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
            <form class="form-horizontal" method="POST" action="lapker_unit_sarpras_act.php"
              enctype="multipart/form-data" id="myForm">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">

                    <div class="form-group row">
                      <label for="colFormLabel" class="col-sm-4 col-form-label">
                        <span class="badge badge-pill badge-light-success mr-1 lg"
                          style="background-color: rgb(255 205 21 / 83%); height:25px; color: #020202 !important;">Pelaksana</span>
                      </label>
                      <div class="col-sm-8">
                        <select class="select2 form-control form-control-md" name="id_fak" id="id_fak">
                          <option value="" selected="selected">-- Pilih Pelaksana --</option>
                          <?php
                              $query ='SELECT * FROM fakultas ORDER BY id_fak';
                              $hasil = mysqli_query($kon, $query);
                              while ($row = mysqli_fetch_array($hasil)) { ?>
                          <option value="<?php echo $row['id_fak']; ?>">
                            <?php echo $row['fak_kode'] .
                                    ' | ' .
                                    $row['fak_nama']; ?></option>
                          <?php }
                            ?>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="colFormLabel" class="col-sm-4 col-form-label">
                        <span class="badge badge-pill badge-light-success mr-1 lg"
                          style="background-color: rgb(255 205 21 / 83%); height:25px; color: #020202 !important;">Mitra</span>
                      </label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="colFormLabel" name="mitra"
                          placeholder="Masukan Mitra">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="colFormLabel" class="col-sm-4 col-form-label">
                        <span class="badge badge-pill badge-light-success mr-1 lg"
                          style="background-color: rgb(255 205 21 / 83%); height:25px; color: #020202 !important;">Jenis
                          Kegiatan</span>
                      </label>
                      <div class="col-sm-8">
                        <select class="select3 form-control form-control-md" name="kegiatan" id="kegiatan">
                          <option>-- Pilih Pelaksana --</option>
                          <option>Pendidikan</option>
                          <option>Penelitian</option>
                          <option>PKM</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="colFormLabel" class="col-sm-4 col-form-label">
                        <span class="badge badge-pill badge-light-success mr-1 lg"
                          style="background-color: rgb(255 205 21 / 83%); height:25px; color: #020202 !important;">Judul
                          Laporan Kerjasama</span>
                      </label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="colFormLabel" name="judul"
                          placeholder="Masukan Judul">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="colFormLabel" class="col-sm-4 col-form-label">
                        <span class="badge badge-pill badge-light-success mr-1 lg"
                          style="background-color: rgb(255 205 21 / 83%); height:25px; color: #020202 !important;">Tahun
                          Laporan</span>
                      </label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="colFormLabel" name="tahun_lap"
                          placeholder="Masukan tahun">
                      </div>
                    </div>

                    <div class="mb-1">
                      <P class="form-label" for="file"><span class="badge badge-pill badge-light-success mr-1 lg"
                          style="background-color: rgb(255 205 21 / 83%); height:25px; color: #020202 !important;">Upload
                          Dokumen</span></P>
                      <div class="input-group ">
                        <input type="file" name="dok" class="form-control-file" id="basicInputFile" />
                      </div>
                      <label for="" style="color:red ;">
                        File yang bisa di Upload hanya file dengan ekstensi .doc, .docx, .xls, .xlsx,
                        .ppt,
                        .pptx, .pdf, .rar, .exe, .zip dan besar file (file size) maksimal hanya <b>3
                          MB</b>.
                        <!-- <b style="color:blue"><?php echo $file;?></b>. -->
                      </label>
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
  <script>
  $(document).ready(function() {
    $(".select2").select2();
  });

  $(document).ready(function() {
    $(".select3").select2();
  });

  $(document).ready(function() {
    $(".select9").select2();
  });
  </script>
  <script type="text/javascript">

  </script>
  </body>

  </html>
