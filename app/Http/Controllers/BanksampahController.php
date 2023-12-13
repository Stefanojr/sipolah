<?php

namespace App\Http\Controllers;

use App\buangsampah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Charts\PieChartDashboard;
use App\Location;
use Illuminate\Support\Facades\Validator;
use App\User;

class BanksampahController extends Controller
{
    public function indexbs()
    {
        $chart = new PieChartDashboard();

        $datas = Location::all();

        return view('banksampah/indexbs', [
            'chart' => $chart,
            'datas' => $datas,
        ]);
    }

    public function datasampah()
    {
        $datas = buangsampah::where('status', 1)->get();

        return view('banksampah/datasampah', [
            'datas' => $datas,
        ]);
    }

    public function dpbs()
    {
        return view('banksampah/dpbs');
    }

    public function locbs()
    {
        return view('banksampah/locbs');
    }

    public function historybs()
    {
        $data = buangsampah::all();

        return view('banksampah/historybs', [
            'datas' => $data,
        ]);
    }

    public function profilebs()
    {
        return view('banksampah/profilebs');
    }
    public function logoutbs(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
    public function updateRoleBs(Request $request)
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

    public function boleh(Request $request)
    {
        $request->validate([
            'sampah_id' => 'required',
        ]);

        $data = buangsampah::where('id_buang', $request->sampah_id)->first();
        $data->status = 2;
        $data->save();

        return redirect()->route('bank.data')->with('success', "Berhasil");
    }

    public function updateProfileBs(Request $request)
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
