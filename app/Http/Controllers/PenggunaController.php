<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Charts\PieChartDashboard;
use App\buangsampah;
use App\User;
use App\Http\Controllers\Hash;
use App\UserLangganan;
use Illuminate\Support\Facades\Validator;

class PenggunaController extends Controller
{
    public function index()
    {
        $chart = new PieChartDashboard();
        return view('pengguna/dashboard', ['chart' => $chart]);
    }


    public function buang()
    {
        if (empty(Auth::user()->langganan)) {
            return redirect()->route('pengguna.pilih');
        }

        $dataPetugas = User::find(Auth::user()->langganan->petugas_id)->first();
        $banksampah = User::where('role', 'banksampah')->get();

        return view('pengguna/buangsampah', [
            'dataPetugas' => $dataPetugas,
            'banksampah'  => $banksampah,
        ]);
    }

    public function payment()
    {
        return view('pengguna/payment');
    }

    public function postPayment(Request $request)
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

    /**
     *
     */
    public function pilih()
    {

        $dataPetugas = User::where('role', 'petugas')->get();

        return view('pengguna.pilih', [
            'dataPetugas'   => $dataPetugas,
            // 'dataLangganan' => $dataLangganan,
        ]);
    }

    /**
     *
     */
    public function postPilih(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'petugas'   => 'required',
            'langganan' => 'required',
        ]);

        $data = UserLangganan::create([
            'user_id'    => Auth::user()->id,
            'petugas_id' => $request->petugas,
            'type'       => $request->type,
        ]);

        return redirect()->route('pengguna.pilih')->with([
            'status' => 'Berhasil menambahkan',
        ]);
    }
}
