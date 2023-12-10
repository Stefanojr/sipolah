<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Charts\PieChartDashboard;
use App\buangsampah;
use Illuminate\Support\Facades\Validator;

class BuangController extends Controller
{
    public function buangsam(request $request)
    {
        // buangsampah::create([
        //     'name'    => $request->input('name'),
        //     'nomorhp' => $request->input('nomorhp'),
        //     'email'   => $request->input('email'),
        //     'jenis'   => $request->input('jenis'),
        //     'berat'   => $request->input('berat'),
        //     'tanggal' => $request->input('tanggal'),
        //     'alamat'  => $request->input('alamat'),
        // ]);

        $validator = Validator::make($request->all(), [
            'petugas_lat' => 'required',
            'petugas_lon' => 'required',
        ]);

        $data = buangsampah::create([
            'user_id'               => Auth::user()->id,
            'petugas_id'            => Auth::user()->langganan->petugas_id,
            'nomorhp'               => $request->nomorhp,
            'name'                  => $request->name,
            'email'                 => $request->email,
            'kapasitas_organik'     => $request->kapasitas_organik,
            'kapasitas_anorganik'   => $request->kapasitas_anorganik,
            'tanggal'               => $request->tanggal,
            'latitude_pengambilan'  => $request->petugas_lat,
            'longitude_pengambilan' => $request->petugas_lon,
        ]);

        return redirect('/payment')
            ->with('flash_berhasil', 'Input Berhasil');
    }
}
