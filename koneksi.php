<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "pierrot";

// perintah php untuk akses database
$koneksi = mysqli_connect($host, $user, $password, $database);

// memeriksa koneksi
if($koneksi -> connect_error){
    die("Koneksi gagal : " . $koneksi->connect_error);
}

?>