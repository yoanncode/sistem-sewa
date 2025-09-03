    <?php
    include_once ("koneksi.php"); 
    if(isset($_POST["submit"])) {
        $jenis = $_POST["jenis_barang"];
        $ket = $_POST["keterangan"];
    
    $result = mysqli_query($konn, "update jenis_barang set jenis_barang='$jenis', keterangan='$ket' where jenis_barangId='$id'");
    echo "user add success. <a href='barang.php'>view</a>";
    header("Location: barang.php");
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$id = $_GET['id'];
$query = mysqli_query($konn, "select * from jenis_barang where jenis_barangId='$id'");  
$data = mysqli_fetch_assoc($query);
?>
<body>
    <a href="barang.php">home</a>
    <br>
    <form  method="post">
        <table>
            <tr>
                <td>barang id</td>
                <td><?php echo $data["jenis_barangId"] ?><input type="hidden" name="jenis_barangId" value="<?php echo $data["jenis_barangId"]?>"></td>
            </tr>
            <tr>
                <td>jenis barang</td>
                <td><input type="text" name="jenis_barang" value="<?php echo $data["jenis_barang"]?>"></td>
            </tr>
            <tr>
                <td>keterangan</td>
                <td><input type="text" name="keterangan" value="<?php echo $data["keterangan"]?>"></td>
            </tr>
            <tr>
                <td>Submit</td>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>