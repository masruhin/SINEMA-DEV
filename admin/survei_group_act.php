<?php
session_start();
if(empty($_SESSION['username'])){
  echo "<script>alert('Silahkan Login Terlebih Dahulu');window.location='index.php'</script>";
}
error_reporting();
include "config.php";

if (isset($_POST['tambah'])) {
  $groupName 	= $_POST['grup'];
	$createdDate = date('Y-m-d H:i:s');
	$masuk = mysqli_query($kon, "INSERT INTO tgroup(groupName,CreatedDate) VALUES('$groupName','$createdDate')");
//   var_dump($masuk);
// die();
  if ($masuk) {
    echo "<script>alert('Anda Berhasil Menambah Data');
          document.location='survei_group.php';
        </script>";
  }else{
		echo "<script>alert('Anda Gagal  Menambah Data');
          document.location='survei_group.php';
        </script>";
	}
}

if (isset($_POST['ubah'])) {
$id = isset($_GET['groupId']) ? $_GET['groupId'] : null;
$id = $_POST['groupId'];
$gname = $_POST['groupName'];
//query update
$query = "UPDATE tgroup SET groupName='$gname' WHERE groupId='$id' ";
if (mysqli_query($kon,$query)) {
 # credirect ke page index
 echo "<script type='text/javascript'>
			alert('Berhasil Ubah data.'); 
			document.location = 'survei_group.php'; 
		</script>";
//  header("location:negara_data.php"); 
}else{
 echo "ERROR, data gagal diupdate". mysqli_error($kon);
}
}
//mysql_close($host);
if(isset($_POST['delete']))
{
  $id = isset($_GET['groupId']) ? $_GET['groupId'] : null;
  $id = $_POST['groupId'];
	//delete
	$sql = "DELETE FROM tgroup WHERE groupId = '$id'";
	if(mysqli_query($kon, $sql))
	{
		echo "<script type='text/javascript'>
			alert('Berhasil Hapus data.'); 
			document.location = 'survei_group.php'; 
		</script>";
	} 
	else
	{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($kon);
	}

}

?>
