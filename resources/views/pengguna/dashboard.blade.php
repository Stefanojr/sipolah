@extends('pengguna.layouts.main')
@section('title', 'DASHBOARD')
@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 10;
                padding: 10;
            }

            .container {
                display: grid;
                grid-template-rows: 1fr 300px 1fr;
                height: 100vh;
            }

            .top,
            .bottom {
                padding: 50px;
            }

            .middle {
                padding: 50px;
            }

            header,
            footer {

                color: white;
                padding: 40px;
                text-align: center;
            }

            main {
                padding: 20px;
            }

            .card {
                background-color: #f8f8f8;
                border: 1px solid #ddd;
                border-radius: 10px;
                padding: 50px;
                margin-top: 10px;
                margin-bottom: 10px;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Pie Chart</div>

                        <div class="card-body">
                            {!! $chart->container() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {!! $chart->script() !!}
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Sampah Anorganik</h5>
                    <img src="https://i.pinimg.com/564x/c2/79/b0/c279b003823f86080ee45ad7b5a31513.jpg"
                        class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                        alt="">
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                </div>
            </div>
        </div>
        </div>
        </header>

        <main>

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
                <script src="{{ asset('js/maps.js') }}"></script>

            </body>

            </html>
        </main>
        </div>

        <div class="middle">
            <!-- Isi bagian tengah Anda di sini -->
        </div>

        <div class="bottom">
            <footer>
                <!-- Tampilkan informasi kontak atau informasi hak cipta di sini -->
            </footer>
        </div>
        </div>
    </body>

    </html>
@endsection
