<?php
// koneksi ke database
$konek = mysqli_connect('localhost', 'root', '', 'phpdasarlagi');

// ambil data dari tabel mahasiswa/query data mahasiswa
$data = mysqli_query($konek, 'SELECT * FROM mahasiswa');

// ambil data dari object result
// mysqli_fetch_row() -> numerik
// mysqli_fetch_assoc() -> asosiative
// mysqli_fetch_array()
// mysqli_fetch_object()

// while($mhs = mysqli_fetch_assoc($data)){
// var_dump($mhs["nama"]);
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Mahasiswa </h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1 ?>
        <?php while ($mhs = mysqli_fetch_assoc($data)): ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
                <td><img src="img/<?= $mhs['gambar']; ?>" alt="" width="75"></td>
                <td><?= $mhs['nrp'] ?></td>
                <td><?= $mhs['nama'] ?></td>
                <td><?= $mhs['email'] ?></td>
                <td><?= $mhs['jurusan'] ?></td>
            </tr>
            <?php $i++ ?>
        <?php endwhile; ?>
    </table>
</body>

</html>