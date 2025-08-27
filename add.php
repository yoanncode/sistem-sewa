<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="barang.php">home</a>
    <br>
    <form  method="post">
        <table>
            <tr>
                <td>username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td>nama</td>
                <td><input type="text" name="nama_admin"></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><input type="textarea" name="alamat"></td>
            </tr>
            <tr>
                <td>no. hp</td>
                <td><input type="text" name="no_hp"></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="text" name="email"></td>
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
        $username = $_POST["username"];
        $password = md5($_POST["pass"]);
        $nama = $_POST["nama_admin"];
        $alamat = $_POST["alamat"];
        $nohp = $_POST["no_hp"];
        $email = $_POST["email"];
    
    $result = mysqli_query($konn, "insert into admin (username, pass, nama_admin, alamat, no_hp, email) values ('$username', '$password', '$nama', '$alamat', '$nohp', '$email')");
    echo "user add success. <a href='index.php'>view</a>";
    }
    ?>
</body>
</html>