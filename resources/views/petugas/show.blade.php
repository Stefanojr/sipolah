@extends('petugas.layouts.main')

@section('title','DASHBOARD')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @include('layout.alert')
                <div class="card-body">

                    <form method="POST" action="{{ route('petugas.ambil') }}">
                        @csrf

                        <input type="text" name="sampah_id" id="sampah_id" value="{{ $data->id_buang }}" hidden>

                        <div class="mb-3">
                            <label for="tps" class="form-label">TPS</label>
                            <select class="form-control" name="tps">
                                @foreach ($dataTPS as $tps)
                                <option value="{{ $tps->id }}">{{ $tps->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="nomorhp" class="form-label">nomorhp</label>
                            <input type="text" class="form-control" value="{{ $data->nomorhp }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="kapasitas_organik" class="form-label">kapasitas_organik</label>
                            <input type="text" class="form-control" value="{{ $data->kapasitas_organik }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="kapasitas_anorganik" class="form-label">kapasitas_anorganik</label>
                            <input type="text" class="form-control" value="{{ $data->kapasitas_anorganik }}" readonly>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">
                            Ambil
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
