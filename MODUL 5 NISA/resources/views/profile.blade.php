@extends('component.layout')

@section('content')
<section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card p-5" >
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block"><br><br>
                                <img src="/images/mobil.jpg" alt="login image" class="rounded mx-auto d-block img-fluid h-80 img-fill"/>
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <i class="fas fa-cubes fa-2x me-3"></i>
                                        <span class="h1 fw-bold mb-0">Account</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3">Your account information</h5>
                                    <form action="{{ '/profile/'.$user->id  }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                        <div class="form-floating mb-3">
                                            <input type="text" name="username" id="username"
                                                value="{{ $user->email }}" class="form-control">
                                            <label for="dummy1">Email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="name" value="{{ $user->name }}"
                                                id="nama" class="form-control">
                                            <label for="nama">Nama</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="no_hp" value="{{ $user->no_hp }}"
                                                id="nohp" class="form-control">
                                            <label for="nohp">Nomor Handphone</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="password" name="password" placeholder="Kata Sandi"
                                              id="password" class="form-control">
                                            <label for="password">Kata Sandi</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="password" name="password" placeholder="Konfirmasi Kata Sandi"
                                              id="password" class="form-control">
                                            <label for="password">Konfirmasi Kata Sandi</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
                                    <div class="d-flex align-items-center gap-5 mt-4">
                                      <img src="/images/logo-ead.png" alt="logoead" style="width:100px;">
                                      <p class="text-muted" style="margin-top: 20px; font-size:14px;">Nisa - 1202200018</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection