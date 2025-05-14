<?php
$hasil = [];

if (isset($_POST["submit"])) {
    $hasil["nrp"] = $_POST["nrp"];
    $hasil["nama"] = $_POST["nama"];
    $hasil["email"] = $_POST["email"];
    $hasil["jurusan"] = $_POST["jurusan"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Mahasiswa</title>
</head>
<body>
    <h1>Form Pendaftaran Mahasiswa</h1>

    <form action="" method="POST">
        <label for="nrp">NRP:</label><br>
        <input type="text" name="nrp" id="nrp" required><br><br>

        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" required><br><br>

        <label for="jurusan">Jurusan:</label><br>
        <input type="text" name="jurusan" id="jurusan" required><br><br>

        <button type="submit" name="submit">Kirim</button>
    </form>

    <?php if (!empty($hasil)) : ?>
        <h2>Data yang Diterima:</h2>
        <ul>
            <li><strong>NRP:</strong> <?= htmlspecialchars($hasil["nrp"]); ?></li>
            <li><strong>Nama:</strong> <?= htmlspecialchars($hasil["nama"]); ?></li>
            <li><strong>Email:</strong> <?= htmlspecialchars($hasil["email"]); ?></li>
            <li><strong>Jurusan:</strong> <?= htmlspecialchars($hasil["jurusan"]); ?></li>
        </ul>
    <?php endif; ?>
</body>
</html>
