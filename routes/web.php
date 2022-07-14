<?php

use App\Events\NotifikasiPesan;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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





Route::get('/welcome', function () {
   
    // NotifikasiPesan::dispatch('Pesan Baru');
    return view('admin.welcome');
});



Route::get('/notifikasi/pesan', function () {
   
    NotifikasiPesan::dispatch('Pesan Baru');

});


Route::get('/message', function () {
   
    // NotifikasiPesan::dispatch('Pesan Baru');
    return view('message');
});

Route::post('send', function(Request $request){

    $request->validate([
        'name'=>'required',
        'message'=>'required',

    ]);
    
    $message = [
        'name'=>$request->name,
        'message'=>$request->message,
    ];
    NotifikasiPesan::dispatch($message);

});




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


Route::get('/admin/data_aktivitas/{id}', [\App\Http\Controllers\LandingController::class,'adminLihatAktivitas'])->name('adminLihatAktivitas')->middleware('is_admin');


Route::get('/admin/data_aktivitas/edit/{id}', [\App\Http\Controllers\LandingController::class,'adminEditAktivitas'])->name('adminEditAktivitas')->middleware('is_admin');


Route::delete('/admin/data_aktivitas/{id}', [\App\Http\Controllers\LandingController::class,'adminHapusAktivitas'])->name('adminHapusAktivitas')->middleware('is_admin');

Route::patch('/admin/data_aktivitas/{id}', [\App\Http\Controllers\LandingController::class,'adminUpdateAktivitas'])->name('adminUpdateAktivitas')->middleware('is_admin');







Route::get('/admin/data_notifikasi', [\App\Http\Controllers\LandingController::class,'adminKelolaNotifikasi'])->name('adminKelolaNotifikasi')->middleware('is_admin');



Route::post('/admin/data_notifikasi', [\App\Http\Controllers\LandingController::class,'adminStoreNotifikasi'])->name('adminStoreNotifikasi')->middleware('is_admin');



Route::get('/admin/data_notifikasi/{id}', [\App\Http\Controllers\LandingController::class,'adminLihatNotifikasi'])->name('adminLihatNotifikasi')->middleware('is_admin');



Route::delete('/admin/data_notifikasi/{id}', [\App\Http\Controllers\LandingController::class,'adminHapusNotifikasi'])->name('adminHapusNotifikasi')->middleware('is_admin');




// Route::get('/admin//data_aktivitas/{id}', [\App\Http\Controllers\LandingController::class,'adminLihatAktivitas'])->name('adminLihatAktivitas')->middleware('is_admin');









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




// HALAMAN SUPERVISOR 

Route::get('/supervisor/data_proyek', [\App\Http\Controllers\LandingController::class,'SupervisorDataProyek'])->name('SupervisorDataProyek')->middleware('is_supervisor');


Route::get('/supervisor/data_rab', [\App\Http\Controllers\LandingController::class,'SupervisorRAB'])->name('SupervisorRAB')->middleware('is_supervisor');

Route::get('/supervisor/data_rab/{id}', [\App\Http\Controllers\LandingController::class,'SupervisorEditRAB'])->name('SupervisorEditRAB')->middleware('is_supervisor');

Route::patch('/supervisor/data_rab/{id}', [\App\Http\Controllers\LandingController::class,'SupervisorUpdateRAB'])->name('SupervisorUpdateRAB')->middleware('is_supervisor');







// HALAMAN MANAGER !!



Route::get('/manager/data_proyek', [\App\Http\Controllers\LandingController::class,'ManagerDataProyek'])->name('ManagerDataProyek')->middleware('is_manager');

Route::get('/manager/kelola_user', [\App\Http\Controllers\LandingController::class,'ManagerKelolaUser'])->name('ManagerKelolaUser')->middleware('is_manager');

Route::get('/manager/data_rab', [\App\Http\Controllers\LandingController::class,'ManagerRAB'])->name('ManagerRAB')->middleware('is_manager');




// COBA KIRIM MESSAGE 

Route::get('chat', [\App\Http\Controllers\MessageController::class, 'index'])->name('index');

Route::get('messages', [\App\Http\Controllers\MessageController::class, 'fetchMessages'])->name('fetchMessages');

Route::post('messages', [\App\Http\Controllers\MessageController::class, 'sendMessage'])->name('sendMessage');




// Route::get('daftar_notifikasis', [\App\Http\Controllers\NotifikasiController::class, 'index'])->name('index');

// Route::get('notifikasis', [\App\Http\Controllers\NotifikasiController::class, 'fetchNotifikasis'])->name('fetchNotifikasis');

// Route::post('notifikasis', [\App\Http\Controllers\NotifikasiController::class, 'sendNotifikasis'])->name('sendNotifikasis');





// ANGGARAN 
Route::get('admin/data_proyek/{id}/rab', [\App\Http\Controllers\LandingController::class, 'AdminDataAnggaran'])->name('AdminDataAnggaran');

Route::post('admin/data_proyek/rab', [\App\Http\Controllers\LandingController::class, 'AdminStoreAnggaran'])->name('AdminStoreAnggaran');

Route::get('admin/rab/{id}', [\App\Http\Controllers\LandingController::class, 'AdminDataAnggaranId'])->name('AdminDataAnggaranId');

Route::delete('admin/rab/{id}', [\App\Http\Controllers\LandingController::class, 'AdminHapusAnggaran'])->name('AdminHapusAnggaran');


Route::get('admin/rab/edit/{id}', [\App\Http\Controllers\LandingController::class, 'AdminDataAnggaranEditId'])->name('AdminDataAnggaranEditId');











