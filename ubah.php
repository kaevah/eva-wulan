<?php
require 'functions.php';


//ambil data UURL

$id  = $_GET["id"];


//query da5ta  mahasiswa
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

//cek 
if (isset($_POST["submit"])) {
//apakah data ubah atau tidak
if( ubah($_POST) > 0 ){
    echo "
    <script>
    alert('data berhasil diubah');
    document.location.href = 'index.php';
    </script>
    ";
}else {
    echo "
    <script>
    alert('data gagal diubah');
    document.location.href = 'index.php';
    </script>
    ";

}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Siswa</title>
</head>
<body>
    <h1>Ubah Data Siswa</h1>

<form action="" method="post"> 
    <input type="hidden" name="id" value="<?= $mhs["id"];?>">
    <ul>
        <li>
            <label for="nrp">NRP : </label>
            <input type="text" name="nrp" id="nrp" required
            value="<?= $mhs["nrp"];?>">
        </li>
        <li>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama"required
            value="<?= $mhs["nama"];?>">
        </li>
        <li>
            <label for="email">Email : </label>
            <input type="text" name="email" id="email"required
            value="<?= $mhs["email"];?>">
        </li>
        <li>
            <label for="jurusan">Jurusan : </label>
            <input type="text" name="jurusan" id="jurusan"required
            value="<?= $mhs["jurusan"];?>">
        </li>
        <li>
            <label for="gambar">Gambar : </label>
            <input type="text" name="gambar" id="gambar"required
            value="<?= $mhs["gambar"];?>">
        </li>
        <li>
            <button typr="submit" name="submit">Ubah</button>
        </li>
    </ul>
   
</form>




</body>
</html>