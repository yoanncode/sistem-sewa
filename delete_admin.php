<?php
include_once('koneksi.php');
$id = $_GET['id'];
$query = mysqli_query($konn, "delete from barang where adminId='$id'");
$query = mysqli_query($konn, "delete from admin where adminId='$id'");
echo "user delete success. <a href='index.php'>view</a>";
?>