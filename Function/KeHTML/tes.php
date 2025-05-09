<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Form Hitung Kuadrat</h2>
    <form action="" method="POST">
        <label for="angka">Masukkan Angka : </label>
        <input type="number" id="angka" name="angka">
        <button type="submit">Hitung</button>
    </form>


    <?php 
        function hitungKuadrat($angka){
            return $angka * $angka;
        }
        

        if(isset($_POST['angka'])){
            $angka = $_POST['angka'];
            $hasil = hitungKuadrat($angka);

            echo "<p>Hasil kuadrat dari $angka adalah <strong>$hasil</strong>.</p>";
        }
    ?>
</body>
</html>