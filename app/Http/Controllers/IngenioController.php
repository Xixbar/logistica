<?php

namespace App\Http\Controllers;

use App\Ingenio;
use Illuminate\Http\Request;

class IngenioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingenios = Ingenio::all();
        return view('ingenios.index', compact('ingenios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingenios.create');
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
            'fecha' => 'required',
            'hora' => 'required',
            'evento' => 'required|min:5',
            'numNominacion' => 'required:exists:nominaciones,id',
            'ingenio' => 'required|min:5',
            'bodega' => 'required|min:5',
            'numContenedor' => 'required|min:5',
            'placaVehiculo' => 'required|min:7|max:7',
            'remolque' => 'required',
            'ccConductor' => 'required|min:10|max:10',
            'nombreConductor' => 'required|min:5',
            'producto' => 'required',
            'umb' => 'required',
            'ccOperadorMC' => 'required|min:10|max:10',
            'nombreOperador' => 'required|min:5',
            'ccEstibadores' => 'required|min:10|max:10',
            'nombreEstibador' => 'required|min:5',
            'cantidadSacos' => 'required',
            'numSello' => 'required',
            'horaInicio' => 'required',
            'horaFin' => 'required',
            'fechaSalida' => 'required',
            'horaSalida' => 'required',
        ]);

        $ingenios = new Ingenio();
        $ingenios->fecha = $validatedData['fecha'];
        $ingenios->hora = $validatedData['hora'];
        $ingenios->evento = $validatedData['evento'];
        $ingenios->numNominacion  = $validatedData['numNominacion'];
        $ingenios->ingenio = $validatedData['ingenio'];
        $ingenios->bodega = $validatedData['bodega'];
        $ingenios->numContenedor = $validatedData['numContenedor'];
        $ingenios->placaVehiculo = $validatedData['placaVehiculo'];
        $ingenios->remolque = $validatedData['remolque'];
        $ingenios->ccConductor = $validatedData['ccConductor'];
        $ingenios->nombreConductor = $validatedData['nombreConductor'];
        $ingenios->producto = $validatedData['producto'];
        $ingenios->umb = $validatedData['umb'];
        $ingenios->ccOperadorMC = $validatedData['ccOperadorMC'];
        $ingenios->nombreOperador = $validatedData['nombreOperador'];
        $ingenios->ccEstibadores = $validatedData['ccEstibadores'];
        $ingenios->nombreEstibador = $validatedData['nombreEstibador'];
        $ingenios->cantidadSacos = $validatedData['cantidadSacos'];
        $ingenios->numSello = $validatedData['numSello'];
        $ingenios->horaInicio = $validatedData['horaInicio'];
        $ingenios->horaFin = $validatedData['horaFin'];
        $ingenios->fechaSalida = $validatedData['fechaSalida'];
        $ingenios->horaSalida = $validatedData['horaSalida'];
        
        $ingenios->save(); //Insertar

        $status = 'La nominación ha sido realizada exitosamente.';
        return redirect(url('ingenios'))->with(compact('status'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ingenio  $ingenio
     * @return \Illuminate\Http\Response
     */
    public function show(Ingenio $ingenio)
    {
        return view('ingenios.show', compact('ingenio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ingenio  $ingenio
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingenio $ingenio)
    {
        //$this->authorize('update', $ingenio);

        return view('ingenios.edit', compact('ingenio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ingenio  $ingenio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingenio $ingenio)
    {
        //$this->authorize('update', $ingenio);

        $validatedData = $request->validate([
            'fecha' => 'required',
            'hora' => 'required',
            'evento' => 'required|min:5',
            'numNominacion' => 'required:exists:nominaciones,id',
            'ingenio' => 'required|min:5',
            'bodega' => 'required|min:5',
            'numContenedor' => 'required|min:5',
            'placaVehiculo' => 'required|min:7|max:7',
            'remolque' => 'required',
            'ccConductor' => 'required|min:10|max:10',
            'nombreConductor' => 'required|min:5',
            'producto' => 'required',
            'umb' => 'required',
            'ccOperadorMC' => 'required|min:10|max:10',
            'nombreOperador' => 'required|min:5',
            'ccEstibadores' => 'required|min:10|max:10',
            'nombreEstibador' => 'required|min:5',
            'cantidadSacos' => 'required',
            'numSello' => 'required',
            'horaInicio' => 'required',
            'horaFin' => 'required',
            'fechaSalida' => 'required',
            'horaSalida' => 'required',
            'observacion' => 'min:8|required|string',
        ]);

        $ingenio->fecha = $validatedData['fecha'];
        $ingenio->hora = $validatedData['hora'];
        $ingenio->evento = $validatedData['evento'];
        $ingenio->numNominacion  = $validatedData['numNominacion'];
        $ingenio->ingenio = $validatedData['ingenio'];
        $ingenio->bodega = $validatedData['bodega'];
        $ingenio->numContenedor = $validatedData['numContenedor'];
        $ingenio->placaVehiculo = $validatedData['placaVehiculo'];
        $ingenio->remolque = $validatedData['remolque'];
        $ingenio->ccConductor = $validatedData['ccConductor'];
        $ingenio->nombreConductor = $validatedData['nombreConductor'];
        $ingenio->producto = $validatedData['producto'];
        $ingenio->umb = $validatedData['umb'];
        $ingenio->ccOperadorMC = $validatedData['ccOperadorMC'];
        $ingenio->nombreOperador = $validatedData['nombreOperador'];
        $ingenio->ccEstibadores = $validatedData['ccEstibadores'];
        $ingenio->nombreEstibador = $validatedData['nombreEstibador'];
        $ingenio->cantidadSacos = $validatedData['cantidadSacos'];
        $ingenio->numSello = $validatedData['numSello'];
        $ingenio->horaInicio = $validatedData['horaInicio'];
        $ingenio->horaFin = $validatedData['horaFin'];
        $ingenio->fechaSalida = $validatedData['fechaSalida'];
        $ingenio->horaSalida = $validatedData['horaSalida'];
        
        $ingenio->save(); //Actualizar

        $status = 'El ingenio ha sido actualizado exitosamente.';
        return back()->with(compact('status'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ingenio  $ingenio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingenio $ingenio)
    {
        //
    }
}
