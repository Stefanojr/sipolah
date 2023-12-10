<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Charts\PieChartDashboard;
use App\buangsampah;


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

        $data = buangsampah::create([
            'nomorhp'               => $request->nomorhp,
            'name'                   => $request->name,
            'email' => $request->email,
            'kapasitas_organik' => $request->kapasitas_organik,
            'kapasitas_anorganik' => $request->kapasitas_anorganik,
            'tanggal' => $request->tanggal,
            'latitude_pengambilan',
            'longitude_pengambilan',
        ]);

        return redirect('/payment')->with('flash_berhasil', 'Input Berhasil');
    }
}
