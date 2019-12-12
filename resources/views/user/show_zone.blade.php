@extends("theme.$theme.layout")

@section('styles')

@endsection

@section('title')
    Ver zona
@endsection

@section('content')

<div class="row">

    <div class="col-sm-8">
    <h2>{{ $zona->name }}</h2>

    <a href="{{ url('zonas') }}" class="btn btn-success pull-right">Listado</a>
        <a href="{{ route('zonas.edit', $zona->id)  }}" class="btn btn-success pull-right">Editar</a>
             
        <div class="row container">


        
        </div>
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-tittle">Información de zona</h3>
            </div>
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Nombre</strong>

              <p class="text-muted">
              {{ $zona->name }}
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Departamento</strong>

              <p class="text-muted">{{ $zona->department }}</p>

              <hr>
              
              <strong><i class="fa fa-map-marker margin-r-5"></i> Supervisor</strong>

              <p class="text-muted">{{ $supervisor }}</p>

              <hr>
            </div>
            
          </div>
    </div>
    <div class="col-md-4">
      asdas
    </div>
</div>

@endsection

@section('scripts')
@endsection


