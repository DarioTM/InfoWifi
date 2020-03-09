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
              <li class="breadcrumb-item active">Points Access</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <div class="w-90 margin-center">
      
            <div class="card card-success">
              <div class="card-header my_card-header" style="background-color:#dc3545!important">
                <h3 class="card-title d-flex align-items-center" style="margin-bottom:0px"><i class="fas fa-chart-bar fa-lg"></i>&nbspAll Points Access</h3>

              </div>
              <div class="card-body">
                  <div class="chart tab-pane active" id="revenue-chart" >
                    <table id="table_id" class="display" style="width:100%" >
                        
                        <thead>
                            <tr class="">
                                <th>Empleado</th>
                                <th>Modelo</th>
                                <th>Ubicacion</th>
                                <th>Latitud</th>
                                <th>Longitud</th>
                                <th>fechaAlta</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        
                    </table>                     
                   </div>
              </div>
              <!-- /.card-body -->
            </div>
          
    </div>  
  
          
</div>



<!--MODAL PARA CREAR EL PUNTO DE ACCESO-->
<div class="modal fade modalCreate"  id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="modalCreateTarget" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Crear Punto de Acceso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
          
        <form method="POST" action="" class="modal-body" id="createForm">
            @csrf
            
            <div class="form-group row mt-4">
                <label for="modelo" class="col-md-4 col-form-label text-md-right">{{ __('Modelo') }}</label>

                <div class="col-md-6">
                    <!--<input id="modelo" type="text" class="form-control" data-id="" name="modelo" value="" required>-->
                    
                    <select id="modelo" class="form-control" name="modelo" >
                      <option value="Xiaomi">Xiaomi</option>
                      <option value="Samsung">Samsung</option>
                      <option value="Huawei">Huawei</option>
                      <option value="Asus">Asus</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="modelo" class="col-md-4 col-form-label text-md-right">{{ __('Ubicacion') }}</label>

                <div class="col-md-6">
                    <input id="ubicacion" type="text" class="form-control" name="ubicacion" value="">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="modelo" class="col-md-4 col-form-label text-md-right">{{ __('Latitud') }}</label>

                <div class="col-md-6">
                    <input id="latitud" type="number" step="any" class="form-control" name="latitud" value="37.16185">
                </div>
            </div>
            
            <div class="form-group row mb-4">
                <label for="modelo" class="col-md-4 col-form-label text-md-right">{{ __('Longitud') }}</label>

                <div class="col-md-6">
                    <input id="longitud" type="number" step="any" class="form-control" name="longitud" value="-3.591497">
                </div>
            </div>
            <input type="hidden" id="fechaAlta" name="fechaAlta" value=""/>
            <input type="hidden" id="iduser" name="iduser" value="{{ $user }}"/>
            
            <div id ="map" > </div> 

          <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Crear</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </form>
  
    </div>
  </div>
</div>


<!--FINAL DEL MODAL PARA CREAR EL PUNTO DE ACCESO-->

<!--MODAL EDIT-->


<div class="modal fade modalEdit"  id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEditTarget" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Acces Point</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
          
        <form method="POST" action="" class="modal-body" id="editForm">
            @csrf
             <div class="form-group row mt-4">
                <label for="modelo" class="col-md-4 col-form-label text-md-right">{{ __('Empleado') }}</label>

                <div class="col-md-6">
                    <select id="idempleado" class="form-control" name="idempleado" >
                      
                    </select>
                </div>
            </div>

            
            <div class="form-group row">
                <label for="modelo" class="col-md-4 col-form-label text-md-right">{{ __('Modelo') }}</label>

                <div class="col-md-6">
                    
                    <select id="modelo" class="form-control" name="modelo" >
                      <option value="Xiaomi">Xiaomi</option>
                      <option value="Samsung">Samsung</option>
                      <option value="Huawei">Huawei</option>
                      <option value="Asus">Asus</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="modelo" class="col-md-4 col-form-label text-md-right">{{ __('Ubicacion') }}</label>

                <div class="col-md-6">
                    <input id="ubicacion" type="text" class="form-control" name="ubicacion" value="">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="modelo" class="col-md-4 col-form-label text-md-right">{{ __('Latitud') }}</label>

                <div class="col-md-6">
                    <input id="latitud" type="number" step="any" class="form-control" name="latitud" value="">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="modelo" class="col-md-4 col-form-label text-md-right">{{ __('Longitud') }}</label>

                <div class="col-md-6">
                    <input id="longitud" type="number" step="any" class="form-control" name="longitud" value="">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="modelo" class="col-md-4 col-form-label text-md-right">{{ __('Fecha Alta') }}</label>

                <div class="col-md-6">
                    <input type="date" id="fechaAlta" name="fechaAlta" value=""/>
                </div>
            </div>
            
            <div id ="emap" > </div> 

          <div class="modal-footer">
                <button type="submit" data-id="" class="btn btn-primary">Save Changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </form>

    </div>
  </div>
</div>



<!--MODAL EDIT-->


<script type="text/javascript" src="{{ url('/public/backend/assets/js/puntoacceso/showPuntoacceso.js') }}"></script>
<script type="text/javascript" src="{{ url('/public/backend/assets/js/puntoacceso/actionPuntoAcceso.js') }}"></script>
<script type="text/javascript" src="{{ url('/public/backend/assets/js/puntoacceso/mapa.js') }}"></script>
<script type="text/javascript" src="{{ url('/public/backend/assets/js/puntoacceso/mapaeditar.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7T4ZQZYAhIF2AuZRJTmxp7a9SVTWVmyQ&callback=initMap" async defer></script>


@endsection