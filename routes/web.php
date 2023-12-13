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
use App\Http\Controllers\chartController;

Route::get('/', 'pageController@index');

Route::middleware('guest')->group(function () {
    Route::get('/login', 'pageController@login')->name('login');
    Route::get('/register', 'pageController@register');

    Route::post('/postregister', 'GeneralController@postregister');
    Route::post('/postlogin', 'GeneralController@postlogin')->name("postlogin");
});

Route::middleware('auth')->group(function () {

    Route::post('logout', 'GeneralController@logout')->name("logout");
    Route::get('home', 'GeneralController@home')->name('home');

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
        Route::post('/updateProfile', 'PenggunaController@updateProfile')->name('profile.update');

        Route::get('invoice', 'PenggunaController@invoice')->name('pengguna.invoice');
        Route::get('invoicep', 'PenggunaController@invoicep')->name('pengguna.invoicep');

        Route::get('/pie-chart', [chartController::class, 'pieChart']);
    });

    Route::middleware('cekrole:petugas')->group(function () {
        Route::post('/update-rolePtg', [PetugasController::class, 'updateRolePtg'])->name('update-rolePtg');
        Route::get('/petugas', 'PetugasController@indexptg');
        Route::get('/ambilsampah', 'PetugasController@ambilsampah')->name('petugas.ambilsampah');
        Route::get('/ambilsampah/{id}', 'PetugasController@ambilsampahid')->name('ambil.show');
        Route::get('/paymentptg', 'PetugasController@paymentptg');
        Route::get('/daftarbuangptg', 'PetugasController@daftarbuangptg');
        Route::get('/historyptg', 'PetugasController@historyptg');
        Route::get('/profileptg', 'PetugasController@profileptg');
        Route::get('/logoutptg', 'PetugasController@logoutptg');
        Route::post('ambil-sampah', 'PetugasController@ambil_sampah')->name('petugas.ambil');
        Route::post('verived', 'PetugasController@verived')->name('petugas.verived');
        Route::post('/updateProfilePtg', 'PetugasController@updateProfilePtg')->name('profile.updatePtg');
    });

    Route::middleware('cekrole:banksampah')->group(function () {
        Route::post('/update-roleBs', [BankSampahController::class, 'updateRoleBs'])->name('update-roleBs');
        Route::get('/banksampah', 'BanksampahController@indexbs');
        Route::get('/datasampah', 'BanksampahController@datasampah')->name('bank.data');
        Route::get('/dpbs', 'BanksampahController@dpbs');
        Route::get('/locbs', 'BanksampahController@locbs');
        Route::get('/historybs', 'BanksampahController@historybs');
        Route::get('/profilebs', 'BanksampahController@profilebs');
        Route::get('/logoutbs', 'BankSampahController@logoutbs');
        Route::post('/updateProfileBs', 'BankSampahController@updateProfileBs')->name('profile.updateBs');

        Route::post('boleh', 'BankSampahController@boleh')->name('bank.boleh');
    });
});
