<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis_Projek;
use App\Models\User;
use App\Models\AktivitasProjek;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Notifikasi;
use DateTime;

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

        // $jenis_Projek = Jenis_Projek::all();
        $jenis_Projek = Jenis_Projek::paginate(3);

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
        // $jenis_Projek = Jenis_Projek::paginate(3);

        return view('admin.data_proyek', compact('jenis_Projek'));



    }



    public function adminTambahDataProyek(Request $request)
    {
        # code...
        $jenis_Projek = new Jenis_Projek() ; 







        if($request->hasFile('gambar_projek'))
        {

            $filename = $request['gambar_projek']->getClientOriginalName();


            $request["gambar_projek"]->storeAs('Projek', $filename, 'public');
        
        
        
        
        }

    








        $jenis_Projek['nama_projek'] = $request->nama_projek;

        $jenis_Projek['durasi_projek'] = $request->durasi_projek;

        $jenis_Projek['status_projek'] = $request->status_projek;

        $jenis_Projek['anggaran_projek'] = $request->anggaran_projek;

        $jenis_Projek['gambar_projek'] = $filename;

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
        // $users = User::paginate(2);
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





    public function adminEditUser($id)
    {
        # code...

        $users = User::findOrFail($id);

        return view('admin.kelola_user_id', compact('users'));

    }



    public function adminUpdateUser( Request $request, $id)
    {
        # code...


        
        if($request->hasFile('gambar_profil'))
        {

            $filename = $request['gambar_profil']->getClientOriginalName();

            if(User::find($id)->gambar_profil)
            {

                Storage::delete('/public/storage/User/'.User::find($id)->gambar_profil);

            }

            $request["gambar_profil"]->storeAs('User', $filename, 'public'); }

            else {
                $filename=User::find($id)->gambar_profil;
            }

        
            $orders = User::where('id', $id)->update([
                'name' => $request['name'],
                'email'=> $request['email'],
                // 'password'=> bcrypt($request['password']),
                'gambar_profil' =>$filename,
            ]);


            return redirect('/admin/kelola_user/'. $id)->with('update_bukti','Bukti Bayar Berhasil Diupdate');



    }





        public function adminTambahUser(Request $request)
        {
            # code...


            $users = new User();


            if($request->hasFile('gambar_profil'))
            {
    
                $filename = $request['gambar_profil']->getClientOriginalName();
    
    
                $request["gambar_profil"]->storeAs('User', $filename, 'public');
            
            
            
            
            }

            $users['name'] = $request->name;
            $users['email'] = $request->email;
            $users['password'] = bcrypt($request->password); 
            $users['is_admin'] = $request->is_admin;
            $users['is_supervisor'] = $request->is_supervisor;
            $users['is_manager'] = $request->is_manager;
            $users['gambar_profil'] = $filename;
            $users->save();

            return redirect('/admin/kelola_user')->with('admintambahuser','User Telah Ditambahkan');

            
        }




        public function adminHapusUser(Request $request, $id)
        {
            # code...


            $users = User::findOrFail($id);

            $users->delete();

            return redirect('/admin/kelola_user')->with('adminhapususer','User Telah Dihapuskan');

            
        }





        public function adminHapusProjek(Request $request, $id)
        {
            # code...


            $jenis_Projek = Jenis_Projek::findOrFail($id);

            $jenis_Projek->delete();

            return redirect('/admin/data_proyek')->with('adminhapusproyek','Proyek Telah Dihapuskan');

            
        }





        public function adminEditProjek(Request $request, $id)
        {
            # code...


            $jenis_Projek = Jenis_Projek::findOrFail($id);

            return view('admin.data_proyek_edit_id', compact('jenis_Projek'));

            
        }



        public function adminUpdateProjek(Request $request, $id)
        {
            # code...


            // $jenis_Projek = Jenis_Projek::findOrFail($id);

            // return view('admin.data_proyek_edit_id', compact('jenis_Projek'));







            if($request->hasFile('gambar_projek'))
            {
    
                
                $filename = $request['gambar_projek']->getClientOriginalName();
    
                if(Jenis_Projek::find($id)->gambar_projek)
                {
    
                    Storage::delete('/public/storage/Projek/'.Jenis_Projek::find($id)->gambar_projek);
    
                }
    
                $request["gambar_projek"]->storeAs('Projek', $filename, 'public'); }
    
                else {
                    $filename=Jenis_Projek::find($id)->gambar_projek;
                }
    



            
                $orders = Jenis_Projek::where('id', $id)->update([
                    'nama_projek' => $request['nama_projek'],
                    'durasi_projek'=> $request['durasi_projek'],
                    'deskripsi_projek'=> $request['deskripsi_projek'],
                    'anggaran_projek'=> $request['anggaran_projek'],
                    'status_projek'=> $request['status_projek'],
                    'gambar_projek' =>$filename,
                ]);
    
    
                return redirect('/admin/data_proyek/'. $id)->with('update_data_proyek','Data Proyek Berhasil Diupdate');


            
        }


        public function adminLihatProjek(Request $request, $id)
        {
            # code...


            $jenis_Projek = Jenis_Projek::findOrFail($id);

            return view('admin.data_proyek_id', compact('jenis_Projek'));

            
        }



        public function adminKelolaAktivitas($id)
        {
            # code...

            // $aktivitas_projek = AktivitasProjek::all();
            
            // return view('admin.data_aktivitas', compact('aktivitas_projek'));

            $jenis_projek_id = Jenis_Projek::findOrFail($id);
            $id_jenis_projek  = $jenis_projek_id->id;

            $aktivitas_projek = DB::table('aktivitas_projeks')->where('jenis_projek_id', $id_jenis_projek)->get();

             return view('admin.data_aktivitas', compact('aktivitas_projek', 'jenis_projek_id'));


        }




        public function adminTambahAktivitas(Request $request)
        {
            # code...

       
            $aktivitas_projek = new AktivitasProjek();
            if($request->hasFile('foto_aktivitas'))
            {
                $filename = $request['foto_aktivitas']->getClientOriginalName();
    
    
                $request["foto_aktivitas"]->storeAs('AktivitasProjek', $filename, 'public');
            }



            
            $aktivitas_projek['nama_aktivitas'] = $request->nama_aktivitas;
            $aktivitas_projek['tanggal_awal'] = $request->tanggal_awal;

            $aktivitas_projek['tanggal_akhir'] = $request->tanggal_akhir;


            $t_awal = new DateTime($request->tanggal_awal);
            $t_akhir = new DateTime($request->tanggal_akhir);

            $interval = $t_awal->diff($t_akhir);

            $diffInDays  = $interval->d;


            $aktivitas_projek['durasi_aktivitas'] =  $diffInDays;

            $aktivitas_projek['status_aktivitas'] = $request->status_aktivitas;

            $aktivitas_projek['penanggung_jawab'] = $request->penanggung_jawab;

            $aktivitas_projek['jenis_projek_id'] = $request->jenis_projek_id;

            $aktivitas_projek['persentase_progress'] = $request->persentase_progress;

            $aktivitas_projek['foto_aktivitas'] = $filename;

            $aktivitas_projek->save();

            return redirect('/admin/data_proyek/' .$aktivitas_projek['jenis_projek_id'] . '/data_aktivitas' )->with('admintambahaktivitas','Aktivitas Telah Ditambahkan');





        }







        public function adminLihatAktivitas($id)
        {
            # code...

            $aktivitas_projek = AktivitasProjek::findOrFail($id);
            return view('admin.data_aktivitas_id', compact('aktivitas_projek'));

        }




        public function adminHapusAktivitas($id)
        {
            # code...

            $jenis_projek_id = Jenis_Projek::findOrFail($id);
            $id_jenis_projek = $jenis_projek_id->id;
            $aktivitas_projek = AktivitasProjek::findOrFail($id);
            $aktivitas_projek->delete();
            return redirect('/admin/data_proyek/'.$id_jenis_projek . '/data_aktivitas')->with('adminhapusaktivitas','Aktivitas Telah Dihapus');
        }

        public function adminUpdateAktivitas($id, Request $request)
        {
            # code...



            if($request->hasFile('foto_aktivitas'))
            {
    
                
                $filename = $request['foto_aktivitas']->getClientOriginalName();
    
                if(AktivitasProjek::find($id)->foto_aktivitas)
                {
    
                    Storage::delete('/public/storage/AktivitasProjek/'.AktivitasProjek::find($id)->foto_aktivitas);
    
                }
    
                $request["foto_aktivitas"]->storeAs('AktivitasProjek', $filename, 'public'); }
    
                else {
                    $filename=AktivitasProjek::find($id)->foto_aktivitas;
                }
    





                                 
            $t_awal = new DateTime($request['tanggal_awal']);
            $t_akhir = new DateTime($request['tanggal_akhir']);

            $interval = $t_awal->diff($t_akhir);

            $diffInDays  = $interval->d;


            // $request['durasi_aktivitas'] =  $diffInDays;






            
                $orders = AktivitasProjek::where('id', $id)->update([
                    'nama_aktivitas' => $request['nama_aktivitas'],
                  


                    'penanggung_jawab'=> $request['penanggung_jawab'],        

                    'persentase_progress'=> $request['persentase_progress'],

                    'status_aktivitas'=> $request['status_aktivitas'],

                    'tanggal_awal'=> $request['tanggal_awal'],

                    'tanggal_akhir'=> $request['tanggal_akhir'],

                    'durasi_aktivitas'=>$diffInDays,

                    
                    'foto_aktivitas' =>$filename,
                ]);
    
    
                return redirect('/admin/data_aktivitas/'. $id)->with('update_data_aktivitas','Data Aktivitas Berhasil Diupdate');


        }




        public function adminEditAktivitas($id)
        {
            # code...

            $aktivitas_projek = AktivitasProjek::findOrFail($id);
            return view('admin.data_aktivitas_id_edit', compact('aktivitas_projek'));

        }









        public function adminKelolaNotifikasi()
        {
            # code...
            $notifikasis = Notifikasi::all();
            return view('admin.data_notifikasi', compact('notifikasis'));

        }


        public function adminLihatNotifikasi($id)
        {
            # code...
            $notifikasis = Notifikasi::findOrFail($id);

            Notifikasi::where('id', $id)->update([
                'status'=>1
            ]);

            return view('admin.data_notifikasi_id', compact('notifikasis'));
            
        }


        public function adminStoreNotifikasi(Request $request)
        {
            # code...


            $notifikasis = new Notifikasi();

            $notifikasis['nama_aktivitas'] = $request->nama_aktivitas;
            
            $notifikasis['pengirim_notifikasi'] = $request->pengirim_notifikasi;



         


            $notifikasis['tanggal_awal_aktivitas'] = $request->tanggal_awal_aktivitas;
            $notifikasis['tanggal_akhir_aktivitas'] = $request->tanggal_akhir_aktivitas;

            $notifikasis['tanggal_notifikasi'] =  date('Y-m-d H:i:s');


            $t_awal = new DateTime($request->tanggal_awal_aktivitas);
            $t_akhir = new DateTime($request->tanggal_akhir_aktivitas);

            $t_saat_ini = new DateTime($notifikasis['tanggal_notifikasi']);

            $interval = $t_awal->diff($t_akhir);

            $diffInDays  = $interval->d;

            $selisih_notif = $t_saat_ini->diff($t_akhir);

            $beda_hari = $selisih_notif->d;




            $bulan = array (
                1 =>   'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            );
            $show_awal = explode('-', $notifikasis['tanggal_awal_aktivitas']);
            $show_akhir = explode('-', $notifikasis['tanggal_akhir_aktivitas']);
 



                   
         
         
            $notifikasis['nama_notifikasi'] = 'H - '. $beda_hari . ' Deadline Aktivitas ' . $notifikasis['nama_aktivitas']  ;


            $notifikasis['deskripsi_notifikasi'] = 'Salam, Saya dari Admin Heavyndo Engineering ingin mengingatkan bahwa Aktivitas ' . $notifikasis['nama_notifikasi'] . ' harus sudah selesai H - '. $beda_hari . ' atau  ' . $beda_hari .' Hari Lagi. Diharapkan untuk segera diselesaikan, dengan deadline lebih tepatnya pada '. $show_akhir .'. Terima kasih';

         
            $notifikasis['aktivitas_projek_id'] = $request->aktivitas_projek_id;


            $notifikasis['icon_notifikasi'] = $request->icon_notifikasi;

            $notifikasis['status'] = 0;

            $notifikasis->save();


            return redirect('/admin/data_notifikasi')->with('success_notif','Notifikasi Berhasil Ditambahkan');


            
        }



        public function adminHapusNotifikasi($id, Notifikasi $notifikasi)
        {
            # code...

            $notifikasis = Notifikasi::findOrFail($id);
            $notifikasis->delete();
            return redirect('/admin/data_notifikasi')->with('hapus_notif','Notifikasi Berhasil Dihapus');

        }





        public function adminEditNotifikasi($id, Notifikasi $notifikasi)
        {
            # code...

            $notifikasis = Notifikasi::findOrFail($id);
            // $notifikasis->delete();
            // return redirect('/admin/data_notifikasi')->with('hapus_notif','Notifikasi Berhasil Dihapus');
            return view('admin.data_notifikasi_id', compact('notifikasis'));

        }




        public function UbahStatusNotifikasi($id, Request $request)
        {
            # code...

            Notifikasi::where('id', $id)->update([
                'status'=>1
            ]);

            return redirect('/admin/data_notifikasi/' . $id);

        }








        //SUPERVISOR 



        public function SupervisorDataProyek()
        {
            # code...

            $data_projeks = Jenis_Projek::all();
            return view('supervisor.data_proyek', compact('data_projeks'));



        }




        
        public function SupervisorRAB()
        {
            # code...

            $rab_projeks = Jenis_Projek::all();
            return view('supervisor.data_rab', compact('rab_projeks'));

        }




        public function SupervisorEditRAB($id)
        {
            # code...

            $rab_projeks_id = Jenis_Projek::findOrFail($id);
            return view('supervisor.data_rab_id', compact('rab_projeks_id'));

        }



        public function SupervisorUpdateRAB(Request $request, $id)
        {
            # code...
            
            Jenis_Projek::where('id', $id)->update([

                'anggaran_projek'=>$request['anggaran_projek'],

            ]);

            return redirect('/supervisor/data_rab')->with('sukses_update_rab', 'RAB Telah Sukses Terupdate');

        }


























        // HALAMAN MANAGER !


        public function ManagerDataProyek()
        {
            # code...
            
            $data_projeks = Jenis_Projek::all();
            return view('manager.data_proyek', compact('data_projeks'));
        }


        public function ManagerKelolaUser()
        {
            # code...

            $kelola_user = User::all();
            return view('manager.kelola_user', compact('kelola_user'));

        }


        public function ManagerRAB()
        {
            # code...
            
            $rab_projeks = Jenis_Projek::all();
            return view('manager.data_rab', compact('rab_projeks'));
            

        }

























}
