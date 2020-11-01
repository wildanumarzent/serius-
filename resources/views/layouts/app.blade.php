
<!DOCTYPE html>
<html>
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="{{asset('assets/images/feruri.png')}}">

        <title>Management SDM</title>

        <!-- DataTables -->
        <link href="{{asset('plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{asset('plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Multi Item Selection examples -->
        <link href="{{asset('plugins/datatables/select.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />


         <!--Form Wizard-->
        <link rel="stylesheet" type="text/css" href="{{asset('plugins/jquery.steps/css/jquery.steps.css')}}" />

        <link href="{{asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">

        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/loading.css')}}" rel="stylesheet" type="text/css" />

        <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
        

    </head>

<body class="fixed-left">
    {{-- <div class="preloader">
        <div class="loading">
          <img src="poi.gif" width="80">
          <p>Harap Tunggu</p>
        </div>
      </div> --}}
      
    <div id="wrapper">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                   
                    @include('layouts.top_bar')
                    
                    @include('layouts.sidebar')
                @else
                    {{-- <a href="{{ route('login') }}">Login</a> --}}
                @endauth
            </div>
        @endif
        <div class="content-page" >
            <div class="content">
                <div class="container-fluid">
                    {{-- <div class="preloader">
                        <div class="loading">
                          <img src="{{asset('assets/images/sp-loading.gif')}}" width="80">
                          <p>Harap Tunggu</p>
                        </div>
                      </div> --}}
                      <div id="contents">
                          @yield('content')
                      </div>
                </div>
            </div> 
        </div>
        
    </div>

        <!-- END wrapper -->
@stack('prepend-script')
     @include('layouts.script')
@stack('addon-script')
</body>

<!-- Mirrored from coderthemes.com/ubold/purple/page-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jun 2018 06:34:45 GMT -->
</html>