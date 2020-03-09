<!DOCTYPE html>
<html>
<head>
    <base href="{{ url('public/backend/.') }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Backend InfoWifi</title>
    
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="dist/css/style.css">
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css" type="text/css" />
    <link rel="stylesheet" href="{{ url('/public/backend/assets/css/infowifi/styleBackend.css') }}" type="text/css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="dist/js/adminlte.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <!--<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>-->
    <script>
      $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>

    <script src="assets/js/activo/actionActivo.js"></script>
    
  
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">


          <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" >
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item  d-sm-inline-block">
        <a href="{{ url('admin') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item  d-sm-inline-block">
        <a href="{{ url('/') }}" class="nav-link">Website</a>
      </li>

      

    </ul>
    
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item d-sm-inline-block" style="display: flex!important;align-items: center;">
        @php echo do_shortcode('[gtranslate]'); @endphp
      </li>
      @auth
      <li class="nav-item  d-sm-inline-block">
          <form action="{{url('logout')}}" method="post" style="margin-bottom:0px!important;">
              @csrf
              <button type="submit" class="btn nav-item  d-sm-inline-block"><i class="fas fa-sign-out-alt" style="color:#7e7e7e!important"></i></button>
          </form>
      </li>
      @endauth

    </ul>


  </nav>
  <!-- /.navbar -->

          <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
    <a href="{{ url('admin') }}" class="brand-link">
      <img src="@php echo get_template_directory_uri(); @endphp/img/logoBack.png" alt="AdminLTE Logo" class="brand-image ">
      <span class="brand-text font-weight-light"><img src="@php echo get_template_directory_uri(); @endphp/img/logoBackb.png" height="29.5px"></span>
    </a>
            
            <!-- Sidebar -->
            <div class="sidebar">
              <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            
              @if(Auth::user()->type == 'admin')
                  <li class="nav-item has-treeview">
                    <a href="{{url('admin/empleados')}}" class="nav-link">
                     
                      <i class="nav-icon fas fa-users"></i>
                      <p>
                        Employees
                      </p>
                    </a>
                  </li>
              @endif
                  <li class="nav-item has-treeview">
                    <a href="{{url('admin/puntoAcceso')}}" class="nav-link">
                      <i class="nav-icon fas fa-map-marker"></i>
                      <p>
                        Points Access
                      </p>
                    </a>
                  </li>
                  <li class="nav-item has-treeview">
                    <a href="{{url('admin/conexiones')}}" class="nav-link">
                      <i class="nav-icon fas fa-wifi"></i>
                      
                      <p>
                        Connections
                      </p>
                    </a>
                  </li>
                  @if(Auth::user()->type == 'admin')
                  <li class="nav-item has-treeview">
                    <a href="{{url('admin/controlacceso')}}" class="nav-link">
                      <i class="nav-icon fas fa-key"></i>
                      <p>
                        Control Access
                        
                      </p>
                    </a>
                   
                  </li>
                  @endif
                  
                  <li class="nav-item has-treeview mt-5 estadoNav btnDisable">
                    <a  class="nav-link" style="color:white!important">
                     <i class="nav-icon fas fa-stop-circle"></i>
                      
                      <p class="estadoNavPa">
           
                      </p>
                    </a>
                  </li>

                  
                </ul>
              </nav>
              <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>



          @yield('content')
        

     

    </div>

</body>
<!-- ./wrapper -->




</html>


<style type="text/css">
  
  
  .btnDisable.btn-danger:hover{
    background:#c82333!important;
  }
  
    .btnDisable.btn-success:hover{
    background:#28a745!important;
  }
  
</style>