@extends('banksampah.layouts.main')
@section('title', 'DASHBOARD')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Petugas</title>
    <!-- Tambahkan stylesheet CSS sesuai kebutuhan Anda -->
    <link rel="stylesheet" href="{{ asset('css/maps.css') }}">
    <style>
        .container {
            display: flex;
            flex-direction: column;
        }

        .top {
            order: 1;
            margin-bottom: 20px;
        }

        #map-canvas {
            width: 100%;
            height: 400px;
            order: 2;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container mx-1 col-md-8">
        <div class="top">
            <header>
                <!-- Isi header sesuai kebutuhan Anda -->
            </header>

            <h2>Daftar Bank Sampah</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Bank Sampah (kg)</th>
                        <th>Kapasitas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>200</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div id="map-canvas"></div>
    </div>

    <div class="container mx-auto col-md-3 mb-3">
        <div class="mb-3">

            <!DOCTYPE html>
            <html>
            <head>
                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="{{ asset('css/maps.css') }}">

                <title>Lokasi Bank Sampah</title>
                <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
                <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
                <style>
                    #map-canvas {
                        width: 100%;
                        height: 400px;
                    }
                </style>
            </head>
            <body>
                <div id="map-canvas"></div>
                <script>
                    var map = L.map('map-canvas').setView([-7.785943619482843, 110.37836300972296], 8);
                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; <a href="https://www.google.com/maps/@-7.7860654,110.377561,18.55z?entry=ttu">OpenStreetMap</a> contributors'
                    }).addTo(map);
                </script>
                <!-- Bootstrap JS -->
                <script src="{{ asset('js/buang.js') }}"></script>
            </body>

            </html>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('js/maps.js') }}"></script>
</body>
</html>
@endsection
