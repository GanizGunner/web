<?php
include('koneksi.php');

$id = $_POST['id_matkul'];
$nama = $_POST['nama_matkul'];

$query = "UPDATE matkul SET nama_matkul='$nama'WHERE id_matkul='$id'";
$que = mysqli_query($con,$query);
header('location:menu.php');
?>
