<?php 
include "includes/header.php";
include "includes/config.php";
?>
<div class="app-content content ">
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>
  <div class="content-wrapper container-xxl p-0">
    <div class="content-body">
      <!-- Dashboard Ecommerce Starts -->
      <section id="dashboard-ecommerce">
        <div class="row match-height">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <!-- <div class="accordion list-group-item list-group-item-action active" type="button"
                  data-bs-toggle="collapse" data-bs-target="#accordionTwo" aria-expanded="true"
                  aria-controls="accordionTwo"><span><i data-feather="phone-call"></i> Kontak Kami</span>
                </div> -->
                <form method='POST' action='aksi_kuosioner.php'>
                  <table class="table">
                      <tr >
                                  <td>
                                      <div class="form-horizontal"  >
                                          <div class="page-header" >
                                            <h3>Informasi </h3>
                                          </div>
                                  
                                  
                                                                           <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-3 col-form-label">
                                              <span class="badge badge-pill badge-light-success mr-1 lg"
                                                style="background-color: rgb(255 205 21 / 83%); height:25px; color: #020202 !important;">Nama / <small style="font-style: italic;">(Name)</small></span>
                                            </label>
                                            <div class="col-sm-4">
                                              <input type="text" class="form-control" id="nama" name="nama"
                                                placeholder="Nama / Name" required>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-3 col-form-label">
                                              <span class="badge badge-pill badge-light-success mr-1 lg"
                                                style="background-color: rgb(255 205 21 / 83%); height:25px; color: #020202 !important;">Jabatan / <small style="font-style: italic;">Position</small></span>
                                            </label>
                                            <div class="col-sm-4">
                                              <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan / Position" required>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-3 col-form-label">
                                              <span class="badge badge-pill badge-light-success mr-1 lg"
                                                style="background-color: rgb(255 205 21 / 83%); height:25px; color: #020202 !important;">Nama Instansi / <small style="font-style: italic;">Institution</small></span>
                                            </label>
                                            <div class="col-sm-4">
                                              <input type="text" class="form-control" id="instansi" name="instansi" placeholder="Nama Instansi / Institution" required>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-3 col-form-label mt-1">
                                              <span class="badge badge-pill badge-light-success lg"
                                                style="background-color: rgb(255 205 21 / 83%); height:25px; color: #020202 !important;">Bentuk Kerjasama / <small style="font-style: italic;">Types of Cooperation</small></span>
                                            </label>
                                            <div class="col-sm-9">
                                              <div class="demo-inline-spacing  mt-0">
                                                <div class="custom-control custom-control-info custom-checkbox ">
                                                <input type="checkbox" class="custom-control-input" id="colorCheck2" value="1"
                                                  name="pendidikan" />
                                                <label class="custom-control-label" for="colorCheck2" style="color: black">Pendidikan <small style="font-style: italic;font-size:13px;">( Education)</small></label>
                                              </div>
                                              <div class="custom-control custom-control-primary custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="colorCheck1" value="1"
                                                  name="penelitian" />
                                                <label class="custom-control-label" for="colorCheck1" style="color: black">Penelitian <small style="font-style: italic;font-size:13px;">(research)</small> </label>
                                              </div>
                                              <div class="custom-control custom-control-success custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="colorCheck3" value="1"
                                                  name="pkm" />
                                                <label class="custom-control-label" for="colorCheck3" style="color: black">Pengabdian kepada masyarakat  <small style="font-style: italic;font-size:13px;">(community services)</small></label>
                                              </div>
                                              <div class="custom-control custom-control-info custom-checkbox ">
                                                <input type="checkbox" class="custom-control-input" id="colorCheck4" value="1"
                                                  name="seminar" />
                                                <label class="custom-control-label" for="colorCheck4" style="color: black">Seminar <small style="font-style: italic;font-size:13px;">(Seminar)</small></label>
                                              </div>
                                              <div class="custom-control custom-control-primary custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="colorCheck5" value="1"
                                                  name="umum" />
                                                <label class="custom-control-label" for="colorCheck5" style="color: black">Kuliah Umum <small style="font-style: italic;font-size:13px;">(Public Lecture)</small></label>
                                              </div>
                                              <div class="custom-control custom-control-success custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="colorCheck6" value="1"
                                                  name="workshop" />
                                                <label class="custom-control-label" for="colorCheck6" style="color: black">Workhsop <small style="font-style: italic;font-size:13px;">(Workshop)</small></label>
                                              </div>
                                              <!-- <div class="custom-control custom-control-success custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="colorCheck7" value="1"
                                                  name="lainya" />
                                                <label class="custom-control-label" for="colorCheck7" style="color: black">Lainnya (Others)</label>
                                              </div> -->
                                              </div>
                                            </div>
                                          </div> 
                                          <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-3 col-form-label">
                                             
                                            </label>
                                            <div class="col-sm-4">
                                              <input type="text" class="form-control" id="lainya" name="lainya"
                                                placeholder="Lainnya / Other ...">
                                            </div>
                                          </div>
                                          <br><br><br>
                                          
                                      </div>
                                  </td>
                              </tr>
                    <tr>
                      <td width="97%" valign="top" align="center" colspan="5"
                        style="border-style: none; border-width: medium">
                        <font face="Arial" size="3"><b>Mohon kesediaan Anda untuk memberikan
                            penilaian dan masukan kepada Kami, dimana hal ini sangat bermanfaat
                            untuk meningkatkan kualitas layanan kami.<br>
                          </b><i>Silahkan diisi dengan mengklik option radio
                            serta keterangan sesuai dengan penilaian Anda
                            pada kolom yang telah disediakan</i></font>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="9">
                        <table class="table table-striped table-bordered">
                          <thead>
                            <th width='3%'><b>
                                <font face='Tahoma' size='2'>No</font>
                              </b></th>
                            <th colspan='2'>
                              <p align='center'><b>
                                  <font face='Tahoma' size='2'>DESKRIPSI <span style="font-style: italic;">(Statement)</span></font>
                                </b>
                            </th>
                            <th colspan="5" bgcolor='#FFFF00'>
                              <p align='center'>
                                <font face='Tahoma' size='2'>KUALITAS</font>
                            </th>
                          </thead>
                          <tbody>
                            <?php
                        include "includes/config.php";
                        error_reporting(0);
                        $no = 1;
                        $sql = mysqli_query($kon, "SELECT * FROM tgroup");
                        while($data = mysqli_fetch_array($sql)){
                            $id = $data['groupId'];
                            echo "<tr valign='top'>
                                    <td><font face='Tahoma' size='2' colspan='1'><b> </b></font></td>
                                    <td colspan='2'><font face='Tahoma' size='2'><b>$data[groupName]</b></font></td>
                                    <td height='25' width='8%' bgcolor='#9d049f'><p align='center'><font face='Tahoma' size='3' color='black'>Tidak Puas<br><span style='font-style: italic;'>(Unsatisfied)</span></font></td>
                                    <td height='25' width='8%' bgcolor='#d0e307'><p align='center'><font face='Tahoma' size='3' color='black'>Kurang Puas<br><span style='font-style: italic;'>(Less Unsatisfied)</span></font></td>
                                    <td height='25' width='8%' bgcolor='#2a8d06'><p align='center'><font face='Tahoma' size='3' color='black'>Puas<br><span style='font-style: italic;'>(Satisfied)</span></font></td>
                                    <td height='25' width='8%' bgcolor='#16b1e7'><p align='center'><font face='Tahoma' size='3' color='black'>Sangat Puas<br><span style='font-style: italic;'>(Very Satisfied)</span></font></td>
                                </tr>";
                                
                            $hasil = mysqli_query($kon, "SELECT * FROM tdescription, tgroup WHERE tdescription.groupId = '$id' AND tdescription.groupId = tgroup.groupId ORDER BY tgroup.groupId");
                            $i = 1;
                            while ($r = mysqli_fetch_array($hasil)){
                                echo "<tr>
                                        <td colspan='1'>$i</td>
                                        
                                        <td colspan='2'><font face='Tahoma' size='3'> $r[description]</font></td>
                                        <td align='center'> <input type='checkbox' name='asfa$i$data[groupId]' value='D'> </td>
                                        <td align='center'> <input type='checkbox' name='asfa$i$data[groupId]' value='C'> </td>
                                        <td align='center'> <input type='checkbox' name='asfa$i$data[groupId]' value='B'> </td>
                                        <td align='center'> <input type='checkbox' name='asfa$i$data[groupId]' value='A'> </td>
                                        </tr>";
                                $i++;
                            }
                            echo "<br>";
                            $no++;
                        }
                                              ?>
                          </tbody>
                        </table>
                      </td>
                    </tr>
 <tr>
                                  <td colspan="8">    
                                          <div class="well"><br>
                                              <h3>Kritik / Saran...</h3><hr>
                                            <h4 style="color: black;">1.  Menurut pendapat Bapak/Ibu, apa manfaat yang diperoleh dengan melakukan kerja sama di Universitas Bhamada Slawi? <br> 
                                              <span style="font-style: italic;">  In your opinion, what are the benefits that you get in collaborating with Bhamada Slawi University?</span></h4>
                                                  <div class="form-group">
                                                      <textarea name='suggestion' class="form-control" rows="3" placeholder="Tulis Komentar dan Saran..."></textarea>
                                                  </div>
                                                 
                                          </div>
                                      <hr>
                                  </td>
                              </tr>
                              <tr>
                                  <td colspan="8">    
                                          <div class="well"><br>
                                            <h4 style="color:black;">2.  Menurut pendapat Bapak/Ibu, hal apa yang perlu ditingkatkan dalam pelayanan kerja sama di Universitas Bhamada Slawi? <br><span style="font-style: italic;"> In your opinion, what needs to be improved in cooperation services at Bhamada Slawi University?</span></h4>
                                                  <div class="form-group">
                                                      <textarea name='suggestion1' class="form-control" rows="3" placeholder="Tulis Komentar dan Saran..."></textarea>
                                                  </div>
                                                 
                                          </div>
                                      <hr>
                                  </td>
                              </tr>
                               <tr>
                                  <td colspan="8">    
                                          <div class="well"><br>
                                            <h4 style="color: black;">3. Menurut pendapat Bapak/Ibu, hal apa yang dibutuhkan instansi Bapak/Ibu dalam kaitannya dengan keberlanjutan kerja sama dimasa yang akan datang? <br>
                                            <span style="font-style: italic;">  In your opinion, what things do your institution needs related to the continuation of cooperation in the future?
                                              </span>
                                            </h4>
                                                  <div class="form-group">
                                                      <textarea name='suggestion2' class="form-control" rows="3" placeholder="Tulis Komentar dan Saran..."></textarea>
                                                  </div>
                                                 
                                          </div>
                                      <hr>
                                  </td>
                              </tr>
                    <tr>
                      <td colspan="8">
                        <center><button type="submit" class="btn btn-primary btn-lg">Submit</button></center>
                      </td>
                    </tr>
                    <tr>
                      <td width="97%" valign="top" align="center" colspan="5"
                        style="border-style: none; border-width: medium">
                        <center class="well">
                          <font face="Arial" size="1"><b>Terima Kasih Atas Waktu dan Masukan yang anda berikan,Semua
                              masukan yang anda berikan </b> </i></font>
                          <font face="Arial" size="1"><b>akan kami terima sebagai sarana bagi kami untuk meningkatkan
                              kulaitas Pelayanan kami</b> </i></font>
                        </center>
                      </td>
                    </tr>
                  </table>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
    </section>
  </div>
</div>
</div>

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<?php include "includes/footer.php";?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
$("input:checkbox").on('click', function() {
  var $box = $(this);
  if ($box.is(":checked")) {
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});
</script>

</body>

</html>
