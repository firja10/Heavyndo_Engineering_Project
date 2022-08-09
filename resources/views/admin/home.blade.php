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

                      

                        

                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" ><i
                                class="fas fa-download fa-sm text-white-50" ></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">












                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">

                           

                            <div class="card border-left-primary shadow h-100 py-2">

                                <button type="button" class="btn btn-white" data-toggle="modal" data-target="#Projek1">
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
                                            <i class="fas fa-calendar fa-2x text-300 text-primary"></i>
                                        </div>
                                        
                                    </div>
                                    

                                 


                                </div>

                                </button>`





                                {{-- <div class="row">
                                    <div class="col">
                                        <div class="collapse" id="collapseExample">
                                            <div class="card card-body">
                                              Anim pariatur cliche reprehenderit.
                                            </div>
                                          </div>
                                    </div>
                                </div> --}}


                            </div>

                        




                        </div>




                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">




                                <button type="button" class="btn btn-white" data-toggle="modal" data-target="#User1">

                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Jumlah User</div>
                                            
                                            <?php 
                                            $users = DB::table('users')->count();
                                            ?>

                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $users; ?>
                                            
                                                <br>

                                                <?php 




                                                ?>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-300 text-success"></i>
                                        </div>
                                    </div>
                                
                                </div>

                            </button>

                            </div>

                    


                        </div>





                                 <!-- Earnings (Monthly) Card Example -->
                                 {{-- <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-danger shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                        Jumlah Aktivitas</div>
                                                    
                                                    <?php 
                                                    // $users = DB::table('aktivitas_projeks')->count();
                                                    ?>
        
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                                                    //  echo $users;
                                                      ?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-list-alt fa-2x text-300 text-danger"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}



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



                @if (Auth::user()->is_admin == 1)
                    
            

                    <div class="row">

                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2 bg-primary">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                                        Tambah Projek</div>
                                                    
                                          
                                                </div>
                                                <div class="col-auto">
                                                    <button class = "btn bg-primary border-0" data-toggle="modal" data-target="#modaltambahProjek">
                                                        <i class="fas fa-plus-circle fa-2x text-300 text-white"></i>
                                                    </button>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-success shadow h-100 py-2 bg-success">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                                        Tambah User</div>
                                                    
                                          
                                                </div>
                                                <div class="col-auto">
                                                    <button class = "btn bg-success border-0" data-toggle="modal" data-target="#modaltambahUser">
                                                        <i class="fas fa-plus-circle fa-2x text-300 text-white"></i>
                                                    </button>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>










                                {{-- <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-danger shadow h-100 py-2 bg-danger">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                                        Tambah Aktivitas</div>
                                                    
                                          
                                                </div>
                                                <div class="col-auto">
                              

                                                    <a class = "btn bg-danger border-0" href = "">
                                                        <i class="fas fa-plus-circle fa-2x text-300 text-white"></i>
                                                    </a>

                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}








                    </div>

                    


                    @else
                    
                    @endif







    

                    <div class="row">

                   


                    <!-- Content Row -->
                    <div class="row">

            

  

                       
                        



                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->























    
@endsection