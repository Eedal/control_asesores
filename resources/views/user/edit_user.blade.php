@extends("theme.$theme.layout")

@section('styles')

@endsection

@section('title')
    sdadasdas
@endsection

@section('content')

    <div class="row">

    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Editar usuario</h3>
              <a href="{{ url('/usuarios') }}" class="btn btn-default pull-right">Volver</a>

            </div>
        <form action="{{ url('/usuario/'.$usuario->cedula) }}" role="form" method="POST">
        {{ csrf_field() }}
              <div class="box-body">
              <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" class="form-control" name="nombre" placeholder="Enter email" value="{{ $usuario->nombre }}" >
                </div> 
                <div class="form-group">
                  <label for="exampleInputEmail1">Cédula</label>
                  <input type="text" class="form-control" name="cedula" placeholder="Enter email" value="{{ $usuario->cedula }}" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Phone</label>
                  <input type="text" class="form-control" name="phone" placeholder="Enter email" value="{{ $usuario->phone }}" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Enter email" value="{{ $usuario->email }}">
                </div>
                <div class="form-group">

                <select name="rol" id="">
                @foreach($roles as $rol) 
                @if($rol->id == $usuario->rol_id)
                <option value="{{ $rol->id }}" selected>{{ $rol->nombre }}</option>
                @else
                <option value="{{ $rol->id }}">{{ $rol->nombre }}</option>

                @endif
                @endforeach
                </select>
</div>
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Editar</button>
              </div>
            </form>
</div>
        </div>

    </div>

@endsection

@section('scripts')
@endsection


