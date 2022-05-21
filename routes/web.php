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

Route::get('/admin/data_proyek', [\App\Http\Controllers\LandingController::class,'adminDataproyek'])->name('adminDataproyek')->middleware('is_admin');

Route::post('/admin/data_proyek', [\App\Http\Controllers\LandingController::class,'adminTambahDataProyek'])->name('adminTambahDataProyek')->middleware('is_admin');

Route::delete('/admin/data_proyek/{id}', [\App\Http\Controllers\LandingController::class,'adminHapusProjek'])->name('adminHapusProjek')->middleware('is_admin');



// Route::delete('/admin/data_proyek/{id}/edit', [\App\Http\Controllers\LandingController::class,'adminEditProjek'])->name('adminEditProjek')->middleware('is_admin');



// Lihat Projek satu satu
Route::get('/admin/data_proyek/{id}', [\App\Http\Controllers\LandingController::class,'adminLihatProjek'])->name('adminLihatProjek')->middleware('is_admin');


// Edit Projek satu satu
Route::get('/admin/data_proyek/edit/{id}', [\App\Http\Controllers\LandingController::class,'adminEditProjek'])->name('adminEditProjek')->middleware('is_admin');
Route::patch('/admin/data_proyek/edit/{id}', [\App\Http\Controllers\LandingController::class,'adminUpdateProjek'])->name('adminUpdateProjek')->middleware('is_admin');





// Data Aktivitas Projek

Route::get('/admin/data_proyek/{id}/data_aktivitas', [\App\Http\Controllers\LandingController::class,'adminKelolaAktivitas'])->name('adminKelolaAktivitas')->middleware('is_admin');

Route::post('/admin/data_aktivitas', [\App\Http\Controllers\LandingController::class,'adminTambahAktivitas'])->name('adminTambahAktivitas')->middleware('is_admin');


Route::get('/admin/data_aktivitas/{id}', [\App\Http\Controllers\LandingController::class,'adminEditAktivitas'])->name('adminEditAktivitas')->middleware('is_admin');


Route::delete('/admin/data_aktivitas/{id}', [\App\Http\Controllers\LandingController::class,'adminHapusAktivitas'])->name('adminHapusAktivitas')->middleware('is_admin');

Route::patch('/admin/data_aktivitas/{id}', [\App\Http\Controllers\LandingController::class,'adminUpdateAktivitas'])->name('adminUpdateAktivitas')->middleware('is_admin');




Route::get('/admin//data_aktivitas/{id}', [\App\Http\Controllers\LandingController::class,'adminLihatAktivitas'])->name('adminLihatAktivitas')->middleware('is_admin');









Route::get('/admin/kelola_user', [\App\Http\Controllers\LandingController::class,'adminKelolaUser'])->name('adminKelolaUser')->middleware('is_admin');
Route::post('/admin/kelola_user', [\App\Http\Controllers\LandingController::class,'adminTambahUser'])->name('adminTambahUser')->middleware('is_admin');




Route::get('/admin/kelola_user/{id}', [\App\Http\Controllers\LandingController::class,'adminEditUser'])->name('adminEditUser')->middleware('is_admin');
Route::patch('/admin/kelola_user/{id}', [\App\Http\Controllers\LandingController::class,'adminUpdateUser'])->name('adminUpdateUser')->middleware('is_admin');





// Route::post('/admin/kelola_user/{id}', [\App\Http\Controllers\LandingController::class,'adminUpdateUser'])->name('adminUpdateUser')->middleware('is_admin');

Route::delete('/admin/kelola_user/{id}', [\App\Http\Controllers\LandingController::class,'adminHapusUser'])->name('adminHapusUser')->middleware('is_admin');









Route::get('/admin/laporan', [\App\Http\Controllers\LandingController::class,'adminLaporan'])->name('adminLaporan')->middleware('is_admin');

Route::get('/admin/pengaturan', [\App\Http\Controllers\LandingController::class,'adminPengaturan'])->name('adminPengaturan')->middleware('is_admin');












Route::resource('/data_proyek', \App\Http\Controllers\JenisProjekController::class )->middleware('auth');










// Route::get('/admin', function () {
//     return view('admin.home');
// });


// Route::get('/landing', [\App\Http\Controllers\LandingController::class,'Home'])->name('Home');
// Route::get('/', [\App\Http\Controllers\LandingController::class,''])->name('');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\LandingController::class, 'adminHome'])->name('adminHome')->middleware('is_admin');











