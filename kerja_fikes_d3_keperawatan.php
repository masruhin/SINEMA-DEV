<?php 
include "includes/header.php";
include "includes/config.php";
$data = mysqli_query($kon, "SELECT * FROM web ORDER BY id ASC");

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
<div class="app-content content ">
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>
  <div class="content-wrapper container-xxl p-0">
    <div class="content-body">
      <!-- Dashboard Ecommerce Starts -->
      <div class="row match-height">
        <div class="col-lg-12" id="kerjasama">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Kerjasama</h4>
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
											include "includes/config.php";
											$no = 1;
											$data = mysqli_query($kon, "SELECT
                      a.id_kerjasama,
                      a.negara_kat,
                      a.pendidikan,
                      a.penelitian,
                      a.pkm,
                      a.id_fak,
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
                      LEFT JOIN unit c ON c.id_unit= a.id_unit WHERE a.id_fak=7");
											if (!$data) {
												printf("Error: %s\n", mysqli_error($kon));
												exit();
											}
											while($hasil = mysqli_fetch_array($data)){
                        // var_dump($hasil);
                        // die;
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

                  <!-- MODAL HAPUS -->
                  <div id="deleteEmployeeModal<?php echo $hasil['id_jenis_dok']; ?>" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <form method="post" action="jenis_dok_act.php">
                          <?php
                          $id = $hasil['id_jenis_dok']; 
                          $query_edit = mysqli_query($kon, "SELECT * FROM jenis_dok WHERE id_jenis_dok='$id'");
                          //$result = mysqli_query($conn, $query);
                          while ($row = mysqli_fetch_array($query_edit)) {  
                          ?>
                          <input type="hidden" class="form-control" value="<?php echo $hasil['id_jenis_dok']; ?>"
                            name="id_jenis_dok" required>

                          <div class="modal-header">
                            <h4 class="modal-title">Delete</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          </div>
                          <div class="modal-body">
                            <p>Apakah Kamu akan menghapus Jenis Dokumen <?php echo $hasil['jenis_dok']; ?>?</p>
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
  </div>
</div>

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<?php include "includes/footer.php";?>

</body>

</html>
