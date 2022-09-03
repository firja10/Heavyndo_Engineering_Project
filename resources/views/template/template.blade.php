<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> @yield('title')  </title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('src/bootstrap/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->

    {{-- <script defer src="{{ mix('js/app.js') }}"></script>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet"> --}}

    <link href="{{asset('src/bootstrap/css/sb-admin-2.min.css')}}" rel="stylesheet">

    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css"> --}}
    <link rel="shortcut icon" href="{{asset('logo_pt.jpeg')}}" type="image/x-icon">



    <link href="{{asset('src/bootstrap/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">







    @yield('style')

    <style>
        .control-label:after {
  content:"*";
  color:red;
}
    </style>




</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/')}}">
                <div class="sidebar-brand-icon">
                    {{-- <i class="fas fa-laugh-wink"></i> --}}
                    <img src="{{asset('logo_pt.jpeg')}}" alt="" width="60">
                </div>
                <div class="sidebar-brand-text mx-3">PT HEAVYNDO ENGINEERING<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">








            <!-- Nav Item - Dashboard  - Admin -->

            @if(Auth::user()->is_admin == 1)
                
          

            <li class="nav-item" id = "beranda">
                <a class="nav-link" href="{{url('/')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Beranda</span></a>
            </li>



            <li class="nav-item" id = "data_projek">
                <a class="nav-link" href="{{url('/admin/data_proyek')}}">
                    <i class="fas fa-fw fa-list-alt"></i>
                    <span>Data Proyek</span></a>
            </li>



            <li class="nav-item" id = "notifikasi">
                <a class="nav-link" href="{{url('/data_notifikasi')}}">
                    <i class="fas fa-fw fa-bell"></i>
                    <span>Notifikasi</span></a>
            </li>





            <li class="nav-item" id = "kelola_user">
                <a class="nav-link" href="{{url('/admin/kelola_user')}}">
                    <i class="fas fa-fw fa-user-circle"></i>
                    <span>Kelola User</span></a>
            </li>




            {{-- <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-bell"></i>
                    <span>Laporan</span></a>
            </li> --}}


            {{-- <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-cogs"></i>
                    <span>Pengaturan</span></a>
            </li> --}}





             <!-- Nav Item - Dashboard  - SuperVisor -->



             @elseif(Auth::user()->is_supervisor == 1)
                
         

             <li class="nav-item" id = "beranda">
                <a class="nav-link" href="{{url('/')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Beranda</span></a>
            </li>



            <li class="nav-item" id = "data_projek">
                <a class="nav-link" href="{{url('/supervisor/data_proyek')}}">
                    <i class="fas fa-fw fa-file-image"></i>
                    <span>Daftar Proyek</span></a>
            </li>



            {{-- <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/data_proyek')}}">
                    <i class="fas fa-fw fa-tasks"></i>
                    <span>Data Kemajuan</span></a>
            </li>





            <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/kelola_user')}}">
                    <i class="fas fa-fw fa-signal"></i>
                    <span>Grafik</span></a>
            </li> --}}


            <li class="nav-item" id = "rab">
                <a class="nav-link" href="{{url('/supervisor/data_rab')}}">
                    <i class="fas fa-fw fa-credit-card"></i>
                    <span>RAB</span></a>
            </li>




            {{-- <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-bell"></i>
                    <span>Laporan</span></a>
            </li> --}}

{{-- 
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-cogs"></i>
                    <span>Pengaturan</span></a>
            </li> --}}




             <!-- Nav Item - Dashboard  - Manager -->

             @elseif(Auth::user()->is_manager == 1)


             <!-- Nav Item - Dashboard  - Manager -->





             <li class="nav-item" id = "beranda">
                <a class="nav-link" href="{{url('/')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Beranda</span></a>
            </li>



            <li class="nav-item" id = "data_projek">
                <a class="nav-link" href="{{url('/manager/data_proyek')}}">
                    <i class="fas fa-fw fa-list-alt"></i>
                    <span>Data Proyek</span></a>
            </li>


            <li class="nav-item" id = "kelola_user">
                <a class="nav-link" href="{{url('/manager/kelola_user')}}">
                    <i class="fas fa-fw fa-user-circle"></i>
                    <span>Kelola User</span></a>
            </li>



            <li class="nav-item" id = "rab">
                <a class="nav-link" href="{{url('/manager/data_rab')}}">
                    <i class="fas fa-fw fa-credit-card"></i>
                    <span>RAB</span></a>
            </li>






            {{-- <li class="nav-item" id = "grafik">
                <a class="nav-link" href="{{url('/admin/kelola_user')}}">
                    <i class="fas fa-fw fa-signal"></i>
                    <span>Grafik</span></a>
            </li> --}}


            {{-- <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-bell"></i>
                    <span>Laporan</span></a>
            </li> --}}


            {{-- <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-cogs"></i>
                    <span>Pengaturan</span></a>
            </li> --}}



             @else





             <li class="nav-item active" id = "beranda">
                <a class="nav-link" href="{{url('/')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Beranda</span></a>
            </li>



            {{-- <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/kelola_user')}}">
                    <i class="fas fa-fw fa-signal"></i>
                    <span>Grafik</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-bell"></i>
                    <span>Laporan</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-cogs"></i>
                    <span>Pengaturan</span></a>
            </li> --}}





             @endif



            <li class="nav-item">
                
            @if(Auth::check())

                <a class="nav-link"
                href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" >


                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>


                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @else

            <a href="{{url('login')}}" class = "nav-link">
            
                <i class="fas fa-fw fa-sign-in-alt"></i>
                <span>Login</span>
        </a>


            @endif
            </li>

       

      

        

        

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            {{-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="{{asset('src/bootstrap/img/undraw_rocket.svg')}}" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> --}}

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    {{-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> --}}

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        {{-- <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li> --}}







                        <!-- KHUSUS ADMIN ! -->

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Messages -->
                                <?php



                                
                                $hitung_notif = DB::table('notifikasis')->where('status',0)->count();
                                
                                $daftar_notif = DB::table('notifikasis')->where('status',0)->get();



                                ?>
                                <span class="badge badge-danger badge-counter"><?php 
                                
                                if ($hitung_notif > 0) {
                                    # code...
                                    echo $hitung_notif;
                                }

                                else {
                                    
                                }
                          
                                
                                ?></span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                   Pusat Notifikasi
                                </h6>



                                {{-- <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="{{asset('src/bootstrap/img/undraw_profile_1.svg')}}"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a> --}}


                                @foreach ($daftar_notif->reverse() as $message)


                                <a class="dropdown-item d-flex align-items-center" href="{{route('adminLihatNotifikasi', $message->id)}}">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="{{asset('storage/User/' . $message->icon_notifikasi)}}"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">
                                            {{-- I have the photos that you ordered last month, how
                                            would you like them sent to you? --}}
                                            {{$message->nama_notifikasi}}
                                        </div>
                                        <div class="small text-gray-500">
                                            @if ($message->pengirim_notifikasi == NULL)
                                        
                                            Admin
                                            @else
                                            {{$message->pengirim_notifikasi}}                                                
                                            @endif
                                        </div>
                                    </div>
                                </a>

                                    
                                @endforeach

                      

                                <a class="dropdown-item text-center small text-gray-500" href="{{url('/data_notifikasi')}}">Lihat Notifikasi Lain</a>

                                <a class="dropdown-item text-center small text-gray-500" href="#" data-toggle="modal" data-target="#notifikasiModal">Lihat Notifikasi Terbaru</a>



                                
                            </div>
                        </li>











                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> {{Auth::user()->name}} <br> 
                                   @if (Auth::user()->is_admin == 1)

                                   <strong>Admin</strong>

                                   @elseif(Auth::user()->is_supervisor == 1)

                                   <strong>SuperVisor</strong>
                                       
                                   @elseif(Auth::user()->is_manager == 1)
                                   
                                   <strong>Manager</strong>

                                   @else

                                   <strong>User</strong>

                                   @endif
                            
                                 </span>

                                 @if (Auth::user()->gambar_profil == NULL)
                                 <img class="img-profile rounded-circle"
                                 src="{{asset('src/bootstrap/img/undraw_profile.svg')}}">

                                 @else
                                 <img class="img-profile rounded-circle"
                                 src="{{asset('storage/User/'.Auth::user()->gambar_profil )}}">

                                 @endif


                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                {{-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> --}}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" 
                                
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();"
                                
                                >
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->




                    @yield('content')











            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Tugas Andre 2022</span>
               
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


 





    <!-- MODAL TAMBAH PROJEK -->

    <form action="{{route('adminTambahDataProyek')}}" method="post" enctype="multipart/form-data">
        @csrf

  <div class="modal fade" id="modaltambahProjek" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Data Projek</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
          <div class="modal-body">
            {{-- <h6> <strong> Silakan Tambahkan Data Projek  </strong> </h6> --}}

     
                <div class="form-group">
                    <label for="nama_projek" class = "control-label"> Nama Aktivitas</label>
                    <input type="text" name="nama_projek" id="nama_projek" class = "form-control" placeholder="Masukkan Nama Projek" required>
                </div>


                <div class="form-group">
                    <label for="nama_projek" class = "control-label"> Durasi Projek</label>
                    <input type="text" name="durasi_projek" id="durasi_projek" class = "form-control" placeholder="Masukkan Lama Durasi Projek" required>
                </div>




                <div class="form-group">
                    <label for="nama_projek" class = "control-label"> Gambar Projek</label>
                    <input type="file" name="gambar_projek" id="gambar_projek" class = "form-control">
                </div>




          </div>
          <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <button class="btn btn-primary" type = "submit">Tambah Data</button>
          </div>
      </div>
  </div>
</div>


</form>



     <!-- MODAL TAMBAH USER -->







      <!-- MODAL TAMBAH PROJEK -->

    <form action="{{route('adminTambahUser')}}" method="post" enctype="multipart/form-data">
        @csrf

  <div class="modal fade" id="modaltambahUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Data User</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
          <div class="modal-body">
            {{-- <h6> <strong> Silakan Tambahkan Data Projek  </strong> </h6> --}}


            <div class="form-group">
                <label for="name" class = "control-label"> Nama User</label>
                <input type="text" name="name" id="name" class = "form-control" placeholder="Masukkan Nama User" required>
            </div>

                <div class="form-group">
                    <label for="email" class = "control-label"> Email User</label>
                    <input type="email" name="email" id="email" class = "form-control" placeholder="Masukkan Email User" required>
                </div>


                
                <div class="form-group">
                    <label for="password" class = "control-label"> Password User</label>
                    <input type="password" name="password" id="password" class = "form-control" placeholder="Masukkan Password User" required>
                </div>



                <div class="form-group">
                    <label for="is_admin" class = "control-label"> Status Admin (Jika telah dipilih, pilih 'Tidak' di pilihan status lainnya)</label>  
{{--                 
                    <input type="text" name="status_projek" id="status_projek" class = "form-control" placeholder="Masukkan Status Projek Saat Ini "> --}}
                
                    <select name="is_admin" id="is_admin" class = "form-control" required >
                        <option value="" selected disabled> -- Silakan Pilih --</option>
                        <option value=1> Iya</option>
                        <option value=0>Tidak</option>
                    </select>
                
                </div>



                <div class="form-group">
                    <label for="is_supervisor" class = "control-label"> Status SuperVisor (Jika telah dipilih, pilih 'Tidak' di pilihan status lainnya)</label>  
{{--                 
                    <input type="text" name="status_projek" id="status_projek" class = "form-control" placeholder="Masukkan Status Projek Saat Ini "> --}}
                
                    <select name="is_supervisor" id="is_supervisor" class = "form-control" required>
                        <option value="" selected disabled> -- Silakan Pilih --</option>
                        <option value=1> Iya</option>
                        <option value=0>Tidak</option>
                    </select>
                
                </div>



                
                <div class="form-group">
                    <label for="is_manager" class = "control-label"> Status Manager (Jika telah dipilih, pilih 'Tidak' di pilihan status lainnya)</label>  
{{--                 
                    <input type="text" name="status_projek" id="status_projek" class = "form-control" placeholder="Masukkan Status Projek Saat Ini "> --}}
                
                    <select name="is_manager" id="is_manager" class = "form-control" required>
                        <option value="" selected disabled> -- Silakan Pilih --</option>
                        <option value=1> Iya</option>
                        <option value=0>Tidak</option>
                    </select>
                
                </div>


                <div class="form-group">
                    <label for="gambar_profil" class = "control-label"> Foto Profil User</label> 
                    <input type="file" name="gambar_profil" id="gambar_profil" class = "form-control" required>
                </div>


          </div>
          <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <button class="btn btn-primary" type = "submit">Tambah Data</button>
          </div>
      </div>
  </div>
</div>


</form>









<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>





  <?php 
  
  //User
  $user_jumlah_admin = DB::table('users')->where('is_admin', 1)->count();
  $user_jumlah_supervisor = DB::table('users')->where('is_supervisor', 1)->count();
  $user_jumlah_manager = DB::table('users')->where('is_manager', 1)->count();

  //Projek 
  $projek_jumlah_ongoing = DB::table('jenis__projeks')->where('status_projek', 'on_going')->count();
  $projek_jumlah_finished = DB::table('jenis__projeks')->where('status_projek', 'finished')->count();
  $projek_jumlah_cancelled = DB::table('jenis__projeks')->where('status_projek', 'cancelled')->count();
  
  ?>





  <!-- Modal -->
<div class="modal fade" id="User1" tabindex="-1" role="dialog" aria-labelledby="User1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="User1">Daftar User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <button class="btn btn-primary"> Admin : <?php echo $user_jumlah_admin; ?> </button> &nbsp;
          <button class="btn btn-danger"> Supervisor : <?php echo $user_jumlah_supervisor ?> </button> &nbsp;
          <button class="btn btn-success"> Manager : <?php echo $user_jumlah_manager ?> </button> &nbsp;
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>






    <!-- Modal -->
<div class="modal fade" id="Projek1" tabindex="-1" role="dialog" aria-labelledby="Projek1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="Projek1">Daftar Projek</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <button class="btn btn-primary"> On Going : <?php echo $projek_jumlah_ongoing ?> </button> &nbsp;
            <button class="btn btn-success"> Finished : <?php echo $projek_jumlah_finished ?> </button> &nbsp;
            <button class="btn btn-danger"> Cancelled : <?php echo $projek_jumlah_cancelled ?> </button> &nbsp;
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>















  




      <!-- MODAL TAMBAH RAB -->

      <form action="{{route('AdminStoreAnggaran')}}" method="post" enctype="multipart/form-data">
        @csrf

  <div class="modal fade" id="modaltambahAnggaran" tabindex="-1" role="dialog" aria-labelledby="examplemodaltambahAnggaranLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="examplemodaltambahAnggaranLabel">Tambah Data Anggaran</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
          <div class="modal-body">
            {{-- <h6> <strong> Silakan Tambahkan Data Projek  </strong> </h6> --}}

            <?php 
            
            $daftar_projek = DB::table('jenis__projeks')->get();
            
            ?>


            <div class="form-group">
                <label for="nama_projek" class = "control-label"> Nama Projek</label>

                <select name="projek_id" id="projek_id" class = "form-control">
                    @foreach ($daftar_projek as $item_projek)
                    <option value="{{$item_projek->id}}">{{$item_projek->nama_projek}}</option>
                    @endforeach
                </select>

                {{-- <input type="text" name="nama_projek" id="nama_projek" class = "form-control" placeholder="Masukkan Nama Projek" required> --}}
            </div>

            <div class="form-group">
                <label for="detail_nama" class = "control-label"> Nama Kebutuhan</label>
                <input type="text" name="detail_nama" id="detail_nama" class = "form-control" placeholder="Masukkan Nama Kebutuhan" required>
            </div>


            
            <div class="form-group">
                <label for="rab" class = "control-label"> Nominal Anggaran Kebutuhan </label>
                {{-- <input type="number" name="rab" id="rab" class = "form-control" required> --}}
                <input type="number" name="rab" id="rab" class = "form-control" required>
            </div>




          </div>
          <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <button class="btn btn-primary" type = "submit">Tambah Data</button>
          </div>
      </div>
  </div>
</div>


</form>

























































<!-- Pemberitahuan / Pengumuman  -->


<!-- Modal -->
<div class="modal fade bd-example-modal-sm" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>







































<?php 



$tanggal_sekarang = date('Y-m-d');

$new_tanggal_sekarang = new Date($tanggal_sekarang);

$aktivitas_akan_datang = DB::table('aktivitas_projeks')->get();

$array_kosong = array();

foreach ($aktivitas_akan_datang as $array_item) {
    # code...

    $array_kosong[] = $array_item;

}



$array_array_kosong = (array)$array_kosong;

$obj_to_array = json_decode(json_encode($array_kosong), true);



$array_kosong_dua = array();

foreach ($obj_to_array as $arrays_kosong) {
    # code...
    $array_kosong_dua[$arrays_kosong['id']] = $arrays_kosong['tanggal_akhir'];

}

// $encodedulu = json_encode($array_kosong_dua);
// // print_r($obj_to_array);

// $echojson = json_decode($encodedulu, true);




?>


<a class = "btn btn-dark" id = "testclick" href = "{{url('/')}}" style = "display:none"> Klik Aja </a>


<h5 id = "tanggal_test"></h5>







<!-- Modal -->


<div class="modal fade bd-example-modal-md" id="notifikasiModal" tabindex="-1" aria-labelledby="notifikasiModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="notifikasiModalLabel"><?php 
            echo 'NOTIFIKASI PENTING !';
            
            ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
       <?php 



echo 'Salam, Saya dari Admin Heavyndo Engineering ingin mengingatkan bahwa terdapat Deadline Aktivitas kerja yang harus diselesaikan secepatnya. Diharapkan untuk segera diselesaikan. Terima kasih'
       ?>
        <br>
       <strong>Deadline : 
        <br>




        <?php












// $notif_terakhir = DB::table('notifikasis')->first();

$tanggal_ini = date('Y-m-d');
$t_saat_ini = new DateTime($tanggal_ini);


// $notif_terakhir = DB::table('aktivitas_projeks')->first();

$notif_terakhir = DB::table('aktivitas_projeks')->where('tanggal_akhir','>',$tanggal_ini)->get();


?>





        <?php
       




       foreach ($notif_terakhir as $activity_last) {
        # code...



        



       //  $t_awal = new DateTime($request->tanggal_awal_aktivitas);
       $t_akhir = new DateTime($activity_last->tanggal_akhir);


$interval = $t_akhir->diff($t_saat_ini);

$diffInDays  = $interval->format('%a');



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
                                    $show_awal = explode('-', $activity_last->tanggal_awal);
                                    $show_akhir = explode('-', $activity_last->tanggal_akhir);
                                    
                                    // variabel pecahkan 0 = tanggal
                                    // variabel pecahkan 1 = bulan
                                    // variabel pecahkan 2 = tahun
                                
                                    $first_date = $show_awal[2] . ' ' . $bulan[ (int)$show_awal[1] ] . ' ' . $show_awal[0];
                                    $final_date = $show_akhir[2] . ' ' . $bulan[ (int)$show_akhir[1] ] . ' ' . $show_akhir[0];



                    if($diffInDays == 1 ||  $diffInDays == 3 || $diffInDays == 5 || $diffInDays == 7)
                    {

                        echo 'Aktivitas ' . $activity_last->nama_aktivitas . ' - ' . $final_date . ' - ' . $diffInDays .' Hari Lagi <br>' ; 

                    }

                    else {

            

                                               echo "<script type='text/javascript'>window.addEventListener('load', function() {
            $('#notifikasiModal').modal('hide');

        })

</script>


                   ";
                                  

                    }
                                   


       }

       
      
       
       ?> </strong>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup Notifikasi</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>











   <!-- MODAL TAMBAH AKTIVITAS -->

 @yield('form_penting')







<!-- Formatting Rupiah -->







    <!-- Bootstrap core JavaScript-->


    @stack('script')
















 <script type="text/javascript">


// window.addEventListener("load", function() {
//   // Check time and update the button's state every second.
//   setInterval(AutoSubmit, 1000);
// }, false);


//         function AutoSubmit() {

//             $('#exampleModalLong').modal('show');

//             $('.close').click(function(e)
//             {
            
//                 $('#exampleModalLong').fadeOut();
                
//             });

//         }




    </script>
















 





<script>
    var AnggaranRAB = document.getElementById('rab');
    AnggaranRAB.addEventListener("keyup", function (e) 
    {
        AnggaranRAB.value = formatRupiah(this.value, "Rp. ");

    });


 function formatRupiah(angka, prefix) {
    
    var number_string = angka.replace(/[^,\d]/g, "").toString(),
    split = number_string.split(","),
    sisa = split[0].length % 3,
    AnggaranRAB = split[0].substr(0,sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);


    if (ribuan) {
    separator = sisa ? "." : "";
    AnggaranRAB += separator + ribuan.join(".");
  }

  AnggaranRAB = split[1] != undefined ? AnggaranRAB + "," + split[1] : AnggaranRAB;
  return prefix == undefined ? AnggaranRAB : AnggaranRAB ? "Rp. " + AnggaranRAB : "";


 }


</script>










<script type="text/javascript">
    var notificationsWrapper   = $('.dropdown-notifications');
    var notificationsToggle    = notificationsWrapper.find('a[data-toggle]');
    var notificationsCountElem = notificationsToggle.find('i[data-count]');
    var notificationsCount     = parseInt(notificationsCountElem.data('count'));
    var notifications          = notificationsWrapper.find('ul.dropdown-menu');

    if (notificationsCount <= 0) {
      notificationsWrapper.hide();
    }

    // Enable pusher logging - don't include this in production
    // Pusher.logToConsole = true;

    var pusher = new Pusher('API_KEY_HERE', {
      encrypted: true
    });

    // Subscribe to the channel we specified in our Laravel Event
    var channel = pusher.subscribe('status-liked');

    // Bind a function to a Event (the full Laravel class)
    channel.bind('App\\Events\\StatusLiked', function(data) {
      var existingNotifications = notifications.html();
      var avatar = Math.floor(Math.random() * (71 - 20 + 1)) + 20;
      var newNotificationHtml = `
        <li class="notification active">
            <div class="media">
              <div class="media-left">
                <div class="media-object">
                  <img src="https://api.adorable.io/avatars/71/`+avatar+`.png" class="img-circle" alt="50x50" style="width: 50px; height: 50px;">
                </div>
              </div>
              <div class="media-body">
                <strong class="notification-title">`+data.message+`</strong>
                <!--p class="notification-desc">Extra description can go here</p-->
                <div class="notification-meta">
                  <small class="timestamp">about a minute ago</small>
                </div>
              </div>
            </div>
        </li>
      `;
      notifications.html(newNotificationHtml + existingNotifications);

      notificationsCount += 1;
      notificationsCountElem.attr('data-count', notificationsCount);
      notificationsWrapper.find('.notif-count').text(notificationsCount);
      notificationsWrapper.show();
    });
  </script>

















{{-- <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script> --}}




    <script src="{{asset('src/bootstrap/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('src/bootstrap/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <script src="{{asset('src/bootstrap/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('src/bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('src/bootstrap/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('src/bootstrap/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('src/bootstrap/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('src/bootstrap/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('src/bootstrap/js/demo/chart-pie-demo.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('src/bootstrap/js/demo/datatables-demo.js')}}"></script>

</body>

</html>