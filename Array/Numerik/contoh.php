<?php
$nama = ['yamal','pedri','gavi'];

echo $nama[0]; //yamal
// echo $nama[1]; pedri

$nama[] = "Olmo";
var_dump($nama);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($nama as $namo) : ?>
        <h1><?= $namo ?></h1>
    <?php endforeach; ?>
</body>
</html>