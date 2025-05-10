<?php
// Variabel global
$angka1 = 10;
$angka2 = 20;

function jumlahkan() {
    // Mengakses variabel global
    global $angka1, $angka2;
    $hasil = $angka1 + $angka2;
    echo "Hasil penjumlahan: $hasil";
}

jumlahkan();
?>
