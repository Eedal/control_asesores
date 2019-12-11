@extends("theme.$theme.layout")

@section('styles')

@endsection

@section('title')
    sdadasdas
@endsection

@section('content')

    <div class="row">
        <div class="col-md-8">
        {!! Form::open(['route' => 'adviser.store']) !!}
            @include('user.fragment.user')

        {!! Form::close() !!}
        </div>
        
    </div>

@endsection

@section('scripts')
@endsection


