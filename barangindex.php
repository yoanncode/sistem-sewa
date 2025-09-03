<?php
include ('koneksi.php');
$select = mysqli_query($konn, "select * from barang inner join jenis_barang on barang.jenis_barangId = jenis_barang.jenis_barangId order by nama_barang asc");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="#">add data</a>
    <table border="1">
        <tr>
            <th>nama barang</th>
            <th>jenis barang</th>
            <th>jumlah</th>
            <th>satuan</th>
            <th>harga</th> 
            <th>admin</th> 
        </tr>
        <?php
        while ($data = mysqli_fetch_array($select)) {
            echo "<tr>
            <td>$data[nama_barang]</td>
            <td>$data[jenis_barang]</td>
            <td>$data[jumlah]</td>
            <td>$data[satuan]</td>
            <td>$data[harga]</td>
            <td>$data[adminId]</td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>