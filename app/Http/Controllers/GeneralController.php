<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class GeneralController extends Controller
{
    public function postregister(Request $request)
    {

        // Create a new user
        User::create([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'nomorhp' => $request->input('nomorhp'),
            'password' => bcrypt($request->input('password')),
        ]);
        return redirect('/login')->with('flash_berhasil', 'Register Berhasil');
    }

    public function postlogin(Request $request)
    {
        // $datalogin = [
        //     'email'    => $request->email,
        //     'password' => $request->password,
        // ];

        $datalogin = $request->only('email', 'password');

        if (!Auth::attempt($datalogin)) {
            return back()->withErrors([
                'message' => 'Username dan Password Yang Dimasukan Salah',
            ])->onlyInput('username');
        }

        switch (Auth::user()->role) {
            case "petugas":
                // return redirect('/petugas/');
                return redirect()->intended('petugas');
                break;
            case "banksampah":
                return redirect('/banksampah/');
                break;
            case "pengguna":
                return redirect('/pengguna/');
                break;
            default:
                return redirect('/login');
        };
    }
}
