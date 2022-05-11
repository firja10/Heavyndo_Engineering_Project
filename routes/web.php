<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
//     return view('admin.welcome');
// })->middleware('auth');

Route::get('/', [\App\Http\Controllers\LandingController::class,'Landing'])->name('Landing')->middleware('auth');

Route::get('/home', [\App\Http\Controllers\LandingController::class,'home'])->name('home')->middleware('auth');

// Route::get('/data_projek', [\App\Http\Controllers\LandingController::class,'home'])->name('home')->middleware('auth');






//WARNING ! HALAMAN ADMIN 

// Route::resource('/admin', \App\Http\Controllers\JenisProjekController::class )->middleware('auth');


// Route::get('/admin/home', [\App\Http\Controllers\LandingController::class,'adminHome'])->name('adminHome')->middleware('auth');

Route::get('/admin/data_proyek', [\App\Http\Controllers\LandingController::class,'adminDataproyek'])->name('adminDataproyek')->middleware('auth');

Route::post('/admin/data_proyek', [\App\Http\Controllers\LandingController::class,'adminTambahDataProyek'])->name('adminTambahDataProyek')->middleware('auth');




Route::get('/admin/kelola_user', [\App\Http\Controllers\LandingController::class,'adminKelolaUser'])->name('adminKelolaUser')->middleware('auth');

Route::get('/admin/laporan', [\App\Http\Controllers\LandingController::class,'adminLaporan'])->name('adminLaporan')->middleware('auth');

Route::get('/admin/pengaturan', [\App\Http\Controllers\LandingController::class,'adminPengaturan'])->name('adminPengaturan')->middleware('auth');












Route::resource('/data_proyek', \App\Http\Controllers\JenisProjekController::class )->middleware('auth');










// Route::get('/admin', function () {
//     return view('admin.home');
// });


// Route::get('/landing', [\App\Http\Controllers\LandingController::class,'Home'])->name('Home');
// Route::get('/', [\App\Http\Controllers\LandingController::class,''])->name('');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\LandingController::class, 'adminHome'])->name('adminHome')->middleware('is_admin');











