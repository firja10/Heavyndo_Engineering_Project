@extends('template.template')

@section('title')

Data Notifikasi

@endsection


@section('style')
<style>
        #notifikasi {
        background-color:#ffff;
        /* color:#5073DC; */
    }

    #notifikasi a, #notifikasi i {
        color:#5073DC;
    }
</style>
    
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
                        <h1 class="h3 mb-0 text-gray-800">Tabel Data Notifikasi</h1>

                        

                        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Projek</a> --}}

{{-- 
                                <a href = "#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle = "modal" data-target = "#modaltambahAktivitas"><i
                                    class="fas fa-plus fa-sm text-white-50" ></i> Tambah Data Aktivitas</a> --}}

                    </div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 justify-content-center d-flex">
                        {{-- <h6 class="m-0 font-weight-bold text-primary">
                            DataTables Example</h6> --}}
                            <button class = "btn btn-dark mr-auto" onclick="history.back()">Previous</button>

                            <button class = "btn btn-success ml-auto" data-toggle = "modal" data-target = "#TambahNotifikasi"> <i class = "fas fa-plus"></i> Tambah Notifikasi </button>
                            
                    
                        </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama Notifikasi</th>
                                        <th>Pengirim Notifikasi</th>
                                        <th>Tanggal Notifikasi</th>
                                        <th>Deskripsi Notifikasi</th>
                                         {{-- <th>Nama Aktivitas</th>
                                        <th>Tanggal Awal Aktivitas</th>
                                        <th>Tanggal Akhir Aktivitas</th> --}}
                                        <th>Aksi</th>
                                        {{-- <th>Aksi</th> --}}
                                        {{-- <th>Salary</th> --}}
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Nama Notifikasi</th>
                                        <th>Pengirim Notifikasi</th>
                                        <th>Tanggal Notifikasi</th>
                                        <th>Deskripsi Notifikasi</th>
                                         {{-- <th>Nama Aktivitas</th>
                                        <th>Tanggal Awal Aktivitas</th>
                                        <th>Tanggal Akhir Aktivitas</th> --}}
                                        <th>Aksi</th>
                                        {{-- <th>Aksi</th> --}}
                                        {{-- <th>Salary</th> --}}
                                    </tr>
                                </tfoot>
                                <tbody>

                                @foreach ($notifikasis as $notifikasi_aktivitas)
                                    

                                <tr>
                                    <td>{{$notifikasi_aktivitas->nama_notifikasi}}</td>
                                    <td>{{$notifikasi_aktivitas->pengirim_notifikasi}}</td>
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
                                            // $show_awal = explode('-', $notifikasi_aktivitas->tanggal_awal_aktivitas);
                                            // $show_akhir = explode('-', $notifikasi_aktivitas->tanggal_akhir_aktivitas);
                                            $show_sekarang = explode('-', $notifikasi_aktivitas->tanggal_notifikasi);
                                            
                                            // variabel pecahkan 0 = tanggal
                                            // variabel pecahkan 1 = bulan
                                            // variabel pecahkan 2 = tahun
                                        
                                            // $first_date = $show_awal[2] . ' ' . $bulan[ (int)$show_awal[1] ] . ' ' . $show_awal[0];
                                            // $final_date = $show_akhir[2] . ' ' . $bulan[ (int)$show_akhir[1] ] . ' ' . $show_akhir[0];
                                            $present_date = $show_sekarang[2] . ' ' . $bulan[ (int)$show_sekarang[1] ] . ' ' . $show_sekarang[0];
                                    
                                    ?>
                                     <td><?php echo $present_date; ?></td>
                                    <td>{{$notifikasi_aktivitas->deskripsi_notifikasi}}</td>
                                    
    
                                                        
                                   <td>
                                        <a href="{{route('adminLihatNotifikasi', $notifikasi_aktivitas->id)}}" class="btn btn-primary">Lihat Notifikasi</a>
                                

                                        <br><br>
                                        {{-- <form action="{{route('adminHapusNotifikasi', $notifikasi_aktivitas->id)}}" method = "POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type = "submit">Hapus Notifikasi</button>

                                        </form> --}}

                                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modalhapusNotifikasi<?php echo $notifikasi_aktivitas->id ?>">Hapus Notifikasi</a>
                                      
                                        
                                    </td>


                                    {{-- <td> 

                                                                             
                                        <a href="{{route('adminLihatAktivitas', $notifikasi_aktivitas->id)}}" class = "btn btn-primary">Lihat Aktivitas</a>
                                        <br>
                                        <a href= "{{route('adminEditAktivitas', $notifikasi_aktivitas->id)}}" class = "btn btn-warning" style = "margin-top:10px;">Edit Projek</a>
                                        <br>

                                        <form action="{{route('adminHapusAktivitas', $notifikasi_aktivitas->id)}}" method = "POST">
                                            @csrf
                                            @method('DELETE')

                                            <button class = "btn btn-danger" style = "margin-top:10px;">Hapus Projek</button>
                                        </form>

                                        
                                    
                                    </td> --}}
                                    {{-- <td>$320,800</td> --}}
                                </tr>










                                <form action="{{route('adminHapusNotifikasi', $notifikasi_aktivitas->id)}}" method = "POST">
                                    @csrf
                                    @method('DELETE')
                                
                                <div class="modal fade" id="modalhapusNotifikasi<?php echo $notifikasi_aktivitas->id ?>" tabindex="-1" role="dialog" aria-labelledby="modalhapusNotifikasiLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="modalhapusNotifikasiLabel">Anda Yakin Hapus Notifikasi ini ?</h5>
                                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">×</span>
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                
                                
                                        Jika Anda Yakin Menghapus Notifikasi ini maka silakan tekan tombol Hapus. Jika tidak, tekan tombol Tidak.
                                
                                      </div>
                                      <div class="modal-footer">
                                        <button class="btn btn-danger" type = "submit">Hapus</button>
                                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                                  
                                      </div>
                                  </div>
                                </div>
                                </div>
                                
                                
                                </form>







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





