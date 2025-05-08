<?php
// 1. Menampilkan Teks
echo "Halo, dunia!";
echo "<br>";
echo "Saya sedang belajar PHP!";

// 2. Variabel & Tipe Data
$nama = "Zahrul";
$umur = 20;
$tinggi = 1.72;
$menikah = false;
echo "<br>Nama saya $nama, umur saya $umur tahun dan tinggi saya $tinggi meter.";
var_dump($menikah);

// 3. Operator
$a = 8;
$b = 4;
echo "<br>Penjumlahan: " . ($a + $b);
echo "<br>Pengurangan: " . ($a - $b);
echo "<br>Perkalian: " . ($a * $b);
echo "<br>Pembagian: " . ($a / $b);

// 4. Penggabungan String
$depan = "Lionel";
$belakang = "Messi";
$namaLengkap = $depan . " " . $belakang;
echo "<br>Nama lengkap saya: $namaLengkap";

// 5. Konstanta
define("APP_NAME", "Belajar PHP Dasar");
echo "<br>" . APP_NAME;

// 6. Tipe Data dan var_dump()
$angka = 100;
$teks = "Seratus";
$benar = true;
var_dump($angka);
var_dump($teks);
var_dump($benar);

// 7. Komentar
// Ini komentar satu baris
# Ini juga komentar
/* Ini komentar multi-baris */

// 8. Tipe Konversi Data
$angkaString = "100"; // string
$angkaInt = (int) $angkaString;
var_dump($angkaInt);

// 9. isset() dan empty()
$nilai = "";
if (isset($nilai)) {
    echo "<br>Variabel telah diset";
}
if (empty($nilai)) {
    echo "<br>Variabel kosong";
}

// 10. Mini Proyek: Biodata Dinamis
$nama = "Zahrul";
$umur = 21;
$asal = "Jambi";
$hobi = "Coding";

echo "<h2>Biodata</h2>";
echo "Nama: $nama <br>";
echo "Umur: $umur tahun <br>";
echo "Asal: $asal <br>";
echo "Hobi: $hobi <br>";
?>
