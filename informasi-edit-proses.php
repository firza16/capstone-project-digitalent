<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.2/dist/sweetalert2.min.css">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.2/dist/sweetalert2.all.min.js"></script>
</body>

</html>


<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $tanggal = $_POST['tanggal'];
    $deskripsi = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);
    $gambar_lama = $_POST['gambar_lama'];
    $gambar_nama = $_FILES['gambar']['name'];
    $gambar_tmp =  $_FILES['gambar']['tmp_name'];

    if ($gambar_nama == null) {
        $sql = "UPDATE informasi SET judul='$judul', tanggal='$tanggal', deskripsi='$deskripsi' WHERE id='$id'";

        $query = mysqli_query($koneksi, $sql);

        if ($query) {
            echo "
                <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil edit Artikel',
                    confirmButtonColor: '#3085d6',
                }).then((result) => {
                if (result.isConfirmed) {
                    location.href = 'informasi.php'
                }
                });
                </script>
            ";
        } else {
            echo "
                <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal edit Artikel',
                    confirmButtonColor: '#3085d6',
                }).then((result) => {
                if (result.isConfirmed) {
                    location.href = 'informasi.php'
                }
                });
                </script>
            ";
        }
    } else {
        unlink('img/' .  $gambar_lama);
        move_uploaded_file($gambar_tmp, 'img/' . $gambar_nama);

        $sql = "UPDATE informasi SET judul='$judul', tanggal='$tanggal', deskripsi='$deskripsi', gambar='$gambar_nama' WHERE id='$id'";

        $query = mysqli_query($koneksi, $sql);

        if ($query) {
            echo "
                <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil edit pake wisata',
                    confirmButtonColor: '#3085d6',
                }).then((result) => {
                if (result.isConfirmed) {
                    location.href = 'informasi.php'
                }
                });
                </script>
            ";
        } else {
            echo "
                <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal edit pake wisata',
                    confirmButtonColor: '#3085d6',
                }).then((result) => {
                if (result.isConfirmed) {
                    location.href = 'informasi.php'
                }
                });
                </script>
            ";
        }
    }
} else {
    die("Tidak dapat diakses.");
}
