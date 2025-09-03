<?php

include_once("koneksi.php");

$query = mysqli_query($konn, "select * from admin order by username asc");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="add.php">add data</a> <br>
<table border="1">
<tr>
    <th>Id</th>
    <th>Username</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>No. HP</th>
    <th>Email</th>
    <th>Aksi</th>   
</tr>
<?php
while ($data = mysqli_fetch_array($query)) {
    echo 
    "<tr>
        <td>$data[adminId]</td>
        <td>$data[username]</td>
        <td>$data[nama_admin]</td>
        <td>$data[alamat]</td>
        <td>$data[no_hp]</td>
        <td>$data[email]</td>
        <td><a href='edit_admin.php?id=$data[adminId]'>edit</a>
        <a href='delete_admin.php?id=$data[adminId]'>delete</a>
        </td>
    <tr>";
}
?>

</table>
</body>
</html>