<?php

$hari = "Senin";

switch ($hari) {
    case "Senin":
        echo "Hari kerja";
        break;
    case "Sabtu":
    case "Minggu":
        echo "Hari libur";
        break;
    default:
        echo "Hari tidak valid";
}


?>