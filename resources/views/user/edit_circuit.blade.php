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
              <h3 class="box-title">Editar circuito</h3>
              <a href="{{ url('circuito') }}" class="btn btn-default pull-right">Volver</a>

            </div>
        <form action="{{ route('circuito.update', $circuito->id) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
              <div class="box-body">
            
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter email" value="{{ $circuito->name }}" >
                </div>
                
                <div class="form-group">
                    <select name="asesor_pda" id="">
                        @if($asesor_pda != "No tiene")
                            @foreach($asesores_pda as $ase_pda)
                                @if( $ase_pda->nombre == $asesor_pda)
                                    <option value="{{ $ase_pda->id }}" selected>{{ $ase_pda->nombre }}</option>
                                @else
                                    <option value="{{ $ase_pda->id }}" >{{ $ase_pda->nombre }}</option>

                                @endif

                            @endforeach
                        @else
                            <option value="" selected>---------------</option>

                            @foreach($asesores_pda as $ase_pda)
                            <option value="{{ $ase_pda->id }}">{{ $ase_pda->nombre }}</option>

                            @endforeach
                        @endif
                        
                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="asesor_pdv">Asesor pdv</label>
                    <select name="asesor_pdv" id="">
                    @if($asesor_pdv != "No tiene")
                        
                        @foreach($asesores_pdv as $ase_pdv) 
                            @if($ase_pdv->nombre == $asesor_pdv)
                                <option value="{{ $ase_pdv->id }}" selected>{{ $ase_pdv->nombre }}</option>
                            @else
                                <option value="{{ $ase_pdv->id }}">{{ $ase_pdv->nombre }}</option>

                            @endif
                        @endforeach
                    @else
                    <option value="" selected>---------------</option>

                    @foreach($asesores_pdv as $ase_pdv)
                    <option value="{{ $ase_pdv->id }}">{{ $ase_pdv->nombre }}</option>

                    @endforeach
                    @endif

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


