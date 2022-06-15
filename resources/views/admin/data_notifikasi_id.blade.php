@extends('template.template')
@section('title')
    Data Notifikasi {{$notifikasis->nama_notifikasi}}
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
                        <h1 class="h3 mb-0 text-gray-800">Data Notifikasi {{$notifikasis->nama_notifikasi}}</h1>

                        

                        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Projek</a> --}}


                                {{-- <a href = "#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle = "modal" data-target = "#modaltambahProjek"><i
                                    class="fas fa-plus fa-sm text-white-50" ></i> Tambah Data Projek</a> --}}

                        

                    </div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        {{-- <h6 class="m-0 font-weight-bold text-primary">
                            DataTables Example</h6> --}}
                    </div>
                    <div class="card-body">
                 
                    
                            <div class="row">
                                <div class="col-md-4">
                                    <center>
                                    <img src="{{asset('storage/User/'.$notifikasis->icon_notifikasi)}}" alt="" style = "width:70%; margin-bottom:10px;">
                                    <br>
                                  
                                        <strong>
                                            <span style = "margin-top:10px">{{$notifikasis->pengirim_notifikasi}}</span>
                                        </strong>
                                   
                                    </center>
                                  

                                </div>

                                <div class="col-md-8">

                                    <h2>{{$notifikasis->nama_notifikasi}}</h2>


                                    <?php 
                                    
                                    $tanggal_notif = $notifikasis->tanggal_notifikasi ;


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
                                            $show_awal = explode('-', $notifikasis->tanggal_awal_aktivitas);
                                            $show_akhir = explode('-', $notifikasis->tanggal_akhir_aktivitas);
                                            $show_present =  explode('-', $tanggal_notif);
                                            
                                            // variabel pecahkan 0 = tanggal
                                            // variabel pecahkan 1 = bulan
                                            // variabel pecahkan 2 = tahun
                                        
                                            $first_date = $show_awal[2] . ' ' . $bulan[ (int)$show_awal[1] ] . ' ' . $show_awal[0];
                                            $final_date = $show_akhir[2] . ' ' . $bulan[ (int)$show_akhir[1] ] . ' ' . $show_akhir[0];
                                            $present_date = $show_present[2] . ' ' . $bulan[ (int)$show_present[1] ] . ' ' . $show_present[0];

                                    ?>

                                    
                                    <span><?php echo $present_date; ?></span>
                                    <br>
                                     <span>Deadline : </span><button class = "btn btn-warning" style = "cursor:pointer"><?php echo $final_date; ?></button>
                                    <br>

                             
                                    <p>
                                        <br>
                                        {{$notifikasis->deskripsi_notifikasi}}
                                    </p>


                                        
                                    <br>

                                    {{-- <button class = "btn btn-primary"> Edit Projek</button> --}}
                                    {{-- <a href = "{{route('adminEditProjek', $notifikasis->id)}}" class = "btn btn-primary"> Edit Projek</a>
                                    <br> <br> --}}
                                    <center>
                                        <a href = "{{route('adminLihatAktivitas', $notifikasis->aktivitas_projek_id)}}" class = "btn btn-primary"> Lihat Aktivitas Kerja</a>
                                    </center>
                                  

                                </div>

                            </div>
                  







                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->




    
@endsection