<?php
require '../config/config.php';

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id_mobil = $id";

$result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <!-- nav -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav" style="margin-right: auto">
                        <a class="nav-link" href="Home-Nisa.php">Home</a>
                        <a class="nav-link active" aria-current="page" href="Add-Nisa.php">My Car</a>
                    </div>
                </div>
            </div>
        </nav>
    <!-- form -->
    <div class="container">
        <br>
            <h2 class="fw-semibold"> Civic Type R</h2>
            <h6 class="fw-lighter"> Detail Mobil Civic Type R</h6>
        <br>

    <!-- form -->
    <section id="detail">
    <div class="container">
      <?php
      while ($getDetail = mysqli_fetch_array($result)) {
        echo "
                <h1 class="tambahh1">Tambah Mobil</h1>
                <p class="tambahp">Tambah Mobil Baru Anda Ke List Show Room</p>
                <form action="../config/insert.php" method="POST" enctype="multipart/form-data">
                <label for="nama">Nama Mobil</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Mobil">
                <label for="pemilik">Nama Pemilik</label>
                <input type="text" id="pemilik" name="pemilik" placeholder="Masukkan Nama Pemilik">
                <label for="merk">Merk</label>
                <input type="text" id="merk" name="merk" placeholder="Masukkan Merk Mobil">
                <label for="tanggalbeli">Tanggal Beli</label>
                <input type="date" id="tanggalbeli" name="tanggalbeli">
                <label for="desc">Deskripsi</label>
                <textarea id="desc" name="desc" placeholder="Masukkan Deskripsi Mobil" style="height:200px; width: 1000px; border-radius: 8px;"></textarea>
                <label for="inputGroupFile01">Foto</label>
                <input type="file" class="form-control" id="inputGroupFile01" name="gambar" style="height: 40px;">
                <label for="status">Status Pembayaran</label>
                <span class="d-flex">
                    <input type="radio" name="status" id="lunas" value="Lunas" style="width: 15px; height: 15px; margin-right:10px;">
                    <label for="lunas" style="margin-top: 15px; margin-right:10px;">Lunas</label>
                    <input type="radio" name="status" id="belum" value="Belum Lunas" style="width: 15px; height: 15px; margin-right:10px;">
                    <label for="belum" style="margin-top: 15px;">Belum Lunas</label>
                </span>
                <br>
                <div class="mb-3">
                    <a class="btn btn-primary col-1" type="submit" href="ListCar-Nisa.php" role="button">Selesai</a>
                </div>
            </form>
            </div>
            </section
        ";
      }
      ?>
    </div>
  </section>
  <!-- Form End -->

  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>