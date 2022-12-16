@extends('component.layout')
@section('list')
    active
@endsection
@section('content')
<!-- Content -->
<section id="list">
    <div class="container">
      <div>
        <br>
        <br>
        <h1>My Show Room</h1>
        <p class="text-muted">List Showroom Nisa - 1202200018</p>
        <div class="d-flex gap-5">
          @foreach ($showroom as $row)
            <div class='card cardcontent' style='width: 18rem;'>
            <a href="{{ url('storage/'.$row->image)}}"></a>
            <img src='/images/bmw.jpeg' class='card-img-top rounded mx-auto d-block' alt='fotomobil' style='padding: 20px;'>
            <!-- <img src='{{ url('storage/'.$row->image)}}' class='card-img-top' alt='fotomobil' style='padding: 16px;'> -->
            <div class='card-body'>
                <h5 class='card-title'>{{ $row->name }}</h5>
                <p class='card-text'>{{ $row->description }}</p>
                <span class='d-flex gap-2'>
                  <a href='{{ '/detail/'.$row->id }}' class='btn btn-success' style='border-radius: 100px; width:140px; height: 36px;'>Detail</a>
                  <!-- delete -->
                  <form action='{{ url('list/'.$row->id) }}' method='POST'>
                    @csrf
                    @method('DELETE')
                    <button type='submit' class='btn btn-danger' style='border-radius: 100px; width:140px; height: 36px;'>Delete</button>
                  </form>
                </span>
            </div>
            </div>
          @endforeach
        </div>  
      </div>
    </div>
  </section>
<!-- Content End -->
@endsection