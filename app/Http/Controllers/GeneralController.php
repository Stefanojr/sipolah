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
        $datalogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($datalogin)) {
            if (Auth::user()->role == 'petugas') {
                return redirect('/petugas/');
            } elseif (Auth::user()->role == 'banksampah') {
                return redirect('/banksampah/');
            }elseif (Auth::user()->role == 'pengguna') {
                return redirect('/pengguna/');
            }
             else {
                // Authentication failed
                return redirect('/login');
            }
        }


    }
}

