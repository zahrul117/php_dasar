<?php
$transaksi = [
    ["Pelanggan" => "Zahrul", "Barang" => "Laptop", "Jumlah" => 1, "Harga" => 8000000],
    ["Pelanggan" => "Udin", "Barang" => "Mouse", "Jumlah" => 2, "Harga" => 150000],
    ["Pelanggan" => "Sari", "Barang" => "Keyboard", "Jumlah" => 1, "Harga" => 300000],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Transaksi</title>
</head>
<body>
    <h2>Daftar Transaksi Belanja</h2>

    <table border="1" cellpadding="10">
        <tr>
            <th>Pelanggan</th>
            <th>Barang</th>
            <th>Jumlah</th>
            <th>Harga Satuan</th>
            <th>Total Bayar</th>
        </tr>

        <?php foreach ($transaksi as $t) : ?>
            <tr>
                <td><?= $t["Pelanggan"]; ?></td>
                <td><?= $t["Barang"]; ?></td>
                <td><?= $t["Jumlah"]; ?></td>
                <td><?= number_format($t["Harga"], 0, ',', '.'); ?></td>
                <td>
                    <?php 
                        $total = $t["Jumlah"] * $t["Harga"];
                        echo number_format($total, 0, ',', '.'); 
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
