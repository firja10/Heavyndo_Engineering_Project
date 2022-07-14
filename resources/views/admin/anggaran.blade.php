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


                                <a href = "#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle = "modal" data-target = "#modaltambahAnggaran"><i
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
                                        <th>Nama Anggaran</th>
                                        <th>Nominal</th>
                                        <th>Aksi</th>
                         
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Nama Projek</th>
                                        <th>Nama Anggaran</th>
                                        <th>Nominal</th>
                                        <th>Aksi</th>
                            
                                    </tr>
                                </tfoot>
                                <tbody>

                                @foreach ($anggaran as $anggaran_projeks)
                                    
                                <tr>
                                    <td>{{$anggaran_projeks->nama_projek}}</td>
                                    <td>{{$anggaran_projeks->detail_nama}}</td>
                                    <td>
                                    
                                        <?php 
                                            
                                            
                                            $anggaran_satuan = 'Rp.'. number_format($anggaran_projeks->rab,2,',','.');

                                            echo $anggaran_satuan;
                                            ?>

                                     
                                    </td>     

                                    <td> 
                                        <a href="{{route('AdminDataAnggaranEditId', $anggaran_projeks->id)}}" class="btn btn-success">Edit</a>

                                        <br>
                                        <br>
                      
                                        <form action="{{route('AdminHapusAnggaran', $anggaran_projeks->id)}}" method = "POST">

                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-danger" type = "submit">Hapus Anggaran</button> 
                                        
                                        </form>
                          
                                    </td>


                                </tr>
                    

                 
                         
                                @endforeach
                    
                                
                                </tbody>
                            </table>
                        </div>

                        <?php 
                                
                        $anggaran_khusus = DB::table('anggarans')->where('projek_id',$id)->sum('rab');
                   
                        
                        ?>
                        


                        <br><br>




                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                       
                   

                                    
                                  <tr>
                                    <td class = "bg-primary text-white">Total Anggaran</td>
                                    <td class = "bg-light text-dark"><?php 
                                    $total_anggaran = number_format($anggaran_khusus,2,',','.');
                                    echo 'Rp. '. $total_anggaran; ?></td>
                                </tr>

                    
                                
               
                            </table>
                        </div>






                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->









@endsection