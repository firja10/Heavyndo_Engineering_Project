@extends('template.template')


@section('title')

Edit Data Anggaran Rincian {{$anggaran->nama_projek}}
    
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
                        <h1 class="h3 mb-0 text-gray-800">Edit Data Rincian Anggaran {{$anggaran->nama_projek}}</h1>

                        

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
                 



                        <form method="POST" action="{{route('AdminUpdateAnggaran', $anggaran->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
             
                   <?php 
                   


                   ?>

                            <div class="form-group">

                                <label for="detail_nama">Nama Kebutuhan</label>
                                <input type="text" class="form-control" name = "detail_nama" value = "{{$anggaran->detail_nama}}" id = "detail_nama">


                                <label for="AnggaranInput">Nominal</label>
                                <input type="text" class="form-control" id="AnggaranInput" placeholder = "Anggaran Projek" value="{{$anggaran->rab}}" name = "rab">
        
                            
                            </div>

                          
                

                            <center>
                                <button class = "btn btn-primary" type = "submit">Update Data</button>
                            </center>
                           

                          </form>






                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->





            <script>
                var AnggaranInput = document.getElementById('AnggaranInput');
                AnggaranInput.addEventListener("keyup", function (e) 
                {
                    AnggaranInput.value = formatRupiah(this.value, "Rp. ");
            
                });
            
            
             function formatRupiah(angka, prefix) {
                
                var number_string = angka.replace(/[^,\d]/g, "").toString(),
                split = number_string.split(","),
                sisa = split[0].length % 3,
                AnggaranInput = split[0].substr(0,sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);
            
            
                if (ribuan) {
                separator = sisa ? "." : "";
                AnggaranInput += separator + ribuan.join(".");
              }
            
              AnggaranInput = split[1] != undefined ? AnggaranInput + "," + split[1] : AnggaranInput;
              return prefix == undefined ? AnggaranInput : AnggaranInput ? "Rp. " + AnggaranInput : "";
            
            
             }
            
            
            </script>
            






    
@endsection