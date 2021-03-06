<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <style>
        .bg-login-image
        {
            /* background:url("{{asset('src/images/logo_sementara.png')}}"); */
            background:url("{{asset('logo_pt.jpeg')}}");
            background-position:center;
            /* background-size:cover; */
            background-size:80%;

            background-repeat: no-repeat;
    
        }


            #logo_sementara{
                width:30%;
                margin-bottom:2%;
            }
  
            @media only screen and (min-width : 900px){
                #logo_sementara {
                    display:none;
                }
            }
    </style>



    <title> @yield('title')</title>
{{-- 
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> --}}

    <!-- Custom fonts for this template-->
    <link href="{{asset('src/bootstrap/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('src/bootstrap/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">


        @yield('content')



    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('src/bootstrap/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('src/bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('src/bootstrap/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('src/boostrap/js/sb-admin-2.min.js')}}"></script>

</body>

</html>