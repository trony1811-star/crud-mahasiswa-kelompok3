<?php

$koneksi = mysqli_connect("localhost", "root", "", "belajar_php");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}


?>
