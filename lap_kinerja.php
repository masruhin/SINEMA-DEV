<?php 
include "includes/header.php";
include "includes/config.php";
?>
<!-- BEGIN: Content-->
<div class="app-content content ">
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>
  <div class="content-wrapper container-xxl p-0">
    <div class="content-body">
      <!-- search header -->
      <section id="faq-search-filter">
        <div class="card faq-search" style="background-image: url('../../../app-assets/images/banner/banner.png')">
          <div class="card-body text-center">
            <h2 class="text-primary">Informasi Laporan</h2>
          </div>
        </div>
      </section>

      <div class="content-wrapper container-xxl p-0">

        <div class="row match-height">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Laporan Kinerja Tahunan</h4>
              </div>
              <div class="card-body table-responsive">
                <table id="dataTables" class="table table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>judul Laporan</th>
                      <th>Tahun</th>
                      <th>File</th>
                      <!-- <th>Tanggal Di Upload</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
											include "includes/config.php";
											$no = 1;
											$data = mysqli_query($kon, "SELECT tahun_lap, YEAR(date_created) as tahun,judul,dok FROM lap_kinerja ORDER BY id ASC");
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
                      <td><?php echo $hasil ['tahun_lap'];?></td>
                      <td>
                        <?php if ($hasil['dok']!=0) {?>
                        <button
                          onclick="JavaScript:window.location.href='download_lap_kinerja.php?dok=<?php echo $hasil['dok']?>';"
                          class="btn btn-outline-dark round btn-sm">Download</button>
                        <?php }else{ ?>
                        <span class="badge badge-pill badge-light-danger mr-1 lg">Tidak ada file!</span>
                        <?php }?>
                        <!-- <td><?php echo $hasil ['date_created'];?></td> -->
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
    </div>
  </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>
<?php include "includes/footer.php";?>

</body>

</html>
