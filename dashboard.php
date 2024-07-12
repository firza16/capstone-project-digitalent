<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            background-color: #fff8db
        }

        .full-height {
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <!-- nav -->
    <?php include 'navbar.php'; ?>
    <!-- nav -->

    <div class="container full-height">
        <div class="container">
            <h2 class="text-center">Dashboard Admin</h2>
            <div class="text-center">
                <a href="article.php" class="btn btn-dark m-2">Kelola Artikel</a>
                <a href="informasi.php" class="btn btn-light m-2">Kelola Informasi</a>
            </div>
            <div class="text-center mt-3">
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>
