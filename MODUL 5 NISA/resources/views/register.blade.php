
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <div class="container text-start">
          <div class="row">
            <div class="col">
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
            <img src="/images/typer.jpg" class="rounded" alt="" width="Automatic" height="390" >
            </div>
            <!-- Kanan -->
            <div class="col">
            <br>
            <br>
            <br>
            <br>
            <br>

            <div class="">
                <h2 class="text-start">Register</h2>

            </div>

            <form action="{{ route('register.action') }}"  method="POST" enctype="multipart/form-data">
              @csrf
                <!-- Nama Mobil -->
                <div class="mb-3">
                    <label for="Register" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email"  placeholder="example@mail.com">
                </div>

                <!-- Nama Mobil -->
                <div class="mb-3">
                    <label for="nama_mobil" class="form-label">Nama </label>
                    <input type="text" class="form-control" id="nama" name="nama"  placeholder="">
                </div>

                <!-- Phone Number -->
                <div class="mb-3">
                    <label for="merk_mobil" class="form-label">Phone Number</label>
                    <input type="phone" class="form-control" name ="no_hp" id="no_hp"  placeholder="+64">
                </div>

                <!-- Paswprd -->
                <div class="mb-3">
                    <label for="tanggal_beli" class="form-label">Password</label>
                    <input type="password" class="form-control" name ="password" id="password" placeholder="Use Strong Password">
                </div>

                <!-- Confirm Pass -->
                <div class="mb-3">
                    <label for="tanggal_beli" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name ="password_confirm" id="password_confirm" placeholder="Use Strong Password">
                </div>
                <!-- Submit -->
                <br>
                  <button type="submit" class="btn btn-primary" role="button" value="submit" name="submit">Daftar</button>
                </form>
                <div>
                  <br>
                  <p>Sudah Punya Akun ?</p>
                  <a href="{{ route('login') }}"> Login</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    </body>
</html>
