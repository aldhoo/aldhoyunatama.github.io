<?php 
require 'function.php';

if( isset($_POST["login"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

	// cek username
	if( mysqli_num_rows($result) === 1 ) {

		// cek password
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {

			header("Location: pertanyaan.php");
			exit;
		}
	}

	$error = true;

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
    <!-- Menghubungkan ke Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Menghubungkan ke css-->
    <link rel="stylesheet" href="login.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"> 
<body class="text-center">
<?php if( isset($error) ) {
 echo"<script>
 alert('username/password tidak sesuai');
 </script>";
}
 ?>
<div class="kotak_login">
    <div class="judul">Masuk</div>
    <img src="https://img.icons8.com/ios/500/google-forms-new-logo-1.png" alt="" height=80>
<form action ="" method="post">
    <div>
        <label for="username" class="form-label">Username :</label>
        <input type="text" class="form-control" name="username" id="username" placeholder="masukan username" autocomplete="off">
    </div>
    <div>
        <label for="password">Password :</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="masukan password" autocomplete="off">
    </div>
    <br>
    <button class="tombol_login"type="submit" name="login">Login</button>
    <div>Belum punya akun?<a href="registrasi.php">Daftar Disini!</a></div>
</div>
  </form>
  </main>
</body>
</html>