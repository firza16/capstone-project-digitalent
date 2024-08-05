<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <title>Document</title>
</head>

<body>
    <!-- nav -->
    <?php include 'navbar.php'; ?>
    <!-- nav -->

    <div class="col-md-8 mx-auto py-5">
        <div class="card shadow">
            <div class="card-header text-uppercase">
                <h5>Form Tambah Informasi</h5>
            </div>
            <div class="card-body">
                <form action="informasi-tambah-proses.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan author" required>
                    </div>

                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3" placeholder="Masukkan deskripsi" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="gambar" class="form-label">Upload Gambar</label>
                        <input class="form-control" type="file" id="gambar" name="gambar" required>
                    </div>
                    
                    <div class="mb-3">
                        <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-paper-plane fa-fw"></i> Submit</button>
                        <a href="article.php" id="submit" name="submit" class="btn btn-outline-danger"><i class="fas fa-times fa-fw"></i> Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <hr>
        <p class="text-center text-muted">Copyright 2024 &copy; ImamTech.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.min.js"></script>
</body>

</html>