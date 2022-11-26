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


    <div class="container px-4 text-start">
            <div class="row gx-5">
                <div class="col">

                    <!-- Heading -->
                    <div class="">
                        <br>
                        <h1 class="text-start">Detail Mobil</h1>
                        <p class="text-start text-muted">Penjelasan tentang Mobil</p>
                    </div>

                    <?php

                    include('../config/connector.php');


                    // include('../config/connector.php');

                    $id = $_GET['id_mobil'];
                    $getData = mysqli_query($connect,"SELECT * FROM users WHERE id_mobil = $id");
                    $jumlahData = mysqli_num_rows($getData);
                    $detailMobil = mysqli_fetch_array($getData) or die("line 50 not working");
                    $foto = $detailMobil['foto_mobil'];
                    // echo $detailMobil['foto_mobil'];

                    ?>
                        <!-- Form -->
                        <div class="container text-start">
                            <div class="row">
                                <div class="col align-self-start">
                                    <br>
                                    <img src="../asset/images/<?php echo $detailMobil['foto_mobil'];?>" class ="rounded" alt="mobil" width="Automatic" height="310" >
                                </div>
                                
                                <!-- Forms -->
                                <div class="col align-self-center">
                                    <form>
                                        <fieldset disabled="">

                                            <!-- Nama Mobil -->
                                            <div class="mb-3">
                                                <label for="disabledTextInput" class="form-label ">Nama Mobil</label>
                                                <input type="text" class="form-control" id="disabledTextInput" aria-describedby="emailHelp" value="<?= $detailMobil['nama_mobil'];?>">
                                            </div>
                                            
                                            <!-- Nama Mobil -->
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Nama Pemilik</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $detailMobil['pemilik_mobil'];?>">
                                            </div>
                                            
                                            <!-- Merk -->
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Merk</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $detailMobil['merk_mobil'];?>">
                                            </div>
                                            
                                            <!-- Tanggal Beli -->
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Tanggal Beli</label>
                                                <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $detailMobil['tanggal_beli'];?>">
                                            </div>
                                            
                                            <!-- Deskripsi -->
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                                                <textarea class="form-control border border-3" id="exampleFormControlTextarea1" rows="3" ><?= $detailMobil['deskripsi'];?></textarea>
                                            </div>
                                            
                                            <!-- Foto -->
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Foto</label>
                                                <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $detailMobil['foto_mobil'];?>">
                                            </div>
                                            
                                            <!-- Status Pembayaran -->
                                            
                                            <label for="exampleInputEmail1" class="form-label">Status Pembayaran</label>
                                            <div class="container text-start">
                                                <div class="col">
                                                    <!-- Radio 1 -->
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="<?= $detailMobil['status_pembayaran'];?>">
                                                        <label class="form-check-label" for="inlineRadio1">Lunas</label>
                                                    </div>
                                                    <!-- Radio 2 -->
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="<?= $detailMobil['status_pembayaran'];?>">
                                                        <label class="form-check-label" for="inlineRadio2">Belum Lunas</label>
                                                    </div>
                                                </div>
                                        </fieldset>
                                            <!-- Submit -->
                                            <br>
                                            
                                            
                                            <a href="Edit-Nisa.php" class="btn btn-primary">Edit</a>
                                            <br>
                                        </form>
                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                        
                        




    </body>
</html>
