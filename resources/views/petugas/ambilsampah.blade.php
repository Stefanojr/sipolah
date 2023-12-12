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
        <h1 class="text-center">Daftar Permintaan</h1>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID Transaksi</th>
                    <th scope="col">Tanggal </th>
                    <th scope="col">Petugas</th>
                    <th scope="col">Nomor Hp</th>
                    <th scope="col">Jenis Langganan</th>
                    <th scope="col">Berat Organik</th>
                    <th scope="col">Berat An-organik</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody id="jobTable">
                    <!-- Data transaksi akan ditampilkan disini -->
                    @foreach ($datas as $data)
                        <tr>
                            <td>{{ $data->id_buang }}</td>
                            <td>{{ $data->tanggal }}</td>
                            <td>{{ $data->petugas->name }}</td>
                            <td>{{ $data->petugas->nomorhp }}</td>
                            <td>
                                @php
                                    $type = Auth::user()->langganan->type;
                                @endphp

                                @if ($type == 1)
                                    1 bulan / Rp. 65,000
                                @elseif($type == 2)
                                    2 bulan / Rp. 120,000
                                @elseif($type == 3)
                                    3 bulan / Rp. 180,000
                                @elseif($type == 4)
                                    4 bulan / Rp. 240,000
                                @else
                                    Belum ada langganan
                                @endif
                            </td>
                            <td>{{ $data->kapasitas_organik }}</td>
                            <td>{{ $data->kapasitas_anorganik }}</td>
                            <td>{{ $data->status }}</td>
                            <td>{{ Button }}</td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
    <script src="app.js"></script>
</body>
</html>

@endsection
