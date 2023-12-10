@extends('pengguna.layouts.main')
@section('title', 'AMBIL SAMPAH')
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
        <h1 class="my-4">Form Buang Sampah</h1>
        <form action="buang" method="post" action="/buang" id="buang">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Pengguna</label>
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
                <label for="nomorhp" class="form-label">Nama Petugas</label>
                <input type="text" class="form-control" name="petugas" placeholder="{{ $dataPetugas->name }}" readonly>
            </div>

            <div class="col-mb-3">
                <label>Kapasitas Sampah Organik (kg)</label>
            </div>
            <div class="col-mb-3 form-group">
                <input type="number" class="form-control @error('kapasitas_organik') {{ 'is-invalid' }} @enderror"
                    name="kapasitas_organik" value="{{ old('kapasitas_organik') }}">
                @error('kapasitas_organik')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-mb-3">
                <label>Kapasitas Sampah Anorganik (kg)</label>
            </div>
            <div class="col-mb-3 form-group">
                <input type="number" class="form-control @error('kapasitas_anorganik') {{ 'is-invalid' }} @enderror"
                    name="kapasitas_anorganik" value="{{ old('kapasitas_anorganik') }}">
                @error('kapasitas_anorganik')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal Pickup</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal">
            </div>

            <div class="mb-3">
                <label for="maps" class="form-label">Pilih Lokasi Bank Sampah</label>

                <title>Maps</title>
                <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
                    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
                <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
                    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
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
                        var map = L.map('map-canvas').setView([0, 0], 30);

                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '&copy; <a href="https://www.google.com/maps/@-7.7860654,110.377561,18.55z?entry=ttu">OpenStreetMap</a> contributors'
                        }).addTo(map);

                        navigator.geolocation.getCurrentPosition(function(position) {
                            var lat = position.coords.latitude;
                            var lon = position.coords.longitude;

                            console.log("lat: " + lat);
                            console.log("lon: " + lon);

                            map.setView([lat, lon], 18);
                            var userLocation = L.marker([lat, lon]).addTo(map);
                            userLocation.bindPopup('You are here!').openPopup();
                        });

                        var iconUrls = [
                            'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
                            'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
                            'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-gold.png',
                            'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-violet.png',
                        ];

                        var locations = <?php echo json_encode($dataPetugas); ?>;

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

                    <!-- Bootstrap JS -->
                    <script src="{{ asset('js/buang.js') }}"></script>
                </body>
                <br>

                <input type="text" name="petugas_lat" id="petugas_lat" value="{{ $dataPetugas->lat }}" hidden>
                <input type="text" name="petugas_lon" id="petugas_lon" value="{{ $dataPetugas->lon }}" hidden>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary" onclick="showAlert()">Next</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
</body>

</html>

@endsection
