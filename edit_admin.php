    <?php
    include_once ("koneksi.php"); 
    if(isset($_POST["submit"])) {
        $adminid = $_POST["adminId"];
        $username = $_POST["username"];
        $password = md5($_POST["pass"]);
        $nama = $_POST["nama_admin"];
        $alamat = $_POST["alamat"];
        $nohp = $_POST["no_hp"];
        $email = $_POST["email"];
    
    $result = mysqli_query($konn, "update admin set username='$username', pass='$password', nama_admin='$nama', alamat='$alamat', no_hp='$nohp', email='$email' where adminId='$adminid'");
    echo "user edit success.";
    header("Location: index.php");
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
$query = mysqli_query($konn, "select * from admin where adminId='$id'");
$data = mysqli_fetch_assoc($query);
?>
<body>
    <a href="index.php">home</a>
    <br>
    <form  method="post">
        <table>
            <tr>
                <td>admin id</td>
                <td><?php echo $data["adminId"] ?><input type="hidden" name="adminId" value="<?php echo $data["adminId"]?>"></td>
            </tr>
            <tr>
                <td>username</td>
                <td><input type="text" name="username" value="<?php echo $data["username"]?>"></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td>nama</td>
                <td><input type="text" name="nama_admin" value="<?php echo $data["nama_admin"]?>"></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><textarea name="alamat"><?php echo $data["alamat"]; ?></textarea></td>
            </tr>
            <tr>
                <td>no. hp</td>
                <td><input type="text" name="no_hp" value="<?php echo $data["no_hp"]?>"></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="text" name="email" value="<?php echo $data["email"]?>"></td>
            </tr>
            <tr>
                <td>Submit</td>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>