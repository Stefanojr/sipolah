<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .box div {
            margin-top: 25px;
            width: 100%;
            height: 50%;
        }
    </style>
</head>

<body>
    <div class="box">
        <div>
            <table border="1" cellspacing="0" cellpadding="5">
                <thead>
                    <tr>
                        <th scope="col">ID Transaksi</th>
                        <th scope="col">Tanggal Transaksi</th>
                        <th scope="col">Petugas</th>
                        <th scope="col">Nomor HP</th>
                        <th scope="col">Berat Organik</th>
                        <th scope="col">Berat An-Organik</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($d as $data)
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
    </div>

</body>

</html>
