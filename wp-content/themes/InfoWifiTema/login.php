<?php
/*

    Template Name: Login

*/
?>

<?php
get_header();
?>



<div class="login-box">
  <div class="login-logo">
    <a href="{{url('register')}}"><b>Proyecto</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">{{ __('Acceder') }}</p>

      <form action="{{ route('login') }}" method="post">

        <div class="input-group mb-3">
            
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __('Correo eléctronico') }}" required autocomplete="email" autofocus>

       
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          
          <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password"  placeholder="{{ __('Contraseña') }}" required autocomplete="current-password">

          
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-12">
            <div class="icheck-primary">
              <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="remember">
                {{ __('Recordar contraseña') }}
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-12 center-pers">
            <button type="submit" class="btn btn-primary btn-block btn-general">
                {{ __('Iniciar sesion') }}
            </button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->


    </div>
    <!-- /.login-card-body -->
  </div>
</div>


<!-- Footer -->
<?php
get_footer();
?>