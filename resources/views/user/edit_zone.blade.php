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
              <h3 class="box-title">Editar zona</h3>
              <a href="{{ url('zonas') }}" class="btn btn-default pull-right">Volver</a>

            </div>
        <form action="{{ route('zone.update', $zona->id) }}" role="form" method="post">
            {{ csrf_field() }}

              <div class="box-body">
            
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter email" value="{{ $zona->name }}" >
                </div>
                
                <div class="form-group">
                    <select name="department" id="">
                        @if($zona->department == "magdalena")
                            <option value="magdalena" selected>Magdalena</option>
                            <option value="atlantico">Atlantico</option>

                        @elseif($zona->department == "atlantico")
                            <option value="magdalena">Magdalena</option>
                            <option value="atlantico" selected>Atlantico</option>
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <select name="user_id" id="">
                        @foreach($supervisores as $supervisor) 
                            @if($supervisor->id == $zona->user_id)
                                <option value="{{ $supervisor->id }}" selected>{{ $supervisor->nombre }}</option>
                            @else
                                <option value="{{ $supervisor->id }}">{{ $supervisor->nombre }}</option>
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


