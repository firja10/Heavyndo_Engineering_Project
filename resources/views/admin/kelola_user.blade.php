@extends('template.template')
@section('title')

Kelola Data User PT. HEAVYNDO
    
@endsection



@section('style')

<style>
    #kelola_user {
        background-color:#ffff;
        /* color:#5073DC; */
    }

    #kelola_user a, #kelola_user i {
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
                        <h1 class="h3 mb-0 text-gray-800">Kelola Data User</h1>
                        
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"  data-toggle = "modal" data-target = "#modaltambahUser"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Tambah Data user</a>
                    </div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> --}}
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-paginate" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama User</th>
                                        <th>Foto Profil</th>
                                        <th>Email User</th>
                                        <th>Status User</th>
                                        <th>Tanggal Daftar Akun</th>
                                        <th>Lihat User</th>
                                        {{-- <th>Ilustrasi Projek</th> --}}
                                        {{-- <th>Salary</th> --}}
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Nama User</th>
                                        <th>Foto Profil</th>
                                        <th>Email User</th>
                                        <th>Status User</th>
                                        <th>Tanggal Daftar Akun</th>
                                        <th>Lihat User</th>
                                        {{-- <th>Ilustrasi Projek</th> --}}
                                        {{-- <th>Salary</th> --}}
                                    </tr>
                                </tfoot>
                                <tbody>

                                @foreach ($users as $user)
                                    

                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>

                                        <center>
                                            <img src="{{asset('storage/User/' . $user->gambar_profil )}}" alt="" style = "width:50%">
                                        </center>

                                    </td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        @if ($user->is_admin == 1)
                                        Admin
                                        @elseif($user->is_supervisor == 1)
                                          SuperVisor
                                        
                                        @elseif($user->is_manager == 1)
                                          Manager
                                        @endif
                                        
                                    </td>
                                    <td>{{$user->created_at}}</td>

                                    <td>

                                        {{-- <button class = "btn btn-primary">Lihat User</button> 
                                        <br> --}}
                                        <a href = "{{route('adminEditUser', $user->id)}}"  class = "btn btn-warning" style = "margin-top:10px;">Edit User</a>
                                        <br>
                                        
                                        <form method = "POST" action="{{route('adminHapusUser', $user->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button class = "btn btn-danger" style = "margin-top:10px;" type = "submit">Hapus User</button>
                                        </form>
                                   

                                    </td>
                                    {{-- <td>{{$user->gambar_projek}}</td> --}}
                                    {{-- <td>$320,800</td> --}}
                                </tr>

                                @endforeach
                    
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <br>

                <div class="d-flex justify-content-center">
                    {{-- {!! $users->links() !!} --}}
                </div>

            </div>
            <!-- /.container-fluid -->









@endsection