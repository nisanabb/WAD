<!<?php
    session_start();
    if (!empty($_SESSION) && $_SESSION['another']) {
        $dec = json_decode($_SESSION['another'], true);
    } else {
          echo "<body>
                <script>
                    alert('kamu belum login!')
                    window.location.replace('../pages/Login-Nisa.php')
                </script>
            </body>";
    }
?>
DOCTYPE html>
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
                        <a class="nav-link active" aria-current="page" href="Add-Nisa.php">My Car</a>
                    </div>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="background-color: white; color:blue; border-radius: 5px; text-decoration: none; width: 110px; height: 35px; display:flex; justify-content:center; align-items:center; font-weight:500;"id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $dec['username']; ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="Profile-Nisa.php">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="../config/logout.php">Logout</a></li>
                        </ul>
                    </li>
                </div>
            </div>
        </nav>
        
    <!-- Form -->
 

    <div class="container px-4 text-start">
            <div class="row gx-5">
                <div class="col">


                    <?php


                    include('../config/connector.php');
                    $getData = mysqli_query($connect,"SELECT * FROM `users`");
                    $jumlahData = mysqli_num_rows($getData);
                    $detailMobil = mysqli_fetch_array($getData) or die("line 50 not working");
                    $foto = $detailMobil['foto_mobil'];

                    ?>

                    <!-- Heading -->
                    <div class="">
                        <br>
                        <h1 class="text-start">Edit</h1>
                        <p class="text-start text-muted">Edit Detail Mobil</p>
                    </div>

                    
                    <!-- Form -->

                    <div class="container text-start">
                        <div class="row">
                            <div class="col align-self-start">
                                <br>
                                <!-- <img src="../asset/images/car3.jpg" class ="rounded" alt="logo-ead" width="Automatic" height="310" > -->
                                <img src="../asset/images/<?php echo $detailMobil['foto_mobil'];?>" class="card-img-top rounded" alt="mobil" width="Automatic" height="310" >
                            </div>

                            <!-- Forms -->
                            <div class="col align-self-center">
                            <form action="edit.php" method="POST" enctype="multipart/form-data">
                                <!-- Nama Mobil -->
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label ">Nama Mobil</label>
                                    <input type="text" class="form-control" name="nama_mobil" id="disabledTextInput" aria-describedby="emailHelp" value="<?= $detailMobil['nama_mobil'];?>">
                                </div>

                                <!-- Nama Mobil -->
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Pemilik</label>
                                    <input type="text" class="form-control" name="pemilik_mobil" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $detailMobil['pemilik_mobil'];?>">
                                </div>

                                <!-- Merk -->
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Merk</label>
                                    <input type="text" class="form-control" name="merk_mobil" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $detailMobil['merk_mobil'];?>">
                                </div>

                                <!-- Tanggal Beli -->
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tanggal Beli</label>
                                    <input type="date" class="form-control" name="tanggal_beli" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $detailMobil['tanggal_beli'];?>">
                                </div>

                                <!-- Deskripsi -->
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                                    <textarea class="form-control border border-3" name="deskripsi" id="exampleFormControlTextarea1" rows="3" ><?= $detailMobil['deskripsi'];?></textarea>
                                </div>

                                <!-- Foto -->
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Foto</label>
                                    <input type="file" class="form-control" name="foto_mobil" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $detailMobil['foto_mobil'];?>">
                                </div>
                                
                                <!-- Status Pembayaran -->
                                
                                <label for="status_pembayaran" class="form-label">Status Pembayaran</label>
                                <div class="container text-start">
                                        <div class="col">
                                            <!-- Radio 1 -->
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status_pembayaran" id="status_pembayaran" value="<?= $detailMobil['status_pembayaran'];?>">
                                                <label class="form-check-label" for="inlineRadio1">Lunas</label>
                                            </div>
                                            <!-- Radio 2 -->
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status_pembayaran" id="status_pembayaran" value="<?= $detailMobil['status_pembayaran'];?>">
                                                <label class="form-check-label" for="inlineRadio2">Belum Lunas</label>
                                            </div>
                                        </div>
                                <!-- Submit -->
                                <br>


                                <!-- button -->
                                <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
       </body>
    </html>
