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
      transition: transform 0.3s;
      position: relative;
      background-color: rgb(235, 230, 240);
    }

    .card.full-card {
      position: absolute;
      top: 25%;
      left: 40%;
      transform: translate(-50%, -50%);
      z-index: 1;

    }

    .card.zoomed {
      transform: scale(1.8);

    }
  </style>
</head>

<body>
  <section class="card-container">
    @foreach($products as $product)
    @php
    $imagePath = is_array($product->images) ? $product->images[0] : $product->images;
    @endphp
    <div class="card" style="width: 18rem;">
      <img src="{{ asset('storage/'.$imagePath) }}" class="card-img-top" alt="{{ $product->name }}">
      <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
        <button class="btn btn-primary start-btn">Start</button>
      </div>
    </div>
    @endforeach
  

  </section>
  <script>
    const cards = document.querySelectorAll('.card');

    function startTimer() {
      let timeLeft = 30;
      const card = this.closest('.card');
      const startButton = this;
      startButton.disabled = true;

      card.classList.add('zoomed');
      // Toggle the full-card class on the selected card
      card.classList.toggle('full-card');
      // Start the countdown interval
      const countdownInterval = setInterval(() => {
        timeLeft--;
        if (timeLeft > 0) {
          // Update the button text with the remaining time
          startButton.innerText = `${timeLeft} sec`;
        } else {
          // When the countdown is finished
          clearInterval(countdownInterval);
          startButton.innerText = 'Start'; // Reset the button text
          startButton.disabled = false; // Enable the start button
          card.classList.toggle('full-card'); // Toggle the full-card class to restore normal card display
          card.classList.remove('zoomed');
        }
      }, 1000); // Update the countdown every 1 second
    }
    // Attach click event listeners to the start buttons
    const startButtons = document.querySelectorAll('.start-btn');
    startButtons.forEach(button => {
      button.addEventListener('click', startTimer);
    });
  </script>

</body>

</html>
@endsection