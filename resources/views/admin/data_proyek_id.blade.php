@extends('template.template')


@section('title')

Data {{$jenis_Projek->nama_projek}}
    
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
                        <h1 class="h3 mb-0 text-gray-800">Data Projek</h1>

                        

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

                                    <img src="{{asset('storage/Projek/'.$jenis_Projek->gambar_projek)}}" alt="" style = "width:70%">

                                </div>

                                <div class="col-md-8">

                                    <h2>{{$jenis_Projek->nama_projek}}</h2>

                                    <ul>
                                        <li>Durasi Projek : {{$jenis_Projek->durasi_projek}}</li>
                                        <li>Status Projek : 
                                        @if ($jenis_Projek->status_projek == "on_going")
                                        On Going
                                        @elseif($jenis_Projek->status_projek == "finished")
                                        Finished 
                                        @elseif($jenis_Projek->status_projek == "cancelled")
                                        Cancelled   
                                        @endif
                                           
                                        </li>

                                        <li>Anggaran Projek : 
                                            <?php 
                                        
                                            $hasil_rupiah = "Rp " . number_format($jenis_Projek->anggaran_projek,2,',','.');
                                            echo $hasil_rupiah;
                                            
                                            ?>
                                        </li>

                                        <li>Deskripsi Projek : 
                                            {{$jenis_Projek->deskripsi_projek}}
                                        </li>

                                    </ul>
                                        
                                    <br>

                                    {{-- <button class = "btn btn-primary"> Edit Projek</button> --}}
                                    <a href = "{{route('adminEditProjek', $jenis_Projek->id)}}" class = "btn btn-primary"> Edit Projek</a>

                                </div>

                            </div>
                  







                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->






    
@endsection