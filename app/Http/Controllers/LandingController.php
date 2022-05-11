<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis_Projek;

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

        return view('admin.home');

    }






    //KONTROLER HALAMAN ADMIN


    public function adminHome()
    {
        # code...

        return view('admin.home');

    }


    public function adminDataproyek()
    {
        # code...

        $jenis_Projek = Jenis_Projek::all();

        return view('admin.data_proyek', compact('jenis_Projek'));



    }












}
