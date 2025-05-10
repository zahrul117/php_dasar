<?php
$buku = [
    1 => ["judul" => "Laskar Pelangi", "penulis" => "Andrea Hirata"],
    2 => ["judul" => "Atomic Habits", "penulis" => "James Clear"],
    3 => ["judul" => "Sapiens", "penulis" => "Yuval Noah Harari"]
];

$id = $_GET['id'];

if (isset($buku[$id])) {
    echo "<h2>Detail Buku</h2>";
    echo "Judul: " . $buku[$id]['judul'] . "<br>";
    echo "Penulis: " . $buku[$id]['penulis'];
} else {
    echo "Buku tidak ditemukan.";
}
