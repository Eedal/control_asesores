
<div class="form-group">
    {!! Form::label('nombre', 'Nombre de el usuario') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('cedula', 'Cédula') !!}
    {!! Form::text('cedula', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('phone', 'Celular') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('rol', 'Rol') !!}
    {!! Form::select('rol', ['1'=>'pendiente','2'=>'asesor', '3' => 'supervisor', '4' => 'admin'] , ['class' => 'form-control']) !!}

</div>
<div class="form-group">
    {!! Form::label('emai', 'Email') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>