@extends('template.template')
@section('title')

Data Rencana Anggaran Biaya Proyek PT. HEAVYNDO
    
@endsection




@section('style')


<style>
    #rab {
        background-color:#ffff;
        /* color:#5073DC; */
    }

    #rab a, #rab i {
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
                        <h1 class="h3 mb-0 text-gray-800">Tabel Data Rencana Anggaran Biaya (RAB) Projek</h1>

                        

                        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Projek</a> --}}


                                {{-- <a href = "#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle = "modal" data-target = "#modaltambahProjek"><i
                                    class="fas fa-plus fa-sm text-white-50" ></i> Tambah Data Projek</a> --}}

                    </div>






                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                        
                        Tabel Data Anggaran Setiap Projek
                        
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Uraian Projek</th>
                                        <th>Anggaran Projek</th>
                                        <th>Aksi</th>
                                       
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Uraian Projek</th>
                                        <th>Anggaran Projek</th>
                                        <th>Aksi</th>
                                        
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                          $no = 1;
                                        ?>

                                @foreach ($rab_projeks as $rabs)

                                <?php 
                                        
                                $hasil_rupiah = "Rp " . number_format($rabs->anggaran_projek,2,',','.');
                                    
                              
                                
                                ?>

                                <tr>
                                    <td>

                                       <?php echo $no++; ?>
                                    
                                    </td>

                                    <td>
                                        {{$rabs->deskripsi_projek}}
                                    </td>
                                    <td>
                                        <?php   echo $hasil_rupiah; ?>
                                    </td>

                                    <td>
                                        <a href="{{route('SupervisorEditRAB', $rabs->id)}}" class = "btn btn-primary">Edit Anggaran</a>
                                    </td>
                                
                                </tr>

                                @endforeach
                    
                                
                                </tbody>
                            </table>
                       

                            <table class = "table table-bordered">

                                <?php 
                                    
                                  $total_anggaran =  DB::table('jenis__projeks')->sum('anggaran_projek');

                                  $ppn = ((float)$total_anggaran)*0.1;

                                  $hasil_rupiah_total =   "Rp " . number_format($total_anggaran,2,',','.');
                                  $hasil_rupiah_ppn =   "Rp " . number_format($ppn,2,',','.');

                                    ?>

                                <tr>
                                    <td class = "bg-dark text-white">Jumlah Anggaran</td>
                                    <td class = "bg-dark text-white"><?php echo $hasil_rupiah_total; ?></td>
                                </tr>
                                
                                <tr>
                                    <td class = "bg-warning text-dark">PPN 10%</td>
                                    <td class = "bg-warning text-dark"><?php echo $hasil_rupiah_ppn; ?></td>
                                </tr>

                               <tr>
                                    <td class = "bg-success text-white">Total Anggaran Biaya</td>
                                    <td class = "bg-success text-white"><?php 
                                    $total_semua = $total_anggaran + $ppn ;

                                    $hasil_rupiah_total =   "Rp " . number_format($total_semua,2,',','.');

                                    echo  $hasil_rupiah_total;
                                    ?></td>
                               </tr>

                            </table>


                       
                       
                        </div>
                    </div>
                </div>








                
            </div>
            <!-- /.container-fluid -->









@endsection