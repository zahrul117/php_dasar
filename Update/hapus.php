<?php
require 'functions.php';

$id = $_GET['id'];

if (hapus($id) > 0) {
    // Alert berhasil
    echo '
        <!DOCTYPE html>
        <html>
        <head>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        </head>
        <body>
            <script>
                Swal.fire({
                    icon: "success",
                    title: "Berhasil!",
                    text: "Data berhasil dihapus!",
                    confirmButtonText: "OK"
                }).then(() => {
                    window.location.href = "index.php";
                });
            </script>
        </body>
        </html>
        ';
    exit;
} else {
    // Alert gagal
    echo '
        <!DOCTYPE html>
        <html>
        <head>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        </head>
        <body>
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Gagal!",
                    text: "Data gagal dihapus.",
                    confirmButtonText: "Coba Lagi"
                }).then(() => {
                    window.location.href = "index.php";
                });
            </script>
        </body>
        </html>
        ';
    exit;
}
