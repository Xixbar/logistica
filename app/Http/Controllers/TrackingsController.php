<?php

namespace App\Http\Controllers;

use App\Trackings;
use Illuminate\Http\Request;

class TrackingsController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
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
            'evento' => 'required|min:5|max:50',
            'numNominacion' => 'required|min:1|exists:nominaciones,id',
            'toneladasNominadas' => 'min:1|nullable',
            'almacenDestino' => 'min:1|nullable',
            'placaCabezote' => 'string|min:7|max:7|nullable',
            'numContainer' => 'string|min:12|max:12|nullable',
            'cantidad' => 'min:1|nullable',
        ]);

        $trackings = new Trackings();
        $trackings->evento = $validatedData['evento'];
        $trackings->numNominacion = $validatedData['numNominacion'];
        if(isset($validatedData["toneladasNominadas"])){
            $trackings->toneladasNominadas = $validatedData['toneladasNominadas'];
        } else{
            $trackings->toneladasNominadas = NULL;
        }
        if(isset($validatedData["almacenDestino"])){
            $trackings->almacenDestino = $validatedData['almacenDestino'];
        } else{
            $trackings->almacenDestino = NULL;
        }
        if(isset($validatedData["placaCabezote"])){
            $trackings->placaCabezote = $validatedData['placaCabezote'];
        } else{
            $trackings->placaCabezote = NULL;
        }
        if(isset($validatedData["numContainer"])){
            $trackings->numContainer = $validatedData['numContainer'];
        } else{
            $trackings->numContainer = NULL;
        }
        if(isset($validatedData["cantidad"])){
            $trackings->cantidad = $validatedData['cantidad'];
        } else{
            $trackings->cantidad = NULL;
        }
        
        
        $trackings->save(); //Insertar

        $status = 'El evento ha sido añadido exitosamente.';
        return redirect(url('trackings'))->with(compact('status'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trackings  $trackings
     * @return \Illuminate\Http\Response
     */
    public function show(Trackings $tracking)
    {
        return view('trackings.show', compact('tracking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trackings  $trackings
     * @return \Illuminate\Http\Response
     */
    public function edit(Trackings $tracking)
    {
        //$this->authorize('update', $tracking);

        return view('trackings.edit', compact('tracking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trackings  $trackings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trackings $tracking)
    {
        //$this->authorize('update', $tracking);

        $validatedData = $request->validate([
            'evento' => 'required|min:5|max:50',
            'numNominacion' => 'required|min:1|exists:nominaciones,id',
            'toneladasNominadas' => 'min:1|nullable',
            'almacenDestino' => 'min:1|nullable',
            'placaCabezote' => 'string|min:7|max:7|nullable',
            'numContainer' => 'string|min:12|max:12|nullable',
            'cantidad' => 'min:1|nullable',
            'observacion' => 'min:8|required|string',
        ]);

        $tracking->evento = $validatedData['evento'];
        $tracking->numNominacion = $validatedData['numNominacion'];
        if(isset($validatedData["toneladasNominadas"])){
            $tracking->toneladasNominadas = $validatedData['toneladasNominadas'];
        } else{
            $tracking->toneladasNominadas = NULL;
        }
        if(isset($validatedData["almacenDestino"])){
            $tracking->almacenDestino = $validatedData['almacenDestino'];
        } else{
            $tracking->almacenDestino = NULL;
        }
        if(isset($validatedData["placaCabezote"])){
            $tracking->placaCabezote = $validatedData['placaCabezote'];
        } else{
            $tracking->placaCabezote = NULL;
        }
        if(isset($validatedData["numContainer"])){
            $tracking->numContainer = $validatedData['numContainer'];
        } else{
            $tracking->numContainer = NULL;
        }
        if(isset($validatedData["cantidad"])){
            $tracking->cantidad = $validatedData['cantidad'];
        } else{
            $tracking->cantidad = NULL;
        }
        $tracking->observacion = $validatedData['observacion'];

        $tracking->save(); //Actualizar

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
