<?php
include_once('koneksi.php');
$id = $_GET['id'];
$query = mysqli_query($konn, "delete from jenis_barang where jenis_barangId='$id'");
$query = mysqli_query($konn, "delete from admin where adminId='$id'");
echo "user delete success. <a href='barang.php'>view</a>";
?>