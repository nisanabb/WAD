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
            <a class="nav-link" href="nisa_booking.php">Booking</a>
        </div>
        </div>
        </div>
        </nav>
        <body>
            <?php
            $name = isset($_POST['name']) ? $_POST['name'] : '';
            $date = isset($_POST['date']) ? $_POST['date'] : '';
            $time = isset($_POST['time']) ? $_POST['time'] : '';
            $Duration = isset($_POST['Duration']) ? $_POST['Duration'] : '';
            $mobil = isset($_POST['mobil']) ? $_POST['mobil'] : '';
            $text = isset($_POST['text']) ? $_POST['text'] : '';
            if(!empty($_POST['check'])){
                // Loop to store and display values of individual checked checkbox.
            foreach($_POST['check'] as $selected){
            echo $selected."</br>";
                }
                }
        
            ?>
            
    
            <div class="container">
                <h5 class="text-center">Thank You Nisa Aisyatunnabilah_1202200018 for reserving</h5>
                <table class="table">
                    <thread>
                        <tr>
                            <th scope="col"><nisa_booking class="php"></nisa_booking></th>
                            <th scope="col">Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Car Type</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Service/s</th>
                        </tr>
                    </thread>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><?php echo $name ?></td>
                            <td><?php echo $date ?></td>
                            <td><?php echo $time ?></td>
                            <td><?php echo $Duration ?></td>
                            <td><?php echo $mobil ?></td>
                            <td><?php echo $text ?></td>
                            <td><?php echo $selected ?></td>
                        </tr>
                    </tbody>
                </table>
                <div class="mb-3">
                    <div class="d-flex justify-content-center">
                        <a href="nisa_booking.php" class="btn btn-outline-primary w-50"> Kembali</a>
                    </div>
                </div>
            </div>
        </body>
    </html>
