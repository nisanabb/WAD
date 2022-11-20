<?php
require '../config/config.php';

$query = "SELECT * FROM users";
$result = mysqli_query($koneksi, $query);

if (isset($_GET['message'])) {
  if ($_GET['message'] == 'success') {
    // get name
    echo "<script>alert('successfuly added to database ')</script>";
  } else if ($_GET['message'] == 'update') {
    echo "<script>alert('Data berhasil diupdate')</script>";
  } else if ($_GET['message'] == 'delete') {
    echo "<script>alert('Data berhasil dihapus')</script>";
  }
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
                </div>
            </div>
        </nav>


        <!-- layout -->
        <div class="container">
            <br>
                <h2 class="fw-semibold"> My Show Room</h2>
                <h6 class="fw-lighter"> List Show Room Nisa - 1202200018</h6>
            <br>
        <!--card-->
        <!-- 1 -->
        <br>
        <div class="row align-items-start">
            <div class="col-sm-4">
                <div class="card text start" style="width: 18rem; margin-left: auto ; margin-right:auto; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                    <img class="card-img-top" src="../asset/images/2023-Honda-Civic-Type-R-11.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">Civic Type R</h5>
                        <p class="card-text fw-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="d-grid gap-2 d-md-block">
                            <a class="btn btn-primary gap-2" type="Button" href="Detail-Nisa.php">Details</a>
                            <a class="btn btn-danger gap-2" type="Button" href="Edit-Nisa.php">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        <!-- 2 -->
        <div class="col-sm-4">
            <div class="card" style="width: 18rem; margin-left: auto ; margin-right:auto; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                <img class="card-img-top" src="../asset/images/bmw.jpeg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">BMW</h5>
                    <p class="card-text fw-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="d-grid gap-2 d-md-block">
                        <a class="btn btn-primary gap-2" type="Button" href="#">Details</a>
                        <a class="btn btn-danger gap-2" type="Button" href="#">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- 3 -->
        <div class="col-sm-4">
        <div class="card text start" style="width: 18rem; margin-left: auto ; margin-right:auto; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
            <img class="card-img-top" src="../asset/images/toyota-supra.jpg" style="height: 12rem;" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Supra</h5>
                    <p class="card-text fw-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="d-grid gap-2 d-md-block">
                        <a class="btn btn-primary gap-2" type="Button" href="#">Details</a>
                        <a class="btn btn-danger gap-2" type="Button" href="#">Delete</a>
                    </div>
                </div>
            </div>
        </div>


  <!-- footer -->
  <footer class="fixed-bottom" style="padding-bottom: 50px;">
    <div class="container">
      <p style="font-family: 'Raleway'; font-style: normal; font-weight: 700; font-size: 16px; line-height: 19px; color: #757575;">Jumlah Mobil : <?php echo mysqli_num_rows($result) ?></p>
    </div>
  </footer>
  <!-- footer end -->
  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>