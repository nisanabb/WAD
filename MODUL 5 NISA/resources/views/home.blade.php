@extends('component.layout')
@section('content')

<br>
<br>
<br>
<br>
<br>
<section id="home">
    <div class="container">
        <div class="d-flex gap-5 wrap justify-content-center align-items-center">
            <div>
                <h1>Welcome To Nisa<br>Show Room</h1>
                <p class="mt-3 text-muted fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum repudiandae harum eaque esse cum, tempore fugit porro quae magni atque!</p>
                <div class="d-flex  justify-content-lg-start mt-2">
                <a class="btn btn-primary " href="{{ '/login' }}">MyCar</a>
                </div>
                <div class="d-flex align-items-center gap-5 mt-3">
                <img src="/images/logo-ead.png" alt="logoead" style="width:100px;">
                <p class="text-muted" style="margin-top: 20px; font-size:14px;">NISA - 1202200018</p>
                </div>
            </div>
            <div class="col">
                <img src="/images/toyota-supra.jpg" class="rounded mx-auto d-block" alt="" style="width: 750px;height: 500px;">
            </div>
        </div>
    </div>
</section>
@endsection
