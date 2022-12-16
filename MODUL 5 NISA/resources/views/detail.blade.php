@extends('component.layout')

@section('content')
<section id='detail'>
  <div class="container px-4 text-start">
    <div class="row gx-5">
      <div class="col">
      @auth
      <br>
          <h1 class='tambahh1'>{{ $showroom->name }}</h1>
          <p class='tambahp'>Detail Mobil {{ $showroom->name }}</p>
          <div class='d-flex justify-content-center align-items-start gap-5 mt-5'>
            <img src='/images/bmw.jpeg' alt='foto_mobil' class="rounded mx-auto d-block" style="width: 750px;height: 500px;">
            <!-- <img src='{{ url('storage/'.$showroom->image) }}' alt='foto_mobil'> -->
            <form action='{{ url('/detail/'.$showroom->id) }}' method="POST" enctype='multipart/form-data'>
              @csrf
              @method('PUT')

              <div class="mb-3">
                <label for='nama'>Nama Mobil</label>
                <input type='text' id='name' name='name' value='{{ $showroom->name }}' class="form-control border border-3">
              </div>
              
              <div class="mb-3">
                <label for='pemilik'>Nama Pemilik</label>
                <input type='text' id='pemilik' name='pemilik' value='{{ auth()->user()->name }}' class="form-control border border-3">
              </div>

              <div class="mb-3">
                <label for='merk'>Merk</label>
                <input type='text' id='merk' name='brand' value='{{ $showroom->brand }}' class="form-control border border-3">
              </div>

              <div class="mb-3">
                <label for='tanggalbeli'>Tanggal Beli</label>
                <input type='date' id='tanggalbeli' name='purchase_date' value='{{ $showroom->purchase_date }}' class="form-control border border-3">
              </div>

              <div class="mb-3">
                <label for='desc'>Deskripsi</label>
                <textarea id='desc' name='description' class="form-control border border-3" rows="3"> {{ $showroom->description }} </textarea>
              </div>
              
              <div class="mb-3">
                <label for='inputGroupFile01'>Foto</label>
                <input type='file' class='form-control' id='inputGroupFile01' name='gambar' style='height: 40px;'>
              </div>

              <label for='status'>Status Pembayaran</label>
              <span class='d-flex'>
              <div class="form-check form-check-inline">
                <input type='radio' name='status' id='lunas' value='Lunas' {{ (($showroom->status == 'Lunas') ? 'checked="checked"' : "")  }} style='width: 15px; height: 15px; margin-right:10px;'>
                <label for='lunas' style='margin-top: 15px; margin-right:10px;'>Lunas</label>
              </div>
              <div class="form-check form-check-inline">
                <input type='radio' name='status' id='belum' value='Belum Lunas' {{ (($showroom->status == 'Belum Lunas') ? 'checked="checked"' : "")  }} style='width: 15px; height: 15px; margin-right:10px;'>
                <label for='belum' style='margin-top: 15px;'>Belum Lunas</label>
              </div>
              </span>
              <button type="submit" class='btn btn-primary' style='margin-top: 20px;'>Edit</button><br><br><br>
            </form>
          </div>
        @endauth
    </div>
  </section>
@endsection