<?php

$x = 10;

function tampil(){
    global $x;
    return $x;
}

echo tampil();
?>