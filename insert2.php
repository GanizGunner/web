<?php
include('koneksi.php');

$id = $_POST['id_matkul'];
$nama = $_POST['nama_matkul'];

$query = "INSERT INTO matkul VALUES('$id','$nama')";
$que = mysqli_query($con,$query);
header('location:menu.php');
?>
