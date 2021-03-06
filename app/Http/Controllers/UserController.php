<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\User;
use App\Zone;
use App\Rol;
use App\Circuit;
use Exception;
use DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$array = array("CBHX2","CBHO2","CBHW1","CBHO4","CBHO1","CBHC1", "CBHX1","CBHF1","CBHO3");
        $id = array();
        $circuitos = Circuit::all();
        foreach($array as $circuito){
            echo Circuit::where('name', $circuito)->first()->id . "<br>";
            array_push($id, Circuit::where('name', $circuito)->first()->id);
        }

        foreach($id as $i){
            echo $i."<br>";
        }*/
        
        //dd($array);

        //$usuario = User::find(5);
        //$usuario->circuits()->attach(1); //para crear una relacion de el usuario con el circuitro
        //$usuario->circuits()->sync(2);
        //dd($usuario->circuits);
        //$circuito = Circuit::find(1);

        //dd($circuito->users);
        return view('user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estado_inicial_pendiente = 1;
        $usuario = new User;
        $usuario->cedula = $request->cedula;

        $usuario->usuario = $request->usuario;
        $usuario->password = $request->password;
        $usuario->codigo_supervisor = $request->codigo_supervisor;
        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        $usuario->phone = $request->phone;
        $usuario->rol_id = $estado_inicial_pendiente;
        $usuario->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function importUsersExcel(Request $request)
    {
        $file = $request->file('fileUser');
        Excel::import(new UsersImport, $file);

        return back()->with('message', 'Importacion de usuarios completada ');
    }

    public function crear_zonas(){
        //hacer la creacion de usuarios, circuitos, zonas
        return view('user.create');
    }

    public function adviser_store(){
        
    }

    public function register_user(){
        $id_de_los_supervisores = 3;
        $supervisores = User::where('rol_id', $id_de_los_supervisores)->get();
        //return $supervisores;
        return view('auth.register', compact('supervisores'));
    }



    //Toda la parte del administrador

    public function show_zones(){
        $zonas = Zone::all();
        $CAMPOS_ZONA = array(
            'id' => 'id',
            'name' => 'name',
            'department' => 'department',
        );

        return view('user.show_zones', compact('zonas', 'CAMPOS_ZONA'));
    }

    public function show_users(){
        //return "hola";
        /*$usuarios = User::all();
        $roles = [];
        
        foreach($usuarios as $usuario){
            array_push($roles,$usuario->rol->nombre);
        }*/
        
        


        $usuarios =DB::table('users')
        ->join('rols', 'users.rol_id', '=', 'rols.id')
        ->select('users.cedula', 'users.usuario', 'users.nombre', 'users.phone', 'rols.nombre as Rol')
        ->get();

        //dd( $user);
        $CAMPOS_USUARIOS = array(
            'cedula' => 'cedula',
            'usuario' => 'usuario',
            'nombre' => 'nombre',
            'phone' => 'phone',
            'rol' => 'Rol', 
        );
        return view('user.show_users', compact('usuarios', 'roles', 'CAMPOS_USUARIOS'));

    }

    public function show_user($cedula){
        $usuario = User::where('cedula', $cedula)->first();
        try{
            $supervisor = User::where('cedula', $usuario->codigo_supervisor)->first()->nombre;
        }catch(Exception $e){
            $supervisor = "No tiene";
        }
        
        return view('user.show_user', compact(['usuario', 'supervisor']));
    }

    public function edit_user($cedula){

        $usuario = User::where('cedula', $cedula)->first();
        $roles = Rol::all();
        return view('user.edit_user', compact(['usuario', 'roles']));
    }

    public function update_user(Request $request, $cedula){
        
        $usuario = User::where('cedula', $cedula)->first();
        //return $request->rol;
        //$rol = Rol::where('nombre', $request->rol)->first();
        //return $request->cedula;
        //return $request->rol;
        $usuario->usuario = $request->nombre;
        
        $usuario->nombre = $request->nombre;

        $usuario->cedula = $request->cedula;
        $usuario->phone = $request->phone;
        $usuario->rol_id = $request->rol;
        $usuario->email = $request->email;

        $usuario->save();
        return redirect('/usuarios');

    }
}
