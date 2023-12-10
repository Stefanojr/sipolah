<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PetugasController extends Controller
{
    public function indexptg(){
    return view('petugas/indexptg');
    }

    public function postBuang(){

    }

    public function ambilsampah()
    {
        return view('petugas/ambilsampah');
    }

    public function paymentptg()
    {
        return view('petugas/paymentptg');
    }
    public function daftarbuangptg()
    {
        return view('petugas/daftarbuangptg');
    }

    public function historyptg()
    {
        return view('petugas/historyptg');
    }
    public function profileptg()
    {
        return view('petugas/profileptg');
    }
    public function logoutptg(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
    public function updateRolePtg(Request $request)
    {
        // Validasi request jika diperlukan
        $request->validate([
            'role' => 'required|string',
        ]);

        // Update data role di database
        Auth::user()->update(['role' => $request->input('role')]);

        // Redirect ke halaman login dengan pesan flash
        return redirect()->route('login')->with('success', 'Role berhasil diperbarui.');
    }

}
