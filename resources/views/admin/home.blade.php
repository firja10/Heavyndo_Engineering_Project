@extends('template.template')

@section('title')
    Selamat Datang di PT. HEAVYNDO
@endsection




@section('style')

<style>
    #beranda {
        background-color:#ffff;
        /* color:#5073DC; */
    }

    #beranda a, #beranda i {
        color:#5073DC;
    }
</style>
    
@endsection




@section('content')





                     





                

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">

                        @if (Auth::user()->is_admin == 1)

                        <h1 class="h3 mb-0 text-gray-800">Selamat Datang Bapak / Ibu Administrator</h1>

                        @elseif(Auth::user()->is_supervisor == 1)

                        <h1 class="h3 mb-0 text-gray-800">Selamat Datang Bapak / Ibu Supervisor</h1>


                        @elseif(Auth::user()->is_manager == 1)

                        <h1 class="h3 mb-0 text-gray-800">Selamat Datang Bapak / Ibu Manager</h1>
                        


                        @else
                            
                        @endif

                      

                        

                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">












                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Jumlah Projek</div>
                                            <?php 
                                            
                                            $jumlah_projek = DB::table('jenis__projeks')->count();

                                            ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_projek ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Jumlah User</div>
                                            
                                            <?php 
                                            $users = DB::table('users')->count();
                                            ?>

                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $users; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        {{-- <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}



                        <!-- Pending Requests Card Example -->
                        {{-- <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}





                    </div>

                    <!-- Content Row -->

    

                    <div class="row">

                   


                    <!-- Content Row -->
                    <div class="row">

            

  

                       
                        



                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->























    
@endsection