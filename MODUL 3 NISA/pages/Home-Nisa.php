<?php
    include_once('../config/connector.php');
    $getData = mysqli_query($connect,"SELECT id_mobil FROM `users`");
    $jumlahData = mysqli_num_rows($getData);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <?php
                        if ($jumlahData == 0) {
                            echo '<a class="nav-link active" href="Add-Nisa.php">My Car</a>';
                        } else {
                            echo '<a class="nav-link active" href="ListCar-Nisa.php">My Car</a>';
                        }
                        
                        ?>
                    </div>
                </div>
            </div>
        </nav>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    <!--- isi -->
    <section id="home">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h1 class="text-start">Selamat Datang Di Showroom Nisa</h1>
                    <p class="text-start text-muted fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum repudiandae harum eaque esse cum, tempore fugit porro quae magni atque!</p>
                    <!-- Button -->
                    <div class="text-start">
                    <?php
                    if ($jumlahData == 0) {
                        echo '<a class="btn btn-primary " href="Add-Nisa.php">MyCar</a>';
                    } else {
                        echo '<a class="btn btn-primary " href="ListCar-Nisa.php">MyCar</a>';
                    }
                    
                    ?>
                </div>
                <br>
        <!-- kiri -->
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <div class="text-start">
                        <img src="../asset/images/logo-ead.png" alt="logo-ead" height="29" weidth="automatic">
                    </div>
                </div>
                    <div class="col-9">
                        <div class="text-start text-muted fw-light">
                        Nisa_1202200018
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- Kanan -->
            
            <div class="col">
                <img src="../asset/images/2023-Honda-Civic-Type-R-11.jpg" class="rounded mx-auto d-block" alt="civic" height="300" weidth="100">
            </div>
        </div>
        </div>
        </section>
</body>
</html>