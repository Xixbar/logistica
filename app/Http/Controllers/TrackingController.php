<?php

namespace App\Http\Controllers;

use App\Tracking;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tracking.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'evento' => 'required',
            'numNominacion' => 'required',
            'toneladasNominadas  ' => 'required',
            'almacenDestino' => 'required',
            'numContainer' => 'required',
            'cantidad' => 'required',
        ]);

        $tracking = new Tracking();
        $tracking->evento = $validatedData['evento'];
        $tracking->numNominacion = $validatedData['numNominacion'];
        $tracking->toneladasNominadas  = $validatedData['toneladasNominadas '];
        $tracking->almacenDestino = $validatedData['almacenDestino'];
        $tracking->numContainer = $validatedData['numContainer'];
        $tracking->cantidad = $validatedData['cantidad'];
        
        $tracking->save(); //Insertar

        $status = 'El evento ha sido añadido exitosamente.';
        return back()->with(compact('status'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function show(Tracking $tracking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function edit(Tracking $tracking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tracking $tracking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tracking $tracking)
    {
        //
    }
}
