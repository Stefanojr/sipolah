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
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Sampah Organik</h5>
                    <img src="https://waste4change.com/blog/wp-content/uploads/Composting-NYC-1024x756-1.jpg"
                        class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                        alt="">
                    <p class="card-text">Sampah organik adalah sampah yang berasal dari sisa mahkluk hidup yang mudah terurai secara alami tanpa proses campur tangan manusia untuk dapat terurai.</p>

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Sampah Anorganik</h5>
                    <img src="https://www.ruparupa.com/blog/wp-content/uploads/2021/09/Screen-Shot-2021-09-08-at-16.14.12.jpg"
                        class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                        alt="" width=575px>
                    <p class="card-text">Sampah anorganik adalah sampah yang tidak mudah membusuk, seperti plastik wadah pembungkus makanan, kertas, plastik mainan, botol dan gelas minuman, kaleng, kayu, dan sebagainya</p>

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
                        width: 900%;
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

                    navigator.geolocation.getCurrentPosition(function(position) {
                        var lat = position.coords.latitude;
                        var lon = position.coords.longitude;

                        map.setView([lat, lon], 18);
                        var userLocation = L.marker([lat, lon]).addTo(map);
                        userLocation.bindPopup('Kamu Disini!').openPopup();
                    });

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
     <!-- Bootstrap JS -->
     <script src="{{ asset('js/buang.js') }}"></script>

    </body>

    </html>
@endsection
