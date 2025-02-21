<?php
include 'header.php';
include 'config.php';
if (empty($_SESSION['username'])) {
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
          <div class="card-header border-bottom">
            <h4 class="card-title">Form Input Kerjasama</h4>
          </div>
          <div class="card-body">
            <form action="kerjasama_proses.php" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-lg-4">
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
                              <p>Jaringan Negara</p>
                              <!-- <p class="form-p" for="first-name-icon">Status</p> -->
                              <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather='chevrons-down'></i></span>
                                <div class="col-lg-10">
                                  <select name="negara_kat" class="select2 form-select form-control" required>
                                    <option>
                                      LOKAL
                                    </option>
                                    <option>
                                      NASIONAL
                                    </option>
                                    <option>
                                      INTERNASIONAL
                                    </option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="mb-1">
                              <p class="form-p" for="id_negara">Negara</p>
                              <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather='flag'></i></i></span>
                                <div class="col-10">
                                  <select class="select2 form-control form-control-md" onkeyup="cekdb()"
                                    name="id_negara" id="id_negara">
                                    <option value="" selected="selected">-- Pilih Negara --</option>
                                    <?php
                                      $query =
                                          'SELECT * FROM negara ORDER BY id_negara';
                                      $hasil = mysqli_query($kon, $query);
                                      while ($row = mysqli_fetch_array($hasil)) { ?>
                                    <option value="<?php echo $row[
                                          'id_negara'
                                      ]; ?>">
                                      <?php echo $row['id_negara'] .
                                            ' | ' .
                                            $row['negara_nama']; ?></option>
                                    <?php }
                                      ?>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- <input type="date" id="negara_ket" class="form-control" name="negara_ket" required /> -->
                          <div class="col-12">
                            <div class="mb-1">
                              <p>Status</p>
                              <!-- <p class="form-p" for="first-name-icon">Status</p> -->
                              <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather='chevrons-down'></i></span>
                                <div class="col-lg-10">
                                  <select name="status_kerjasama" class="select2 form-select form-control" required>
                                    <option>
                                      aktif
                                    </option>
                                    <option>
                                      nonaktif
                                    </option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="mb-1">
                              <p class="form-p" for="tanggal_awal">Tanggal
                                Awal</p>
                              <div class="input-group  ">
                                <span class="input-group-text"><i data-feather="calendar"></i></span>
                                <input type="date" id="tanggal_awal" class="form-control" name="tanggal_awal"
                                  required />
                              </div>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="mb-1">
                              <p class="form-p" for="tanggal_akhir">Tanggal
                                Akhir</p>
                              <div class="input-group ">
                                <span class="input-group-text"><i data-feather="calendar"></i></span>
                                <input type="date" id="tanggal_akhir" class="form-control" name="tanggal_akhir"
                                  required />
                              </div>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="mb-1">
                              <p class="form-p" for="id_unit">Unit Penggiat Kerjasama</p>
                              <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather='paperclip'></i></i></span>
                                <div class="col-10">
                                  <select class="select2 form-control form-control-md" name="id_unit" id="id_unit">
                                    <option value="" selected="selected">-- Pilih Penggiat Kerjasama --</option>
                                    <?php
                                      $query =
                                          'SELECT * FROM unit ORDER BY id_unit';
                                      $hasil = mysqli_query($kon, $query);
                                      while ($row = mysqli_fetch_array($hasil)) { ?>
                                    <option value="<?php echo $row[
                                          'id_unit'
                                      ]; ?>">
                                      <?php echo $row['id_unit'] .
                                            ' | ' .
                                            $row['unit_nama']; ?></option>
                                    <?php }
                                      ?>
                                  </select>
                                </div>
                                <span class="sm" style="color:red ;">
                                  <label for="" style="color:red ;">
                                    *boleh dikosongkan
                                  </label>
                                </span>
                              </div>
                            </div>
                          </div>

                          <div class="col-12">
                            <div class="mb-1">
                              <p class="form-p" for="id_fak">Pelaksana</p>
                              <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather='paperclip'></i></i></span>
                                <div class="col-10">
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
                                <span class="sm" style="color:red ;">
                                  <label for="" style="color:red ;">
                                    *boleh dikosongkan
                                  </label>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="col-md-12 col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12">
                            <div class="mb-1">
                              <div class="col-12">
                                <div class="mb-1">
                                  <p class="form-p" for="judul_kerjasama">Jenis Kegiatan</p>
                                  <div class="demo-inline-spacing  mb-0">
                                    <div class="custom-control custom-control-info custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="colorCheck2" value="1"
                                        name="pendidikan" />
                                      <label class="custom-control-label" for="colorCheck2">Pendidikan</label>
                                    </div>
                                    <div class="custom-control custom-control-primary custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="colorCheck1" value="1"
                                        name="penelitian" />
                                      <label class="custom-control-label" for="colorCheck1">Penelitian</label>
                                    </div>
                                    <div class="custom-control custom-control-success custom-checkbox">
                                      <input type="checkbox" class="custom-control-input" id="colorCheck3" value="1"
                                        name="pkm" />
                                      <label class="custom-control-label" for="colorCheck3">Pkm</label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="mb-1">
                                  <p class="form-p" for="id_bkerja">Hasil / Manfaat yang diperoleh</p>
                                  <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i data-feather='paperclip'></i></i></span>
                                    <div class="col-10">
                                      <select class="select2 form-control form-control-md" name="id_bkerja">
                                        <option value="" selected="selected">-- Pilih Hasil / Manfaat yang diperoleh
                                          --
                                        </option>
                                        <?php
                                      $no = 1;
                                      $query =
                                          'SELECT * FROM bentuk_kerjasama ORDER BY id_bkerja';
                                      $hasil = mysqli_query($kon, $query);
                                      while ($row = mysqli_fetch_array($hasil)) { ?>
                                        <option value="<?php echo $row['id_bkerja' ]; ?>">
                                          <?php echo $row['id_bkerja'] .' | ' . $row['bkerja_nama']; ?></option>
                                        <?php }
                                      ?>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="mb-1">
                                  <p class="form-p" for="id_jenis_dok">Jenis
                                    Kerjasama</p>
                                  <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i data-feather='paperclip'></i></i></span>
                                    <div class="col-10">
                                      <select class="select2 form-control form-control-md" name="id_jenis_dok">
                                        <option value="" selected="selected">-- Pilih Dokumen Kerjasama --</option>
                                        <?php
                                      $no = 1;
                                      $query =
                                          'SELECT * FROM jenis_dok ORDER BY id_jenis_dok';
                                      $hasil = mysqli_query($kon, $query);
                                      while ($row = mysqli_fetch_array($hasil)) { ?>
                                        <option value="<?php echo $row[
                                          'id_jenis_dok'
                                      ]; ?>">
                                          <?php echo $row['id_jenis_dok'] .
                                            ' | ' .
                                            $row['jenis_dok']; ?></option>
                                        <?php }
                                      ?>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="mb-1">
                                  <p class="form-p" for="judul_kerjasama">Judul Kerjasama</p>
                                  <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i data-feather='pocket'></i></span>
                                    <input type="text" id="judul_kerjasama" class="form-control" name="judul_kerjasama"
                                      placeholder="Judul Kerjasama" required />
                                  </div>
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="mb-1">
                                  <p class="form-p" for="deskripsi_kerjasama">Deskripsi</p>
                                  <textarea name="deskripsi_kerjasama" id="deskripsi_kerjasama" class="form-control"
                                    rows="4"
                                    placeholder="Ringkasan singkat terkait cakupan atau kegiatan kerja sama"></textarea>
                                </div>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="mb-1">
                                <p class="form-p" for="no_ref_kerjasama">Nomor
                                  Referensi</p>
                                <div class="input-group input-group-merge">
                                  <span class="input-group-text"><i data-feather='file-minus'></i></i></span>
                                  <input type="text" id="no_ref_kerjasama" class="form-control" name="no_ref_kerjasama"
                                    placeholder="Nomor Dokumen" required />
                                </div>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="mb-1">
                                <div class="form-group">
                                  <p for="basicInputFile">Upload Dokumen Surat Perjanjian</p>
                                  <input type="file" name="file" class="form-control-file" id="basicInputFile" />
                                  <span class="sm" style="color:red ;">
                                    <label for="" style="color:red ;">
                                      File yang bisa di Upload hanya file dengan ekstensi .doc, .docx, .xls, .xlsx,
                                      .ppt,
                                      .pptx, .pdf, .rar, .exe, .zip dan besar file (file size) maksimal hanya <b>3
                                        MB</b>.
                                    </label>
                                  </span>
                                </div>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 offset-sm-12 modal-footer">
                  <button type="submit" class="btn btn-info mr-1 btn-sm" name="upload">Simpan</button>
                  <button type="reset" class="btn btn-outline-danger btn-sm">Reset</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="sidenav-overlay"></div>
<div class="drag-target"></div>
<?php include 'footer.php'; ?>
<script>
$(document).ready(function() {
  $(".select2").select2();
});
</script>
</body>

</html>
