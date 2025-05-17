<?php
require 'functions.php';

if (isset($_POST['submit'])) {
    if (tambah($_POST) > 0) {
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
                    text: "Data berhasil ditambahkan!",
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
                    text: "Data gagal ditambahkan.",
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
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp">
            </li>
            <li>
                <label for="nama">NAMA : </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email">EMAIL : </label>
                <input type="email" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">JURUSAN : </label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">GAMBAR : </label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">KIRIM!</button>
            </li>
        </ul>
    </form>
</body>

</html>