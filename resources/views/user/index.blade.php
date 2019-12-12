@extends("theme.$theme.layout")

@section('styles')

@endsection

@section('title')
    Inicio
@endsection

@section('content')
    <div class="row">
 
    <a href="{{ url('/crear_zonas') }}" class="btn btn-success">Nueva zona</a>


    </div>

@endsection
 
@section('scripts')
@endsection

