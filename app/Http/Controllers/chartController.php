<?php

namespace App\Http\Controllers;

use App\buangsampah;
use Illuminate\Http\Request;
use app\Charts\PieChartDashboard;

class chartController extends Controller
{
    public function index()
{
    $chart = new PieChartDashboard();
    return view('pengguna.dashboard', compact('chart'));
}

}
