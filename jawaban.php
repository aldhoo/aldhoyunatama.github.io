<?php
require 'function.php';
$pertanyaan = query1("SELECT * FROM pertanyaan ORDER BY id DESC LIMIT 1");

if(isset($_POST["submit"])){
  if (tambah($_POST) > 0 ){
      echo "<script>
      alert('Jawaban Berhasil Dikumpulkan!');
      document.location.href = 'respon.php';
  </script>";
  } else {
      echo"Jawaban Gagal Dikumpulkan!";
      echo"<br>";
      echo mysqli_error($conn);
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <!-- Navbar -->
  <div style="background-color:white">
    <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
  <img src="https://img.icons8.com/ios/500/google-forms-new-logo-1.png" alt="" height=30>
    <a class="navbar-brand" href="#"  style="font-size:20pt; color:#dc2020;">Formulir</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
        <a class="nav-link " style="color:#dc2020"  href="index.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
  </div>
  <div  style="background-color: white; text-align:center; height:40pt" height="20pt">
  <?php foreach ( $pertanyaan as $row): ?>
  <a href="ubahtanya.php?id=<?=$row["id"];?>"><button type="button" class="btn btn-outline-danger ">Pertanyaan</button></a><button type="button" class="btn btn-outline-danger active">Jawaban</button><a href="#" onclick="return confirm('Mohon Jawab Pertanyaan');"><button type="button" class="btn btn-outline-danger">Respon</button></a> 
  </div>
</nav>
<!-- End Navbar -->
<h1 style="color:white">Jawaban</h1> <br> <br>
<form action="" method="post" class="container">
<div>

<label  class="form-label h4" style="color:white" for="resp1"><?=$row["pert1"];?></label>
<input class="form-control" id="resp1" name="resp1" style="width:100%" type="text" placeholder="Masukan Jawaban" autocomplete="off">

<label  class="form-label h4" style="color:white" for="resp2"><?=$row["pert2"];?></label> 
<input class="form-control" id="resp2" name="resp2" style="width:100%;" type="text" placeholder="Masukan Jawaban" autocomplete="off">

<label  class="form-label h4" style="color:white" for="resp3"><?=$row["pert3"];?></label>
<input class="form-control" id="resp3" name="resp3" style="width:100%" type="text" placeholder="Masukan Jawaban" autocomplete="off">

<label  class="form-label h4" style="color:white" for="resp4"><?=$row["pert4"];?></label>
<input class="form-control" id="resp4" name="resp4" style="width:100%" type="text" placeholder="Masukan Jawaban" autocomplete="off">

<label  class="form-label h4" style="color:white" for="resp5"><?=$row["pert5"];?></label>
<input class="form-control" id="resp5" name="resp5" style="width:100%" type="text" placeholder="Masukan Jawaban" autocomplete="off">
<?php endforeach;?>
<br>
<button class="btn btn-light container" type="submit" name="submit">Jawab</button>
</form>
<br><br><br><br><br><br>
</body>
</html>
