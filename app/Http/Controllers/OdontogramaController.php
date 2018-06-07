<?php

namespace App\Http\Controllers;

use App\Odontograma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OdontogramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dientes =[
            'Tercer Molar Izquierdo','Segundo Molar Izquierdo', 'Primer Molar Izquierdo','Segundo Premolar Izquierdo','Primer Premolar Izquierdo', 'Canino Izquierdo', 'Incisivo Lateral Izquierdo', 'Incisivo Central Izquierdo',
            'Incisivo Central Derecho','Incisivo Lateral Derecho','Canino Derecho','Primer Premolar Derecho','Segundo Premolar Derecho', 'Primer Molar Derecho','Segundo Molar Derecho','Tercer Molar Derecho'
        ];
        $user_id = Auth::user()->id;
        $odont = Odontograma::where('id_usuario',$user_id)->first();

        return view('paciente/odontograma')->with('dientes',$dientes)->with('odont',$odont);
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
     * @param  \App\Odontograma  $odontograma
     * @return \Illuminate\Http\Response
     */
    public function show(Odontograma $odontograma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Odontograma  $odontograma
     * @return \Illuminate\Http\Response
     */
    public function edit(Odontograma $odontograma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Odontograma  $odontograma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Odontograma $odontograma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Odontograma  $odontograma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Odontograma $odontograma)
    {
        //
    }
}
