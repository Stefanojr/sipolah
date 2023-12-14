<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Charts\PieChartDashboard;
use App\Charts\PieChartLok;
use App\Charts\PieChartLan;
use App\buangsampah;
use App\Langganan;
use App\Location;
use App\PetugasAmbil;
use App\PetugasVerived;
use App\User;
use App\UserLangganan;
use Illuminate\Support\Facades\Validator;

class PetugasController extends Controller
{
    public function indexptg()
    {
        $chart = new PieChartDashboard();
        $chart2 = new PieChartLok();
        $chart3 = new PieChartLan();
        $datasptg= User::where('role','petugas')->get();
        $dataspg = User::where('role','pengguna')->get();

        return view('petugas/indexptg' ,
    [
        'datasptg' => $datasptg,
        'dataspg' => $dataspg,
        'chart' => $chart,
        'chart2' => $chart2,
        'chart3' => $chart3
    ]);
    }


    public function datasampahPtg()
    {
        $datas = buangsampah::where('status', 1)->get();

        return view('banksampah/datasampah', [
            'datas' => $datas,
        ]);
    }

    public function tampung()
    {
        $datas = buangsampah::where('user_id', Auth::user()->id)->get();

        return view('pentugas/historyptg', [
            'datas' => $datas,
        ]);
    }

    public function postBuang()
    {
    }

    public function ambilsampah()
    {
        $datas = buangsampah::where([
            'status' => 0,
            'tps_id' => 0,
        ])->get();

        return view('petugas/ambilsampah', [
            'datas' => $datas
        ]);
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
        $datas = buangsampah::where('status', 2)->get();

        return view('petugas/historyptg', [
            'datas' => $datas,
        ]);
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
        Auth::user()->update([
            'role' => $request->input('role')
        ]);
        Auth::logout();

        // Redirect ke halaman login dengan pesan flash
        return redirect()->route('login')->with('success', 'Role berhasil diperbarui.');
    }

    public function ambil_sampah(Request $request)
    {
        $request->validate([
            'sampah_id' => 'required',
            'tps'       => 'required',
        ]);

        $data = buangsampah::where('id_buang', $request->sampah_id)->first();
        $data->status = 1;
        $data->tps_id = $request->tps;
        $data->save();

        // return back()->with('success', 'Berhasil diperbarui.');
        return redirect()->route('petugas.ambilsampah')
            ->with('success', 'Berhasil diperbarui.');
    }

    public function verived(Request $request)
    {
        $request->validate([
            'petugas_id' => 'required',
            'name'       => 'required',
            'email'      => 'required',
            'nomorhp'    => 'required',
        ]);

        $user = User::find(Auth::user()->id);
        $user->verived = 1;
        $user->save();

        return back()->with('success', 'Berhasil dikirim!');
    }

    public function ambilsampahid(Request $request)
    {
        $data = buangsampah::where('id_buang', $request->id)->first();

        $dataTPS = Location::all();

        return view('petugas.show', [
            'data'    => $data,
            'dataTPS' => $dataTPS,
        ]);
    }

    public function updateProfilePtg(Request $request)
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
        $user->password = bcrypt($request->password);

        $user->save();


        return back()->with([
            'success' => 'Profil Berhasil Di Update',
        ]);
    }


}
