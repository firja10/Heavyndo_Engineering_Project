@extends('template.template')

@section('title')
Data Messages    
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
                        <h1 class="h3 mb-0 text-gray-800">Tabel Data Notifikasi</h1>

                        

                        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Projek</a> --}}

{{-- 
                                <a href = "#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle = "modal" data-target = "#modaltambahAktivitas"><i
                                    class="fas fa-plus fa-sm text-white-50" ></i> Tambah Data Aktivitas</a> --}}

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
                                        <th>Nama Pesan</th>
                                        <th>Pengirim Pesan</th>
                                        <th>Tanggal Pesan</th>
                                        <th>Deskripsi Pesan</th>
                                         <th>Nama Pengirim</th>
                                         <th>Status Pengirim</th>
                                         <th>Aksi Pesan</th>
                                    
                    
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Nama Pesan</th>
                                        <th>Pengirim Pesan</th>
                                        <th>Tanggal Pesan</th>
                                        <th>Deskripsi Pesan</th>
                                         <th>Nama Pengirim</th>
                                         <th>Status Pengirim</th>
                                         <th>Aksi Pesan</th>

                                    </tr>
                                </tfoot>
                                <tbody>

                                @foreach ($messages->reverse() as $messages_tanda)
                                    

                                <tr>
                                    <td>{{$messages_tanda->judul_messages}}</td>
                                    <td>{{$messages_tanda->pengirim_notifikasi}}</td>
                                    <?php 
                                    
                                    $bulan = array (
                                                1 =>   'Januari',
                                                'Februari',
                                                'Maret',
                                                'April',
                                                'Mei',
                                                'Juni',
                                                'Juli',
                                                'Agustus',
                                                'September',
                                                'Oktober',
                                                'November',
                                                'Desember'
                                            );
                                       
                                            $show_sekarang = explode('-', $messages_tanda->tanggal_messages);
                                            
                                            // variabel pecahkan 0 = tanggal
                                            // variabel pecahkan 1 = bulan
                                            // variabel pecahkan 2 = tahun
                                        
                                            $present_date = $show_sekarang[2] . ' ' . $bulan[ (int)$show_sekarang[1] ] . ' ' . $show_sekarang[0];
                                    
                                    ?>
                                     <td><?php echo $present_date; ?></td>
                                    <td>{{$messages_tanda->isi_messages}}</td>
                                    <td>{{$messages_tanda->nama_pengirim}}</td>
                                    <td>{{$messages_tanda->status_pengirim}}</td>

                                 
                                                        
                                   <td>
                                        <a href="{{route('adminLihatNotifikasi', $messages_tanda->id)}}" class="btn btn-primary">Lihat Notifikasi</a>
                                

                                        <br><br>
                                        <form action="{{route('adminHapusNotifikasi', $messages_tanda->id)}}" method = "POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type = "submit">Hapus Notifikasi</button>

                                        </form>
                                      
                                        
                                    </td>


                                    {{-- <td> 

                                                                             
                                        <a href="{{route('adminLihatAktivitas', $messages_tanda->id)}}" class = "btn btn-primary">Lihat Aktivitas</a>
                                        <br>
                                        <a href= "{{route('adminEditAktivitas', $messages_tanda->id)}}" class = "btn btn-warning" style = "margin-top:10px;">Edit Projek</a>
                                        <br>

                                        <form action="{{route('adminHapusAktivitas', $messages_tanda->id)}}" method = "POST">
                                            @csrf
                                            @method('DELETE')

                                            <button class = "btn btn-danger" style = "margin-top:10px;">Hapus Projek</button>
                                        </form>

                                        
                                    
                                    </td> --}}
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