<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav" style="margin-left: auto; margin-right: auto">
            <a class="nav-link active" aria-current="page" href="nisa_home.php">Home</a>
            <a class="nav-link" href="#">Booking</a>
        </div>
        </div>
        </div>
    </nav>

    <!-- column -->
        <div class="row">
            <div class="col-6">
                <img src="https://www.toyota.astra.co.id/sites/default/files/2021-08/1-white.png" class="card-img-top" alt="Rush.img">
            </div>
            <!-- form  -->
            <div class="col-6">
                <br>
                <h5 class="fw-semibold">Rent your car now!</h5>
                <form action="nisa_myBooking.php" method="GET">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lengkap">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Book Date</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="dd/mm/yyy">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Start time</label>
                    <input type="time" class="form-control" id="exampleFormControlInput1" placeholder="--:--">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Duration</label>
                    <input type="Duration" class="form-control" id="exampleFormControlInput1" placeholder="Days">
                </div>
                <div class="mb-3">
                    <label for="enableSelect" class="form-label">Car type</label>
                    <select id="mobil" class="form-select">
                        <option value="Rush">Rush</option>
                        <option value="Brio">BMW</option>
                        <option value="Fortuner">Fortuner</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Phone number</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>

                <!-- checkbox  -->
                <p> Add Service </p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Health Service / Rp.50.000
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Driver / Rp. 200.000
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Fuel Filled / Rp.300.000
                    </label>
                </div>
                <br>
                <div class="d-grid gap-2">
                    <a class="btn btn-success" href="nisa_myBooking.php" role="button">Book</a>
                </div>
            </div>
        </div>
    </form>
    </div>
    <!-- footer  -->
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <div class="navbar-nav" style="margin-left: auto; margin-right: auto">
            <span class="navbar-text">
                created by NISA AISYATUNNABILAH HASYIM - 1202200018
            </span>
            </div>
        </div>
    </nav>
  </body>
