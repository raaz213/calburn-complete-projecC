@extends('layout.main')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            background-image: url('https://cdn.pixabay.com/photo/2018/05/28/13/14/dumbell-3435990_640.jpg');
            background-size: 100%;

        }

        .card-container {
            display: flex;
            justify-content: flex-start;
            padding: 20px 80px;
            gap: 80px;
            text-align: center;
            flex-wrap: wrap;
        }

        .card {
            border: 2px solid rgb(22, 71, 230);
            margin: 20px 50px;
            box-shadow: 0 0 20px #ebf834;
            /* color: blue; */
        }

        .card-body {
            background-color: rgb(0, 255, 136);
        }
    </style>
</head>

<body>
    <div class="card-container">
        @foreach($categories as $category)
        @php
        $imagePath = is_array($category->images) ? $category->images[0] : $category->images;
        @endphp
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('storage/' . $imagePath) }}" class="card-img-top" alt="{{ $category->name }}">
            <div class="card-body">
                <h2 class="card-title">{{ $category->name }}</h2>
                <a href="/category/{{$category->slug}}" class="btn btn-primary">Let's Start</a>
            </div>
        </div>
        @endforeach

    </div>

</body>

</html>
@endsection