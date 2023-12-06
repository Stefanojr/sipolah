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
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody id="jobTable">
                <!-- Isi tabel akan ditambahkan oleh JavaScript -->
            </tbody>
        </table>
    </div>
    <script src="app.js"></script>
</body>
</html>

@endsection
