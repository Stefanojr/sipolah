<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// routes/web.php

// routes/web.php

use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\BanksampahController;
use Illuminate\Support\Facades\Route;


Route::get('/', 'pageController@index');
Route::get('/login', 'pageController@login')->name('login'); // Menambahkan name('login')
Route::get('/register', 'pageController@register');

Route::post('/postregister', 'GeneralController@postregister');
Route::post('/postlogin', 'GeneralController@postlogin')->name("postlogin");

Route::middleware('cekrole:pengguna')->group(function () {

    Route::post('/update-rolePg', [PenggunaController::class, 'updateRolePg'])->name('update-rolePg');
    Route::get('/pengguna', 'PenggunaController@index');
    Route::get('/buangsampah', 'PenggunaController@buang');

    Route::get('/payment', 'PenggunaController@payment');
    Route::post('/payment', 'PenggunaController@postPayment')->name('payment.proccess');

    Route::get('/location', 'PenggunaController@location');
    Route::get('/history', 'PenggunaController@history');

    Route::get('pilih', 'PenggunaController@pilih')->name('pengguna.pilih');
    Route::post('pilih', 'PenggunaController@postPilih')->name('pengguna.add');

    Route::get('/profile', 'PenggunaController@profile');
    Route::get('/logout', 'PenggunaController@logout');
    Route::post('/buang', 'BuangController@buangsam');
    Route::post('/updateProfile', 'PenggunaController@updateProfile');

});

Route::middleware('cekrole:petugas')->group(function () {
    Route::post('/update-rolePtg', [PetugasController::class, 'updateRolePtg'])->name('update-rolePtg');
    Route::get('/petugas', 'PetugasController@indexptg');
    Route::get('/ambilsampah', 'PetugasController@ambilsampah');
    Route::get('/paymentptg', 'PetugasController@paymentptg');
    Route::get('/notificationptg', 'PetugasController@notificationptg');
    Route::get('/locationptg', 'PetugasController@locationptg');
    Route::get('/historyptg', 'PetugasController@historyptg');
    Route::get('/profileptg', 'PetugasController@profileptg');
    Route::get('/logoutptg', 'PetugasController@logoutptg');
});

Route::middleware('cekrole:banksampah')->group(function () {
    Route::post('/update-roleBs', [BankSampahController::class, 'updateRoleBs'])->name('update-roleBs');
    Route::get('/banksampah', 'BanksampahController@indexbs');
    Route::get('/datasampah', 'BanksampahController@datasampah');
    Route::get('/dpbs', 'BanksampahController@dpbs');
    Route::get('/locbs', 'BanksampahController@locbs');
    Route::get('/historybs', 'BanksampahController@historybs');
    Route::get('/profilebs', 'BanksampahController@profilebs');
    Route::get('/logoutbs', 'BankSampahController@logoutbs');

});

// Route::get('/loc', function() {
//     return view('welcome');
// });


