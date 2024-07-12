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
    $judul = $_POST['judul'];
    $tanggal = $_POST['tanggal'];
    $deskripsi = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);
    $gambar_nama = $_FILES['gambar']['name'];   
    $gambar_tmp = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($gambar_tmp, 'img/' . $gambar_nama);

    $sql = "INSERT INTO informasi (judul, tanggal, deskripsi, gambar) VALUES ('$judul', '$tanggal', '$deskripsi', '$gambar_nama')";

    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        // Redirect ke halaman article.php jika berhasil
        header("Location: informasi.php");
    } else {
        // Tampilkan error jika gagal
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}
?>
