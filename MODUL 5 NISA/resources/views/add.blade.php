@extends('component.layout')

@section('content')
<section id='form'>
    <div class="container">
      <br>
      <br>
      <h1 class="tambahh1">Tambah Mobil</h1>
      <p class="tambahp text-muted">Tambah Mobil Baru Anda Ke List Show Room</p>
      <form action="{{ url('addCar') }}" method="POST" enctype="multipart/form-data">
        @auth
        @csrf
          <input type="text" value="{{ auth()->user()->id }}" style="display: none;" name="id_user">

          <div class="mb-3">
            <label for="nama" class="form-label">Nama Mobil</label>
            <input type="text" id="nama" name="name" class="form-control border border-3" placeholder="Masukkan Nama Mobil">
          </div>

          <div class="mb-3">
            <label for="pemilik" class="form-label">Nama Pemilik</label>
            <input type="text" id="pemilik" value="{{ auth()->user()->name }}" class="form-control border border-3" placeholder="Masukkan Nama Pemilik">
          </div>

          <div class="mb-3">
            <label for="merk" class="form-label">Merk</label>
            <input type="text" id="merk" name="brand" class="form-control border border-3" placeholder="Masukkan Merk Mobil">
          </div>

          <div class="mb-3">
            <label for="tanggalbeli" class="form-label">Tanggal Beli</label>
            <input type="date" id="tanggalbeli" name="purchase_date" class="form-control border border-3">
          </div>

          <div class="mb-3">
            <label for="desc" class="form-label">Deskripsi</label>
            <textarea id="desc" name="description" placeholder="Masukkan Deskripsi Mobil" class="form-control border border-3" rows="3"></textarea>
          </div>

          <div class="mb-3">
            <label for="inputGroupFile01" class="form-label">Foto</label>
            <input type="file" class="form-control border border-3" id="inputGroupFile01" name="image" style="height: 40px;">
          </div>

          <label for="status" class="form-label">Status Pembayaran</label>
          <span class="d-flex">
          <div class="form-check form-check-inline">
            <input type="radio" name="status" id="lunas" value="Lunas">
            <label for="lunas">Lunas</label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" name="status" id="belum" value="Belum Lunas">
            <label for="belum">Belum Lunas</label>
          </div>
          </span>
          <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Selesai</button><br><br>
        @endauth
      </form>
    </div>
  </section>
@endsection