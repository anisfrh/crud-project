<?php

include 'koneksi.php';

$nim = $_GET['nim'];

mysqli_query($koneksi, "DELETE FROM mahasiswa where nim='$nim'");

header("location: index.php");
?>