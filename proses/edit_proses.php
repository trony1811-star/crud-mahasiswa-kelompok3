<?php

include "../koneksi.php";

$id = $_POST['id'];
$nama = $_POST['Nama'];
$nim = $_POST['NIM'];
$alamat = $_POST['Alamat'];

$query = "UPDATE mahasiswa SET
          Nama = '$nama',
          NIM = '$nim',
          Alamat = '$alamat'
          WHERE id = '$id'";

mysqli_query($koneksi, $query);

header("Location: ../index.php");

?>