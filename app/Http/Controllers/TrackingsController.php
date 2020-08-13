<?php

namespace App\Http\Controllers;

use App\Trackings;
use Illuminate\Http\Request;

class TrackingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trackings = Trackings::all();
        return view('trackings.index', compact('trackings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trackings.create');
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
            'toneladasNominadas' => 'required',
            'almacenDestino' => 'required',
            'placaCabezote' => 'required',
            'numContainer' => 'required',
            'cantidad' => 'required',
        ]);

        $trackings = new Trackings();
        $trackings->evento = $validatedData['evento'];
        $trackings->numNominacion = $validatedData['numNominacion'];
        $trackings->toneladasNominadas  = $validatedData['toneladasNominadas'];
        $trackings->almacenDestino = $validatedData['almacenDestino'];
        $trackings->placaCabezote = $validatedData['placaCabezote'];
        $trackings->numContainer = $validatedData['numContainer'];
        $trackings->cantidad = $validatedData['cantidad'];
        
        $trackings->save(); //Insertar

        $status = 'El evento ha sido añadido exitosamente.';
        return back()->with(compact('status'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trackings  $trackings
     * @return \Illuminate\Http\Response
     */
    public function show(Trackings $trackings)
    {
        return view('trackings.show', compact('trackings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trackings  $trackings
     * @return \Illuminate\Http\Response
     */
    public function edit(Trackings $trackings)
    {
       // $this->authorize('update', $trackings);

        return view('trackings.edit', compact('trackings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trackings  $trackings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trackings $trackings)
    {
        $this->authorize('update', $trackings);

        $validatedData = $request->validate([
            'evento' => 'required',
            'numNominacion' => 'required',
            'toneladasNominadas' => 'required',
            'almacenDestino' => 'required',
            'placaCabezote' => 'required',
            'numContainer' => 'required',
            'cantidad' => 'required',
        ]);

        $trackings->evento = $validatedData['evento'];
        $trackings->numNominacion = $validatedData['numNominacion'];
        $trackings->toneladasNominadas  = $validatedData['toneladasNominadas'];
        $trackings->almacenDestino = $validatedData['almacenDestino'];
        $trackings->placaCabezote = $validatedData['placaCabezote'];
        $trackings->numContainer = $validatedData['numContainer'];
        $trackings->cantidad = $validatedData['cantidad'];
        
        $trackings->save(); //Actualizar

        $status = 'El evento ha sido actualizado exitosamente.';
        return back()->with(compact('status'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trackings  $trackings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trackings $trackings)
    {
        //
    }
}