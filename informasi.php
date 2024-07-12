<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Article Pierrot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
    <!-- nav -->
    <?php include 'navbar.php'; ?>
    <!-- nav -->

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header">
                <a href="informasi-tambah.php" class="btn btn-sm btn-success"><i class="fas fa-plus fa-fw"></i> Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" id="tbl_paket_wisata">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'koneksi.php';
                            $no = 1;
                            $artikel = mysqli_query($koneksi, "SELECT * FROM informasi");
                            foreach ($artikel as $pwi) {
                            ?>
                                <tr>
                                    <th scope="row"><?= $no++; ?></th>
                                    <td><?= $pwi['judul']; ?></td>
                                    <td><?= $pwi['tanggal']; ?></td>
                                    <td><?= $pwi['deskripsi']; ?></td>
                                    <td><img src="img/<?= $pwi['gambar']; ?>" class="img-thumbnail" width="150"></td>
                                    <td>
                                        <a href="paketwisata-detail?id=<?= $pwi['id']; ?>" class="btn btn-sm btn-secondary"><i class="fas fa-portrait fa-fw"></i> Detail</a>
                                        <a href="informasi-edit.php?id=<?= $pwi['id']; ?>" class="btn btn-sm btn-warning"><i class="fas fa-pen fa-fw"></i> Edit</a>
                                        <a href="informasi-hapus.php?id=<?= $pwi['id']; ?>" class="btn btn-sm btn-danger"><i class="fas fa-pen fa-fw"></i> Hapus</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <footer class="pt-3 mt-4">
            <div class="border-bottom pb-3 mb-3"></div>
            <p class="text-center text-body-secondary">Copyright &copy; 2024 Pierrot Studio</p>
        </footer>
    </div>


    <script>
        $(document).ready(function() {
            $('#tbl_paket_wisata').DataTable();
        });

        function hapus(id) {
            Swal.fire({
                icon: 'warning',
                title: 'Yakin ingin menghapus paket wisata?',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: "#d33",
            }).then((result) => {
                if (result.isConfirmed) {
                    location.href = 'article-hapus?id=' + id
                }
            });
        }
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>