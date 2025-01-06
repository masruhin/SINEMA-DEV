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
                                      <div class="form-horizontal"  style="margin-top:20px;background-color:#fff;padding-top:20px;padding-bottom:20px;">
                                          <div class="page-header" style="margin-left:30px;">
                                            <h3>Informasi </h3>
                                          </div>
                                          <div class="form-group">
                                             <label for="nama_pelanggan" class="control-label col-sm-2">Nama </label>
                                             <div class="col-sm-3">
                                                 <div class="input-group">
                                                     <div class="input-group-addon">
                                                         <span class="glyphicon glyphicon-user"></span>
                                                     </div>
                                                     <input type="text" id="nama_pelanggan" class="form-control" name="companyName" placeholder="Nama ">
                                                 </div>
                                             </div>
                                          </div>
                                  
                                          <div class="form-group">
                                             <label for="alamat_pelanggan" class="control-label col-sm-2">Email</label>
                                             <div class="col-sm-3">
                                                 <div class="input-group">
                                                     <div class="input-group-addon">
                                                         <span class="glyphicon glyphicon-bookmark"></span>
                                                     </div>
                                                     <input type="text" id="email" class="form-control" name="email" placeholder="Email">
                                                 </div>
                                             </div>
                                          </div>
                                          
                                          <div class="form-group">
                                             <label for="hp" class="control-label col-sm-2">Instansi / Lembaga</label>
                                             <div class="col-sm-3">
                                                 <div class="input-group">
                                                     <div class="input-group-addon">
                                                         <span class="glyphicon glyphicon-phone"></span>
                                                     </div>
                                                     <input type="text" id="instansi" class="form-control" name="instansi" placeholder="Instansi / Lembaga">
                                                 </div>
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <label for="hp" class="control-label col-sm-2">Kerjasama dalam Bidang</label>
                                             <div class="col-sm-3">
                                                 <div class="input-group">
                                                     <div class="input-group-addon">
                                                         <span class="glyphicon glyphicon-phone"></span>
                                                     </div>
                                                     <input type="text" id="kerjasama" class="form-control" name="kerjasama" placeholder="Kerjasama dalam Bidang">
                                                 </div>
                                             </div>
                                          </div>
                                          <!--<div class="form-group">-->
                                          <!--   <label for="tgl" class="control-label col-sm-2">Tanggal</label>-->
                                          <!--   <div class="col-sm-3">-->
                                          <!--       <div class="input-group">-->
                                          <!--           <div class="input-group-addon">-->
                                          <!--               <span class="glyphicon glyphicon-calender"></span>-->
                                          <!--           </div>-->
                                          <!--           <?php-->
                                          <!--                include "fungsi/fungsi_indotgl.php";-->
                                          <!--                $tanggal = date('Y-m-d');-->
                                          <!--                $tglFinal = tgl_indo($tanggal);-->
                                          <!--                ?>-->
                                          <!--           <input type="text" id="tgl" class="form-control" disabled="" name="companyName" value="<?php echo $tglFinal; ?>">-->
                                          <!--       </div>-->
                                          <!--   </div>-->
                                          <!--</div>-->
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
                                  <font face='Tahoma' size='2'>DESKRIPSI</font>
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
                                    
                                    <td height='25' width='8%' bgcolor='#16b1e7'><p align='center'><font face='Tahoma' size='3' color='black'>A<br>(Sangat Puas)</font></td>
                                    <td height='25' width='8%' bgcolor='#2a8d06'><p align='center'><font face='Tahoma' size='3' color='black'>B<br>(Puas)</font></td>
                                    <td height='25' width='8%' bgcolor='#d0e307'><p align='center'><font face='Tahoma' size='3' color='black'>C<br>(Kurang Puas)</font></td>
                                    <td height='25' width='8%' bgcolor='#9d049f'><p align='center'><font face='Tahoma' size='3' color='black'>D<br>(Tidak Puas)</font></td>
                                    
                                </tr>";
                                
                            $hasil = mysqli_query($kon, "SELECT * FROM tdescription, tgroup WHERE tdescription.groupId = '$id' AND tdescription.groupId = tgroup.groupId ORDER BY tgroup.groupId");
                            $i = 1;
                            while ($r = mysqli_fetch_array($hasil)){
                                echo "<tr>
                                        <td colspan='1'>$i</td>
                                        
                                        <td colspan='2'><font face='Tahoma' size='3'> $r[description]</font></td>
                                        <td align='center'> <input type='radio' name='asfa$i$data[groupId]' value='A'> </td>
                                        <td align='center'> <input type='radio' name='asfa$i$data[groupId]' value='B'> </td>
                                        <td align='center'> <input type='radio' name='asfa$i$data[groupId]' value='C'> </td>
                                        <td align='center'> <input type='radio' name='asfa$i$data[groupId]' value='D'> </td>
                                       
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
                        <div class="well">
                            <h4>Berdasarkan jaringan kerja sama mohon Bapak/Ibu/Saudara/i berkenan
menyebutkan hal-hal yang dibutuhkan instansi Bpk/Ibu dalam kaitannya
dengan keberlanjutan dimasa yang akan datang</h4>
                          <h4>Tulislah saran-saran anda untuk kemajuan kami</h4>

                          <div class="form-group">
                            <textarea name='suggestion' class="form-control" rows="3"
                              placeholder="Tulis Komentar dan Saran..."></textarea>
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
                              kulaitas pelanan kami</b> </i></font>
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

</body>

</html>
