<?php
$konek = mysqli_connect('localhost', 'root', '', 'phpdasarlagi');


// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['submit'])) {
    // ambil data dari tiap elemen dalam form
    $nrp = $_POST['nrp'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $gambar =  $_POST['gambar'];

    $query = "INSERT INTO mahasiswa
                Values
                ('','$nrp','$nama','$email','$jurusan','$gambar')
                ";

    mysqli_query($konek, $query);

    // cek apakah data berhasil di tambahkan/tidak
    if (mysqli_affected_rows($konek) > 0) {
        echo "data berhasil di tambahkan";
    } else {
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