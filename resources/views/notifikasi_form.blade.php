@extends('template')

@section('title')

Form Notifikasi
    
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
                        <h1 class="h3 mb-0 text-gray-800">Tambah Notifikasi</h1>

                        

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

                            <button class = "btn btn-dark" onclick="history.back()">Previous</button>

                    </div>
                    <div class="card-body">
                 



                        <form method="POST" action="" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
             
                   <?php 
                   


                   ?>

                            <div class="form-group">

                                <label for="naam_notifikasi">Nama Notifikasi</label>
                                <input type="text" class="form-control" name = "nama_notifikasi" id = "nama_notifikasi">


                                <label for="deskripsi_notifikasi">Deskripsi Notifikasi</label>
                              
                                <textarea name="deskripsi_notifikasi" id="deskripsi_notifikasi" cols="30" rows="10" class = "form-control"></textarea>
        
                            
                            </div>

                          
                

                            <center>
                                <button class = "btn btn-primary" type = "submit">Update Data</button>
                            </center>
                           

                          </form>






                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->





    
@endsection

