<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function index()
    {
    // Get all locations from the locations table
    $location = DB::table('location')->get();
    // Send all locations to the view named maps
    return view('maps', ['location' => $location]);
    }

    // public function gmaps()
    // {
    //     return view ('maps');
    // }
}
