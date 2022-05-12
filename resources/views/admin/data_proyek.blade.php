@extends('template.template')
@section('title')

Data Proyek PT. HEAVYNDO
    
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
                        <h1 class="h3 mb-0 text-gray-800">Tabel Data Projek</h1>

                        

                        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Projek</a> --}}


                                <a href = "#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle = "modal" data-target = "#modaltambahProjek"><i
                                    class="fas fa-plus fa-sm text-white-50" ></i> Tambah Data Projek</a>







                                    









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
                                        <th>Nama Projek</th>
                                        <th>Durasi Projek</th>
                                        <th>Status Projek</th>
                                        <th>Anggaran Projek</th>
                                        <th>Gambar Projek</th>
                                        {{-- <th>Salary</th> --}}
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Nama Projek</th>
                                        <th>Durasi Projek</th>
                                        <th>Status Projek</th>
                                        <th>Anggaran Projek</th>
                                        <th>Gambar Projek</th>
                                        {{-- <th>Salary</th> --}}
                                    </tr>
                                </tfoot>
                                <tbody>

                                @foreach ($jenis_Projek as $projeks)
                                    

                                <tr>
                                    <td>{{$projeks->nama_projek}}</td>
                                    <td>{{$projeks->durasi_projek}}</td>
                                    <td>{{$projeks->status_projek}}</td>
                                    <td>{{$projeks->anggaran_projek}}</td>
                                    <td>{{$projeks->gambar_projek}}</td>
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