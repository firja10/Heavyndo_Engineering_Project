@extends('template.template')

@section('title')

Data Notifikasi

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
                    <div class="card-header py-3">
                        {{-- <h6 class="m-0 font-weight-bold text-primary">
                            DataTables Example</h6> --}}
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
                                         <th>Nama Aktivitas</th>
                                        <th>Tanggal Awal Aktivitas</th>
                                        <th>Tanggal Akhir Aktivitas</th>
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
                                         <th>Nama Aktivitas</th>
                                        <th>Tanggal Awal Aktivitas</th>
                                        <th>Tanggal Akhir Aktivitas</th>
                                        <th>Aksi</th>
                                        {{-- <th>Aksi</th> --}}
                                        {{-- <th>Salary</th> --}}
                                    </tr>
                                </tfoot>
                                <tbody>

                                @foreach ($notifikasis as $notifikasi_aktivitas)
                                    

                                <tr>
                                    <td>{{$notifikasi_aktivitas->nama_notifikasi}}</td>
                                    <td>{{$notifikasi_aktivitas->pengirim_notifikasi}} Hari</td>
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
                                            $show_awal = explode('-', $notifikasi_aktivitas->tanggal_awal);
                                            $show_akhir = explode('-', $notifikasi_aktivitas->tanggal_akhir);
                                            $show_sekarang = explode('-', $notifikasi_aktivitas->tanggal_notifikasi);
                                            
                                            // variabel pecahkan 0 = tanggal
                                            // variabel pecahkan 1 = bulan
                                            // variabel pecahkan 2 = tahun
                                        
                                            $first_date = $show_awal[2] . ' ' . $bulan[ (int)$show_awal[1] ] . ' ' . $show_awal[0];
                                            $final_date = $show_akhir[2] . ' ' . $bulan[ (int)$show_akhir[1] ] . ' ' . $show_akhir[0];
                                            $present_date = $show_sekarang[2] . ' ' . $bulan[ (int)$show_sekarang[1] ] . ' ' . $show_sekarang[0];
                                    
                                    ?>
                                     <td><?php echo $present_date; ?></td>
                                    <td>{{$notifikasi_aktivitas->deskripsi_notifikasi}}</td>
                                    <td>{{$notifikasi_aktivitas->nama_aktivitas}}</td>
                                    <td><?php echo $first_date; ?></td>
                                    <td><?php echo $final_date; ?></td>
                                 
                                                        
                                   <td>
                                        <a href="{{route('adminLihatAktivitas', $notifikasi_aktivitas->id)}}" class="btn btn-primary">Lihat Aktivitas</a>
                                        <br>
                                        <br>



                                        <button class = "btn btn-success">Beri Notifikasi</button>

                                        <br><br>
                                        <button class="btn btn-danger">Hapus Aktivitas</button>
                                        
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

                                @endforeach
                    
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->






    
@endsection