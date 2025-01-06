<?php
session_start();
if(empty($_SESSION['username'])){
  echo "<script>alert('Silahkan Login Terlebih Dahulu');window.location='index.php'</script>";
}
error_reporting();
include "config.php";

if (isset($_POST['tambah'])) {
  $groupId 	= $_POST['groupId'];
	$deskripsi	= $_POST['deskripsi']; 
	$createdDate= date('Y-m-d H:i:s');
	$masuk = mysqli_query($kon, "INSERT INTO tdescription(groupId,description,CreatedDate) VALUES('$groupId','$deskripsi','$createdDate')");
//   var_dump($masuk);
// die();
  if ($masuk) {
    echo "<script>alert('Anda Berhasil Menambah Data');
          document.location='survei_deskripsi.php';
        </script>";
  }else{
		echo "<script>alert('Anda Gagal  Menambah Data');
          document.location='survei_deskripsi.php';
        </script>";
	}
}

if (isset($_POST['ubah'])) {
$id = isset($_GET['descriptionId']) ? $_GET['descriptionId'] : null;
$modifiedDate = date('Y-m-d H:i:s');
$description=$_POST['description'];
$groupId=$_POST['groupId'];
// $ModifiedUser=$_SESSION['userId'];
$descriptionId=$_POST['descriptionId'];
//query update
$query = "UPDATE tdescription SET description='$description', groupId='$groupId',ModifiedDate = '$modifiedDate' WHERE descriptionId = '$descriptionId'";
if (mysqli_query($kon,$query)) {
 # credirect ke page index
 echo "<script type='text/javascript'>
			alert('Berhasil Ubah data.'); 
			document.location = 'survei_deskripsi.php'; 
		</script>";
//  header("location:negara_data.php"); 
}else{
 echo "ERROR, data gagal diupdate". mysqli_error($kon);
}
}
//mysql_close($host);
if(isset($_POST['delete']))
{
  $id = isset($_GET['descriptionId']) ? $_GET['descriptionId'] : null;
  $id = $_POST['descriptionId'];
	//delete
	$sql = "DELETE FROM tdescription WHERE descriptionId = '$id'";
	if(mysqli_query($kon, $sql))
	{
		echo "<script type='text/javascript'>
			alert('Berhasil Hapus data.'); 
			document.location = 'survei_deskripsi.php'; 
		</script>";
	} 
	else
	{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($kon);
	}

}

?>
