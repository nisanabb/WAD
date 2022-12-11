
@extends('component.navbar')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- Grid Systems -->
    @auth

    <div class="container text-center">
        <div class="row align-items-center">
            <!-- Kiri -->
            <div class="col">
                <h1 class="text-start">Selamat Datang Di <br> Show Room Nisa</h1>
                <!-- <p>Solusi penyewaan mobil Anda</p> -->
                <p class="text-start">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam tempore ea amet nobis, deleniti soluta laborum quo a et aperiam nulla!</p>
                <div class="text-start">
                <a class="btn btn-primary " href="/Listcar">MyCar</a>
                </div>
                <br>
                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <div class="text-start">
                                <img src="/images/logo-ead.png" alt="logo-ead" height="29" weidth="automatic">
                            </div>
                        </div>
                            <div class="col-8">
                                <div class="text-start text-muted fw-light">
                                Nisa_1202200018
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Kanan -->
            <div class="col">
                <img src="/images/toyota-supra.jpg" class="rounded" alt="logo-ead" width="Automatic" height="390">
            </div>
        </div>
    </div>
    @endauth

    @guest
    <div class="container text-center">
        <div class="row align-items-center">
            <!-- Kiri -->
            <div class="col">
                <h1 class="text-start">Selamat Datang Di <br> Show Room Nisa</h1>
                    <p class="text-start">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam tempore ea amet nobis, deleniti soluta laborum quo a et aperiam nulla!</p>
                        <div class="text-start">
                            <a class="btn btn-primary " href="/Listcar">MyCar</a>
                        </div>
                <!-- Logo & Nama -->
                <br>
                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <div class="text-start">
                                <img src="/images/logo-ead.png" alt="logo-ead" height="29" weidth="automatic">
                            </div>
                        </div>
                            <div class="col-8">
                                <div class="text-start text-muted fw-light">
                                Nisa_1202200018
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Kanan -->
            <div class="col">
                <img src="/images/toyota-supra.jpg" class="rounded" alt="logo-ead" width="Automatic" height="390">
            </div>
        </div>
    </div>
    @endguest





@endsection

</body>
</html>
