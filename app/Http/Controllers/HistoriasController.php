<?php

namespace App\Http\Controllers;

use App\Historias;
use App\Odontograma;
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
    public function ver($id)
    {
        $num =$id;
        $historia_actual = Historias::where('id',1)->first();
        return view('doctor/agregar')->with('historia',$historia_actual)->with('num',$num);
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
    public function save($num,Request $request)
    {
        $user_id = Auth::user()->id;
        $id=Historias::create([
            'motivo_consulta'=>$request['motivo_consulta'],
            'id_doctor'=>$user_id,
            'fecha'=>$request['fecha'],
            'diagnostico'=>$request['diagnostico'],
            'observaciones'=>$request['observaciones'],
            'tratamiento'=>$request['tratamiento'],
            'radiografia'=>$request['radiografia'],
            'id_usuario'=>$num,
        ])->id;
        //return redirect()->back();
        $historia_actual = Historias::where('id',$id)->first();
        return view('doctor/visagregar')->with('historia',$historia_actual)->with('num',$num);
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
        $dientes =[
            'Tercer Molar Izquierdo','Segundo Molar Izquierdo', 'Primer Molar Izquierdo','Segundo Premolar Izquierdo','Primer Premolar Izquierdo', 'Canino Izquierdo', 'Incisivo Lateral Izquierdo', 'Incisivo Central Izquierdo',
            'Incisivo Central Derecho','Incisivo Lateral Derecho','Canino Derecho','Primer Premolar Derecho','Segundo Premolar Derecho', 'Primer Molar Derecho','Segundo Molar Derecho','Tercer Molar Derecho'
        ];
        $historia = Historias::where('id',$id)->first();
        $doctor = User::where('id',$id_doctor)->first();
        $odonto = Odontograma::where('id',$historia->id_odontograma)->first();
        return view('paciente/detalle')->with('historia',$historia)->with('doctor',$doctor)->with('odont',$odonto)->with('dientes',$dientes);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param  int  $id_doctor
     * @return \Illuminate\Http\Response
     */
    public function historia_pac($id)
    {
        $historias = Historias::where('id_usuario',$id)->get();
        $doctores = array();
        $num =$id;
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
        return view('doctor/historial_paciente')->with('historias',$historias)->with('doctores',$doctores)->with('num',$num);
    }
}
