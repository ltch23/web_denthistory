<?php

namespace App\Http\Controllers;

use App\Odontograma;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $perfil = User::where('id',$user_id)->first();
        #return $perfil;
        return view('paciente/perfil')->with('perfil',$perfil);
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

    }

       /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request   
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $user_id = Auth::user()->id;
        $user = User::where('id', $user_id )->first();
        $user->nombres = $request['nombre'];
        $user->apellidos = $request['apellidos'];
        $user->correo = $request['correo'];
        $user->sexo = $request['sexo'];
        $user->telefono = $request['telefono'];
        $user->hereditarios = $request['hereditarios'];
        $user->alergias = $request['alergias'];
        $user->dni = $request['dni'];

        $user->save();

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registrar(Request $request)
    {
        $id = User::create([
            'tipo'=>$request['tipo'],
            'nombres'=>$request['nombre'],
            'apellidos'=>$request['apellidos'],
            'correo'=>$request['email'],
            'password'=>bcrypt($request['password1']),
        ])->id;
        if($request['tipo'].equalTo(0)){
            $id_o = Odontograma::create([
                'id_usuario'=>$id,
            ])->id;
            $user = User::where('id', $id )->first();
            $user->id_odontograma = $id_o;
            $user->save();
        }
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $email =$request['correo'];
        $password= $request['contrasenia'];
        error_log($email);
        error_log($password);
        $usuario=User::where('correo', $email)->first();

        //if($usuario!=NULL and $usuario->contrasenia==bcrypt($password)){
         if(Auth::attempt(['correo' => $email, 'password' => $password])){
            if ($usuario->tipo == false)
                return redirect('/inicio');
            else
                return redirect('/inicio_doc');
         }
        //return "no";
        return redirect()->back();
        //return redirect()->back();
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
}
