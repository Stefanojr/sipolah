@extends('petugas.layouts.main')

@section('title','Ambil Sampah')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pekerjaan</title>
    <br>

</head>

<body>
    <div class="container">

        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong> Silahkan Lanjut Login
        </div>
        @endif

        <h1 class="text-center">Daftar Permintaan</h1>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID Transaksi</th>
                    <th scope="col">Tanggal </th>
                    <th scope="col">Petugas</th>
                    <th scope="col">Nomor Hp</th>
                    <th scope="col">Berat Organik</th>
                    <th scope="col">Berat An-organik</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody id="jobTable">
                @foreach ($datas as $data)
                <tr>
                    <td>{{ $data->id_buang }}</td>
                    <td>{{ $data->tanggal }}</td>
                    <td>{{ $data->petugas->name }}</td>
                    <td>{{ $data->nomorhp }}</td>
                    <td>{{ $data->kapasitas_organik }}</td>
                    <td>{{ $data->kapasitas_anorganik }}</td>
                    @switch($data->status)

                    @case(1)
                    <td><span class="badge text-bg-danger">Waiting</span></td>
                    @break

                    @case(2)
                    <td><span class="badge text-bg-danger">Sudah</span></td>
                    @break

                    @default
                    <td><span class="badge text-bg-danger">Belum</span></td>
                    @endswitch
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="app.js"></script>
</body>

</html>

@endsection
