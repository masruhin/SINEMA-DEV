<?php 
include 'config.php';

$id_negara = $_GET['id_negara'];

$q = mysqli_query($kon, "SELECT * negara WHERE id_negara='$id_negara'");
$hasil = mysqli_fetch_array($q);

$data = array('negara_kat' => $hasil['negara_kat']);
echo json_encode($data);
?>
