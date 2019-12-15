@extends("theme.$theme.layout")

@section('styles')

@endsection

@section('title')
    Cargar archivos
@endsection

@section('content')

    <div class="row">

    <form action="{{ route('rols.import.excel') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @if(Session::has('message'))
                <p>{{ Session::get('message') }}</p>
            @endif

            <input type="file" name="file" id="">
            <button>Importar roles</button>
        </form>

        <form action="{{ route('users.import.excel') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @if(Session::has('message'))
                <p>{{ Session::get('message') }}</p>
            @endif

            <input type="file" name="fileUser" id="">
            <button>Importar usuarios</button>
        </form>

        <form action="{{ route('circuits.import.excel') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @if(Session::has('message'))
                <p>{{ Session::get('message') }}</p>
            @endif

            <input type="file" name="fileCircuits" id="">
            <button>Importar circuitos</button>
        </form>

        <form action="{{ route('point_sales.import.excel') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @if(Session::has('message'))
                <p>{{ Session::get('message') }}</p>
            @endif

            <input type="file" name="filePoint_sale" id="">
            <button>Importar r point</button>
        </form>

    </div>

@endsection

@section('scripts')
@endsection


