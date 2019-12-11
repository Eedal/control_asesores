@extends("theme.$theme.layout_auth")

@section('styles')

@endsection

@section('title')
    Registro
@endsection
 
@section('content')

    <div class="row">
        <div class="col-md-8">
        <div class="register-box">
<div class="register-logo">
    <a href="">Rgistrate y ten acceso al<b>CRM</b></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form action="" method="post" name="formcrearcuenta" id="formcrearcuenta">
    {{ csrf_field() }}
     
    <div class="form-group has-feedback">
        <input type="text" class="form-control" name="cedula" placeholder="cedula">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="usuario" placeholder="Usuario">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password-confirm" id="password-confirm" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <select name="codigo_supervisor" id="">
          @foreach($supervisores as $supervisor)
            <option value="{{ $supervisor->id }}">{{ $supervisor->usuario }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="input-group">                  
        <input type="text" class="form-control" name="phone" data-inputmask='"mask": "(999) 999-9999"' data-mask>
        <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
        </div>
        <br>
      
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    

    <a href="/login" class="text-center">Ya tengo una cuenta</a>
  </div>
  </div>


<br>
<br>
        </div>
        
    </div>

@endsection

@section('scripts')
@endsection


