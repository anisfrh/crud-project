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
    <div class="container mt-5">
        <a href="add.php" class="btn btn-primary btn-md mb-3">Tambah Data</a>

        <table class="table table-striped table-hover table-bordered mt-5">
            <thead>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th>No Telp</th>
                <th>Aksi</th>
            </thead>

            <?php
                $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                while($kampus = mysqli_fetch_array($data)) {
                    ?>

                    <tr>
                        <td><?php print $kampus['nim']; ?></td>
                        <td><?php print $kampus['nama']; ?></td>
                        <td><?php print $kampus['jurusan']; ?></td>
                        <td><?php print $kampus['alamat']; ?></td>
                        <td><?php print $kampus['notelp']; ?></td>
                        <td>
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                    <a href="update.php?nim=<?php print $kampus['nim']; ?>" class="btn btn-warning btn-sm">Update</a>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <a href="delete.php?nim=<?php print $kampus['nim']; ?>" onclick="return confirm('Yakin mau hapus data ini ?')" class="btn btn-danger btn-sm">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>


                    <?php
                }

            ?>
        </table>
    </div>
</body>
</html>