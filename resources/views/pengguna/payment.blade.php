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

        @if (!empty(Auth::user()->pilih))

        <h1 class="my-4">Form Pembayaran</h1>

        @if (session('flash_berhasil'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('flash_berhasil') }}</strong> Silahkan Lanjut ke Pembayaran
            {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"> --}}
                {{-- <span aria-hidden="true">&times;</span> --}}
            </button>
        </div>
        @endif

        <form action="history" method="get" action="/history">

            <div class="mb-5">
                <label for="name" class="form-label">Nama Pengguna</label>
                <input type="text" class="form-control" id="name" name="name" readonly value="{{Auth::user()->name}}">
            </div>
            <div class="mb-5">
                <label for="nominal" class="form-label">Langganan Yang Dipilih</label>
                @switch(Auth::user()->pilih->langganan)
                @case(2)
                <input type="text" class="form-control" name="nominal" value="Rp. 120,000" readonly>
                @break

                @case(3)
                <input type="text" class="form-control" name="nominal" value="Rp. 180,000" readonly>
                @break

                @case(4)
                <input type="text" class="form-control" name="nominal" value="Rp. 240,000" readonly>
                @break

                @default
                <input type="text" class="form-control" name="nominal" value="Rp. 65,000" readonly>
                @endswitch
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary" onclick="showAlert()">Buat Pesanan</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form>
        @else
        <div class="alert alert-error">
            <h1>Langganan anda sudah habis</h1>
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
