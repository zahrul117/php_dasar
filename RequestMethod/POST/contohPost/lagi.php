<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $makanan = $_POST['makanan'];
    $jumlah = $_POST['jumlah'];
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pemesanan Makanan</title>
</head>
<body>
    <h1>Form Pemesanan Makanan</h1>
    <form action="" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="makanan">Pilih Makanan:</label>
        <select name="makanan" id="makanan">
            <option value="Nasi Goreng">Nasi Goreng</option>
            <option value="Mie Ayam">Mie Ayam</option>
            <option value="Sate Ayam">Sate Ayam</option>
        </select><br><br>

        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" id="jumlah" min="1" required><br><br>

        <button type="submit" name="submit">Pesan Sekarang</button>
    </form>

    <?php if (isset($_POST['submit'])): ?>
        <h2>Detail Pesanan Anda:</h2>
        <p><strong>Nama:</strong> <?= htmlspecialchars($nama); ?></p>
        <p><strong>Makanan:</strong> <?= htmlspecialchars($makanan); ?></p>
        <p><strong>Jumlah:</strong> <?= htmlspecialchars($jumlah); ?></p>
    <?php endif; ?>
</body>
</html>
