<?php

function hitungDiskon($harga,$diskon){
    $diskon = $diskon / 100 * $harga;
    return $harga - $diskon;
}

echo hitungDiskon(100000,20);