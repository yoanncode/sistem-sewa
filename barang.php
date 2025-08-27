<?php
include ('koneksi.php');
$select = mysqli_query($konn, "select * from jenis_barang order by jenis_barang asc");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="add_jenis.php">add data</a>
    <table border="1">
        <tr>
            <th>jenis barang</th>
            <th>keterangan</th>
        </tr>
        <?php
        while ($data = mysqli_fetch_array($select)) {
            echo "<tr>
            <td>$data[jenis_barang]</td>
            <td>$data[keterangan]</td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>