@extends('template.template')
@section('title')

Data Aktivitas {{$jenis_projek_id->nama_projek}}
    
@endsection
@section('content')





            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                {{-- <h1 class="h3 mb-2 text-gray-800">Tabel Data Projek</h1>
                <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                    For more information about DataTables, please visit the <a target="_blank"
                        href="https://datatables.net">official DataTables documentation</a>.</p> --}}



                                            <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tabel Data Aktivitas  {{$jenis_projek_id->nama_projek}}</h1>

                        

                        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Projek</a> --}}


                                <a href = "#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle = "modal" data-target = "#modaltambahAktivitas"><i
                                    class="fas fa-plus fa-sm text-white-50" ></i> Tambah Data Aktivitas</a>

                    </div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex justify-content-center">
                        <h6 class="m-0 font-weight-bold text-primary mr-auto">
                                <?php 
                                //    $aktivitass = DB::table('aktivitas_projeks')->where('jenis_projek_id', $jenis_projek_id->id)->get();
                                $aktivitass_sum = DB::table('aktivitas_projeks')->where('jenis_projek_id', $jenis_projek_id->id)->sum('persentase_progress');
                                    // var_dump($aktivitass);
                                $jumlah_aktivitass = DB::table('aktivitas_projeks')->where('jenis_projek_id', $jenis_projek_id->id)->count();
                                
                                if($jumlah_aktivitass > 0)
                                {
                                $aktivitass_bagi = $aktivitass_sum/$jumlah_aktivitass;
                                }

                                else{
                                    $aktivitass_bagi = 0;
                                }

                                    ?>
                    Persentase Progress Rata - rata : 
                                <?php 
                                echo $aktivitass_bagi;
                                ?>
                                %
                                {{-- </h6>

                                <h6 class="m-0 font-weight-bold text-primary"> --}}
                                    <br>
                      
                        Jumlah Aktivitas : 
                                    <?php 
                                    echo $jumlah_aktivitass;
                                    ?>
                                    
                                    </h6>
                                    
                                    <br>

                                    <button class = "btn btn-dark" onclick="history.back()">Previous</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama Aktivitas</th>
                                        <th>Durasi Aktivitas</th>
                                        <th>Tanggal Awal Aktivitas</th>
                                        <th>Tanggal Akhir Aktivitas</th>
                                        <th>Penanggung Jawab Aktivitas</th>
                                        <th>Status Aktivitas</th>
                                        <th>Persentase Progress (%)</th>
                                        <th>Gambar Aktivitas</th>
                                        <th>Aksi</th>
                                        {{-- <th>Aksi</th> --}}
                                        {{-- <th>Salary</th> --}}
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Nama Aktivitas</th>
                                        <th>Durasi Aktivitas</th>
                                        <th>Tanggal Awal Aktivitas</th>
                                        <th>Tanggal Akhir Aktivitas</th>
                                        <th>Penanggung Jawab Aktivitas</th>
                                        <th>Status Aktivitas</th>
                                        <th>Persentase Progress (%)</th>
                                        <th>Gambar Aktivitas</th>
                                        <th>Aksi</th>
                                        {{-- <th>Aksi</th> --}}
                                        {{-- <th>Salary</th> --}}
                                    </tr>
                                </tfoot>
                                <tbody>

                                @foreach ($aktivitas_projek as $aktivitas)
                                    

                                <tr>
                                    <td>{{$aktivitas->nama_aktivitas}}</td>
                                    <td>{{$aktivitas->durasi_aktivitas}} Hari</td>
                                    <?php 
                                    
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
                                            $show_awal = explode('-', $aktivitas->tanggal_awal);
                                            $show_akhir = explode('-', $aktivitas->tanggal_akhir);
                                            
                                            // variabel pecahkan 0 = tanggal
                                            // variabel pecahkan 1 = bulan
                                            // variabel pecahkan 2 = tahun
                                        
                                            $first_date = $show_awal[2] . ' ' . $bulan[ (int)$show_awal[1] ] . ' ' . $show_awal[0];
                                            $final_date = $show_akhir[2] . ' ' . $bulan[ (int)$show_akhir[1] ] . ' ' . $show_akhir[0];
                                            $tanggal_sekarang = date('Y-m-d H:i:s');
                                    ?>
                                    <td><?php echo $first_date; ?></td>
                                    <td><?php echo $final_date;
                                     ?> 


                                    <?php 

                                    $t_akhir = new DateTime($aktivitas->tanggal_akhir);
                                    $t_awal = new DateTime($aktivitas->tanggal_awal);
                                    $t_saat_ini = new DateTime($tanggal_sekarang);

                                    $interval = $t_saat_ini->diff($t_akhir);

                                    $diffInDays  = $interval->format('%a');

                                    ?>


                                     @if ($tanggal_sekarang > $aktivitas->tanggal_akhir)

                                     <br>
                                     <div class="alert alert-danger alert-block">
                                         {{-- <button type="button" class="close" data-dismiss="alert">×</button>	 --}}
                                           <strong>Sudah Terlewat <?php echo $diffInDays . ' Hari' ?></strong>
                                       </div>
 
                                     @elseif($tanggal_sekarang < $aktivitas->tanggal_akhir)

                    
                                     <br>
                                     <div class="alert alert-warning alert-block">
                                         {{-- <button type="button" class="close" data-dismiss="alert">×</button>	 --}}
                                           <strong>H - <?php echo $diffInDays ; ?></strong>
                                       </div>
                                     @endif
                           

                                    </td>
                                    <td>{{$aktivitas->penanggung_jawab}}</td>



                                    <td>

                                    {{-- @if ($aktivitas->status_aktivitas == "on_going")

                                    <div class="alert alert-warning alert-block">
                                        <strong>On Going</strong>
                                    </div>

                                    @elseif($aktivitas->status_aktivitas == "finished")

                                    <div class="alert alert-success alert-block">
                                        <strong>Finished</strong>
                                    </div>



                                    @elseif($aktivitas->status_aktivitas == "cancelled")

                                    
                                    <div class="alert alert-danger alert-block">
                                        <strong>Cancelled</strong>
                                    </div>

                                    
                                    @else
                                    Tidak Ada                                        
                                    @endif --}}


                                    @if ($aktivitas->persentase_progress != 100)

                                    <div class="alert alert-warning alert-block">
                                        <strong>On Going</strong>
                                    </div>
                                        
                                    @elseif($aktivitas->persentase_progress == 100)
                                    
                                    <div class="alert alert-success alert-block">
                                        <strong>Finished</strong>
                                    </div>

                                                                       
                                    @else
                                        
                                    <div class="alert alert-danger alert-block">
                                        <strong>Cancel</strong>
                                    </div>

                                    @endif


                                    
                                    </td>





                                    <td>
                                       {{$aktivitas->persentase_progress}}
                                    </td>
                                  
                                    <td>
                                    <center>
                                        <img src="{{asset('storage/AktivitasProjek/' . $aktivitas->foto_aktivitas )}}" alt="" style = "width:50%">
                                    </center>

                                    </td>

                                    <td>
                                        <a href="{{route('adminLihatAktivitas', $aktivitas->id)}}" class="btn btn-primary">Lihat Aktivitas</a>
                                        <br>
                                        <br>


                                        <form action="{{route('adminStoreNotifikasi')}}" method = "POST" enctype="multipart/form-data">
                                            @csrf
                                        
                                            <input type="hidden" name="nama_aktivitas" id="" value="{{$aktivitas->nama_aktivitas}}">

                                            <input type="hidden" name="tanggal_awal_aktivitas" value="{{$aktivitas->tanggal_awal}}">
                                            <input type="hidden" name="tanggal_akhir_aktivitas" value="{{$aktivitas->tanggal_akhir}}">
                                            <input type="hidden" name="aktivitas_projek_id" value = "{{$aktivitas->id}}">
                                            <input type="hidden" name="icon_notifikasi" value = "{{Auth::user()->gambar_profil}}">
                                            <input type="hidden" name="pengirim_notifikasi" value = "{{Auth::user()->name}}">



                                        <?php 
                                        $tanggal_sekarang = date('Y-m-d H:i:s');
                                        ?>
                                        
                                        @if ($tanggal_sekarang > $aktivitas->tanggal_akhir)
                                        <button class = "btn btn-warning" disabled type = "submit">Sudah Lewat Deadline</button>
                                        @else
                                        <button class = "btn btn-success" type = "submit">Beri Notifikasi</button>
                                        @endif
                                


                                        </form>

                              

                                        <br><br>

                                        {{-- <form action="{{route('adminHapusAktivitas', $aktivitas->id)}}" method = "POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type = "submit">Hapus Aktivitas</button>
                                        </form> --}}

                                        <a href="#" class = "btn btn-danger" data-toggle="modal" data-target = "#modalhapusAktivitas">Hapus Aktivitas</a>

                                 
                                        
                                    </td>


                                    {{-- <td> 

                                                                             
                                        <a href="{{route('adminLihatAktivitas', $aktivitas->id)}}" class = "btn btn-primary">Lihat Aktivitas</a>
                                        <br>
                                        <a href= "{{route('adminEditAktivitas', $aktivitas->id)}}" class = "btn btn-warning" style = "margin-top:10px;">Edit Projek</a>
                                        <br>

                                        <form action="{{route('adminHapusAktivitas', $aktivitas->id)}}" method = "POST">
                                            @csrf
                                            @method('DELETE')

                                            <button class = "btn btn-danger" style = "margin-top:10px;">Hapus Projek</button>
                                        </form>

                                        
                                    
                                    </td> --}}
                                    {{-- <td>$320,800</td> --}}
                                </tr>

                                @endforeach
                    
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


           



            </div>
            <!-- /.container-fluid -->









