@extends("theme.$theme.layout")

@section('styles')

@endsection

@section('title')
    Ver usuario
@endsection

@section('content')

<div class="row">

    <div class="col-sm-8">
    <h2>{{ $usuario->nombre }}</h2>

    <a href="{{ url('usuarios') }}" class="btn btn-success pull-right">Listado</a>
        <a href="{{ url('/usuario/'.$usuario->cedula.'/edit') }}" class="btn btn-success pull-right">Editar</a>
             
        <div class="row container">


        
        </div>
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-tittle">Información personal de usuario</h3>
            </div>
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Nombre</strong>

              <p class="text-muted">
              {{ $usuario->nombre }}
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Cédula</strong>

              <p class="text-muted">{{ $usuario->cedula }}</p>

              <hr>
              <strong><i class="fa fa-map-marker margin-r-5"></i> Phone</strong>

              <p class="text-muted">{{ $usuario->phone }}</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Rol</strong>

              <p>
                <span class="label label-info">{{ $usuario->rol->nombre }}</span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Email</strong>

              <p>{{$usuario->email}}</p>
              <hr>
              <strong><i class="fa fa-map-marker margin-r-5"></i> Supervisor</strong>

              <p class="text-muted">{{ $supervisor }}</p>

              <hr>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <!--<form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Cédula</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{ $usuario->cedula }}" readonly="readonly">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{ $usuario->email }}" readonly="readonly">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Phone</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{ $usuario->phone }}" readonly="readonly">
                </div>
                
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Editar</button>
              </div>
            </form>-->
          </div>
    </div>
    <div class="col-md-4">
      asdas
    </div>
</div>

@endsection

@section('scripts')
@endsection


