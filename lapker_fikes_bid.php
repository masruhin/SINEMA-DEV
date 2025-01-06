<?php 
include "includes/header.php";
include "includes/config.php";
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
            <h4 class="card-title">Laporan Kerjasama <strong>Kebidanan (D3)</strong></h4>
            <!--<button type="button" class="btn btn-outline-success round btn-sm" data-toggle="modal" data-target="#add">-->
            <!--  <strong>Tambah</strong>-->
            <!--</button>-->
          </div>
          <div class="card-body table-responsive">
            <table id="dataTables" class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Pelaksana</th>
                  <th>judul Laporan</th>
                  <th>Tahun</th>
                  <th>File</th>
                  <!-- <th>Tanggal Di Upload</th>
                  <th>Tanggal Diubah</th> -->
                </tr>
              </thead>
              <tbody>
                <?php 
											include "includes/config.php";
											$no = 1;
											$data = mysqli_query($kon, "SELECT a.id, 
                                                    YEAR(a.date_created) as tahun,
                                                    a.judul,
                                                    a.tahun_lap,
                                                    a.dok,
                                                    a.id_fak,
                                                    b.fak_nama 
                                                    FROM lapker_fikes_bid a 
                                                    LEFT JOIN fakultas b ON b.id_fak = a.id_fak
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
                  <td><?php echo $hasil ['judul'];?></td>
                  <td><?php echo $hasil ['tahun_lap'];?></td>
                  <td>
                    <?php if ($hasil['dok']!=0) {?>
                    <button
                      onclick="JavaScript:window.location.href='download_fikes_lapker_bid.php?dok=<?php echo $hasil['dok']?>';"
                      class="btn btn-outline-dark round btn-sm">Download</button>
                    <?php }else{ ?>
                    <span class="badge badge-pill badge-light-danger mr-1 lg">Tidak ada file!</span>
                    <?php }
                    ?>
                    <!-- <td><?php echo $hasil ['date_created'];?></td>
                  <td><?php echo $hasil ['date_updated'];?></td> -->
                </tr>


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


  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>
  <?php include "includes/footer.php";?>
  <script>
  $(document).ready(function() {
    $(".select2").select2();
  });

  $(document).ready(function() {
    $(".select3").select2();
  });
  </script>
  <script type="text/javascript">

  </script>
  </body>

  </html>
