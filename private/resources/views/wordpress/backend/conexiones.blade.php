@extends('wordpress.backend.wp-admin')
@section('content')


<div class="content-wrapper " style="background:white!important;">
  
  
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!--<h1 class="m-0 text-dark">Employees</h1>-->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
              <li class="breadcrumb-item active">Connections</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <div class="w-90 margin-center">
      
            <div class="card card-success">
              <div class="card-header my_card-header" style="background-color:#359adc!important">
                <h3 class="card-title d-flex align-items-center" style="margin-bottom:0px"><i class="fas fa-chart-bar fa-lg"></i>&nbspAll Connections</h3>

              </div>
              <div class="card-body">
                  <div class="chart tab-pane active" id="revenue-chart" >
                    <table id="table_id" class="display" style="width:100%" >
                        
                        <thead>
                            <tr class="">
                              <th>Punto de Acceso</th>
                              <th>Fecha</th>
                              <th>Hora</th>
                              <th>MAC</th>
                              <th>Actions</th>
                            </tr>
                        </thead>
                        
                    </table>                     
                   </div>
              </div>
              <!-- /.card-body -->
            </div>
          
    </div>  
  
          
</div>

<script type="text/javascript" src="{{ url('/public/backend/assets/js/conexiones/showConexiones.js') }}"></script>
<script type="text/javascript" src="{{ url('/public/backend/assets/js/conexiones/actionConexiones.js') }}"></script>

@endsection


