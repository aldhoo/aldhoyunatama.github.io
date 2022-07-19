<?php
require 'function.php';
$pertanyaan = query1("SELECT * FROM pertanyaan ORDER BY id DESC LIMIT 1");
$respon = query("SELECT * FROM respon");
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
  <button type="button" class="btn btn-outline-danger">Pertanyaan</button><a href="pertanyaan.php"><button type="button" class="btn btn-outline-danger">Jawaban</button></a><a href="#"><button type="button" class="btn btn-outline-danger active">Respon</button></a> 
  </div>
</nav>
<!-- End Navbar -->
<h1>Tabel Respon</h1>
<br>
<div class="container">
<table class="table table-striped" style="background-color:white">
<?php foreach ( $pertanyaan as $row): ?>
    <tr>
        <th><?=$row["pert1"];?></th>
        <th><?=$row["pert2"];?></th>
        <th><?=$row["pert3"];?></th>
        <th><?=$row["pert4"];?></th>
        <th><?=$row["pert5"];?></th>
        <th>Aksi</th>
    </tr>
<?php endforeach;?>
<?php foreach ( $respon as $row): ?>
    <tr>
        <td><?=$row["resp1"];?></td>
        <td><?=$row["resp2"];?></td>
        <td><?=$row["resp3"];?></td>
        <td><?=$row["resp4"];?></td>
        <td><?=$row["resp5"];?></td>
        <td> <a href="hapus.php?id=<?=$row["id"];?>" onclick="return confirm('Anda Yakin?');"><button type="button" class="btn btn-danger">Hapus</button></a></td>
    </tr>
        <?php endforeach;?>
</table>
<br><br><br><br><br><br><br><br><br><br><br>
</div>
</body>
</html>