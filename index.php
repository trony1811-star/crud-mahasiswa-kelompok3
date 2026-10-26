<?php

include "koneksi.php";

$query = "SELECT * FROM mahasiswa";

$data = mysqli_query($koneksi, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>

    <h1>Data Mahasiswa</h1>

    <a href="create.php">Tambah Data</a>
    <br><br>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($data)) { ?>

            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['Nama']; ?></td>
                <td><?php echo $row['NIM']; ?></td>
                <td><?php echo $row['Alamat']; ?></td>

                <td> 
                    <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>  |
                    <a href="delete.php?id=<?php echo $row['id']; ?>">Hapus</a>
                </td>
            </tr>

        <?php } ?> 

    </table>

</body>

</html>