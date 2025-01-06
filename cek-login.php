<?php

session_start();

include('includes/config.php');

$username     = $_POST['username'];
$password      = MD5($_POST['password']);

//query
$query  = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result     = mysqli_query($kon, $query);
$num_row     = mysqli_num_rows($result);
$row         = mysqli_fetch_array($result);

if($num_row >=1) {
    
    echo "success";

    $_SESSION['id']       = $row['id'];
    $_SESSION['nama_user'] = $row['nama_user'];
    $_SESSION['username']       = $row['username'];

} else {
    
    echo "error";

}

?>
