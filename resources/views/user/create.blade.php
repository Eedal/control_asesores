@extends("theme.$theme.layout")

@section('styles')

@endsection

@section('title')
    sdadasdas
@endsection

@section('content')

    <div class="row">
        <div class="col-md-8">
        {!! Form::open(['route' => 'zones.create']) !!}
            @include('user.fragment.form')

        {!! Form::close() !!}
        </div>
        
    </div>

@endsection

@section('scripts')
@endsection


