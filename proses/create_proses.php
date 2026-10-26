<?php

include "../koneksi.php";

$nama = $_POST['Nama'];
$nim = $_POST['NIM'];
$alamat = $_POST['Alamat'];

$query = "INSERT INTO mahasiswa (Nama, NIM, Alamat)
          VALUES ('$nama', '$nim', '$alamat')";

mysqli_query($koneksi, $query);

header("Location: ../index.php");

?>