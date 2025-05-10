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
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto py-10 px-4">
        <h2 class="text-3xl font-bold mb-6 text-center">Daftar Buku Saya</h2>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300 shadow-md rounded-lg overflow-hidden">
                <thead class="bg-blue-500 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">Judul</th>
                        <th class="py-3 px-4 text-left">Pengarang</th>
                        <th class="py-3 px-4 text-left">Penerbit</th>
                        <th class="py-3 px-4 text-left">Tahun</th>
                        <th class="py-3 px-4 text-left">Genre</th>
                        <th class="py-3 px-4 text-left">Gambar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($buku as $b) : ?>
                        <tr class="border-t border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-4"><?= $b["judul"] ?></td>
                            <td class="py-3 px-4"><?= $b["pengarang"] ?></td>
                            <td class="py-3 px-4"><?= $b["penerbit"] ?></td>
                            <td class="py-3 px-4"><?= $b["tahun"] ?></td>
                            <td class="py-3 px-4"><?= $b["genre"] ?></td>
                            <td class="py-3 px-4">
                                <img src="img/<?= $b["gambar"] ?>" alt="<?= $b["judul"] ?>" class="w-24 rounded shadow">
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>