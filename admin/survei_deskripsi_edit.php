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
            <h4 class="card-title">Form Edit Deskripsi</h4>
          </div>
          <div class="card-body">
            <form action="survei_deskripsi_act.php" method="post" enctype="multipart/form-data">
              <?php include 'config.php';
              $id			= $_GET['descriptionId'];
              $sql  		= "SELECT a.descriptionId, 
                                  b.groupId, 
                                  b.groupName,
                                  a.description,  
                                  a.groupId, 
                                  a.CreatedDate,
                                  a.CreatedUser, 
                                  a.ModifiedDate, 
                                  a.ModifiedUser
                            FROM tdescription a
              LEFT JOIN tgroup b ON b.groupId = a.groupId WHERE descriptionId ='$id' ";                        
              $query  	= mysqli_query($kon, $sql);
              $data 		= mysqli_fetch_array($query);
              $group      = $data['groupId'];
              $description     = $data['description'];
              ?>

              <input type=hidden name="descriptionId" value="<?php echo $id;?>">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-body">

                      <div class="row">

                        <div class="col-md-6 col-12 mb-1">
                          <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label"><span
                                class="badge badge-pill badge-light-success mr-1 lg"
                                style="background-color: rgb(255 205 21 / 83%); height:25px; color: #020202 !important;">Group</span></label>
                            <div class="col-sm-8">
                              <select name="groupId" class="select2 form-control" tabindex="-1">
                                <option value="<?php echo $data['groupId'];?>">
                                  <?php echo $data['groupId'] ." | ". $data['groupName'];?>
                                </option>
                                <option disabled>-- Pilh untuk mengganti --</option>
                                <?php include 'config.php';
                                $sql2  		= "SELECT * FROM tgroup";                        
                                $query2  	= mysqli_query($kon, $sql2);
                                while ($data2 = mysqli_fetch_array($query2)){?>
                                <option value="<?php echo $data2['groupId'] ?>">
                                  <?php echo $data2['groupId'] ." | ". $data2['groupName']; ?>
                                </option>
                                <?php }
                                ?>
                              </select>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label"> <span
                                class="badge badge-pill badge-light-success mr-1 lg"
                                style="background-color: rgb(255 205 21 / 83%); height:25px; color: #020202 !important;">Deskripsi
                                Pertanyaan</span></label>
                            <div class="col-sm-8">
                              <textarea class="form-control" rows="4" name="description"
                                class="form-control"><?= $description ?></textarea>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12 offset-sm-12 modal-footer">
                    <button type="submit" class="btn btn-info mr-1 btn-sm" name="ubah">Simpan</button>
                    <button type="reset" class="btn btn-outline-danger btn-sm">Reset</button>
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
