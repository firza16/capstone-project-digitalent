<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pierrot</title>
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
    <style>
        .card-img-top {
            object-fit: cover;
            height: 300px; /* Sesuaikan tinggi gambar sesuai keinginan */
        }

        .card-img-left {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .card-body {
            display: flex;
            flex-direction: column;
        }

        .btn-detail {
            width: fit-content;
        }

        .navbar-brand{
          font-family: "Carter One", system-ui;
          font-weight: 400;
          font-style: normal;
        }

        h1{
          font-family: "Kanit", sans-serif;
          font-weight: 600;
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
              <a class="nav-link" href="#service">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="login.php">
            <i class="fas fa-user-lock"></i> Admin Login
          </a>
        </li>
      </ul>
        </div>
      </div>
    </nav>
    <!-- nav -->

    <!-- carousel -->
    <div class="container w-75">
      <div id="myCarousel" class="carousel slide my-4 " data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
        </div>
        <div class="carousel-inner rounded-3">
          <div class="carousel-item active">
            <img src="img/narutoh.jpg" alt="" width="100%" height="75%" />
            <div class="container">
            </div>
          </div>
          <div class="carousel-item ">
            <img src="img/black-clover.jpg" alt="" width="100%" height="75%"/>
            <div class="container">
            </div>
          </div>

          <div class="carousel-item ">
            <img src="img/boruto.jpg" alt="" width="100%" height="75%" />
            <div class="container">
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- carousel -->

    <!-- about us -->
    <div class="container">
    <div class="px-4 pt-5 mb-4 text-center border-bottom">
    <h1 id="about">About Us</h1>
    <div class="col-lg-7 mx-auto">
      <p class="lead mb-4">Since inauguration, our principles are "Make a challenge", "Do the best", "Produce required works" and "Keep our corporate as a humanitarian one". We value people. Promoting the growth of people is equal to creating the brightness of works. We sincerely keep moving forward to be an Entertainment Corporation which based on Animation.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
      <a href="#product"><button type="button" class="btn btn-outline-secondary btn-lg px-4">See our works</button></a>
      </div>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-5">
        <img src="img/animek.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
      </div>
    </div>
  </div>
    </div>

    <!-- about us end -->

    
    <!-- artikel -->
    <div class="container">
      <h1 class="p-3 text-center" id="product">Our Works</h1>
      <div class="row">
        <div class="col-md-12 mb-3">
          <div class="row">
            <?php
            include 'koneksi.php';
            $no = 1;
            $artikel = mysqli_query($koneksi, "SELECT * FROM artikel");
            foreach ($artikel as $pws) {
            ?>
              <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="card">
                  <img src="img/<?= $pws['gambar']; ?>" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title"><?= $pws['judul']; ?></h5>
                    <p class="card-text"><?= $pws['author']; ?></p>
                    <a href="article-detail.php?id=<?= $pws['id']; ?>" class="btn btn-secondary"><i class="fas fa-portrait fa-fw"></i> Detail</a>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <!-- artikel -->


    <!-- informasi -->
    <h1 class="p-3 text-center" id="product">Information</h1>
    <div class="container">
        <?php
            include 'koneksi.php';
            $no = 1;
            $informasi = mysqli_query($koneksi, "SELECT * FROM informasi");
            foreach ($informasi as $pws) {
            ?>
        <div class="card mb-2">
            <div class="row no-gutters">
                <div class="col-md-2">
                    <img src="img/<?= $pws['gambar']; ?>" class="img-fluid rounded-start card-img-left" alt="...">
                </div>
                <div class="col-md-10">
                    <div class="card-body">
                        <h5 class="card-title"><?= $pws['judul']; ?></h5>
                        <p class="card-text"><small class="text-muted"><?= $pws['tanggal']; ?></small></p>
                        <a href="informasi-detail.php?id=<?= $pws['id']; ?>" class="btn btn-secondary btn-md btn-detail"><i class="fas fa-portrait fa-fw"></i> Detail</a>
                    </div>
                </div>
            </div>
          </div>
          <?php } ?>
    </div>
    <!-- informasi -->
    
    <!-- service -->
    <div class="container mb-4">
    <h1 class="p-3 text-center" id="service"> Services </h1>
    <div class="border-bottom mb-3"></div>
    <div class="row align-items-md-stretch">
      <div class="col-md-6">
      <div class="card text-bg-dark h-100 rounded-3">
        <img src="img/anim.jpg" class="card-img-top" alt="Animation Image">
        <div class="card-body">
          <h2>Wanna make an animation?</h2>
          <p>Bring your creative visions to life with our professional animation services. Whether you're looking to create captivating anime, dynamic explainer videos, or any other type of animation, our talented team is here to help you turn your ideas into reality. Let us help you tell your story with stunning visuals and engaging storytelling.</p>
          <a href="mailto:email@example.com">
             <button class="btn btn-outline-light" type="button">Contact Us</button>
          </a>
        </div>
      </div>
      </div>

      <div class="col-md-6">
      <div class="card text-bg-dark h-100 rounded-3">
        <img src="img/collab.jpg" class="card-img-top" alt="Animation Image">
        <div class="card-body">
          <h2>We're open for collab!</h2>
          <p>Join forces with our expert animation team to create something extraordinary. We are always excited to collaborate with talented individuals and innovative brands. Whether it's a full-scale anime production, a creative short film, or any unique animation project, we're ready to bring our skills and passion to the table. Let's create magic together!</p>
          <a href="mailto:email@example.com">
             <button class="btn btn-outline-light" type="button">Contact Us</button>
          </a>
        </div>
      </div>
      </div>

    </div>   
    </div>
    <!-- end service -->

        <!-- Contact -->
      <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col mb-3 text-center">
          <h1 class="p-3 text-center"> Contact </h1>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <!-- <form> -->
              <div class="mb-3">
                <label for="name" class="form-label">Name </label>
                <input type="text" class="form-control" id="name" aria-describedby="name" />
              </div>
  
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" />
              </div>
  
              <div class="mb-3">
                <label for="pesan" class="form-label">Message</label>
                <textarea class="form-control" id="pesan" rows="3"></textarea>
              </div>
  
              <button type="submit" class="btn btn-primary">Submit</button>
            <!-- </form> -->
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Contact -->

    <!-- footer -->
    <div class="container">
      <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="index.php" class="nav-link px-2 text-body-secondary">Home</a></li>
        <li class="nav-item"><a href="#product" class="nav-link px-2 text-body-secondary">Product</a></li>
        <li class="nav-item"><a href="#about" class="nav-link px-2 text-body-secondary">About</a></li>
        <li class="nav-item"><a href="#service" class="nav-link px-2 text-body-secondary">Services</a></li>
        <li class="nav-item"><a href="#contact" class="nav-link px-2 text-body-secondary">Contact</a></li>
      </ul>
      <p class="text-center text-body-secondary">© 2024 Pierrot Studio</p>
      </footer>
    </div>
    <!-- end footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
