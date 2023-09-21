<?php
    include 'koneksi.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <title>CRUD</title>
</head>
<body>
    <div class="w-50 mx-auto border p-3 mt-5">
        <a href="index.php">Kembali ke Home</a>

        <form action="add.php" method="post">
            <label for="nim">NIM</label>
            <input type="text" id="nim" name="nim" class="form-control" required>

            <label for="nama">Nama Mahasiswa</label>
            <input type="text" id="nama" name="nama" class="form-control" required>

            <label for="jurusan">Jurusan</label>
            <select name="jurusan" id="jurusan" class="form-select" required>
                <option>Pilih Jurusan</option>
                <option value="Informatika">Informatika</option>
                <option value="DKV">DKV</option>
                <option value="Engineer">Engineer</option>
            </select>

            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" name="alamat" class="form-control" required>

            <label for="notelp">No Telp</label>
            <input type="text" id="notelp" name="notelp" class="form-control" required>

            <input class="btn btn-success mt-3" type="submit" name="tambah" value="Tambah Data">

        </form>
    </div>

    <?php

        if(isset($_POST['tambah'])) {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $jurusan = $_POST['jurusan'];
            $alamat = $_POST['alamat'];
            $notelp = $_POST['notelp'];

            mysqli_query($koneksi, "INSERT INTO mahasiswa values ('$nim', '$nama', '$jurusan', '$alamat', '$notelp')");

            header("location: index.php");
        }
    ?>
</body>
</html>