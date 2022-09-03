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
                            <table class="table table-bordered" id="data_proyek" width="100%" cellspacing="0">
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
       
                                <tbody>

                                @foreach ($jenis_Projek->reverse() as $projeks)
                                    

                                <?php 
                                

                                $status_projek = DB::table('aktivitas_projeks')->where('jenis_projek_id',$projeks->id)->count();

                                $status_projek_full = DB::table('aktivitas_projeks')->where('jenis_projek_id','=',$projeks->id)->where('persentase_progress','=',100)->count();



                                // $status_projek_full = count($projeks_full);

                                ?>




                                <tr>
                                    <td>{{$projeks->nama_projek}}</td>
                                    <td>{{$projeks->durasi_projek}}</td>

                                    <td>
                               
                                        @if ($status_projek_full == $status_projek && $status_projek != 0)

                                        <div class="alert alert-success alert-block">
                                            <strong>Finished</strong>
                                        </div>
                                            
                                        @elseif($status_projek_full != $status_projek)
                                        <div class="alert alert-warning alert-block">
                                            <strong>On Going</strong>
                                        </div>
                                        @elseif($status_projek_full == 0 || $status_projek_full == NULL)

                                        <div class="alert alert-dark alert-block">
                                            <strong>Empty</strong>
                                        </div>

                                        @else
                                        
                                        <div class="alert alert-danger alert-block">
                                            <strong>Cancelled</strong>
                                        </div>
                                            
                                        @endif
                                    </td>




                                    {{-- <td>
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
                                    
                                    </td> --}}








                                    <td>
                                    <?php 


                                      $total_rab = DB::table('anggarans')->where('projek_id', $projeks->id)->sum('rab');


                                        
                                        // $hasil_rupiah = "Rp " . number_format($projeks->anggaran_projek,2,',','.');

                                        // $hasil_rupiah = "Rp " . number_format($total_rab,2,',','.');
                                        // echo $hasil_rupiah;
                                      
                                        $pajak = 0.1*($total_rab);

                                        $hasil = $pajak + $total_rab;

                                        $hasil_rupiah = number_format($hasil,2,',','.');

                                        echo 'Rp. '. $hasil_rupiah;




                                        
                                        ?>
                                    </td>
                                    <td>
                                    <center>
                                        <img src="{{asset('storage/Projek/' . $projeks->gambar_projek )}}" alt="" style = "width:50%">
                                    </center>
                                    
                                        {{-- {{$projeks->gambar_projek}} --}}
                                    </td>
                                    <td> 
                                    <center>
                                        
                        
                                        {{-- <button class="btn btn-success" type = "button">Validasi</button> --}}
                                                                
                                        <a href="{{route('adminLihatProjek', $projeks->id)}}" class = "btn btn-primary mt-2">Lihat Projek</a>

                                        <br>
                                        <a href= "{{route('adminEditProjek', $projeks->id)}}" class = "btn btn-warning mt-2" style = "margin-top:10px;">Edit Projek</a>
                                        <br>
                                        
                                        {{-- <form action="{{route('adminHapusProjek', $projeks->id)}}" method = "POST">
                                            @csrf
                                            @method('DELETE')

                                            <button class = "btn btn-danger" style = "margin-top:10px;">Hapus Projek</button>
                                        </form> --}}


                                        <a href="#" class="btn btn-danger mt-2" data-toggle="modal" data-target="#modalhapusProjek<?php echo $projeks->id ?>">Hapus Projek</a>


                                        {{-- <a class="btn btn-danger mt-2" data-toggle="modal" data-target="#modalhapusProjek" id = "hapusProjekTombol" data-attr ="{{route('adminHapusProjek', $projeks->id)}}">Hapus Notifikasi</a> --}}
                                        
                                    </center>            
                                    </td>
                                    {{-- <td>$320,800</td> --}}
                                </tr>










                                <form action="{{route('adminHapusProjek', $projeks->id)}}" method = "POST">
                                    @csrf
                                    @method('DELETE')
                                
                                <div class="modal fade" id="modalhapusProjek<?php echo $projeks->id ?>" tabindex="-1" role="dialog" aria-labelledby="modalhapusProjekLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="modalhapusProjekLabel">Anda Yakin Hapus Projek Ini ?</h5>
                                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">×</span>
                                          </button>
                                      </div>
                                      <div class="modal-body" id = "modalhapusProjekBody">
                                        {{-- <h6> <strong> Silakan Tambahkan Data Projek  </strong> </h6> --}}
                                
                                        Jika Anda Yakin Menghapus Projek ini maka silakan tekan tombol Hapus. Jika tidak, tekan tombol Tidak.
                                
                                      </div>
                                      <div class="modal-footer">
                                        <button class="btn btn-danger" type = "submit">Hapus</button>
                                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                                  
                                      </div>
                                  </div>
                                </div>
                                </div>
                                
                                
                                </form>






















                                @endforeach
                    
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->









@endsection



@section('form_penting')









@endsection




@push('script')

<script>
    $(document).ready( function () {
$('#dataTable').DataTable();
} );
</script>








<script>

// $(document).on('click', '#hapusProjekTombol', function(event) {
//         event.preventDefault();
//         let href = $(this).attr('data-attr');
//         $.ajax({
//             url: href
//             , beforeSend: function() {
//                 $('#loader').show();
//             },
//             // return the result
//             success: function(result) {
//                 $('#modalhapusProjek').modal("show");
//                 $('#modalhapusProjekBody').html(result).show();
//             }
//             , complete: function() {
//                 $('#loader').hide();
//             }
//             , error: function(jqXHR, testStatus, error) {
//                 console.log(error);
//                 alert("Page " + href + " cannot open. Error:" + error);
//                 $('#loader').hide();
//             }
//             , timeout: 8000
//         })
//     });


</script>







    
@endpush