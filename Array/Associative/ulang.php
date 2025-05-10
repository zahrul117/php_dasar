<?php
$angka = [
    [1, 2, 3, 4, 5, 6, 7, 8],
    [9,10,11,12,13,14,15,16]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="flex gap-2">

    <?php foreach($angka as $b) : ?>
        <?php foreach($b as $c) : ?>
        <div class="p-4 bg-blue-300"><?= $c ?></div>
        <?php endforeach; ?>
    <?php endforeach; ?>
</body>

</html>