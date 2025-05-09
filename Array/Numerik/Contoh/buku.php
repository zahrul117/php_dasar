<?php
$buku = [
    ["Laskar Pelangi", "Andrea Hirata", 2005, "Fiksi"],
    ["Atomic Habits", "James Clear", 2018, "Self Improvement"],
    ["Sapiens", "Yuval Noah Harari", 2011, "Sejarah"],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100 font-sans p-6">
    <h2 class="text-2xl font-bold mb-4">📚 Daftar Buku</h2>

    <div class="grid gap-4">
        <?php foreach ($buku as $b) : ?>
            <ul class="bg-white p-4 rounded shadow-md">
                <li><strong>Judul:</strong> <?= $b[0]; ?></li>
                <li><strong>Penulis:</strong> <?= $b[1]; ?></li>
                <li><strong>Tahun:</strong> <?= $b[2]; ?></li>
                <li><strong>Genre:</strong> <?= $b[3]; ?></li>
            </ul>
        <?php endforeach;
