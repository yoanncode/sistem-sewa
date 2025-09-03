<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">home</a>
    <br>
    <form  method="post">
        <table>
            <tr>
                <td>jenis barang</td>
                <td><input type="text" name="jenis_barang"></td>
            </tr>
            <tr>
                <td>keterangan</td>
                <td><input type="text" name="keterangan"></td>
            </tr>
            <tr>
                <td>Submit</td>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
    <?php
    include_once ("koneksi.php"); 
    if(isset($_POST["submit"])) {
        $jenis = $_POST["jenis_barang"];
        $ket = $_POST["keterangan"];
    
    $result = mysqli_query($konn, "insert into jenis_barang (jenis_barang, keterangan) values ('$jenis', '$ket')");
    echo "user add success. <a href='barang.php'>view</a>";
    }
    ?>
</body>
</html>