{{-- <form action="{{route('adminHapusNotifikasi', $notifikasi_aktivitas->id)}}" method = "POST">
    @csrf
    @method('DELETE')

<div class="modal fade" id="modalhapusNotifikasi" tabindex="-1" role="dialog" aria-labelledby="modalhapusNotifikasiLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="modalhapusNotifikasiLabel">Anda Yakin Hapus Notifikasi Ini ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-body">


        Jika Anda Yakin Menghapus Notifikasi ini maka silakan tekan tombol Hapus. Jika tidak, tekan tombol Tidak.

      </div>
      <div class="modal-footer">
        <button class="btn btn-danger" type = "submit">Hapus</button>
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
  
      </div>
  </div>
</div>
</div>


</form> --}}









<form action="{{route('TambahNotifikasi')}}" method = "POST">
    @csrf

<div class="modal fade" id="TambahNotifikasi" tabindex="-1" role="dialog" aria-labelledby="TambahNotifikasiLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="TambahNotifikasiLabel">Tambah Notifikasi</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-body">
        {{-- <h6> <strong> Silakan Tambahkan Data Projek  </strong> </h6> --}}


        <div class="form-group">

            <label for="naam_notifikasi">Nama Notifikasi</label>
            <input type="text" class="form-control" name = "nama_notifikasi" id = "nama_notifikasi">

        </div>


        <div class="form-group">   

            <label for="deskripsi_notifikasi">Deskripsi Notifikasi</label>
          
            <textarea name="deskripsi_notifikasi" id="deskripsi_notifikasi" cols="30" rows="10" class = "form-control">

            </textarea>

        
        </div>


      </div>
      <div class="modal-footer">

          <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
          
          <button class="btn btn-primary" type = "submit">Tambah</button>
  
      </div>
  </div>
</div>
</div>


</form>



    
@endsection