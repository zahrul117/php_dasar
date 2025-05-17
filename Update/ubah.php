<?php
require 'functions.php';

$id = $_GET['id'];
// query data mahasiswa berdasarkan id

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if (isset($_POST['submit'])) {
    if (ubah($_POST) > 0) {
        // Alert berhasil
        echo '
        <!DOCTYPE html>
        <html>
        <head>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        </head>
        <body>
            <script>
                Swal.fire({
                    icon: "success",
                    title: "Berhasil!",
                    text: "Data berhasil diubah!",
                    confirmButtonText: "OK"
                }).then(() => {
                    window.location.href = "index.php";
                });
            </script>
        </body>
        </html>
        ';
        exit;
    } else {
        // Alert gagal
        echo '
        <!DOCTYPE html>
        <html>
        <head>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        </head>
        <body>
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Gagal!",
                    text: "Data gagal diubah.",
                    confirmButtonText: "Coba Lagi"
                }).then(() => {
                    window.location.href = "index.php";
                });
            </script>
        </body>
        </html>
        ';
        exit;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ubah data mahasiswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs['id']?>">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" value="<?= $mhs['nrp']?>">
            </li>
            <li>
                <label for="nama">NAMA : </label>
                <input type="text" name="nama" id="nama" value="<?= $mhs['nama']?>">
            </li>
            <li>
                <label for="email">EMAIL : </label>
                <input type="email" name="email" id="email" value="<?= $mhs['email']?>">
            </li>
            <li>
                <label for="jurusan">JURUSAN : </label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs['jurusan']?>">
            </li>
            <li>
                <label for="gambar">GAMBAR : </label>
                <input type="text" name="gambar" id="gambar" value="<?= $mhs['gambar']?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>
    </form>
</body>

</html>