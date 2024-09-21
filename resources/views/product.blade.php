@extends('layout.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  {{-- <style>
    body {
      background-color: grey;
    }
    .card-container {
      display: flex;
      justify-content: flex-start;
      padding: 15px 60px;
      gap: 20px;
      text-align: center;
      flex-wrap: wrap;
    }
    .card {
      border: 2px solid black;
      background-color: rgb(235, 230, 240);
      width: 38rem;
      height: 35rem;
      
    }
    .card img, .card embed {
      width: 100%;
      height: auto;
    }
  </style> --}}
</head>
<body>
  <section class="card-container">
    @foreach($products as $product)
    @php
    $imagePath = is_array($product->images) ? $product->images[0] : $product->images;
    @endphp
    <div class="card">
      <a href="{{ asset('storage/'.$imagePath) }}" target="_blank">
        @if (pathinfo($imagePath, PATHINFO_EXTENSION) == 'pdf')
        <embed src="{{ asset('storage/'.$imagePath) }}" type="application/pdf" height="800px" width="100%" />
        @else
        <img src="{{ asset('storage/'.$imagePath) }}" alt="{{ $product->name }}">
        @endif
      </a>
      <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
      </div>
    </div>
    @endforeach
  </section>
</body>
</html>
@endsection
