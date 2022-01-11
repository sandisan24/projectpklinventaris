<?php

use App\http\Controllers\BarangKeluarController;
use App\http\Controllers\BarangMasukController;
use App\http\Controllers\PeminjamanController;
use App\http\Controllers\StokController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register' => false, //menghilangkan fitur regis
    'reset' => false, //menghilangkan fitur forgot
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['prefix' => 'admin', 'middleware' => [
//     'auth',
//     'role:admin',
// ]], function () {
//     Route::get('/', function () {
//         return 'halaman admin';
//     });

//     Route::get('profile', function () {
//         return 'halaman profile admin';
//     });
// });

// Route::group(['prefix' => 'pengguna', 'middleware' => [
//     'auth',
//     'role:pengguna',
// ]], function () {
//     Route::get('/', function () {
//         return 'halaman pengguna';
//     });

//     Route::get('profile', function () {
//         return 'halaman profile pengguna';
//     });
// });

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('buku', function () {
        return view('buku.index');
    })->middleware(['role:admin|pengguna']);

    Route::get('pengarang', function () {
        return view('pengarang.index');
    })->middleware(['role:admin']);

    Route::get('stok', function () {
        return view('stok.index');
    })->middleware(['role:admin']);

    Route::get('barangmasuk', function () {
        return view('barangmasuk.index');
    })->middleware(['role:admin']);

    Route::get('barangkeluar', function () {
        return view('barangkeluar.index');
    })->middleware(['role:admin']);

    Route::get('peminjaman', function () {
        return view('peminjaman.index');
    })->middleware(['role:admin']);

    Route::resource('stok', StokController::class);
    Route::resource('barangmasuk', BarangMasukController::class);
    Route::resource('barangkeluar', BarangKeluarController::class);
    Route::resource('peminjaman', PeminjamanController::class);

});

// Route::group(['prefix' => 'pembelian', 'middleware' => [
//     'auth',
//     'role:admin|kasir',
// ]], function () {
//     Route::get('/', function () {
//         return 'halaman pembelian';
//     });

//     Route::get('profile', function () {
//         return 'halaman laporan pembelian';
//     });

// });
