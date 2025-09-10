<?php
session_start();
include_once ("koneksi.php");

if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = md5($_POST["pass"]);

    $result = mysqli_query($konn, "select * from admin where username='$username' and pass='$password'");
    $cek = mysqli_num_rows($result);
    if($cek > 0) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
    } else {
        echo "login gagal";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
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
                <td>Submit</td>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>