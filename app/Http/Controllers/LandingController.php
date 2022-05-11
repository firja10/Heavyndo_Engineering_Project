<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis_Projek;
use App\Models\User;

class LandingController extends Controller
{
    //

    public function Home()
    {
        # code...

        return view('admin.home');

    }


    public function Landing()
    {
        # code...

        $jenis_Projek = Jenis_Projek::all();

        return view('admin.home', compact('jenis_Projek'));

    }






    //KONTROLER HALAMAN ADMIN



    // Halaman Home Admin

    public function adminHome()
    {
        # code...

        return view('admin.home');

    }




    // Halaman Data Projek Admin 


    public function adminDataproyek()
    {
        # code...

        $jenis_Projek = Jenis_Projek::all();

        return view('admin.data_proyek', compact('jenis_Projek'));



    }



    public function adminTambahDataProyek(Request $request)
    {
        # code...
        $jenis_Projek = new Jenis_Projek() ; 

        $jenis_Projek['nama_projek'] = $request->nama_projek;

        $jenis_Projek['durasi_projek'] = $request->durasi_projek;

        $jenis_Projek['status_projek'] = $request->status_projek;

        $jenis_Projek['anggaran_projek'] = $request->anggaran_projek;

        $jenis_Projek['gambar_projek'] = $request->gambar_projek;

        $jenis_Projek->save();


        return redirect('/admin/data_proyek')->with('success_tambah_proyek', 'Data Projek sukses ditambahkan');
    }


    public function adminHapusDataProyek($id)
    {
        # code...

        $jenis_Projek = Jenis_Projek::findOrFail($id);
        $jenis_Projek->delete();
        return redirect('/admin/data_proyek')->with('success_hapus_proyek', 'Data Projek sukses dihapuskan');



    }







    public function adminKelolaUser()
    {
        # code...
        $users = User::all();
        return view('admin.kelola_user', compact('users'));
    
    }


    public function adminLaporan()
    {
        # code...
    
    

    
    }




    public function adminPengaturan()
    {
        # code...
    }





















}
