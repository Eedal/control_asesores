@extends("theme.$theme.layout")

@section('styles')

@endsection

@section('title')
    sdadasdas
@endsection

@section('content')

<div class="row">

    <div class="col-sm-8">
        <div class="row container">

        <h2>{{ $usuario->nombre }}</h2>

        <a href="" class="btn btn-success pull-right">Listado</a>
        <a href="" class="btn btn-success pull-right">Editar</a>
            
        </div>
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Usuario: <strong>{{ $usuario->usuario }}</strong> </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Cédula</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{ $usuario->cedula }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{ $usuario->email }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Phone</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{ $usuario->phone }}">
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
@endsection


