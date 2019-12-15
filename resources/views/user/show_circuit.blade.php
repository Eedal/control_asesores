@extends("theme.$theme.layout")

@section('styles')

@endsection

@section('title')
    Ver zona
@endsection

@section('content')

<div class="row">

    <div class="col-sm-8">
    <h2>{{ $circuito->name }}</h2>

    <a href="{{ url('circuito') }}" class="btn btn-success pull-right">Listado</a>
        <a href="{{ route('circuito.edit', $circuito->id)  }}" class="btn btn-success pull-right">Editar</a>
             
        <div class="row container">


        
        </div>
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-tittle">Información de circuito</h3>
            </div>
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Nombre</strong>

              <p class="text-muted">
              {{ $circuito->name }}
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Asesosor pda</strong>

              <p class="text-muted">{{ $asesor_pda }}</p>

              <hr>
              
              <strong><i class="fa fa-map-marker margin-r-5"></i> Asesor pdv</strong>

              <p class="text-muted">{{ $asesor_pdv }}</p>

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


