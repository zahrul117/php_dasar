<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Cek Nilai Mahasiswa</title>
</head>
<body>

<h2>Form Cek Grade Nilai</h2>
<form method="POST">
    <label for="nilai">Masukkan Nilai:</label>
    <input type="number" name="tes" id="nilai" required>
    <button type="submit">Cek Grade</button>
</form>

<?php
function tentukanGrade($nilai) {
    if ($nilai >= 90) {
        return "A";
    } elseif ($nilai >= 80) {
        return "B";
    } elseif ($nilai >= 70) {
        return "C";
    } elseif ($nilai >= 60) {
        return "D";
    } else {
        return "E";
    }
}

if (isset($_POST['tes'])) {
    $nilai = $_POST['tes'];
    $grade = tentukanGrade($nilai);

    echo "<p>Nilai Anda: <strong>$nilai</strong></p>";
    echo "<p>Grade: <strong>$grade</strong></p>";
}
?>

</body>
</html>
