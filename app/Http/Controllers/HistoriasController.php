<?php

namespace App\Http\Controllers;

use App\Historias;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $historias = Historias::where('id_usuario',$user_id)->get();
        $doctores = array();
        if($historias!=null){
            $cont=0;
            foreach ($historias as $i) {
                $doc = User::where('id',$i->id_doctor)->first();
                if($doc!=null){
                    $doctores[$cont]= $doc;
                    $cont++;
                }
            }
        }
        return view('paciente/historial')->with('historias',$historias)->with('doctores',$doctores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ver()
    {
        $historia_actual = Historias::where('id',6)->first();
        return view('doctor/agregar')->with('historia',$historia_actual);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        Historias::create([
            'motivo_consulta'=>$request['motivo_consulta'],
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Historias  $historias
     * @return \Illuminate\Http\Response
     */
    public function show(Historias $historias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Historias  $historias
     * @return \Illuminate\Http\Response
     */
    public function edit(Historias $historias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Historias  $historias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Historias $historias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Historias  $historias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Historias $historias)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param  int  $id_doctor
     * @return \Illuminate\Http\Response
     */
    public function verDetalle($id, $id_doctor)
    {
        $historia = Historias::where('id',$id)->first();
        $doctor = User::where('id',$id_doctor)->first();
        return view('paciente/detalle')->with('historia',$historia)->with('doctor',$doctor);
    }
}
