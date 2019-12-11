<?php
use App\User;
//echo(User::all());
$departamentos = array(
    'magdalena' => 'Magdalena',
    'atlantico' => 'Atlantico',
);

/*$i = 0;
foreach($departamentos as $key => $value){
    echo $value . "<br>";
}
*/


//$supervisores = User::where('rol_id', 3)->get()->nombre;
/*print_r( User::where('rol_id', 3)->pluck('nombre')->toArray());
$a =User::where('rol_id', 3)->pluck('nombre')->toArray();
$b =User::where('rol_id', 3)->pluck('id')->toArray();

print_r( User::where('rol_id', 3)->pluck('id')->toArray());
echo $a[0];
$c =array();
for($i =0 ; $i<count($a); $i++){
    array_push($c, $a[$i]);
}

$resultado = $a[0];*/
?>

<div class="form-group">
    {!! Form::label('department', 'Departamento de la zona') !!}
    {!! Form::select('department', $departamentos , ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('name', 'Nombre de la zona') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>
