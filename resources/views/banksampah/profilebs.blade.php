@extends('banksampah.layouts.main')
@section('title', 'Profile')
@section('content')


<div class="container rounded bg-light mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                    width="150px"
                    src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                    class="font-weight-bold">{{Auth::user()->name}}</span><span
                    class="text-black-50">{{Auth::user()->email}}</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right"><i class="bi bi-person-check"></i> Profile Settings</h4>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </div>
                @endif

                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                </div>
                @endif
                <form method="POST" action="{{ route('profile.updateBs') }}">
                    @csrf
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Nama</label>
                            <input type="text" name="name" class="form-control" placeholder="Masukkan Nama" value="{{Auth::user()->name}}">
                        </div>

                        <div class="col-md-12">
                            <label class="labels">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Masukkan Username" value="{{Auth::user()->username}}">
                        </div>

                        <div class="col-md-12">
                            <label class="labels">Email</label>
                            <input type="email" name="email" class="form-control"
                                placeholder="Masukkan Email" value="{{Auth::user()->email}}"></div>
                        <div class="col-md-12"><label class="labels">Password</label><input type="password" name="password"
                                class="form-control" placeholder="Masukkan Password" value="{{Auth::user()->password}}">
                        </div>
                    </div>

                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">

                <h4><i class="bi bi-briefcase-fill"></i> Ubah Role</h4> <br />

                <form id="updateRoleForm" method="POST" action="{{ route('update-roleBs') }}">
                    @csrf
                    <input type="hidden" name="role" id="roleInput" value="">
                </form>

                <a href="javascript:void(0);" onclick="changeRole('petugas')" class="btn btn-primary btn-lg mb-3">
                    <i class="bi bi-caret-right"></i> Petugas
                </a>

                <a href="javascript:void(0);" onclick="changeRole('Pengguna')" class="btn btn-secondary btn-lg mb-3">
                    <i class="bi bi-caret-right"></i> Pengguna
                </a>

            </div>
        </div>
    </div>
</div>

@endsection
