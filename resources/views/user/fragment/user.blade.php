<div class="form-group">
    {!! Form::label('rol', 'Cargo') !!}
    {!! Form::select('rol', ['1' => 'Asesor', '2' => 'Supervisor'], ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('rol', 'Cargo') !!}
    {!! Form::select('rol', ['1' => 'Asesor', '2' => 'Supervisor'], ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('name', 'Nombre de la zona') !!}
    {!! Form::number('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>
