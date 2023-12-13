@extends('petugas.layouts.main')
@section('title','DASHBOARD')
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

            <h2>Data Petugas</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Nomor Telepon</th>
                        <!-- Tambahkan kolom lain sesuai kebutuhan -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($datasptg as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->nomorhp }}</td>

                        </tr>
                        @endforeach
                        <!-- Tambahkan data petugas lainnya -->
                    </tr>
                    <!-- Tambahkan baris lain sesuai jumlah data petugas -->
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
            <table>

            </table>

            <body>
                <div id="map-canvas"></div>
                <script>
                    var map = L.map('map-canvas').setView([-7.785943619482843, 110.37836300972296], 8);
                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; <a href="https://www.google.com/maps/@-7.7860654,110.377561,18.55z?entry=ttu">OpenStreetMap</a> contributors'
                    }).addTo(map);

                    navigator.geolocation.getCurrentPosition(function(position) {
                        var lat = position.coords.latitude;
                        var lon = position.coords.longitude;

                        map.setView([lat, lon], 18);
                        var userLocation = L.marker([lat, lon]).addTo(map);
                        userLocation.bindPopup('Kamu Disini!').openPopup();
                    });

                    var iconUrls = [
                        'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
                        'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
                        'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-gold.png',
                        'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-violet.png',
                    ];

                    var locations = <?php echo json_encode($dataspg); ?>;

                    locations.forEach(e => {
                        var randomIconUrl = iconUrls[Math.floor(Math.random() * iconUrls.length)];

                        var greenIcon = new L.Icon({
                            iconUrl: randomIconUrl,
                            shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                            iconSize: [25, 41],
                            iconAnchor: [12, 41],
                            popupAnchor: [1, -34],
                            shadowSize: [41, 41]
                        });

                        L.marker([
                            e.lat,
                            e.lon
                        ], {
                            icon: greenIcon
                        }).addTo(map).bindPopup(e.name).openPopup();
                    });
                </script>
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
