<?php
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListCar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        <?php include '../asset/style/style.css'; ?>
    </style>
</head>
<body>
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
        <!-- layout -->
        <div class="container px-4 text-start">
            <div class="row gx-5">
                <div class="col">
                    <div class="">
                        <br>
                        <h1 class="text-start">My Show Room</h1>
                        <p class="text-start text-muted">List Show Room Nisa - 1202200018</p>
                    </div>
            <!-- List Card -->
            <!-- <div class="row row-cols-1 row-cols-md-3 g-4"> -->
                    <?php


                    include('../config/connector.php');
                    $getData = mysqli_query($connect,"SELECT * FROM `users`");
                    $jumlahData = mysqli_num_rows($getData);




                        while ($dayta = mysqli_fetch_array($getData)){
                        ?>
                        <br/>
                            <div class="container"> 
                                <div class="card" style="width: 18rem;">
                                <img src="../asset/images/<?php echo $dayta['foto_mobil'];?>" class="card-img-top" alt="mobil">    
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $dayta['nama_mobil'];?></h5>
                                        <h5 class="card-title"><?= $dayta['id_mobil'];?></h5>
                                        <p class="card-text"><?= $deskripsiMobil = $dayta['deskripsi'];
                                        echo $deskripsiMobil;?></p>
                                        <div class="row">
                                            <div class="col">
                                                <a href="Detail-Nisa.php?id_mobil=<?php echo $dayta['id_mobil']; ?>" class="btn btn-primary">Detail</a>
                                            </div>

                                            <div class="col">
                                                <a href="delete.php?id_mobil=<?php echo $dayta['id_mobil']; ?>" class="btn btn-danger" name="id">Delete</a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>    
    </div>    
    </body>
</html>
