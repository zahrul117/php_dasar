<?php
// koneksi database
$konek = mysqli_connect('localhost', 'root', '', 'phpdasarlagi');


function query($query){
    global $konek;
    $hasil = mysqli_query($konek,$query);
    $rows = [];

    while($row = mysqli_fetch_assoc($hasil)){
        $rows[] = $row;
    }
    return $rows;
}
?>