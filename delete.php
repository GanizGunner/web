<?php
include('koneksi.php');

$id = $_GET['id_matkul'];

$query = "DELETE FROM matkul WHERE id_matkul='$id'";
$que = mysqli_query($con,$query);
header('location:menu.php');
?>
