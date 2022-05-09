<?php

namespace App\Http\Controllers;

use App\Models\Jenis_Projek;
use Illuminate\Http\Request;

class JenisProjekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $jenis_Projek = Jenis_Projek::all();
    
        return view('admin.data_proyek', compact('jenis_Projek'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jenis_Projek  $jenis_Projek
     * @return \Illuminate\Http\Response
     */
    public function show(Jenis_Projek $jenis_Projek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jenis_Projek  $jenis_Projek
     * @return \Illuminate\Http\Response
     */
    public function edit(Jenis_Projek $jenis_Projek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jenis_Projek  $jenis_Projek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jenis_Projek $jenis_Projek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jenis_Projek  $jenis_Projek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jenis_Projek $jenis_Projek)
    {
        //
    }
}
