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
            'clienteVendedor' => 'required|min:11|max:11|exists:users,nit',
            'clienteComprador' => 'required|min:11|max:11|exists:users,nit',
            'numContrato' => 'required|exists:contratos,id',
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
            'instrucciones1' => 'min:10|max:300|nullable',
            'instrucciones2' => 'min:10|max:300|nullable',
            'instrucciones3' => 'min:10|max:300|nullable',
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
        if(isset($validatedData["instrucciones1"])){
            $nominaciones->instrucciones1 = $validatedData['instrucciones1'];
        } else{
            $nominaciones->instrucciones1 = NULL;
        } 
        if(isset($validatedData["instrucciones2"])){
            $nominaciones->instrucciones2 = $validatedData['instrucciones2'];
        } else{
            $nominaciones->instrucciones2 = NULL;
        } 
        if(isset($validatedData["instrucciones3"])){
            $nominaciones->instrucciones3 = $validatedData['instrucciones3'];
        } else{
            $nominaciones->instrucciones3 = NULL;
        } 

        $nominaciones->save(); //Insertar

        $status = 'La nominación ha sido realizada exitosamente.';
        return redirect(url('nominaciones'))->with(compact('status'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nominaciones  $nominaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Nominaciones $nominacion)
    {
        return view('nominaciones.show', compact('nominacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nominaciones  $nominaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Nominaciones $nominacion)
    {
       //$this->authorize('update', $nominacion);

        return view('nominaciones.edit', compact('nominacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nominaciones  $nominaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nominaciones $nominacion)
    {
        //$this->authorize('update', $nominacion);

        $validatedData = $request->validate([
            'clienteVendedor' => 'required|min:11|max:11|exists:users,nit',
            'clienteComprador' => 'required|min:11|max:11|exists:users,nit',
            'numContrato' => 'required|exists:contratos,id',
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
            'instrucciones1' => 'min:10|max:300|nullable',
            'instrucciones2' => 'min:10|max:300|nullable',
            'instrucciones3' => 'min:10|max:300|nullable',
            'observacion' => 'min:8|required|string',
        ]);

        $nominacion->clienteVendedor = $validatedData['clienteVendedor'];
        $nominacion->clienteComprador = $validatedData['clienteComprador'];
        $nominacion->numContrato = $validatedData['numContrato'];
        $nominacion->producto = $validatedData['producto'];
        $nominacion->eta = $validatedData['eta'];
        $nominacion->cutOff = $validatedData['cutOff'];
        $nominacion->naviera = $validatedData['naviera'];
        $nominacion->motonave = $validatedData['motonave'];
        $nominacion->viaje = $validatedData['viaje'];
        $nominacion->booking = $validatedData['booking'];
        $nominacion->puerto = $validatedData['puerto'];
        $nominacion->numContainer = $validatedData['numContainer'];
        $nominacion->tmContainer = $validatedData['tmContainer'];
        $nominacion->unidadesContainer = $validatedData['unidadesContainer'];
        $nominacion->toneladas = $validatedData['toneladas'];
        $nominacion->supervision = $validatedData['supervision'];
        $nominacion->tipoContainer = $validatedData['tipoContainer'];
        if(isset($validatedData["instrucciones1"])){
            $nominacion->instrucciones1 = $validatedData['instrucciones1'];
        } else{
            $nominacion->instrucciones1 = NULL;
        } 
        if(isset($validatedData["instrucciones2"])){
            $nominacion->instrucciones2 = $validatedData['instrucciones2'];
        } else{
            $nominacion->instrucciones2 = NULL;
        } 
        if(isset($validatedData["instrucciones3"])){
            $nominacion->instrucciones3 = $validatedData['instrucciones3'];
        } else{
            $nominacion->instrucciones3 = NULL;
        } 
        $nominacion->observacion = $validatedData['observacion'];

        $nominacion->save(); //Actualizar

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
