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
        if (Auth::user()->LanggananExpire->isPast()) {
            return redirect()->route('pengguna.pilih');
        }

        $dataPetugas = User::find(Auth::user()->langganan->petugas_id)->first();

        return view('pengguna/buangsampah', [
            'dataPetugas' => $dataPetugas,
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
        $datas = buangsampah::where('user_id', Auth::user()->id)->get();

        return view('pengguna/history', [
            'datas' => $datas,
        ]);
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
        Auth::logout();

        // Redirect ke halaman login dengan pesan flash
        return redirect()->route('login')->with('success', 'Role berhasil diperbarui.');
    }

    public function updateProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'     => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);


        $user = User::find(auth()->user()->id);

        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();


        return back()->with([
            'success' => 'Profil Berhasil Di Update',
        ]);
    }

    /**
     *
     */
    public function pilih()
    {
        $dataPetugas = User::where('role', 'petugas')->get();

        return view('pengguna.pilih', [
            'dataPetugas'   => $dataPetugas,
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

        $user = User::where('id', Auth::user()->id)->first();
        $user->LanggananExpire = \Carbon\Carbon::now()->addDays((int) $request->langganan);
        $user->save();

        return redirect()->route('pengguna.pilih')->with([
            'status' => 'Berhasil menambahkan',
        ]);
    }
}
