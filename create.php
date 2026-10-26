<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="proses/create_proses.php" method="POST">

    <div>
        <label>Nama</label><br>
        <input type="text" name="Nama">
    </div>
    <br>
    <div>
        <label>NIM</label><br>
        <input type="text" name="NIM">
    </div>
    <br>
    <div>
        <label>Alamat</label><br>
        <input type="text" name="Alamat">
    </div>
    <br>
    <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="index.php">Kembali</a>
</body>
</html>