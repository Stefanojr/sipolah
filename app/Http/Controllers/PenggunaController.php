<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Charts\PieChartDashboard;
use App\buangsampah;
use App\User;
use App\Http\Controllers\Hash;


class PenggunaController extends Controller
{
    public function index()
    {
        $chart = new PieChartDashboard();
        return view('pengguna/dashboard', ['chart'=>$chart]);
    }


    public function buang(){
        return view('pengguna/buangsampah');
    }

    public function payment()
    {
        return view('pengguna/payment');
    }

    public function location()
    {
        return view('pengguna/location');
    }

    public function history()
    {
        return view('pengguna/history');
    }
   
    public function profile()
    {
        return view('pengguna/profile');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
    public function updateRolePg(Request $request)
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

    public function updateProfile(Request $request)
{
    // dd($request->all()); // Debugging line
    // dd($request->validated()); // Add this line for debugging
    // Ambil user berdasarkan ID
    $user = User::find(auth()->user()->id);

    // Validasi data yang diinputkan user
    $request->validate([
        'name' => 'required|string|max:255',
        'username' => 'required|string|max:255|unique:users,username,' . $user->id,
        'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        'nomorhp' => 'required|string|max:255',
        'password' => 'required|string|min:8|confirmed',
    ]);

    // Update data user
    $user->update([
        'name' => $request->input('name'),
        'username' => $request->input('username'),
        'email' => $request->input('email'),
        'nomorhp' => $request->input('nomorhp'),
        'password' => bcrypt($request->input('password')),
    ]);

    return redirect('/profile')->with('profil_berhasil', 'Profile Berhasil Diubah');
}


}
