<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- font pierrot -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">

    <!-- font h1 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- font p -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans">

    <title>Paket Wisata Detail - Desa Wisata</title>
    <style>
        .navbar-brand{
          font-family: "Carter One", system-ui;
          font-weight: 400;
          font-style: normal;
        }

        h4{
          font-family: "Kanit", sans-serif;
          font-weight: 500;
          font-style: normal;
        }

        p{
          font-family: 'Noto Sans', sans-serif;
        }
    </style>
</head>

<body style="background-color: #fff8db">
  
      <!-- nav -->
      <nav class="navbar navbar-expand-lg p-3" style="background-color: #ffb22c" aria-label="Fifth navbar example">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Pierrot</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample05">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#product">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#product">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#service">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- nav -->

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $artikel = mysqli_query($koneksi, "SELECT * FROM artikel WHERE id='$id'");
    $pws = mysqli_fetch_assoc($artikel);
    ?>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h4><?= $pws['judul']; ?></h4>
            </div>

            <div class="card-body">
                <img src="img/<?= $pws['gambar']; ?>" class="img-thumbnail" width="512">
                <p my-3>
                    <?= $pws['deskripsi']; ?>
                </p>
                <p class="mt-2">
                    Since <?= $pws['author']; ?>
                </p>
            </div>
        </div>
    </div>


        <footer class="pt-3 mt-4">
            <div class="border-bottom pb-3 mb-3"></div>
            <p class="text-center text-body-secondary">Copyright &copy; 2024 Pierrot Studio</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>