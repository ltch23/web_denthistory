<?php

namespace App\Http\Controllers;

use App\Autorizaciones;
use App\User;
use Illuminate\Http\Request;

class AutorizacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $doctores = User::where('tipo','1')->get();
        
        $activos = Autorizaciones::where('activo','<>',NULL)->get();
        $mis_doctores = array();
        if($activos!=null){
            $cont=0;
            foreach ($activos as $i) {
                $mis_doc = User::where('id',$i->id_doctor)->first();
                if($mis_doc!=null){
                    $mis_doctores[$cont]= $mis_doc;
                    $cont++;
                }
            }
        }
    
     
         return view('paciente/autorizar')->with('doctores',$doctores)->with('mis_doctores',$mis_doctores);
        //  return view('paciente/autorizar')->with('doctores',$doctores)->with('mis_doctores',$mis_doctores);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Autorizaciones  $autorizaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Autorizaciones $autorizaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Autorizaciones  $autorizaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Autorizaciones $autorizaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Autorizaciones  $autorizaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autorizaciones $autorizaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Autorizaciones  $autorizaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autorizaciones $autorizaciones)
    {
        //
    }
}
    