@extends('template.template')

@section('title')

Data Aktivitas {{ $aktivitas_projek->nama_aktivitas}}
    
@endsection


@section('content')










            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                {{-- <h1 class="h3 mb-2 text-gray-800">Tabel Data Aktivitas</h1>
                <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                    For more information about DataTables, please visit the <a target="_blank"
                        href="https://datatables.net">official DataTables documentation</a>.</p> --}}



                                            <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Data {{$aktivitas_projek->nama_aktivitas}}</h1>

                        

                        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Aktivitas</a> --}}


                                {{-- <a href = "#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle = "modal" data-target = "#modaltambahProjek"><i
                                    class="fas fa-plus fa-sm text-white-50" ></i> Tambah Data Aktivitas</a> --}}







                                    









                    </div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        {{-- <h6 class="m-0 font-weight-bold text-primary">
                            DataTables Example</h6> --}}
                            <button class = "btn btn-dark" onclick = "history.back()">Previous</button>
                    </div>
                    <div class="card-body">
                 



                        <form method="POST" action="{{route('adminUpdateAktivitas', $aktivitas_projek->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                
                            <div class="form-group">
                                <label for="NameInput">Nama Aktivitas</label>
                                <input type="text" class="form-control" id="NameInput" placeholder = "Nama Aktivitas" value="{{$aktivitas_projek->nama_aktivitas}}" name = "nama_aktivitas">
                            </div>


                            {{-- <div class="form-group">
                                <label for="DurasiInput">Durasi Aktivitas</label>
                                <input type="text" class="form-control" id="DurasiInput" placeholder = "Durasi Aktivitas" value="{{$aktivitas_projek->durasi_aktivitas}}" name = "durasi_aktivitas">
                            </div> --}}

                            <div class="form-group">
                                <label for="PersentaseInput">Persentase Progress</label>
                                <input type="number" class="form-control" id="PersentaseInput" placeholder = "Persentase Progress" value="{{$aktivitas_projek->persentase_progress}}" name = "persentase_progress">
                            </div>


                            <div class="form-group">
                                <label for="PJInput">Penanggung Jawab</label>
                                <input type="text" class="form-control" id="PJInput" placeholder = "Penanggung Jawab" value="{{$aktivitas_projek->penanggung_jawab}}" name = "penanggung_jawab">
                            </div>



                            <div class="form-group">
                                <label for="AwalInput">Tanggal Awal</label>
                                <input type="date" class="form-control" id="AwalInput" placeholder = "dd-mm-yy" value="{{$aktivitas_projek->tanggal_awal}}" name = "tanggal_awal">
                            </div>

                            
                            <div class="form-group">
                                <label for="AkhirInput">Tanggal Akhir</label>
                                <input type="date" class="form-control" id="AkhirInput" placeholder = "dd-mm-yy" value="{{$aktivitas_projek->tanggal_akhir}}" name = "tanggal_akhir">
                            </div>




                            <div class="form-group">
                                <label for="StatusInput">Status Aktivitas</label>

                                <select name="status_aktivitas" id="StatusInput" class = "form-control">
                                  
                                        @if ($aktivitas_projek->status_projek == "on_going")
                                        <option value="on_going" disabled selected>
                                            On Going
                                        </option>
                                        @elseif($aktivitas_projek->status_projek == "finished")
                                        <option value="finished" disabled selected>    
                                            Finished
                                        </option>
                                        @elseif($aktivitas_projek->status_projek == "cancelled")  
                                        <option value="cancelled" disabled selected>  
                                            Cancelled
                                        </option>
                                        @endif
                                 
                                    <option value="on_going">On Going</option>
                                    <option value="finished">Finished</option>
                                    <option value="cancelled">Cancelled</option>
                                </select>
                                {{-- <input type="text" class="form-control" id="StatusInput" placeholder = "Status Projek" value="{{$aktivitas_projek->status_aktivitas}}" name = "status_aktivitas"> --}}
                            </div>





                            <div class="form-group">

                                <img src="{{asset('storage/AktivitasProjek/'.$aktivitas_projek->foto_aktivitas )}}" alt="" style = "width:100px">
                                    <br> <br>
                                <label for="gambaraktivitas">Foto Aktivitas</label>
                                <input type="file" class="form-control" id="gambaraktivitas" value = "{{$aktivitas_projek->foto_aktivitas}}" name = "foto_aktivitas">

                            </div>


                            

                    
                            {{-- <div class="form-group">
                              <label for="exampleFormControlSelect2">Status Jabatan</label>
                              <select class="form-control" id="exampleFormControlSelect2">
                          
                                @if ($aktivitas_projek->is_admin == 1)
                                <option value="" selected disabled >Admin</option>
                                @elseif($aktivitas_projek->is_supervisor == 1)
                                <option value="" selected disabled >SuperVisor</option>
                                @elseif($aktivitas_projek->is_manager == 1)
                                <option value="" selected disabled >Manager</option>
                                @endif
                                <option>Admin</option>
                                <option>SuperVisor</option>
                                <option>Manager</option>
                              </select>
                            </div> --}}

                            <center>
                                <button class = "btn btn-primary" type = "submit">Update Data</button>
                            </center>
                           

                          </form>






                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->






@endsection