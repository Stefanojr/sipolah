@extends('banksampah.layouts.main')
@section('title','Location')
@section('content')

<!DOCTYPE html>
<html>
 <head>

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="{{ asset('css/maps.css') }}">

    <title>Maps</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <style>
        #map-canvas { width: 100%; height: 400px; }
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



@endsection
