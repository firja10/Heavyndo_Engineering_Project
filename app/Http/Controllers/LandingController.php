<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis_Projek;
use App\Models\User;
use App\Models\AktivitasProjek;
use App\Models\Anggaran;
use App\Models\Message;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Notifikasi;
use DateTime;
use Illuminate\Support\Facades\Date;

class LandingController extends Controller
{
    //

    // public function Home()
    // {
    //     # code...

    //     return view('admin.home');

    // }





    public function Home(Request $request)
    {
        # code...




         $tanggal_ini = date('Y-m-d');

        $notifikasis = new Notifikasi();




        
        $aktivitas_dl = DB::table('aktivitas_projeks')->get();

        $tgl_aktivitas = DB::table('aktivitas_projeks')->where('tanggal_akhir','<=',$tanggal_ini)->get();

        $array_act = array();

        foreach ($aktivitas_dl as $item_array) {
            # code...

            $array_act[] = $item_array;

            

        }

        $sebuah_array = (array) $array_act;


        $key = array_search(9,array_column($array_act,'id'));







        //  $aktivitas_dl = DB::table('aktivitas_projeks')->get();

         

        //  $array_act = array();

        //  foreach ($aktivitas_dl as $item_array) {
        //      # code...

        //      $array_act[] = $item_array;


        //  }

        //  $array_dua = (array) $array_act[0];

        //  $tanggal_awal = $array_dua['tanggal_awal'];
         
        //  echo $tanggal_awal;








         



        //  $t_awal = new DateTime($request->tanggal_awal_aktivitas);
        //  $t_akhir = new DateTime($request->tanggal_akhir_aktivitas);

        //  $t_saat_ini = new DateTime($tanggal_ini);

        //  $interval = $t_awal->diff($t_akhir);

        //  $diffInDays  = $interval->format('%a');




        // if()
        // {

        // }
        






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

        // $jenis_Projek['anggaran_projek'] = $request->anggaran_projek;

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
                    // 'anggaran_projek'=> $request['anggaran_projek'],
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

            $diffInDays  = $interval->format('%a');


            $aktivitas_projek['durasi_aktivitas'] =  $diffInDays;

            $aktivitas_projek['penanggung_jawab'] = $request->penanggung_jawab;

            $aktivitas_projek['jenis_projek_id'] = $request->jenis_projek_id;

            $aktivitas_projek['persentase_progress'] = $request->persentase_progress;


            if($request->persentase_progress != 100)
            {
                $aktivitas_projek['status_aktivitas'] = 'on_going';
            }

            elseif($request->persentase_progress == 100){
                $aktivitas_projek['status_aktivitas'] = 'finished';
            }



          



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


            // $jenis_projek_id = Jenis_Projek::findOrFail($id);
            // $id_jenis_projek = $jenis_projek_id->id;
            $aktivitas_projek = AktivitasProjek::findOrFail($id);
            $id_jenis_projek = $aktivitas_projek->jenis_projek_id;
           
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

            // $diffInDays  = $interval->d;

            $diffInDays  = $interval->format('%a');


            // $request['durasi_aktivitas'] =  $diffInDays;





            
            if($request['persentase_progress'] != 100)
            {
                $status_activity = 'on_going';
            }

            elseif($request->persentase_progress == 100){
                $status_activity = 'finished';
            }




            
                $orders = AktivitasProjek::where('id', $id)->update([
                    'nama_aktivitas' => $request['nama_aktivitas'],
                  


                    'penanggung_jawab'=> $request['penanggung_jawab'],        

                    'persentase_progress'=> $request['persentase_progress'],

            
                    'status_aktivitas'=> $status_activity,

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

            $diffInDays  = $interval->format('%a');

            $selisih_notif = $t_saat_ini->diff($t_akhir);

            $beda_hari = $selisih_notif->format('%a');




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
 

            $first_date = $show_awal[2] . ' ' . $bulan[ (int)$show_awal[1] ] . ' ' . $show_awal[0];
            $final_date = $show_akhir[2] . ' ' . $bulan[ (int)$show_akhir[1] ] . ' ' . $show_akhir[0];

                   
         
         
            $notifikasis['nama_notifikasi'] = 'H - '. $beda_hari . ' Deadline Aktivitas ' . $notifikasis['nama_aktivitas']  ;


            $notifikasis['deskripsi_notifikasi'] = 'Salam, Saya dari Admin Heavyndo Engineering ingin mengingatkan bahwa Aktivitas ' . $notifikasis['nama_notifikasi'] . ' harus sudah selesai H - '. $beda_hari . ' atau  ' . $beda_hari .' Hari Lagi. Diharapkan untuk segera diselesaikan, dengan deadline lebih tepatnya pada '. $final_date .'. Terima kasih';


            // $notifikasis['deskripsi_notifikasi'] = 'Salam, Saya dari Admin Heavyndo Engineering ingin mengingatkan bahwa Aktivitas ' . $notifikasis['nama_notifikasi'] . ' harus sudah selesai H - 2 Hari Lagi. Diharapkan untuk segera diselesaikan, dengan deadline lebih tepatnya pada '. $show_akhir .'. Terima kasih';

            
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

            $array_titik = array('.', 'Rp', ' ');

            $rab_replace  = str_replace($array_titik, '', $request['anggaran_projek']);

            $rab = (int) $rab_replace;
            
            Jenis_Projek::where('id', $id)->update([

                'anggaran_projek'=>$rab_replace,

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








        // PART OF MESSAGES 


        // Menampilkan Semuanya

        public function data_messages()
        {
            # code...

            $messages = Message::all();

            return view('', compact('messages'));
            // return view('')
        }


        // Menampilkan Per Id 

        public function data_messages_id()
        {
            # code...
        }

        public function store_messages()
        {
            # code...
        }








        // ANGGARAN 

        public function AdminDataAnggaran($id)
        {

            # code...

            $anggaran = DB::table('anggarans')->where('projek_id', $id)->get();


            // $anggaran = Anggaran::all();

            return view('admin.anggaran', compact('anggaran', 'id'));

        }



        public function AdminDataAnggaranId($id)
        {
            # code...

            $anggaran = Anggaran::findOrFail($id);

            return view('admin.anggaran_id', compact('AdminDataAnggaranId'));

        }



        public function AdminDataAnggaranEditId($id)
        {
            # code...

            $anggaran = Anggaran::findOrFail($id);

            return view('admin.anggaran_edit_id', compact('anggaran'));

        }

        





        public function AdminStoreAnggaran(Request $request)
        {
        # code...

       
            $anggaran = new Anggaran();

          


            $anggaran['projek_id'] = $request->projek_id;

            
            $nama_projek_object =Jenis_Projek::select('nama_projek')->where('id', $anggaran['projek_id'])->get();

            // $nama_projek_decode = json_decode($nama_projek_object, true);

            // $nama_projek = current((array)$nama_projek_object);


            foreach ($nama_projek_object as $item_nama_projek) {
                # code...

               $nama_projeks = $item_nama_projek->nama_projek;
               $anggaran['nama_projek'] = $nama_projeks;
            }




            $array_titik = array('.', 'Rp', ' ');

            $rab_replace  = str_replace($array_titik, '', $request->rab);

            $rab = (int) $rab_replace;
           



            $anggaran['rab'] = $rab;
         
            $anggaran['detail_nama'] = $request->detail_nama;
            $anggaran->save();

            return redirect('/admin/data_proyek/'. $anggaran['projek_id'] . '/rab')->with('sukses_tambah_anggaran', 'Anggaran Berhasil Ditambahkan');

        }



        public function AdminUpdateAnggaran($id, Request $request)
        {
            # code...


            $array_titik = array('.', 'Rp', ' ');

            $rab_replace  = str_replace($array_titik, '', $request['rab']);

            $rab = (int) $rab_replace;


            Anggaran::where('id', $id)->update([

                'detail_nama'=>$request['detail_nama'],
                'rab'=>$rab,

            ]);


            $id_projeks = Anggaran::select('projek_id')->where('id',$id)->get();


            // $id_projek = DB::table('jenis__Projeks')->select('')->get();

            
            foreach ($id_projeks as $item_projeks) {
                # code...

               $projek_id = $item_projeks->projek_id;

               return redirect('/admin/data_proyek/'. $projek_id . '/rab');

            }

        }





        public function Cari_Id_Projek()
        {
            # code...



        }



        public function AdminHapusAnggaran($id)
        {
            # code...

            $anggaran = Anggaran::findOrFail($id);
           


            $id_projek = $anggaran->projek_id;

            $anggaran->delete();

            return redirect('/admin/data_proyek/' . $id_projek . '/rab' );


        }





        public function verif_status_spv(Request $request, $id)
        {
            # code...

            Jenis_Projek::where('id', $id)->update([
                'verif_status'=>1,
            ]);

            return redirect('/supervisor/data_proyek')->with('proyek_verif_status_spv','Verifikasi Status Supervisor');

        }



        public function verif_status_mng(Request $request, $id)
        {
            # code...

            Jenis_Projek::where('id', $id)->update([
                'verif_status'=>2,
            ]);

            return redirect('/supervisor/data_proyek')->with('proyek_verif_status_mng','Verifikasi Status Manager');           

        }






        // public function NotifikasiOtomatis()
        // {
        //     # code...
        
        //     $notifikasis = Notifikasi::all();

        //     foreach ($notifikasis as $notifs) {
        //         # code...

        //        $nama_notif = $notifs->nama_notifikasi;

        //        $tanggal_akhir = $notifs->tanggal_akhir_aktivitas;



        //        if ($tanggal_akhir ) {
        //         # code...
        //        }



        //     }

        
        // }







}
