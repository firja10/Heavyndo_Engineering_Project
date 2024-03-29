@extends('template.template')

@section('title')

Data Aktivitas {{ $aktivitas_projek->nama_aktivitas}}
    
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
                        <h1 class="h3 mb-0 text-gray-800">Data Aktivitas  {{ $aktivitas_projek->nama_aktivitas}}</h1>

                        

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

                                    <img src="{{asset('storage/AktivitasProjek/'.$aktivitas_projek->foto_aktivitas)}}" alt="" style = "width:70%">

                                </div>

                                <div class="col-md-8">

                                    <h2>{{$aktivitas_projek->nama_aktivitas}}</h2>

                                    <ul>
                                        <li>Durasi Projek : {{$aktivitas_projek->durasi_aktivitas}} Hari</li>

                                        
                                        <li>Status Projek : 
                                        @if ($aktivitas_projek->persentase_progress == 100)
                                        Finished
                                        @elseif($aktivitas_projek->persentase_progress < 100 && $aktivitas_projek->persentase_progress != NULL)
                                        On Going
                                        @elseif($aktivitas_projek->persentase_progress == NULL || $aktivitas_projek->persentase_progress == 0)
                                        Empty
                                        @endif
                


                                           
                                        </li>

                                        
                                        <li>Penanggung Jawab : 
                                            <?php 
                                        
                                            // $hasil_rupiah = "Rp " . number_format($aktivitas_projek->anggaran_projek,2,',','.');
                                            // echo $hasil_rupiah;

                                            echo $aktivitas_projek->penanggung_jawab;
                                            
                                            ?>
                                        </li>

                                        <li>Persentase Progress : 
                                        
                                        @if ($aktivitas_projek->persentase_progress == NULL)
                                        Belum Ditulis
                                        @else
                                        {{$aktivitas_projek->persentase_progress}} %
                                        @endif
                                           
                                        
                                        
                                        
                                        </li>

                                        <li>
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
                                           
                                            $show_akhir = explode('-', $aktivitas_projek->tanggal_akhir);
                                            
                                            // variabel pecahkan 0 = tanggal
                                            // variabel pecahkan 1 = bulan
                                            // variabel pecahkan 2 = tahun
                                        
                                          
                                            $final_date = $show_akhir[2] . ' ' . $bulan[ (int)$show_akhir[1] ] . ' ' . $show_akhir[0];

                                            $tanggal_sekarang = date('Y-m-d H:i:s');

                                            ?>    
                                            
                                            Deadline : <?php echo $final_date; ?> &nbsp;

                                            @if ($tanggal_sekarang > $aktivitas_projek->tanggal_akhir)
                                            <br>
                                            <button class = "btn btn-danger">Sudah Melewati Deadline</button>

                                            @else
                                                
                                            @endif

                                        </li>

                                    </ul>
                                        
                                    <br>

                                    {{-- <button class = "btn btn-primary"> Edit Projek</button> --}}
                                    <a href = "{{route('adminEditAktivitas', $aktivitas_projek->id)}}" class = "btn btn-primary"> Edit Aktivitas</a>
                                    <br> <br>
                                    {{-- <a href = "{{route('adminKelolaAktivitas', $aktivitas_projek->id)}}" class = "btn btn-dark"> Lihat Projek</a> --}}

                                </div>

                            </div>
                  



                            <div class="row">
                                {{-- <div class="col-md-6 ">
                                    <button class = "btn btn-dark float-start">Previous</button>
                                </div>
                                <div class="col-md-6 ">
                                    <button class = "btn btn-dark float-end">Next</button>
                                </div> --}}

                                <div class="col-md-12 d-flex justify-content-between">
                                    <button class = "btn btn-dark mr-auto" onclick = "history.back()">Previous</button>
                                    {{-- <button class = "btn btn-dark ml-auto">Next</button> --}}
                                </div>


                            </div>






                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->










@endsection