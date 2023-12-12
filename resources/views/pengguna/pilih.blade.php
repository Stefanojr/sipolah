@extends('pengguna.layouts.main')

@section('title','Payment')

@section('content')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Form Pembayaran</title>
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
        <h1 class="my-4">Form Pilih Petugas</h1>

        @if (session('flash_berhasil'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('flash_berhasil') }}</strong> Silahkan Lanjut ke Pembayaran
            </button>
        </div>
        @endif

        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif

        @if (Auth::user()->LanggananExpire->isPast())
        <form method="POST" action="{{ route('pengguna.add') }}">
            @csrf

            <div class="mb-3">
                <label for="petugas">Pilih Petugas</label>
                <select class="form-control" name="petugas" id="petugas">
                    @foreach ($dataPetugas as $petugas)
                    <option value="{{ $petugas->id }}">{{ $petugas->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="langganan">Pilih Langganan</label>
                <select class="form-control" name="langganan" id="langganan">
                    <option value="30">1 bulan / Rp. 65,000</option>
                    <option value="60">2 bulan / Rp. 120,000</option>
                    <option value="90">3 bulan / Rp. 180,000</option>
                    <option value="120">4 bulan / Rp. 240,000</option>
                </select>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary" onclick="showAlert()">Bayar</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form>
        @else
        <div class="mb-3">
            <label for="name" class="form-label">Langganan Expire</label>
            <input type="datetime" class="form-control" name="nominal" value="{{ Auth::user()->LanggananExpire }}" readonly>
        </div>
        @endif

        <script>
            function showAlert() {
           alert("Data pembayaran anda telah berhasil dikirim.");
        }
        </script>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
</body>

</html>

@endsection
