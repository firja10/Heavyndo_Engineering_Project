@extends('template.template')
@section('title')

Data Proyek PT. HEAVYNDO
    
@endsection




@section('style')


<style>
    #data_projek {
        background-color:#ffff;
        /* color:#5073DC; */
    }

    #data_projek a, #data_projek i {
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
                            <button class = "btn btn-dark" onclick = "history.back()">Previous</button>
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
                                        <th>Aksi</th>
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
                                        <th>Aksi</th>
                                        {{-- <th>Salary</th> --}}
                                    </tr>
                                </tfoot>
                                <tbody>

                                @foreach ($jenis_Projek as $projeks)
                                    

                                <tr>
                                    <td>{{$projeks->nama_projek}}</td>
                                    <td>{{$projeks->durasi_projek}}</td>
                                    <td>
                                    @if ($projeks->status_projek == "on_going")

                                    <div class="alert alert-warning alert-block">
                                        <strong>On Going</strong>
                                    </div>

                                    @elseif($projeks->status_projek == "finished")

                                    <div class="alert alert-success alert-block">
                                        <strong>Finished</strong>
                                    </div>



                                    @elseif($projeks->status_projek == "cancelled")

                                    
                                    <div class="alert alert-danger alert-block">
                                        <strong>Cancelled</strong>
                                    </div>

                                    
                                    @else
                                    Tidak Ada                                        
                                    @endif
                                    
                                    </td>
                                    <td>
                                    <?php 


                                      $total_rab = DB::table('anggarans')->where('projek_id', $projeks->id)->sum('rab');


                                        
                                        // $hasil_rupiah = "Rp " . number_format($projeks->anggaran_projek,2,',','.');

                                        $hasil_rupiah = "Rp " . number_format($total_rab,2,',','.');
                                        echo $hasil_rupiah;
                                        
                                        ?>
                                    </td>
                                    <td>
                                    <center>
                                        <img src="{{asset('storage/Projek/' . $projeks->gambar_projek )}}" alt="" style = "width:50%">
                                    </center>
                                    
                                        {{-- {{$projeks->gambar_projek}} --}}
                                    </td>
                                    <td> 

                                                                             
                                        <a href="{{route('adminLihatProjek', $projeks->id)}}" class = "btn btn-primary">Lihat Projek</a>
                                        <br>
                                        <a href= "{{route('adminEditProjek', $projeks->id)}}" class = "btn btn-warning" style = "margin-top:10px;">Edit Projek</a>
                                        <br>

                                        <form action="{{route('adminHapusProjek', $projeks->id)}}" method = "POST">
                                            @csrf
                                            @method('DELETE')

                                            <button class = "btn btn-danger" style = "margin-top:10px;">Hapus Projek</button>
                                        </form>

                                        
                                    
                                    </td>
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