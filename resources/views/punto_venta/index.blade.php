@extends("theme.$theme.layout")

@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    




@endsection
@section('content')
<div class="row"> 
    <div class="col-sm-12">
        <h2>Listado de puntos</h2>
        <a href="{{ url('/auditoria/create') }}" class="btn btn-success pull-right">Nueva auditoria</a>
        <a href="{{ url('/auditoria.excel') }}" class="btn btn-success pull-right">Excel</a>

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


        <form action="{{ route('point_sales.import.excel') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @if(Session::has('message'))
                <p>{{ Session::get('message') }}</p>
            @endif

            <input type="file" name="filePoint_sale" id="">
            <button>Importar r point</button>
        </form>

        

        <br>
        </br>
        @include('auditoria.fragment.info')
        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        
            <thead>            
                <tr>
                    @foreach($CAMPOS_BASICOS as $key => $value)            
                        <th width="20"><?php echo $value; ?></th>
                    @endforeach
                    <th width="20">Acciones</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($puntos as $punto)
                    <tr>
                        <td>{{ $punto->id }}</td>
                        <td>{{ $punto->name }}</td>
                        <td>
                            <div class="row">
                                <div class="col-md-4">
                                <a href="{{ route('punto.show', $punto->id) }}" class="btn btn-link"><i class="fa fa-eye"></i></a>

                                </div>
                                <div class="col-md-4">
                                <form action="{{ route('punto.destroy', $punto->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-link"><i class="fa fa-fw fa-remove"></i></button>

                            </form>
                                </div>
                            </div>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>            
        </table>
    </div>

    
</div>

@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    





    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                responsive: true
            });
            new $.fn.dataTable.FixedHeader( table );
        } );
    </script>
@endsection