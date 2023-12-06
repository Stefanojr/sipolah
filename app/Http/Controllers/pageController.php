<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class pageController extends Controller
{

    public function index(){
        return view('home');
    }

    public function contact()
    {
        return view('contact');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

}
