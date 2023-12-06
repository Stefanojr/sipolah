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
                    <input type="text" class="form-control" id="name" readonly name="name"
                        value="{{ Auth::user()->name }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" readonly name="email"
                        value="{{ Auth::user()->email }}">
                </div>
                <div class="mb-3">
                    <label for="nomorhp" class="form-label">Nomor HP Aktif</label>
                    <input type="number" class="form-control" id="nomorhp" readonly value="{{Auth::user()->nomorhp}}" name="nomorhp">
                </div>
                <div class="col-mb-3">
                    <label>Kapasitas Sampah Organik (kg)</label>
                </div>
                <div class="col-mb-3 form-group">
                    <input type="number" class="form-control @error('kapasitas_organik') {{ 'is-invalid' }} @enderror" name="kapasitas_organik" value="{{ old('kapasitas_organik') }}">
                    @error('kapasitas_organik')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-mb-3">
                    <label>Kapasitas Sampah Anorganik (kg)</label>
                </div>
                <div class="col-mb-3 form-group">
                    <input type="number" class="form-control @error('kapasitas_anorganik') {{ 'is-invalid' }} @enderror" name="kapasitas_anorganik" value="{{ old('kapasitas_anorganik') }}">
                    @error('kapasitas_anorganik')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="petugas" class="form-label">Pilih Petugas</label>
                    <input type="text" class="form-control" id="petugas" name="petugas">
                </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal Pickup</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                    </div>

                    <div class="mb-3">
                        <label for="maps" class="form-label">Lokasi Sekarang</label>

                            <!-- Bootstrap CSS -->
                            <link rel="stylesheet" href="{{ asset('css/maps.css') }}">

                            <title>Maps</title>
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

                    <div class="mb-3">
                        <label for="maps" class="form-label">Lokasi Bank Sampah</label>
                        <!DOCTYPE html>
                        <html>
                        <head>
                            <!-- Bootstrap CSS -->
                            <link rel="stylesheet" href="{{ asset('css/maps.css') }}">

                            <title>Maps</title>
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
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary" onclick="showAlert()">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
    </body>

    </html>

@endsection
