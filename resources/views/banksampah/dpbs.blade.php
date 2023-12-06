@extends('banksampah.layouts.main')
@section('title', 'Pembayaran')
@section('content')


    <div class=" d-flex w-100 mt-9">
        <div class="col-md-9">
            <div><strong>DATA PEMBAYARAN</strong></div>

            <div class="col-md-9">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tanggal Bayar</th>
                            <th scope="col">Nominal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>11/11/2023</td>
                            <td>Rp. 20.000</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>12/11/2023</td>
                            <td>Rp. 30.000</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>13/11/2023</td>
                            <td>Rp. 15.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

        @endsection
