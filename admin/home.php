<?php 
include "config.php";
  include "header.php";
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if(empty($_SESSION)){
  echo "<script>alert('Silahkan Login Terlebih Dahulu');window.location='index.php'</script>";
}
//total data univ

$q_kerjasama = $kon->query("SELECT * FROM kerjasama");
$d_kerjasama = mysqli_num_rows($q_kerjasama);

$q_univ = $kon->query("SELECT * FROM universitas");
$d_univ = mysqli_num_rows($q_univ);
//total  data fakultas
$q_fakultas = $kon->query("SELECT * FROM fakultas");
$d_fakultas = mysqli_num_rows($q_fakultas);
//total data Unit
$q_unit = $kon->query("SELECT * FROM unit  WHERE status='Y' ");
$d_unit = mysqli_num_rows($q_unit);
//total data Negara
$q_negara = $kon->query("SELECT * FROM negara");
$d_negara = mysqli_num_rows($q_negara);
?>
<!-- BEGIN: Content-->
<div class="app-content content ">
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>
  <div class="content-wrapper container-xxl p-0">
    <div class="content-body">

      <div id="profile-page-content" class="row">
        <div class="col s12">
          <?php
          include 'config.php';
        $querynotif = "SELECT * FROM kerjasama";
        $querydatanotif = mysqli_query($kon, $querynotif);
        if(mysqli_num_rows($querydatanotif)>0){
        while($data = mysqli_fetch_array($querydatanotif)){
        $nama_kar_notif = $data['judul_kerjasama'];
        $tanggal_akhir = $data['tanggal_akhir'];   
        ?>
          <?php
        $tanggal_akhir = new DateTime($tanggal_akhir); 
        $tanggal_now = new DateTime();
        $lama = $tanggal_now->diff($tanggal_akhir);
        if ($lama->days > 7 AND $lama->days < 30) {
        ?>
          <div class="demo-spacing-0 col-12">
            <div class="col-md-12">
              <div class="alert alert-dismissible fade show" role="alert"
                style="background-color: aliceblue; color:aliceblue">
                <div class="alert-body col-12">
                  <p style="text-align: center; color:black"><i class="mdi-action-info-outline"></i> <span
                      class="badge badge-pill mr-1 lg" style="background-color: crimson;">INFO</span>:
                    Kerjasama
                    Dengan
                    Nama :
                    <b><?php echo $nama_kar_notif;?></b> akan habis kontrak <?php echo "$lama->d"?> hari lagi
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                  style="color: black; background-color:black">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>
          </div>
        </div>
        <?php
         }
         if($lama->days < 7 AND $lama->days > 0){
         ?>
        <div class="demo-spacing-0 col-12">
          <div class="col-md-12">
            <div class="alert alert-dismissible fade show" role="alert"
              style="background-color: aliceblue; color:aliceblue">
              <div class="alert-body col-12">
                <p style="text-align: center; color:black"><i class="mdi-action-info-outline"></i> <span
                    class="badge badge-pill mr-1 lg" style="background-color: crimson;">INFO</span>:
                  Kerjasama
                  Dengan
                  Nama :
                  <b><?php echo $nama_kar_notif;?></b> akan habis kontrak <?php echo "$lama->d"?> hari lagi
              </div>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                style="color: black; background-color:black">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>
        <?php }
            }
            } ?>
      </div>
    </div>

    <!-- ChartJS section start -->
    <section id="chartjs-chart">
      <div class="row">
        <!-- Radar Chart Starts-->
        <!-- <div class="col-lg-6 col-12">
          <div class="card">
            <div class="card-header d-flex flex-row justify-content-between align-items-center">
              <h4 class="card-title">Jenis Kerjasama</h4>
              <div class="d-flex align-items-center flex-wrap">
                <div id="tooltip" class="tooltip-placeholder"></div>
              </div>
            </div>
            <div class="card-body">
              <canvas class="radar-chart-ex chartjs" id="canvas" data-height="355"></canvas>
            </div>
          </div>
        </div> -->
        <!-- Radar Chart Ends-->

        <!-- Polar Area Chart Starts -->
        <!--<div class="col-12">-->
        <!--  <div class="card">-->
        <!--    <div class="card-header">-->
        <!--      <h4 class="card-title">Kerjasama Antarnegara</h4>-->
        <!--      <div class="dropdown">-->
        <!--        <i data-feather="more-vertical" class="cursor-pointer" role="button" id="heat-chart-dd"-->
        <!--          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
        <!--        </i>-->
        <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="heat-chart-dd">
                  <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                  <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                  <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                </div> -->
        <!--      </div>-->
        <!--    </div>-->
        <!--    <div class="card-body">-->
        <!--      <canvas class="negara chartjs" data-height="450"></canvas>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->

        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Jenis Kerjasama</h4>
            </div>
            <div class="card-body">
              <canvas id="grafik_jenis" style="height:300px"></canvas>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- ChartJS section end -->

    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Kategori Kerjasama</h4>
          </div>
          <div class="card-body">
            <canvas id="grafik_cat" style="height: 300px"></canvas>
          </div>
        </div>
      </div>
    </div>

    <!-- Basic Tables start -->
    <div class="row" id="basic-table">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Kerjasama</h4>
            <a href="kerjasama_form_add.php" type="button" class="btn btn-outline-success round btn-sm">Tambah</a>
          </div>
          <div class="card-body table-responsive">
            <table id="dataTables" class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>No. Kerjasama</th>
                  <th>Mitra</th>
                  <th>Tingkat Kerjasama</th>
                  <th>Jenis Kerjasama</th>
                  <th>Bentuk Kegiatan</th>
                  <th>Tanggal Mulai</th>
                  <th>Tanggal Selesai</th>
                  <th>Status Kerjasama</th>
                  <th>file</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
											include "config.php";
											$no = 1;
											$data = mysqli_query($kon, "SELECT
                      a.id_kerjasama,
                      a.negara_kat,
                      a.pendidikan,
                      a.penelitian,
                      a.pkm,
                      a.id_bkerja,
                      e.bkerja_nama,
                      b.id_jenis_dok,
                      b.jenis_dok,
                      d.id_fak,
                      d.fak_kode,
                      d.fak_nama,
                      c.id_unit,
                      c.unit_nama,
                      a.judul_kerjasama,
                      a.deskripsi_kerjasama,
                      a.status_kerjasama,
                      a.tanggal_awal,
                      a.tanggal_akhir,
                      a.no_ref_kerjasama,
                      a.file,
                      a.date_created,
                      a.date_updated 
                    FROM
                      kerjasama a
                      LEFT JOIN bentuk_kerjasama e ON e.id_bkerja = a.id_bkerja
                      LEFT JOIN jenis_dok b ON b.id_jenis_dok = a.id_jenis_dok
                      LEFT JOIN fakultas d ON d.id_fak = a.id_fak
                      LEFT JOIN unit c ON c.id_unit= a.id_unit ORDER BY id_kerjasama asc");
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
                  <td><?php echo $hasil ['no_ref_kerjasama'];?></td>
                  <td><?php echo $hasil ['judul_kerjasama'];?></td>
                  <td><?php echo $hasil ['negara_kat'];?></td>
                  <td><?php echo $hasil ['jenis_dok'];?></td>
                  <td><?php echo $hasil ['bkerja_nama'];?></td>
                  <td><?php echo $hasil ['tanggal_awal'];?></td>
                  <td><?php echo $hasil ['tanggal_akhir'];?></td>
                  <?php 
                    if ($hasil['status_kerjasama']=='aktif') {?>
                  <td>
                    <div class=" badge badge-pill badge-glow badge-success"><?php echo $hasil ['status_kerjasama'];?>
                    </div>
                  </td>
                  <?php }else{ ?>
                  <td>
                    <div class="badge badge-pill badge-glow badge-danger"><?php echo $hasil ['status_kerjasama'];?>
                    </div>
                  </td>
                  <?php }?>

                  <td>
                    <?php if ($hasil['file']!=0) {?>
                    <button
                      onclick="JavaScript:window.location.href='kerjasama_download.php?file=<?php echo $hasil['file']?>';"
                      class="btn btn-outline-dark round btn-sm">Download</button>
                    <?php }else{ ?>
                    <span class="badge badge-pill badge-light-danger mr-1 lg">Tidak ada file!</span>
                    <?php }
                    ?>
                  </td>


                  <td style="text-align:center ;">
                    <a href="#" type="button" class="open_modal btn btn-outline-dark round btn-sm" data-toggle="modal"
                      data-target="#view<?php echo $hasil['id_kerjasama']; ?>">Lihat</a>
                  </td>
                </tr>
                <!-- MODAL VIEW -->
                <div class="modal fade text-left" id="view<?php echo $hasil['id_kerjasama']; ?>" tabindex="-1"
                  role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel16">View Data</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form class="form form-horizontal" action="jenis_dok_act.php" method="POST">
                          <?php
                              $id = $hasil['id_kerjasama']; 
                              $query_edit = mysqli_query($kon, "SELECT
                              a.id_kerjasama,
                              a.negara_kat,
                              b.id_jenis_dok,
                              b.jenis_dok,
                              d.id_fak,
                              d.fak_kode,
                              d.fak_nama,
                              c.id_unit,
                              c.unit_nama,
                              a.judul_kerjasama,
                              a.deskripsi_kerjasama,
                              a.status_kerjasama,
                              a.tanggal_awal,
                              a.tanggal_akhir,
                              a.no_ref_kerjasama,
                              a.file,
                              a.date_created,
                              a.date_updated 
                            FROM
                              kerjasama a
                              LEFT JOIN jenis_dok b ON b.id_jenis_dok = a.id_jenis_dok
                              LEFT JOIN fakultas d ON d.id_fak = a.id_fak
                              LEFT JOIN unit c ON c.id_unit= a.id_unit WHERE id_kerjasama='$id'");
                              while ($row = mysqli_fetch_array($query_edit)) {  
                              ?>
                          <input type="hidden" name="id_kerjasama" value="<?= $row['id_kerjasama']?>">
                          <section id="input-sizing">
                            <div class="row match-height">
                              <div class="col-lg-4 col-md-4">
                                <div class="card">
                                  <div class="card-header">
                                    <div class="accordion list-group-item list-group-item-action active" type="button"
                                      data-bs-toggle="collapse" data-bs-target="#accordionTwo" aria-expanded="true"
                                      aria-controls="accordionTwo"><span>Masa Berlaku</span>
                                    </div>
                                    <div class="card-body list-group-item" id="accordionTwo">
                                      <div class="row">
                                        <div class="col-12">
                                          <div class="mb-1">
                                            <P class="form-label" for="first-name-icon">Status</P>
                                            <div class="input-group mb-1">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text"><i data-feather="pocket"></i></span>
                                              </div>
                                              <input <?php if ($hasil['status_kerjasama']=='aktif') {
                                                  echo 'style="background-color: #28c76f; color:white;font-size:20px;"';
                                                }else{
                                                  echo 'style="background-color: red;color:white;font-size:20px;"';
                                                }?> type="text" class="form-control"
                                                value="<?php echo $hasil['status_kerjasama']?>" readonly />
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-12">
                                          <div class="mb-1">
                                            <P class="form-label" for="tanggal_awal">Tanggal
                                              Awal</P>
                                            <div class="input-group ">
                                              <span class="input-group-text"><i data-feather="calendar"></i></span>
                                              <input type="date" id="tanggal_awal" class="form-control"
                                                value="<?php echo $hasil ['tanggal_awal'];?>" name="tanggal_awal"
                                                readonly />
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-12">
                                          <div class="mb-1">
                                            <P class="form-label" for="tanggal_akhir">Tanggal
                                              Akhir</P>
                                            <div class="input-group ">
                                              <span class="input-group-text"><i data-feather="calendar"></i></span>
                                              <input type="date" id="tanggal_awal" class="form-control"
                                                value="<?php echo $hasil ['tanggal_akhir'];?>" name="tanggal_awal"
                                                readonly />
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-12">
                                          <div class="mb-1">
                                            <P class="form-label" for="fak_nama">Fakultas Penggiat
                                              Kerjasama</P>
                                            <div class="input-group ">
                                              <span class="input-group-text"><i data-feather="layers"></i></span>
                                              <input type="text" id="fak_nama" class="form-control"
                                                value="<?php echo $hasil['fak_nama'];?>" name="fak_nama" readonly />
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-8 col-md-8">
                                <div class="card">
                                  <div class="card-header">
                                    <div class="card-body list-group-item" id="accordionTwo">
                                      <div class="row">
                                        <div class="col-12">
                                          <div class="mb-1">
                                            <P class="form-label" for="first-name-icon">Jenis Dokumen
                                              Kerjasama</P>
                                            <div class="input-group mb-1">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text"><i data-feather='link'></i></span>
                                              </div>
                                              <input type="text" class="form-control"
                                                value="<?php echo $hasil['jenis_dok']?>" readonly />
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-12">
                                          <div class="mb-1">
                                            <P class="form-label" for="first-name-icon">Mitra</P>
                                            <div class="input-group mb-1">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text"><i data-feather='at-sign'></i></span>
                                              </div>
                                              <input type="text" class="form-control"
                                                value="<?php echo $hasil['judul_kerjasama']?>" readonly />
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-12">
                                          <div class="mb-1">
                                            <P class="form-label" for="deskripsi_kerjasama">Manfaat / Hasil yang
                                              diperoleh</P>
                                            <div class="input-group ">
                                              <span class="input-group-text"><i data-feather="calendar"></i></span>
                                              <input type="text" id="deskripsi_kerjasama" class="form-control"
                                                value="<?php echo $hasil ['deskripsi_kerjasama'];?>"
                                                name="deskripsi_kerjasama" readonly />
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-12">
                                          <div class="mb-1">
                                            <P class="form-label" for="tanggal_akhir">No Kerjasama</P>
                                            <div class="input-group ">
                                              <span class="input-group-text"><i data-feather='map-pin'></i></span>
                                              <input type="text" id="no_ref_kerjasama" class="form-control"
                                                value="<?php echo $hasil ['no_ref_kerjasama'];?>"
                                                name="no_ref_kerjasama" readonly />
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-12">
                                          <div class="mb-1">
                                            <P class="form-label" for="tanggal_akhir">Tanggal Input</P>
                                            <div class="input-group ">
                                              <span class="input-group-text"><i data-feather='pen-tool'></i></span>
                                              <input type="text" id="date_created" class="form-control"
                                                value="<?php echo $hasil ['date_created'];?>" name="date_created"
                                                readonly />
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                          <?php 
                              }
                              //mysql_close($host);
                              ?>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END MODAL VIEw -->
                <?php               
									} 
									?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Basic Tables end -->




  </div>
</div>
</div>
<!-- END: Content-->
<div class="sidenav-overlay"></div>
<div class="drag-target"></div>
<?php include "footer.php";?>
</body>

</html>
