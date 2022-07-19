<?php
$conn = mysqli_connect("localhost","root","","pjform");

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}
//pertanyaan
function query1($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}
function tambah1($data){
    global $conn;
    $pert1 = htmlspecialchars($data["pert1"]);
    $pert2 = htmlspecialchars($data["pert2"]);
    $pert3 = htmlspecialchars($data["pert3"]);
    $pert4 = htmlspecialchars($data["pert4"]);
    $pert5 = htmlspecialchars($data["pert5"]);

    $query = "INSERT INTO pertanyaan VALUES ('','$pert1','$pert2','$pert3','$pert4','$pert5')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
// akhir pertanyaan
function tambah($data){
    global $conn;
    $resp1 = htmlspecialchars($data["resp1"]);
    $resp2 = htmlspecialchars($data["resp2"]);
    $resp3 = htmlspecialchars($data["resp3"]);
    $resp4 = htmlspecialchars($data["resp4"]);
    $resp5 = htmlspecialchars($data["resp5"]);

    $query = "INSERT INTO respon VALUES ('','$resp1','$resp2','$resp3','$resp4','$resp5')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM respon WHERE id= $id");
    return mysqli_affected_rows($conn);
}
function Ubahtanya($data){
    global $conn;
    $id = $data["id"];
    $pert1 = htmlspecialchars($data["pert1"]);
    $pert2 = htmlspecialchars($data["pert2"]);
    $pert3 = htmlspecialchars($data["pert3"]);
    $pert4 = htmlspecialchars($data["pert4"]);
    $pert5 = htmlspecialchars($data["pert5"]);

    $query = "UPDATE pertanyaan SET 
                pert1 = '$pert1',
                pert2 = '$pert2',
                pert3 = '$pert3',
                pert4 = '$pert4',
                pert5 = '$pert5'
              WHERE id = $id";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function Ubah($data){
    global $conn;
    $id = $data["id"];
    $nomor = htmlspecialchars($data["nomor"]);
    $nama = htmlspecialchars($data["nama"]);
    $opsel = htmlspecialchars($data["opsel"]);
    $nompul = htmlspecialchars($data["nompul"]);
    $metpem = htmlspecialchars($data["metpem"]);

    $query = "UPDATE pulsa SET 
                nomor = '$nomor',
                nama = '$nama',
                opsel = '$opsel',
                nompul = '$nompul',
                metpem = '$metpem'
              WHERE id = $id";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $password2 = mysqli_real_escape_string($conn,$data["password2"]);

    //cek
    $result = mysqli_query($conn,"SELECT username FROM users WHERE username = '$username'");

    if(mysqli_fetch_assoc($result))
    {
        echo "<script>
            alert('username sudah terdaftar');
            </script>";
        return false;
    }

    //konfirmasi password
    if($password !== $password2)
    {
        echo"<script>
        alert('konfirmasi password tidak sesuai');
        </script>";
    return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //menambahkan data
    mysqli_query($conn,"INSERT INTO users VALUE('','$username','$password')");
    return mysqli_affected_rows($conn);
}
?>