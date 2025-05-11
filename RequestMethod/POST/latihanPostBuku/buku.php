<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Input Buku</h1>
    <form action="tampilBuku.php" method="post">
        <label for="judul">Judul : </label>
        <input type="text" name="judul"><br>
        <label for="pengarang">Pengarang : </label>
        <input type="text" name="pengarang"><br>
        <label for="genre">Genre : </label>
        <input type="text" name="genre"><br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>