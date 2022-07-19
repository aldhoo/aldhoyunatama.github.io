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
          <a class="nav-link " style="color:#dc2020"  href="login.php">Login</a>
        </li>
      </ul>
    </div>
  </div>
  </div>
  <div  style="background-color: white; text-align:center; height:40pt" height="20pt">
  <button type="button" class="btn btn-outline-danger active">Pertanyaan</button><a href="#" onclick="return confirm('Anda Harus Login Dahulu');"><button type="button" class="btn btn-outline-danger">Jawaban</button></a><a href="#" onclick="return confirm('Anda Harus Login Dahulu');"><button type="button" class="btn btn-outline-danger">Respon</button></a>
  </div>
</nav>
<!-- End Navbar -->
<h1 style="color:white">Pertanyaan</h1> <br> <br>
<form action="" method="post" class="container">
<div>
<label  class="form-label h4" style="color:white" for="pert1">Pertanyaan Pertama</label>
<input class="form-control" id="pert1" name="pert1" style="width:100%" type="text" placeholder="Masukan Pertanyaan Pertama" disabled>

<label  class="form-label h4" style="color:white" for="pert2">Pertanyaan Kedua</label> 
<input class="form-control" id="pert2" name="pert2" style="width:100%;" type="text" placeholder="Masukan Pertanyaan Kedua" disabled>

<label  class="form-label h4" style="color:white" for="pert3">Pertanyaan Ketiga</label>
<input class="form-control" id="pert3" name="pert3" style="width:100%" type="text" placeholder="Masukan Pertanyaan Ketiga" disabled>

<label  class="form-label h4" style="color:white" for="pert4">Pertanyaan Keempat</label>
<input class="form-control" id="pert4" name="pert4" style="width:100%" type="text" placeholder="Masukan Pertanyaan Keempat" disabled>

<label  class="form-label h4" style="color:white" for="pert5">Pertanyaan Kelima</label>
<input class="form-control" id="pert5" name="pert5" style="width:100%" type="text" placeholder="Masukan Pertanyaan Kelima" disabled>

<br>
<button class="btn btn-light container" onclick="return confirm('Anda Harus Login Dahulu');" type="submit" name="submit">Buat Pertanyaan</button>
<br><br><br><br><br><br>
</div>
</form>

</body>
</html>