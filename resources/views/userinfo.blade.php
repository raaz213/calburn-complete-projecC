@extends('layout.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>User Information</h2>
        <div class="card">
            <div class="card-header">
                Profile Details
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Name:</label>
                    <div class="col-sm-10">
                        <p class="form-control-plaintext">{{ Auth::user()->name }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                        <p class="form-control-plaintext">{{ Auth::user()->email }}</p>
                    </div>
                </div>
                <!-- Add more fields as necessary -->
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Joined:</label>
                    <div class="col-sm-10">
                        <p class="form-control-plaintext">{{ Auth::user()->created_at->format('d M Y') }}</p>
                    </div>
                </div>
                <!-- If you have a profile picture -->
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Profile Picture:</label>
                    <div class="col-sm-10">
                        <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="Profile Picture" class="img-thumbnail rounded-5" width="250" height="250">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

@endsection