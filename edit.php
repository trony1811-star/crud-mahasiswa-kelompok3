<?php

include "koneksi.php";

$id = $_GET['id'];

$query = "SELECT * FROM mahasiswa WHERE id = '$id'";

$data = mysqli_query($koneksi, $query);

$row = mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>

    <h1>Edit Data Mahasiswa</h1>

    <form action="proses/edit_proses.php" method="POST">

        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <div>
            <label>Nama</label><br>
            <input type="text" name="Nama" value="<?php echo $row['Nama']; ?>">
        </div>

        <br>

        <div>
            <label>NIM</label><br>
            <input type="text" name="NIM" value="<?php echo $row['NIM']; ?>">
        </div>

        <br>

        <div>
            <label>Alamat</label><br>
            <input type="text" name="Alamat" value="<?php echo $row['Alamat']; ?>">
        </div>

        <br>

        <button type="submit">Simpan Perubahan</button>

    </form>

    <br>

    <a href="index.php">Kembali</a>

</body>
</html>
