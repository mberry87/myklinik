<?php

use App\Http\Controllers\AdministrasiController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardCotroller;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\ObatCotroller;
use App\Http\Controllers\PasienContreller;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PenunjangController;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\TindakanController;
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
    Route::post('dokter', [DokterController::class, 'store'])->name('dokter.store');
    Route::get('dokter/{id}/edit', [DokterController::class, 'edit'])->name('dokter.edit');
    Route::put('dokter/{id}', [DokterController::class, 'update'])->name('dokter.update');
    Route::delete('dokter/{id}', [DokterController::class, 'destroy'])->name('dokter.destroy');

    Route::get('tindakan', [TindakanController::class, 'index'])->name('tindakan.index');
    Route::get('create/tindakan', [TindakanController::class, 'create'])->name('tindakan.create');
    Route::post('tindakan', [TindakanController::class, 'store'])->name('tindakan.store');
    Route::get('tindakan/{id}/edit', [TindakanController::class, 'edit'])->name('tindakan.edit');
    Route::put('tindakan/{id}', [TindakanController::class, 'update'])->name('tindakan.update');
    Route::delete('tindakan/{id}', [TindakanController::class, 'destroy'])->name('tindakan.destroy');

    Route::get('diagnosa', [DiagnosaController::class, 'index'])->name('diagnosa.index');
    Route::get('create/diagnosa', [DiagnosaController::class, 'create'])->name('diagnosa.create');
    Route::post('diagnosa', [DiagnosaController::class, 'store'])->name('diagnosa.store');
    Route::get('diagnosa/{id}/edit', [DiagnosaController::class, 'edit'])->name('diagnosa.edit');
    Route::put('diagnosa/{id}', [DiagnosaController::class, 'update'])->name('diagnosa.update');
    Route::delete('diagnosa/{id}', [DiagnosaController::class, 'destroy'])->name('diagnosa.destroy');

    Route::get('administrasi', [AdministrasiController::class, 'index'])->name('administrasi.index');
    Route::get('create/administrasi', [AdministrasiController::class, 'create'])->name('administrasi.create');
    Route::post('administrasi', [AdministrasiController::class, 'store'])->name('administrasi.store');
    Route::get('administrasi/{id}/edit', [AdministrasiController::class, 'edit'])->name('administrasi.edit');
    Route::put('administrasi/{id}', [AdministrasiController::class, 'update'])->name('administrasi.update');
    Route::delete('administrasi/{id}', [AdministrasiController::class, 'destroy'])->name('administrasi.destroy');

    Route::get('penunjang', [PenunjangController::class, 'index'])->name('penunjang.index');
    Route::get('create/penunjang', [PenunjangController::class, 'create'])->name('penunjang.create');
    Route::post('penunjang', [PenunjangController::class, 'store'])->name('penunjang.store');
    Route::get('penunjang/{id}/edit', [PenunjangController::class, 'edit'])->name('penunjang.edit');
    Route::put('penunjang/{id}', [PenunjangController::class, 'update'])->name('penunjang.update');
    Route::delete('penunjang/{id}', [PenunjangController::class, 'destroy'])->name('penunjang.destroy');

    Route::get('obat', [ObatCotroller::class, 'index'])->name('obat.index');
    Route::get('create/obat', [ObatCotroller::class, 'create'])->name('obat.create');
    Route::post('obat', [ObatCotroller::class, 'store'])->name('obat.store');
    Route::get('obat/{id}/edit', [ObatCotroller::class, 'edit'])->name('obat.edit');
    Route::put('obat/{id}', [ObatCotroller::class, 'update'])->name('obat.update');
    Route::delete('obat/{id}', [ObatCotroller::class, 'destroy'])->name('obat.destroy');

    Route::get('pasien', [PasienContreller::class, 'index'])->name('pasien');
    Route::get('create/pasien', [PasienContreller::class, 'create'])->name('pasien.create');
    Route::post('pasien', [PasienContreller::class, 'store'])->name('pasien.store');
    Route::get('pasien/{id}/edit', [PasienContreller::class, 'edit'])->name('pasien.edit');
    Route::put('pasien/{id}', [PasienContreller::class, 'update'])->name('pasien.update');
    Route::delete('pasien/{id}', [PasienContreller::class, 'destroy'])->name('pasien.destroy');

    Route::post('/getKabupaten', [PasienContreller::class, 'getKabupaten'])->name('getKabupaten');

    // profil
    Route::get('profil', [ProfilController::class, 'index'])->name('profil.index');
    Route::post('profil/updateFotoProfil', [ProfilController::class, 'updateFotoProfil'])->name('profil.updateFotoProfil');
    Route::post('profil/updateProfil', [ProfilController::class, 'updateProfil'])->name('profil.updateProfil');
    Route::post('profil/updatePassword', [ProfilController::class, 'updatePassword'])->name('profil.updatePassword');



    //signout
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});
