<?php

namespace App\Http\Controllers;

use App\Events\NotifikasiPesan;
use App\Models\Message;
use App\Models\Notifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Notifikasi  $notifikasi
     * @return \Illuminate\Http\Response
     */
    public function show(Notifikasi $notifikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notifikasi  $notifikasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Notifikasi $notifikasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notifikasi  $notifikasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notifikasi $notifikasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notifikasi  $notifikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notifikasi $notifikasi)
    {
        //
    }

    /**
     * Fetch all messages
     *
     * @return notifikasi
     */
    public function fetchNotifikasis()
    {
     return Notifikasi::with('user')->get();
    }






    /**
 * Persist message to database
 *
 * @param  Request $request
 * @return Response
 */
public function sendNotifikasis(Request $request)
{
  $user_id = Auth::user()->id;



//   $message = $user->notifikasis()->create([
//     'message' => $request->input('message')
//   ]);


    $message = Notifikasi::where('user_id', $user_id)->create([
        'deskripsi_notifikasi'=>$request['deskripsi_notifikasi'],
    ]);




    return redirect('notifikasi');


//   return ['status' => 'Message Sent!'];
}

    






}
