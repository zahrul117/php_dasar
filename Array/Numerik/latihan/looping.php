<?php
$angka = [10,20,30,40,50];

foreach($angka as $value){
    echo $value . "\n";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php for($i = 0; $i < 5; $i++) { ?>
        <div><?= $angka[$i];?></div>
    <?php } ?>

</body>
</html>