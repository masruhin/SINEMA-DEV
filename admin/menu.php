  <!-- MENU -->
  <div class="horizontal-menu-wrapper">
    <div
      class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-shadow menu-border container-xxl"
      role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mr-auto">
            <a href="#loginform" data-toggle="modal" data-dismiss="modal">
              <span class="brand-logo">
                <!-- MASUKAN LOGO PERUSAHAAN -->
              </span>
              <img src="../assests/images/sinema2.png" alt="" height="80%" width="70%">
              <!-- <h2 class="brand-text mb-0">SINEMA</h2> -->
            </a>
          </li>
          <li class="nav-item nav-toggle">
            <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
              <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="shadow-bottom"></div>
      <div class="navbar-container main-menu-content" data-menu="menu-container">
        <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
          <li data-menu="" <?php if (isset($_GET["home"])){echo 'class="active"';}?>>
            <a class="dropdown-item d-flex align-items-center" href="home.php?home">
              <i data-feather="home"></i>
              <span data-i18n="Documentation"><strong>Home</strong></span>
            </a>
          </li>
          <!-- <li data-menu="" <?php if (isset($_GET["kerjasama"])){echo 'class="active"';}?>>
            <a class="dropdown-item d-flex align-items-center" href="kerjasama.php?kerjasama">
              <i data-feather="plus"></i>
              <span data-i18n="Documentation">Kerjasama</span>
            </a>
          </li> -->
          <li class="dropdown nav-item" data-menu="dropdown"
            <?php if (isset($_GET["kerjasama"])){echo 'class="active"';}?>>
            <a class="dropdown-toggle nav-link d-flex align-items-center" data-toggle="dropdown">
              <i data-feather='folder-plus'></i>
              <span data-i18n="Misc"><strong>Kerjasama</strong> </span></a>
            <ul class="dropdown-menu">
              <li data-menu="" <?php if (isset($_GET["kerjasama"])){echo 'class="active"';}?>>
                <a class="dropdown-item d-flex align-items-center" href="kerjasama.php?kerjasama" data-toggle="dropdown"
                  data-i18n="Raise Support">
                  <i data-feather='file-text'></i>
                  <span data-i18n="Raise Support">Master Kerjasama</span></a>
              </li>
              <li data-menu="" <?php if (isset($_GET["kerjasama"])){echo 'class="active"';}?>>
                <a class="dropdown-item d-flex align-items-center" href="instansi.php?kerjasama" data-toggle="dropdown"
                  data-i18n="Raise Support">
                  <i data-feather='link'></i>
                  <span data-i18n="Raise Support">Situs Instansi</span></a>
              </li>
              <li data-menu="" <?php if (isset($_GET["kerjasama"])){echo 'class="active"';}?>>
                <a class="dropdown-item d-flex align-items-center" href="bentuk_kerjasama_data.php?kerjasama"
                  data-toggle="dropdown" data-i18n="Raise Support">
                  <i data-feather='check-square'></i>
                  <span data-i18n="Raise Support">Master Hasil / Manfaat</span></a>
              </li>
              <li data-menu="" <?php if (isset($_GET["kerjasama"])){echo 'class="active"';}?>>
                <a class="dropdown-item d-flex align-items-center" href="jenis_dok_data.php?kerjasama"
                  data-toggle="dropdown" data-i18n="Raise Support">
                  <i data-feather='twitch'></i>
                  <span data-i18n=" Raise Support">Jenis Kerjasama</span></a>
              </li>
            </ul>
          </li>
          <li class="dropdown nav-item" data-menu="dropdown"
            <?php if (isset($_GET["master"])){echo 'class="active"';}?>>
            <a class="dropdown-toggle nav-link d-flex align-items-center" data-toggle="dropdown">
              <i data-feather="box"></i>
              <span data-i18n="Misc"><strong>Master Data</strong></span></a>
            <ul class="dropdown-menu">
              <!--<li data-menu="" <?php if (isset($_GET["master"])){echo 'class="active"';}?>>-->
              <!--  <a class="dropdown-item d-flex align-items-center" href="negara_data.php?master" data-toggle="dropdown"-->
              <!--    data-i18n="Raise Support">-->
              <!--    <i data-feather="flag"></i>-->
              <!--    <span data-i18n="Raise Support">Master Negara</span></a>-->
              <!--</li>-->
              <li data-menu="" <?php if (isset($_GET["master"])){echo 'class="active"';}?>>
                <a class="dropdown-item d-flex align-items-center" href="universitas_data.php?master"
                  data-toggle="dropdown" data-i18n="Raise Support">
                  <i data-feather='award'></i>
                  <span data-i18n="Raise Support">Master Universitas</span></a>
              </li>
              <li data-menu="" <?php if (isset($_GET["master"])){echo 'class="active"';}?>>
                <a class="dropdown-item d-flex align-items-center" href="fakultas_data.php?master"
                  data-toggle="dropdown" data-i18n="Raise Support">
                  <i data-feather='layers'></i>
                  <span data-i18n="Raise Support">Master Pelaksana</span></a>
              </li>
              <li data-menu="" <?php if (isset($_GET["master"])){echo 'class="active"';}?>>
                <a class="dropdown-item d-flex align-items-center" href="unit_data.php?master" data-toggle="dropdown"
                  data-i18n="Raise Support">
                  <i data-feather='git-pull-request'></i>
                  <span data-i18n="Raise Support">Master Unit</span></a>
              </li>
              <!-- <li data-menu="" <?php if (isset($_GET["master"])){echo 'class="active"';}?>>
                <a class="dropdown-item d-flex align-items-center" href="data_survei.php?master" data-toggle="dropdown"
                  data-i18n="Raise Support">
                  <i data-feather='help-circle'></i>
                  <span data-i18n="Raise Support">Master Pertanyaan Survei</span></a>
              </li> -->
            </ul>
          </li>

          <li class="dropdown nav-item" data-menu="dropdown"
            <?php if (isset($_GET["master"])){echo 'class="active"';}?>>
            <a class="dropdown-toggle nav-link d-flex align-items-center" data-toggle="dropdown">
              <i data-feather="info"></i>
              <span data-i18n="Misc"><strong>Informasi</strong></span></a>
            <ul class="dropdown-menu">
              <li data-menu="" <?php if (isset($_GET["info"])){echo 'class="active"';}?>>
                <a class="dropdown-item d-flex align-items-center" href="panduan.php?info">
                  <i data-feather='book-open'></i>
                  <span data-i18n="Documentation"> <strong>Panduan Kerjasama</strong> </span>
                </a>
              </li>
            </ul>
          </li>
          <!-- <li class="dropdown nav-item" data-menu="dropdown">
            <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
              <i data-feather="paperclip"></i>
              <span data-i18n="Misc"><strong>Referensi Kerjasama</strong></span></a>
            <ul class="dropdown-menu"> -->
          <!-- <li data-menu="" <?php if (isset($_GET["ksm"])){echo 'class="active"';}?>>
                <a class="dropdown-item d-flex align-items-center" href="lembaga_data.php?ksm" data-toggle="dropdown"
                  data-i18n="Raise Support">
                  <i data-feather='slack'></i>
                  <span data-i18n="Raise Support">Jenis Lembaga</span></a>
              </li> -->
          <!-- <li data-menu="" <?php if (isset($_GET["ksm"])){echo 'class="active"';}?>>
            <a class="dropdown-item d-flex align-items-center" href="bentuk_kerjasama_data.php?ksm"
              data-toggle="dropdown" data-i18n="Raise Support">
              <i data-feather='check-square'></i>
              <span data-i18n="Raise Support">Jenis Kegiatan</span></a>
          </li>
          <li data-menu="" <?php if (isset($_GET["ksm"])){echo 'class="active"';}?>>
            <a class="dropdown-item d-flex align-items-center" href="jenis_dok_data.php?ksm" data-toggle="dropdown"
              data-i18n="Raise Support"">
                <i data-feather='twitch'></i>
                <span data-i18n=" Raise Support">Jenis Kerjasama</span></a>
          </li>
        </ul>
        </li> -->
          <li class="dropdown nav-item" data-menu="dropdown" <?php if (isset($_GET["lap"])){echo 'class="active"';}?>>
            <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
              <i data-feather="database"></i>
              <span data-i18n="Misc"><strong>Laporan</strong></span></a>
            <ul class="dropdown-menu">
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                  class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown"
                  data-i18n="Charts"><i data-feather="pie-chart"></i><span data-i18n="Charts">Laporan
                    Kerjasama</span></a>
                <ul class="dropdown-menu">
                  <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                      class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown"
                      data-i18n="Second Level"><i data-feather="circle"></i><span
                        data-i18n="Second Level">UNIVERSITAS</span></a>
                    <ul class="dropdown-menu">
                      <li data-menu="" <?php if (isset($_GET['lap'])) {echo 'class=""active';}?>><a
                          class="dropdown-item d-flex align-items-center" href="lapker_univ.php?lap"
                          data-toggle="dropdown" data-i18n="Third Level"><i data-feather="circle"></i><span
                            data-i18n="Third Level">Antar Universitas</span></a>
                      </li>
                      <li data-menu="" <?php if (isset($_GET['lap'])) {echo 'class=""active';}?>><a
                          class="dropdown-item d-flex align-items-center" href="lapker_unit_humas.php?lap"
                          data-toggle="dropdown" data-i18n="Third Level"><i data-feather="circle"></i><span
                            data-i18n="Third Level">Unit Humas</span></a>
                      </li>
                      <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="lapker_unit_lab.php?lap"
                          data-toggle="dropdown" data-i18n="Third Level"><i data-feather="circle"></i><span
                            data-i18n="Third Level">Unit Laboratorium</span></a>
                      </li>
                      <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="lapker_unit_pmb.php?lap"
                          data-toggle="dropdown" data-i18n="Third Level"><i data-feather="circle"></i><span
                            data-i18n="Third Level">Unit PMB dan Promosi</span></a>
                      </li>
                      <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                          href="lapker_unit_perpus.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                            data-feather="circle"></i><span data-i18n="Third Level">Unit Perpustakaan</span></a>
                      </li>
                      <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                          href="lapker_unit_sarpras.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                            data-feather="circle"></i><span data-i18n="Third Level">Unit Sarana & Prasarana</span></a>
                      </li>
                      <!--<li data-menu=""><a class="dropdown-item d-flex align-items-center"-->
                      <!--    href="lapker_unit_lpm.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i-->
                      <!--      data-feather="circle"></i><span data-i18n="Third Level">LPM</span></a>-->
                      <!--</li>-->
                      <!--<li data-menu=""><a class="dropdown-item d-flex align-items-center"-->
                      <!--    href="lapker_unit_lp2m.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i-->
                      <!--      data-feather="circle"></i><span data-i18n="Third Level">LPPM</span></a>-->
                      <!--</li>-->
                      <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                          href="lapker_unit_baak.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                            data-feather="circle"></i><span data-i18n="Third Level">BAAK</span></a>
                      </li>
                      <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="lapker_unit_bau.php?lap"
                          data-toggle="dropdown" data-i18n="Third Level"><i data-feather="circle"></i><span
                            data-i18n="Third Level">BAU</span></a>
                      </li>
                      <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                          href="lapker_bid_akademik.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                            data-feather="circle"></i><span data-i18n="Third Level">Bidang Akademik</span></a>
                      </li>
                      <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                          href="lapker_bid_keuangan.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                            data-feather="circle"></i><span data-i18n="Third Level">Bidang Keuangan</span></a>
                      </li>
                      <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                          href="lapker_bid_mhs.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                            data-feather="circle"></i><span data-i18n="Third Level">Bidang Kemahasiswaan</span></a>
                      </li>
                    </ul>
                  </li>
                  <li data-menu="" <?php if (isset($_GET["lap"])){echo 'class="active"';}?>>
                    <a class="dropdown-item d-flex align-items-center" href="lapker_unit_lpm.php?lap"
                      data-toggle="dropdown" data-i18n="Raise Support">
                      <i data-feather="circle"></i>
                      <span data-i18n="Raise Support">LPM</span></a>
                  </li>
                  <li data-menu="" <?php if (isset($_GET["lap"])){echo 'class="active"';}?>>
                    <a class="dropdown-item d-flex align-items-center" href="lapker_unit_lp2m.php?lap"
                      data-toggle="dropdown" data-i18n="Raise Support">
                      <i data-feather="circle"></i>
                      <span data-i18n="Raise Support">LP2M</span></a>
                  </li>
                  <!-- <li data-menu="" <?php if (isset($_GET["lap"])){echo 'class="active"';}?>>
                    <a class="dropdown-item d-flex align-items-center" href="lapker_univ.php?lap">
                      <i data-feather='circle'></i>
                      <span data-i18n="Documentation">UNIVERSITAS</span>
                    </a>
                  </li> -->
                  <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                      class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown"
                      data-i18n="Second Level"><i data-feather="circle"></i><span
                        data-i18n="Second Level">FIKES</span></a>
                    <ul class="dropdown-menu">
                      <li data-menu="" <?php if (isset($_GET['lap'])) {echo 'class=""active';}?>><a
                          class="dropdown-item d-flex align-items-center" href="lapker_fikes_ik.php?lap"
                          data-toggle="dropdown" data-i18n="Third Level"><i data-feather="circle"></i><span
                            data-i18n="Third Level">Ilmu
                            Keperawatan (S1)</span></a>
                      </li>
                      <li data-menu="" <?php if (isset($_GET['lap'])) {echo 'class=""active';}?>><a
                          class="dropdown-item d-flex align-items-center" href="lapker_fikes_far.php?lap"
                          data-toggle="dropdown" data-i18n="Third Level"><i data-feather="circle"></i><span
                            data-i18n="Third Level">Farmasi
                            (S1)</span></a>
                      </li>
                      <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                          href="lapker_fikes_bid.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                            data-feather="circle"></i><span data-i18n="Third Level">Kebidanan (D3)</span></a>
                      </li>
                      <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                          href="lapker_fikes_per.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                            data-feather="circle"></i><span data-i18n="Third Level">Keperawatan (D3)</span></a>
                      </li>
                      <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="lapker_fikes_k3.php?lap"
                          data-toggle="dropdown" data-i18n="Third Level"><i data-feather="circle"></i><span
                            data-i18n="Third Level">Keselamatan dan Kesehatan Kerja (D4)</span></a>
                      </li>
                      <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                          href="lapker_fikes_ners.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                            data-feather="circle"></i><span data-i18n="Third Level">Profesi Ners</span></a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"
                    <?php if (isset($_GET['lap'])) {echo 'class=""active';}?>><a
                      class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown"
                      data-i18n="Second Level"><i data-feather="circle"></i><span
                        data-i18n="Second Level">FEB</span></a>
                    <ul class="dropdown-menu">
                      <li data-menu=""><a class="dropdown-item d-flex align-items-center"
                          href="lapker_feb_bisdig.php?lap" data-toggle="dropdown" data-i18n="Third Level"><i
                            data-feather="circle"></i><span data-i18n="Third Level">Bisnis Digital (S1)</span></a>
                      </li>
                      <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="lapker_feb_kwu.php?lap"
                          data-toggle="dropdown" data-i18n="Third Level"><i data-feather="circle"></i><span
                            data-i18n="Third Level">Kewirausahaan (S1)</span></a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"
                    <?php if (isset($_GET['lap'])) {echo 'class=""active';}?>><a
                      class="dropdown-item d-flex align-items-center dropdown-toggle" href="#" data-toggle="dropdown"
                      data-i18n="Second Level"><i data-feather="circle"></i><span
                        data-i18n="Second Level">FIKOM</span></a>
                    <ul class="dropdown-menu">
                      <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="lapker_fikom_it.php?lap"
                          data-toggle="dropdown" data-i18n="Third Level"><i data-feather="circle"></i><span
                            data-i18n="Third Level">Informatika (S1)</span></a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li data-menu="" <?php if (isset($_GET["lap"])){echo 'class="active"';}?>>
                <a class="dropdown-item d-flex align-items-center" href="lap_kinerja.php?lap" data-toggle="dropdown"
                  data-i18n="Raise Support">
                  <i data-feather="life-buoy"></i>
                  <span data-i18n="Raise Support">Laporan Kinerja Tahunan</span></a>
              </li>
              <li data-menu="" <?php if (isset($_GET["lap"])){echo 'class="active"';}?>>
                <a class="dropdown-item d-flex align-items-center" href="lap_kep_mitra.php?lap" data-toggle="dropdown"
                  data-i18n="Raise Support">
                  <i data-feather="life-buoy"></i>
                  <span data-i18n="Raise Support">Laporan Kepuasan Mitra</span></a>
              </li>
              <li data-menu="" <?php if (isset($_GET["lap"])){echo 'class="active"';}?>>
                <a class="dropdown-item d-flex align-items-center" href="lap_monev.php?lap" data-toggle="dropdown"
                  data-i18n="Raise Support">
                  <i data-feather="life-buoy"></i>
                  <span data-i18n="Raise Support">Laporan Monev</span></a>
              </li>
              <li data-menu="" <?php if (isset($_GET["lap"])){echo 'class="active"';}?>>
                <a class="dropdown-item d-flex align-items-center" href="lap_ami.php?lap" data-toggle="dropdown"
                  data-i18n="Raise Support">
                  <i data-feather="life-buoy"></i>
                  <span data-i18n="Raise Support">Laporan AMI</span></a>
              </li>
              <!-- <li data-menu="" <?php if (isset($_GET['lap'])) {echo 'class=""active';}?>>
                <a class="dropdown-item d-flex align-items-center" href="laporan_kerjasama.php?lap"
                  data-toggle="dropdown" data-i18n="Raise Support">
                  <i data-feather="life-buoy"></i>
                  <span data-i18n="Raise Support">Laporan Kerjasama</span></a>
              </li> -->
            </ul>
          </li>
          <li class="dropdown nav-item" data-menu="dropdown"
            <?php if (isset($_GET["survei"])){echo 'class="active"';}?>>
            <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
              <i data-feather='activity'></i>
              <span data-i18n="Misc"><strong>Survei Kepuasan</strong></span></a>
            <ul class="dropdown-menu">
              <li data-menu="" <?php if (isset($_GET["survei"])){echo 'class="active"';}?>>
                <a class="dropdown-item d-flex align-items-center" href="survei_group.php?survei" data-toggle="dropdown"
                  data-i18n="Raise Support">
                  <i data-feather='activity'></i>
                  <span data-i18n="Raise Support">Kategori Group</span></a>
              </li>
              <li data-menu="" <?php if (isset($_GET["survei"])){echo 'class="active"';}?>>
                <a class="dropdown-item d-flex align-items-center" href="survei_deskripsi.php?survei"
                  data-toggle="dropdown" data-i18n="Raise Support">
                  <i data-feather='activity'></i>
                  <span data-i18n="Raise Support">Deskripsi Survei</span></a>
              </li>
              <li data-menu="" <?php if (isset($_GET["survei"])){echo 'class="active"';}?>>
                <a class="dropdown-item d-flex align-items-center" href="survei_hasil.php?survei" data-toggle="dropdown"
                  data-i18n="Raise Support">
                  <i data-feather='bar-chart'></i>
                  <span data-i18n="Raise Support">Hasil Survei</span></a>
              </li>
              <li data-menu="" <?php if (isset($_GET["survei"])){echo 'class="active"';}?>>
                <a class="dropdown-item d-flex align-items-center" href="survei_responden.php?survei"
                  data-toggle="dropdown" data-i18n="Raise Support">
                  <i data-feather='bar-chart'></i>
                  <span data-i18n="Raise Support">Laporan Survei Responden</span></a>
              </li>
            </ul>
          </li>
          <li class="dropdown nav-item" data-menu="dropdown">
            <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
              <i data-feather="settings"></i>
              <span data-i18n="Misc"><strong>Pengaturan</strong></span></a>
            <ul class="dropdown-menu">
              <li data-menu="" <?php if (isset($_GET["config"])){echo 'class="active"';}?>>
                <a class="dropdown-item d-flex align-items-center" href="galeri.php?config" data-toggle="dropdown"
                  data-i18n="Raise Support">
                  <i data-feather='sliders'></i>
                  <span data-i18n="Raise Support">Pengaturan Galeri</span></a>
              </li>
              <!-- <li data-menu="" <?php if (isset($_GET["config"])){echo 'class="active"';}?>>
                <a class="dropdown-item d-flex align-items-center" href="#" data-toggle="dropdown"
                  data-i18n="Raise Support">
                  <i data-feather="life-buoy"></i>
                  <span data-i18n="Raise Support">Pengaturan akun</span></a>
              </li> -->
              <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="web.php?config" data-toggle="dropdown"
                  data-i18n="Raise Support">
                  <i data-feather="life-buoy"></i>
                  <span data-i18n="Raise Support">Pengaturan Website</span></a>
              </li>
            </ul>
          </li>
          <li class="dropdown nav-item" data-menu="dropdown">
            <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-toggle="dropdown">
              <i data-feather="settings"></i>
              <span data-i18n="Misc"><strong>Users</strong></span></a>
            <ul class="dropdown-menu">
              <li data-menu="" <?php if (isset($_GET["users"])){echo 'class="active"';}?>>
                <a class="dropdown-item d-flex align-items-center" href="user.php?users" data-toggle="dropdown"
                  data-i18n="Raise Support">
                  <i data-feather="life-buoy"></i>
                  <span data-i18n="Raise Support">Pengaturan Users</span></a>
                <a class="dropdown-item" href="#">
                  <i class="mr-50" data-feather="edit"></i>
                  Update Profile</a>
                <a class="dropdown-item" href="page-auth-login-v2.html">
                  <i class="mr-50" data-feather="key"></i>
                  Update Password</a>
                <a class="dropdown-item" href="logout.php">
                  <i class="mr-50" data-feather="log-out"></i>
                  Keluar</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- END MENU -->
