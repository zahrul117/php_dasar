<?php
if (
    !isset($_GET['judul']) ||
    !isset($_GET['pengarang']) ||
    !isset($_GET['penerbit']) ||
    !isset($_GET['tahun']) ||
    !isset($_GET['genre']) ||
    !isset($_GET['gambar'])
) {
    header('Location: halaman1.php');
    exit;
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
    <ul>
        <li>Judul : <?= $_GET["judul"]; ?></li>
        <li>Pengarang : <?= $_GET['pengarang']; ?></li>
        <li>Penerbit : <?= $_GET['penerbit']; ?></li>
        <li>Tahun : <?= $_GET['tahun']; ?></li>
        <li>Genre : <?= $_GET['genre']; ?></li>
        <li><img src="img/<?= $_GET['gambar']; ?>" alt="" width="100px"></li>
    </ul>
</body>

</html>