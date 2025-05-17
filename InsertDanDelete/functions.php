<?php
// koneksi database
$konek = mysqli_connect('localhost', 'root', '', 'phpdasarlagi');


function query($query)
{
    global $konek;
    $hasil = mysqli_query($konek, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($hasil)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data)
{
    global $konek;

    // ambil data dari tiap elemen dalam form
    $nrp = htmlspecialchars($data['nrp']);
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $gambar =  htmlspecialchars($data['gambar']);

    $query = "INSERT INTO mahasiswa
                Values
                ('','$nrp','$nama','$email','$jurusan','$gambar')
                ";

    mysqli_query($konek, $query);

    return mysqli_affected_rows($konek);
}

function hapus($id){
    global $konek;

    mysqli_query($konek, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($konek);

}