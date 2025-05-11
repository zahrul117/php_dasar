<?php
$buku = [
    [
        "judul" => "Laskar Pelangi",
        "pengarang" => "Andrea Hirata",
        "penerbit" => "Bentang Pustaka",
        "tahun" => 2005,
        "genre" => "Fiksi",
        "gambar" => "laskar-pelangi.jpg"
    ],
    [
        "judul" => "Atomic Habits",
        "pengarang" => "James Clear",
        "penerbit" => "Penguin Random House",
        "tahun" => 2018,
        "genre" => "Self Improvement",
        "gambar" => "atomic-habits.jpeg"
    ],
    [
        "judul" => "Sapiens",
        "pengarang" => "Yuval Noah Harari",
        "penerbit" => "Harvill Secker",
        "tahun" => 2011,
        "genre" => "Sejarah",
        "gambar" => "sapiens.jpeg"
    ],
    [
        "judul" => "Negeri 5 Menara",
        "pengarang" => "Ahmad Fuadi",
        "penerbit" => "Gramedia Pustaka Utama",
        "tahun" => 2009,
        "genre" => "Inspiratif",
        "gambar" => "negeri-5negara.jpeg"
    ],
    [
        "judul" => "The Psychology of Money",
        "pengarang" => "Morgan Housel",
        "penerbit" => "Harriman House",
        "tahun" => 2020,
        "genre" => "Finansial",
        "gambar" => "The-Psychology-of-Money.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>

<body>
    <h1>Daftar Buku</h1>
    <ul>
        <?php foreach ($buku as $b) : ?>

            <li>
                <a href="halaman2.php?judul=<?= $b['judul']; ?>&pengarang=<?= $b['pengarang']; ?>&penerbit=<?= $b['penerbit']; ?>&tahun=<?= $b['tahun']; ?>&genre=<?= $b['genre']; ?>&gambar=<?= $b['gambar']; ?>"><?= $b['judul']; ?></a>
            </li>

        <?php endforeach; ?>
    </ul>
</body>

</html>