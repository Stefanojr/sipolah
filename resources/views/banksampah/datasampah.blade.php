@extends('banksampah.layouts.main')
@section('title','Data Sampah')
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
                    <th scope="col">#</th>
                    <th scope="col">Nama Pengguna</th>
                    <th scope="col">Nama Petugas</th>
                    <th scope="col">Tangal Pengambilan</th>
                    <th scope="col">Kapasitas Organik</th>
                    <th scope="col">Kapasitas Anorganik</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody id="jobTable">
                <!-- Isi tabel akan ditambahkan oleh JavaScript -->
                @foreach ($datas as $data)
                <tr>
                    <td>{{ $data->id_buang }}</td>
                    <td>{{ $data->pengguna->name }}</td>
                    <td>{{ $data->petugas->name }}</td>
                    <td>{{ $data->tanggal }}</td>
                    <td>{{ $data->kapasitas_organik }}</td>
                    <td>{{ $data->kapasitas_anorganik }}</td>
                    @switch($data->status)

                    @case(1)
                    <td><span class="badge text-bg-danger">Waiting</span></td>
                    <td>
                        <form method="POST" action="{{ route('bank.boleh') }}">
                            @csrf
                            <input type="text" name="sampah_id" id="sampah_id" value="{{ $data->id_buang }}" hidden>

                            <button type="submit" class="btn btn-primary btn-block">
                                Bolehkan
                            </button>
                        </form>

                    </td>
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