@endsection




@section('form_penting')

<form action="{{route('adminTambahAktivitas')}}" method="post" enctype="multipart/form-data">
    @csrf

<div class="modal fade" id="modaltambahAktivitas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Aktivitas</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-body">
        {{-- <h6> <strong> Silakan Tambahkan Data Projek  </strong> </h6> --}}


        <div class="form-group">
            <label for="nama_aktivitas"> Nama Aktivitas</label>
            <input type="text" name="nama_aktivitas" id="nama_aktivitas" class = "form-control" placeholder="Masukkan Nama Aktivitas">
        </div>

            <div class="form-group">
                <label for="tanggal_awal"> Tanggal Awal Aktivitas</label>
                <input type="date" name="tanggal_awal" id="tanggal_awal" class = "form-control" placeholder="Masukkan Tanggal Awal">
            </div>

            <div class="form-group">
                <label for="tanggal_akhir"> Tanggal Akhir Aktivitas</label>
                <input type="date" name="tanggal_akhir" id="tanggal_akhir" class = "form-control" placeholder="Masukkan Tanggal Akhir">
            </div>

            <div class="form-group">
                <label for="penanggung_jawab"> Penanggung Jawab Aktivitas</label>
                <input type="text" name="penanggung_jawab" id="penanggung_jawab" class = "form-control" placeholder="Masukkan Nama Aktivitas">
            </div>


            <div class="form-group">
                <label for="persentase_progress"> Progress ( 0 - 100 % )</label>
                <input type="number" name="persentase_progress" id="persentase_progress" class = "form-control" placeholder="Masukkan Progress">
            </div>





            
            {{-- <div class="form-group">
                <label for="status_aktivitas">Status Aktivitas</label>
                    <select name="status_aktivitas" id="status_aktivitas" class = "form-control">
                        <option value="" selected disabled> -- Silakan Pilih --</option>
                        <option value="on_going"> On Going</option>
                        <option value="finished">Finished</option>
                        <option value="cancelled">Cancelled</option>
                    </select>
            </div> --}}




            <div class="form-group">
                <label for="foto_aktivitas"> Foto Aktivitas</label>
                <input type="file" name="foto_aktivitas" id="foto_aktivitas" class = "form-control">
            </div>

  
            <input type="hidden" name="jenis_projek_id" value = {{$jenis_projek_id->id}}>

            <input type="hidden" name="nama_projek" value = "{{$jenis_projek_id->nama_projek}}">


      </div>
      <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" type = "submit">Tambah Data</button>
      </div>
  </div>
</div>
</div>


</form>


















<form action="{{route('adminHapusAktivitas', $aktivitas->id)}}" method = "POST">
    @csrf
    @method('DELETE')

<div class="modal fade" id="modalhapusAktivitas" tabindex="-1" role="dialog" aria-labelledby="modalhapusAktivitasLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="modalhapusAktivitasLabel">Anda Yakin Hapus Aktivitas Ini ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-body">
        {{-- <h6> <strong> Silakan Tambahkan Data Projek  </strong> </h6> --}}

        Jika Anda Yakin Menghapus Aktivitas ini maka silakan tekan tombol Hapus. Jika tidak, tekan tombol Tidak.

      </div>
      <div class="modal-footer">
        <button class="btn btn-danger" type = "submit">Hapus</button>
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
  
      </div>
  </div>
</div>
</div>


</form>














    
@endsection