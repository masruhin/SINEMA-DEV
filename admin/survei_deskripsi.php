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
            <h4 class="card-title">Survei Group</h4>
            <button type="button" class="btn btn-outline-success round btn-sm" data-toggle="modal"
              data-target="#tambah_data">Tambah</button>
          </div>
          <div class="card-body table-responsive">
            <table id="dataTables" class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Group ID</th>
                  <th>Nama Deskripsi</th>
                  <th style="text-align:center ;">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
											include "config.php";
											$no = 1;
											$data = mysqli_query($kon, "SELECT * FROM tdescription order by descriptionId ASC");
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
                  <td><?php echo $hasil ['groupId'];?></td>
                  <td><?php echo $hasil ['description'];?></td>
                  <td style="text-align:center ;">
                    <a href="survei_deskripsi_edit.php?descriptionId=<?php echo $hasil['descriptionId']?>" type="button"
                      class="btn btn-icon btn-icon rounded-circle btn-success waves-effect waves-float waves-light btn-sm"><i
                        data-feather='edit-3'></i></a>
                    |
                    <a href="#" type="button" class="open_modal btn btn-outline-danger round btn-sm" data-toggle="modal"
                      data-target="#deleteEmployeeModal<?php echo $hasil['descriptionId']; ?>">Hapus</a>
                  </td>
                </tr>
                <!-- MODAL HAPUS -->
                <div id="deleteEmployeeModal<?php echo $hasil['descriptionId']; ?>" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <form method="post" action="survei_deskripsi_act.php">
                        <?php
												$id = $hasil['descriptionId']; 
												$query_edit = mysqli_query($kon, "SELECT * FROM tdescription WHERE descriptionId='$id'");
												//$result = mysqli_query($conn, $query);
												while ($row = mysqli_fetch_array($query_edit)) {  
												?>
                        <input type="hidden" class="form-control" value="<?php echo $hasil['descriptionId']; ?>"
                          name="descriptionId" required>

                        <div class="modal-header">
                          <h4 class="modal-title">Delete</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                          <p>Apakah Kamu akan menghapus Data Negara <?php echo $hasil['description']; ?>?</p>
                        </div>
                        <div class="modal-footer">
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
          <h5 class="modal-title" id="myModalLabel110">Tambah Group</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form form-horizontal" action="survei_deskripsi_act.php" method="POST">
            <div class="row">
              <div class="col-12">

                <div class="col-12">
                  <div class="mb-1">
                    <p class="form-p" for="groupId">Group</p>
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i data-feather='paperclip'></i></i></span>
                      <div class="col-10">
                        <select class="select2 form-control form-control-md" name="groupId">
                          <option value="" selected="selected">-- Pilih Group Pertanyaan --</option>
                          <?php
                              $no = 1;
                              $query ='SELECT * FROM tgroup ORDER BY groupId';
                              $hasil = mysqli_query($kon, $query);
                              while ($row = mysqli_fetch_array($hasil)) { ?>
                          <option value="<?php echo $row['groupId']; ?>">
                            <?php echo $row['groupId'] . ' | ' .  $row['groupName']; ?></option>
                          <?php }
                            ?>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="mb-1">
                    <p class="form-p" for="judul_kerjasama">Deskripsi/Pertanyaan</p>
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i data-feather='pocket'></i></span>
                      <textarea class="form-control" rows="4" name="deskripsi" class="form-control"></textarea>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-sm-9 offset-sm-3">
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
  </body>

  </html>
