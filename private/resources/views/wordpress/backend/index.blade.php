@extends('wordpress.backend.wp-admin')
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mt-5">


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 id="usuariosField"></h3>

                <p>Number of employees</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{url('admin/empleados')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3 class="d-flex" ><p id="conexionesField" style="font-size: 2.2rem;font-weight: 700;margin: 0 0 10px 0;padding: 0;white-space: nowrap;"></p><button type="button" class="btn btn-tool btnReloadConec" ><i class="fas fa-redo-alt"></i></button></h3>
                <p>Total connections</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{url('admin/conexiones')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          
          <!-- ./col -->
          
          <div class="col-lg-4 col-12">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3 id="puntosField"></h3>

                <p>Points Access</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{url('admin/puntoAcceso')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
          
          
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
          

           <!--CONEXIONES POR MESES CON AJAX-->
           
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title d-flex align-items-center"><i class="fas fa-chart-bar fa-lg"></i>&nbspConnections by month</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool btnReload" ><i class="fas fa-redo-alt"></i></button>
                  
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                  <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>                         
                   </div>
              </div>
              <!-- /.card-body -->
            </div>
            
            <!--FIN CONEXIONES POR MESES CON AJAX-->
        
            
            

          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
    
            <!--CONEXIONES POR UBICACION-->
            
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Connections by ubication</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool btnReloadCircle" ><i class="fas fa-redo-alt"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="donutChart" style="min-height: 300px; width: 612px;height: 300px;min-width: 300px;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
            <!--FIN CONEXIONES POR UBICACION-->
          </section>
          <!-- right col -->
        </div>
        
        <div class="row">
          <section class="col-lg-12 connectedSortable">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-map-marker"></i> Acces Point</h3>
                 <div class="card-tools">
                    <button type="button" class="btn btn-tool btnReloadCircle" ><i class="fas fa-redo-alt"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                  </div>
              </div>
              <div class="card-body">
                <div id="map"></div>
              </div>
            </div>  
            
          </section>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    

  </div>
  <!-- /.content-wrapper -->

  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>

<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--<script src="dist/js/pages/dashboard.js"></script>-->
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
    
<script src="assets/js/graficos/circle.js"></script>
<script src="assets/js/graficos/barras.js"></script>
<script src="assets/js/graficos/datos.js"></script>
<script src="assets/js/mapa/mapaPuntos.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7T4ZQZYAhIF2AuZRJTmxp7a9SVTWVmyQ&callback=iniciaMapa" async defer></script>
@endsection


<style type="text/css">
  .card-title {
    margin: .45rem 0px!important;
}
</style>