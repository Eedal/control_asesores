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
        <h2>Listado de zonas</h2>
        <a href="{{ route('zonas.create') }}" class="btn btn-success pull-right">Nueva zona</a>
        

        <br>
        </br>
        @include('auditoria.fragment.info')
        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
        
            <thead>            
                <tr>
                    @foreach($CAMPOS_ZONA as $key => $value)            
                        <th width="20"><?php echo $value; ?></th>
                    @endforeach
                    <th width="20">Acciones</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($zonas as $zona)
                    <tr>
                        <td>{{ $zona->id }}</td>
                        <td>{{ $zona->name }}</td>
                        <td>{{ $zona->department }}</td>

                        <td>
                            <div class="row">
                                <div class="col-md-4">
                                <a href="" class="btn btn-link"><i class="fa fa-eye"></i></a>

                                </div>
                                <div class="col-md-4">
                                <form action="" method="POST">
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