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
                    <div class="card-header py-3">
                        {{-- <h6 class="m-0 font-weight-bold text-primary">
                            DataTables Example</h6> --}}
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
                                        <th>Gambar Aktivitas</th>
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
                                        <th>Gambar Aktivitas</th>
                                        {{-- <th>Aksi</th> --}}
                                        {{-- <th>Salary</th> --}}
                                    </tr>
                                </tfoot>
                                <tbody>

                                @foreach ($aktivitas_projek as $aktivitas)
                                    

                                <tr>
                                    <td>{{$aktivitas->nama_aktivitas}}</td>
                                    <td>{{$aktivitas->durasi_aktivitas}} Hari</td>
                                    <td>{{$aktivitas->tanggal_awal}}</td>
                                    <td>{{$aktivitas->tanggal_akhir}}</td>
                                    <td>{{$aktivitas->penanggung_jawab}}</td>
                                    <td>
                                    @if ($aktivitas->status_aktivitas == "on_going")

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
                                    @endif
                                    
                                    </td>
                                  
                                    <td>
                                    <center>
                                        <img src="{{asset('storage/AktivitasProjek/' . $aktivitas->foto_aktivitas )}}" alt="" style = "width:50%">
                                    </center>

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