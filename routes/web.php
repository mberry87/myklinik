<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardCotroller;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Auth::routes();

// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware('islogin')->group(function () {
    Route::get('/dashboard', [DashboardCotroller::class, 'index'])->name('dashboard');

    // pegawai
    Route::get('pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
    Route::get('create/pegawai', [PegawaiController::class, 'create'])->name('pegawai.create');
    Route::post('pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');
    Route::get('pegawai/{id}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');
    Route::put('pegawai/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
    Route::get('pegawai/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');
    Route::get('pegawais/count', [PegawaiController::class, 'show'])->name('pegawai.count');

    //user
    Route::get('user', [UserController::class, 'index'])->name('user.index');
    Route::get('create/user', [UserController::class, 'create'])->name('user.create');
    Route::post('user', [UserController::class, 'store'])->name('user.store');
    Route::get('user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('user/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::get('user/{id}', [UserController::class, 'show'])->name('user.show');

    // master data
    Route::get('poli', [PoliController::class, 'index'])->name('poli.index');
    Route::get('create/poli', [PoliController::class, 'create'])->name('poli.create');
    Route::post('poli', [PoliController::class, 'store'])->name('poli.store');
    Route::get('poli/{id}/edit', [PoliController::class, 'edit'])->name('poli.edit');
    Route::put('poli/{id}', [PoliController::class, 'update'])->name('poli.update');
    Route::delete('poli/{id}', [PoliController::class, 'destroy'])->name('poli.destroy');

    Route::get('dokter', [DokterController::class, 'index'])->name('dokter.index');
    Route::get('create/dokter', [DokterController::class, 'create'])->name('dokter.create');
    Route::post('poli', [DokterController::class, 'store'])->name('dokter.store');
    Route::get('dokter/{id}/edit', [DokterController::class, 'edit'])->name('dokter.edit');
    Route::put('dokter/{id}', [DokterController::class, 'update'])->name('dokter.update');
    Route::delete('dokter/{id}', [DokterController::class, 'destroy'])->name('dokter.destroy');

    // profil
    Route::get('profil', [ProfilController::class, 'index'])->name('profil.index');
    Route::post('profil/updateFotoProfil', [ProfilController::class, 'updateFotoProfil'])->name('profil.updateFotoProfil');
    Route::post('profil/updateProfil', [ProfilController::class, 'updateProfil'])->name('profil.updateProfil');
    Route::post('profil/updatePassword', [ProfilController::class, 'updatePassword'])->name('profil.updatePassword');



    //signout
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});
