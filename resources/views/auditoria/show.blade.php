@extends("theme.$theme.layout")

@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">

    

@endsection
@section('content')
<div class="row"> 
    <div class="col-sm-8">
    <h2>{{ $auditoria->id }}</h2>
        
        <a href="{{ route('auditoria.edit', $auditoria->id) }}" class="btn btn-success pull-right">Listado</a>
        <a href="{{ route('auditoria.edit', $auditoria->id) }}" class="btn btn-success pull-right">Editar</a>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>            
                <tr>
                    @foreach($CAMPOS_BASICOS as $key => $value)            
                        <th width="20"><?php echo $value; ?></th>
                    @endforeach
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{ $auditoria->id }}</td>
                        <td>
                            @if($auditoria->sticker == 1)    
                                Si
                            @elseif($auditoria->sticker == 0)
                                No
                            @endif
                        </td>
                        <td>
                            @if($auditoria->cumple_frecuencia == 1)    
                                Si
                            @elseif($auditoria->cumple_frecuencia == 0)
                                No
                            @endif
                        </td>
                        <td>
                            @if($auditoria->dms == 1)    
                                Si
                            @elseif($auditoria->dms == 0)
                                No
                            @endif
                        </td>
                        <td>
                            @if($auditoria->producto_recarga_mayor_venta == 0)    
                                Tigo
                            @elseif($auditoria->producto_recarga_mayor_venta == 1)
                                Claro
                            @elseif($auditoria->producto_recarga_mayor_venta == 2)
                                Movistar
                            @elseif($auditoria->producto_recarga_mayor_venta == 3)
                                Otros
                            @endif
                        </td>
                        <td>
                            @if($auditoria->producto_chip_mayor_venta == 0)    
                                Tigo
                            @elseif($auditoria->producto_chip_mayor_venta == 1)
                                Claro
                            @elseif($auditoria->producto_chip_mayor_venta == 2)
                                Movistar
                            @elseif($auditoria->producto_chip_mayor_venta == 3)
                                Otros
                            @endif
                        </td>
                        <td>
                            @if($auditoria->producto_portabilidad_mayor_venta == 0)    
                                Tigo
                            @elseif($auditoria->producto_portabilidad_mayor_venta == 1)
                                Claro
                            @elseif($auditoria->producto_portabilidad_mayor_venta == 2)
                                Movistar
                            @elseif($auditoria->producto_portabilidad_mayor_venta == 3)
                                Otros
                            @endif
                        </td>
                        <td>
                            <a href="{{ url('/auditoria/'.$auditoria->id.'/edit') }}" class="btn btn-primary btn-sm">Detalles</a>


                        </td>
                    </tr>
            </tbody>            
        </table>
    </div>
    <div class="col-sm-4">
        Mensaje
    </div>
    
</div>
<div class="row">
    <div class="col-md-6">
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>

    

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection