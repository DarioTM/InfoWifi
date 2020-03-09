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
              <li class="breadcrumb-item active">Employees</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <div class="w-90 margin-center">
      
            <div class="card card-success">
              <div class="card-header my_card-header">
                <h3 class="card-title d-flex align-items-center" style="margin-bottom:0px"><i class="fas fa-chart-bar fa-lg"></i>&nbspAll the Employees</h3>

              </div>
              <div class="card-body">
                  <div class="chart tab-pane active" id="revenue-chart" >
                    <table id="table_id" class="display" style="width:100%" >
                        
                        <thead>
                            <tr class="">
                    
                                <th>Name</th>
                                <th>Email</th>
                                <th>Type</th>
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





<!--MODAL CREATE-->


<div class="modal fade modalCreate"  id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="modalCreateTarget" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
          
        <form method="POST" action="" class="modal-body" id="createForm">
            @csrf

            <div class="form-group row mt-4">
                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" data-id="" name="name" value="">
                </div>
            </div>

            <div class="form-group row mb-4">
                <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>

                <div class="col-md-6">
                    <input id="email" type="text" class="form-control" name="email" value="">
                </div>
            </div>

          <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Create</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </form>

    </div>
  </div>
</div>



<!--FIN MODAL CREATE-->


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

            <div class="form-group row mt-2">
                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" data-id="" name="name" value="">
                </div>
            </div>

            <div class="form-group row mb-4">
                <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="">
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



<script type="text/javascript" src="{{ url('/public/backend/assets/js/empleados/showEmpleados.js') }}"></script>
<script type="text/javascript" src="{{ url('/public/backend/assets/js/empleados/actionEmpleados.js') }}"></script>

@endsection


