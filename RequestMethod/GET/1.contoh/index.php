<?php
$buku = [
    ["id" => 1, "judul" => "Laskar pelangi"],
    ["id" => 2, "judul" => "Atomic Habits"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Daftar Buku</h2>
    <ul>
        <?php foreach($buku as $b) : ?>
            <li>
                <a href="detail.php?id=<?= $b['id'];?>">
                    <?= $b['judul']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>