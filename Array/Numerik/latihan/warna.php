<?php 
$warna = ['Merah', 'Hijau', 'Biru', 'Kuning'];
echo $warna[3];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($warna as $value){ ?>
        <h1><?= $value ?></h1>
    <?php } ?>
</body>
</html>