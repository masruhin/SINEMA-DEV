<?php 
session_start();
if(empty($_SESSION['username'])){
  echo "<script>alert('Silahkan Login Terlebih Dahulu');window.location='index.php'</script>";
}
error_reporting();
include "config.php";

if (isset($_POST['upload'])) {

  $judul = $_POST['judul'];
  $tahun_lap = $_POST['tahun_lap'];
  $id_unit     = $_POST['id_unit'];
  $date = date('Y-m-d');
  
  $ekstensi_diperbolehkan    = array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip', 'png', 'jpg', 'mp4', 'avi');

  $nama = date("Y-m-d").'_'.basename($_FILES['dok']['name']);
  // $nama    = $_FILES['dok']['name'];
  $x        = explode('.', $nama);
  $ekstensi    = strtolower(end($x));
  $ukuran        = $_FILES['dok']['size'];
  $file_tmp    = $_FILES['dok']['tmp_name']; 
  
  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
      if($ukuran < 304407000){ 
          move_uploaded_file($file_tmp, '../dok/lapker_unit_lppm/' . $nama);
          $query    = mysqli_query($kon, "INSERT INTO lapker_unit_lppm (judul,tahun_lap,id_unit,dok) 
                                          VALUES('$judul','$tahun_lap','$id_unit','$nama')");
          // var_dump($query);
          // die();
          if($query){
            echo "<script type='text/javascript'>
            alert('Berhasil Tambah data.'); 
            document.location = 'lapker_unit_lppm.php'; 
          </script>";
          }
          else{
            echo "<script type='text/javascript'>
            alert('Gagal Insert data.'); 
            document.location = 'lapker_unit_lppm.php'; 
          </script>";
          }
      }
      else{
        echo "<script type='text/javascript'>
        alert('File Terlalu Besar'); 
        document.location = 'lapker_unit_lppm.php'; 
      </script>";
      }
  }
  else{
    echo "<script type='text/javascript'>
    alert('Berhasil'); 
    document.location = 'lapker_unit_lppm.php'; 
  </script>";
  }
}

if (isset($_POST['ubah'])) {
  // $id = isset($_GET['id']) ? $_GET['id'] : null;
  $id = $_POST['id'];
  $judul = $_POST['judul'];
  $tahun_lap = $_POST['tahun_lap'];
  $id_unit = $_POST['unit'];

  $gambar = $_FILES['dok']['name'];
  if ($gambar != "") {
    $ekstensi_diperbolehkan = array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip', 'png', 'jpg', 'mp4', 'avi');
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['dok']['tmp_name'];
    $angka_acak = rand(1,999);

    $namabaru = $angka_acak.'-'.$gambar;

    if (in_array($ekstensi, $ekstensi_diperbolehkan)) {
      move_uploaded_file($file_tmp, '../dok/lapker_unit_lppm/'. $namabaru);

      $query = "UPDATE lapker_unit_lppm SET judul='$judul',tahun_lap='$tahun_lap',id_unit='$id_unit', dok ='$namabaru' WHERE id='$id'";
      $result = mysqli_query($kon, $query); 
      // var_dump($result);
      // die();
      if (!$result) {
        die ("Query gagal dijalankan: ".mysqli_errno($kon).
                             " - ".mysqli_error($kon));
      }else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Data berhasil diubah.');window.location='lapker_unit_lppm.php';</script>";
      }
    } else {     
      //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
         echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='lapker_unit_lppm.php';</script>";
     }
    
  }else {
    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
    $query  = "UPDATE lapker_unit_lppm SET judul='$judul',tahun_lap='$tahun_lap',id_unit='$id_unit' WHERE id='$id'";
    // $query .= "WHERE id = '$id'";
    $result = mysqli_query($kon, $query);
    // periska query apakah ada error
    if(!$result){
          die ("Query gagal dijalankan: ".mysqli_errno($kon).
                           " - ".mysqli_error($kon));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Data berhasil diubah.');window.location='lapker_unit_lppm.php';</script>";
    }
  }
} 


if(isset($_POST['delete']))
{
  $id = isset($_GET['id']) ? $_GET['id'] : null;
  $id = $_POST['id'];
	//delete
	$sql = "DELETE FROM lapker_unit_lppm WHERE id = '$id'";
	if(mysqli_query($kon, $sql))
	{
		echo "<script type='text/javascript'>
			alert('Berhasil Hapus data.'); 
			document.location = 'lapker_unit_lppm.php'; 
		</script>";
	} 
	else
	{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($kon);
	}

}




?>
