<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if(isset($_POST['submit']) ) :?>
        <h1>Halo, Selamat Datang <?= $_POST['nama']?></h1>
    <?php endif; ?>
    <form action="" method="post">
        <label for="nama">Masukkan Nama</label>
        <input type="text" name="nama">
        <br>
        <label for="nim">Masukkan Nim anda : </label>
        <input type="text" name="nim">
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>

</html>