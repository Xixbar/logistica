<?php

namespace App\Http\Controllers;

use App\Nominaciones;
use Illuminate\Http\Request;

class NominacionesController extends Controller
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
        $nominaciones = Nominaciones::all();
        return view('nominaciones.index', compact('nominaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nominaciones.create');
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
            'clienteVendedor' => 'required',
            'clienteComprador' => 'required',
            'numContrato' => 'required',
            'producto' => 'required',
            'eta' => 'required',
            'cutOff' => 'required',
            'naviera' => 'required',
            'motonave' => 'required',
            'viaje' => 'required',
            'booking' => 'required',
            'puerto' => 'required',
            'numContainer' => 'required',
            'tmContainer' => 'required',
            'unidadesContainer' => 'required',
            'toneladas' => 'required',
            'supervision' => 'required',
            'tipoContainer' => 'required',
        ]);

        $nominaciones = new Nominaciones();
        $nominaciones->clienteVendedor = $validatedData['clienteVendedor'];
        $nominaciones->clienteComprador = $validatedData['clienteComprador'];
        $nominaciones->numContrato = $validatedData['numContrato'];
        $nominaciones->producto = $validatedData['producto'];
        $nominaciones->eta = $validatedData['eta'];
        $nominaciones->cutOff = $validatedData['cutOff'];
        $nominaciones->naviera = $validatedData['naviera'];
        $nominaciones->motonave = $validatedData['motonave'];
        $nominaciones->viaje = $validatedData['viaje'];
        $nominaciones->booking = $validatedData['booking'];
        $nominaciones->puerto = $validatedData['puerto'];
        $nominaciones->numContainer = $validatedData['numContainer'];
        $nominaciones->tmContainer = $validatedData['tmContainer'];
        $nominaciones->unidadesContainer = $validatedData['unidadesContainer'];
        $nominaciones->toneladas = $validatedData['toneladas'];
        $nominaciones->supervision = $validatedData['supervision'];
        $nominaciones->tipoContainer = $validatedData['tipoContainer'];
        $nominaciones->instrucciones1 = $validatedData['instrucciones1'];
        $nominaciones->instrucciones2 = $validatedData['instrucciones2'];
        $nominaciones->instrucciones3 = $validatedData['instrucciones3'];
        
        $nominaciones->save(); //Insertar

        $status = 'La nominación ha sido realizada exitosamente.';
        return back()->with(compact('status'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nominaciones  $nominaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Nominaciones $nominaciones)
    {
        return view('nominaciones.show', compact('nominaciones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nominaciones  $nominaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Nominaciones $nominaciones)
    {
        $this->authorize('update', $nominaciones);

        return view('nominaciones.edit', compact('nominaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nominaciones  $nominaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nominaciones $nominaciones)
    {
        $this->authorize('update', $nominaciones);

        $validatedData = $request->validate([
            'clienteVendedor' => 'required',
            'clienteComprador' => 'required',
            'numContrato' => 'required',
            'producto' => 'required',
            'eta' => 'required',
            'cutOff' => 'required',
            'naviera' => 'required',
            'motonave' => 'required',
            'viaje' => 'required',
            'booking' => 'required',
            'puerto' => 'required',
            'numContainer' => 'required',
            'tmContainer' => 'required',
            'unidadesContainer' => 'required',
            'toneladas' => 'required',
            'supervision' => 'required',
            'tipoContainer' => 'required',
        ]);

        $nominaciones->clienteVendedor = $validatedData['clienteVendedor'];
        $nominaciones->clienteComprador = $validatedData['clienteComprador'];
        $nominaciones->numContrato = $validatedData['numContrato'];
        $nominaciones->producto = $validatedData['producto'];
        $nominaciones->eta = $validatedData['eta'];
        $nominaciones->cutOff = $validatedData['cutOff'];
        $nominaciones->naviera = $validatedData['naviera'];
        $nominaciones->motonave = $validatedData['motonave'];
        $nominaciones->viaje = $validatedData['viaje'];
        $nominaciones->booking = $validatedData['booking'];
        $nominaciones->puerto = $validatedData['puerto'];
        $nominaciones->numContainer = $validatedData['numContainer'];
        $nominaciones->tmContainer = $validatedData['tmContainer'];
        $nominaciones->unidadesContainer = $validatedData['unidadesContainer'];
        $nominaciones->toneladas = $validatedData['toneladas'];
        $nominaciones->supervision = $validatedData['supervision'];
        $nominaciones->tipoContainer = $validatedData['tipoContainer'];
        $nominaciones->instrucciones1 = $validatedData['instrucciones1'];
        $nominaciones->instrucciones2 = $validatedData['instrucciones2'];
        $nominaciones->instrucciones3 = $validatedData['instrucciones3'];
        
        $nominaciones->save(); //Actualizar

        $status = 'La nominación ha sido actualizada exitosamente.';
        return back()->with(compact('status'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nominaciones  $nominaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nominaciones $nominaciones)
    {
        //
    }
}
