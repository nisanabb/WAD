<?php
    session_start();
    if (!empty($_SESSION) && $_SESSION['another']) {
        $dec = json_decode($_SESSION['another'], true);
    } else {
          echo "<body>
                <script>
                    alert('kamu belum login!')
                    window.location.replace('../login.html')
                </script>
            </body>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        <?php include '../asset/style/style.css'; ?>
    </style>
</head>
<body>
<!-- navbar -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav" style="margin-right: auto">
                        <a class="nav-link" href="Home-Nisa.php">Home</a>
                        <a class="nav-link active" aria-current="page" href="#">My Car</a>
                    </div>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="background-color: white; color:blue; border-radius: 5px; text-decoration: none; width: 110px; height: 35px; display:flex; justify-content:center; align-items:center; font-weight:500;"id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $dec['username']; ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="Profile-Natah.php">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="../config/logout.php">Logout</a></li>
                        </ul>
                    </li>
                </div>
            </div>
        </nav>

<!-- form -->


<div class="container px-4 text-start">
            <div class="row gx-5">
                <div class="col">

                    <!-- Heading -->
                    <br>
                    <div class="">
                        <h1 class="text-start">Tambah Mobil</h1>
                        <p class="text-start text-muted">Tambah Mobil baru anda ke list show room!</p>
                    </div>

                    
                    <!-- Form -->
                    <br>
                    <form action="insert.php"  method="POST" enctype="multipart/form-data">

                        <!-- Nama Mobil -->
                        <div class="mb-3">
                            <label for="nama_mobil" class="form-label">Nama Mobil</label>
                            <input type="text" class="form-control" name="nama_mobil" id="nama_mobil"  placeholder="Civic Type-R">
                        </div>

                        <!-- Nama Pemilik -->
                        <div class="mb-3">
                            <label for="nama_mobil" class="form-label">Nama Pemilik</label>
                            <input type="text" class="form-control" id="pemilik_mobil" name="pemilik_mobil"  placeholder="Nama - Nim">
                        </div>

                        <!-- Merk -->
                        <div class="mb-3">
                            <label for="merk_mobil" class="form-label">Merk</label>
                            <input type="text" class="form-control" name ="merk_mobil" id="merk_mobil"  placeholder="Honda">
                        </div>

                        <!-- Tanggal Beli -->
                        <div class="mb-3">
                            <label for="tanggal_beli" class="form-label">Tanggal Beli</label>
                            <input type="date" class="form-control" name ="tanggal_beli" id="tanggal_beli" placeholder="11/12/2022">
                        </div>

                        <!-- Deskripsi -->
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control border border-3" name="deskripsi" id="deskripsi" rows="3" placeholder="lorem21"></textarea>
                        </div>

                        <!-- Foto -->
                        <div class="mb-3">
                            <label for="foto_mobil" class="form-label">Foto</label>
                            <input type="file" class="form-control" name="foto_mobil" id="foto_mobil" placeholder="Type-R.jpg">
                        </div>
                        
                        <!-- Status Pembayaran -->
                        <label for="status_pembayaran" class="form-label">Status Pembayaran</label>
                        <div class="container text-start">
                                <div class="col">
                                    <!-- Radio 1 -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status_pembayaran" id="status_pembayaran" value="Lunas">
                                        <label class="form-check-label" for="lunas">Lunas</label>
                                    </div>
                                    <!-- Radio 2 -->
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status_pembayaran" id="status_pembayaran" value="BelumLunas">
                                        <label class="form-check-label" for="belumLunas">Belum Lunas</label>
                                    </div>
                                </div>
                        <!-- Submit -->
                      <br>
                      <button type="submit" class="btn btn-primary" name="submit">Selesai</button>
                      <br>
                      <br>
                        
                    </form>
                </div>    
            </div>    
        </div>    



    </body>
</html>