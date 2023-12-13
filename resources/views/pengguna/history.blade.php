@extends('pengguna.layouts.main')
@section('title', 'History')
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

<div class="container">
    <div class="top">
        <header>
            <h1>History Transaksi</h1>

            <body>
                <div class="middle">
                    <label for="start-date">Start Date:</label>
                    <input type="date" id="start-date" name="start-date">

                    <label for="end-date">End Date:</label>
                    <input type="date" id="end-date" name="end-date">

                    <button onclick="filterTransactions()">Filter</button>
                </div>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
                <!-- Add this button inside your .top section, for example, after the "Filter" button -->
                <a class="btn btn-primary" href="{{ route('pengguna.invoice') }}"
                    role="button">
                    Generate PDF
                </a>
        </header>
        @if (session('flash_ss'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('flash_ss') }}</strong>
        </div>
        @endif
        <main>
            <div class="card">
                <table id="transaction-table">
                    <thead>
                        <tr>
                            <th>ID Transaksi</th>
                            <th>Tanggal Transaksi</th>
                            <th>Petugas</th>
                            <th>Nomor Hp</th>
                            <th>Berat Organik</th>
                            <th>Berat An-Organik</th>
                            <th>Status</th>
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
                            <td>{{ $data->kapasitas_organik }}</td>
                            <td>{{ $data->kapasitas_anorganik }}</td>
                            @switch($data->status)

                            @case(1)
                            <td><span class="badge text-bg-danger">Waiting</span></td>
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
            // Your existing code to fetch transactions
        }

        function filterTransactions() {
            var startDate = document.getElementById('start-date').value;
            var endDate = document.getElementById('end-date').value;

            // Tambahkan alamat server yang valid untuk mengambil data transaksi
            var serverURL = 'http://example.com/transactions';

            fetch(serverURL + '?start_date=' + startDate + '&end_date=' + endDate)
                .then(response => response.json())
                .then(data => {
                    var table = document.getElementById('transaction-table');
                    // Clear existing rows
                    table.getElementsByTagName('tbody')[0].innerHTML = '';

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


</script>

<script>
    function generatePDF() {
            var doc = new jsPDF();
            var table = document.getElementById('transaction-table');

            // Header
            var headers = [];
            for (var i = 0; i < table.rows[0].cells.length; i++) {
                headers[i] = table.rows[0].cells[i].textContent;
            }

            // Data
            var data = [];
            for (var i = 1; i < table.rows.length; i++) {
                var row = [];
                for (var j = 0; j < table.rows[i].cells.length; j++) {
                    row[j] = table.rows[i].cells[j].textContent;
                }
                data.push(row);
            }

            // AutoTable plugin to create a table in the PDF
            doc.autoTable({
                head: [headers],
                body: data,
            });

            // Save the PDF or open in a new tab
            doc.save('TransactionHistory.pdf');
        }
</script>

</body>

</html>


@endsection
