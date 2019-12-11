@extends("theme.$theme.layout")

@section('styles')

@endsection

@section('title')
    sdadasdas
@endsection

@section('content')

    <div class="row">
        
        <div class="col-md-8">
        {!! Form::open(['route' => 'zonas.store']) !!}
            @include('user.fragment.form')
            <div class="form-group">
                <select name="codigo_supervisor" id="">
                    @foreach($supervisores as $supervisor)
                        <option value="{{ $supervisor->id }}">{{ $supervisor->usuario }}</option>
                    @endforeach
                </select>
            </div>
        {!! Form::close() !!}
        </div>
        
    </div>

@endsection

@section('scripts')
@endsection


