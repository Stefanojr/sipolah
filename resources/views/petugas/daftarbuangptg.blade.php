@extends('petugas.layouts.main')
@section('title','Notification')
@section('content')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Form Buang Sampah</title>
    <style>
        body {
            background-color: #f1f1f1;
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: #fff;
            padding: 50px;
            border-radius: 20px;
        }

        .form-label {
            color: #333;
        }

        .btn-primary {
            background-color: #333;
            border-color: #333;
        }

        .btn-primary:hover {
            background-color: #555;
            border-color: #555;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1 class="my-4">Daftar Buang Sampah</h1>
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
        </div>
        @endif

        <form method="POST" action="{{ route('petugas.verived') }}" id="buang">
            @csrf

            <input type="text" name="petugas_id" id="petugas_id" value="{{ Auth::user()->id }}" hidden>

            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" readonly name="name" value="{{ Auth::user()->name }}">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" readonly name="email"
                    value="{{ Auth::user()->email }}">
            </div>

            <div class="mb-3">
                <label for="nomorhp" class="form-label">Nomor HP Aktif</label>
                <input type="number" class="form-control" id="nomorhp" readonly value="{{Auth::user()->nomorhp}}"
                    name="nomorhp">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary" onclick="showAlert()">Confirm</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
</body>

</html>


@endsection
