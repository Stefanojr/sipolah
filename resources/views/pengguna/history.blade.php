@extends('pengguna.layouts.main')
@section('title','History')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Transaksi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            overflow: auto;
        }

        .container {
            display: grid;
            grid-template-rows: 1fr 300px 1fr;
            height: 100%;
        }

        .top,
        .bottom {
            padding: 20px;
        }

        .middle {
            padding: 20px;
        }

        header,
        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        main {
            padding: 20px;
        }

        .card {
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="top">
            <header>
                <h1>History Transaksi</h1>
            </header>

            <main>
                <div class="card">
                    <table id="transaction-table">
                        <thead>
                            <tr>
                                <th>ID Transaksi</th>
                                <th>Tanggal Transaksi</th>
                                <th>Petugas</th>
                                <th>Petugas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data transaksi akan ditampilkan disini -->
                            @foreach ($datas as $data)
                                <tr>
                                    <td>{{ $data->id_buang }}</td>
                                    <td>{{ $data->tanggal }}</td>
                                    <td>{{ $data->petugas->name }}</td>
                                    <td>{{ $data->petugas->nomorhp }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </main>
        </div>

        <div class="middle">
            <!-- Isi bagian tengah Anda di sini -->
        </div>

        <div class="bottom">
            <footer>
                SIPOLAH
            </footer>
        </div>
    </div>

    <script>
        function fetchTransactions() {
            // Tambahkan alamat server yang valid untuk mengambil data transaksi
            var serverURL = 'http://example.com/transactions';

            fetch(serverURL)
                .then(response => response.json())
                .then(data => {
                    var table = document.getElementById('transaction-table');
                    data.forEach(transaction => {
                        var row = table.insertRow();
                        var id = row.insertCell();
                        var date = row.insertCell();
                        var total = row.insertCell();

                        id.textContent = transaction.id;
                        date.textContent = transaction.date;
                        total.textContent = transaction.total;
                    });
                })
                .catch(error => {
                    console.error('Error fetching transactions:', error);
                });
        }

        fetchTransactions();


    </script>
</body>

</html>


@endsection
