<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Charts\PieChartDashboard;

class BanksampahController extends Controller
{
    public function indexbs()
        {
        $chart = new PieChartDashboard();
        return view('banksampah/indexbs', ['chart'=>$chart]);
        }

        public function datasampah()
        {
            return view('banksampah/datasampah');
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
            return view('banksampah/historybs');
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

        // Redirect ke halaman login dengan pesan flash
        return redirect()->route('login')->with('success', 'Role berhasil diperbarui.');
    }

}




