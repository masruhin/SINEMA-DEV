<?php
session_start();
if(empty($_SESSION['username'])){
  echo "<script>alert('Silahkan Login Terlebih Dahulu');window.location='index.php'</script>";
}
error_reporting();
include "config.php";

if (isset($_POST['tambah'])) {

$username=$_POST['username'];
$fname=$_POST['fullname'];
$pass = $_POST['pass'];
$status = $_POST['status'];

  $sqlcek = "SELECT username, nama_user, password FROM users WHERE username='$username'";
	$querycek = mysqli_query($kon,$sqlcek);
		if(mysqli_num_rows($querycek)>0){
		// echo "<script>alert('Email sudah terdaftar, silahkan gunakan email lain!');</script>";
			echo "<script type='text/javascript'> document.location = user.php'; </script>";
		// var_dump($querycek); die();			
		}else{
			$password= $_POST['pass'];
			$sql1="INSERT INTO users(username, nama_user, password, status) VALUES('$username','$fname',md5('$password'), '$status')";
			$lastInsertId = mysqli_query($kon, $sql1);
      // var_dump($lastInsertId);
      // die();
				if($lastInsertId){
          echo "<script type='text/javascript'>
			alert('Registrasi berhasil.'); 
			document.location = 'user.php'; 
		</script>";
				}else {
          echo "<script type='text/javascript'>
			alert('Ops, terjadi kesalahan. Silahkan coba lagi.'); 
			document.location = 'user.php'; 
		</script>";
				}
				// var_dump($sqlcek);
				// die();
		}	
}

if (isset($_POST['ubah'])) {
$id = isset($_GET['id_instansi']) ? $_GET['id_instansi'] : null;
$id = $_POST['id_instansi'];
$nama_instansi = $_POST['nama_instansi'];
$situs_instansi = $_POST['situs_instansi'];
//query update
$query = "UPDATE instansi SET nama_instansi='$nama_instansi', situs_instansi='$situs_instansi' WHERE id_instansi='$id' ";
if (mysqli_query($kon,$query)) {
 # credirect ke page unit
 echo "<script type='text/javascript'>
			alert('Berhasil Ubah data.'); 
			document.location = 'instansi.php'; 
		</script>";
}else{
 echo "ERROR, data gagal diupdate". mysqli_error($kon);
}
}
if(isset($_POST['delete']))
{
  $id = isset($_GET['id']) ? $_GET['id'] : null;
  $id = $_POST['id'];
	//delete
	$sql = "DELETE FROM users WHERE id = '$id'";
	if(mysqli_query($kon, $sql))
	{
		echo "<script type='text/javascript'>
			alert('Berhasil Hapus data.'); 
			document.location = 'user.php'; 
		</script>";
	} 
	else
	{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($kon);
	}

}

?>
