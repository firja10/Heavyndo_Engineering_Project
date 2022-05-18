@extends('template.template')


@section('title')

Data {{$users->name}}
    
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
                        <h1 class="h3 mb-0 text-gray-800">Edit Data {{$users->name}}</h1>

                        

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
                 



                        <form method="POST" action="" >
                            @csrf
                            <div class="form-group">
                              <label for="EmailInput">Alamat Email</label>
                              <input type="email" class="form-control" id="EmailInput" placeholder="Email" value ="{{$users->email}}" name = "email" >
                            </div>


                            <div class="form-group">
                                <label for="NameInput">Nama</label>
                                <input type="text" class="form-control" id="NameInput" placeholder = "Name" value="{{$users->name}}" name = "name">
                            </div>



                            <div class="form-group">
                                <label for="PassInput">Password Baru</label>
                                <input type="password" class="form-control" id="PassInput" placeholder= "Password" value="{{$users->password}}" name = "password">
                            </div>


                            <div class="form-group">

                                <label for="gambarprofil">Foto Profil</label>
                                <input type="file" class="form-control" id="gambarprofil" value = "{{$users->gambar_profil}}" name = "password">

                            </div>


                            

                    
                            {{-- <div class="form-group">
                              <label for="exampleFormControlSelect2">Status Jabatan</label>
                              <select class="form-control" id="exampleFormControlSelect2">
                          
                                @if ($users->is_admin == 1)
                                <option value="" selected disabled >Admin</option>
                                @elseif($users->is_supervisor == 1)
                                <option value="" selected disabled >SuperVisor</option>
                                @elseif($users->is_manager == 1)
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