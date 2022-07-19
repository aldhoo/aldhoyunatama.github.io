<?php
require 'function.php';
if(isset($_POST["register"]))
{
    if(registrasi($_POST) > 0)
    {
        echo"<script>
            alert('user berhasil ditambahkan');
            </script>";
            header("Location: login.php");
			exit;
    } else
    {
        echo mysqli_error($conn);
    }

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Admin</title>
    <!-- Menghubungkan ke Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Menghubungkan ke css-->
    <link rel="stylesheet" href="login.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"> 
</head>
<body class="text-center">
<form action="" method="post">
<div class="kotak_login">
<div class="judul">Registrasi</div>
<img src="https://img.icons8.com/ios/500/google-forms-new-logo-1.png" alt="" height=80>
    <div>
        <label for="username">Username :</label>
        <input type="text" class="form-control" name="username" id="username" autocomplete="off">
    </div>
    <div>
        <label for="password">Password :</label>
        <input type="password" class="form-control" name="password" id="password" autocomplete="off">
    </div>
    <div>
        <label for="password2">Konfirmasi Password :</label>
        <input type="password" class="form-control" name="password2" id="password2" autocomplete="off">
    </div>
    <br>
    <div>
        <button class="tombol_daftar" type="submit" name="register">Daftar</button>
    </div>
</div>
</form>
</body>
</html>