<?php 
session_start();
if(empty($_SESSION['username'])){
  echo "<script>alert('Silahkan Login Terlebih Dahulu');window.location='index.php'</script>";
}
error_reporting();
include "config.php";

if (isset($_POST['upload'])) {

  $negara_kat = $_POST['negara_kat'];
  // $pendidikan = $_POST['pendidikan'];
  if (isset($_POST['pendidikan'])) {
    $pendidikan = 1;
  } else {
    $pendidikan = 0;
  }
  // $penelitian = $_POST['penelitian'];
  if (isset($_POST['penelitian'])) {
    $penelitian = 1;
  } else {
    $penelitian = 0;
  }
  // $pkm = $_POST['pkm'];
  if (isset($_POST['pkm'])) {
    $pkm = 1;
  } else {
    $pkm = 0;
  }
  $negara = $_POST['id_negara'];
  $status_kerjasama = $_POST['status_kerjasama'];
  $date = date('Y-m-d');
  $tanggal_awal = $_POST['tanggal_awal'];
  $tanggal_akhir = $_POST['tanggal_akhir'];
  $id_jenis_dok     = $_POST['id_jenis_dok'];
  $id_fak     = $_POST['id_fak'];
  $id_unit     = $_POST['id_unit'];
  $bentuk   = $_POST['id_bkerja'];
  $judul_kerjasama  = $_POST['judul_kerjasama'];
  $deskripsi_kerjasama = $_POST['deskripsi_kerjasama'];
  $no_ref_kerjasama    = $_POST['no_ref_kerjasama'];

  
  $ekstensi_diperbolehkan    = array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip', 'png', 'jpg', 'mp4', 'avi');
  $nama = date("Y-m-d").'_'.basename($_FILES['file']['name']);
  $nama2    = $_FILES['file']['name'];
  $x        = explode('.', $nama);
  $ekstensi    = strtolower(end($x));
  $ukuran        = $_FILES['file']['size'];
  $file_tmp    = $_FILES['file']['tmp_name']; 
  
  if ($nama2 == '') {
    $insert    = mysqli_query($kon, "INSERT INTO kerjasama (negara_kat,pendidikan,penelitian,pkm,id_negara,status_kerjasama,tanggal_awal,tanggal_akhir,id_jenis_dok,id_fak,id_unit,id_bkerja,judul_kerjasama,deskripsi_kerjasama,no_ref_kerjasama) 
    VALUES('$negara_kat','$pendidikan','$penelitian','$pkm','$negara','$status_kerjasama','$tanggal_awal','$tanggal_akhir','$id_jenis_dok','$id_fak','$id_unit','$bentuk','$judul_kerjasama','$deskripsi_kerjasama','$no_ref_kerjasama')");
    // var_dump($insert);
    // die();
    
    if($insert){
      echo "<script type='text/javascript'>
      alert('Berhasil Tambah data.'); 
      document.location = 'kerjasama.php'; 
    </script>";
    }
    else{
      echo "<script type='text/javascript'>
      alert('Gagal Insert data.'); 
      document.location = 'kerjasama.php'; 
    </script>";
    }
  }else {
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 304407000){ 
            move_uploaded_file($file_tmp, '../dok/' . $nama);
            $query    = mysqli_query($kon, "INSERT INTO kerjasama (negara_kat,
                                                                    pendidikan,
                                                                    penelitian,
                                                                    pkm,
                                                                    id_negara,
                                                                    status_kerjasama,
                                                                    tanggal_awal,
                                                                    tanggal_akhir,
                                                                    id_jenis_dok,
                                                                    id_fak,
                                                                    id_unit,
                                                                    id_bkerja,
                                                                    judul_kerjasama,
                                                                    deskripsi_kerjasama,
                                                                    no_ref_kerjasama,
                                                                    file ) 
                                            VALUES('$negara_kat',
                                                    '$pendidikan',
                                                    '$penelitian',
                                                    '$pkm',
                                                    '$negara',
                                                    '$status_kerjasama', 
                                                    '$tanggal_awal',
                                                    '$tanggal_akhir',
                                                    '$id_jenis_dok',
                                                    '$id_fak',
                                                    '$id_unit',
                                                    '$bentuk',
                                                    '$judul_kerjasama',
                                                    '$deskripsi_kerjasama',
                                                    '$no_ref_kerjasama',
                                                    '$nama')");
            // var_dump($query);
            // die();
            if($query){
              echo "<script type='text/javascript'>
              alert('Berhasil Tambah data.'); 
              document.location = 'kerjasama.php'; 
            </script>";
            }
            else{
              echo "<script type='text/javascript'>
              alert('Gagal Insert data.'); 
              document.location = 'kerjasama.php'; 
            </script>";
            }
        }
        else{
          echo "<script type='text/javascript'>
          alert('File Terlalu Besar'); 
          document.location = 'kerjasama.php'; 
        </script>";
        }
    }
    else{
      echo "<script type='text/javascript'>
      alert('Berhasil'); 
      document.location = 'kerjasama.php'; 
    </script>";
    }
  }
}
if (isset($_POST['ubah'])) {
  $id = isset($_GET['id_kerjasama']) ? $_GET['id_kerjasama'] : null;
  $id = $_POST['id_kerjasama'];
  $negara_kat = $_POST['negara_kat'];
  $negara = $_POST['id_negara'];
  $status = $_POST['status_kerjasama'];
  $tawal = $_POST['tanggal_awal'];
  $takhir = $_POST['tanggal_akhir'];
  $fak = $_POST['id_fak'];
  $id_dok = $_POST['id_jenis_dok'];
  $judul = $_POST['judul_kerjasama'];
  $deskripsi = $_POST['deskripsi_kerjasama'];
  $ref = $_POST['no_ref_kerjasama'];
  $unit = $_POST['id_unit'];

  $ekstensi_diperbolehkan    = array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip', 'png', 'jpg', 'mp4', 'avi');
  $nama = date("Y-m-d").'_'.basename($_FILES['file']['name']);
  $x        = explode('.', $nama);
  $ekstensi    = strtolower(end($x));
  $ukuran        = $_FILES['file']['size'];
  $file_tmp    = $_FILES['file']['tmp_name']; 
  
  $query = "UPDATE instansi SET instansi_nama='$instansi_nama', situs_nama='$situs_nama' WHERE id_instansi='$id' ";
    if (mysqli_query($kon,$query)) {
    # credirect ke page unit
    echo "<script type='text/javascript'>
          alert('Berhasil Ubah data.'); 
          document.location = 'kerjasama.php'; 
        </script>";
    }else{
    echo "ERROR, data gagal diupdate". mysqli_error($kon);
    }
}
if(isset($_POST['delete']))
{
  $id = isset($_GET['id_kerjasama']) ? $_GET['id_kerjasama'] : null;
  $id = $_POST['id_kerjasama'];
	//delete
	$sql = "DELETE FROM kerjasama WHERE id_kerjasama = '$id'";
	if(mysqli_query($kon, $sql))
	{
		echo "<script type='text/javascript'>
			alert('Berhasil Hapus data.'); 
			document.location = 'kerjasama.php'; 
		</script>";
	} 
	else
	{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($kon);
	}

}
