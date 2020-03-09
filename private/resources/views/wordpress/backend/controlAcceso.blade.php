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
              <li class="breadcrumb-item active">Control Access</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <div class="w-90 margin-center">
      
            <div class="card card-success">
              <div class="card-header my_card-header" style="background-color: #343a40!important;">
                <h3 class="card-title d-flex align-items-center" style="margin-bottom:0px"><i class="far fa-calendar-alt"></i>&nbspConnection Schedule</h3>
                <h3 class="card-title d-flex align-items-center estado" ></h3>
              </div>
              <div class="card-body">
                  <div class="chart tab-pane active" id="revenue-chart" >
                    <table id="table_id" class="display" style="width:100%" >
                        <thead>
                            <tr class="">
                    
                                <th><i class="far fa-calendar-check"></i>&nbsp Initial Date</th>
                                <th><i class="far fa-calendar-times"></i>&nbsp Final Date</th>
                                <th><i class="far fa-clock"></i>&nbsp Initial Time</th>
                                <th><i class="fas fa-clock"></i>&nbsp Final Time</th>
                                <th><i class="fas fa-history"></i>&nbsp Minimum period</th>
                            </tr>
                        </thead>
                    </table>   

                   </div>
              </div>
              
                <div class="d-flex justify-content-around mt-5" style="background:#04ba9d; padding:20px 0; color:white!important">
                    <div class="d-flex">
                        <div><i style="margin-top: 4px;" class="far fa-calendar-check"></i>&nbspCurrent date:&nbsp</div>
                        <div id="fecha"></div>
                    </div>
                    <div class="d-flex">
                        <div><i style="margin-top: 4px;" class="far fa-clock"></i>&nbspCurrent Time:&nbsp</div>
                        <div id="hora"></div>
                    </div>
                </div>
              <!-- /.card-body -->
            </div>
          
    </div>  
  
          
</div>



<!--MODAL EDIT-->


<div class="modal fade modalEdit"  id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEditTarget" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
          
        <form method="POST" action="" class="modal-body" id="editForm">
            @csrf

            <div class="form-group row">
                <label for="fechaInicial" class="col-md-4 col-form-label text-md-right">Initial Date</label>

                <div class="col-md-6">
                    <input id="fechaInicial" type="date" class="form-control" data-id="" name="fechaInicial" value="">
                </div>
            </div>

            <div class="form-group row">
                <label for="fechaFinal" class="col-md-4 col-form-label text-md-right">Final Date</label>

                <div class="col-md-6">
                    <input id="fechaFinal" type="date" class="form-control" name="fechaFinal" value="">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="horainicial" class="col-md-4 col-form-label text-md-right">Initial Time</label>

                <div class="col-md-6">
                    <input id="horainicial" type="time" class="form-control" name="horainicial"  step="2" value="">
                </div>
            </div>
            
            
            <div class="form-group row">
                <label for="horafinal" class="col-md-4 col-form-label text-md-right">Final Time</label>

                <div class="col-md-6">
                    <input id="horafinal" type="time" class="form-control" name="horafinal"  step="2"  value="">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="periodominimo" class="col-md-4 col-form-label text-md-right">Minimum period</label>

                <div class="col-md-6">
                    <input id="periodominimo" type="time" class="form-control" name="periodominimo" step="2" value="">
         
                </div>
            </div>
            


          <div class="modal-footer">
                <button type="submit" data-id="" class="btn btn-primary">Save Changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </form>

    </div>
  </div>
</div>



<!--MODAL EDIT-->




<script type="text/javascript" src="{{ url('/public/backend/assets/js/activo/estado.js') }}"></script>
<script type="text/javascript" src="{{ url('/public/backend/assets/js/activo/showActivo.js') }}"></script>



@endsection
